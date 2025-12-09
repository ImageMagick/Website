<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<p  class="lead">The <a href="https://imagemagick.org/api/MagickCore/index.html">MagickCore API</a> is a low-level interface between the C programming language and the ImageMagick image processing libraries and is recommended for wizard-level programmers only.  Unlike the <a href="https://imagemagick.org/api/MagickWand/index.html">MagickWand</a> C API which uses only a few opaque types and accessors, with MagickCore you almost exclusively access the structure members directly.  A description of the MagickCore public methods are found here:</p>

<ul>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/magick.php">Initialize or Destroy the ImageMagick Environment</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/constitute.php">Constitute an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/composite.php">Composite an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/image.php">Image Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/channel.php">Image Channel Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/color.php">Count the Colors in an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/colormap.php">Colormap Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/colorspace.php">Colorspace Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/distort.php">Image Distortions</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/layer.php">Dealing with Image Layers</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/profile.php">Dealing with Image Profiles</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/quantize.php">Reduce the Number of Unique Colors in an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/histogram.php">Image Histograms</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/segment.php">Segment an Image with Thresholding Fuzzy c-Means</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/resize.php">Resize an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/transform.php">Transform an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/shear.php">Shear or Rotate an Image by an Arbitrary Angle</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/enhance.php">Enhance an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/effect.php">Add an Effect</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/morphology.php">Morphological Erosions, Dilations, Openings, and Closings</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/fx.php">Add a Special Effect</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/decorate.php">Decorate an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/attribute.php">Get/Set an Image Attribute</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/property.php">Get/Set Image Properties</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/statistic.php">Get Image Statistics</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/feature.php">Get Image Features</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/annotate.php">Annotate an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/paint.php">Paint on an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/draw.php">Draw on an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/montage.php">Create an Image Thumbnail</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/fourier.php">Compute the discrete Fourier transform (DFT)</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/compare.php">Compare an Image to a Reconstructed Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/vision.php">Computer Vision</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/display.php">Interactively Display and Edit an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/animate.php">Interactively Animate an Image Sequence</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/cipher.php">Convert to and from Cipher Pixels</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/list.php">Working with Image Lists</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/image-view.php">Image View Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/image-cache.php">Image Cache Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/cache.php">Get or Set Image Pixels</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/cache-view.php">Working with Cache Views</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/stream.php">The Pixel FIFO</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/blob.php">Read or Write Binary Large OBjects</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/module.php">Loadable Modules</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/signature.php">Compute a Message Digest for an Image</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/registry.php">The Image Registry</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/exception.php">Dealing with Exceptions</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/memory.php">Memory Allocation</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/resource.php">Monitor or Limit Resource Consumption</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/monitor.php">Monitor the Progress of an Image Operation</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/version.php">Get the Version and Copyrights</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/mime.php">Mime Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/deprecate.php">Deprecated Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/exception.php">Error and Warning Codes</a></li>
</ul>

<p>After you write your MagickCore program, compile it like this:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>cc `MagickCore-config --cflags --cppflags` -O2 -o core core.c `MagickCore-config --ldflags --libs`</samp></pre>

<p>Set the <samp>PKG_CONFIG_PATH</samp> environment variable if ImageMagick is not in your default system path:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig </samp></pre>

<p>Here is a example program that utilizes the MagickCore API to get you started, <a href="<?php echo $_SESSION['RelativePath']?>/../source/core.c">core.c</a>. It reads a GIF image, creates a thumbnail, and writes it to disk in the PNG image format.</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>#include &lt;stdio.h>
#include &lt;stdlib.h>
#include &lt;string.h>
#include &lt;time.h>
#include &lt;MagickCore/MagickCore.h>

int main(int argc,char **argv)
{
  ExceptionInfo
    *exception;

  Image
    *image,
    *images,
    *resize_image,
    *thumbnails;

  ImageInfo
    *image_info;

  if (argc != 3)
    {
      (void) fprintf(stdout,"Usage: %s image thumbnail\n",argv[0]);
      exit(0);
    }
  /*
    Initialize the image info structure and read an image.
  */
  MagickCoreGenesis(*argv,MagickTrue);
  exception=AcquireExceptionInfo();
  image_info=CloneImageInfo((ImageInfo *) NULL);
  (void) strcpy(image_info-&gt;filename,argv[1]);
  images=ReadImage(image_info,exception);
  if (exception-&gt;severity != UndefinedException)
    CatchException(exception);
  if (images == (Image *) NULL)
    exit(1);
  /*
    Convert the image to a thumbnail.
  */
  thumbnails=NewImageList();
  while ((image=RemoveFirstImageFromList(&amp;images)) != (Image *) NULL)
  {
    resize_image=ResizeImage(image,106,80,LanczosFilter,exception);
    if (resize_image == (Image *) NULL)
      MagickError(exception-&gt;severity,exception-&gt;reason,exception-&gt;description);
    (void) AppendImageToList(&amp;thumbnails,resize_image);
    DestroyImage(image);
  }
  /*
    Write the image thumbnail.
  */
  (void) strcpy(thumbnails-&gt;filename,argv[2]);
  WriteImage(image_info,thumbnails,exception);
  /*
    Destroy the image thumbnail and exit.
  */
  thumbnails=DestroyImageList(thumbnails);
  image_info=DestroyImageInfo(image_info);
  exception=DestroyExceptionInfo(exception);
  MagickCoreTerminus();
  return(0);
}</samp></pre>
<p><a class="anchor" id="image-view"></a>Now lets perform the same contrast enhancement while taking advantage of our dual or quad-core processing system by running the algorithm in parallel utilizing wand views.  The <a href="<?php echo $_SESSION['RelativePath']?>/../source/core/sigmoidal-contrast.c">sigmoidal-contrast.c</a> module reads an image, applies sigmoidal non-linearity contrast control, and writes the result to disk just like the previous contrast enhancement program, but now it does its work in parallel (assumes ImageMagick is built with OpenMP support).</p>

<pre class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>#include &lt;stdio.h>
#include &lt;stdlib.h>
#include &lt;math.h>
#include &lt;MagickCore/MagickCore.h>

static MagickBooleanType SigmoidalContrast(ImageView *contrast_view,
  const ssize_t y,const int id,void *context)
{
#define QuantumScale  ((MagickRealType) 1.0/(MagickRealType) QuantumRange)
#define SigmoidalContrast(x) \
  (QuantumRange*(1.0/(1+exp(10.0*(0.5-QuantumScale*x)))-0.0066928509)*1.0092503)

  RectangleInfo
    extent;

  register IndexPacket
    *indexes;

  register PixelPacket
    *pixels;

  register ssize_t
    x;

  extent=GetImageViewExtent(contrast_view);
  pixels=GetImageViewAuthenticPixels(contrast_view);
  for (x=0; x &lt; (ssize_t) (extent.width-extent.x); x++)
  {
    SetPixelRed(pixels,RoundToQuantum(SigmoidalContrast(GetPixelRed(pixels)));
    SetPixelGreen(pixels,RoundToQuantum(SigmoidalContrast(GetPixelGreen(pixels)));
    SetPixelBlue(pixels,RoundToQuantum(SigmoidalContrast(GetPixelBlue(pixels)));
    SetPixelOpacity(pixels,RoundToQuantum(SigmoidalContrast(GetPixelOpacity(pixels)));
    pixels++;
  }
  indexes=GetImageViewAuthenticIndexes(contrast_view);
  if (indexes != (IndexPacket *) NULL)
    for (x=0; x &lt; (ssize_t) (extent.width-extent.x); x++)
      SetPixelIndex(indexes+x,RoundToQuantum(SigmoidalContrast(GetPixelIndex(indexes+x))));
  return(MagickTrue);
}

int main(int argc,char **argv)
{
#define ThrowImageException(image) \
{ \
 \
  CatchException(exception); \
  if (contrast_image != (Image *) NULL) \
    contrast_image=DestroyImage(contrast_image); \
  exit(-1); \
}
#define ThrowViewException(view) \
{ \
  char \
    *description; \
 \
  ExceptionType \
    severity; \
 \
  description=GetImageViewException(view,&amp;severity); \
  (void) fprintf(stderr,"%s %s %lu %s\n",GetMagickModule(),description); \
  description=DestroyString(description); \
  exit(-1); \
}

  ExceptionInfo
    *exception;

  Image
    *contrast_image;

  ImageInfo
    *image_info;

  ImageView
    *contrast_view;

  MagickBooleanType
    status;

  if (argc != 3)
    {
      (void) fprintf(stdout,"Usage: %s image sigmoidal-image\n",argv[0]);
      exit(0);
    }
  /*
    Read an image.
  */
  MagickCoreGenesis(*argv,MagickTrue);
  image_info=AcquireImageInfo();
  (void) CopyMagickString(image_info->filename,argv[1],MaxTextExtent);
  exception=AcquireExceptionInfo();
  contrast_image=ReadImage(image_info,exception);
  if (contrast_image == (Image *) NULL)
    ThrowImageException(contrast_image);
  /*
    Sigmoidal non-linearity contrast control.
  */
  contrast_view=NewImageView(contrast_image);
  if (contrast_view == (ImageView *) NULL)
    ThrowImageException(contrast_image);
  status=UpdateImageViewIterator(contrast_view,SigmoidalContrast,(void *) NULL);
  if (status == MagickFalse)
    ThrowImageException(contrast_image);
  contrast_view=DestroyImageView(contrast_view);
  /*
    Write the image then destroy it.
  */
  status=WriteImages(image_info,contrast_image,argv[2],exception);
  if (status == MagickFalse)
    ThrowImageException(contrast_image);
  contrast_image=DestroyImage(contrast_image);
  exception=DestroyExceptionInfo(exception);
  image_info=DestroyImageInfo(image_info);
  MagickCoreTerminus();
  return(0);
}</samp></pre>
<p><samp>MagickCoreTerminus()</samp> is a function in the ImageMagick library that is used to clean up and release resources when shutting down an application that uses ImageMagick. This function should be called in the primary thread of the application's process during the shutdown process. It's crucial that this function is invoked only after any threads that are using ImageMagick functions have terminated.</p>

<p>ImageMagick might internally use threads via OpenMP (a method for parallel programming). As a result, it's important to ensure that any function calls into ImageMagick have completed before calling <samp>MagickCoreTerminus()</samp>. This prevents issues with OpenMP worker threads accessing resources that are destroyed by this termination function.</p>

<p>If OpenMP is being used (starting from version 5.0), the OpenMP implementation itself handles starting and stopping worker threads and allocating and freeing resources using its own methods. This means that after calling <samp>MagickCoreTerminus()</samp>, some OpenMP resources and worker threads might still remain allocated. To address this, the function <samp>omp_pause_resource_all(omp_pause_hard)</samp> can be invoked. This function, introduced in OpenMP version 5.0, ensures that any resources allocated by OpenMP (such as threads and thread-specific memory) are freed. It's recommended to call this function after <samp>MagickCoreTerminus()</samp> has completed its execution.</p>
</div>
