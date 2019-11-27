<div class="magick-header">
<p class="text-center"><a href="<?php echo $_SESSION['RelativePath']?>/../script/#build">Build ImageMagickObject From Source</a></p>

<p class="lead magick-description">The ImageMagickObject is a COM+ compatible component that can be invoked from any language capable of using COM objects.  The intended use is for Windows Scripting Host VBS scripts and Visual Basic, but it is also available from to C++, ASP, and other languages like Delphi, Perl and PHP.</p>

<p>The ImageMagickObject COM+ component provides access to the <a href="<?php echo $_SESSION['RelativePath']?>/../script/compare.php">compare</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/convert.php">convert</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/composite.php">composite</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/mogrify.php">mogrify</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">identify</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">montage</a>, and <a href="<?php echo $_SESSION['RelativePath']?>/../script/stream.php">stream</a> tools, efficiently executing them as part of your process, rather than as external programs. The way you use it is exactly the same. You pass it a list of strings including filenames and various options and it does the job. In fact, you can take any existing batch scripts that use the command line tools and translate them into the equivalent calls to the COM+ object in a matter of minutes. Beyond that, there is also a way to pass in and retrieve images in memory in the form of standard smart arrays (byte arrays). Samples are provided, to show both the simple and more elaborate forms of access.</p>

<p>ImageMagick provides a statically-built ImageMagick object as part of its <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php#windows">Windows installation package</a>.  When this package is installed, ImageMagickObject and its sample programs are installed to this path:</p>

<pre class="highlight"><code>  c:\Program Files\ImageMagick-<?php echo(MagickLibVersionText); ?>-Q16\ImageMagickObject
</code></pre>

<p>The ImageMagickObject is registered if the checkbox, <code>Register ImageMagickObject</code>, is checked at install time.</p>

<p>To execute the sample program from the Windows Command Shell, type:</p>

<pre class="highlight"><code>cscript SimpleTest.vbs
</code></pre>

<p>Since the ImageMagick utility command line parsers are incorporated within ImageMagickObject, please refer to the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-tools.php">command-line tools</a> discussion to learn how to use it. The sample VBS scripts show how the object should be called and used and have lots of comments.</p>

<p>C++ programmers should have a look at the <code>MagickCMD.cpp</code> command line utility for an example of how to call the object from C++.  The object requires a variable size list of BSTR's to emulate the command line argc, argv style calling conventions of the COM component which is more complex in C++ then in VBS or VB.</p>

<p>MagickCMD is a C++ sample, but it also serves as a replacement for all the other command line utilities in most applications. Instead of using <code>convert xxxx yyyy</code> you can use <code>MagickCMD convert xxxx yyyy</code> instead. MagickCMD calls the COM object to accomplish the designated task.  This small tight combination replaces the entire usual binary distribution in just a few mebibytes.</p>

<h2><a class="anchor" id="build"></a>Build ImageMagickObject From Source</h2>

<p>The source code for ImageMagickObject is available from the ImageMagick <a href="https://github.com/ImageMagick">GIT</a> repository, or as part of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php#windows">Windows source</a> distribution. Once the source code has been retrieved and extracted, the source for ImageMagickObject is the directory <code>ImageMagick\contrib\win32\ATL7ImageMagickObject</code>, however, ImageMagick itself must be built using the static-multithread (VisualStaticMT) build configuration.  Building ImageMagickObject requires Microsoft Visual C++ 7.0 as delivered with Microsoft's Visual Studio .NET package. See the <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php#windows">Windows compilation instructions</a> to get ImageMagick itself built before building the ImageMagick COM+ component.</p>

<p>Once the VisualStaticMT project has been built, build the ImageMagickObject with this procedure:</p>

<pre class="highlight"><code>cd ImageMagick/contrib/win32/ATL7/ImageMagickObject
BuildImageMagickObject release
</code></pre>

<p>Here, we assume that the VisualStaticMT project has been built using the release setting for an optimized build. If the debug setting was used for a debug build, specify the argument <code>debug</code>; instead.</p>

<p>To register the DLL as a COM+ server, type</p>

<pre class="highlight"><code>regsvr32 /c /s ImageMagickObject.dll
</code></pre>

<p>To unregister the DLL, type</p>

<pre class="highlight"><code>regsvr32 /u /s ImageMagickObject.dll
</code></pre>

<p>Use MagickCMD to exercise ImageMagickObject to verify that it is working properly.</p>

</div>
