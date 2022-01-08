<div class="magick-header">
<h1 class="text-center">Threads of Execution</h1>
<p class="lead magick-description">Many of ImageMagick's internal algorithms are threaded to take advantage of speed-ups offered by the multicore processor chips and <a href="http://www.openmp.org">OpenMP</a>. OpenMP, is an API specification for parallel programming. If your compiler supports OpenMP (e.g. gcc, Visual Studio 2005) directives, ImageMagick automatically includes support. To verify, look for the OpenMP feature of ImageMagick with this command:</p>
<ul><pre class="bg-light text-dark"><samp>$ magick identify -version
Version: ImageMagick 7.0.10-50 2021-01-04 Q16 https://imagemagick.org
Copyright: © 1999-2021 ImageMagick Studio LLC
Features: OpenMP(4.5)</samp></pre></ul>
<p>With OpenMP enabled, most ImageMagick algorithms execute on all the cores on your system in parallel.  ImageMagick typically divides the work so that each thread processes 64 rows of pixels. As rows are completed, OpenMP assigns more chunks of pixel rows to each thread until the algorithm completes. For example, if you have a quad-core system, and attempt to resize an image, the resizing takes place on 4 cores (8 if hyperthreading is enabled).</p>
<p>You can further increase performance by reducing lock contention with the <a href="http://goog-perftools.sourceforge.net/doc/tcmalloc.html">tcmalloc</a> memory allocation library.  To enable, add <samp>--with-tcmalloc</samp> to the <samp>configure</samp> command-line when you build ImageMagick.</p>
<h4>The Perils of Parallel Execution</h4>
<p>It can be difficult to predict behavior in a parallel environment. Performance might depend on a number of factors including the compiler, the version of the OpenMP library, the processor type, the number of cores, the amount of memory, whether hyperthreading is enabled, the mix of applications that are executing concurrently with ImageMagick, or the particular image-processing algorithm you utilize. The only way to be certain of the optimal performance, in terms of the number of threads, is to benchmark. ImageMagick includes progressive threading when benchmarking a command and returns the elapsed time and efficiency for one or more threads. This can help you identify how many threads are the most efficient in your environment. Here is an example benchmark for threads 1-8:</p>

<ul><pre class="bg-light text-dark"><samp>$ magick -bench 40 model.png -sharpen 0x1 null:
Performance[1]: 40i 0.712ips 1.000e 14.000u 0:14.040
Performance[2]: 40i 1.362ips 0.657e 14.550u 0:07.340
Performance[3]: 40i 2.033ips 0.741e 14.530u 0:04.920
Performance[4]: 40i 2.667ips 0.789e 14.590u 0:03.750
Performance[5]: 40i 3.236ips 0.820e 14.970u 0:03.090
Performance[6]: 40i 3.802ips 0.842e 15.280u 0:02.630
Performance[7]: 40i 4.274ips 0.857e 15.540u 0:02.340
Performance[8]: 40i 4.831ips 0.872e 15.680u 0:02.070</samp></pre></ul>
<p>Better performance correlates with higher values of IPS (iterations-per-second).  In our example, 8 cores are optimal.  However, in certain cases it might be optimal to set the number of threads to 1 (e.g. <samp>-limit thread 1</samp>) or to disable OpenMP completely.  To disable this feature, add <samp>--disable-openmp</samp> to your configure script command line then rebuild and re-install ImageMagick.</p>
</div>
