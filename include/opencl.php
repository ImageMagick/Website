<div class="magick-header">

<p class="lead magick-description">The following is a list of image operators that have been <a href="http://en.wikipedia.org/wiki/OpenCL">OpenCL</a>-accelerated:</p>
<pre class="bg-light"><code>blur
charcoal
contrast
constrast-stretch
convolve
despeckle
edge
equalize
emboss
function
gaussian-blur
grayscale
modulate
motion-blur
negate
noise
radial-blur
resize
sketch
unsharp</code></pre>
<p>When the OpenCL acceleration is invoked for the first time, ImageMagick conducts a series of tests to configure the OpenCL environment according to the system hardware; therefore, it is normal to experience a higher latency the first time you use an accelerated option.  The OpenCL kernels are embedded inside ImageMagick in source format.  During the initial setup, ImageMagick discovers all the available OpenCL devices and compiles the kernels for each of these targets.  ImageMagick also runs several performance tests internally to determine the preferred device to use.  The compiled kernel code and the performance test results are stored into the cache directory so that the data can be reused by subsequent invocations of the OpenCL path.  By default, the OpenCL cached data is stored in <code>$HOME/.cache/ImageMagick</code> on Linux and on MacOSX or in <code>%LOCALAPPDATA%\ImageMagick</code> on Windows.  To change the cache directory, set the MAGICK_OPENCL_CACHE_DIR environment variable.  ImageMagick is able to detect hardware changes, driver updates, and new kernel sources and re-run the setup and the calibration test.  You can also force ImageMagick to re-run the process by removing the content from the cache directory.</p>
<p>If ImageMagick includes OpenCL support, the OpenCL path is enable by default.  You can disable it, simply set the environment variable MAGICK_OCL_DEVICE to <code>OFF</code>.  You could also force the OpenCL path to use a particular class of devices by setting it to <code>GPU</code> or <code>CPU</code>.</p>
<p>In addition to the environment variables just mentioned, ImageMagick provides a set of APIs that allow developers to gain a finer grain control of the OpenCL acceleration.  For example, use the InitializeOpenCL) function to initialize the OpenCL environment:</p>
<pre class="bg-light"><code>clEnv=GetCurrentOpenCLEnv();
if (InitializeOpenCL(clEnv,exception) == MagickFalse)
  {
    /* looks like OpenCL is not supported  */
  }</code></pre>
</div>
