<div class="magick-header">

<p class="lead magick-description">ImageMagick's JPEG-2000 image formats, JP2 and JPC, accept a plethora of encoding options as detailed below.  As an example, suppose you are interested in these options:</p>

<ul>
<li>code blocks are 64 samples in width and 32 samples in height</li>
<li>no multicomponent transform</li>
<li>4 resolution levels for each component</li>
<li>compression is lossy at 64:1</li>
</ul>

<p>Use this command to convert a JPEG-2000 image to the PNG image format:</p>

<pre class="highlight"><code>magick convert wizard.jp2 wizard.png
</code></pre>

<p>Let's convert a JPEG image to a lossless JPEG-2000 image:</p>

<pre class="highlight"><code>magick convert wizard.jpg -quality 0 wizard.jp2
</code></pre>

<p>Here we extract an area from the image:</p>

<pre class="highlight"><code>magick convert 'wizard.jp2[640x480+0+0]' wizard.png
</code></pre>

<p>Extract a particular tile from the image:</p>

<pre class="highlight"><code>magick convert 'wizard.jp2[2]' wizard.png
</code></pre>

<p>Specify a subsampling factor:</p>

<pre class="highlight"><code>magick convert wizard.png -colorspace YUV -sampling-factor 2,2 wizard.jp2
</code></pre>

<p>Save a tiled JPEG-2000 image:</p>

<pre class="highlight"><code>magick convert wizard.png 'wizard.png[512x512]'
</code></pre>

<p>Write a digital Cinema 4K profile compliant codestream:</p>

<pre class="highlight"><code>magick convert wizard.png -resize 4096x2160! -depth 12 wizard.jp2
</code></pre>

<p>Here is a complete list of JPEG-2000 decoding options:</p>

<div class="table-responsive">
<table class="table table-sm table-striped">
  <tr>
    <td>jp2:quality-layers=<var>x</var></td>
    <td>set the maximum number of quality layers to decode.</td>
  </tr>
  <tr>
    <td>jp2:reduce-factor=<var>x</var></td>
    <td>set the number of highest resolution levels to be discarded.</td>
  </tr>
</table></div>

<p>Here is a complete list of JPEG-2000 encoding options:</p>

<div class="table-responsive">
<table class="table table-sm table-striped">
  <tr>
    <td>jp2:number-resolutions=<var>x</var></td>
    <td>number of resolutions to encode.</td>
  </tr>
  <tr>
    <td>jp2:quality=<var>x</var>,<var>x</var>,...</td>
    <td>set the quality layer PSNR, given in dB. The order is from left to right in ascending order. The default is a single lossless quality layer.</td>
  </tr>
  <tr>
    <td>jp2:rate=<var>x</var>,<var>x</var>,...</td>
    <td>the compression ratio values. Each value is a factor of compression, thus 20 means 20 times compressed. The order is from left to right in descending order. A final lossless quality layer is signified by the value 1. The default is a single lossless quality layer.</td>
  </tr>
  <tr>
    <td>jp2:progression-order=<var>x</var></td>
    <td>choose from LRCP, RLCP, RPCL, PCRL or CPRL.</td>
  </tr>
</table></div>
</div>
