<div class="magick-header">

<p class="lead magick-description">High dynamic-range imaging (HDRI) permits a far greater dynamic range of exposures (i.e. a large difference between light and dark areas) than standard digital imaging techniques. HDRI accurately represents the wide range of intensity levels found in real scenes ranging from the brightest direct sunlight to the deepest darkest shadows.  The HDR imaging approach includes:</p>

<ul>
  <li>render/capture floating-point color space</li>
  <li>encompass the entire perceivable gamut (extend values outside [0,1] range)</li>
  <li>post-process in extended color space</li>
  <li>apply tone-mapping for specific display</li>
</ul>

<p>ImageMagick supports the Jzazbc colorspace, for applications that require wide color gamut and high dynamic range.</p>

<h2><a class="anchor" id="enable"></a>Enabling HDRI in ImageMagick</h2>

<p>By default, image pixels in ImageMagick version 7 are stored in a floating-point representation that range from 0 to the quantum depth, which is typically 16-bits (Q16).  With HDRI enabled, the pixels can include negative values as well as values that exceed the quantum depth. A majority of digital image formats do not support HDRI, and for those images any pixels outside the quantum range are clamped before they are stored.</p>

<p>The most promising HDR image format is EXR.  You must have the <a href="http://www.openexr.org">OpenEXR</a> delegate library installed to read or write this format.  Other HDR formats include TIFF 48-bit integer and 96-bit float formats, HDR, PFM, and ImageMagick's own MIFF format.</p>

<p>To disable the HDRI version of ImageMagick, use this Unix/Linux command:</p>

<pre class="highlight"><code>./configure --disable-hdri
</code></pre>

<p>Under Windows, follow the instructions (straightforward for a non-programmer) in a one hour process to build and configure your own executables: <a href="https://imagemagick.org/script/install-source.php">Install from Windows Source</a>.</p>

<p>To verify HDRI is properly configured, look for "HDRI" as a feature:</p>

<pre class="highlight"><code>identify -version
Features: HDRI
</code></pre>
</div>
