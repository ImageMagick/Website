<div class="magick-header">
<h1 class="text-center">Uniquely Label Connected Regions</h1>
<p class="lead magick-description">Connected-component labeling (alternatively connected-component analysis, blob extraction, region labeling, blob discovery, or region extraction) uniquely labels connected components in an image.  The labeling process scans the image, pixel-by-pixel from top-left to bottom-right, in order to identify connected pixel regions, i.e. regions of adjacent pixels which share the same set of intensity values.  For example, let's find the objects in this image:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.gif"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.gif" width="256" height="171" class="image-slices" alt="purse" /></a>
</ul>
<p>To identify the objects in this image, use this command:</p>
<ul><pre class="bg-light text-dark"><samp>magick objects.gif -connected-components 4 -auto-level -depth 8 objects.png</samp></pre></ul>
<p>The detected objects are uniquely labeled.  Use auto leveling to visualize the detected objects:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.png" width="256" height="171" class="image-slices" alt="Objects" /></a>
</ul>
<p>Object statistics is useful to review.  To display them, use this command:</p>
<ul><pre class="bg-light text-dark"><samp>magick objects.gif -define connected-components:verbose=true -connected-components 4 objects.png</samp></pre></ul>
<p>Five objects were detected in the source image with these statistics:</p>
<ul><pre class="bg-light text-dark"><samp>Objects (id: bounding-box centroid area mean-color):
  0: 256x171+0+0 119.2,80.8 33117 srgb(0,0,0)
  2: 120x135+104+18 159.5,106.5 8690 srgb(255,255,255)
  3: 50x36+129+44 154.2,63.4 1529 srgb(0,0,0)
  4: 21x23+0+45 8.8,55.9 409 srgb(255,255,255)
  1: 4x10+252+0 253.9,4.1 31 srgb(255,255,255)
</samp></pre></ul>
<p>Add <samp>-define connected-components:exclude-header=true</samp> to show the objects without the header-line.  Add <samp>-define connected-components:exclude-ids=true</samp>.</p>
<p>Use <samp>-connected-components 8</samp> to visit 8 neighbors rather than 4.  By default, neighbor colors must be exact to be part of a unique object. Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fuzz">-fuzz</a> option to include pixels as part of an object that are <var>close</var> in color.</p>
<p>You might want to eliminate small objects by merging them with their larger neighbors.  If so, use this command:</p>
<ul><pre class="bg-light text-dark"><samp>magick objects.gif -define connected-components:area-threshold=410 -connected-components 4 \
  -auto-level objects.jpg</samp></pre></ul>
<p>Here are the expected results.  Notice, how the small objects are now merged with the background.</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.jpg" width="256" height="171" class="image-slices" alt="Objects" /></a>
</ul>
<p>Notice how two of the objects were merged leaving three remaining objects:</p>
<ul><pre class="bg-light text-dark"><samp>Objects (id: bounding-box centroid area mean-color):
  0: 256x171+0+0 118.0,80.4 33557 srgb(0,0,0)
  2: 120x135+104+18 159.5,106.5 8690 srgb(255,255,255)
  3: 50x36+129+44 154.2,63.4 1529 srgb(0,0,0)</samp></pre></ul>
<p>By default, the labeled image is grayscale.  You can instead replace the object color in the labeled image with the mean-color from the source image. Simply add this setting, <samp>-define connected-components:mean-color=true</samp>, to your command line.</p>
<p>Thresholds can optionally include ranges, e.g. <samp>-define connected-components:area-threshold=410-1600</samp>. To keep the background object, identify it with <samp>-define connected-components:background-id=<var>object-id</var></samp>.  The default background object is the object with the largest area.</p>
<p>In addition to area, there is support for these thresholding metrics:</p>
<ul>
<li>connected-components:angle-threshold (from equivalent ellipse)</li>
<li>connected-components:circularity-threshold (4*pi*area/perimeter^2)</li>
<li>connected-components:diameter-threshold (sqrt(4*area/pi))</li>
<li>connected-components:eccentricity-threshold (from equivalent ellipse)</li>
<li>connected-components:major-axis-threshold (diameter from equivalent ellipse)</li>
<li>connected-components:minor-axis-threshold (diameter from equivalent ellipse)</li>
<li>connected-components:perimeter-threshold</li>
</ul>
<p>You may want to remove certain objects.  Use <samp>-define connected-components:remove-ids=<em>list-of-ids</em></samp> (e.g. -define connected-components:remove-ids=2,4-5).  Or use <samp>-define connected-components:keep-ids=<em>list-of-ids</em></samp> to keep these objects and merge all others. For convenience, you can keep the top objects with this option: <samp>-define connected-components:keep-top=<em>number-of-objects</em></samp>. Rather than object ids, you can instead remove or keep objects identified by there color, e.g. <samp>-define connected-components:keep-colors=<em>red;green;blue</em></samp>.</p>
<p>Objects in your image may look homogeneous but have slightly different color values.  By default, only pixels that match exactly are considered as part of a particular object.  For slight variations of color in an object, use <samp>-fuzz</samp>.  For example,</p>
<ul><pre class="bg-light text-dark"><samp>magick star-map.png -fuzz 5% -define connected-components:verbose=true \
  -define connected-components:mean-color=true -connected-components 4 stars.gif</samp></pre></ul>
</div>
