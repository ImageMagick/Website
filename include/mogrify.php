<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead">Use the <samp>magick mogrify</samp> program to resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.   This tool is similar to <a href="/convert/">magick</a> except that the original image file is <em>overwritten</em> (unless you change the file suffix with the <a href="/command-line-options/#format">-format</a> option) with any changes you request.  See <a href="/command-line-processing/">Command Line Processing</a> for advice on how to structure your <samp>mogrify</samp> command or see below for sample usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>mogrify</samp> command here to illustrate its usefulness and ease of use.  To get started, let's reduce the size of our
rose:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick mogrify -resize 50% rose.jpg</samp></pre>

<ul>
  <a href="/image/rose.jpg">
  <img src="/image/rose.jpg" width="70" height="46" alt="rose" />
  </a>
  <img style="margin-top:13px; margin-bottom:13px;" src="/image/right.gif" width="20" height="20" alt="==>" />
  <a href="/image/rose.png">
  <img style="margin-top:12px; margin-bottom: 11px;" src="/image/rose.png" width="35" height="23" alt="rose" />
  </a>
</ul>

<p>You can resize all your JPEG images in a folder to a maximum dimension of 256x256 with this command:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick mogrify -resize 256x256 *.jpg</samp></pre>

<p>Finally, we convert all our PNG images in a folder to the JPEG format:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick mogrify -format jpg *.png</samp></pre>

<p>Here image files 1.png, 2.png, etc., are left untouched and files 1.jpg, 2.jpg, etc., are created.  They are copies of their respective PNG images except are stored  in the JPEG image format.</p>


<p>You can find additional examples of using <samp>mogrify</samp> in <a href="https://usage.imagemagick.org/">Examples of ImageMagick Usage</a>.</p>

<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>mogrify</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left">Option</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td><a href="/command-line-options/#adaptive-blur">-adaptive-blur <var>geometry</var></a></td>
    <td>adaptively blur pixels; decrease effect near edges</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#adaptive-resize">-adaptive-resize <var>geometry</var></a></td>
    <td>adaptively resize image with data dependent triangulation.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#adaptive-sharpen">-adaptive-sharpen <var>geometry</var></a></td>
    <td>adaptively sharpen pixels; increase effect near edges</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#adjoin">-adjoin</a></td>
    <td>join images into a single multi-image file</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#affine">-affine <var>matrix</var></a></td>
    <td>affine transform matrix</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#alpha">-alpha</a></td>
    <td>on, activate, off, deactivate, set, opaque, copy",
transparent, extract, background, or shape the alpha channel</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#annotate">-annotate <var>geometry text</var></a></td>
    <td>annotate the image with text</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#antialias">-antialias</a></td>
    <td>remove pixel-aliasing</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#append">-append</a></td>
    <td>append an image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#authenticate">-authenticate <var>value</var></a></td>
    <td>decipher image with this password</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#auto-gamma">-auto-gamma</a></td>
    <td>automagically adjust gamma level of image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#auto-level">-auto-level</a></td>
    <td>automagically adjust color levels of image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#auto-orient">-auto-orient</a></td>
    <td>automagically orient image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#auto-threshold">-auto-threshold <var>method</var></a></td>
    <td>automatically perform image thresholding</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#background">-background <var>color</var></a></td>
    <td>background color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#bench">-bench <var>iterations</var></a></td>
    <td>measure performance</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#bias">-bias <var>value</var></a></td>
    <td>add bias when convolving an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#bilateral-blur">-bilateral-blur <var>geometry</var></a></td>
    <td>non-linear, edge-preserving, and noise-reducing smoothing filter</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#black-threshold">-black-threshold <var>value</var></a></td>
    <td>force all pixels below the threshold into black</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#blue-primary">-blue-primary <var>point</var></a></td>
    <td>chromaticity blue primary point</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#blue-shift">-blue-shift  <var>factor</var></a></td>
    <td>simulate a scene at nighttime in the moonlight</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#blur">-blur <var>geometry</var></a></td>
    <td>reduce image noise and reduce detail levels</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#border">-border <var>geometry</var></a></td>
    <td>surround image with a border of color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#bordercolor">-bordercolor <var>color</var></a></td>
    <td>border color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#brightness-contrast">-brightness-contrast <var>geometry</var></a></td>
    <td>improve brightness / contrast of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#canny">-canny <var>geometry</var></a></td>
    <td>use a multi-stage algorithm to detect a wide range of edges in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#caption">-caption <var>string</var></a></td>
    <td>assign a caption to an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#cdl">-cdl <var>filename</var></a></td>
    <td>color correct with a color decision list</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#channel">-channel <var>type</var></a></td>
    <td>apply option to select image channels</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#charcoal">-charcoal <var>radius</var></a></td>
    <td>simulate a charcoal drawing</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#chop">-chop <var>geometry</var></a></td>
    <td>remove pixels from the image interior</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clip">-clip</a></td>
    <td>clip along the first path from the 8BIM profile</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clahe">-clahe <var>geometry</var></a></td>
    <td>contrast limited adaptive histogram equalization</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clamp">-clamp</a></td>
    <td>set each pixel whose value is below zero to zero and any the pixel whose value is above the quantum range to the quantum range (e.g. 65535) otherwise the pixel value remains unchanged.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clip-mask">-clip-mask</a> <var>filename</var></td>
    <td>associate clip mask with the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clip-path">-clip-path <var>id</var></a></td>
    <td>clip along a named path from the 8BIM profile</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#clut">-clut</a></td>
    <td>apply a color lookup table to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#color-threshold">-color-threshold <var>start-color</var>-<var>stop-color</var></a></td>
    <td>force all pixels in the color range to white otherwise black</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#complex">-complex<var>operator</var></a></td>
    <td>perform complex mathematics on an image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#connected-components">-connected-components <var>connectivity</var></a></td>
    <td>connected-components uniquely labeled, choose from 4 or 8 way connectivity</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#contrast-stretch">-contrast-stretch <var>geometry</var></a></td>
    <td>improve the contrast in an image by `stretching' the range of intensity value</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#coalesce">-coalesce</a></td>
    <td>merge a sequence of images</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#colorize">-colorize <var>value</var></a></td>
    <td>colorize the image with the fill color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#color-matrix">-color-matrix <var>matrix</var></a></td>
    <td>apply color correction to the image.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#colors">-colors <var>value</var></a></td>
    <td>preferred number of colors in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#colorspace">-colorspace <var>type</var></a></td>
    <td>set image colorspace</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#combine">-combine</a></td>
    <td>combine a sequence of images</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#comment">-comment <var>string</var></a></td>
    <td>annotate image with comment</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#compose">-compose <var>operator</var></a></td>
    <td>set image composite operator</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#composite">-composite</a></td>
    <td>composite image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#compress">-compress <var>type</var></a></td>
    <td>image compression type</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#contrast">-contrast</a></td>
    <td>enhance or reduce the image contrast</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#convolve">-convolve <var>coefficients</var></a></td>
    <td>apply a convolution kernel to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#copy">-copy <var>geometry</var> <var>offset</var></a></td>
    <td>copy pixels from one area of an image to another</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#crop">-crop <var>geometry</var></a></td>
    <td>crop the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#cycle">-cycle <var>amount</var></a></td>
    <td>cycle the image colormap</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#decipher">-decipher <var>filename</var></a></td>
    <td>convert cipher pixels to plain</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#debug">-debug <var>events</var></a></td>
    <td>display copious debugging information</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#define">-define <var>format:option</var></a></td>
    <td>define one or more image format options</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#deconstruct">-deconstruct</a></td>
    <td>break down an image sequence into constituent parts</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#delay">-delay <var>centiseconds</var></a></td>
    <td>display the next image after pausing</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#delete">-delete <var>index</var></a></td>
    <td>delete the image from the image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#density">-density <var>geometry</var></a></td>
    <td>horizontal and vertical density of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#depth">-depth <var>value</var></a></td>
    <td>image depth</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#despeckle">-despeckle</a></td>
    <td>reduce the speckles within an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#direction">-direction <var>type</var></a></td>
    <td>render text right-to-left or left-to-right</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#display">-display <var>server</var></a></td>
    <td>get image or font from this X server</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#dispose">-dispose <var>method</var></a></td>
    <td>layer disposal method</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#distort">-distort <var>type coefficients</var></a></td>
    <td>distort image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#distribute-cache">-distribute-cache <var>port</var></a></td>
    <td>launch a pixel cache server</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#dither">-dither  <var>method</var></a></td>
    <td>apply error diffusion to image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#draw">-draw <var>string</var></a></td>
    <td>annotate the image with a graphic primitive</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#duplicate">-duplicate <var>count,indexes</var></a></td>
    <td>duplicate an image one or more times</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#edge">-edge <var>radius</var></a></td>
    <td>apply a filter to detect edges in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#emboss">-emboss <var>radius</var></a></td>
    <td>emboss an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#encipher">-encipher <var>filename</var></a></td>
    <td>convert plain pixels to cipher pixels</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#encoding">-encoding <var>type</var></a></td>
    <td>text encoding type</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#endian">-endian <var>type</var></a></td>
    <td>endianness (MSB or LSB) of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#enhance">-enhance</a></td>
    <td>apply a digital filter to enhance a noisy image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#equalize">-equalize</a></td>
    <td>perform histogram equalization to an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#evaluate">-evaluate <var>operator value</var></a></td>
    <td>evaluate an arithmetic, relational, or logical expression</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#evaluate-sequence">-evaluate-sequence <var>operator</var></a></td>
    <td>evaluate an arithmetic, relational, or logical expression for an image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#extent">-extent <var>geometry</var></a></td>
    <td>set the image size</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#extract">-extract <var>geometry</var></a></td>
    <td>extract area from image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#family">-family <var>name</var></a></td>
    <td>render text with this font family</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#features">-features <var>distance</var></a></td>
    <td>analyze image features (e.g. contract, correlations, etc.).</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#fft">-fft</a></td>
    <td>implements the discrete Fourier transform (DFT)</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#fill">-fill <var>color</var></a></td>
    <td>color to use when filling a graphic primitive</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#filter">-filter <var>type</var></a></td>
    <td>use this filter when resizing an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#flatten">-flatten</a></td>
    <td>flatten a sequence of images</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#flip">-flip</a></td>
    <td>flip image in the vertical direction</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#floodfill">-floodfill <var>geometry color</var></a></td>
    <td>floodfill the image with color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#flop">-flop</a></td>
    <td>flop image in the horizontal direction</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#font">-font <var>name</var></a></td>
    <td>render text with this font</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#format">-format <var>type</var></a></td>
    <td>output formatted image characteristics</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#frame">-frame <var>geometry</var></a></td>
    <td>surround image with an ornamental border</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#function">-function <var>name</var></a></td>
    <td>apply a function to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#fuzz">-fuzz <var>distance</var></a></td>
    <td>colors within this distance are considered equal</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#fx">-fx <var>expression</var></a></td>
    <td>apply mathematical expression to an image channel(s)</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#gamma">-gamma <var>value</var></a></td>
    <td>level of gamma correction</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#gaussian-blur">-gaussian-blur <var>geometry</var></a></td>
    <td>reduce image noise and reduce detail levels</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#geometry">-geometry <var>geometry</var></a></td>
    <td>preferred size or location of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#gravity">-gravity <var>type</var></a></td>
    <td>horizontal and vertical text placement</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#grayscale">-grayscale <var>method</var></a></td>
    <td>convert image to grayscale</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#green-primary">-green-primary <var>point</var></a></td>
    <td>chromaticity green primary point</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#help">-help</a></td>
    <td>print program options</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#hough-lines">-hough-lines <var>geometry</var></a></td>
    <td>identify lines in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#identify">-identify</a></td>
    <td>identify the format and characteristics of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#ift">-ifft</a></td>
    <td>implements the inverse discrete Fourier transform (DFT)</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#illuminant">-illuminant <var>type</var></a></td>
    <td>reference illuminant</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#implode">-implode <var>amount</var></a></td>
    <td>implode image pixels about the center</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#insert">-insert <var>index</var></a></td>
    <td>insert last image into the image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#intensity">-intensity <var>method</var></a></td>
    <td>method to generate an intensity value from a pixel</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#integral">-integral</a></td>
    <td>Calculate the sum of values (pixel values) in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#intent">-intent <var>type</var></a></td>
    <td>type of rendering intent when managing the image color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#interlace">-interlace <var>type</var></a></td>
    <td>type of image interlacing scheme</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#interline-spacing">-interline-spacing <var>value</var></a></td>
    <td>the space between two text lines</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#interpolate">-interpolate <var>method</var></a></td>
    <td>pixel color interpolation method</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#interword-spacing">-interword-spacing <var>value</var></a></td>
    <td>the space between two words</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#kerning">-kerning <var>value</var></a></td>
    <td>the space between two characters</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#colors">-kmeans <var>geometry</var></a></td>
    <td>K means color reduction</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#kuwahara">-kuwahara <var>geometry</var></a></td>
    <td>edge preserving noise reduction filter</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#label">-label <var>string</var></a></td>
    <td>assign a label to an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#lat">-lat <var>geometry</var></a></td>
    <td>local adaptive thresholding</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#layers">-layers <var>method</var></a></td>
    <td>optimize or compare image layers</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#level">-level <var>value</var></a></td>
    <td>adjust the level of image contrast</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#limit">-limit <var>type value</var></a></td>
    <td>pixel cache resource limit</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#linear-stretch">-linear-stretch <var>geometry</var></a></td>
    <td>linear with saturation histogram stretch</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#liquid-rescale">-liquid-rescale <var>geometry</var></a></td>
    <td>rescale image with seam-carving</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#log">-log <var>format</var></a></td>
    <td>format of debugging information</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#loop">-loop <var>iterations</var></a></td>
    <td>add Netscape loop extension to your GIF animation</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#mattecolor">-mattecolor <var>color</var></a></td>
    <td>frame color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#median">-median <var>radius</var></a></td>
    <td>apply a median filter to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#mean-shift">-mean-shift <var>geometry</var></a></td>
    <td>delineate arbitrarily shaped clusters in the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#metric">-metric <var>type</var></a></td>
    <td>measure differences between images with this metric</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#mode">-mode <var>radius</var></a></td>
    <td>make each pixel the 'predominant color' of the neighborhood</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#modulate">-modulate <var>value</var></a></td>
    <td>vary the brightness, saturation, and hue</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#monitor">-monitor</a></td>
    <td>monitor progress</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#monochrome">-monochrome</a></td>
    <td>transform image to black and white</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#morph">-morph <var>value</var></a></td>
    <td>morph an image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#morphology">-morphology <var>method</var></a> <var>kernel</var></td>
    <td>apply a morphology method to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#motion-blur">-motion-blur <var>geometry</var></a></td>
    <td>simulate motion blur</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#negate">-negate</a></td>
    <td>replace each pixel with its complementary color </td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#noise">-noise <var>radius</var></a></td>
    <td>add or reduce noise in an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#normalize">-normalize</a></td>
    <td>transform image to span the full range of colors</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#opaque">-opaque <var>color</var></a></td>
    <td>change this color to the fill color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#ordered-dither">-ordered-dither <var>NxN</var></a></td>
    <td>ordered dither the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#orient">-orient <var>type</var></a></td>
    <td>image orientation</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#page">-page <var>geometry</var></a></td>
    <td>size and location of an image canvas (setting)</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#path">-path <var>path</var></a></td>
    <td>write images to this path on disk</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#paint">-paint <var>radius</var></a></td>
    <td>simulate an oil painting</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#perceptible">-perceptible</a></td>
    <td>set each pixel whose value is less than |<var>epsilon</var>| to <var>-epsilon</var> or <var>epsilon</var> (whichever is closer) otherwise the pixel value remains unchanged.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#ping">-ping</a></td>
    <td>efficiently determine image attributes</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#pointsize">-pointsize <var>value</var></a></td>
    <td>font point size</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#polaroid">-polaroid <var>angle</var></a></td>
    <td>simulate a Polaroid picture</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#poly">-poly <var>terms</var></a></td>
    <td>build a polynomial from the image sequence and the corresponding terms (coefficients and degree pairs).</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#posterize">-posterize <var>levels</var></a></td>
    <td>reduce the image to a limited number of color levels</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#precision">-precision <var>value</var></a></td>
    <td>set the maximum number of significant digits to be printed</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#preview">-preview <var>type</var></a></td>
    <td>image preview type</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#print">-print <var>string</var></a></td>
    <td>interpret string and print to console</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#process">-process <var>image-filter</var></a></td>
    <td>process the image with a custom image filter</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#profile">-profile <var>filename</var></a></td>
    <td>add, delete, or apply an image profile</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#quality">-quality <var>value</var></a></td>
    <td>JPEG/MIFF/PNG compression level</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#quantize">-quantize <var>colorspace</var></a></td>
    <td>reduce image colors in this colorspace</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#quiet">-quiet</a></td>
    <td>suppress all warning messages</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#rotational-blur">-rotational-blur <var>angle</var></a></td>
    <td>radial blur the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#raise">-raise <var>value</var></a></td>
    <td>lighten/darken image edges to create a 3-D effect</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#random-threshold">-random-threshold <var>low, high</var></a></td>
    <td>random threshold the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#range-threshold">-range-threshold <var>low-black, low-white, high-white, high-black</var></a></td>
    <td>perform either hard or soft thresholding within some range of values in an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#read-mask">-read-mask <var>filename</var></a></td>
    <td>associate a read mask with the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#red-primary">-red-primary <var>point</var></a></td>
    <td>chromaticity red primary point</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#regard-warnings">-regard-warnings</a></td>
    <td>pay attention to warning messages.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#region">-region <var>geometry</var></a></td>
    <td>apply options to a portion of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#remap">-remap <var>filename</var></a></td>
    <td>transform image colors to match this set of colors</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#render">-render</a></td>
    <td>render vector graphics</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#repage">-repage <var>geometry</var></a></td>
    <td>size and location of an image canvas</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#resample">-resample <var>geometry</var></a></td>
    <td>change the resolution of an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#reshape">-reshape <var>geometry</var></a></td>
    <td>reshape the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#resize">-resize <var>geometry</var></a></td>
    <td>resize the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#respect-parentheses">-respect-parentheses</a></td>
    <td>settings remain in effect until parenthesis boundary.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#roll">-roll <var>geometry</var></a></td>
    <td>roll an image vertically or horizontally</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#rotate">-rotate <var>degrees</var></a></td>
    <td>apply Paeth rotation to the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sample">-sample <var>geometry</var></a></td>
    <td>scale image with pixel sampling</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sampling-factor">-sampling-factor <var>geometry</var></a></td>
    <td>horizontal and vertical sampling factor</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#scale">-scale <var>geometry</var></a></td>
    <td>scale the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#scene">-scene <var>value</var></a></td>
    <td>image scene number</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#seed">-seed <var>value</var></a></td>
    <td>seed a new sequence of pseudo-random numbers</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#segment">-segment <var>values</var></a></td>
    <td>segment an image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#threshold">-selective-blur <var>geometry</var></a></td>
    <td>selectively blur pixels within a contrast threshold</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#separate">-separate</a></td>
    <td>separate an image channel into a grayscale image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sepia-tone">-sepia-tone <var>threshold</var></a></td>
    <td>simulate a sepia-toned photo</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#set">-set <var>attribute value</var></a></td>
    <td>set an image attribute</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#shade">-shade <var>degrees</var></a></td>
    <td>shade the image using a distant light source</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#shadow">-shadow <var>geometry</var></a></td>
    <td>simulate an image shadow</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sharpen">-sharpen <var>geometry</var></a></td>
    <td>sharpen the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#shave">-shave <var>geometry</var></a></td>
    <td>shave pixels from the image edges</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#shear">-shear <var>geometry</var></a></td>
    <td>slide one edge of the image along the X or Y axis</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sigmoidal">-sigmoidal-contrast <var>geometry</var></a></td>
    <td>increase the contrast without saturating highlights or shadows</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#size">-size <var>geometry</var></a></td>
    <td>width and height of image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sketch">-sketch <var>geometry</var></a></td>
    <td>simulate a pencil sketch</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#smush">-smush <var>offset</var></a></td>
    <td>smush an image sequence together</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#solarize">-solarize <var>threshold</var></a></td>
    <td>negate all pixels above the threshold level</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#sort-pixels">-sort-pixels</a></td>
    <td>sorts pixels within each scanline in ascending order of intensity</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#splice">-splice <var>geometry</var></a></td>
    <td>splice the background color into the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#spread">-spread <var>radius</var></a></td>
    <td>displace image pixels by a random amount</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#statistic">-statistic <var>type</var> <var>geometry</var></a></td>
    <td>replace each pixel with corresponding statistic from the neighborhood</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#strip">-strip</a></td>
    <td>strip image of all profiles and comments</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#stroke">-stroke <var>color</var></a></td>
    <td>graphic primitive stroke color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#strokewidth">-strokewidth <var>value</var></a></td>
    <td>graphic primitive stroke width</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#stretch">-stretch <var>type</var></a></td>
    <td>render text with this font stretch</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#style">-style <var>type</var></a></td>
    <td>render text with this font style</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#swap">-swap <var>indexes</var></a></td>
    <td>swap two images in the image sequence</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#swirl">-swirl <var>degrees</var></a></td>
    <td>swirl image pixels about the center</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#synchronize">-synchronize</a></td>
    <td>synchronize image to storage device</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#texture">-texture <var>filename</var></a></td>
    <td>name of texture to tile onto the image background</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#threshold">-threshold <var>value</var></a></td>
    <td>threshold the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#thumbnail">-thumbnail <var>geometry</var></a></td>
    <td>create a thumbnail of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#tile">-tile <var>filename</var></a></td>
    <td>tile image when filling a graphic primitive</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#tile-offset">-tile-offset <var>geometry</var></a></td>
    <td>set the image tile offset</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#tint">-tint <var>value</var></a></td>
    <td>tint the image with the fill color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#transform">-transform</a></td>
    <td>affine transform image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#transparent">-transparent <var>color</var></a></td>
    <td>make this color transparent within the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#transparent-color">-transparent-color <var>color</var></a></td>
    <td>transparent color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#transpose">-transpose</a></td>
    <td>flip image in the vertical direction and rotate 90 degrees</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#transverse">-transverse</a></td>
    <td>flop image in the horizontal direction and rotate 270 degrees</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#treedepth">-treedepth <var>value</var></a></td>
    <td>color tree depth</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#trim">-trim</a></td>
    <td>trim image edges</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#type">-type <var>type</var></a></td>
    <td>image type</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#undercolor">-undercolor <var>color</var></a></td>
    <td>annotation bounding box color</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#unique-colors">-unique-colors</a></td>
    <td>discard all but one of any pixel color.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#units">-units <var>type</var></a></td>
    <td>the units of image resolution</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#unsharp">-unsharp <var>geometry</var></a></td>
    <td>sharpen the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#verbose">-verbose</a></td>
    <td>print detailed information about the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#version">-version</a></td>
    <td>print version information</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#view">-view</a></td>
    <td>FlashPix viewing transforms</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#vignette">-vignette <var>geometry</var></a></td>
    <td>soften the edges of the image in vignette style</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#virtual-pixel">-virtual-pixel <var>method</var></a></td>
    <td>access method for pixels outside the boundaries of the image</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#wave">-wave <var>geometry</var></a></td>
    <td>alter an image along a sine wave</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#wavelet">-wavelet-denoise <var>threshold</var></a></td>
    <td>removes noise from the image using a wavelet transform</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#weight">-weight <var>type</var></a></td>
    <td>render text with this font weight</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#white-point">-white-point <var>point</var></a></td>
    <td>chromaticity white point</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#white-threshold">-white-threshold <var>value</var></a></td>
    <td>force all pixels above the threshold into white</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#word-break">-word-break <var>type</var></a></td>
    <td>sets whether line breaks appear wherever the text would otherwise overflow its content box.  Choose from <samp>normal</samp>, the default, or <samp>break-word</samp>.</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#write">-write <var>filename</var></a></td>
    <td>write images to this file</td>
  </tr>

  <tr>
    <td><a href="/command-line-options/#write-mask">-write-mask <var>filename</var></a></td>
    <td>associate a write mask with the image</td>
  </tr>

  </tbody>
</table>

</div>
