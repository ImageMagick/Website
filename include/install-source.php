<div class="magick-header">
<p class="text-center"><a href="#unix">Install from Unix Source</a> • <a href="#windows">Install from Windows Source</a></p>

<p class="lead magick-description">Chances are, ImageMagick is already installed on your computer if you are using some flavor of Unix, and its likely not installed if you are using some form of Windows.  In either case, you can type the following to find out:</p>

<pre class="highlight"><code>identify -version
</code></pre>

<p>If the <a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">identify</a> program executes and identifies itself as ImageMagick, you may not need to install ImageMagick from source unless you want to add support for additional image formats or upgrade to a newer version.  You also have the option of installing a pre-compiled <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">binary release</a>.  However, if you still want to install from source, choose a platform, <a href="#unix">Unix</a> or <a href="#windows">Windows</a>.  Before installing from source, you may want to review recent <a href="<?php echo $_SESSION['RelativePath']?>/../script/changelog.php">changes</a> to the ImageMagick distribution.</p>

<p>The authoritative source code repository is <a href="https://github.com/ImageMagick">https://github.com/ImageMagick</a>.  We maintain a source code mirror at <a href="https://git.imagemagick.org/repos/ImageMagick">https://git.imagemagick.org/repos/ImageMagick</a>.  We test and deploy ImageMagick with <a href="https://travis-ci.org/ImageMagick">Travis CI</a> and <a href="https://ci.appveyor.com/project/dlemstra/imagemagick-windows">AppVeyor</a>.</p>

<h2><a class="anchor" id="unix"></a>Install from Unix Source</h2>

<p>ImageMagick builds on a variety of Unix and Unix-like operating systems including Linux, Solaris, FreeBSD, Mac OS X, and others.  A compiler is required and fortunately almost all modern Unix systems have one.  Download <a href="https://imagemagick.org/download/ImageMagick.tar.gz">ImageMagick.tar.gz</a> from <a href="https://imagemagick.org/download">imagemagick.org</a> or a <a href="<?php echo $_SESSION['RelativePath']?>/../script/mirror.php">mirror</a> and verify its <a href="https://imagemagick.org/download/digest.rdf">message digest</a>.</p>

<p>Unpack the distribution with this command:</p>

<pre class="highlight"><code>tar xvzf ImageMagick.tar.gz
</code></pre>

<p>Next configure and compile ImageMagick.  Note the <a href="https://en.wikipedia.org/wiki/Pkg-config">pkg-config</a> script is required so that ImageMagick can find certain optional delegate libraries on your system.  To configure, type:</p>

<?php crt("cd ImageMagick-" . MagickLibVersionText, "<br/>", "./configure", "<br/>", "make"); ?>
<p>For advanced users, we recommend a modules build:</p>
<?php crt("./configure --with-modules --enable-shared --with-perl"); ?>
<p>If ImageMagick configured and compiled without complaint, you are ready to install it on your system.  Administrator privileges are required to install.  To install, type</p>

<pre class="highlight"><code>sudo make install
</code></pre>

<p>You may need to configure the dynamic linker run-time bindings:</p>

<pre class="highlight"><code>sudo ldconfig /usr/local/lib
</code></pre>

<p>Finally, verify the ImageMagick install worked properly, type</p>

<pre class="highlight"><code>/usr/local/bin/convert logo: logo.gif
</code></pre>

<p>For a more comprehensive test, run the ImageMagick validation suite. Ghostscript and Freetype are prerequisites, otherwise expect the EPS, PS, PDF and text annotations tests to fail.</p>

<pre class="highlight"><code>make check
</code></pre>

<p>Congratulations, you have a working ImageMagick distribution and you are ready to use ImageMagick to <a href="https://imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<p>The above instructions will satisfy a great number of ImageMagick users, but we suspect a few will have additional questions or problems to consider.  For example, what does one do if ImageMagick fails to configure or compile?  Or what if you don't have administrator privileges and what if you don't want to install ImageMagick in the default <code>/../usr/local</code> folder?  You will find the answer to these questions, and more, in <a href="<?php echo $_SESSION['RelativePath']?>/../script/advanced-unix-installation.php">Advanced Unix Source Installation</a>.</p>

<h2><a class="anchor" id="windows"></a>Install from Windows Source</h2>
<p>We recommend you first uninstall an existing ImageMagick, else you might be surprised that your magick/convert commands go to the old version.<p>
<p>Building ImageMagick source for Windows can be done with a modern version of Microsoft Visual Studio IDE.  Users have reported success with the Borland C++ compiler as well.  If you don't have a compiler you can still install a self-installing <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">binary release</a>.</p>

<p>Method 1: Clone the Github repo:<p>

<pre class="highlight"><code>git clone git@github.com:ImageMagick/ImageMagick-Windows.git ImageMagick-Windows-7</code></pre>

<p>and run <code>CloneRepositories.cmd</code>.<p>
<p>Method 2: Download <a href="https://imagemagick.org/download/windows/ImageMagick-windows.zip">ImageMagick-windows.zip</a> and verify its <a href="https://imagemagick.org/download/windows/digest.rdf">message digest</a>.  For the latter, you can unpack the distribution with <a href="https://www.winzip.com">WinZip</a> or type the following from any MS-DOS Command Prompt window:</p>

<pre class="highlight"><code>unzip ImageMagick-windows.zip</code></pre>
<p> Unzip in a folder that does not need Admin permissions, otherwise Visual Studio will not be able to build the solution.<p> 
<p>Next, launch your Visual Studio IDE and choose <kbd>Open->Project</kbd>.  Select the configure workspace from the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/configure</kbd> folder and open configure.sln.  Choose <kbd>Build->Build Solution</kbd>
to compile the program and on completion run the program.</p>

<p><img class="img-fluid mx-auto d-block" src="<?php echo $_SESSION['RelativePath']?>/../image/configure.jpg" alt="[configure]" /></p>

<p>Press <kbd>Next</kbd> and click on the multi-threaded static build.  Now press, on <kbd>Next</kbd> twice and finally <kbd>Finish</kbd>.  The configuration utility just created a workspace required to build ImageMagick from source.  Choose <kbd>Open->Project</kbd> and select the VisualStaticMT workspace from the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/</kbd>  folder.  Finally, choose <kbd>Build->Build Solution</kbd> to compile and build the ImageMagick distribution.</p>

<p>To verify ImageMagick is working properly, launch a MS-DOS Command Prompt window and type</p>

<?php crt("cd ImageMagick-" . MagickLibVersionText, "<br/>", "convert logo: image.jpg"); ?>
<p>You may want to add the full path to VisualMagick\bin for your environment PATH variable, so you can call Magick/convert from any directory.<p>
<p>For a more comprehensive test, run the ImageMagick validation suite:</p>

<pre class="highlight"><code>validate
</code></pre>

<p>Congratulations, you have a working ImageMagick distribution under Windows and you are ready to use ImageMagick to <a href="https://imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<p>The above instructions will satisfy a great number of ImageMagick users, but we suspect a few will have additional questions or problems to consider.  For example, what does one do if ImageMagick fails to configure or compile?  Or what if you want to install ImageMagick in a place other than the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/bin</kbd> folder?  Or perhaps you want to build and install the <a href="<?php echo $_SESSION['RelativePath']?>/../script/ImageMagickObject.php">ImageMagickObject</a> COM+ component.  You will find the answer to these questions, and more, in <a href="<?php echo $_SESSION['RelativePath']?>/../script/advanced-windows-installation.php">Advanced Windows Source Installation</a>.</p>

</div>
