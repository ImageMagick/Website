<div class="magick-header">
<p class="lead magick-description"><a href="<?php echo $_SESSION['RelativePath']?>/../image/wizard.png" title="And Now a Touch of Magick"><img class="img-fluid magick-icon" id="logo" alt="And Now a Touch of Magick" width="265" height="352" src="<?php echo $_SESSION['RelativePath']?>/../image/wizard.jpg" /></a> ImageMagick<sup><a href="http://tarr.uspto.gov/servlet/tarr?regser=serial&amp;entry=78333969" target="_blank">&#174;</a></sup> is a free, <a href="https://imagemagick.org/script/license.php">open-source</a> software suite, used for editing and manipulating digital images. It can be used to create, edit, compose, or convert bitmap images, and supports a wide range of file <a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php">formats</a>, including JPEG, PNG, GIF, TIFF, and Ultra HDR.</p>

<p>ImageMagick is widely used in industries such as web development, graphic design, and video editing, as well as in scientific research, medical imaging, and astronomy. Its versatile and customizable nature, along with its robust image processing capabilities, make it a popular choice for a wide range of image-related tasks.</p>

<p>ImageMagick includes a command-line interface for executing complex image processing tasks, as well as APIs for integrating its features into software applications. It is written in C and can be used on a variety of operating systems, including Linux, Windows, and macOS.</p>

<p>The main website for ImageMagick can be found at <a href="https://imagemagick.org">https://imagemagick.org</a>. The most recent version available is <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">ImageMagick <?php echo MagickLibVersionText . MagickLibSubversion; ?></a>. The source code for this software can be accessed through a <a href="https://github.com/ImageMagick/ImageMagick" target="_blank">repository</a>. In addition, we maintain a legacy version of ImageMagick, <a href="https://legacy.imagemagick.org" target="_blank">version 6</a>.</p>

<p>Creating a security policy that fits your specific local environment before making use of ImageMagick is highly advised. You can find guidance on setting up this <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">policy</a>. Also, it's important to verify your policy using the <a href="https://imagemagick-secevaluator.doyensec.com/">validation tool</a>.</p>

<h2><a class="anchor" id="features"></a>Features and Capabilities</h2>

<p>One of the key features of ImageMagick is its support for scripting and automation. This allows users to create complex image manipulation pipelines that can be run automatically, without the need for manual intervention. This can be especially useful for tasks that require the processing of large numbers of images, or for tasks that need to be performed on a regular basis.</p>

<p>In addition to its core image manipulation capabilities, ImageMagick also includes a number of other features, such as support for animation, color management, and image rendering. These features make it a versatile tool for a wide range of image-related tasks, including graphic design, scientific visualization, and digital art.</p>

<p>Overall, ImageMagick is a powerful and versatile software suite for displaying, converting, and editing image files. Its support for scripting and automation, along with its other features, make it a valuable tool for a wide range of image-related tasks.</p>

<p>Here are just a few <a href="<?php echo $_SESSION['RelativePath']?>/../script/examples.php">examples</a> of what ImageMagick can do for you:</p>
<div class="pre-scrollable">
<table class="table table-sm table-hover table-striped table-responsive">
  <tr>
    <td><a href="https://imagemagick.org/Usage/anim_basics/">Animation</a></td>
    <td>create a GIF animation sequence from a group of images.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#bilateral-blur">Bilateral blur</a></td>
    <td>non-linear, edge-preserving, and noise-reducing smoothing filter.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/color-management.php">Color management</a></td>
    <td>accurate color management with color profiles or in lieu of-- built-in gamma compression or expansion as demanded by the colorspace.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/color-thresholding.php">Color thresholding</a></td>
    <td>force all pixels in the color range to white otherwise black.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command-line processing</a></td>
    <td>utilize ImageMagick from the command-line.</td>
  </tr>
  <tr>
    <td><a href="https://en.wikipedia.org/wiki/Complex_text_layout">Complex text layout</a></td>
    <td>bidirectional text support and shaping.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/composite.php">Composite</a></td>
    <td>overlap one image over another.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/connected-components.php">Connected component labeling</a></td>
    <td>uniquely label connected regions in an image.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/convex-hull.php">Convex hull</a></td>
    <td>smallest area convex polygon containing the image foreground objects.  In addition, the minimum bounding box and unrotate angle are also generated.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/crop/">Decorate</a></td>
    <td>add a border or frame to an image.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/transform/#vision">Delineate image features</a></td>
    <td><a href="http://imagemagick.org/Usage/transform/#canny">Canny edge detection</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#hough-line">Hough lines</a>.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/fourier/">Discrete Fourier transform</a></td>
    <td>implements the forward and inverse <a href="https://en.wikipedia.org/wiki/Discrete_Fourier_transform">DFT</a>.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/distribute-pixel-cache.php">Distributed pixel cache</a></td>
    <td>offload intermediate pixel storage to one or more remote servers.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/draw/">Draw</a></td>
    <td>add shapes or text to an image.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/cipher.php">Encipher or decipher an image</a></td>
    <td>convert ordinary images into unintelligible gibberish and back again.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">Format conversion</a></td>
    <td>convert an image from one <a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php">format </a> to another (e.g. PNG to JPEG).</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/distorts/">Generalized pixel distortion</a></td>
    <td>correct for, or induce image distortions including perspective.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#distributed">Heterogeneous distributed processing</a></td>
    <td>certain algorithms are <a href="<?php echo $_SESSION['RelativePath']?>/../script/opencl.php">OpenCL</a>-enabled to take advantage of speed-ups offered by executing in concert across heterogeneous platforms consisting of CPUs, GPUs, and other processors.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">High dynamic-range images</a></td>
    <td>accurately represent the wide range of intensity levels found in real scenes ranging from the brightest direct sunlight to the deepest darkest shadows.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/clahe.php">Histogram equalization</a></td>
    <td>use adaptive histogram equalization to improve contrast in images.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-cache.php">Image cache</a></td>
    <td>secure methods and tools to cache images, image sequences, video, audio or metadata in a local folder..</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/fx.php">Image calculator</a></td>
    <td>apply a mathematical expression to an image, image sequence, or image channels.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/gradient.php">Image gradients</a></td>
    <td>create a gradual blend of two colors whose shape is horizontal, vertical, circular, or elliptical.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">Image identification</a></td>
    <td>describe the format and attributes of an image.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php#iOS">ImageMagick on the iPhone</a></td>
    <td>convert, edit, or compose images on your <a href="https://www.apple.com/ios/">iOS</a> device such as the iPhone or iPad.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#tera-pixel">Large image support</a></td>
    <td>read, process, or write mega-, giga-, or tera-pixel image sizes.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">Montage</a></td>
    <td>juxtapose image thumbnails on an image canvas.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/morphology/">Morphology of shapes</a></td>
    <td>extract features, describe shapes, and recognize patterns in images.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/motion-picture.php">Motion picture support</a></td>
    <td>read and write the common image formats used in digital film work.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/multispectral-imagery.php">Multispectral imagery</a></td>
    <td>support multispectral imagery up to 32 bands, 22 of them meta channels.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/transform/#vision">Noise and color reduction</a></td>
    <td><a href="https://legacy.imagemagick.org/discourse-server/viewtopic.php?t=26480">Kuwahara Filter</a>, <a href="https://legacy.imagemagick.org/discourse-server/viewtopic.php?t=25504">mean-shift</a>.</td>
  </tr>
  <tr>
    <td><a href="http://www.fmwconcepts.com/misc_tests/perceptual_hash_test_results_510/index.html">Perceptual hash</a></td>
    <td>map visually identical images to the same or similar hash-- useful in image retrieval, authentication, indexing, or copy detection as well as digital watermarking.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/blur/">Special effects</a></td>
    <td>blur, sharpen, threshold, or tint an image.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/text/">Text &amp; comments</a></td>
    <td>insert descriptive or artistic text in an image.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#threads">Threads of execution support</a></td>
    <td>ImageMagick is thread safe and most internal algorithms execute in <a href="<?php echo $_SESSION['RelativePath']?>/../script/openmp.php">parallel</a> to take advantage of speed-ups offered by multicore processor chips.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/resize/">Transform</a></td>
    <td>resize, rotate, deskew, crop, flip or trim an image.</td>
  </tr>
  <tr>
    <td><a href="https://imagemagick.org/Usage/masking/">Transparency</a></td>
    <td>render portions of an image invisible.</td>
  </tr>
  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#virtual-pixels">Virtual pixel support</a></td>
    <td>convenient access to pixels outside the image boundaries.</td>
  </tr>
</table>
</div>
<br/>
<p><a href="https://imagemagick.org/Usage/" target="_blank">Examples of ImageMagick Usage</a> demonstrates how to use the software from the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">command line</a> to achieve various effects. There are also several scripts available on the website called <a href="http://www.fmwconcepts.com/imagemagick/" target="_blank">Fred's ImageMagick Scripts</a>, which can be used to apply geometric transforms, blur and sharpen images, remove noise, and perform other operations. Additionally, there is a tool called <a href="https://github.com/dlemstra/Magick.NET" target="_blank">Magick.NET</a> that allows users to access the functionality of ImageMagick without having to install the software on their own systems. Finally, the website also includes a <a href="http://im.snibgo.com/" target="_blank">Cookbook</a> with tips and examples for using ImageMagick on Windows systems.</p>

<h4><a class="anchor" id="community"></a>Community</h4>
<p>Join the ImageMagick community by participating in the <a href="https://github.com/ImageMagick/ImageMagick/discussions" target="_blank">discussion</a> service. Here, you can find answers to questions asked by other ImageMagick users or ask your own questions. If you have a technical question, a suggestion for an improvement, or a fix for a bug, you can also open an <a href="https://github.com/ImageMagick/ImageMagick/issues" target="_blank">issue</a> to get help from the community.</p>

</div>
