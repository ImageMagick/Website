<div class="magick-header">
<h1 class="text-center">ImageMagick News</h1>

<p class="text-info">ImageMagick recommended practices <strong>strongly</strong> encourage you to configure a <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policy</a> that suits your local environment.</p>

<h4>Recent News</h4>

<p>In order to enhance the support for multi-spectral images, we had to modify the enumeration values for PixelChannel, specifically for CompositeMaskPixelChannel and MetaPixelChannel. To properly support multiple meta channels such as meta, meta1, meta2, etc., MetaPixelChannel needed to be declared as the last channel enumeration. Although only a few apps currently support multispectral images, we anticipate minimal impact with this change. To accommodate the modification, we have incremented the release and library revision from 0 to 1.</p>

<p>We recently updated Anthony's <a href="/../Usage">ImageMagick Example Usage</a> pages to support version 7 tools and options.</p>

<p>Recent releases of ImageMagick 7 continue to evolve our support of <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#multispectral">Multispectral imagery</a>.  PSD, TIFF, MIFF, MPC, and FTXT can now read and write multispectral images with more multispectral formats to follow.</p>

<p>We now provide <a href="https://imagemagick.org/script/download.php#windows">portable ARM Win64</a> static releases. Just copy to your host and run (no installer, no Windows registry entries).  Thanks to <a href="https://github.com/dlemstra">@dlemstra</a> for the ARM release.</p>

<p><a href="https://github.com/snibgo">@Snibgo</a> contributed a <a href="https://imagemagick.org/script/fx.php">Fx</a> special-effects image operator interpretter.  It has vastly improved error checking and performance.</p>

<p><a href="https://github.com/fmw42">@fmw42</a> contributed <a href="https://github.com/ImageMagick/ImageMagick/discussions/4712">seamless and saliency blending</a> composite operators.</p>

<h4>Related Software</h4>
<p>The <a href="https://github.com/ImageMagick/MagickCache/">MagickCache</a> provides methods and tools to cache images, image sequences, video, audio or metadata in a local folder. Any content is memory-mapped for efficient retrieval. Additional efficiencies are possible by retrieving a portion of an image. Content can persist or you can assign a time-to-live (TTL) to automatically expire content when the TTL is exceeded. MagickCache supports virtually unlimited content upwards of billions of images making it suitable as a web image service.


<h4>ImageMagick Development</h4>
<p>The ImageMagick development process ensures a stable API and <a href="https://abi-laboratory.pro/tracker/timeline/imagemagick/">ABI</a>. Before each ImageMagick release, we perform a comprehensive security assessment that includes <a href="https://github.com/google/sanitizers/wiki/AddressSanitizer">memory error</a>, <a href="https://github.com/google/sanitizers/wiki/ThreadSanitizer">thread data race</a> detection, and continuous <a href="https://github.com/google/oss-fuzz">fuzzing</a> to detect and prevent security vulnerabilities.</p>

<p>Want more performance from ImageMagick?  Try these options:</p>

<ul>
<li>add more memory to your system, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#cache">the pixel cache</a>;</li>
<li>add more cores to your system, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#threads">threads of execution support</a>;</li>
<li>reduce lock contention with the <a href="http://goog-perftools.sourceforge.net/doc/tcmalloc.html">tcmalloc</a> memory allocation library;</li>
<li>push large images to a solid-state drive, see <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php#tera-pixel">large image support</a>.</li>
</ul>
<p>If these options are prohibitive, you can reduce the quality of the image results.  The default build is Q16 HDRI.  If you disable <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">HDRI</a>, you use half the memory and instead of predominantly floating point operations, you use the typically more efficient integer operations.  The trade-off is reduced precision and you cannot process out of range pixel values (e.g. negative).  If you build the Q8 non-HDRI  version of ImageMagick, you again reduce the memory requirements in half-- and once again there is a trade-off, even less precision and no out of range pixel values.  For a Q8 non-HDRI build of ImageMagick, use these <samp>configure</samp> script options: <samp>--with-quantum-depth=8 --disable-hdri</samp>.</p>
<h4>Older News</h4>
<p>We discovered a bug in the pseudo-random generator prior to ImageMagick 7.0.9-11, the first 3 values repeated because the random state was not initialized properly.  As a consequence of the fix, expect a different numerical sequence when seeding (-seed).</p>

<p>As an analog to linear (RGB) and non-linear (sRGB) color colorspaces, as of ImageMagick 7.0.7-17, we introduce the LinearGray colorspace.  Gray is non-linear grayscale and LinearGray is linear (e.g. -colorspace linear-gray).</p>

<p>Now that ImageMagick version 7 is released, we continue to maintain the legacy release of ImageMagick, version 6, at <a href="https://legacy.imagemagick.org/">https://legacy.imagemagick.org</a>.  Learn how ImageMagick version 7 differs from previous versions with our <a href="<?php echo $_SESSION['RelativePath']?>/../script/porting.php">porting guide</a>.</p>
</div>
