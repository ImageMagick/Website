<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p class="lead">ImageMagick's WebP image format accepts a plethora of encoding options as detailed below. The default encoding options are:<p>

<ul class="small">
  <li class="list-group-item"><samp>quality = 75</samp></li>
  <li class="list-group-item"><samp>alpha-filtering = 1</samp></li>
  <li class="list-group-item"><samp>alpha-quality = 100</samp></li>
  <li class="list-group-item"><samp>autofilter = 0</samp></li>
  <li class="list-group-item"><samp>filter-sharpness = 0</samp></li>
  <li class="list-group-item"><samp>filter-strength = 60</samp></li>
  <li class="list-group-item"><samp>lossless = 0</samp></li>
  <li class="list-group-item"><samp>method = 4</samp></li>
  <li class="list-group-item"><samp>pass = 1</samp></li>
  <li class="list-group-item"><samp>preprocessing = 0</samp></li>
  <li class="list-group-item"><samp>segments = 4</samp></li>
  <li class="list-group-item"><samp>sns-strength = 50</samp></li>
  <li class="list-group-item"><samp>target-psnr = 0</samp></li>
  <li class="list-group-item"><samp>target-size = 0</samp></li>
</ul>
<p>For digital pictures, like portrait, inner shot, consider these defines:</p>
<div class="mb-1">
  <pre class="p-3"><samp>-define webp:sns-strength=80
-define webp:filter-sharpness=4
-define webp:filter-strength=35
-define webp:preprocessing=0</samp></pre>
</div>

<p>For outdoor photographs, with natural lighting, consider these defines:</p>
<div class="mb-1">
  <pre class="p-3"><samp>-define webp:sns-strength=80
-define webp:filter-sharpness=3
-define webp:filter-strength=30
-define webp:preprocessing=2</samp></pre>
</div>

<p>For hand or line drawing, with high-contrast details, consider these defines:</p>
<div class="mb-1">
  <pre class="p-3"><samp>-define webp:sns-strength=25
-define webp:filter-sharpness=6
-define webp:filter-strength=10</samp></pre>
</div>

<p>For small-sized colorful images, consider these defines:</p>
<div class="mb-1">
  <pre class="p-3"><samp>-define webp:sns-strength=0
-define webp:filter-strength=0
-define webp:preprocessing=0</samp></pre>
</div>

<p>For text images, consider these defines:</p>
<div class="mb-1">
  <pre class="p-3"><samp>-define webp:sns-strength=0
-define webp:filter-strength=0
-define webp:preprocessing=0
-define webp:segments=2</samp></pre>
</div>

<p>ImageMagick sets <samp>pass=6</samp> if <samp>target-psnr</samp> or <samp>target-size</samp> are specified. However, it does not set <samp>target-psnr=40</samp> if <samp>pass</samp> is specified without <samp>target-psnr</samp> or <samp>target-size</samp>.
    </p>

<p> If <samp>quality</samp> is specified, ImageMagick sets <samp>near_lossless</samp> to the same value.  <samp>near_lossless</samp> cannot be set directly.  If <samp>quality</samp> is set to <samp>100</samp> or greater, ImageMagick sets <samp>lossless=1</samp>> You can override this with: <samp>-quality 100 -define webp:lossless=false</samp>
    </p>

<p>Here is a complete list of WebP encoding options:</p>

<div>
<table class="table table-sm table-hover table-striped table-responsive">
  <thead>
  <tr>
    <th scope="col">Option</th>
    <th scope="col">Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>alpha-compression=<var>value</var></td>
    <td>ensamp the alpha plane: 0 = none, 1 = compressed.</td>
  </tr>
  <tr>
    <td>alpha-filtering=<var>value</var></td>
    <td>predictive filtering method for alpha plane: 0=none, 1=fast, 2=best.</td>
  </tr>
  <tr>
    <td>alpha-quality=<var>value</var></td>
    <td>the compression value for alpha compression between 0 and 100. Lossless compression of alpha is achieved using a value of 100, while the lower values result in a lossy compression. The default is 100.</td>
  </tr>
  <tr>
    <td>exact=<var>true, false</var></td>
    <td>preserve RGB values in transparent area. It's disabled by default to help compressibility.</td>
  </tr>
  <tr>
    <td>auto-filter=<var>true, false</var></td>
    <td>when enabled, the algorithm spends additional time optimizing the filtering strength to reach a well-balanced quality.</td>
  </tr>
  <tr>
    <td>emulate-jpeg-size=<var>true, false</var></td>
    <td>return a similar compression to that of JPEG but with less degradation.</td>
  </tr>
  <tr>
    <td>filter-sharpness=<var>value</var></td>
    <td>filter sharpness.</td>
  </tr>
  <tr>
    <td>filter-strength=<var>value</var></td>
    <td>the strength of the deblocking filter, between 0 (no filtering) and 100 (maximum filtering). A value of 0 turns off any filtering. Higher values increase the strength of the filtering process applied after decoding the image. The higher the value, the smoother the image appears. Typical values are usually in the range of 20 to 50.</td>
  </tr>
  <tr>
    <td>filter-type=<var>value</var></td>
    <td>filter type: 0 = simple, 1 = strong</td>
  </tr>
  <tr>
    <td>image-hint=<var>default, photo, picture, graph</var></td>
    <td>the hint about the image type.</td>
  </tr>
  <tr>
    <td>lossless=<var>true, false</var></td>
    <td>ensamp the image without any loss.</td>
  </tr>
  <tr>
    <td>low-memory=<var>true, false</var></td>
    <td>reduce memory usage.</td>
  </tr>
  <tr>
    <td>method=<var>value</var></td>
    <td>the compression method to use. It controls the trade off between encoding speed and the compressed file size and quality. Possible values range from 0 to 6. Default value is 4. When higher values are utilized, the ensampr spends more time inspecting additional encoding possibilities and decide on the quality gain. Lower value might result in faster processing time at the expense of larger file size and lower compression quality.</td>
  </tr>
  <tr>
    <td>preprocessing=<var>value</var></td>
    <td>Choose from: 0=none, 1=segment-smooth, 2=pseudo-random dithering.</td>
  </tr>
  <tr>
    <td>partitions=<var>value</var></td>
    <td>progressive decoding: choose 0 to 3.</td>
  </tr>
  <tr>
    <td>partition-limit=<var>value</var></td>
    <td>Choose 0 for no quality degradation and 100 for maximum degradation.</td>
  </tr>
  <tr>
    <td>pass=<var>value</var></td>
    <td>maximum number of passes to target compression size or PSNR.</td>
  </tr>
  <tr>
    <td>segments=<var>value</var></td>
    <td>Choose from 1 to 4, the maximum number of segments to use.</td>
  </tr>
  <tr>
    <td>show-compressed=<var>true, false</var></td>
  </tr>
  <tr>
    <td>sns-strength=<var>value</var></td>
    <td>the amplitude of the spatial noise shaping. Spatial noise shaping (SNS) refers to a general collection of built-in algorithms used to decide which area of the picture should use relatively less bits, and where else to better transfer these bits. The possible range goes from 0 (algorithm is off) to 100 (the maximal effect). The default value is 80. </td>
  </tr>
  <tr>
    <td>target-size=<var>value</var></td>
    <td>a target size (in bytes) to try and reach for the compressed output.  The compressor makes several passes of partial encoding in order to get as close as possible to this target.</td>
  </tr>
  <tr>
    <td>target-psnr=<var>value</var></td>
    <td>desired minimal distortion.</td>
  </tr>
  <tr>
    <td>thread-level=<var>value</var></td>
    <td>enable multi-threaded encoding: 0 = disabled, 1 = enabled.</td>
  </tr>
  <tr>
    <td>use-sharp-yuv=<var>value</var></td>
    <td>if needed, use sharp (and slow) RGB->YUV conversion.</td>
  </tr>
</table></div>
</div>
