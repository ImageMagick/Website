<div>
<p class="text-center"><a href="#linux">Install from Linux Source</a> • <a href="#windows">Install from Windows Source</a></p>

<p class="lead">Chances are, ImageMagick is already installed on your computer if you are using some flavor of Linux, and its likely not installed if you are using some form of Windows.  In either case, you can type the following to find out:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick identify -version
</samp></pre>

<p>If the <a href="<?php echo $_SESSION['RelativePath']?>/../script/identify.php">identify</a> program executes and identifies itself as ImageMagick, you may not need to install ImageMagick from source unless you want to add support for additional image formats or upgrade to a newer version.  You also have the option of installing a pre-compiled <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">binary release</a>.  However, if you still want to install from source, choose a platform, <a href="#linux">Linux</a> or <a href="#windows">Windows</a>.  Before installing from source, you may want to review recent <a href="https://github.com/ImageMagick/Website/blob/main/ChangeLog.md" rel="noopener" target="_blank">changes</a> to the ImageMagick distribution.</p>

<p>The authoritative source code repository is <a href="https://github.com/ImageMagick">https://github.com/ImageMagick</a>. </p>

<h2><a class="anchor" id="linux"></a>Install from Linux Source</h2>

<p>ImageMagick builds on a variety of Linux and Linux-like operating systems including Linux, Solaris, FreeBSD, Mac OS X, and others.  A compiler is required and fortunately almost all modern Linux systems have one.</p>

<p>Clone the latest release from the source repository:</p>

<?php crt("git clone --depth 1 --branch [latest_release_tag] https://github.com/ImageMagick/ImageMagick.git ImageMagick-" . MagickLibVersionText); ?>

<p>Or download <a href="https://imagemagick.org/archive/ImageMagick.tar.gz">ImageMagick.tar.gz</a> from <a href="https://imagemagick.org/archive">imagemagick.org</a> or a <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">mirror</a> and verify the distribution against its <a href="https://imagemagick.org/archive/digest.rdf">message digest</a>.</p>

<p>Next configure and compile ImageMagick.  Note the <a href="https://en.wikipedia.org/wiki/Pkg-config">pkg-config</a> script is required so that ImageMagick can find certain optional delegate libraries on your system.  To configure, type:</p>

<?php crt("cd ImageMagick-" . MagickLibVersionText, "", "./configure", "", "make"); ?>

<p>If build fails, try <samp>gmake</samp> instead.</p>

<p>For advanced users, we recommend a modules build:</p>
<?php crt("./configure --with-modules"); ?>
<p>If ImageMagick configured and compiled without complaint, you are ready to install it on your system.  Administrator privileges are required to install.  To install, type</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>sudo make install
</samp></pre>

<p>You may need to configure the dynamic linker run-time bindings:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>sudo ldconfig /usr/local/lib
</samp></pre>

<p>Finally, verify the ImageMagick install worked properly, type</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>/usr/local/bin/magick logo: logo.gif
</samp></pre>

<p>For a more comprehensive test, run the ImageMagick validation suite. Ghostscript and Freetype are prerequisites, otherwise expect the EPS, PS, PDF and text annotations tests to fail.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>make check
</samp></pre>

<p>Ghostscript and Freetype are prerequisites, otherwise certain unit tests that render text and the EPS, PS, and PDF formats will likely fail. These unit tests require the open security policy to pass.</p>

<p>Congratulations, you have a working ImageMagick distribution and you are ready to use ImageMagick to <a href="https://usage.imagemagick.org/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<p>The above instructions will satisfy a great number of ImageMagick users, but we suspect a few will have additional questions or problems to consider.  For example, what does one do if ImageMagick fails to configure or compile?  Or what if you don't have administrator privileges and what if you don't want to install ImageMagick in the default <samp>/../usr/local</samp> folder?  You will find the answer to these questions, and more, in <a href="<?php echo $_SESSION['RelativePath']?>/../script/advanced-linux-installation.php">Advanced Linux Source Installation</a>.</p>

<h2><a class="anchor" id="windows"></a>Install from Windows Source</h2>
<p>We recommend you first uninstall an existing ImageMagick, else you might be surprised that your <samp>magick</samp> commands go to the old version.<p>
<p>Building ImageMagick source for Windows can be done with a modern version of Microsoft Visual Studio IDE.  Users have reported success with the Borland C++ compiler as well.  If you don't have a compiler you can still install a self-installing <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">binary release</a>.</p>

<p>Clone the Github repo:<p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>git clone https://github.com/ImageMagick/ImageMagick-Windows.git ImageMagick-Windows-7</samp></pre>


<p>and run <samp>CloneRepositories.cmd</samp>.  Or download <a href="https://imagemagick.org/archive/windows">ImageMagick-Windows.zip</a> from <a href="https://imagemagick.org/archive/windows">imagemagick.org</a> or a <a href="<?php echo $_SESSION['RelativePath']?>/../script/mirror.php">mirror</a> and verify the distribution against its <a href="https://imagemagick.org/archive/digest.rdf">message digest</a>.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>unzip ImageMagick-windows.zip</samp></pre>
<p> Unzip in a folder that does not need Admin permissions, otherwise Visual Studio will not be able to build the solution.<p> 
<p>Next, launch your Visual Studio IDE and choose <kbd>Open->Project</kbd>.  Select the configure workspace from the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/configure</kbd> folder and open configure.sln.  Choose <kbd>Build->Build Solution</kbd>
to compile the program and on completion run the program.</p>

<ul><img class="img-fluid img-thumbnail" src="<?php echo $_SESSION['RelativePath']?>/../image/configure.jpg" alt="[configure]" /></ul>

<p>Press <kbd>Next</kbd> and click on the multi-threaded static build.  Now press, on <kbd>Next</kbd> twice and finally <kbd>Finish</kbd>.  The configuration utility just created a workspace required to build ImageMagick from source.  Choose <kbd>Open->Project</kbd> and select the VisualStaticMT workspace from the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/</kbd>  folder.  Finally, choose <kbd>Build->Build Solution</kbd> to compile and build the ImageMagick distribution.</p>

<p>The configure.exe utility can also be run on the command line instead of through the GUI wizard. You can see an example in <a href="https://github.com/ImageMagick/ImageMagick/blob/18e15da2dc6ceae05e95077f85e9d67dac31c5d8/.github/workflows/release.yml#L212">our GitHub actions build</a>.</p>

<p>To verify ImageMagick is working properly, launch a MS-DOS Command Prompt window and type</p>

<?php crt("cd ImageMagick-" . MagickLibVersionText, "", "magick logo: image.jpg"); ?>
<p>You may want to add the full path to VisualMagick\bin for your environment PATH variable, so you can call <samp>magick<samp> from any directory.<p>
<p>For a more comprehensive test, run the ImageMagick validation suite:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>validate
</samp></pre>

<p>Congratulations, you have a working ImageMagick distribution under Windows and you are ready to use ImageMagick to <a href="https://usage.imagemagick.org/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<p>The above instructions will satisfy a great number of ImageMagick users, but we suspect a few will have additional questions or problems to consider.  For example, what does one do if ImageMagick fails to configure or compile?  Or what if you want to install ImageMagick in a place other than the <kbd>ImageMagick-<?php echo(MagickLibVersionText); ?>/VisualMagick/bin</kbd> folder?  You will find the answer to these questions, and more, in <a href="<?php echo $_SESSION['RelativePath']?>/../script/advanced-windows-installation.php">Advanced Windows Source Installation</a>.</p>

</div>
