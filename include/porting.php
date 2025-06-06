<div>
<p class="text-center"><a href="#imv7">ImageMagick Version 7</a> • <a href="#hdri">High Dynamic Range Imaging</a> • <a href="#channels">Pixel Channels</a> • <a href="#alpha">Alpha</a> • <a href="#grayscale">Grayscale</a> • <a href="#mask">Masks</a> • <a href="#core">MagickCore API</a> • <a href="#headers">Header Files</a>  • <a href="#deprecate">Deprecated Features Removed</a> • <a href="#cli">Command-line Interface</a> • <a href="#performance">Performance Improvements</a> • <a href="#summary">Version 7 Change Summary</a> </p>

<p class="lead">The design of ImageMagick is an evolutionary process, with the design and implementation efforts serving to influence and guide further progress in the other.  With ImageMagick version 7, we improved the design based on lessons learned from the version 6 implementation.  ImageMagick was originally designed to display RGB images to an X Windows server.  Over time we extended support to RGBA images and then to the CMYK and CMYKA image format.  With ImageMagick version 7, we extend support to arbitrary colorspaces with an arbitrary number of pixel channels.  In addition, ImageMagick 7 stores pixel channels as floats permitting out of band values (e.g. negative) and reduces rounding error.  There are numerous other design enhancements described within.</p>

<p>To support variable pixel channels in the MagickCore API, pixel handling has changed when getting or setting the pixel channels.  You can access channels as an array, <var>pixel[i]</var>, or use an accessor method such as GetPixelRed() or SetPixelRed().  There are some modest changes to the MagickCore and MagickWand API's.   The Magick++ and PerlMagick API's have not changed and matches that of the ImageMagick version 6.</p>

<p>The shell API (command line) of ImageMagick version 7 has undergone
a major overhaul, with specific emphasis on the ability to read 'options' not
only from the command line, but also from scripts, and file streams. This
allows for the use of 'co-processing' programming techniques or performing
image handling using 'daemon/server backends', and even multi-machine
distributed processing.</p>

<p>With the shell API overhaul other improvements were made, including:
better reporting of which option failed, the consolidation and deprecation of
options, and more global use of 'image properties' (more commonly known as
'percent escapes' in option arguments. </p>

<p>ImageMagick version 7 is available now as a <a href="https://imagemagick.org/archive/">production</a> release.</p>

<p>Now that ImageMagick version 7 is released, we continue to support version 6 for a minimum of 10 years.  Support for version 6 is limited primarily to bug fixes and security patches with few enhancements.</p>

<h2><a class="anchor" id="hdri"></a>High Dynamic Range Imaging</h2>
<p>ImageMagick version 7 enables <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic range imaging</a> (HDRI) by default.  HDRI accurately represents the wide range of intensity levels found in real scenes ranging from the brightest direct sunlight to the deepest darkest shadows.  In addition, image processing results are more accurate.  The disadvantage is it requires more memory and may result in slower processing times.  If you see differences in the results of your version 6 command-line with version 7, it is likely due to HDRI.  You may need to add <samp>-clamp</samp> to your command-line to constrain pixels to the 0 .. QuantumRange range, or disable HDRI when you build ImageMagick version 7.  To disable HDRI (recommended for smart phone builds such as iOS or production sites where performance is a premium), simply add <samp>--disable-hdri</samp> to the configure script command line when building ImageMagick.</p>

<h2><a class="anchor" id="channels"></a>Pixel Channels</h2>
<p>A pixel is comprised of one or more color values, or <var>channels</var> (e.g. red pixel channel).</p>
<p>Prior versions of ImageMagick (4-6), support 4 to 5 pixel channels (RGBA or CMYKA).  The first 4 channels are accessed with the PixelPacket data structure.   The structure includes 4 members of type Quantum (typically 16-bits) of red, green, blue, and opacity.  The black channel or colormap indexes are supported by a separate method and structure, IndexPacket.  As an example, here is a code snippet from ImageMagick version 6 that negates the color components (but not the alpha component) of the image pixels:</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>for (y=0; y &lt; (ssize_t) image->rows; y++)
{
  IndexPacket
    *indexes;

  PixelPacket
    *q;

  q=GetCacheViewAuthenticPixels(image_view,0,y,image->columns,1,exception);
  if (q == (PixelPacket *) NULL)
    {
      status=MagickFalse;
      continue;
    }
  indexes=GetCacheViewAuthenticIndexQueue(image_view);
  for (x=0; x &lt; (ssize_t) image->columns; x++)
  {
    if ((channel &amp; RedChannel) != 0)
      q->red=(Quantum) QuantumRange-q->red;
    if ((channel &amp; GreenChannel) != 0)
      q->green=(Quantum) QuantumRange-q->green;
    if ((channel &amp; BlueChannel) != 0)
      q->blue=(Quantum) QuantumRange-q->blue;
    if (((channel &amp; IndexChannel) != 0) &amp;&amp;
        (image->colorspace == CMYKColorspace))
      indexes[x]=(IndexPacket) QuantumRange-indexes[x];
    q++;
  }
  if (SyncCacheViewAuthenticPixels(image_view,exception) == MagickFalse)
    status=MagickFalse;
}</samp></pre>

<p>ImageMagick version 7 supports any number of channels from 1 to 64 (and beyond) and simplifies access with a single method that returns an array of pixel channels of type Quantum.   Source code that compiles against prior versions of ImageMagick requires refactoring to work with ImageMagick version 7.  We illustrate with an example.  Let's naively refactor the version 6 code snippet from above so it works with the ImageMagick version 7 API:</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>for (y=0; y &lt; (ssize_t) image->rows; y++)
{
  Quantum
    *q;

  q=GetCacheViewAuthenticPixels(image_view,0,y,image->columns,1,exception);
  if (q == (Quantum *) NULL)
    {
      status=MagickFalse;
      continue;
    }
  for (x=0; x &lt; (ssize_t) image->columns; x++)
  {
    if ((GetPixelRedTraits(image) &amp; UpdatePixelTrait) != 0)
      SetPixelRed(image,QuantumRange-GetPixelRed(image,q),q);
    if ((GetPixelGreenTraits(image) &amp; UpdatePixelTrait) != 0)
      SetPixelGreen(image,QuantumRange-GetPixelGreen(image,q),q);
    if ((GetPixelBlueTraits(image) &amp; UpdatePixelTrait) != 0)
      SetPixelBlue(image,QuantumRange-GetPixelBlue(image,q),q);
    if ((GetPixelBlackTraits(image) &amp; UpdatePixelTrait) != 0)
      SetPixelBlack(image,QuantumRange-GetPixelBlack(image,q),q);
    if ((GetPixelAlphaTraits(image) &amp; UpdatePixelTrait) != 0)
      SetPixelAlpha(image,QuantumRange-GetPixelAlpha(image,q),q);
    q+=GetPixelChannels(image);
  }
  if (SyncCacheViewAuthenticPixels(image_view,exception) == MagickFalse)
    status=MagickFalse;
}</samp></pre>

<p>Let's do that again but take full advantage of the new variable pixel channel support:</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>for (y=0; y &lt; (ssize_t) image->rows; y++)
{
  Quantum
    *q;

  q=GetCacheViewAuthenticPixels(image_view,0,y,image->columns,1,exception);
  if (q == (Quantum *) NULL)
    {
      status=MagickFalse;
      continue;
    }
  for (x = 0; x &lt; (ssize_t) image->columns; x++)
  {
    ssize_t
      i;

    if (GetPixelWriteMask(image,q) &lt;= (QuantumRange/2))
      {
        q+=GetPixelChannels(image);
        continue;
      }
    for (i=0; i &lt; (ssize_t) GetPixelChannels(image); i++)
    {
      PixelChannel channel = GetPixelChannelChannel(image,i);
      PixelTrait traits = GetPixelChannelTraits(image,channel);
      if ((traits &amp; UpdatePixelTrait) == 0)
        continue;
      q[i]=QuantumRange-q[i];
    }
    q+=GetPixelChannels(image);
  }
  if (SyncCacheViewAuthenticPixels(image_view,exception) == MagickFalse)
    status=MagickFalse;
}</samp></pre>

<p>Note, how we use GetPixelChannels() to advance to the next set of pixel channels.</p>

<p>The colormap indexes and black pixel channel (for the CMYK colorspace) are no longer stored in the index channel, previously accessed with GetAuthenticIndexQueue() and GetCacheViewAuthenticIndexQueue().  Instead they are now a first class pixel channel and accessed as a member of the pixel array (e.g. <samp>pixel[4]</samp>) or with the convenience pixel accessor methods GetPixelIndex(), SetPixelIndex(), GetPixelBlack(), and SetPixelBlack().</p>

<p>As a consequence of using an array structure for variable pixel channels, auto-vectorization compilers have additional opportunities to speed up pixel loops.</p>
<p>The `sync` channel in IMv6 was really a flag instead of a channel.  In IMv7, we instead use a flag: <samp>-define compose:sync=false</samp>.</p>

<h4>Pixel Accessors</h4>
<p>You can access pixel channel as array elements (e.g. <samp>pixel[1]</samp>) or use convenience accessors to get or set pixel channels:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>GetPixela()                  SetPixela()
GetPixelAlpha()              SetPixelAlpha()
GetPixelb()                  SetPixelb()
GetPixelBlack()              SetPixelBlack()
GetPixelBlue()               SetPixelBlue()
GetPixelCb()                 SetPixelCb()
GetPixelCr()                 SetPixelCr()
GetPixelCyan()               SetPixelCyan()
GetPixelGray()               SetPixelGray()
GetPixelGreen()              SetPixelGreen()
GetPixelIndex()              SetPixelIndex()
GetPixelL()                  SetPixelL()
GetPixelMagenta()            SetPixelMagenta()
GetPixelReadMask()           SetPixelReadMask()
GetPixelWriteMask()          SetPixelWriteMask()
GetPixelMetacontentExtent()  SetPixelMetacontentExtent()
GetPixelOpacity()            SetPixelOpacity()
GetPixelRed()                SetPixelRed()
GetPixelYellow()             SetPixelYellow()
GetPixelY()                  SetPixelY()</samp></pre>

<p>You can find these accessors defined in the header file, <samp>MagickCore/pixel-accessor.h</samp></p>

<h4>Pixel Traits</h4>
<p>Each pixel channel includes one or more of these traits:</p>
<dl class="row">
<dt class="col-md-4">Undefined</dt>
<dd class="col-md-8">no traits associated with this pixel channel</dd>
<dt class="col-md-4">Copy</dt>
<dd class="col-md-8">do not update this pixel channel, just copy it</dd>
<dt class="col-md-4">Update</dt>
<dd class="col-md-8">update this pixel channel</dd>
<dt class="col-md-4">Blend</dt>
<dd class="col-md-8">blend this pixel channel with the alpha mask if it's enabled</dd>
</dl>
<p>We provide these methods to set and get pixel traits:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>GetPixelAlphaTraits()    SetPixelAlphaTraits()
GetPixelBlackTraits()    SetPixelBlackTraits()
GetPixelBlueTraits()     SetPixelBlueTraits()
GetPixelCbTraits()       SetPixelCbTraits()
GetPixelChannelTraits()  SetPixelChannelTraits()
GetPixelCrTraits()       SetPixelCrTraits()
GetPixelGrayTraits()     SetPixelGrayTraits()
GetPixelGreenTraits()    SetPixelGreenTraits()
GetPixelIndexTraits()    SetPixelIndexTraits()
GetPixelMagentaTraits()  SetPixelMagentaTraits()
GetPixelRedTraits()      SetPixelRedTraits()
GetPixelYellowTraits()   SetPixelYellowTraits()
GetPixelYTraits()        SetPixelYTraits()</samp></pre>
<p>For convenience you can set the active trait for a set of pixel channels with a channel mask and this method:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>SetImageChannelMask()
</samp></pre>

<p>Previously MagickCore methods had channel analogs, for example, NegateImage() and NegateImageChannels().  The channel analog methods are no longer necessary because the pixel channel traits specify whether to act on a particular pixel channel or whether to blend with the alpha mask.  For example, instead of</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>NegateImageChannel(image,channel);</samp></pre>
<p>we use:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>channel_mask=SetImageChannelMask(image,channel);
NegateImage(image,exception);
(void) SetImageChannelMask(image,channel_mask);</samp></pre>

<h4>Pixel User Channels</h4>
<p>In version 7, we introduce pixel user channels.  Traditionally we utilize 4 channels, red, green, blue, and alpha.   For CMYK we also have a black channel.  User channels are designed to contain whatever additional channel information that makes sense for your application.  Some examples include extra channels in TIFF or PSD images or perhaps you require a channel with infrared information for the pixel.  You can associate traits with the user channels so that when they are acted upon by an image processing algorithm (e.g. blur) the pixels are copied, acted upon by the algorithm, or even blended with the alpha channel if that makes sense.</p>
<h4>Pixel Metacontent</h4>
<p>In version 7, we introduce pixel metacontent.  Metacontent is content about content. So rather than being the content itself, it's something that describes or is associated with the content.  Here the content is a pixel.  The pixel metacontent is for your exclusive use (internally the data is just copied, it is not modified) and is accessed with these MagickCore API methods:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>SetImageMetacontentExtent()
GetImageMetacontentExtent()
GetVirtualMetacontent()
GetAuthenticMetacontent()
GetCacheViewAuthenticMetacontent()
GetCacheViewVirtualMetacontent()</samp></pre>

<h2><a class="anchor" id="alpha"></a>Alpha</h2>
<p>We support alpha now, previously opacity.  With alpha, a value of <samp>0</samp> means that the pixel does not have any coverage information and is transparent; i.e. there was no color contribution from any geometry because the geometry did not overlap this pixel. A value of <samp>QuantumRange</samp> means that the pixel is opaque because the geometry completely overlapped the pixel. As a consequence, in version 7, the PixelInfo structure member alpha has replaced the previous opacity member.  Another consequence is the alpha part of an sRGB value in hexadecimal notation is now reversed (e.g. #0000 is fully transparent).</p>
<h2><a class="anchor" id="colorspace"></a>Colorspace</h2>
<p>The <samp>Rec601Luma</samp> and <samp>Rec709Luma</samp> colorspaces are no longer supported.  Instead, specify the <samp>gray</samp> colorspace and choose from these intensity options:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>Rec601Luma
Rec601Luminance
Rec709Luma
Rec709Luminance</samp></pre>
<p>For example,</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick myImage.png -intensity Rec709Luminance -colorspace gray myImage.jpg</samp></pre>

<h2><a class="anchor" id="grayscale"></a>Grayscale</h2>
<p>Previously, grayscale images were Rec601Luminance and consumed 4 channels: red, green, blue, and alpha.  With version 7, grayscale consumes only 1 channel requiring far less resources as a result.</p>

<h2><a class="anchor" id="mask"></a>Masks</h2>
<p>Version 7 supports masks for most image operators.  White pixels in a read mask ignores corresponding pixel in an image whereas white pixels in a write mask protects the corresponding pixel in the image.  From the command-line, you can associate a mask with an image with the <samp>-read-mask</samp> and <samp>-write-mask</samp> options.  This polarity matches the masks in version 6 of ImageMagick for ease of porting your workflow.  For convenience, we continue to support the <samp>-mask</samp> option in version 7 to match the behavior of version 6.</p>
<p>In this example, we compute the distortion of a masked reconstructed image:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>compare -metric rmse -read-mask hat_mask.png hat.png wizard.png difference.png</samp></pre>
<p>Here we protect certain pixels from change:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick rose: -write-mask rose_bg_mask.png -modulate 110,100,33.3  +write-mask rose_blue.png</samp></pre>

<p>A mask associated with an image persists until it is modified or removed.  This may produce unexpected results for complex command-lines.  Here we only want to clip when applying the alpha option, not the resize:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary">
magick -density 300 -colorspace srgb image.eps -alpha transparent -clip -alpha opaque +clip -resize 1000x1000 -strip image.png
</pre>

<h2><a class="anchor" id="core"></a>MagickCore API</h2>
<p>Here are a list of changes to the MagickCore API:</p>
<ul>
<li>Almost all image processing algorithms are now channel aware.</li>
<li>The MagickCore API adds an <samp>ExceptionInfo</samp> argument to those methods that lacked it in version 6, e.g. <samp>NegateImage(image,MagickTrue,exception)</samp></li>
<li>All method channel analogs have been removed (e.g. BlurImageChannel()), they are no longer necessary, use pixel traits instead.</li>
<li>Public and private API calls are now declared with the GCC visibility attribute.  The MagickCore and MagickWand dynamic libraries now only export public struct and function declarations.</li>
<li>The InterpolatePixelMethod enum is now PixelInterpolateMethod.</li>
<li>The IntegerPixel storage type is removed (use LongPixel instead) and LongLongPixel is added</li>
<li>Image signatures have changed to account for variable pixel channels.</li>
<li>All color packet structures, PixelPacket, LongPacket, and DoublePacket, are consolidated to a single color structure, PixelInfo.</li>
<li>The ChannelMoments structure member <samp>I</samp> is now <samp>invariant</samp>.  <samp>I</samp> conflicts with the <samp>complex.h</samp> header.</li>
<li>We added a length parameter to FormatMagickSize() to permit variable length buffers.</li>
</ul>
<h2><a class="anchor" id="core"></a>MagickWand API</h2>
<p>Here are a list of changes to the MagickWand API:</p>
<ul>
<li>Almost all image processing algorithms are now channel aware.</li>
<li>The DrawMatte() method is now called DrawAlpha().</li>
<li>The MagickSetImageBias() and MagickSetImageClipMask() methods are no longer supported.</li>
</ul>
<h2><a class="anchor" id="core"></a>Magick++ API</h2>
<p>Here are a list of changes to the Magick++ API:</p>
<ul>
<li>Almost all image processing algorithms are now channel aware.</li>
<li>Use this construct, for example, to avoid operating on the alpha channel:
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>image.negateChannel(Magick::ChannelType(Magick::CompositeChannels ^ Magick::AlphaChannel));
</samp></pre>
</li>
</ul>
<h2><a class="anchor" id="headers"></a>Header Files</h2>
<p>Prior versions of ImageMagick (4-6) reference the ImageMagick header files as <samp>magick/</samp> and <samp>wand/</samp>.  ImageMagick 7 instead uses <samp>MagickCore/</samp> and <samp>MagickWand/</samp> respectively.  For example,</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp><samp>#include &lt;MagickCore/MagickCore.h>
#include &lt;MagickWand/MagickWand.h></samp></samp></pre>

<h2><a class="anchor" id="deprecate"></a>Deprecated Features Removed</h2>
<p>All deprecated features from ImageMagick version 6 are removed in version 7.  These include the <samp>Magick-config</samp> and <samp>Wand-config</samp> configuration utilities.  Instead use:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>MagickCore-config
MagickWand-config</samp></pre>
<p>The FilterImage() method has been removed.  Use ConvolveImage() instead.</p>

<p>In addition, all deprecated <a href="https://legacy.imagemagick.org/api/deprecate.php">MagickCore</a> and <a href="https://legacy.imagemagick.org/api/magick-deprecate.php">MagickWand</a> methods are no longer available in version 7.</p>

<p>The Bessel filter was removed as it is an alias for Jinc.  Use -filter Jinc instead.</p>

<h2><a class="anchor" id="cli"></a>Shell API or Command-line Interface</h2>

<p>As mentioned the primary focus of the changes to the Shell API or Command
Line Interface is the abstraction so that not only can <var>options</var> be
read from command line arguments, but also from a file (script) or from a file
stream (interactive commands, or co-processing). </p>

<p>To do this the CLI parser needed to be re-written, so as to always perform
all options, in a strict, do-it-as-you-see it order. Previously in IMv6
options were performed in groups (known as 'FireOptions), this awkwardness is
now gone.  However the strict order means that you can no longer give operations
before providing an image for the operations to work on.  To do so will now
produce an error. </p>

<p>Error reporting is now reporting exactly which option (by argument count on
command line, or line,column in scripts) caused the 'exception'.  This is not
complete as yet but getting better. Also not complete is 'regard-warnings'
handling or its replacement, which will allow you to ignore reported errors
and continue processing (as appropriate due to error) in co-processes or
interactive usage. </p>

<p>With the IMv7 parser, activated by the `magick` utility, settings are applied to each image in memory in turn (if any). While an option: only need to be applied once globally. Using the other utilities directly, or as an argument to the `magick` CLI (e.g. `magick`) utilizes the legacy parser.</p>

<p>The parenthesis options used to 'push' the current image list, and image
settings (EG: '<samp>(</samp>' and '<samp>)</samp>' ) on to a stack now has
a completely separate image settings stack. That is parenthesis 'push/pull'
image lists, and curly braces (EG: '<samp>{</samp>' and '<samp>}</samp>' ) will
'push/pull' image settings. </p>

<p>Of course due to the previously reported changes to the underlying channel
handling will result be many side effects to almost all options. Here are some
specific </p>

<p>Most algorithms update the red, green, blue, black (for CMYK), and alpha
channels.  Most operators will blend alpha the other color channels, but other
operators (and situations) may require this blending to be disabled, and is
currently done by removing alpha from the active channels via
<samp>-channel</samp> option.  (e.g. <samp>magick castle.gif -channel RGB
-negate castle.png</samp>). </p>

<p>Reading gray-scale images generate an image with only one channel. If
that image is to then accept color the <samp>-colorspace</samp> setting needs to
be applied to expand the one channel into separate RGB (or other) channels.
</p>
<p>Previously, command-line arguments were limited to 4096 characters, with ImageMagick version 7 the limit has increased to 131072 characters.</p>

<h2>Command Changes</h2>
<p>Here are a list of changes to the ImageMagick commands:</p>
<dl class="row">
<dt class="col-md-4">magick</dt>
<dd class="col-md-8"><b>IMPORTANT: The "<samp>magick</samp>" command is the new primary command of the Shell
    API, replacing the old "<samp>convert</samp>" command</b>. This allows you to
    create a 'magick script' of the form  "<samp>#!/path/to/command/magick
    -script</samp>", or pipe options into a command "<samp>magick -script
    -</samp>, as a background process.</dd>
<dt class="col-md-4">magick-script</dt>
<dd class="col-md-8">This the same as "<samp>magick</samp>", (only command name is different)
    but which has an implicit "<samp>-script</samp>" option.  This allows you to
    use it in an "<samp>env</samp>" style script form.  That is a magick script
    starts with the 'she-bang' line of "<samp>#!/usr/bin/env
    magick-script</samp>" allowing the script interpreter to be found anywhere
    on the users command "<samp>PATH</samp>".  This is required to get around
    a "one argument she-bang bug" that is common on most UNIX systems
    (including Linux, but not MacOSX).</dd>
<dt class="col-md-4">animate, compare, composite, conjure, convert, display, identify,
	import, mogrify, montage, stream</dt>
<dd class="col-md-8">To reduce the footprint of the command-line utilities, these
	utilities are symbolic links to the <samp>magick</samp> utility.  On Windows these utilities are
  installed as separate executables and the legacy <samp>convert</samp> executable is no longer included.  You can also invoke
	them from the <samp>magick</samp> utility, for example, use <samp>magick logo: logo.png</samp>
	to invoke the <samp>magick</samp> utility. <b>(In otherwords, call these utilities by
	prefacing them with magick, such as magick compare, magick identify, magick mogrify,
	magick montage, etc. Do not use <samp>magick convert</samp>. That is simply magick)</b>
</dd></dl>

<h2>Behavioral Changes</h2>
<p>Image settings are applied to each image on the command line.  To associate a setting with a particular image, use parenthesis to remove ambiguity.  In this example we assign a unique page offset to each image:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick \( -page +10+20 first.png \) \( -page +100+200 second.png \) ...</samp></pre>

<p>By default, image operations such as convolution blends alpha with each channel.  To convolve each channel independently, deactivate the alpha channel as follows:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick ... -alpha discrete -blur 0x1 ...</samp></pre>
<p>To remove the alpha values from your image, use <samp>-alpha off</samp>. If you want to instead persist the alpha channel but not blend the alpha pixels for certain image processing operations, use <samp>-alpha deactivate</samp> instead.</p>
<p>Some options have changed in ImageMagick version 7.  These include:</p>
<dl>
<dt class="col-md-4">-channel</dt>
<dd class="col-md-8">the default is to update the RGBA channels, previously, in IMv6, the default was RGB.  If you get results that differ from IMv6, you may need to specify <samp>-channel RGB</samp> on your command line (e.g. -channel RGB -negate).</dd>
<dt class="col-md-4">+combine</dt>
<dd class="col-md-8">This option now requires an argument, the image colorspace (e.g. +combine sRGB).</dd>
<dt class="col-md-4">-format</dt>
<dd class="col-md-8">The %Z image property is no longer supported.</dd>
<dt class="col-md-4">-gamma</dt>
<dd class="col-md-8">Multiple gamma arguments (e.g. <samp>-gamma 1,2,3</samp>) are no longer supported, instead use <samp>-channel</samp> (e.g. <samp>-channel blue -gamma 2)</samp>.</dd>
<dt class="col-md-4">-region</dt>
<dd class="col-md-8">This option sets a write mask for the region you define.  In IMv6, a separate image was cloned instead, operated on, and the results were composited to the source image.  In addition, the draw transformations are relative to the upper left corner of the image, previously in IMv6 they were relative to the region.</dd>
</dl>

<p>Use <samp>-define morphology:showKernel=1</samp> to post the morphology or convolution kernel.  Previously it was <samp>-define showKernel=1</samp>.</p>

<h2>New Options</h2>
<p>ImageMagick version 7 supports these new options, though most are limited
to the "<samp>magick</samp>" command, or to use in "<samp>magick</samp>"
scripts.</p>

<dl class="row">
<dt class="col-md-4">{ ... }</dt>
<dd class="col-md-8">Save (and restore) the current image settings (internally known as the
    "image_info" structure).  This is automatically done with parenthesis (EG:
    '<samp>(</samp>' and '<samp>)</samp>') is "<samp>-regard-parenthesis</samp>" has
    been set, just as in IMv6.  Caution is advised to prevent un-balanced
    braces errors.</dd>

<dt class="col-md-4">--</dt>
<dd class="col-md-8">End of options, to be used in IMv7 "<samp>mogrify</samp>" command to
    explicitly separate the operations to be applied and the images that
    are to be processed 'in-place'.  (not yet implemented).  However if
    not provided, "<samp>-read</samp>" can still be used to differentiate
    secondary image reads (for use in things like alpha composition) from
    the 'in-place' image being processed.  In other commands (such as "magick") it is equivalent to an explicit "<samp>-read</samp>" (see below) of the next option as an image (as it was in IMv6).  </dd>

<dt class="col-md-4">-alpha activate/deactivate</dt>
<dd class="col-md-8">enables and disables the alpha channel, respectively, with persistence. This is like on/off in Imagemagick 6. In Imagemagick 7, -alpha off will remove the alpha channel permanently such that -alpha on will not re-enable it.</dd>

<dt class="col-md-4">-alpha discrete</dt>
<dd class="col-md-8">treat the alpha channel independently (do not blend).</dd>

<dt class="col-md-4">-channel-fx <var>expression</var> </dt>
<dd class="col-md-8">
<p>exchange, extract, or copy one or more image channels.</p>

<p>The expression consists of one or more channels, either mnemonic or numeric (e.g. red or 0, green or 1, etc.), separated by certain operation symbols as follows:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>&lt;=&gt;  exchange two channels (e.g. red&lt;=&gt;blue)
=&gt;   copy one channel to another channel (e.g. red=&gt;green)
=    assign a constant value to a channel (e.g. red=50%)
,    write new image with channels in the specified order (e.g. red, green)
;    add a new output image for the next set of channel operations (e.g. red; green; blue)
|    move to the next input image for the source of channel data (e.g. | gray=>alpha)</samp></pre>

<p>For example, to create 3 grayscale images from the red, green, and blue channels of an image, use:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>-channel-fx "red; green; blue"</samp></pre>

<p>A channel without an operation symbol implies separate (i.e, semicolon).</p>

<p>Here we take an sRGB image and a grayscale image and inject the grayscale image into the alpha channel:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick wizard.png mask.pgm -channel-fx '| gray=>alpha' wizard-alpha.png</samp></pre>
<p>Use a similar command to define a read mask:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick wizard.png mask.pgm -channel-fx '| gray=>read-mask' wizard-mask.png</samp></pre>

<p>Add <samp>-debug pixel</samp> prior to the <samp>-channel-fx</samp> option to track the channel morphology.</p>

</dd>

<dt class="col-md-4">-exit</dt>
<dd class="col-md-8">Stop processing at this point. No further options will be processed after
    this option. Can be used in a script to force the "<samp>magick</samp>"
    command to exit, without actually closing the pipeline that it is
    processing options from.  May also be used as a 'final' option on the "<samp>magick</samp>" command
    line, instead of an implicit output image, to completely prevent any image
    write. ASIDE: even the "<samp>NULL:</samp>" coder requires at least one
    image, for it to 'not write'! This option does not require any images at
    all. </dd>

<dt class="col-md-4">-read {image}</dt>
<dd class="col-md-8">Explicit read of an image, rather than an implicit read.  This allows you
    to read from filenames that start with an 'option' character, and which
    otherwise could be mistaken as an option (unknown or otherwise). This will
    eventually be used in "<samp>mogrify</samp>" to allow the reading of
    secondary images, and allow the use of image list operations within that
    command. </dd>

<dt class="col-md-4">-read-mask</dt>
<dd class="col-md-8">prevent updates to image pixels specified by the mask</dd>

<dt class="col-md-4">-region</dt>
<dd class="col-md-8">supported in ImageMagick 7.0.2-6 and above</dd>

<dt class="col-md-4">-script {file}</dt>
<dd class="col-md-8">In "<samp>magick</samp>", stop the processing of command line arguments as
    image operations, and read all further options from the given file or
    pipeline.</dd>
<dt class="col-md-4">-write-mask</dt>
<dd class="col-md-8">prevent pixels from being written.</dd>

</dl>

<h2>Changed Options</h2>
<p>These options are known to have changed, in some way.</p>
<dl class="row">
<dt class="col-md-4">-bias</dt>
<dd class="col-md-8">The option is no longer recognized.  Use <samp>-define convolve:bias=<var>value</var></samp> instead.</dd>
<dt class="col-md-4">-draw</dt>
<dd class="col-md-8">The <samp>matte</samp> primitive is now <samp>alpha</samp> (e.g. <samp>-draw 'alpha 0,0 floodfill'</samp>).</dd>
<dt class="col-md-4">-negate</dt>
<dd class="col-md-8">currently negates all channels, including alpha if present.  As such you may need to use the -channel option to prevent alpha negation (e.g. -channel RGB -negate).  </dd>
<dt class="col-md-4">-preview</dt>
<dd class="col-md-8">this option is now an image operator.  The PREVIEW image format has been removed.</dd>
</dl>

<h2>Deprecated warning given, but will work (for now)</h2>
<dl class="row">
<dt class="col-md-4">-affine</dt>
<dd class="col-md-8">Replaced by <samp>-draw "affine ..."</samp>. (see transform)</dd>
<dt class="col-md-4">-average</dt>
<dd class="col-md-8">Replaced by <samp>-evaluate-sequence Mean</samp>.</dd>
<dt class="col-md-4">-box</dt>
<dd class="col-md-8">Replaced by <samp>-undercolor</samp>.</dd>
<dt class="col-md-4">-deconstruct</dt>
<dd class="col-md-8">Replaced by <samp>-layers CompareAny</samp>.</dd>
<dt class="col-md-4">-gaussian</dt>
<dd class="col-md-8">Replaced by <samp>-gaussian-blur</samp>.</dd>
<dt class="col-md-4">-/+map</dt>
<dd class="col-md-8">Replaced by <samp>-/+remap</samp>.</dd>
<dt class="col-md-4">-/+mask</dt>
<dd class="col-md-8">Replaced by <samp>-/+read-mask</samp>, <samp>-/+write-mask</samp>.</dd>
<dt class="col-md-4">-/+matte</dt>
<dd class="col-md-8">Replaced by <samp>-alpha Set/Off</samp>.</dd>
<dt class="col-md-4">-transform</dt>
<dd class="col-md-8">Replaced by <samp>-distort Affine "..."</samp>.</dd>
</dl>

<h2>Deprecated warning given, and ignored (for now)</h2>
<p>Almost 'plus' (+) option that did not do anything has been marked as
deprecated, and does nothing. It does not even have associated code.  For
example "+annotate", "+resize", "+clut", and "+draw" .</p>

<dl class="row">
<dt class="col-md-4">-affinity</dt>
<dd class="col-md-8">Replaced by <samp>-remap</samp>.</dd>
<dt class="col-md-4">-maximum</dt>
<dd class="col-md-8">Replaced by <samp>-evaluate-sequence Max</samp>.</dd>
<dt class="col-md-4">-median</dt>
<dd class="col-md-8">Replaced by <samp>-evaluate-sequence Median</samp>.</dd>
<dt class="col-md-4">-minimum</dt>
<dd class="col-md-8">Replaced by <samp>-evaluate-sequence Min</samp>.</dd>
<dt class="col-md-4">-recolor</dt>
<dd class="col-md-8">Replaced by <samp>-color-matrix</samp>.</dd>
</dl>

<h2>Removed / Replaced Options ("no such option" error and abort)</h2>

<dl class="row">
<dt class="col-md-4">-interpolate filter</dt>
<dd class="col-md-8">remove slow and useless interpolation method</dd>
<dt class="col-md-4">-origin</dt>
<dd class="col-md-8">old option, unknown meaning.</dd>
<dt class="col-md-4">-pen</dt>
<dd class="col-md-8">Replaced by <samp>-fill</samp>.</dd>
<dt class="col-md-4">-passphrase</dt>
<dd class="col-md-8">old option, unknown meaning</dd>
</dl>
<h2><a class="anchor" id="performance"></a>Performance Improvements</h2>
<p>Operating on grayscale images is significantly improved as only one channel is required.  Previously, grayscale required three channels.</p>
<p>The performance of <a href="<?php echo $_SESSION['RelativePath']?>/../script/fx.php">-fx</a> option has increased by one to two orders of magnitude.</p>

<h2><a class="anchor" id="summary"></a>Version 7 Change Summary</h2>
<p>Changes from ImageMagick version 6 to version 7 are summarized here:</p>
<h4>High Dynamic Range Imaging</h4>
<ul>
<li>ImageMagick version 7 enables HDRI by default.  Expect more accurate image processing results with higher memory requirements and possible slower processing times.  You can disable this feature for resource constrained system such as a cell phone with a slight loss of accuracy for certain algorithms (e.g. resizing).</li>
</ul>
<h4>Pixels</h4>
<ul>
<li>Pixels are no longer addressed with PixelPacket structure members (e.g. red, green, blue, opacity) but as an array of channels (e.g. pixel[PixelRedChannel]).</li>
<li>Use convenience macros to access pixel channels (e.g. GetPixelRed(), SetPixelRed()).</li>
<li>The black channel for the CMYK colorspace is no longer stored in the index channel, previously accessed with GetAuthenticIndexQueue() and GetCacheViewAuthenticIndexQueue().  Instead it is now a pixel channel and accessed with the convenience pixel macros GetPixelBlack() and SetPixelBlack().</li>
<li>The index channel for colormapped images is no longer stored in the index channel, previously accessed with GetAuthenticIndexQueue() and GetCacheViewAuthenticIndexQueue().  Instead it is now a pixel channel and accessed with the convenience pixel macros GetPixelIndex() and SetPixelIndex().</li>
<li>Use GetPixelChannels() to advance to the next set of pixel channels.</li>
<li>Use the <var>metacontent</var> channel  to associate metacontent with each pixel.</li>
<li>All color packet structures, PixelPacket, LongPacket, and DoublePacket, are consolidated to a single color structure, PixelInfo.</li>
</ul>
<h4>Alpha</h4>
<ul>
<li>We support alpha rather than opacity (0 transparent; QuantumRange opaque).</li>
<li>Use GetPixelAlpha() or SetPixelAlpha() to get or set the alpha pixel channel value.</li>
</ul>
<h4>Grayscale</h4>
<ul>
<li>Grayscale images consume one pixel channel in ImageMagick version 7.  To process RGB, set the colorspace to RGB (e.g. -colorspace sRGB).</li>
</ul>
<h4>Masks</h4>
<ul>
<li>ImageMagick version 6 only supports read mask in limited circumstances.  Version 7 supports both a read and write mask.  The read mask is honored by most image-processing algorithms.</li>
</ul>
<h4>MagickCore API</h4>
<ul>
<li>Almost all image processing algorithms are now channel aware.</li>
<li>MagickCore, version 7, adds an ExceptionInfo argument to those methods that lacked it in version 6, e.g. <samp>NegateImage(image,MagickTrue,exception);</samp></li>
<li>All method channel analogs have been removed (e.g. BlurImageChannel()), they are no longer necessary, use pixel traits instead.</li>
<li>Public and private API calls are now declared with the GCC visibility attribute.  The MagickCore and MagickWand dynamic libraries now only export public struct and function declarations.</li>
<li>The InterpolatePixelMethod enum is now PixelInterpolateMethod.</li>
<li>To account for variable pixel channels, images may now return a different signature.</li>
</ul>
<h4>Deprecated Methods</h4>
<ul>
<li>All ImageMagick version 6 MagickCore and MagickWand deprecated methods are removed and no longer available in ImageMagick version 7.</li>
<li>All MagickCore channel method analogs are removed (e.g. NegateImageChannels()).  For version 7, use pixel traits instead.</li>
<li>The FilterImage() method has been removed.  Use ConvolveImage() instead.</li>
</ul>
</div>
