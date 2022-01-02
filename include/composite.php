<div class="magick-header">
<h1 class="text-center">Overlap One Image over Another</h1>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead magick-description">Use the <samp>composite</samp> program to overlap one image over another.  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command Line Processing</a> for advice on how to structure your <samp>composite</samp> command or see below for example usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>composite</samp> command here to illustrate its usefulness and ease of use.  To get started, lets overlay a smiley face over a rose:</p>

<ul><pre class="bg-light text-dark"><samp>magick composite -gravity center smile.gif  rose: rose-over.png </samp></pre></ul>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/smile.gif"><img src="<?php echo $_SESSION['RelativePath']?>/../image/smile.gif" width="48" height="48" alt="smile" /></a>
  <img src="<?php echo $_SESSION['RelativePath']?>/../image/over.gif" width="56" height="46" alt="over" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg" width="70" height="46" alt="rose" /></a>
  <img style="margin-top:13px; margin-bottom:13px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/rose-over.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose-over.png" width="70" height="46" alt="rose" /></a>
</ul>

<p>You can create three-dimensional effect with the <var>Atop</var>:</p>

<ul><pre class="bg-light text-dark"><samp>magick convert -size 70x70 canvas:none -fill red -draw 'circle 35,35 10,30' red-circle.png
magick convert -size 70x70 canvas:none -draw 'circle 35,35 35,20' -negate \
-channel A -gaussian-blur 0x8 white-highlight.png
magick composite -compose atop -geometry -13-17 white-highlight.png red-circle.png red-ball.png </samp></pre></ul>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/white-highlight.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/white-highlight.png" width="70" height="70" alt="white highlight" /></a>
  <img src="<?php echo $_SESSION['RelativePath']?>/../image/atop.gif" width="56" height="70" alt="atop" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/red-circle.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/red-circle.png" width="70" height="70" alt="red circle" /></a>
  <img style="margin-top:25px; margin-bottom:25px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/red-ball.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/red-ball.png" width="70" height="70" alt="red ball" /></a>
</ul>

<p>Or suppose you want to blend a bear into a stream seamlessly.  Try this command:</p>
<ul><pre class="bg-light text-dark"><samp>magick -verbose stream.jpg bear.jpg mask.png -define compose:args=400x0.0002+100 \
  -compose seamless-blend -geometry +30+30 -composite bear-in-stream.png </samp></pre></ul>
<p>The mask distinquishes the foreground object (the bear) from the blending area that surrounds the foreground object from the area that is to be ignored.  The foreground object is pure white.  The area to be ignored is pure black.  Any value in-between is the area to blend.  Seamless blending is an iterative process.  Here, we limit the iterations to 400 or less if the blending converges (residual has an RMSE of less than 0.0002). The residual value (RMSE) is printed every 100 iterations.  Note, seamless blending works most effectively when the HDRI feature is enabled.</p>

<p>You can find additional examples of using <samp>composite</samp> in <a href="https://legacy.imagemagick.org/Usage/">Examples of ImageMagick Usage</a>.  You can find out more about them and the mathematics by looking at <a href="http://www.w3.org/TR/SVG12/rendering.html">SVG Alpha Compositing</a></p>

<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>composite</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover">
  <tbody>
  <tr>
    <th align="left">Option</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#affine">-affine <var>matrix</var></a></td>
    <td>affine transform matrix</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#alpha">-alpha</a></td>
    <td>on, activate, off, deactivate, set, opaque, copy",
transparent, extract, background, or shape the alpha channel</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#authenticate">-authenticate <var>value</var></a></td>
    <td>decrypt image with this password</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#blend">-blend <var>geometry</var></a></td>
    <td>blend images</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#blue-primary">-blue-primary <var>point</var></a></td>
    <td>chromaticity blue primary point</td>
  </tr>


  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#border">-border <var>geometry</var></a></td>
    <td>surround image with a border of color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#bordercolor">-bordercolor <var>color</var></a></td>
    <td>border color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel <var>type</var></a></td>
    <td>apply option to select image channels</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#colors">-colors <var>value</var></a></td>
    <td>preferred number of colors in the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#colorspace">-colorspace <var>type</var></a></td>
    <td>set image colorspace</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#comment">-comment <var>string</var></a></td>
    <td>annotate image with comment</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compose">-compose <var>operator</var></a></td>
    <td>set image composite operator</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compress">-compress <var>type</var></a></td>
    <td>image compression type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#debug">-debug <var>events</var></a></td>
    <td>display copious debugging information</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#decipher">-decipher <var>filename</var></a></td>
    <td>convert cipher pixels to plain</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define <var>format:option</var></a></td>
    <td>define one or more image format options</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#density">-density <var>geometry</var></a></td>
    <td>horizontal and vertical density of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth <var>value</var></a></td>
    <td>image depth</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#displace">-displace <var>geometry</var></a></td>
    <td>shift image pixels defined by a displacement map</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#dissolve">-dissolve <var>value</var></a></td>
    <td>dissolve the two images a given percent</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#dither">-dither  <var>method</var></a></td>
    <td>apply error diffusion to image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#encipher">-encipher <var>filename</var></a></td>
    <td>convert plain pixels to cipher pixels</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#encoding">-encoding <var>type</var></a></td>
    <td>text encoding type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#endian">-endian <var>type</var></a></td>
    <td>endianness (MSB or LSB) of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#extract">-extract <var>geometry</var></a></td>
    <td>extract area from image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#filter">-filter <var>type</var></a></td>
    <td>use this filter when resizing an image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#font">-font <var>name</var></a></td>
    <td>render text with this font</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#geometry">-geometry <var>geometry</var></a></td>
    <td>preferred size or location of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#gravity">-gravity <var>type</var></a></td>
    <td>horizontal and vertical text placement</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#green-primary">-green-primary <var>point</var></a></td>
    <td>chromaticity green primary point</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#help">-help</a></td>
    <td>print program options</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#identify">-identify</a></td>
    <td>identify the format and characteristics of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#interlace">-interlace <var>type</var></a></td>
    <td>type of image interlacing scheme</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#interpolate">-interpolate <var>method</var></a></td>
    <td>pixel color interpolation method</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#label">-label <var>string</var></a></td>
    <td>assign a label to an image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#level">-level <var>value</var></a></td>
    <td>adjust the level of image contrast</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#limit">-limit <var>type value</var></a></td>
    <td>pixel cache resource limit</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#log">-log <var>format</var></a></td>
    <td>format of debugging information</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#monitor">-monitor</a></td>
    <td>monitor progress</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#monochrome">-monochrome</a></td>
    <td>transform image to black and white</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#negate">-negate</a></td>
    <td>replace each pixel with its complementary color </td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#page">-page <var>geometry</var></a></td>
    <td>size and location of an image canvas (setting)</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#pointsize">-pointsize <var>value</var></a></td>
    <td>font point size</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#profile">-profile <var>filename</var></a></td>
    <td>add, delete, or apply an image profile</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quality">-quality <var>value</var></a></td>
    <td>JPEG/MIFF/PNG compression level</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quantize">-quantize <var>colorspace</var></a></td>
    <td>reduce image colors in this colorspace</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quiet">-quiet</a></td>
    <td>suppress all warning messages</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#red-primary">-red-primary <var>point</var></a></td>
    <td>chromaticity red primary point</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#regard-warnings">-regard-warnings</a></td>
    <td>pay attention to warning messages.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#respect-parentheses">-respect-parentheses</a></td>
    <td>settings remain in effect until parenthesis boundary.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#rotate">-rotate <var>degrees</var></a></td>
    <td>apply Paeth rotation to the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sampling-factor">-sampling-factor <var>geometry</var></a></td>
    <td>horizontal and vertical sampling factor</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#scene">-scene <var>value</var></a></td>
    <td>image scene number</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#seed">-seed <var>value</var></a></td>
    <td>seed a new sequence of pseudo-random numbers</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set <var>attribute value</var></a></td>
    <td>set an image attribute</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sharpen">-sharpen <var>geometry</var></a></td>
    <td>sharpen the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#shave">-shave <var>geometry</var></a></td>
    <td>shave pixels from the image edges</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size <var>geometry</var></a></td>
    <td>width and height of image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#stegano">-stegano <var>offset</var></a></td>
    <td>hide watermark within an image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#stereo">-stereo <var>geometry</var></a></td>
    <td>combine two image to create a stereo anaglyph</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#strip">-strip</a></td>
    <td>strip image of all profiles and comments</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#swap">-swap <var>indexes</var></a></td>
    <td>swap two images in the image sequence</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#synchronize">-synchronize</a></td>
    <td>synchronize image to storage device</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#taint">-taint</a></td>
    <td>mark the image as modified</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#thumbnail">-thumbnail <var>geometry</var></a></td>
    <td>create a thumbnail of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#tile">-tile</a></td>
    <td>repeat composite operation across and down image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#transform">-transform</a></td>
    <td>affine transform image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#transparent-color">-transparent-color <var>color</var></a></td>
    <td>transparent color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#treedepth">-treedepth <var>value</var></a></td>
    <td>color tree depth</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#type">-type <var>type</var></a></td>
    <td>image type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#units">-units <var>type</var></a></td>
    <td>the units of image resolution</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#unsharp">-unsharp <var>geometry</var></a></td>
    <td>sharpen the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#verbose">-verbose</a></td>
    <td>print detailed information about the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#version">-version</a></td>
    <td>print version information</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#virtual-pixel">-virtual-pixel <var>method</var></a></td>
    <td>access method for pixels outside the boundaries of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#watermark">-watermark <var>geometry</var></a></td>
    <td>percent brightness and saturation of a watermark</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#white-point">-white-point <var>point</var></a></td>
    <td>chromaticity white point</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#white-threshold">-white-threshold <var>value</var></a></td>
    <td>force all pixels above the threshold into white</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write">-write <var>filename</var></a></td>
    <td>write images to this file</td>
  </tr>

  </tbody>
</table>
</div>
