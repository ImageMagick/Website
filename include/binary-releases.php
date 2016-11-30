<div class="magick-header">
<p class="text-center"><a href="#unix">Unix Binary Release</a> • <a href="#macosx">Mac OS X Binary Release</a> • <a href="#iOS">iOS Binary Release</a> • <a href="#windows">Windows Binary Release</a></p>

<p class="lead magick-description">You can install ImageMagick from <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php">source</a>.  However, if you don't have a proper development environment or if you're anxious to get started, download a ready-to-run <a href="#unix">Unix</a> or <a href="#windows">Windows</a> executable.  Before you download, you may want to review recent <a href="<?php echo $_SESSION['RelativePath']?>/../script/changelog.php">changes</a> to the ImageMagick distribution.</p>

<h2 class="magick-header"><a id="unix"></a>Unix Binary Release</h2>

<p>These are the Unix variations that we support.  If your system is not on the list, try installing from <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php">source</a>. Although ImageMagick runs fine on a single core computer, it automagically runs in parallel on dual and quad-core systems reducing run times considerably.</p>

<div class="table-responsive">
<table class="table table-condensed table-striped">
  <col width="50%"/> <col width="10%"/> <col width="10%"/> <col width="30%"/>
  <tr>
    <th>Version</th>
    <th>HTTP</th>
    <th>FTP</th>
    <th>Description</th>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm";
  ?>
    <td><?php echo $filename; ?></td>
      <td><a href= "https://www.imagemagick.org/download/linux/CentOS/x86_64/<?php echo $filename; ?>">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/linux/CentOS/x86_64/<?php echo $filename; ?>">download</a></td>
    <td>Redhat / CentOS 7.1 x86_64 RPM</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-libs-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm";
  ?>
    <td><?php echo $filename; ?></td>
      <td><a href= "https://www.imagemagick.org/download/linux/CentOS/x86_64/<?php echo $filename; ?>">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/linux/CentOS/x86_64/<?php echo $filename; ?>">download</a></td>
    <td>Redhat / CentOS 7.1 x86_64 RPM</td>
  </tr>

  <tr>
    <td>ImageMagick RPM's</td>
    <td><a href="https://www.imagemagick.org/download/linux/CentOS">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/linux/CentOS">download</a></td>
    <td>Development, Perl, C++, and documentation RPM's.</td>
  </tr>

  <tr>
    <td>ImageMagick-i386-pc-solaris2.11.tar.gz</td>
    <td><a href="https://www.imagemagick.org/download/binaries/ImageMagick-i386-pc-solaris2.11.tar.gz">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/ImageMagick-i386-pc-solaris2.11.tar.gz">download</a></td>
    <td>Solaris Sparc 2.11</td>
  </tr>

  <tr>
    <td>ImageMagick-i686-pc-cygwin.tar.gz</td>
    <td><a href="https://www.imagemagick.org/download/binaries/ImageMagick-i686-pc-cygwin.tar.gz">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/ImageMagick-i686-pc-cygwin.tar.gz">download</a></td>
    <td>Cygwin</td>
  </tr>

  <tr>
    <td>ImageMagick-i686-pc-mingw32.tar.gz</td>
    <td><a href="https://www.imagemagick.org/download/binaries/ImageMagick-i686-pc-mingw32.tar.gz">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/ImageMagick-i686-pc-mingw32.tar.gz">download</a></td>
    <td>MinGW</td>
  </tr>
</table></div>

<p>Verify its <a href="https://www.imagemagick.org/download/binaries/digest.rdf">message digest</a>.</p>

<p>ImageMagick RPM's are self-installing.  Simply type the following command and you're ready to start using ImageMagick:</p>

<?php crt("rpm -Uvh ImageMagick-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm"); ?>
<p>You'll need the libraries as well:</p>
<?php crt("rpm -Uvh ImageMagick-libs-" . MagickLibVersionText . MagickLibSubversion . ".x86_64.rpm"); ?>

<p>For other systems, create (or choose) a directory to install the package into and change to that directory, for example:</p>

<pre>
cd $HOME
</pre>

<p>Next, extract the contents of the package.  For example:</p>

<pre>
tar xvzf ImageMagick.tar.gz
</pre>

<p>Set the <code>MAGICK_HOME</code> environment variable to the path where you extracted the ImageMagick files. For example:</p>

<?php crt('export MAGICK_HOME="$HOME/ImageMagick-' . MagickLibVersionText . '"'); ?>

<p>If the <code>bin</code> subdirectory of the extracted package is not already in your executable search path, add it to your <code>PATH</code> environment variable. For example:</p>

<pre>
export PATH="$MAGICK_HOME/bin:$PATH
</pre>


<p>On Linux and Solaris machines add <code>$MAGICK_HOME/lib</code> to the <code>LD_LIBRARY_PATH</code> environment variable:</p>

<pre>
LD_LIBRARY_PATH="${LD_LIBRARY_PATH:+$LD_LIBRARY_PATH:}$MAGICK_HOME/lib
export LD_LIBRARY_PATH
</pre>

<p>Finally, to verify ImageMagick is working properly, type the following on the command line:</p>

<pre>
magick logo: logo.gif
identify logo.gif
display logo.gif
</pre>

<p>Congratulations, you have a working ImageMagick distribution under Unix or Linux and you are ready to use ImageMagick to <a href="https://www.imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/api.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<h2 class="magick-header"><a id="macosx"></a>Mac OS X Binary Release</h2>

<p>We recommend <a href="http://www.macports.org">MacPorts</a> which custom builds ImageMagick in your environment (some users prefer <a href="http://brew.sh">Homebrew</a>).  Download MacPorts and type:</p>

<pre>
sudo port install ImageMagick
</pre>

<p>The <code>port</code> command downloads ImageMagick and many of its delegate libraries (e.g. JPEG, PNG, Freetype, etc.) and configures, builds, and installs ImageMagick automagically.  Alternatively, you can download the ImageMagick Mac OS X distribution we provide:</p>

<div class="table-responsive">
<table class="table table-condensed table-striped">
  <col width="50%"/> <col width="10%"/> <col width="10%"/> <col width="30%"/>
  <tr>
    <th>Version</th>
    <th>HTTP</th>
    <th>FTP</th>
    <th>Description</th>
  </tr>

  <tr>
    <td>ImageMagick-x86_64-apple-darwin15.6.0.tar.gz</td>
    <td><a href="https://www.imagemagick.org/download/binaries/ImageMagick-x86_64-apple-darwin15.6.0.tar.gz">download</a></td>
    <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/ImageMagick-x86_64-apple-darwin15.6.0.tar.gz">download</a></td>
    <td>Mac OS X El Capitan</td>
  </tr>
</table></div>

<p>Verify its <a href="https://www.imagemagick.org/download/binaries/digest.rdf">message digest</a>.</p>

<p>Create (or choose) a directory to install the package into and change to that directory, for example:</p>

<pre>
cd $HOME
</pre>

<p>Next, extract the contents of the package.  For example:</p>

<pre>
tar xvzf ImageMagick-x86_64-apple-darwin15.2.0.tar.gz
</pre>

<p>Set the <code>MAGICK_HOME</code> environment variable to the path where you extracted the ImageMagick files. For example:</p>

<?php crt('export MAGICK_HOME="$HOME/ImageMagick-' . MagickLibVersionText . '"'); ?>

<p>If the <code>bin</code> subdirectory of the extracted package is not already in your executable search path, add it to your <code>PATH</code> environment variable. For example:</p>

<pre>
export PATH="$MAGICK_HOME/bin:$PATH"
</pre>


<p>Set the <code>DYLD_LIBRARY_PATH</code> environment variable:</p>

<pre>
export DYLD_LIBRARY_PATH="$MAGICK_HOME/lib/"
</pre>

<p>Finally, to verify ImageMagick is working properly, type the following on the command line:</p>

<pre>
magick logo: logo.gif
identify logo.gif
display logo.gif
</pre>

<p><b>Note</b>, the <a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a> program requires the X11 server available on your Mac OS X installation DVD. Once that is installed, you will also need to <code>export DISPLAY=:0</code>.</p>

<p>The best way to deal with all the exports is to put them at the end of your .profile file</p>

<p>Congratulations, you have a working ImageMagick distribution under Mac OS X and you are ready to use ImageMagick to <a href="https://www.imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/api.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

<h2 class="magick-header"><a id="iOS"></a>iOS Binary Release</h2>

<p><a href="http://www.cloudgoessocial.net/2011/03/21/im-xcode4-ios4-3/">~Claudio</a> provides iOS builds of ImageMagick.</p>

<h4>Download iOS Distribution</h4>

<p>You can download the iOS distribution directly from ImageMagick's <a href="https://www.imagemagick.org/download/iOS">repository</a>.</p>

<p>There are always 2 packages for the compiled ImageMagick:</p>

<ul>
<li>iOSMagick-VERSION-libs.zip</li>
<li>iOSMagick-VERSION.zip</li>
</ul>

<p>The first one includes headers and compiled libraries that have been used to compile ImageMagick. Most users would need this one.</p>

<h4>ImageMagick compiling script for iOS OS and iOS Simulator</h4>

<p>To run the script:</p>
<pre>
./imagemagick_compile.sh <var>VERSION</var>
</pre>
<p>where <var>VERSION</var> is the version of ImageMagick you want to compile (i.e.: <?php echo MagickLibVersionText . MagickLibSubversion; ?>, svn, ...)</p>

<p>This script compiles ImageMagick as a static library to be included in iOS projects and adds support for</p>
<ul>
<li>png</li>
<li>jpeg</li>
<li>tiff</li>
</ul>

<p>Upon successful compilation a folder called <code>IMPORT_ME</code> is created on your <code>~/Desktop</code>. You can import it into your XCode project.</p>

<h5>XCode project settings</h5>

<p>After including everything into XCode please also make sure to have these settings (Build tab of the project information):</p>
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

<h5>Sample project</h5>

<p>A <a href="http://www.cloudgoessocial.net/im_iphone/IM_Test.zip">sample project </a> is available for download. It is not updated too often, but it does give an idea of all the settings and some ways to play around with ImageMagick in an iOS application.</p>

<h2 class="magick-header"><a id="windows"></a>Windows Binary Release</h2>

<p>ImageMagick runs on Windows 10 (x86 &amp; x64), Windows 8 (x86 &amp; x64), Windows 7 (x86 &amp; x64), Windows Server 2012, Windows XP (x86) with Service Pack 3, Windows Vista (x86 &amp; x64) with Service Pack 2, Windows Server 2003 (x86 &amp; x64) with Service Pack 2 (verify MSXML6 is present), Windows Server 2003 R2 (x86 &amp; x64), Windows Server 2008 (x86 &amp; x64) with Service Pack 2, and Windows Server 2008 R2 (x64).</p>

<p>The amount of memory can be an important factor, especially if you intend to work on large images.  A minimum of 512 MB of RAM is recommended, but the more RAM the better.  Although ImageMagick runs well on a single core computer, it automagically runs in parallel on multi-core systems reducing run times considerably.</p>

<p>The Windows version of ImageMagick is self-installing.  Simply click on the appropriate version below and it will launch itself and ask you a few installation questions.  Versions with <var>Q8</var> in the name are 8 bits-per-pixel component (e.g. 8-bit red, 8-bit green, etc.), whereas,  <var>Q16</var> in the filename are 16 bits-per-pixel component. A Q16 version permits you to read or write 16-bit images without losing precision but requires twice as much resources as the Q8 version.  Versions with <var>dll</var> in the filename include ImageMagick libraries as <a href="http://www.answers.com/topic/dll">dynamic link libraries</a>. Unless you have a Windows 32-bit OS, we recommend this version of ImageMagick for 64-bit Windows:</p>

<div class="table-responsive">
<table class="table table-condensed table-striped">
  <col width="50%"/> <col width="10%"/> <col width="10%"/> <col width="30%"/>
  <tr>
    <th>Version</th>
    <th>HTTP</th>
    <th>FTP</th>
    <th>Description</th>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x64-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win64 dynamic at 16 bits-per-pixel component</td>
  </tr>
</table></div>

<p>Or choose from these alternate Windows binary distributions:</p>

<div class="table-responsive">
<table class="table table-condensed table-striped">
  <col width="50%"/> <col width="10%"/> <col width="10%"/> <col width="30%"/>
  <tr>
    <th>Version</th>
    <th>HTTP</th>
    <th>FTP</th>
    <th>Description</th>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x64-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
   <td>Win64 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x64-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
   <td>Win64 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x64-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win64 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x64-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win64 dynamic at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x64-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win64 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x86-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-x86-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x86-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q8-x86-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x86-dll.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-Q16-HDRI-x86-static.exe";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Win32 static at 16 bits-per-pixel component with <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-x86.zip";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Portable Win32 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
  <?php $filename = "ImageMagick-" . MagickLibVersionText . MagickLibSubversion . "-portable-Q16-x64.zip";
  ?>
      <td><?php echo $filename; ?></td>
        <td><a href= "https://www.imagemagick.org/download/binaries/<?php echo $filename; ?>">download</a></td>
      <td><a href="ftp://ftp.imagemagick.org/pub/ImageMagick/binaries/<?php echo $filename; ?>">download</a></td>
    <td>Portable Win64 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>
</table></div>

<p>Verify its <a href="https://www.imagemagick.org/download/binaries/digest.rdf">message digest</a>.</p>

<p>To verify ImageMagick is working properly, type the following in an Command Prompt window:</p>

<pre>
magick logo: logo.gif
magick identify logo.gif
magick display logo.gif
</pre>

<p>If you have any problems, you likely need <code>vcomp120.dll</code>.  To install it, download <a href="https://www.microsoft.com/en-us/download/details.aspx?id=40784">Visual C++ 2013 Redistributable Package</a>.</p>

<p>Note, use a double quote (<code>"</code>) rather than a single quote (<code>'</code>) for the ImageMagick command line under Windows:</p>

<pre>
magick "e:/myimages/image.png" "e:/myimages/image.jpg"
</pre>
<p>Use two double quotes for VBScript scripts:</p>
<pre>
Set objShell = wscript.createobject("wscript.shell")
objShell.Exec("magick ""e:/myimages/image.png"" ""e:/myimages/image.jpg""")
</pre>

<p>Congratulations, you have a working ImageMagick distribution under Windows and you are ready to use ImageMagick to <a href="https://www.imagemagick.org/Usage/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/api.php">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

</div>

