<div>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead">The <samp>magick identify</samp> program describes the format and characteristics of one or more image files. It also reports if an image is incomplete or corrupt. The information returned includes the image number, the file name, the width and height of the image, whether the image is colormapped or not, the number of colors in the image, the number of bytes in the image, the format of the image (JPEG, PNM, etc.), and finally the number of seconds it took to read and process the image.  Many more attributes are available with the verbose option.  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command Line Processing</a> for advice on how to structure your <samp>magick identify</samp> command or see below for example usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>magick identify</samp> command here to illustrate its usefulness and ease of use. To get started, lets identify an image in the JPEG format:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify rose.jpg
rose.jpg JPEG 70x46 70x46+0+0 8-bit sRGB 2.36KB 0.000u 0:00.000 </samp></pre>

<p>By default, <samp>magick identify</samp> provides the following output:</p>

<ul><samp>Filename[frame #] image-format widthxheight page-widthxpage-height+x-offset+y-offset colorspace user-time elapsed-time</samp></ul>

<p>Next, we look at the same image in greater detail:</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify -verbose rose.jpg
Image: rose.jpg
  Format: JPEG (Joint Photographic Experts Group JFIF format)
  Mime type: image/jpeg
  Class: DirectClass
  Geometry: 70x46+0+0
  Units: Undefined
  Type: TrueColor
  Endianness: Undefined
  Colorspace: sRGB
  Depth: 8-bit
  Channel depth:
    Red: 8-bit
    Green: 8-bit
    Blue: 8-bit
  Channel statistics:
    Pixels: 3220
    Red:
      min: 31 (0.121569)
      max: 255 (1)
      mean: 145.557 (0.570814)
      standard deviation: 69.1933 (0.271346)
      kurtosis: -1.38945
      skewness: 0.138955
      entropy: 0.970683
    Green:
      min: 27 (0.105882)
      max: 255 (1)
      mean: 89.246 (0.349984)
      standard deviation: 52.4608 (0.205729)
      kurtosis: 2.60139
      skewness: 1.80708
      entropy: 0.869711
    Blue:
      min: 21 (0.0823529)
      max: 255 (1)
      mean: 80.4196 (0.315371)
      standard deviation: 54.9377 (0.215442)
      kurtosis: 2.93417
      skewness: 1.95544
      entropy: 0.853176
  Image statistics:
    Overall:
      min: 21 (0.0823529)
      max: 255 (1)
      mean: 105.074 (0.412056)
      standard deviation: 58.8639 (0.230839)
      kurtosis: 1.37788
      skewness: 1.48073
      entropy: 0.897856
  Rendering intent: Perceptual
  Gamma: 0.454545
  Chromaticity:
    red primary: (0.64,0.33,0.03)
    green primary: (0.3,0.6,0.1)
    blue primary: (0.15,0.06,0.79)
    white point: (0.3127,0.329,0.3583)
  Alpha color: grey74
  Background color: white
  Border color: srgb(223,223,223)
  Transparent color: none
  Interlace: None
  Intensity: Undefined
  Compose: Over
  Page geometry: 70x46+0+0
  Dispose: Undefined
  Iterations: 0
  Compression: JPEG
  Quality: 92
  Orientation: Undefined
  Properties:
    jpeg:colorspace: 2
    jpeg:sampling-factor: 1x1,1x1,1x1
    signature: aea65c9b557d779d142f26d04abe7008bab50f1e9647faae20afdcc6c15140d5
  Artifacts:
    verbose: true
  Tainted: False
  Filesize: 2.65KB
  Number pixels: 3.22K
  User time: 0.000u
  Elapsed time: 0:01.000
  Version: ImageMagick 7.0.4-8 Q16 x86_64 http://imagemagick.org </samp></pre>

<p>Note, the image signature is generated from the pixel components, not the image metadata.</p>

<p>To get the print size in inches of an image at 72 DPI, use:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify -format "%[fx:w/72] by %[fx:h/72] inches" document.png
8.5 x 11 inches </samp></pre>

<p>The depth and dimensions of a raw image must be specified on the command line:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify -depth 8 -size 640x480 image.raw
image.raw RGB 640x480 sRGB 9kb 0.000u 0:01 </samp></pre>

<p>Here we display the image texture features, moments, perceptual hash, and the number of unique colors in the image:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify -verbose -features 1 -moments -unique image.png</samp></pre>

<p>To display the convex hull and minimum bounding box attributes of the image, use:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick identify -define identify:convex-hull=true image.png</samp></pre>

<p>Here is a special define that outputs the location of the minimum or maximum pixel of the image:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick identify -precision 5 -define identify:locate=maximum -define identify:limit=3 image.png</samp></pre>

<p>You can find additional examples of using <samp>magick identify</samp> in <a href="https://usage.imagemagick.org/">Examples of ImageMagick Usage</a>.</p>

<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>magick identify</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover table-striped table-responsive">
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#auto-orient">-auto-orient</a></td>
    <td>automagically orient image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#clip-mask">-clip-mask</a> <var>filename</var></td>
    <td>associate clip mask with the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#clip-path">-clip-path <var>id</var></a></td>
    <td>clip along a named path from the 8BIM profile</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#colorspace">-colorspace <var>type</var></a></td>
    <td>set image colorspace</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#crop">-crop <var>geometry</var></a></td>
    <td>crop the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#debug">-debug <var>events</var></a></td>
    <td>display copious debugging information</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#endian">-endian <var>type</var></a></td>
    <td>endianness (MSB or LSB) of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#extract">-extract <var>geometry</var></a></td>
    <td>extract area from image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#features">-features <var>distance</var></a></td>
    <td>analyze image features (e.g. contract, correlations, etc.).</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#format_identify_">-format <var>string</var></a></td>
    <td>output formatted image characteristics</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#gamma">-gamma <var>value</var></a></td>
    <td>level of gamma correction</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#grayscale">-grayscale <var>method</var></a></td>
    <td>convert image to grayscale</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#help">-help</a></td>
    <td>print program options</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#limit">-limit <var>type value</var></a></td>
    <td>pixel cache resource limit</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#list">-list <var>type</var></a></td>
    <td>Color, Configure, Delegate, Format, Magic, Module, Resource, or Type</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#log">-log <var>format</var></a></td>
    <td>format of debugging information</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#mask">-mask <var>filename</var></a></td>
    <td>associate a mask with the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#moments">-moments</a></td>
    <td>display image moments and perceptual hash.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#monitor">-monitor</a></td>
    <td>monitor progress</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#negate">-negate</a></td>
    <td>replace each pixel with its complementary color </td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#ping">-ping</a></td>
    <td>by default, efficiently determine certain image characteristics.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#precision">-precision <var>value</var></a></td>
    <td>set the maximum number of significant digits to be printed</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#respect-parentheses">-respect-parentheses</a></td>
    <td>settings remain in effect until parenthesis boundary.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sampling-factor">-sampling-factor <var>geometry</var></a></td>
    <td>horizontal and vertical sampling factor</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set <var>attribute value</var></a></td>
    <td>set an image attribute</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#unique">-unique</a></td>
    <td>display image the number of unique colors in the image.</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#units">-units <var>type</var></a></td>
    <td>the units of image resolution</td>
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

  </tbody>
</table>

</div>
