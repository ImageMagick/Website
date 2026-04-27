<div>
<p class="text-center"><a href="#linux">Linux Binary Release</a> • <a href="#macos">macOS Binary Release</a> • <a href="#windows">Windows Binary Release</a></p>

<p class="lead">You can install ImageMagick from <a href="/install-source/">source</a>.  However, if you don't have a proper development environment or if you're anxious to get started, download a ready-to-run <a href="#linux">Linux</a> or <a href="#windows">Windows</a> executable.  Before you download, you may want to review recent <a href="https://github.com/ImageMagick/Website/blob/main/ChangeLog.md">changes</a> to the ImageMagick distribution.</p>

<p>ImageMagick source and binary distributions are available from a variety of FTP and Web <a href="/mirror/">mirrors</a> around the world.</p>

<p>It is strongly recommended to establish a <a href="/security-policy/">security policy</a> suitable for your local environment before utilizing ImageMagick.</p>

<h2><a class="anchor" id="linux"></a>Linux Binary Release</h2>

<p>These are the Linux variations that we support.  If your system is not on the list, try installing from <a href="/install-source/">source</a>. Although ImageMagick runs fine on a single core computer, it automagically runs in parallel on multi-core systems reducing run times considerably.</p>

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
    <td>
      <?php $filename = "ImageMagick-" . MagickVersion . "-gcc-x86_64.AppImage"; ?>
      <a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a><br/>
      <?php $filename = "ImageMagick-" . MagickVersion . "-clang-x86_64.AppImage"; ?>
      <a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a>
    </td>
    <td>Complete portable application on Linux, no installation required.  Just download and run.  This <a href="https://appimage.org/">AppImage</a> has an open security policy.  ImageMagick recommended practices <b>strongly</b> encourage you to configure a <a href="/security-policy/">security policy</a> that suits your local environment. Simply add a custom security policy in your local path, .e.g., <samp>~/.config/ImageMagick/policy.xml</samp> and verify with this command: <samp>./magick -list policy</samp>.</td>
  </tr>

  </tbody>
</table></div>

<p>Verify its <a href="<?php echo MagickProvenanceUrl ?>">provenance</a>.</p>

<h2><a class="anchor" id="macos"></a>macOS Binary Release</h2>

<p>We recommend <a href="https://brew.sh">Homebrew</a> which provides pre-built binaries for Mac (some users prefer <a href="https://macports.org">MacPorts</a>).  Download HomeBrew and type:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>brew install imagemagick</samp></pre>

<p>ImageMagick depends on Ghostscript fonts.  To install them, type:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>brew install ghostscript</samp></pre>

<p>The <samp>brew</samp> command downloads and installs ImageMagick with many of its delegate libraries (e.g. JPEG, PNG, Freetype, etc).  Homebrew <a href="https://github.com/Homebrew/homebrew-core/issues/31510">no longer allows</a> configurable builds; if you need different compile options (e.g. librsvg support), you will need to build from source</p>

<h2><a class="anchor" id="windows"></a>Windows Binary Release</h2>

<p>ImageMagick runs on Windows 10 (x86 , x64 &amp; arm64) or newer or Windows Server 2012 or newer.</p>

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
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-x64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
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
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-x64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-x64-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-x64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win64 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-x64-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-x64-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win64 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-arm64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-arm64-static.exe";  ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-arm64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-arm64-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-arm64-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 dynamic at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-arm64-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>ARM64 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-x86-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-x86-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 16 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-x86-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q8-x86-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 8 bits-per-pixel component</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-x86-dll.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 dynamic at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-Q16-HDRI-x86-static.exe"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Win32 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-x64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-arm64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-x86.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 16 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q8-x64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q8-arm64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q8-x86.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 8 bits-per-pixel component.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-HDRI-x64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win64 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-HDRI-arm64.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable ARM64 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tr>
    <?php $filename = "ImageMagick-" . MagickVersion . "-portable-Q16-HDRI-x86.7z"; ?>
    <td><a href= "<?php echo MagickReleaseUrl . $filename ?>"><?php echo $filename; ?></a></td>
    <td>Portable Win32 static at 16 bits-per-pixel component with <a href="/high-dynamic-range/">high dynamic-range imaging</a> enabled.  Just copy to your host and run (no installer, no Windows registry entries).</td>
  </tr>

  <tbody>
</table></div>

<p>Verify its <a href="<?php echo MagickProvenanceUrl ?>">provenance</a>.</p>

<p>Alternatively, you can install ImageMagick with <a href="https://learn.microsoft.com/en-us/windows/package-manager/winget/">winget</a>. ImageMagick uses Advanced Installer to <a href="https://www.advancedinstaller.com/imagemagick-latest-release-automatically-published-to-winget.html">publish the latest release to the winget repository</a>.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>winget install ImageMagick.Q16-HDRI</samp></pre>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>winget install ImageMagick.Q16</samp></pre>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>winget install ImageMagick.Q8</samp></pre>

<p>Or through one of the unofficial releases from <a href="https://learn.microsoft.com/en-us/windows/package-manager/winget/">winget</a>, <a href="https://scoop.sh/">scoop</a>, or <a href="https://community.chocolatey.org/">chocolatey</a>.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>winget install ImageMagick.ImageMagick</samp></pre>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>scoop install main/imagemagick</samp></pre>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>choco install imagemagick</samp></pre>

<p>To verify ImageMagick is working properly, type the following in a Command Prompt window:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick logo: logo.gif
magick identify logo.gif</samp></pre>

<p>If you have any problems, you likely need <samp>vcomp140.dll</samp>.  To install it, download <a href="https://support.microsoft.com/en-us/help/2977003/the-latest-supported-visual-c-downloads">Visual C++ Redistributable Package</a>.</p>

<p>Note, use a double quote (<samp>"</samp>) rather than a single quote (<samp>'</samp>) for the ImageMagick command line under Windows:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick "e:/myimages/image.png" "e:/myimages/image.jpg"</samp></pre>
<p>Use two double quotes for VBScript scripts:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>Set objShell = wscript.createobject("wscript.shell")
objShell.Exec("magick ""e:/myimages/image.png"" ""e:/myimages/image.jpg""")</samp></pre>

<p>It is strongly recommended to establish a <a href="/security-policy/">security policy</a> suitable for your local environment before utilizing ImageMagick.</p>

<p>Congratulations, you have a working ImageMagick distribution under Windows and you are ready to use ImageMagick to <a href="https://usage.imagemagick.org/">convert, compose, or edit</a> your images or perhaps you'll want to use one of the <a href="/develop/">Application Program Interfaces</a> for C, C++, Perl, and others.</p>

</div>
