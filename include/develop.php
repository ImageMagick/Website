<div class="magick-header">

<p class="lead magick-description">The functionality of ImageMagick is typically utilized from the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php">command-line</a> or you can use the features from programs written in your favorite language. Choose from these interfaces: <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#ada">G2F</a> (Ada), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#c">MagickCore</a> (C), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#c">MagickWand</a> (C), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#ch">ChMagick</a> (Ch), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#com_">ImageMagickObject</a> (COM+), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#c__">Magick++</a> (C++), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#java">JMagick</a> (Java), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#julia">JuliaIO</a> (Julia), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#lisp">L-Magick</a> (Lisp), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#lua">Lua</a> (LuaJIT), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#neko">NMagick</a> (Neko/haXe), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#dot-net">Magick.NET</a> (.NET), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#pascal">PascalMagick</a> (Pascal),  <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#perl">PerlMagick</a> (Perl), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#php">MagickWand for PHP</a> (PHP),  <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#php">IMagick</a> (PHP), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#python">PythonMagick</a> (Python), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#r">magick</a> (R), <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#ruby">RMagick</a> (Ruby), or <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php#tcl">TclMagick</a> (Tcl/TK). With a language interface, use ImageMagick to modify or create images dynamically and <var>automagically</var>.</p>

<dl class="row">
  <dt class="col-md-4"><a class="anchor" id="c"></a>C</dt>

<dd class="col-md-8">Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-wand.php">MagickWand</a> to convert, compose, and edit images from the C language.  There is also the low-level <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a> library for wizard-level developers.</dd>

  <dt class="col-md-4"><a class="anchor" id="ch"></a>Ch</dt>

<dd class="col-md-8"><a href="https://imagemagick.org/ChMagick">ChMagick</a> is a <a href="http://www.softintegration.com/">Ch</a> binding to the MagickCore and MagickWand API.  Ch is an embeddable C/C++ interpreter for cross-platform scripting.</dd>

  <dt class="col-md-4"><a class="anchor" id="com_"></a>COM+</dt>

<dd class="col-md-8">Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/ImageMagickObject.php">ImageMagickObject</a> to convert, compose, and edit images from a Windows COM+ compatible component.</dd>

  <dt class="col-md-4"><a class="anchor" id="c__"></a>C++</dt>

<dd class="col-md-8"><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick++.php">Magick++</a> provides an object-oriented C++ interface to ImageMagick.  See <a href="https://imagemagick.org/Magick++/tutorial/Magick++_tutorial.pdf">A Gentle Introduction to Magick++</a> for an introductory tutorial to Magick++.  We include the <a href="https://imagemagick.org/Magick++/tutorial/Magick++_tutorial.odt">source</a> if you want to correct, enhance, or expand the tutorial.</dd>

  <dt class="col-md-4"><a class="anchor" id="go"></a>GO</dt>
  <dd class="col-md-8"><a href="https://github.com/gographics/imagick">GoImagick</a> is a set of Go bindings to ImageMagick's MagickWand and MagickCore C APIs.</dd>

  <dt class="col-md-4"><a class="anchor" id="java"></a>Java</dt>

<dd class="col-md-8"><a href="http://www.jmagick.org">JMagick</a> provides an object-oriented Java interface to ImageMagick.  <a href="http://im4java.sourceforge.net">Im4java</a> is a pure-java interface to the ImageMagick command-line.</dd>

  <dt class="col-md-4"><a class="anchor" id="julia"></a>Julia</dt>

<dd class="col-md-8"><a href="https://github.com/JuliaIO/ImageMagick.jl">JuliaIO</a> provides an object-oriented Julia interface to ImageMagick.</dd>

  <dt class="col-md-4"><a class="anchor" id="labview"></a>LabVIEW</dt>

<dd class="col-md-8"><a href="http://forums.lavag.org/downloads-file90.html">LVOOP ImageMagick</a> is an object-oriented LabVIEW interface to ImageMagick.</dd>

  <dt class="col-md-4"><a class="anchor" id="lisp"></a>Lisp</dt>

<dd class="col-md-8"><a href="http://common-lisp.net/project/cl-magick/">CL-Magick</a> provides a Common Lisp interface to the ImageMagick library.</dd>

  <dt class="col-md-4"><a class="anchor" id="lua"></a>Lua</dt>

<dd class="col-md-8"><a href="https://github.com/leafo/magick">Lua</a> bindings to ImageMagick for LuaJIT using FFI.</dd>
  <dt class="col-md-4"><a class="anchor" id="lua"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="https://github.com/isage/lua-imagick">Lua</a> bindings to ImageMagick for Lua using pure-C.</dd>

  <dt class="col-md-4"><a class="anchor" id="neko"></a>Neko</dt>

<dd class="col-md-8"><a href="http://code.google.com/p/nmagick">NMagick</a> is a port of the ImageMagick library to the haXe and Neko platforms. It provides image manipulation capabilities to both web and desktop applications using Neko.</dd>

  <dt class="col-md-4"><a class="anchor" id="dot-net"></a>.NET</dt>

<dd class="col-md-8">Use <a href="https://github.com/dlemstra/Magick.NET">Magick.NET</a> to convert, compose, and edit images from Windows .NET.</dd>
  <dt class="col-md-4"><a class="anchor" id="dot-net"></a>&nbsp;</dt>

<dd class="col-md-8"><a href="http://sourceforge.net/projects/imagemagickapp/">ImageMagickApp</a> is a .NET application written in C# that utilizes the ImageMagick command line to allow conversion of multiple image formats to different formats.</dd>

  <dt class="col-md-4"><a class="anchor" id="pascal"></a>Pascal</dt>

<dd class="col-md-8"><a href="http://wiki.freepascal.org/PascalMagick">PascalMagick</a> a Pascal binding for the MagickWand API and also the low-level MagickCore library. It works with Free Pascal / Lazarus and Delphi.</dd>

  <dt class="col-md-4"><a class="anchor" id="perl"></a>Perl</dt>

<dd class="col-md-8">Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/perl-magick.php">PerlMagick</a> to convert, compose, and edit images from the Perl language.</dd>

  <dt class="col-md-4"><a class="anchor" id="php"></a>PHP</dt>

<dd class="col-md-8"><a href="http://www.magickwand.org/">MagickWand for PHP</a> a native PHP-extension to the ImageMagick MagickWand API.</dd>

  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="http://pecl.php.net/package/imagick">IMagick</a> is a native PHP extension to create and modify images using the ImageMagick API.  Documentation for the extension is available <a href="http://php.net/imagick">here</a>.</dd>

  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="https://github.com/francodacosta/phmagick">phMagick</a> is a wrapper class for ImageMagick, wrapping the most common web image manipulation actions in easy to use functions, but allowing full access to ImageMagick's power by issuing system calls to it's command-line programs.</dd>


  <dt class="col-md-4"><a class="anchor" id="python"></a>Python</dt>


<dd class="col-md-8"><a href="http://wand-py.org/">Wand</a> is a ctypes-based ImagedMagick binding library for Python.</dd>
  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="https://imagemagick.org/download/python/">PythonMagick</a> is an object-oriented Python interface to ImageMagick.</dd>
  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="http://www.assembla.com/wiki/show/pythonmagickwand">PythonMagickWand</a> is an object-oriented Python interface to MagickWand based on ctypes.</dd>
  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="http://siptoolbox.sourceforge.net/">Scilab Image Processing</a> toolbox utilizes ImageMagick to do imaging tasks such as filtering, blurring, edge detection, thresholding, histogram manipulation, segmentation, mathematical morphology, color image processing, etc..</dd>

  <dt class="col-md-4"><a class="anchor" id="realbasic"></a>REALbasic</dt>

<dd class="col-md-8">The <a href="http://www.monkeybreadsoftware.de/realbasic/plugin-imagemagick.shtml">MBS Realbasic ImageMagick</a> is a plugin that utilizes the power of ImageMagick from within the RealBasic environment.</dd>

  <dt class="col-md-4"><a class="anchor" id="r"></a>R</dt>

<dd class="col-md-8"> The <a href="https://cran.r-project.org/package=magick">magick</a> package wraps the Magick++ STL to provide vectorized image processing in R. Get started with using the package <a href="https://cran.r-project.org/web/packages/magick/vignettes/intro.html">vignette</a>.</dd>

  <dt class="col-md-4"><a class="anchor" id="ruby"></a>Ruby</dt>

<dd class="col-md-8"><a href="https://rmagick.github.io/">RMagick</a> is an interface between the Ruby programming language and the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a> image processing libraries.  Get started with RMagick by perusing the <a href="https://rmagick.github.io/">documentation</a>.</dd>
  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>

<dd class="col-md-8"><a href="http://magickwand.rubyforge.org/">MagickWand for Ruby</a> is an interface between the Ruby programming language and the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-wand.php">MagickWand</a> image processing libraries.  Get started with MagickWand for PHP by perusing the <a href="http://magickwand.rubyforge.org/">documentation</a>.</dd>

  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>
<dd class="col-md-8"><a href="https://github.com/minimagick">MiniMagick</a> is a Ruby wrapper for ImageMagick command line. MiniMagick gives you convenient access to all the command line options ImageMagick supports.</dd>
  <dt class="col-md-4"><a class="anchor" id="php"></a>&nbsp;</dt>

<dd class="col-md-8"><a href="http://quickmagick.rubyforge.org/quick_magick">QuickMagick</a> is a gem for easily accessing ImageMagick command line tools from Ruby programs.</dd>

  <dt class="col-md-4"><a class="anchor" id="rust"></a>Rust</dt>

<dd class="col-md-8"><a href="https://github.com/influenza/wand-of-rust">RustWand</a> is a MagickWand bindings for the Rust language.</dd>

<dt class="col-md-4"><a class="anchor" id="tcl"></a>Tcl/Tk</dt>

<dd class="col-md-8"><a href="http://tclmagick.sourceforge.net/">TclMagick</a> a native Tcl-extension to the ImageMagick MagickWand API.</dd>

  <dt class="col-md-4"><a class="anchor" id="xml-rpc"></a>XML RPC</dt>

<dd class="col-md-8"><a href="http://code.google.com/p/remotemagick/">RemoteMagick</a> is an XML-RPC web service that creates image thumbnails.</dd>
</dl>
</div>
