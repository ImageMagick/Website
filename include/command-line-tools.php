<div class="magick-header">

<p class="lead magick-description">ImageMagick includes a number of command-line utilities for manipulating images.  Most of you are probably accustomed to editing images one at a time with a graphical user interface (GUI) with such programs as <a href="http://www.gimp.org">gimp</a> or <a href="http://www.adobe.com">Photoshop</a>.  However, a GUI is not always convenient.  Suppose you want to process an image dynamically from a web script or you want to apply the same operations to many images or repeat a specific operation at different times to the same or different image.  For these types of operations, the command-line image processing utility is appropriate.</p>

<p>The ImageMagick <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">command-line</a> tools exit with a status of 0 if the command line arguments have a proper syntax and no problems are encountered.  Expect a descriptive message and an exit status of 1 if any exception occurs such as improper syntax, a problem reading or writing an image, or any other problem that prevents the command from completing successfully.</p>

<p>Here is a short description for each command-line tool. Click on the program name to get details about the program usage and a list of command-line options that alters how the program behaves.  If you are just getting acquainted with ImageMagick, start with the <a href="#convert">convert</a> program.  Be sure to peruse Anthony Thyssen's tutorial on how to use ImageMagick utilities to <a href="http://www.imagemagick.org/Usage/">create, edit, compose, or convert</a> images from the command-line.</p>

<dl class="dl-horizontal">
  <dt><a href="<?php echo $_SESSION['RelativePath']?>/../script/animate.php">animate</a></dt><dd>animate an image sequence on any X server.</dd>
  <dt><a id="compare"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/compare.php">compare</a></dt><dd>mathematically and visually annotate the difference between an image and its reconstruction.</dd>
  <dt><a id="composite"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/composite.php">composite</a></dt><dd>overlap one image over another.</dd>
  <dt><a id="conjure"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/conjure.php">conjure</a></dt><dd>interpret and execute scripts written in the Magick Scripting Language (MSL).</dd>
  <dt><a id="convert"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">convert</a></dt><dd>convert between image formats as well as resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.</dd>
  <dt><a id="display"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a></dt><dd>display an image or image sequence on any X server.</dd>
  <dt><a id="identify"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">identify</a></dt><dd>describe the format and characteristics of one or more image files.</dd>
  <dt><a id="import"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/import.php">import</a></dt><dd>save any visible window on an X server and outputs it as an image file. You can capture a single window, the entire screen, or any rectangular portion of the screen.</dd>
  <dt><a id="mogrify"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/mogrify.php">mogrify</a></dt><dd>resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and much more.  Mogrify overwrites the original image file, whereas, <a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">convert</a> writes to a different image file.</dd>
  <dt><a id="montage"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">montage</a></dt><dd>create a composite image by combining several separate images.  The images are tiled on the composite image optionally adorned with a border, frame, image name, and more.</dd>
  <dt><a id="stream"></a><a href="<?php echo $_SESSION['RelativePath']?>/../script/stream.php">stream</a></dt><dd>a lightweight tool to stream one or more pixel components of the image or portion of the image to your choice of storage formats.  It writes the pixel components as they are read from the input image a row at a time making <code>stream</code> desirable when working with large images or when you require raw pixel components.</dd>
</dl>

</div>
