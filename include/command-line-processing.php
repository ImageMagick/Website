<div class="magick-header">
<h1 class="text-center">Anatomy of the Command-line</h1>
<p class="text-center"><a href="#anatomy">The Anatomy of the Command-line</a> • <a href="#input">Input Filename</a> • <a href="#option">Command-line Options</a> • <a href="#output">Output Filename</a></p>

<p class="lead magick-description">The ImageMagick command-line <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">tools</a> can be as simple as this:</p>

<ul><pre class="bg-light text-dark"><samp>magick image.jpg image.png </samp></pre></ul>

<p>Or it can be complex with a plethora of <a href="#option">options</a>, as in the following:</p>

<ul><pre class="bg-light text-dark"><samp>magick label.gif +matte \
  \( +clone  -shade 110x90 -normalize -negate +clone  -compose Plus -composite \) \
  \( -clone 0 -shade 110x50 -normalize -channel BG -fx 0 +channel -matte \) \
  -delete 0 +swap  -compose Multiply -composite  button.gif");</samp></pre></ul>

<p class="text-info">This example command is long enough that the command must be written across several lines, so we formatted it for clarity by inserting backslashes (<samp>\</samp>). The backslash is the Linux <var>line-continuation</var> character. In the Windows shell, use a carat character (<samp>^</samp>) for line-continuation. We use the Linux style on these web pages, as above. Sometimes, however, the lines are wrapped by your browser if the browser window is small enough, but the command-lines, shown in white, are still intended to be typed as one line. Line continuation characters need not be entered. The <var>parentheses</var> that are <var>escaped</var> above using the backslash are not escaped in Windows. There are some other differences between Windows and Linux (involving quotation marks, for instance), but we'll discuss some of those issues later, as they arise. </p>

<p>Without knowing much about the ImageMagick command-line, you can probably surmise that the first command above converts an image in the JPEG format to one in the PNG format.  However, very few may realize the second, more complex command, gives a flat two-dimensional label a three-dimensional look with rich textures and simulated depth:</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/label.gif"><img src="<?php echo $_SESSION['RelativePath']?>/../image/label.gif" width="78" height="53" alt="label" /></a>
<img style="margin-top:16px; margin-bottom:17px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/button.gif">
  <img src="<?php echo $_SESSION['RelativePath']?>/../image/button.gif" width="78" height="53" alt="button" /></a>
</ul>


<p>Here we show percent completion of a task as a shaded cylinder:</p>

<ul>
  <img src="<?php echo $_SESSION['RelativePath']?>/../image/cylinder_shaded.png" width="320" height="200" alt="Shaded Cylinder" />
</ul>

<p>Given the complexity of the rendering, you might be surprised it is accomplished by a single command-line:</p>

<ul><pre class="bg-light text-dark"><samp>magick -size 320x90 canvas:none -stroke snow4 -size 1x90 -tile gradient:white-snow4 \
  -draw 'roundrectangle 16, 5, 304, 85 20,40' +tile -fill snow \
  -draw 'roundrectangle 264, 5, 304, 85  20,40' -tile gradient:chartreuse-green \
  -draw 'roundrectangle 16,  5, 180, 85  20,40' -tile gradient:chartreuse1-chartreuse3 \
  -draw 'roundrectangle 140, 5, 180, 85  20,40' +tile -fill none \
  -draw 'roundrectangle 264, 5, 304, 85 20,40' -strokewidth 2 \
  -draw 'roundrectangle 16, 5, 304, 85 20,40' \( +clone -background snow4 \
  -shadow 80x3+3+3 \) +swap -background none -layers merge \( +size -pointsize 90 \
  -strokewidth 1 -fill red label:'50 %' -trim +repage \( +clone -background firebrick3 \
  -shadow 80x3+3+3 \) +swap -background none -layers merge \) -insert 0 -gravity center \
  -append -background white -gravity center -extent 320x200 cylinder_shaded.png</samp></pre></ul>

<p>In the next sections we dissect the anatomy of the ImageMagick command-line.  Hopefully, after carefully reading and better understanding how the command-line works, you should be able to accomplish complex image-processing tasks without resorting to the sometimes daunting <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">program interfaces</a>.</p>

<p>See <a href="https://legacy.imagemagick.org/Usage/">Examples of ImageMagick Usage</a> for additional help when using ImageMagick from the command-line.</p>

<h2><a class="anchor" id="anatomy"></a>The Anatomy of the Command-line</h2>
<p>The ImageMagick command-line consists of</p>

<ol>
<li>one or more required input filenames.</li>
<li>zero, one, or more image settings.</li>
<li>zero, one, or more image operators.</li>
<li>zero, one, or more image sequence operators.</li>
<li>zero, one, or more image stacks.</li>
<li>zero or one output image filenames (required by
<?php cmd("magick"); ?>,
<?php cmd("convert"); ?>,
<?php cmd("composite"); ?>,
<?php cmd("montage"); ?>,
<?php cmd("compare"); ?>,
<?php cmd("import"); ?>,
<?php cmd("conjure"); ?>).
</li>
</ol>

<p>You can find a detailed explanation of each of the constituent parts of the command-line in the sections that follow.</p>

<h2><a class="anchor" id="input"></a>Input Filename</h2>

<p>ImageMagick extends the concept of an input filename to include:</p>
<ul>
<li>filename globbing</li>
<li>an explicit image format</li>
<li>using built-in images and patterns</li>
<li>STDIN, STDOUT, and file descriptors</li>
<li>selecting certain frames from an image</li>
<li>selecting a region of an image</li>
<li>forcing an inline image resize</li>
<li>forcing an inline image crop</li>
<li>using filename references</li>
</ul>

<p>These extensions are explained in the next few paragraphs.</p>

<p>Note, by default, if a command-line option is also a filename (e.g., <samp>-quality</samp>), it is intrepetted as a filename.  Use <samp>-define registry:option:pedantic=true</samp> to instead interpret it as an option. </p>

<h4>Filename Globbing</h4>
<p>In Linux shells, certain characters such as the asterisk (<samp>*</samp>) and question mark (<samp>?</samp>) automagically cause lists of filenames to be generated based on pattern matches. This feature is known as globbing.  ImageMagick supports filename globbing for systems, such as Windows, that does not natively support it.  For example, suppose you want to convert <samp>1.jpg</samp>, <samp>2.jpg</samp>, <samp>3.jpg</samp>, <samp>4.jpg</samp>, and <samp>5.jpg</samp> in your current directory to a GIF animation.  You can conveniently  refer to all of the JPEG files with this command:
</p>

<ul><pre class="bg-light text-dark"><samp>magick *.jpg images.gif</samp></pre></ul>

<h4>Explicit Image Format</h4>
<p>Images are stored in a myriad of image formats including
the better known JPEG, PNG, TIFF and others.  ImageMagick must know the format
of the image before it can be read and processed.  Most formats have a
signature within the image that uniquely identifies the format.  Failing
that, ImageMagick leverages the filename extension to determine the format. 
For example, <samp>image.jpg</samp> or <samp>image.JPG</samp> tells ImageMagick
it is reading an image in the JPEG format. </p>

                <p>In some cases the image may not contain a signature
and/or the filename does not identify the image format.  In these cases an
explicit image format must be specified.  For example, suppose our image
is named <samp>image</samp> and contains raw red, green, and blue intensity
values.  ImageMagick has no way to automagically determine the image format
so we explicitly set one:
</p>

<ul><pre class="bg-light text-dark"><samp>magick -size 640x480 -depth 8 rgb:image image.png</samp></pre></ul>

<h4>Built-in Images and Patterns</h4>

<p>ImageMagick has a number of built-in <a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php#builtin-images">images</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php#builtin-patterns">patterns</a>.  To utilize the checkerboard pattern, for example, use:
</p>

<ul><pre class="bg-light text-dark"><samp>magick -size 640x480 pattern:checkerboard checkerboard.png</samp></pre></ul>

<h4>STDIN, STDOUT, and file descriptors</h4>
<p>Linux and Windows permit the output of one command to be piped to the input of another. ImageMagick permits image data to be read and written from the <a href="http://en.wikipedia.org/wiki/Standard_streams">standard streams</a> STDIN (<var>standard in</var>) and STDOUT (<var>standard out</var>), respectively, using a pseudo-filename of <samp>-</samp>.  In this example we pipe the output of
  <?php cmd("magick"); ?> to the <?php cmd("display"); ?> program:
</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: gif:- | magick display gif:-</samp></pre></ul>

<p>The second explicit format "<samp>gif:</samp>" is optional in the preceding example.  The GIF image format has a unique signature within the image so ImageMagick's <?php cmd("display"); ?>
 command can readily recognize the format as GIF.  The <?php cmd("magick"); ?> program also accepts STDIN as input in this way:
</p>

<ul><pre class="bg-light text-dark"><samp>magick rose: gif:- | magick - -resize "200%" bigrose.jpg'</samp></pre></ul>

<p>Other pipes can be accessed via their <var>file descriptors</var> (as of version 6.4.9-3). The file descriptors 0, 1, and 2 are reserved for the standard streams STDIN, STDOUT, and STDERR, respectively, but a pipe associated with a file descriptor number <var>N</var>&gt;2 can be accessed using the pseudonym <samp>fd:</samp><var>N</var>. (The pseudonyms <samp>fd:0</samp> and <samp>fd:1</samp> can be used for STDIN and STDOUT.) The next example shows how to append image data piped from files with  descriptors 3 and 4 and direct the result to the file with descriptor number 5.
</p>

<ul><pre class="bg-light text-dark"><samp>magick fd:3 fd:4 -append fd:5</samp></pre></ul>

<p>When needed, explicit image formats can be given as mentioned earlier, as in the following.
</p>

<ul><pre class="bg-light text-dark"><samp>magick gif:fd:3 jpg:fd:4 -append tif:fd:5</samp></pre></ul>

<h4>Selecting Frames</h4>
<p>Some images formats contain more than one image frame.  Perhaps you only want the first image, or the last, or some number of images in-between.  You can specify which image frames to read by appending the image filename with the frame range enclosed in brackets.  Here our image (an animated GIF) contains more than one frame but we only want the first:
</p>

<ul><pre class="bg-light text-dark"><samp>magick 'images.gif[0]' image.png</samp></pre></ul>

<p class="text-info">Linux shells generally interpret brackets so we enclosed the filename in quotes above.
In a Windows command shell the brackets are not interpreted but using quotes doesn't hurt. However, in most cases the roles of single-quotes and double-quotes are reversed with respect to Linux and Windows, so Windows users should usually try double-quotes where we display single-quotes, and vice versa.
</p>

<p>You can read more than one image from a sequence with a frame range.  For example, you can extract the first four frames of an image sequence:
</p>

<ul><pre class="bg-light text-dark"><samp>magick 'images.gif[0-3]' images.mng</samp></pre></ul>

<p>The default is to step one frame at a time so frames 0, 1, 2, and 3 are returned.  Set the step to 2 with <samp>-define frames:step=2</samp> and we instead get frames 0 and 2.</p>

<p>Finally, you can read more than one image from a sequence, out-of-order. The next command gets the third image in the sequence, followed by the second, and then the fourth:
</p>

<ul><pre class="bg-light text-dark"><samp>magick 'images.gif[3,2,4]' images.mng</samp></pre></ul>

<p>Notice that in the last two commands, a single image is written. The output in this case, where the image type is MNG, is a multi-frame file because the MNG format supports multiple frames. Had the output format been JPG, which only supports single frames, the output would have consisted of separate frames. More about that below, in the section about the <a href="#output">Output Filename</a>.
</p>

<h4>Selecting an Image Region</h4>
<p>Raw images are a sequence of color intensities without additional meta information such as width, height, or image signature.  With raw image formats, you must specify the image width and height but you can also specify a region of the image to read.  In our example, the image is in the raw 8-bit RGB format and is 6000 pixels wide and 4000 pixels high.  However, we only want a region of 600 by 400 near the center of the image:
</p>

<ul><pre class="bg-light text-dark"><samp>magick -size 6000x4000 -depth 8 'rgb:image[600x400+1900+2900]' image.jpg</samp></pre></ul>

<p>
  You can get the same results with the <?php option("extract"); ?> option:
</p>

<ul><pre class="bg-light text-dark"><samp>magick -size 6000x4000 -depth 8 -extract 600x400+1900+2900 rgb:image image.jpg</samp></pre></ul>

<h4>Inline Image Resize</h4>
<p>It is sometimes convenient to resize an image as they are read.  Suppose you have hundreds of large JPEG images you want to convert to a sequence of PNG thumbails:
</p>

<ul><pre class="bg-light text-dark"><samp>magick '*.jpg' -resize 120x120 thumbnail%03d.png</samp></pre></ul>

<p>Here <var>all</var> the images are read and subsequently
resized.  It is faster and less resource intensive to resize each image as it
is read:
</p>

<ul><pre class="bg-light text-dark"><samp>magick '*.jpg[120x120]' thumbnail%03d.png</samp></pre></ul>

<h4>Inline Image Crop</h4>
<p>It is sometimes convenient to crop an image as they are read.  Suppose you have hundreds of large JPEG images you want to convert to a sequence of PNG thumbails:
</p>

<ul><pre class="bg-light text-dark"><samp>magick '*.jpg' -crop 120x120+10+5 thumbnail%03d.png</samp></pre></ul>

<p>Here <var>all</var> the images are read and subsequently cropped.  It is faster and less resource-intensive to crop each image as it is read:
</p>

<ul><pre class="bg-light text-dark"><samp>magick '*.jpg[120x120+10+5]' thumbnail%03d.png</samp></pre></ul>


<h4>Filename References</h4>

<p>There are two methods to use a filename to reference other image filenames.
The first is with '<samp>@</samp>' which reads image filenames separated by white space from the specified file.  Assume the file <samp>myimages.txt</samp> consists of a list of filenames, like so:
</p>

<ul><pre class="bg-light text-dark">frame001.jpg
frame002.jpg
frame003.jpg</pre></ul>

<p>We then expect this command:</p>

<ul><pre class="bg-light text-dark"><samp>magick @myimages.txt mymovie.gif</samp></pre></ul>

<p>to read the images <samp>frame001.jpg</samp>, <samp>frame002.jpg</samp>, and <samp>frame003.jpg</samp> and convert them to a GIF image sequence.  </p>
<p>If the image path includes one or more spaces, enclose the path in quotes:</p>
<ul><pre class="bg-light text-dark">'my title.jpg'</pre></ul>


    <p>Some ImageMagick command-line <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php">options</a> may exceed the capabilities of
your command-line processor.  Windows, for example, limits command-lines
to 8192 characters.  If, for example, you have a draw option with polygon
points that exceed the command-line length limit, put the draw option instead
in a file and reference the file with
the <samp>@</samp> (e.g. <samp>@mypoly.txt</samp>).</p>

<p>Another method of referring to other image files is by
embedding a formatting character in the filename with a scene range.  Consider
the filename <samp>image-%d.jpg[1-5]</samp>. The command</p>

<ul><pre class="bg-light text-dark"><samp>magick image-%d.jpg[1-5]</samp></pre></ul>

<p>causes ImageMagick to attempt to read images with these filenames:
</p>

<ul><pre class="bg-light text-dark">image-1.jpg
image-2.jpg
image-3.jpg
image-4.jpg
image-5.jpg</pre></ul>

<h4>Stream Buffering</h4>
<p>By default, the input stream is buffered.  To ensure information on the source file or terminal is read as soon as its available, set the buffer size to 0:</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: gif:- | magick display -define stream:buffer-size=0 gif:-</samp></pre></ul>

<h2><a class="anchor" id="option"></a>Command-line Options</h2>

<p>You can direct the behavior of ImageMagick utilities with these command-line <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php">options</a>.  The behavior of an option falls into one of these categories:</p>

<ul>
<li><a href="#setting">Image Setting</a></li>
<li><a href="#operator">Image Operator</a></li>
<li><a href="#channel">Image Channel Operator</a></li>
<li><a href="#sequence">Image Sequence Operator</a></li>
<li><a href="#geometry">Image Geometry</a></li>
<li><a href="#stack">Image Stack</a></li>
</ul>

<h4><a class="anchor" id="setting"></a>Image Setting</h4>

<p>An image setting persists as it appears on the command-line and may affect
subsequent processing such as reading an image, an image operator, or when
writing an image as appropriate.  An image setting stays in effect until it
is reset or the command-line terminates.  The image settings include:</p>

<ul>
<?php options("adjoin", "affine", "alpha", "antialias", "authenticate", "background", "bias", "black-point-compensation", "blue-primary", "bordercolor", "caption", "channel", "comment", "compress", "debug", "define", "delay", "density", "depth", "direction", "display", "dispose", "dither", "encoding", "endian", "extract", "family", "fill", "filter", "font", "format", "fuzz", "geometry", "gravity", "green-primary", "interlace", "intent", "interpolate", "label", "limit", "linewidth", "log", "loop", "mattecolor", "monitor", "orient", "page", "pointsize", "preview", "quality", "quiet", "read-mask", "red-primary", "region", "render", "repage", "sampling-factor", "scene", "seed", "size", "stretch", "stroke",  "strokewidth", "style", "texture", "tile", "transparent-color", "treedepth", "type", "undercolor", "units", "verbose", "virtual-pixel", "weight", "write-mask");
?>
</ul>

<p>In this example, <var>-channel</var> applies to each of the images, since, as we mentioned, settings persist:
</p>

<ul><pre class="bg-light text-dark"><samp>magick -channel RGB wand.png wizard.png images.png</samp></pre></ul>

<h4><a class="anchor" id="operator"></a>Image Operator</h4>

<p>An image operator differs from a setting in that it affects the image
immediately as it appears on the command-line.  An operator is
any command-line <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php">option</a> not listed as a
<a href="#setting">image setting</a> or
<a href="#sequence">image sequence operator</a>.  Unlike an
image setting, which persists until the command-line terminates,
an operator is applied to the current image set and forgotten.  The image operators include:</p>

<ul>
<?php options("annotate", "black-threshold", "blur", "border", "charcoal", "chop", "clip", "clip-path", "clip-mask", "colors", "colorize", "colorspace", "color-threshold", "compose", "contrast", "convolve", "crop", "cycle", "despeckle", "draw", "edge", "emboss", "enhance", "equalize", "evaluate", "extent", "flip", "flop", "floodfill", "frame", "gamma", "gaussian-blur", "grayscale", "implode", "integral", "kmeans", "lat", "level", "map", "median", "modulate", "monochrome", "negate", "noise", "normalize", "opaque", "ordered-dither", "paint", "posterize", "raise", "profile", "radial-blur", "raise", "random-threshold", "resample", "resize", "roll", "rotate", "sample", "scale", "sepia-tone", "segment", "shade", "shadow", "sharpen", "shave", "shear", "sigmoidal-contrast", "solarize", "splice", "spread", "strip", "swirl", "threshold", "transparent", "thumbnail", "tint", "transform", "trim", "unsharp", "version", "wave", "white-balance", "white-point", "white-threshold");
?>
</ul>

<p>In this example, <var>-negate</var> negates the wand image but not the wizard:</p>

<ul><pre class="bg-light text-dark"><samp>magick wand.png -negate wizard.png images.png</samp></pre></ul>

<p>Note that an image operator will be applied to each images in an image
sequence. For example, if you use <?php option("resize")?> option to resize a
GIF image, each frames will be resized to the given size. However, some frames
may be smaller than the whole image and resizing all the frames into the same
size may result in an unexpected output. In such a case,
<?php option("coalesce")?> should be used to prepare those frames.</p>

<h4><a class="anchor" id="channel"></a>Image Channel Operator</h4>
<p>Operate directly on image channels:</p>
<ul>
<?php options("channel-fx", "separate");
?>
</ul>

<h4><a class="anchor" id="sequence"></a>Image Sequence Operator</h4>

<p>An image sequence operator differs from a setting in that it affects an
image sequence immediately as it appears on the command-line.  Choose from
these image sequence operators:</p>

<ul>
<?php options("append", "affinity", "average", "clut", "coalesce", "combine", "compare", "complex", "composite", "copy", "crop", "debug", "deconstruct", "delete", "evaluate-sequence", "fft", "flatten", "fx", "hald-clut", "ift", "identify", "insert", "layers", "limit", "map", "maximum", "minimum", "morph", "mosaic", "optimize", "print", "process", "quiet", "read", "swap", "write");
?>
</ul>
<p>In this example, <var>-append</var> appends three images into one:</p>

<ul><pre class="bg-light text-dark"><samp>magick mikayla.png picnic.png beach.png -append vacation.png</samp></pre></ul>

<h4><a class="anchor" id="geometry"></a>Image Geometry</h4>

<p>Many command-line <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php">options</a> take a <var>geometry</var> argument
to specify such things as the desired width and height of an image and other
dimensional quantities. Because users want so many variations on the resulting
dimensions, sizes, and positions of images (and because ImageMagick wants to
provide them), the <var>geometry</var> argument can take many
forms. We describe many of these in this section. </p>

<p>The image options and settings that take some form of
a <var>geometry</var> argument include the following.
Keep in mind that some of these parse their arguments in slightly
different ways. See the documentation for the individual option or
setting for more specifics.</p>

<ul>
<?php options("adaptive-resize", "border", "borderwidth", "chop", "crop", "density", "extent", "extract", "frame", "geometry", "iconGeometry", "liquid-rescale", "page", "region", "repage", "resize", "sample", "scale", "shave", "splice", "thumbnail", "window");
?>
</ul>

<p>The <var>geometry</var> argument might take any of the forms listed in the table below. These will described in more detail in the subsections following the table. The usual form is <var>size</var>[<var>offset</var>], meaning <var>size</var> is required and <var>offset</var> is optional. Occasionally, [<var>size</var>]<var>offset</var> is possible. In no cases are spaces permitted within the <var>geometry</var> argument.</p>


<div class="table-responsive" style="font-size:smaller !important;">
<table class="table table-sm table-hover">
  <col width="20%"/> <col width="80%"/>
  <thead>
  <tr>
    <th style="text-align:center"><var>size</var></th>
    <th>General description (actual behavior can vary for different options and settings)</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><var>scale</var>%</td>
    <td>Height and width both scaled by specified percentage.</td>
  </tr>
  <tr>
    <td><var>scale-x</var>%x<var>scale-y</var>%</td>
    <td>Height and width individually scaled by specified percentages. (Only one % symbol needed.)</td>
  </tr>
  <tr>
    <td><var>width</var></td>
    <td>Width given, height automagically selected to preserve aspect ratio.</td>
  </tr>
  <tr>
    <td>x<var>height</var></td>
    <td>Height given, width automagically selected to preserve aspect ratio.</td>
  </tr>
  <tr>
    <td><var>width</var>x<var>height</var></td>
    <td>Maximum values of height and width given, aspect ratio preserved.</td>
  </tr>
  <tr>
    <td><var>width</var>x<var>height</var>^</td>
    <td>Minimum values of width and height given, aspect ratio preserved.</td>
  </tr>
  <tr>
    <td><var>width</var>x<var>height</var>!</td>
    <td>Width and height emphatically given, original aspect ratio ignored.</td>
  </tr>
  <tr>
    <td><var>width</var>x<var>height</var>&gt;</td>
    <td>Shrinks an image with dimension(s) <b>larger</b> than the corresponding <var>width</var> and/or <var>height</var> argument(s).</td>
  </tr>
  <tr>
    <td><var>width</var>x<var>height</var>&lt;</td>
    <td>Enlarges an image with dimension(s) <b>smaller</b> than the corresponding <var>width</var> and/or <var>height</var> argument(s).</td>
  </tr>
  <tr>
    <td><var>area</var>@</td>
    <td>Resize image to have specified area in pixels. Aspect ratio is preserved.</td>
  <tr>
    <td><var>x</var>:<var>y</var></td>
    <td>Here x and y denotes an aspect ratio (e.g. 3:2 = 1.5).</td>
  </tr>
  <tr>
    <td><var>x</var>:<var>y</var>^</td>
    <td>remove rows or columns to achieve the given aspect ratio.</td>
  </tr>
  <tr>
    <td><var>x</var>:<var>y</var>#</td>
    <td>add rows or columns to achieve the given aspect ratio.</td>
  </tr>
  <tr>
    <td>{<var>size</var>}{<var>offset</var>}</td>
    <td>Specifying the <var>offset</var> (default is <samp>+0+0</samp>). Below, {<var>size</var>} refers to any of the forms above.</td>
  </tr>
  <tr>
    <td>{<var>size</var>}{<var>+-</var>}<var>x</var>{<var>+-</var>}<var>y</var></td>
    <td>Horizontal and vertical offsets <var>x</var> and <var>y</var>, specified in pixels. Signs are required for both. Offsets are affected by <?php option("gravity");?> setting. Offsets are not affected by <samp>%</samp> or other <var>size</var> operators. Note that positive X and Y offsets are in the inward direction towards the center of the image for all <?php option("gravity");?> options, except 'center'. For East, +X is left. For South, +Y is up. For SouthEast, +X is left and +Y is up. For center, the normal X and Y directional convention is used (+X is right and +Y is down).</td>
  </tr>
 </tbody>
</table></div>


<h4>Basic adjustments to width and height; the operators <samp>%</samp>, <samp>^</samp>, and <samp>!</samp> </h4>
<p>Here, just below, are a few simple examples of <var>geometry</var>, showing how it might be used as an argument to the <?php option("resize")?> option. We'll use the internal image <samp>logo:</samp> for our input image.
<a href="<?php echo $_SESSION['RelativePath']?>/../image/logo.png">
This fine image</a> is 640 pixels wide and 480 pixels high. We say its <var>dimensions</var> are 640x480. When we give dimensions of an image, the width (the horizontal dimension) always precedes the height (the vertical dimension). This will be true when we speak of coordinates or <var>offsets</var> into an image, which will always be <var>x</var>–value followed by <var>y</var>. Just think of your high school algebra classes and the <var>xy</var>–plane. (Well, almost: our <var>y</var>–axis will always go downward!)
</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: -resize '200%' bigWiz.png
magick logo: -resize '200x50%' longShortWiz.png
magick logo: -resize '100x200' notThinWiz.png
magick logo: -resize '100x200^' biggerNotThinWiz.png
magick logo: -resize '100x200!' dochThinWiz.png</samp></pre></ul>

<p>The first of the four commands is simple—it stretches both the width and height of the input image by <samp>200%</samp> in each direction; it magnifies the whole thing by a factor of two. The second command specifies different percentages for each direction, stretching the width to <samp>200</samp>% and squashing the height to <samp>50%</samp>. The resulting image (in this example) has dimensions 1280x240. Notice that the percent symbol needn't be repeated; the following are equivalent: <samp>200x50%</samp>, <samp>200%x50</samp>, <samp>200%x50%</samp>.
</p>

<p>By default, the width and height given in a <var>geometry</var> argument are <var>maximum</var> values unless a percentage is specified. That is, the image is expanded or contracted to fit the specified width and height value while maintaining the <var>aspect ratio</var> (the ratio of its height to its width) of the image. For instance, the third command above "tries" to set the dimensions to <samp>100x200</samp>. Imagine gradually shrinking the original image (which is 640x480), keeping is aspect ratio constant, until it just fits into a 100x200 rectangle. Since the image is longer than it is tall, it will fit when its width shrinks to 100 pixels. To preserve the aspect ratio, the height will therefore have to be (480/640)×100 pixels=75 pixels, so the final dimensions will be 100x75.</p>

<p> Notice that in the previous example, at least one of the specified dimensions will be attained (in this case, the width, 100 pixels). The resulting image fits snugly within the original. One can do just the opposite of this by invoking the <samp>^</samp> operator, as in the fourth example above. In that case, when <samp>100x200^</samp> is given as the argument, again at least one of the dimensions will be attained, but in this case the resulting image can snugly contain the original. Here the <var>geometry</var> argument gives <var>minimum</var> values. In our example, the height will become 200 and the width will be scaled to preserve the aspect ratio, becoming (640/480)×200 pixels=267 pixels. With the <samp>^</samp> operator, one of those dimensions will match the requested size, but the image will likely overflow the dimensions requested to preserve its aspect ratio. (The <samp>^</samp> feature is new as of IM 6.3.8-2.)</p>

<p>We see that ImageMagick is very good about preserving aspect ratios of images, to prevent distortion of your favorite photos and images. But you might really want the dimensions to be <samp>100x200</samp>, thereby stretching the image. In this case just tell ImageMagick you really mean it (!) by appending an exclamation operator to the geometry. This will force the image size to exactly what you specify. So, for example, if you specify <samp>100x200!</samp> the dimensions will become exactly 100x200 (giving a small, vertically elongated wizard).</p>

<h4>Bounding the width, height, and area; the operators <samp>&gt;</samp>, <samp>&lt;</samp>, and <samp>@</samp> </h4>
<p>
Here are a few more examples:
</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: -resize '100' wiz1.png
magick logo: -resize 'x200' wiz2.png
magick logo: -resize '100x200&gt;' wiz3.png
magick logo: -resize '100x200&lt;' wiz4.png</samp></pre></ul>

<p>If only one dimension is given it is taken to be the width. When only the width is specified, as in the first example above, the width is accepted as given and the height is chosen to maintain the aspect ratio of the input image. Similarly, if only the height is specified, as in the second example above, the height is accepted and the width is chosen to maintain the aspect ratio.</p>


<p>Use <samp>&gt;</samp> to shrink an image <var>only</var> if its dimension(s) are <b>larger</b> than the corresponding <var>width</var> and/or <var>height</var> arguments. Use <samp>&lt;</samp> to enlarge an image <var>only</var> if its dimension(s) are <b>smaller</b> than the corresponding <var>width</var> and/or <var>height</var> arguments.  In either case, if a change is made, the result is as if the <samp>&gt;</samp> or <samp>&lt;</samp> operator was not present. So, in the third example above, we specified <samp>100x200&gt;</samp> and the original image size is 640x480, so the image size is reduced as if we had specified <samp>100x200</samp>. However, in the fourth example above, there will be no change to its size.</p>

<p>Finally, use <samp>@</samp> to specify the maximum area in pixels of an image, again while attempting to preserve aspect ratio. (Pixels take only integer values, so some approximation is always at work.) In the following example, an area of 10000 pixels is requested. The resulting file has dimensions 115x86, which has 9890 pixels. </p>

<ul><pre class="bg-light text-dark"><samp>magick logo: -resize '10000@' wiz10000.png</samp></pre></ul>

<p class="text-info">In all the examples above and below, we have enclosed the <var>geometry</var> arguments  within quotation marks. Doing so is optional in many cases, but not always. We <var>must</var> enclose the geometry specifications in quotation marks when using <samp>&lt;</samp> or <samp>&gt;</samp> to prevent these characters from being interpreted by the shell as <var>file redirection</var>. On Windows systems, the carat <samp>^</samp>  needs to be within quotes, else it is ignored. To be safe, one should probably maintain a habit of enclosing all <var>geometry</var> arguments in quotes, as we have here.
</p>

<h4>Offsets in geometry</h4>
<p>
Here are some examples to illustrate the use of <var>offsets</var> in <var>geometry</var> arguments. One typical use of offsets is in conjunction with the
<?php option("region")?> option. This option allows many other options to modify the pixels within a specified rectangular subregion of an image. As such, it needs to be given the width and height of that region, and also an <var>offset</var> into the image, which is a pair of coordinates that indicate the location of the region within the larger image. Below, in the first example, we specify a region of size <samp>100x200</samp> to be located at the <var>xy</var>–coordinates <var>x</var>=10, <var>y</var>=20. Let's use the usual algebraic notation (<var>x</var>,<var>y</var>)=(10,20), for convenience.
</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: -region '100x200+10+20' -negate wizNeg1.png
magick logo: -region '100x200-10+20' -negate wizNeg2.png
magick logo: -gravity center -region '100x200-10+20' -negate wizNeg3.png</samp></pre></ul>

<p>Note that offsets always require +/− signs. The offset is not actually a true location within the image; its coordinates must be added to some other location. Let's refer to that as the <var>current location</var>. In the first two examples above, though, that location is the upper-left hand corner of the image, which has coordinates (0,0). (That is the default situation when there are no other directives given to change it.) The first example above puts the <samp>100x200</samp> rectangle's own upper-left corner at (10,20). </p>

<p>A negative offset can make sense in many cases. In the second example above, the offset is (-10,20), specified by <samp>-10+20</samp>. In that case, only the portion of the (virtual) rectangle obtained that lies within the image can be negated; here it is equivalent to specifying the geometry as <samp>90x200+0+20</samp>.</p>

<p>In the third example above, the <?php option("gravity")?> setting precedes the others and sets the current location within the image at the very center of the image. In this case that is at pixel (320,240), since the size of the image is 640x480. This means that the offsets apply to that location, which thereby gets moved, in this case, to (320-10,240+20)=(310,260). But the <samp>100x200</samp> region itself is affected by the <?php option("gravity")?> setting, so instead of affecting its upper-left corner, the region's own center (at (+50,+100) within it) is determined. Therefore the center of the <samp>100x200</samp> rectangle is moved to (310,260). The negated rectangle's upper-left corner is now at (310-50,260-100)=(260,160).
</p>


<h4><a class="anchor" id="stack"></a>Image Stack</h4>

<p>In school, your teacher probably permitted you to work on problems on a scrap of paper and then copy the results to your test paper.  An image stack is similar.  It permits you to work on an image or image sequence in isolation and subsequently introduce the results back into the command-line.  The image stack is delineated with parenthesis.  Image operators only affect images in the current stack.  For example, we can limit the image rotation to just the wizard image like this:</p>

<ul><pre class="bg-light text-dark"><samp>magick wand.gif \( wizard.gif -rotate 30 \) +append images.gif</samp></pre></ul>


<p class="text-info">Notice again that the  parentheses are <var>escaped</var> by preceding them with
backslashes.  This is required under Linux, where parentheses are special
<var>shell</var> characters.  The backslash tells the shell not to interpret
these characters, but to pass them directly to the command being executed. Do
not escape the parentheses under Windows. Each parenthesis (or escaped
parenthesis) must have spaces on either side, as in the example shown
above.</p>

<p>In addition to the image operators already discussed, the following image operators are most useful when processing images in an image stack:</p>

<ul>
<?php options("clone", "delete", "insert", "swap");?>
</ul>

<p>The arguments to these operators are indexes into the image sequence by number, starting with zero, for the first image, and so on. However if you give a negative index, the images are indexed from the end (last image added). That is, an index of -1 is the last image in the current image sequence, -2 gives the second-to-last, and so on.</p>

<h2><a class="anchor" id="output"></a>Output Filename</h2>

<p>ImageMagick extends the concept of an output filename to include:</p>

<ol>
<li>an explicit image format</li>
<li>write to <var>standard out</var></li>
<li>filename references</li>
</ol>

<p>Each of these extensions are explained in the next few paragraphs.</p>

<p>Instead of an output filename, you use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#exit">-exit</a> to completely prevent any image write.</p>

<h4>Explicit Image Format</h4>
  <p>Images can be stored in a myriad of image formats including the better known JPEG, PNG, TIFF and others.  ImageMagick must know the desired format of the image before it is written.  ImageMagick leverages the filename extension to determine the format.  For example, <samp>image.jpg</samp> tells ImageMagick to write the image in the JPEG format.  In some cases the filename does not identify the image format.  In these cases, the image is written in the format it was originally read unless an explicit image format is specified.  For example, suppose we want to write our image to a filename of <samp>image</samp> in the raw red, green, and blue intensity format:
  </p>

<ul><pre class="bg-light text-dark"><samp>magick image.jpg rgb:image</samp></pre></ul>


<h4>Standard Out</h4>
  <p>Linux permits the output of one command to be piped to another.  ImageMagick permits piping one command to another with a filename of <samp>-</samp>.  In this example we pipe the output of <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick.php">magick</a> to the <a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a> program:
  </p>

<ul><pre class="bg-light text-dark"><samp>magick logo: gif:- | magick display gif:-</samp></pre></ul>

<p>Here the explicit format is optional.  The GIF image format has a signature that uniquely identifies it so ImageMagick can readily recognize the format as GIF.</p>

<h4>Filename References</h4>
<p>Optionally, use an embedded formatting character to write a sequential image list.  Suppose our output filename is <samp>image-%d.jpg</samp> and our image list includes 3 images.  You can expect these images files to be written:
</p>

<ul><pre class="bg-light text-dark">image-0.jpg
image-1.jpg
image-2.jpg</pre></ul>

<p>Or retrieve image properties to modify the image filename.  For example, the command
</p>

<ul><pre class="bg-light text-dark"><samp>magick rose: -set filename:area '%wx%h' 'rose-%[filename:area].png'</samp></pre></ul>

<p>writes an image with this filename:
</p>

<ul><pre class="bg-light text-dark">rose-70x46.png</pre></ul>

<p>Finally to convert multiple JPEG images to individual PDF pages, use:</p>

<ul><pre class="bg-light text-dark"><samp>magick *.jpg +adjoin page-%d.pdf</samp></pre></ul>

<p>Use <samp>-define filename:literal=true</samp> to bypass interpretting embedded formatting characters and instead use the filename literally.</p>

<h4>Stream Buffering</h4>

<p>By default, the output stream is buffered.  To ensure information appears on the destination file or terminal as soon as written, set the buffer size to 0:</p>

<ul><pre class="bg-light text-dark"><samp>magick -define stream:buffer-size=0 logo: gif:- | magick display gif:-</samp></pre></ul>
</div>
