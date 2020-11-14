<div class="magick-header">
<h1 class="text-center">ImageMagick News</h1>
<p class="text-center"><a href="#news">News</a> • <a href="#community">Community</a></p>

<p>ImageMagick best practices <strong>strongly</strong> encourages you to configure a <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policy</a> that suits your local environment.</p>


<p class="highlight">We are utilizing a new community <a target="_blank" href="https://github.com/ImageMagick/ImageMagick/discussions">discussion</a> service.  The previous <a target="_blank" href="https://legacy.imagemagick.org/discourse-server">discourse server</a> remains available to read legacy <a target="_blank" href="https://legacy.imagemagick.org/discourse-server~">discussions</a>.</p>

<p>We discovered a bug in the pseudo-random generator prior to ImageMagick 7.0.9-11, the first 3 values repeated because the random state was not initialized properly.  As a consequence of the fix, expect a different numerical sequence when seeding (-seed).</p>

<p>As an analog to linear (RGB) and non-linear (sRGB) color colorspaces, as of ImageMagick 7.0.7-17, we introduce the LinearGray colorspace.  Gray is non-linear grayscale and LinearGray is linear (e.g. -colorspace linear-gray).</p>

<p>Now that ImageMagick version 7 is released, we continue to maintain the legacy release of ImageMagick, version 6, at <a href="https://legacy.imagemagick.org/">https://legacy.imagemagick.org</a>.  Learn how ImageMagick version 7 differs from previous versions with our <a href="<?php echo $_SESSION['RelativePath']?>/../script/porting.php">porting guide</a>.</p>

<p>The ImageMagick development process ensures a stable API and <a href="https://abi-laboratory.pro/tracker/timeline/imagemagick/">ABI</a>. Before each ImageMagick release, we perform a comprehensive security assessment that includes <a href="https://github.com/google/sanitizers/wiki/AddressSanitizer">memory error</a>, <a href="https://github.com/google/sanitizers/wiki/ThreadSanitizer">thread data race</a> detection, and continuous <a href="https://github.com/google/oss-fuzz">fuzzing</a> to detect and prevent security vulnerabilities.</p>

<p>Want more performance from ImageMagick?  Try these options:</p>

<ul>
<li>add more memory to your system, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#cache">the pixel cache</a>;</li>
<li>add more cores to your system, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#threads">threads of execution support</a>;</li>
<li>reduce lock contention with the <a href="http://goog-perftools.sourceforge.net/doc/tcmalloc.html">tcmalloc</a> memory allocation library;</li>
<li>push large images to a solid-state drive, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#tera-pixel">large image support</a>.</li>
</ul>
<p>If these options are prohibitive, you can reduce the quality of the image results.  The default build is Q16 HDRI.  If you disable <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">HDRI</a>, you use half the memory and instead of predominately floating point operations, you use the typically more efficient integer operations.  The tradeoff is reduced precision and you cannot process out of range pixel values (e.g. negative).  If you build the Q8 non-HDRI  version of ImageMagick, you again reduce the memory requirements in half-- and once again there is a tradeoff, even less precision and no out of range pixel values.  For a Q8 non-HDRI build of ImageMagick, use these <code>configure</code> script options: <code>--with-quantum-depth=8 --disable-hdri</code>.</p>

<h2><a class="anchor" id="community"></a>Community</h2>
<p>To join the ImageMagick community, try the <a target="_blank" href="https://github.com/ImageMagick/ImageMagick/discussions">discussion</a> service.  You can review questions or comments (with informed responses) posed by ImageMagick users or ask your own questions. If you want to contribute image processing algorithms, other enhancements, or bug fixes, open an <a href="https://github.com/ImageMagick/ImageMagick/issues">issue</a>. </p>
</div>
