<div>
<p class="text-center"><a href="#linux">Linux Binary Release</a> • <a href="#macosx">Mac OS X Binary Release</a> • <a href="#iOS">iOS Binary Release</a> • <a href="#windows">Windows Binary Release</a></p>

<p class="lead">You can install ImageMagick from <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php">source</a>.  However, if you don't have a proper development environment or if you're anxious to get started, download a ready-to-run <a href="#linux">Linux</a> or <a href="#windows">Windows</a> executable.  Before you download, you may want to review recent <a href="https://github.com/ImageMagick/Website/blob/main/ChangeLog.md">changes</a> to the ImageMagick distribution.</p>

<p>ImageMagick source and binary distributions are available from a variety of FTP and Web <a href="<?php echo $_SESSION['RelativePath']?>/../script/mirror.php">mirrors</a> around the world.</p>

<p>It is strongly recommended to establish a <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policy</a> suitable for your local environment before utilizing ImageMagick.</p>

<h2><a class="anchor" id="linux"></a>Linux Binary Release</h2>

<p>These are the Linux variations that we support.  If your system is not on the list, try installing from <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php">source</a>. Although ImageMagick runs fine on a single core computer, it automagically runs in parallel on multi-core systems reducing run times considerably.</p>

<div>
<table class="table table-sm table-hover table-striped table-responsive">
  <col width="40%"/> <col width="60%"/>
  <thead>
  <tr>
    <th>Version</th>
    <th>Description</th>
  </tr>
  </thead>
  <tbody>

  <tr>
    <td><a href= "https://imagemagick.org/archive/binaries/magick">magick</a></td>
    <td>Complete portable application on Linux, no installation required.  Just download and run.  This <a href="https://appimage.org/">AppImage</a> has an open security policy.  ImageMagick recommended practices <b>strongly</b> encourage you to configure a <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policy</a> that suits your local environment. Simply add a custom security policy in your local path, .e.g., <samp>~/.config/ImageMagick/policy.xml</samp> and verify with this command: <samp>./magick -list policy</samp>.</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm";
  ?>
    <td><a href= "https://imagemagick.org/archive/linux/CentOS/x86_64/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Fedora 38 x86_64 RPM</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-libs-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm";
  ?>
    <td><a href= "https://imagemagick.org/archive/linux/CentOS/x86_64/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Fedora 38 x86_64 RPM</td>
  </tr>

  <tr>
    <td><a href="https://imagemagick.org/archive/linux/CentOS">ImageMagick RPM's</a></td>
    <td>Development, Perl, C++, and documentation RPM's.</td>
  </tr>

  <tr>
    <td><a href="https://imagemagick.org/archive/binaries/ImageMagick-i386-pc-solaris2.11.tar.gz">ImageMagick-i386-pc-solaris2.11.tar.gz</a></td>
    <td>Solaris Sparc 2.11</td>
  </tr>

  <tr>
    <td><a href="https://imagemagick.org/archive/binaries/ImageMagick-i686-pc-cygwin.tar.gz">ImageMagick-i686-pc-cygwin.tar.gz</a></td>
    <td>Cygwin</td>
  </tr>

  <tr>
    <td><a href="https://imagemagick.org/archive/binaries/ImageMagick-i686-pc-mingw32.tar.gz">ImageMagick-i686-pc-mingw32.tar.gz</a></td>
    <td>MinGW</td>
  </tr>
  </tbody>
</table></div>

<p>Verify its <a href="https://imagemagick.org/archive/binaries/digest.rdf">message digest</a>.</p>

<p>ImageMagick RPM's are self-installing.  Simply type the following command and you're ready to start using ImageMagick:</p>

<?php crt("rpm -Uvh ImageMagick-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm"); ?>
<p>You'll need the libraries as well:</p>
<?php crt("rpm -Uvh ImageMagick-libs-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm"); ?>

<p>Note, if there are missing dependencies, install them from the <a href="https://fedoraproject.org/wiki/EPEL">EPEL</a> repo.</p>

<p>For other systems, create (or choose) a directory to install the package into and change to that directory, for example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>cd $HOME</samp></pre>

<p>Next, extract the contents of the package.  For example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>tar xvzf ImageMagick.tar.gz</samp></pre>

<p>Set the <samp>MAGICK_HOME</samp> environment variable to the path where you extracted the ImageMagick files. For example:</p>

<?php crt('export MAGICK_HOME="$HOME/ImageMagick-' . MagickLibVersionText . '"'); ?>

<p>If the <samp>bin</samp> subdirectory of the extracted package is not already in your executable search path, add it to your <samp>PATH</samp> environment variable. For example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>export PATH="$MAGICK_HOME/bin:$PATH</samp></pre>


<p>On Linux and Solaris machines add <samp>$MAGICK_HOME/lib</samp> to the <samp>LD_LIBRARY_PATH</samp> environment variable:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>LD_LIBRARY_PATH="${LD_LIBRARY_PATH:+$LD_LIBRARY_PATH:}$MAGICK_HOME/lib
export LD_LIBRARY_PATH</samp></pre>

<p>Finally, to verify ImageMagick is working properly, type the following on the command line:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick logo: logo.gif
identify logo.gif
display logo.gif</samp></pre>

<p>Congratulations, you have a working ImageMagick distribution under Linux or Linux and you are ready to use ImageMagick to <a href="https://imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<h2><a class="anchor" id="macosx"></a>Mac OS X Binary Release</h2>

<p>We recommend <a href="https://brew.sh">Homebrew</a> which provides pre-built binaries for Mac (some users prefer <a href="https://macports.org">MacPorts</a>).  Download HomeBrew and type:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>brew install imagemagick</samp></pre>

<p>ImageMagick depends on Ghostscript fonts.  To install them, type:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>brew install ghostscript</samp></pre>

<p>The <samp>brew</samp> command downloads and installs ImageMagick with many of its delegate libraries (e.g. JPEG, PNG, Freetype, etc).  Homebrew <a href="https://github.com/Homebrew/homebrew-core/issues/31510">no longer allows</a> configurable builds; if you need different compile options (e.g. librsvg support), you can download the ImageMagick Mac OS X distribution we provide:</p>

<div>
<table class="table table-sm table-hover table-striped table-responsive">
  <col width="40%"/> <col width="60%"/>
  <thead>
  <tr>
    <th>Version</th>
    <th>Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><a href="https://imagemagick.org/archive/binaries/ImageMagick-x86_64-apple-darwin20.1.0.tar.gz">ImageMagick-x86_64-apple-darwin20.1.0.tar.gz</a></td>
    <td>macOS High Sierra</td>
  </tr>
  <tbody>
</table></div>

<p>Verify its <a href="https://imagemagick.org/archive/binaries/digest.rdf">message digest</a>.</p>

<p>Create (or choose) a directory to install the package into and change to that directory, for example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>cd $HOME</samp></pre>

<p>Next, extract the contents of the package.  For example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>tar xvzf ImageMagick-x86_64-apple-darwin20.1.0.tar.gz</samp></pre>

<p>Set the <samp>MAGICK_HOME</samp> environment variable to the path where you extracted the ImageMagick files. For example:</p>

<?php crt('export MAGICK_HOME="$HOME/ImageMagick-' . MagickLibVersionText . '"'); ?>

<p>If the <samp>bin</samp> subdirectory of the extracted package is not already in your executable search path, add it to your <samp>PATH</samp> environment variable. For example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>export PATH="$MAGICK_HOME/bin:$PATH"</samp></pre>


<p>Set the <samp>DYLD_LIBRARY_PATH</samp> environment variable:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>export DYLD_LIBRARY_PATH="$MAGICK_HOME/lib/"</samp></pre>

<p>Finally, to verify ImageMagick is working properly, type the following on the command line:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick logo: logo.gif
identify logo.gif
display logo.gif</samp></pre>

<p><b>Note</b>, the <a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a> program requires the X11 server available on your Mac OS X installation DVD. Once that is installed, you will also need to set <samp>export DISPLAY=:0</samp>.</p>

<p>The best way to deal with all the exports is to put them at the end of your .profile file</p>

<p>Congratulations, you have a working ImageMagick distribution under Mac OS X and you are ready to use ImageMagick to <a href="https://imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<h2><a class="anchor" id="iOS"></a>iOS Binary Release</h2>

<p><a href="http://www.cloudgoessocial.net/2011/03/21/im-xcode4-ios4-3/">~Claudio</a> provides iOS builds of ImageMagick.</p>

<h4>Download iOS Distribution</h4>

<p>You can download the iOS distribution directly from ImageMagick's <a href="https://imagemagick.org/archive/iOS">repository</a>.</p>

<p>There are always 2 packages for the compiled ImageMagick:</p>

<ul>
<li>iOSMagick-VERSION-libs.zip</li>
<li>iOSMagick-VERSION.zip</li>
</ul>

<p>The first one includes headers and compiled libraries that have been used to compile ImageMagick. Most users would need this one.</p>

<h4>ImageMagick compiling script for iOS OS and iOS Simulator</h4>

<p>To run the script:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>./imagemagick_compile.sh <var>VERSION</var></samp></pre>
<p>where <var>VERSION</var> is the version of ImageMagick you want to compile (i.e.: <?php echo MagickLibVersionText . MagickLibSubversion; ?>, svn, ...)</p>

<p>This script compiles ImageMagick as a static library to be included in iOS projects and adds support for</p>
<ul>
<li>png</li>
<li>jpeg</li>
<li>tiff</li>
</ul>

<p>Upon successful compilation a folder called <samp>IMPORT_ME</samp> is created on your <samp>~/Desktop</samp>. You can import it into your Xcode project.</p>

<h4>Xcode project settings</h4>

<p>After including everything into Xcode please also make sure to have these settings (Build tab of the project information):</p>
<ul>
<li>Other Linker Flags: -lMagickCore-Q16 -lMagickWand-Q16 -ljpeg -lpng -lbz2 -lz</li>
<li>Header Search Paths: $(SRCROOT) - make it Recursive</li>
<li>Library Search Paths: $(SRCROOT) - make it Recursive</li>
</ul>

<p>On the lower left click on the small-wheel and select: Add User-Defined Setting</p>
<ul>
<li>Key: OTHER_CFLAGS</li>
<li>Value: -Dmacintosh=1</li>
</ul>

<h4>Sample project</h4>

<p>A <a href="http://www.cloudgoessocial.net/im_iphone/IM_Test.zip">sample project </a> is available for download. It is not updated too often, but it does give an idea of all the settings and some ways to play around with ImageMagick in an iOS application.</p>

<h2><a class="anchor" id="windows"></a>Windows Binary Release</h2>

<p>ImageMagick runs on Windows 7 (x86 , x64 &amp; arm64) or newer, Windows Server 2012 or newer, Windows Vista (x86 &amp; x64) with Service Pack 2, Windows Server 2008 (x86 &amp; x64) with Service Pack 2, and Windows Server 2008 R2 (x64).</p>

<p>The amount of memory can be an important factor, especially if you intend to work on large images.  A minimum of 512 MB of RAM is recommended, but the more RAM the better.  Although ImageMagick runs well on a single core computer, it automagically runs in parallel on multi-core systems reducing run times considerably.</p>

<p>The Windows version of ImageMagick is self-installing.  Simply click on the appropriate version below and it will launch itself and ask you a few installation questions.  Versions with <var>Q8</var> in the name are 8 bits-per-pixel component (e.g. 8-bit red, 8-bit green, etc.), whereas,  <var>Q16</var> in the filename are 16 bits-per-pixel component. A Q16 version permits you to read or write 16-bit images without losing precision but requires twice as much resources as the Q8 version.  Versions with <var>dll</var> in the filename include ImageMagick libraries as <a href="http://www.answers.com/topic/dll">dynamic link libraries</a>. Unless you have a Windows 32-bit OS, we recommend this version of ImageMagick for 64-bit Windows:</p>

<div>
<table class="table table-sm table-hover table-striped table-responsive">
  <col width="40%"/> <col width="60%"/>
  <thead>
  <tr>
    <th>Version</th>
    <th>Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 dynamic at 16 bits-per-pixel component with High-dynamic-range imaging enabled</td>
  </tr>
  </tbody>
</table></div>

<p>Or choose from these alternate Windows binary distributions:</p>

<div>
<table class="table table-sm table-hover table-striped table-responsive">
  <col width="40%"/> <col width="60%"/>
  <thead>
  <tr>
    <th>Version</th>
    <th>Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-arm64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-arm64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-arm64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-arm64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-arm64-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-arm64-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x86-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x86-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x86-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x86-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x86-dll.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x86-static.exe";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-x64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-arm64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-x86.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q8-x64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q8-arm64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q8-x86.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-HDRI-x64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-HDRI-arm64.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-HDRI-x86.zip";
  ?>
    <td><a href= "https://imagemagick.org/archive/binaries/<?php echo $filename; ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tbody>
</table></div>

<p>Verify its <a href="https://imagemagick.org/archive/binaries/digest.rdf">message digest</a>.</p>

<p>To verify ImageMagick is working properly, type the following in a Command Prompt window:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick logo: logo.gif
magick identify logo.gif</samp></pre>

<p>If you have any problems, you likely need <samp>vcomp140.dll</samp>.  To install it, download <a href="https://support.microsoft.com/en-us/help/2977003/the-latest-supported-visual-c-downloads">Visual C++ Redistributable Package</a>.</p>

<p>Note, use a double quote (<samp>"</samp>) rather than a single quote (<samp>'</samp>) for the ImageMagick command line under Windows:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick "e:/myimages/image.png" "e:/myimages/image.jpg"</samp></pre>
<p>Use two double quotes for VBScript scripts:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>Set objShell = wscript.createobject("wscript.shell")
objShell.Exec("magick ""e:/myimages/image.png"" ""e:/myimages/image.jpg""")</samp></pre>

<p>It is strongly recommended to establish a <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policy</a> suitable for your local environment before utilizing ImageMagick.</p>

<p>Congratulations, you have a working ImageMagick distribution under Windows and you are ready to use ImageMagick to <a href="https://imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/develop.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

</div>
