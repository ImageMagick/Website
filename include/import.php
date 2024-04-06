<div>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead">Use the <samp>import</samp> program to capture some or all of an X server screen and save the image to a file. <samp>import</samp> captures the window selected by clicking or program argument. See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command Line Processing</a> for advice on how to structure your <samp>import</samp> command or see below for example usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>import</samp> command here to illustrate its usefulness and ease of use.  To get started, lets import an image of an X11 window in the JPEG format:</p>

<pre class="bg-light text-dark mx-4 cli"><samp>magick import rose.jpg </samp></pre>

<p>To capture the entire X server screen in the Postscript image format:</p>

<pre class="bg-light text-dark mx-4 cli"><samp>magick import -window root screen.ps </samp></pre>

<p>You can find additional examples of using <samp>import</samp> in <a href="https://imagemagick.org/Usage/">Examples of ImageMagick Usage</a>.</p>


<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>import</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left">Option</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#adjoin">-adjoin</a></td>
    <td>join images into a single multi-image file</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#annotate">-annotate <var>geometry text</var></a></td>
    <td>annotate the image with text</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#border">-border</a></td>
    <td>include window border in the output image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compress">-compress <var>type</var></a></td>
    <td>image compression type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#contrast">-contrast</a></td>
    <td>enhance or reduce the image contrast</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#crop">-crop <var>geometry</var></a></td>
    <td>preferred size and location of the cropped image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#debug">-debug <var>events</var></a></td>
    <td>import copious debugging information</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define <var>format:option</var></a></td>
    <td>define one or more image format options</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#delay">-delay <var>centiseconds</var></a></td>
    <td>import the next image after pausing</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#despeckle">-descend</a></td>
    <td>obtain image by descending window hierarchy</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#display">-display <var>server</var></a></td>
    <td>get image or font from this X server</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#dispose">-dispose <var>method</var></a></td>
    <td>layer disposal method</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#filter">-filter <var>type</var></a></td>
    <td>use this filter when resizing an image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#frame">-frame</a></td>
    <td>include window manager frame</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#label">-label <var>name</var></a></td>
    <td>assign a label to an image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#pause">-pause <var>seconds</var></a></td>
    <td>seconds delay between snapshots</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quiet">-quiet</a></td>
    <td>suppress all warning messages</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#regard-warnings">-regard-warnings</a></td>
    <td>pay attention to warning messages.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#repage">-repage <var>geometry</var></a></td>
    <td>size and location of an image canvas</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#resize">-resize <var>geometry</var></a></td>
    <td>resize the image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#screen">-screen</a></td>
    <td>select image from root window</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sharpen">-silent</a></td>
    <td>operate silently, i.e. don't ring any bells</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#strip">-strip</a></td>
    <td>strip image of all profiles and comments</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#transparent-color">-transparent-color <var>color</var></a></td>
    <td>transparent color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#trim">-trim</a></td>
    <td>trim image edges</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#update">-type <var>type</var></a></td>
    <td>image type</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write">-window <var>id</var></a></td>
    <td>select window with this id or name</td>
  </tr>

  </tbody>
</table>

</div>
