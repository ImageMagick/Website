<div class="magick-header">
<p class="text-center"><a href="#overview">ImageMagick Overview</a> • <a href="#download">Download ImageMagick</a> • <a href="#install">Install ImageMagick</a> • <a href="#command-line">Command-line Tools</a> • <a href="#program-interfaces">Program Interfaces</a> • <a href="#formats">Image Formats</a> • <a href="#help">Getting Help</a> • <a href="#support">Support ImageMagick</a> • <a href="#miscellaneous">Miscellaneous Topics</a></p>

<p class="lead magick-description">Use this ImageMagick sitemap to quickly jump to one of the areas of interest listed below.  If you can't find what you want on this page, try our <a href="<?php echo $_SESSION['RelativePath']?>/../script/search.php">site search</a>.</p>

<h2 class="magick-header"><a id="overview"></a>ImageMagick Overview</h2>

<dl class="magick-list-unstyled">
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/index.php">Introduction</a>: convert, edit, or compose images from the command-line or program interface.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/examples.php">Examples of ImageMagick usage</a>: a few examples that show what you can do with an image using ImageMagick.</li>
  <li><a href="https://www.imagemagick.org/Usage/">Anthony Thyssen's examples of ImageMagick usage</a>:  a comprehensive tutorial of using ImageMagick from the command line.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/color.php">Color names</a>: how to specify a color name, a hex color, or a numerical RGB, RGBA, HSL, HSLA, CMYK, or CMYKA color.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/color-management.php">Color management</a>: accurate color management with color profiles or in lieu of-- built-in gamma compression or expansion as demanded by the colorspace.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a>: ImageMagick depends on external resources including configuration files, loadable modules, fonts, and environment variables.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/openmp.php">Parallel execution</a>: ImageMagick is threaded to take advantage of speed-ups offered by the multicore processor chips.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>: get to know more about the software and algorithms behind ImageMagick.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/license.php">License</a>: the legally binding and authoritative terms and conditions for use, reproduction, and distribution of ImageMagick.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/export.php">Export classification</a>: export control status of ImageMagick.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/porting.php">ImageMagick version 7</a>: learn how ImageMagick version 7 differs from previous versions.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/history.php">History</a>: how ImageMagick was conceived and developed.</li>
</dl>

<h2 class="magick-header"><a id="download"></a>Download ImageMagick</h2>

<dl class="magick-list-unstyled">
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">Download ImageMagick</a>: ImageMagick source and binary distributions are available from a variety of FTP and Web mirrors.</li>
  <li> <dl class="magick-list-unstyled">
    <li><a href="https://www.imagemagick.org/download">Unix source</a>: Unix source distributions.</li>
    <li><a href="https://www.imagemagick.org/download/windows">Windows source</a>: Windows source distributions.</li>
    <li><a href="https://www.imagemagick.org/download/binaries">Unix and Windows binaries</a>: Unix and Windows binary distributions.</li>
    <li><a href="http://git.imagemagick.org/repos/ImageMagick">Git repository</a>: stable and development source releases.</li>
    <li><a href="http://www.magickwand.org/">MagickWand for PHP</a>: a native PHP-extension to the ImageMagick MagickWand API.</li>
    <li><a href="https://www.imagemagick.org/download/delegates">Delegate libraries</a>: ImageMagick depends on a number of optional delegate libraries to extend its functionality.</li>
  </dl> </li>
</dl>

<h2 class="magick-header"><a id="install"></a>Install ImageMagick</h2>

  <p>You can install ImageMagick from source. However, if you don't have a proper development environment or if you're anxious to get started, download a ready-to-run Unix or Windows executable.</p>
<dl class="magick-list-unstyled">
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php">Install from source</a>: ImageMagick builds under Windows, Mac OS X, and Linux.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/binary-releases.php">Install from a binary distribution</a>: install a ready-to-run Unix or Windows executable.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/ImageMagickObject.php">Install ImageMagickObject COM+ component</a>: install the Windows ImageMagick COM+ component.</li>
</dl>

<h2 class="magick-header"><a id="command-line"></a>Command-line Tools</h2>
<dl class="magick-list-unstyled">
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">Command-line tools</a>: overview of the ImageMagick commands.</li>
  <li> <dl class="magick-list-unstyled">
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/animate.php">animate</a>: animates an image sequence on any X server.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/compare.php">compare</a>: mathematically and visually annotate the difference between an image and its reconstruction.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/composite.php">composite</a>: overlaps one image over another.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/conjure.php">conjure</a>: interprets and executes scripts written in the Magick Scripting Language (MSL).</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">convert</a>: convert between image formats as well as resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and more.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a>: displays an image or image sequence on any X server.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">identify</a>: describes the format and characteristics of one or more image files.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/import.php">import</a>: saves any visible window on an X server and outputs it as an image file.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/mogrify.php">mogrify</a>: resize an image, blur, crop, despeckle, dither, draw on, flip, join, re-sample, and more.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">montage</a>: create a composite image by combining several separate images.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/stream.php">stream</a>: a lightweight tool to stream one or more pixel components of the image or portion of the image to your choice of storage formats.</li>
  </dl></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command line processing</a>: the anatomy of the command line.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php">Command line options</a>: annotated list of all options that can appear on the command-line.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/fx.php">Fx</a>: apply a mathematical expression to an image or image channels.</li>
  <li><a href="http://www.fmwconcepts.com/imagemagick/">Fred's ImageMagick Scripts</a>:  a plethora of command-line scripts that perform geometric transforms, blurs, sharpens, edging, noise removal, and color manipulations.</li>
</dl>

<h2 class="magick-header"><a id="program-interfaces"></a>Program Interfaces</h2>

<dl class="magick-list-unstyled">
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/api.php">Program interfaces</a>: application programming interfaces.</li>
  <li> <dl class="magick-list-unstyled">
    <li><a href="https://www.imagemagick.org/ChMagick">ChMagick</a>: is a <a href="http://www.softintegration.com/">Ch</a> an embeddable MagickCore C/C++ interpreter for cross-platform scripting.</li>
    <li><a href="http://common-lisp.net/project/cl-magick/">CL-Magick</a>: provides a Common Lisp interface to the ImageMagick library.</li>
    <li><a href="https://gna.org/projects/g2f/">G2F</a>: implements an Ada 95 binding to a subset of the low-level MagickCore library.</li>
    <li><a href="https://www.imagemagick.org/Magick++">Magick++</a>: provides an object-oriented C++ interface to ImageMagick.</li>
    <li><a href="http://pecl.php.net/package/imagick">IMagick</a>: is a native PHP extension to create and modify images using the ImageMagick API.</li>
    <li><a href="https://github.com/techblue/jmagick">JMagick</a>: provides an object-oriented Java interface to ImageMagick.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a>: C API, recommended for wizard-level developers.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-wand.php">MagickWand</a>: convert, compose, and edit images from the C language.</li>
    <li><a href="http://www.magickwand.org/">MagickWand for PHP</a>: a native PHP-extension to the ImageMagick MagickWand API.</li>
    <li><a href="http://code.google.com/p/nmagick">nMagick</a>: is a port of the ImageMagick library to the haXe and Neko platforms.</li>
    <li><a href="http://wiki.freepascal.org/PascalMagick">PascalMagick</a>: a Pascal binding for the MagickWand API and also the low-level MagickCore library.</li>
    <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/perl-magick.php">PerlMagick</a>: convert, compose, and edit images from the Perl language.</li>
    <li><a href="https://www.imagemagick.org/download/python/">PythonMagick</a>: an object-oriented Python interface to ImageMagick.</li>
    <li><a href="http://rmagick.rubyforge.org/">RMagick</a>: is an interface between the Ruby programming language and ImageMagick.</li>
    <li><a href="http://tclmagick.sourceforge.net/">TclMagick</a>: a native Tcl-extension to the ImageMagick MagickWand API.</li>
  </dl></li>
</dl>

<h2 class="magick-header"><a id="format"></a>Image Formats</h2>
<dl class="magick-list-unstyled">
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php">Supported image formats</a>: annotated list of all image formats that ImageMagick can read and/or write.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/motion-picture.php">Motion picture digital images</a>: use SMPTE DPX Version 2.0 to process images used by the motion picture (film and high-definition) industry.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">High dynamic-range images</a>: accurately represent the wide range of intensity levels found in real scenes ranging from the brightest direct sunlight to the deepest darkest shadows.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-vector-graphics.php">Magick Vector Graphics</a>: a modularized language for describing two-dimensional vector and mixed vector/raster graphics in ImageMagick.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/miff.php">Magick Image File Format</a>: MIFF is ImageMagick's own platform-independent format for storing bitmap images.</li>
</dl>

<h2 class="magick-header"><a id="help"></a>Getting Help</h2>

<dl class="magick-list-unstyled">
  <li><a href="http://www.amazon.com/exec/obidos/redirect?link_code=ur2&amp;camp=1789&amp;tag=imagemagick-20&amp;creative=9325&amp;path=tg/detail/-/1590595904/qid=1123551819/sr=8-1/ref=pd_bbs_sbs_1?v=glance%26s=books%26n=507846">Definitive Guide to ImageMagick</a>: this book explains ImageMagick in a practical, learn-by-example fashion.</li>
  <li><a href="http://www.amazon.com/exec/obidos/redirect?link_code=ur2&amp;camp=1789&amp;tag=imagemagick-20&amp;creative=9325&amp;path=tg/detail/-/1904811868/qid=1123551819/sr=8-1/ref=pd_bbs_sbs_1?v=glance%26s=books%26n=507846">ImageMagick Tricks</a>: this book is packed with examples of photo manipulations, logo creation, animations, and complete web projects.</li>
  <li><a href="https://www.imagemagick.org/discourse-server">Discourse server</a>: get help from fellow ImageMagick users and developers, post to these forums.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">Contact the Wizards</a>: for bug reports (only if you do not want to sign up to the <a href="https://www.imagemagick.org/discourse-server">discourse server</a>), a source or documentation patch, a security or license issue, or if you want to be a sponsor of the ImageMagick project.</li>
</dl>

<h2 class="magick-header"><a id="support"></a>Support ImageMagick</h2>

<dl class="magick-list-unstyled">
  <li><a href="https://www.imagemagick.org/discourse-server/viewforum.php?f=3">Report bugs and vulnerabilities</a>: our highest priority is to fix security defects and bug reports, usually within 48 hours of your report.  The bug discourse server requires that you register.  If you do not want to register, you can <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">contact the ImageMagick developers</a> with a convenient web form.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/support.php">Sponsor ImageMagick</a>: contribute bug fixes, enhancements, hardware, funds, etc. to ensure the ImageMagick project thrives.</li>
</dl>

<h2 class="magick-header"><a id="miscellaneous"></a>Miscellaneous Topics</h2>

<dl class="magick-list-unstyled">
  <li><a href="https://www.imagemagick.org/Usage/anim_basics/">Animation</a>: create a GIF animation sequence from a group of images.</li>
  <li><a href="https://www.imagemagick.org/discourse-server/viewtopic.php?f=4&amp;t=25405">Canny edge detection</a>: extract edges from an image using the Canny technique.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/color-management.php">Color management</a>: accurate color management with color profiles or in lieu of-- built-in gamma compression or expansion as demanded by the colorspace.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">Command-line processing</a>: utilize ImageMagick from the command line.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/connected-components.php">Connected Component Labeling</a>: uniquely label connected regions in an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/composite.php">Composite</a>: overlap one image over another.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/connected-components.php">Connected Component Labeling</a>: uniquely label connected regions in an image.</li>
  <li><a href="https://www.imagemagick.org/Usage/crop/">Decorate</a>: add a border or frame to an image.</li>
  <li><a href="https://www.imagemagick.org/Usage/fourier">Discrete Fourier transform</a>: implements the forward and inverse DFT.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/distribute-pixel-cache.php">Distributed pixel cache</a>: offload intermediate pixel storage to one or more remote servers .</li>
  <li><a href="https://www.imagemagick.org/Usage/draw/">Draw</a>: add shapes or text to an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/cipher.php">Encipher or decipher an image</a>: convert ordinary images into unintelddgible gibberish and back again.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/escape.php">Escapes</a>: utilize percent escapes in a number of options, for example in <a href="<?php echo 
  $_SESSION['RelativePath']?>/../script/command-line-options.php#format_identify_"
  >-format</a> or in montage <a href="<?php echo
  $_SESSION['RelativePath']?>/../script/command-line-options.php#label"
  >-label</a>, to print various properties and other settings associated with an
  image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">Format conversion</a>: convert an image from one <a href="<?php echo $_SESSION['RelativePath']?>/../script/formats.php">format </a> to another (e.g. PNG to JPEG).</li>
  <li><a href="https://www.imagemagick.org/Usage/distorts/">Generalized pixel distortion</a>: correct for, or induce image distortions including perspective.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#distributed">Heterogeneous distributed processing</a>: <a href="<?php echo $_SESSION['RelativePath']?>/../script/opencl.php">certain algorithms</a> are <a href="http://en.wikipedia.org/wiki/OpenCL" target="_blank">OpenCL</a>-enabled to take advantage of speed-ups offered by executing in concert across heterogeneous platforms consisting of CPUs, GPUs, and other processors.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">High dynamic-range images</a>: accurately represent the wide range of intensity levels found in real scenes ranging from the brightest direct sunlight to the deepest darkest shadows.</li>
  <li><a href="https://www.imagemagick.org/discourse-server/viewtopic.php?f=4&amp;t=25476">Hough lines</a>: fit straight lines to edges in an image using the Hough transform technique.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/fx.php">Image calculator</a>: apply a mathematical expression to an image or image channels.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/gradient.php">Image gradients</a>: create a gradual blend of two colors whose shape is horizontal, vertical, circular, or elliptical.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">Image identification</a>: describe the format and attributes of an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/binary-releases.php#iOS">ImageMagick on the iPhone</a>: convert, edit, or compose images on your iPhone.</li>
  <li><a href="https://www.imagemagick.org/discourse-server/viewtopic.php?f=4&amp;t=26480">Kuwahara Filter</a>: apply an edge perserving noise and color reduction filter to an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#tera-pixel">Large image support</a>: read, process, or write mega-, giga-, or tera-pixel image sizes.</li>
  <li><a href="https://www.imagemagick.org/discourse-server/viewtopic.php?f=4&amp;t=25504">Mean-shift</a>: apply a color reduction technique to an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">Montage</a>: juxtapose image thumbnails on an image canvas.</li>
  <li><a href="https://www.imagemagick.org/Usage/morphology/">Morphology of shapes</a>: extract features, describe shapes and recognize patterns in images.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/motion-picture.php">Motion picture support</a>: read and write the common image formats used in digital film work.</li>
  <li><a href="https://www.imagemagick.org/Usage/blur/">Special effects</a>: blur, sharpen, threshold, or tint an image.</li>
  <li><a href="https://www.imagemagick.org/Usage/text/">Text &amp; comments</a>: insert descriptive or artistic text in an image.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#threads">Threads of execution support</a>: ImageMagick is thread safe and most internal algorithms execute in parallel to take advantage of speed-ups offered by multicore processor chips.</li>
  <li><a href="https://www.imagemagick.org/Usage/resize/">Transform</a>: resize, rotate, crop, or trim an image.</li>
  <li><a href="https://www.imagemagick.org/Usage/masking/">Transparency</a>: render portions of an image invisible.</li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#virtual-pixels">Virtual pixel support</a>: convenient access to pixels outside the image region.</li>
</dl>
<h2 class="magick-header"><a id="legacy"></a>ImageMagick Legacy</h2>
<p>We continue to maintain the legacy release of ImageMagick, version 6, at <a href="https://legacy.imagemagick.org/">https://legacy.imagemagick.org</a></p>
</div>

