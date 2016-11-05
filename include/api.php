<div class="magick-header">

<p class="lead magick-description">ImageMagick includes a number of ready-made interfaces. This makes it possible to modify or create images automagically and dynamically utilizing your favorite development platform.</p>

<dl class="dl-horizontal">
  <dt><a id="ada"></a>Ada</dt>

<dd><a href="https://gna.org/projects/g2f/">G2F</a> implements an Ada 95 binding to a subset of the low-level MagickCore library.</dd>

  <dt><a id="c"></a>C</dt>

<dd>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-wand.php">MagickWand</a> to convert, compose, and edit images from the C language.  There is also the low-level <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a> library for wizard-level developers.</dd>

  <dt><a id="ch"></a>Ch</dt>

<dd><a href="https://www.imagemagick.org/ChMagick">ChMagick</a> is a <a href="http://www.softintegration.com/">Ch</a> binding to the MagickCore and MagickWand API.  Ch is an embeddable C/C++ interpreter for cross-platform scripting.</dd>

  <dt><a id="com_"></a>COM+</dt>

<dd>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/ImageMagickObject.php">ImageMagickObject</a> to convert, compose, and edit images from a Windows COM+ compatible component.</dd>

  <dt><a id="c__"></a>C++</dt>

<dd><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick++.php">Magick++</a> provides an object-oriented C++ interface to ImageMagick.  See <a href="https://www.imagemagick.org/Magick++/tutorial/Magick++_tutorial.pdf">A Gentle Introduction to Magick++</a> for an introductory tutorial to Magick++.  We include the <a href="https://www.imagemagick.org/Magick++/tutorial/Magick++_tutorial.odt">source</a> if you want to correct, enhance, or expand the tutorial.</dd>

  <dt><a id="go"></a>GO</dt>
  <dd><a href="https://github.com/gographics/imagick">GoImagick</a> is a set of Go bindings to ImageMagick's MagickWand and MagickCore C APIs.</dd>

  <dt><a id="java"></a>Java</dt>

<dd><a href="http://www.jmagick.org">JMagick</a> provides an object-oriented Java interface to ImageMagick.  <a href="http://im4java.sourceforge.net">Im4java</a> is a pure-java interface to the ImageMagick command-line.</dd>

  <dt><a id="labview"></a>LabVIEW</dt>

<dd><a href="http://forums.lavag.org/downloads-file90.html">LVOOP ImageMagick</a> is an object-oriented LabVIEW interface to ImageMagick.</dd>

  <dt><a id="lisp"></a>Lisp</dt>

<dd><a href="http://common-lisp.net/project/cl-magick/">CL-Magick</a> provides a Common Lisp interface to the ImageMagick library.</dd>

  <dt><a id="lua"></a>Lua</dt>

<dd><a href="https://github.com/leafo/magick">Lua</a> bindings to ImageMagick for LuaJIT using FFI.</dd>

  <dt><a id="neko"></a>Neko</dt>

<dd><a href="http://code.google.com/p/nmagick">NMagick</a> is a port of the ImageMagick library to the haXe and Neko platforms. It provides image manipulation capabilities to both web and desktop applications using Neko.</dd>

  <dt><a id="dot-net"></a>.NET</dt>

<dd>Use <a href="http://magick.codeplex.com/">Magick.NET</a> to convert, compose, and edit images from Windows .NET.</dd>

<dd><a href="http://sourceforge.net/projects/imagemagickapp/">ImageMagickApp</a> is a .NET application written in C# that utilizes the ImageMagick command line to allow conversion of multiple image formats to different formats.</dd>

  <dt><a id="pascal"></a>Pascal</dt>

<dd><a href="http://wiki.freepascal.org/PascalMagick">PascalMagick</a> a Pascal binding for the MagickWand API and also the low-level MagickCore library. It works with Free Pascal / Lazarus and Delphi.</dd>

  <dt><a id="perl"></a>Perl</dt>

<dd>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/perl-magick.php">PerlMagick</a> to convert, compose, and edit images from the Perl language.</dd>

  <dt><a id="php"></a>PHP</dt>

<dd><a href="http://www.magickwand.org/">MagickWand for PHP</a> a native PHP-extension to the ImageMagick MagickWand API.</dd>

<dd><a href="http://pecl.php.net/package/imagick">IMagick</a> is a native PHP extension to create and modify images using the ImageMagick API.  Documentation for the extension is available <a href="http://php.net/imagick">here</a>.</dd>

<dd><a href="https://github.com/francodacosta/phmagick">phMagick</a> is a wrapper class for ImageMagick, wrapping the most common web image manipulation actions in easy to use functions, but allowing full access to ImageMagick's power by issuing system calls to it's command-line programs.</dd>


  <dt><a id="python"></a>Python</dt>


<dd><a href="http://wand-py.org/">Wand</a> is a ctypes-based ImagedMagick binding library for Python.</dd>
<dd><a href="https://www.imagemagick.org/download/python/">PythonMagick</a> is an object-oriented Python interface to ImageMagick.</dd>
<dd><a href="http://www.assembla.com/wiki/show/pythonmagickwand">PythonMagickWand</a> is an object-oriented Python interface to MagickWand based on ctypes.</dd>

  <dt><a id="realbasic"></a>REALbasic</dt>

<dd>The <a href="http://www.monkeybreadsoftware.de/realbasic/plugin-imagemagick.shtml">MBS Realbasic ImageMagick</a> is a plugin that utilizes the power of ImageMagick from within the RealBasic environment.</dd>

  <dt><a id="ruby"></a>Ruby</dt>

<dd><a href="https://rmagick.github.io/">RMagick</a> is an interface between the Ruby programming language and the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a> image processing libraries.  Get started with RMagick by perusing the <a href="https://rmagick.github.io/">documentation</a>.</dd>

<dd><a href="http://magickwand.rubyforge.org/">MagickWand for Ruby</a> is an interface between the Ruby programming language and the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-wand.php">MagickWand</a> image processing libraries.  Get started with MagickWand for PHP by perusing the <a href="http://magickwand.rubyforge.org/">documentation</a>.</dd>

<dd><a href="https://github.com/minimagick">MiniMagick</a> is a Ruby wrapper for ImageMagick command line. MiniMagick gives you convenient access to all the command line options ImageMagick supports.</dd>

<dd><a href="http://quickmagick.rubyforge.org/quick_magick">QuickMagick</a> is a gem for easily accessing ImageMagick command line tools from Ruby programs.</dd>

  <dt><a id="rust"></a>Rust</dt>

<dd><a href="https://github.com/influenza/wand-of-rust">RustWand</a> is a MagickWand bindings for the Rust language.</dd>

<dt><a id="tcl"></a>Tcl/Tk</dt>

<dd><a href="http://tclmagick.sourceforge.net/">TclMagick</a> a native Tcl-extension to the ImageMagick MagickWand API.</dd>

  <dt><a id="xml-rpc"></a>XML RPC</dt>

<dd><a href="http://code.google.com/p/remotemagick/">RemoteMagick</a> is an XML-RPC web service that creates image thumbnails.</dd>
</dl>
</div>
