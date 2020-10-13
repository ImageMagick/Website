<div class="magick-header">
<p class="lead magick-description">Use contrast limited adaptive histogram equalization (AHE) to improve contrast in images.  Ordinary histogram equalization computes a global equalization whereas an adaptive method computes several histograms, each corresponding to a distinct section of the image, and uses them to redistribute the lightness values of the image.  It is suitable for improving the local contrast and enhancing the definitions of edges in each region of an image.  A variant of adaptive histogram equalization, contrast limited adaptive histogram equalization (CLAHE) limits AHE's tendency to overamplify noise in relatively homogeneous regions of an image.</p>
<p>CLAHE is supported as of ImageMagick 7.0.8-24 with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#clahe">-clahe</a> option:</p>
<ul>
<h6><a class="anchor" id="clahe"></a>-clahe <var>width</var>x<var>height</var>{%}{+}<var>number-bins</var>{+}<var>clip-limit</var>{!}</h6>
</ul>
<p> The image is divided into tiles of <var>width</var> and <var>height</var> pixels.  Append <code>%</code> to define the width and height as percentages of the image's dimensions. The tile size should be larger than the size of features to be preserved and respects the aspect ratio of the image.  Add <code>!</code> to force an exact tile width and height. <var>number-bins</var> is the number of histogram bins per tile (min 2, max 65536).  The number of histogram bins should be smaller than the number of pixels in a single tile. <var>clip-limit</var> is the contrast limit for localized changes in contrast. A clip-limit of 2 to 3 is a good starting place (e.g. -clahe 50x50%+128+3).  Very large values will let the histogram equalization do whatever it wants to do, that is result in maximal local contrast. The value 1 will result in the original image.  Note, if the number of bins and the clip-limit are omitted, they default to 128 and no clipping respectively.</p>
<p>To visualize the benefits of CLAHE, we have a low contrast image of mountains:</p>
<p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/mountains.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/mountains.jpg" width="500" height="333" alt="label" /></a>
</ul>
<p>We can improve the image with global histogram equalization:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/mountains.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/mountains-equalize.jpg" width="500" height="333" alt="label" /></a>
</ul>
<p>We can further improve the image with the contrast limited adaptive histogram equalization image processing technique:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/mountains.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/mountains-clahe.jpg" width="500" height="333" alt="label" /></a>
</ul>
<p>The latter image was produced with this command:</p>
<pre class="highlight">
magick mountains.jpg -clahe 25x25%+128+3 mountains-clahe.jpg
</pre>
<p>The <code>25x25%</code> argument divides the image into 16 tiles to perform local contrast enhancement.  The image dimensions are <code>1500x1000</code> so the tiles are exactly <code>375x250</code> pixels each.  Rather than a percentage, you can specify the tile dimensions directly with <code>375x250</code>.</p>
<p>For tile sizes that do not divide evenly into the image dimensions, CLAHE utilizes virtual pixels, as such the results can vary slightly based on your chosen virtual pixel method.  For example,</p>
<pre class="highlight">
magick mountains.jpg -virtual-pixel mirror -clahe 300x300+128+3! mountains-clahe.jpg
</pre>
<p>Notice the <code>!</code>.  That forces the tile size to exactly 300x300 pixels, whereas without the <code>!</code>, the tile size respects the aspect ratio of the image and results in tile dimensions of <code>300x200</code>.</p>
 
</div>
