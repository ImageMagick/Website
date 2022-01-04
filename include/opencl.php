<div class="magick-header">

<p class="lead magick-description">ImageMagick has built-in support for some <a href="http://en.wikipedia.org/wiki/OpenCL">OpenCL</a> accelerated operations. However, there are some conditions for its operation. These requirements are listed below.</p>

<ol>
    <li><strong>GPU platform:</strong> AMD or Intel GPUs are supported. NVIDIA support is not enabled at the moment.</li>
    <li><strong>OS and drivers:</strong>
        <ul>
            <li><strong>Mac OS X:</strong> has built-in support for OpenCL. No other actions required.</li>
            <li><strong>Linux/Windows:</strong> on supported platforms, install required drivers to enable OpenCL.</li>
            <li><strong>Mobile:</strong> ImageMagick's OpenCL support is not available on mobile OSes (IOS/Android).</li>
        </ul>
    </li>
    <li><strong>Compile-time flag:</strong> ImageMagick's OpenCL must be explicitly enabled when compiling. This is done by running <samp>configure</samp> with <samp>--enable-opencl</samp> flag set.</li>
    <li><strong>Check runtime support:</strong> to verify if OpenCL support is enabled, run <samp>magick --version</samp>. The command output should read <samp>Features: ... <strong>OpenCL</strong> ...</samp></li>
    <li><strong>Runtime flag:</strong> OpenCL is disabled by default in runtime. To enable it use the environment variable <samp>MAGICK_OCL_DEVICE=true</samp>, e.g. <samp>MAGICK_OCL_DEVICE=true magick &lt;options&gt;</samp>.</li>
    <li><strong>Command line utility:</strong> for proper OpenCL support it's recommended to use <samp>magick</samp> utility over <samp>convert</samp>, <samp>mogrify</samp> and others.</li>
    <li><strong>Image type:</strong> OpenCL acceleration only works on images without a color map. Use true color images instead.</li>
    <li><strong>Operators:</strong> the following is a list of image operators that have been OpenCL accelerated.
<ul><pre class="bg-light text-dark">  blur
  contrast
  charcoal
  function
  grayscale
  motion-blur
  resize</pre></ul>
        The following operators are OpenCL accelerated as well, but they require alpha channel to be enabled, e.g. <samp>MAGICK_OCL_DEVICE=true magick sample.jpg -alpha on -despeckle null:</samp>.
<ul><pre class="bg-light text-dark">  despeckle
  equalize
  modulate</pre></ul>
    </li>
</ol>

<h4>OpenCL Operation Notes</h4>

<p>When some of the OpenCL accelerated operators are invoked for the first time and all the conditions above are met, ImageMagick conducts a series of tests to configure the OpenCL environment according to the system hardware; therefore, it is normal to experience a higher latency the first time you use an accelerated option.  The OpenCL kernels are embedded inside ImageMagick in source format.  During the initial setup, ImageMagick discovers all the available OpenCL devices and compiles the kernels for each of these targets.  ImageMagick also runs several performance tests internally to determine the preferred device to use.  The compiled kernel code and the performance test results are stored into the cache directory so that the data can be reused by subsequent invocations of the OpenCL path.  By default, the OpenCL cached data is stored in <samp>$HOME/.cache/ImageMagick</samp> on Linux and on MacOSX or in <samp>%LOCALAPPDATA%\ImageMagick</samp> on Windows. To run these tests for the first time, use the comand below:</p>
<ul><pre class="bg-light text-dark"><samp>  magick sample.jpg -blur null:</samp></pre></ul>
<p>To change the cache directory, set the MAGICK_OPENCL_CACHE_DIR environment variable.  ImageMagick is able to detect hardware changes, driver updates, and new kernel sources and re-run the setup and the calibration test.  You can also force ImageMagick to re-run the process by removing the content from the cache directory.</p>
<p>In addition to the environment variables mentioned above, ImageMagick provides a set of APIs that allow developers to gain more fine-grained control of the OpenCL acceleration. For example, use the <samp>InitializeOpenCL()</samp> function to initialize the OpenCL environment:</p>

<ul><pre class="bg-light text-dark"><samp>clEnv=GetCurrentOpenCLEnv();
if (InitializeOpenCL(clEnv,exception) == MagickFalse)
  {
    /* looks like OpenCL is not supported  */
  }</samp></pre></ul>
</div>
