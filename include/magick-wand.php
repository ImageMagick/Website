<div class="magick-header">

<p class="lead magick-description">The <a href="<?php echo $_SESSION['RelativePath']?>/../api/MagickWand/index.html">MagickWand API</a> is the recommended interface between the C programming language and the ImageMagick image processing libraries.  Unlike the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-core.php">MagickCore</a> C API, MagickWand uses only a few opaque types.  Accessors are available to set or get important wand properties.  A description of the MagickWand public methods are found here:</p>

<ul>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/magick-wand.php">Magick Wand Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/magick-property.php">Set or Get Magick Wand Properties</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/magick-image.php">Magick Wand Image Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/pixel-iterator.php">Pixel Iterator Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/pixel-wand.php">Pixel Wand Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/drawing-wand.php">Image Vector Drawing</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/mogrify.php">Command-line Interface</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/wand-view.php">Wand View Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../api/magick-deprecate.php">Deprecated Methods</a></li>
  <li><a href="<?php echo $_SESSION['RelativePath']?>/../script/exception.php">Error and Warning Codes</a></li>
</ul>

<p>After you write your MagickWand program, compile it like this:</p>

<pre class="highlight"><code>cc -o wand wand.c `pkg-config --cflags --libs MagickWand`
</code></pre>

<p>Set the <code>PKG_CONFIG_PATH</code> environment variable if ImageMagick is not in your default system path:</p>

<pre class="highlight"><code>export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig
</code></pre>

<p>Here is a example program that utilizes the MagickWand API to get you started, <a href="<?php echo $_SESSION['RelativePath']?>/../source/wand.c">wand.c</a>. It reads an image, creates a thumbnail, and writes the result to disk.</p>

<pre class="pre-scrollable"><code>#include &lt;stdio.h>
#include &lt;stdlib.h>
#include &lt;wand/MagickWand.h>

int main(int argc,char **argv)
{
#define ThrowWandException(wand) \
{ \
  char \
    *description; \
 \
  ExceptionType \
    severity; \
 \
  description=MagickGetException(wand,&amp;severity); \
  (void) fprintf(stderr,"%s %s %lu %s\n",GetMagickModule(),description); \
  description=(char *) MagickRelinquishMemory(description); \
  exit(-1); \
}

  MagickBooleanType
    status;

  MagickWand
    *magick_wand;

  if (argc != 3)
    {
      (void) fprintf(stdout,"Usage: %s image thumbnail\n",argv[0]);
      exit(0);
    }
  /*
    Read an image.
  */
  MagickWandGenesis();
  magick_wand=NewMagickWand();
  status=MagickReadImage(magick_wand,argv[1]);
  if (status == MagickFalse)
    ThrowWandException(magick_wand);
  /*
    Turn the images into a thumbnail sequence.
  */
  MagickResetIterator(magick_wand);
  while (MagickNextImage(magick_wand) != MagickFalse)
    MagickResizeImage(magick_wand,106,80,LanczosFilter,1.0);
  /*
    Write the image then destroy it.
  */
  status=MagickWriteImages(magick_wand,argv[2],MagickTrue);
  if (status == MagickFalse)
    ThrowWandException(magick_wand);
  magick_wand=DestroyMagickWand(magick_wand);
  MagickWandTerminus();
  return(0);
}
</code></pre>

<p>Here is another program that shows one way to get and set image pixels with the MagickWand API, <a href="<?php echo $_SESSION['RelativePath']?>/../source/contrast.c">contrast.c</a>. It reads an image, applies sigmoidal non-linearity contrast control, and writes the result to disk.</p>

<pre class="pre-scrollable"><code>#include &lt;stdio.h>
#include &lt;stdlib.h>
#include &lt;math.h>
#include &lt;wand/MagickWand.h>

int main(int argc,char **argv)
{
#define QuantumScale  ((MagickRealType) 1.0/(MagickRealType) QuantumRange)
#define SigmoidalContrast(x) \
  (QuantumRange*(1.0/(1+exp(10.0*(0.5-QuantumScale*x)))-0.0066928509)*1.0092503)
#define ThrowWandException(wand) \
{ \
  char \
    *description; \
 \
  ExceptionType \
    severity; \
 \
  description=MagickGetException(wand,&amp;severity); \
  (void) fprintf(stderr,"%s %s %lu %s\n",GetMagickModule(),description); \
  description=(char *) MagickRelinquishMemory(description); \
  exit(-1); \
}

  long
    y;

  MagickBooleanType
    status;

  MagickPixelPacket
    pixel;

  MagickWand
    *contrast_wand,
    *image_wand;

  PixelIterator
    *contrast_iterator,
    *iterator;

  PixelWand
    **contrast_pixels,
    **pixels;

  register long
    x;

  unsigned long
    width;

  if (argc != 3)
    {
      (void) fprintf(stdout,"Usage: %s image sigmoidal-image\n",argv[0]);
      exit(0);
    }
  /*
    Read an image.
  */
  MagickWandGenesis();
  image_wand=NewMagickWand();
  status=MagickReadImage(image_wand,argv[1]);
  if (status == MagickFalse)
    ThrowWandException(image_wand);
  contrast_wand=CloneMagickWand(image_wand);
  /*
    Sigmoidal non-linearity contrast control.
  */
  iterator=NewPixelIterator(image_wand);
  contrast_iterator=NewPixelIterator(contrast_wand);
  if ((iterator == (PixelIterator *) NULL) ||
      (contrast_iterator == (PixelIterator *) NULL))
    ThrowWandException(image_wand);
  for (y=0; y &lt; (long) MagickGetImageHeight(image_wand); y++)
  {
    pixels=PixelGetNextIteratorRow(iterator,&amp;width);
    contrast_pixels=PixelGetNextIteratorRow(contrast_iterator,&amp;width);
    if ((pixels == (PixelWand **) NULL) ||
        (contrast_pixels == (PixelWand **) NULL))
      break;
    for (x=0; x &lt; (long) width; x++)
    {
      PixelGetMagickColor(pixels[x],&amp;pixel);
      pixel.red=SigmoidalContrast(pixel.red);
      pixel.green=SigmoidalContrast(pixel.green);
      pixel.blue=SigmoidalContrast(pixel.blue);
      pixel.index=SigmoidalContrast(pixel.index);
      PixelSetMagickColor(contrast_pixels[x],&amp;pixel);
    }
    (void) PixelSyncIterator(contrast_iterator);
  }
  if (y &lt; (long) MagickGetImageHeight(image_wand))
    ThrowWandException(image_wand);
  contrast_iterator=DestroyPixelIterator(contrast_iterator);
  iterator=DestroyPixelIterator(iterator);
  image_wand=DestroyMagickWand(image_wand);
  /*
    Write the image then destroy it.
  */
  status=MagickWriteImages(contrast_wand,argv[2],MagickTrue);
  if (status == MagickFalse)
    ThrowWandException(image_wand);
  contrast_wand=DestroyMagickWand(contrast_wand);
  MagickWandTerminus();
  return(0);
}
</code></pre>
<p><a class="anchor" id="wand-view"></a>Now lets perform the same contrast enhancement while taking advantage of our dual or quad-core processing system by running the algorithm in parallel utilizing wand views.  The <a href="<?php echo $_SESSION['RelativePath']?>/../source/wand/sigmoidal-contrast.c">sigmoidal-contrast.c</a> module reads an image, applies sigmoidal non-linearity contrast control, and writes the result to disk just like the previous contrast enhancement program, but now it does its work in parallel (assumes ImageMagick is built with OpenMP support).</p>

<pre class="pre-scrollable"><code>#include &lt;stdio.h>
#include &lt;stdlib.h>
#include &lt;math.h>
#include &lt;wand/MagickWand.h>

static MagickBooleanType SigmoidalContrast(WandView *pixel_view,
  const ssize_t y,const int id,void *context)
{
#define QuantumScale  ((MagickRealType) 1.0/(MagickRealType) QuantumRange)
#define SigmoidalContrast(x) \
  (QuantumRange*(1.0/(1+exp(10.0*(0.5-QuantumScale*x)))-0.0066928509)*1.0092503)

  RectangleInfo
    extent;

  MagickPixelPacket
    pixel;

  PixelWand
    **pixels;

  register long
    x;

  extent=GetWandViewExtent(contrast_view);
  pixels=GetWandViewPixels(contrast_view);
  for (x=0; x &lt; (long) (extent.width-extent.height); x++)
  {
    PixelGetMagickColor(pixels[x],&amp;pixel);
    pixel.red=SigmoidalContrast(pixel.red);
    pixel.green=SigmoidalContrast(pixel.green);
    pixel.blue=SigmoidalContrast(pixel.blue);
    pixel.index=SigmoidalContrast(pixel.index);
    PixelSetMagickColor(contrast_pixels[x],&amp;pixel);
  }
  return(MagickTrue);
}

int main(int argc,char **argv)
{
#define ThrowViewException(view) \
{ \
  description=GetWandViewException(view,&amp;severity); \
  (void) fprintf(stderr,"%s %s %lu %s\n",GetMagickModule(),description); \
  description=(char *) MagickRelinquishMemory(description); \
  exit(-1); \
}
#define ThrowWandException(wand) \
{ \
  description=MagickGetException(wand,&amp;severity); \
  (void) fprintf(stderr,"%s %s %lu %s\n",GetMagickModule(),description); \
  description=(char *) MagickRelinquishMemory(description); \
  exit(-1); \
}

  char
    *description;

  ExceptionType
    severity;

  MagickBooleanType
    status;

  MagickPixelPacket
    pixel;

  MagickWand
    *contrast_wand;

  WandView
    *contrast_view;

  if (argc != 3)
    {
      (void) fprintf(stdout,"Usage: %s image sigmoidal-image\n",argv[0]);
      exit(0);
    }
  /*
    Read an image.
  */
  MagickWandGenesis();
  contrast_wand=NewMagickWand();
  status=MagickReadImage(contrast_wand,argv[1]);
  if (status == MagickFalse)
    ThrowWandException(contrast_wand);
  /*
    Sigmoidal non-linearity contrast control.
  */
  contrast_view=NewWandView(contrast_wand);
  if (contrast_view == (WandView *) NULL)
    ThrowWandException(contrast_wand);
  status=UpdateWandViewIterator(contrast_view,SigmoidalContrast,(void *) NULL);
  if (status == MagickFalse)
    ThrowWandException(contrast_wand);
  contrast_view=DestroyWandView(contrast_view);
  /*
    Write the image then destroy it.
  */
  status=MagickWriteImages(contrast_wand,argv[2],MagickTrue);
  if (status == MagickFalse)
    ThrowWandException(contrast_wand);
  contrast_wand=DestroyMagickWand(contrast_wand);
  MagickWandTerminus();
  return(0);
}
</code></pre>
<p><a href="https://www.imagemagick.org/MagickWand/">MagickWand Examples in C</a> illustrates how to use the ImageMagick MagickWand API. Each example is presented as a C function, complete with headers, so that it can be copied to a file and then included in your own C project.</p>
</div>
