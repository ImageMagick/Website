<div class="magick-header">
<h1 class="text-center">Image Viewer</h1>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead magick-description">Use the <samp>display</samp> program to display an image or image sequence on any X server.  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command Line Processing</a> for advice on how to structure your <samp>display</samp> command or see below for example usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>display</samp> command here to illustrate its usefulness and ease of use.  To get started, lets display an image in the JPEG format:</p>

<ul><pre class="bg-light text-dark"><samp>magick display rose.jpg </samp></pre></ul>

<p>To tile a slate texture onto the root window, use:</p>

<ul><pre class="bg-light text-dark"><samp>magick display -size 1280x1024 -window root slate.png </samp></pre></ul>

<p>To display a visual image directory of all your JPEG images, use:</p>

<ul><pre class="bg-light text-dark"><samp>magick display 'vid:*.jpg' </samp></pre></ul>

<p>The display program defaults to the X screen resolution.  To display vector formats at their intended size, override the default resolution:</p>

<ul><pre class="bg-light text-dark"><samp>magick display -density 72 drawing.svg </samp></pre></ul>

<p>You can find additional examples of using <samp>display</samp> in <a href="http://www.ibm.com/developerworks/library/l-graf/">Graphics from the Command Line</a>.  Further discussion is available in  <a href="https://www.ibm.com/developerworks/library/l-graf2/">More Graphics from the Command Line</a> and <a href="https://legacy.imagemagick.org/Usage/">Examples of ImageMagick Usage</a>.</p>

<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>display</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover">
  <tbody>
  <tr>
    <th align="left">Option</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#alpha">-alpha</a></td>
    <td>on, activate, off, deactivate, set, opaque, copy",
transparent, extract, background, or shape the alpha channel</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#antialias">-antialias</a></td>
    <td>remove pixel-aliasing</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#authenticate">-authenticate <var>value</var></a></td>
    <td>decrypt image with this password</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#backdrop">-backdrop</a></td>
    <td>display image centered on a backdrop</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#background">-background <var>color</var></a></td>
    <td>background color</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#clip">-clip</a></td>
    <td>clip along the first path from the 8BIM profile</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#clip-path">-clip-path <var>id</var></a></td>
    <td>clip along a named path from the 8BIM profile</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#coalesce">-coalesce</a></td>
    <td>merge a sequence of images</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#colormap">-colormap <var>type</var></a></td>
    <td>Shared or Private</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#delay">-delay <var>centiseconds</var></a></td>
    <td>display the next image after pausing</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#despeckle">-despeckle</a></td>
    <td>reduce the speckles within an image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#edge">-edge <var>radius</var></a></td>
    <td>apply a filter to detect edges in the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#endian">-endian <var>type</var></a></td>
    <td>endianness (MSB or LSB) of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#enhance">-enhance</a></td>
    <td>apply a digital filter to enhance a noisy image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#equalize">-equalize</a></td>
    <td>perform histogram equalization to an image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#flatten">-flatten</a></td>
    <td>flatten a sequence of images</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#flip">-flip</a></td>
    <td>flip image in the vertical direction</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#flop">-flop</a></td>
    <td>flop image in the horizontal direction</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#frame">-frame <var>geometry</var></a></td>
    <td>surround image with an ornamental border</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fuzz">-fuzz <var>distance</var></a></td>
    <td>colors within this distance are considered equal</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#gamma">-gamma <var>value</var></a></td>
    <td>level of gamma correction</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#geometry">-geometry <var>geometry</var></a></td>
    <td>preferred size or location of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#gravity">-gravity <var>geometry</var></a></td>
    <td>horizontal and vertical backdrop placement</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#immutable">-immutable <var>type</var></a></td>
    <td>prohibit image edits</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#map">-map <var>filename</var></a></td>
    <td>transform image colors to match this set of colors</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#mattecolor">-mattecolor <var>color</var></a></td>
    <td>frame color</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#normalize">-normalize</a></td>
    <td>transform image to span the full range of colors</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#page">-page <var>geometry</var></a></td>
    <td>size and location of an image canvas (setting)</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#profile">-profile <var>filename</var></a></td>
    <td>add, delete, or apply an image profile</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#raise">-raise <var>value</var></a></td>
    <td>lighten/darken image edges to create a 3-D effect</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#regard-warnings">-regard-warnings</a></td>
    <td>pay attention to warning messages.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#remote">-remote <var>command</var></a></td>
    <td>execute a command in an remote display process</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#resample">-resample <var>geometry</var></a></td>
    <td>change the resolution of an image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#roll">-roll <var>geometry</var></a></td>
    <td>roll an image vertically or horizontally</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#rotate">-rotate <var>degrees</var></a></td>
    <td>apply Paeth rotation to the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sample">-sample <var>geometry</var></a></td>
    <td>scale image with pixel sampling</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#segment">-segment <var>values</var></a></td>
    <td>segment an image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size <var>geometry</var></a></td>
    <td>width and height of image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#strip">-strip</a></td>
    <td>strip image of all profiles and comments</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#thumbnail">-thumbnail <var>geometry</var></a></td>
    <td>create a thumbnail of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#transparent-color">-transparent-color <var>color</var></a></td>
    <td>transparent color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#black-threshold">-black-threshold <var>value</var></a></td>
    <td>force all pixels below the threshold into black</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#trim">-trim</a></td>
    <td>trim image edges</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#update">-update <var>seconds</var></a></td>
    <td>detect when image file is modified and redisplay</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#visual">-visual</a></td>
    <td>display image using this visual type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write">-window <var>id</var></a></td>
    <td>display image to background of this window</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write">-window-group <var>id</var></a></td>
    <td>exit program when this window id is destroyed</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write">-write <var>filename</var></a></td>
    <td>write images to this file</td>
  </tr>
  </tbody>
</table>

</div>
