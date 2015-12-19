<div class="magick-header">
<p class="lead magick-description">Connected-component labeling (alternatively connected-component analysis, blob extraction, region labeling, blob discovery, or region extraction) uniquely labels connected components in an image.  The labeling process scans the image, pixel-by-pixel from top-left to bottom-right, in order to identify connected pixel regions, i.e. regions of adjacent pixels which share the same set of intensity values.  For example, let's find the objects in this image:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.gif"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.gif" width="256" height="171" class="image-slices" alt="purse" /></a>
</ul>
<p>To identify the objects in this image, use this command:</p>
<pre>
convert objects.gif -connected-components 4 -auto-level -depth 8 objects.png
</pre>
<p>The detected objects are uniquely labeled.  Use auto leveling to visualize the detected objects:</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.png" width="256" height="171" class="image-slices" alt="Objects" /></a>
</ul>
<p>Object statistics is useful to review.  To display them, use this command:</p>
<pre>
convert objects.gif -define connected-components:verbose=true -connected-components 4 objects.png
</pre>
<p>Five objects were detected in the source image with these statistics:</p>
<pre>
Objects (id: bounding-box centroid area mean-color):
  0: 256x171+0+0 119.2,80.8 33117 srgb(0,0,0)
  2: 120x135+104+18 159.5,106.5 8690 srgb(255,255,255)
  3: 50x36+129+44 154.2,63.4 1529 srgb(0,0,0)
  4: 21x23+0+45 8.8,55.9 409 srgb(255,255,255)
  1: 4x10+252+0 253.9,4.1 31 srgb(255,255,255)
</pre>
<p>Use <code>-connected-components 8</code> to visit 8 neighbors rather than 4.  By default, neighbor colors must be exact to be part of a unique object. Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fuzz">-fuzz</a> option to include pixels as part of an object that are <var>close</var> in color.</p>
<p>You might want to eliminate small objects by merging them with their larger neighbors.  If so, use this command:</p>
<pre>
convert objects.gif -define connected-components:area-threshold=410 -connected-components 4 \
  -auto-level objects.jpg
</pre>
<p>Here are the expected results.  Notice, how the small objects are now merged with the background.</p>
<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/objects.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/objects.jpg" width="256" height="171" class="image-slices" alt="Objects" /></a>
</ul>
<p>Notice how two of the objects were merged leaving three remaining objects:</p>
<pre>
Objects (id: bounding-box centroid area mean-color):
  0: 256x171+0+0 118.0,80.4 33557 srgb(0,0,0)
  2: 120x135+104+18 159.5,106.5 8690 srgb(255,255,255)
  3: 50x36+129+44 154.2,63.4 1529 srgb(0,0,0)
</pre>
<p>By default, the labeled image is grayscale.  You can instead replace the object color in the labeled image with the mean-color from the source image. Simply add this setting, <code>-define connected-components:mean-color=true</code>, to your command line.</p>
<p>Finally, you may want to remove certain objects by making them transparent.  Use <code>-define connected-components:remove=<em>list-of-ids</em></code> (e.g. -define connected-components:remove=2,4-5)</p>
</div>
