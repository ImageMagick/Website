<div>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead">Use the <samp>compare</samp> program to mathematically and visually annotate the difference between an image and its reconstruction.  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command Line Processing</a> for advice on how to structure your <samp>compare</samp> command or see below for example usages of the command.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>compare</samp> command here to illustrate its usefulness and ease of use. To get started, lets compare an image to one that's been sharpened:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick rose.jpg -sharpen 0x1 reconstruct.jpg
magick compare rose.jpg reconstruct.jpg difference.png
magick compare -compose src rose.jpg reconstruct.jpg difference.png </samp></pre>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg" width="70" height="46" alt="rose" /></a>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/reconstruct.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/reconstruct.jpg" width="70" height="46" alt="rose" /></a>
  <img style="margin:13px 0;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/difference.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/difference.png" width="70" height="46" alt="rose" /></a>
</ul>

<p>The red areas of the difference image emphasizes (highlight) pixels that are affected by the image sharpening, whereas white de-emphasizes (lowlight) pixels that are untouched by the sharpening process.</p>

<p>In addition to the visual interpretation of the difference in an image and its reconstruction, we report a mathematical measure of the difference:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick compare -verbose -metric mae rose.jpg reconstruct.jpg difference.png
Image: rose.jpg
 Channel distortion: MAE
  red: 2282.91 (0.034835)
  green: 1853.99 (0.0282901)
  blue: 2008.67 (0.0306503)
  all: 1536.39 (0.0234439) </samp></pre>
<p>Or, if you just want the red channel distortion, use this command:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick compare -channel red -metric PSNR rose.jpg reconstruct.jpg difference.png
19.63 </samp></pre>

<p>Or, if you just want the overall image distortion, use this command:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick compare -metric PSNR rose.jpg reconstruct.jpg difference.png
28.31 </samp></pre>

<p>If the reconstructed image is a subimage of the image, the compare program returns the best match offset.  In addition, it returns a similarity image such that an exact match location is completely white and if none of the pixels match, black, otherwise some gray level in-between:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick compare -metric NCC -subimage-search logo.png hat.png similarity.png
0.99870222 @ 353,157 [0.309472]</samp></pre>

<p>The value in the brackets is the normalized simularity metric.</p>

<p>The subimage search feature in ImageMagick can be quite slow due to its iterative nature. However, if your release of ImageMagick includes FFTW (Fastest Fourier Transform in the West) support and your metric is { NCC, MSE, RMSE, PHASE, PSNR }, you can expect an order of magnitude speed increase in processing time.</p>

<p>You can find additional examples of using <samp>compare</samp> in <a href="https://usage.imagemagick.org/">Examples of ImageMagick Usage</a>.</p>

<p>Two images are considered similar if their difference according to the specified metric and fuzz value is 0, with the exception of the normalized cross correlation metric (NCC), where two images are considered similar when their normalized cross correlation is 1. The default metric is NCC.</p>

<p>The compare program returns 2 on error, 0 if the images are similar, or a value between 0 and 1 if they are not similar.</p>

<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>compare</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#authenticate">-authenticate <var>value</var></a></td>
    <td>decrypt image with this password</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#auto-orient">-auto-orient</a></td>
    <td>automagically orient image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#background">-background <var>color</var></a></td>
    <td>background color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#brightness-contrast">-brightness-contrast <var>geometry</var></a></td>
    <td>improve brightness / contrast of the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel <var>type</var></a></td>
    <td>apply option to select image channels</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#colorspace">-colorspace <var>type</var></a></td>
    <td>set image colorspace</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compose">-compose <var>operator</var></a></td>
    <td>set image composite operator</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#crop">-crop <var>geometry</var></a></td>
    <td>crop the image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#decipher">-decipher <var>filename</var></a></td>
    <td>convert cipher pixels to plain</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#dissimilarity-threshold">-dissimilarity-threshold <var>value</var></a></td>
    <td>maximum distortion for (sub)image match (default 0.2)</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#distort">-distort <var>type coefficients</var></a></td>
    <td>distort image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#encipher">-encipher <var>filename</var></a></td>
    <td>convert plain pixels to cipher pixels</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#extract">-extract <var>geometry</var></a></td>
    <td>extract area from image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fuzz">-fuzz <var>distance</var></a></td>
    <td>colors within this distance are considered equal</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#highlight-color">-highlight-color <var>color</var></a></td>
    <td>emphasize pixel differences with this color</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#lowlight-color">-lowlight-color <var>color</var></a></td>
    <td>de-emphasize pixel differences with this color</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#metric">-metric <var>type</var></a></td>
    <td>measure differences between images with this metric</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#negate">-negate</a></td>
    <td>replace each pixel with its complementary color </td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#read-mask">-read-mask <var>filename</var></a></td>
    <td>associate a read mask with the image</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#seed">-seed <var>value</var></a></td>
    <td>seed a new sequence of pseudo-random numbers</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#separate">-separate</a></td>
    <td>separate an image channel into a grayscale image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set <var>attribute value</var></a></td>
    <td>set an image attribute</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sigmoidal">-sigmoidal-contrast <var>geometry</var></a></td>
    <td>increase the contrast without saturating highlights or shadows</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#similarity-threshold">-similarity-threshold <var>value</var></a></td>
    <td>minimum distortion for (sub)image match (default 0.0)</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size <var>geometry</var></a></td>
    <td>width and height of image</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#subimage-search">-subimage-search</a></td>
    <td>search for subimage</td>
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
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#write-mask">-read-mask <var>filename</var></a></td>
    <td>associate a write mask with the image</td>
  </tr>

  </tbody>
</table>
</div>
