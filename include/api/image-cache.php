<div class="magick-header">
<p class="text-center"><a href="#CloneImageCache">CloneImageCache</a> &bull; <a href="#DestroyImageCache">DestroyImageCache</a> &bull; <a href="#DuplexTransferImageCacheIterator">DuplexTransferImageCacheIterator</a> &bull; <a href="#GetImageCacheAuthenticMetacontent">GetImageCacheAuthenticMetacontent</a> &bull; <a href="#GetImageCacheAuthenticPixels">GetImageCacheAuthenticPixels</a> &bull; <a href="#GetImageCacheException">GetImageCacheException</a> &bull; <a href="#GetImageCacheExtent">GetImageCacheExtent</a> &bull; <a href="#GetImageCacheImage">GetImageCacheImage</a> &bull; <a href="#GetImageCacheIterator">GetImageCacheIterator</a> &bull; <a href="#GetImageCacheVirtualMetacontent">GetImageCacheVirtualMetacontent</a> &bull; <a href="#GetImageCacheVirtualPixels">GetImageCacheVirtualPixels</a> &bull; <a href="#IsImageCache">IsImageCache</a> &bull; <a href="#NewImageCache">NewImageCache</a> &bull; <a href="#NewImageCacheRegion">NewImageCacheRegion</a> &bull; <a href="#SetImageCacheDescription">SetImageCacheDescription</a> &bull; <a href="#SetImageCacheIterator">SetImageCacheIterator</a> &bull; <a href="#TransferImageCacheIterator">TransferImageCacheIterator</a> &bull; <a href="#UpdateImageCacheIterator">UpdateImageCacheIterator</a></p>

<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="CloneImageCache">CloneImageCache</a></h2>

<p>CloneImageCache() makes a copy of the specified image view.</p>

<p>The format of the CloneImageCache method is:</p>

<pre class="text">
ImageCache *CloneImageCache(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="DestroyImageCache">DestroyImageCache</a></h2>

<p>DestroyImageCache() deallocates memory associated with a image view.</p>

<p>The format of the DestroyImageCache method is:</p>

<pre class="text">
ImageCache *DestroyImageCache(ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="DuplexTransferImageCacheIterator">DuplexTransferImageCacheIterator</a></h2>

<p>DuplexTransferImageCacheIterator() iterates over three image views in parallel and calls your transfer method for each scanline of the view.  The source and duplex pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  However, the destination image view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType DuplexTransferImageCacheMethod(const ImageCache *source,
  const ImageCache *duplex,ImageCache *destination,const ssize_t y,
  const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the DuplexTransferImageCacheIterator method is:</p>

<pre class="text">
MagickBooleanType DuplexTransferImageCacheIterator(ImageCache *source,
  ImageCache *duplex,ImageCache *destination,
  DuplexTransferImageCacheMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source image view. </dd>

<dd> </dd>
<dt>duplex</dt>
<dd>the duplex image view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination image view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheAuthenticMetacontent">GetImageCacheAuthenticMetacontent</a></h2>

<p>GetImageCacheAuthenticMetacontent() returns the image view authentic meta-content.</p>

<p>The format of the GetImageCacheAuthenticPixels method is:</p>

<pre class="text">
void *GetImageCacheAuthenticMetacontent(
  const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheAuthenticPixels">GetImageCacheAuthenticPixels</a></h2>

<p>GetImageCacheAuthenticPixels() returns the image view authentic pixels.</p>

<p>The format of the GetImageCacheAuthenticPixels method is:</p>

<pre class="text">
Quantum *GetImageCacheAuthenticPixels(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheException">GetImageCacheException</a></h2>

<p>GetImageCacheException() returns the severity, reason, and description of any error that occurs when utilizing a image view.</p>

<p>The format of the GetImageCacheException method is:</p>

<pre class="text">
char *GetImageCacheException(const PixelImage *image_view,
  ExceptionType *severity)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the pixel image_view. </dd>

<dd> </dd>
<dt>severity</dt>
<dd>the severity of the error is returned here. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheExtent">GetImageCacheExtent</a></h2>

<p>GetImageCacheExtent() returns the image view extent.</p>

<p>The format of the GetImageCacheExtent method is:</p>

<pre class="text">
RectangleInfo GetImageCacheExtent(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheImage">GetImageCacheImage</a></h2>

<p>GetImageCacheImage() returns the image associated with the image view.</p>

<p>The format of the GetImageCacheImage method is:</p>

<pre class="text">
MagickCore *GetImageCacheImage(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheIterator">GetImageCacheIterator</a></h2>

<p>GetImageCacheIterator() iterates over the image view in parallel and calls your get method for each scanline of the view.  The pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension.  Any updates to the pixels in your callback are ignored.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType GetImageCacheMethod(const ImageCache *source,
  const ssize_t y,const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback get method that must be executed by a single thread at a time.</p>

<p>The format of the GetImageCacheIterator method is:</p>

<pre class="text">
MagickBooleanType GetImageCacheIterator(ImageCache *source,
  GetImageCacheMethod get,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source image view. </dd>

<dd> </dd>
<dt>get</dt>
<dd>the get callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheVirtualMetacontent">GetImageCacheVirtualMetacontent</a></h2>

<p>GetImageCacheVirtualMetacontent() returns the image view virtual meta-content.</p>

<p>The format of the GetImageCacheVirtualMetacontent method is:</p>

<pre class="text">
const void *GetImageCacheVirtualMetacontent(
  const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="GetImageCacheVirtualPixels">GetImageCacheVirtualPixels</a></h2>

<p>GetImageCacheVirtualPixels() returns the image view virtual pixels.</p>

<p>The format of the GetImageCacheVirtualPixels method is:</p>

<pre class="text">
const Quantum *GetImageCacheVirtualPixels(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="IsImageCache">IsImageCache</a></h2>

<p>IsImageCache() returns MagickTrue if the parameter is verified as a image view object.</p>

<p>The format of the IsImageCache method is:</p>

<pre class="text">
MagickBooleanType IsImageCache(const ImageCache *image_view)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="NewImageCache">NewImageCache</a></h2>

<p>NewImageCache() returns a image view required for all other methods in the Image Cache API.</p>

<p>The format of the NewImageCache method is:</p>

<pre class="text">
ImageCache *NewImageCache(MagickCore *wand,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="NewImageCacheRegion">NewImageCacheRegion</a></h2>

<p>NewImageCacheRegion() returns a image view required for all other methods in the Image Cache API.</p>

<p>The format of the NewImageCacheRegion method is:</p>

<pre class="text">
ImageCache *NewImageCacheRegion(MagickCore *wand,const ssize_t x,
  const ssize_t y,const size_t width,const size_t height,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>wand</dt>
<dd>the magick wand. </dd>

<dd> </dd>
<dt>x,y,columns,rows</dt>
<dd> These values define the perimeter of a extent of pixel_wands view. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="SetImageCacheDescription">SetImageCacheDescription</a></h2>

<p>SetImageCacheDescription() associates a description with an image view.</p>

<p>The format of the SetImageCacheDescription method is:</p>

<pre class="text">
void SetImageCacheDescription(ImageCache *image_view,
  const char *description)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image_view</dt>
<dd>the image view. </dd>

<dd> </dd>
<dt>description</dt>
<dd>the image view description. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="SetImageCacheIterator">SetImageCacheIterator</a></h2>

<p>SetImageCacheIterator() iterates over the image view in parallel and calls your set method for each scanline of the view.  The pixel extent is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension.  The pixels are initiallly undefined and any settings you make in the callback method are automagically synced back to your image.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType SetImageCacheMethod(ImageCache *destination,
  const ssize_t y,const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback set method that must be executed by a single thread at a time.</p>

<p>The format of the SetImageCacheIterator method is:</p>

<pre class="text">
MagickBooleanType SetImageCacheIterator(ImageCache *destination,
  SetImageCacheMethod set,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>destination</dt>
<dd>the image view. </dd>

<dd> </dd>
<dt>set</dt>
<dd>the set callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="TransferImageCacheIterator">TransferImageCacheIterator</a></h2>

<p>TransferImageCacheIterator() iterates over two image views in parallel and calls your transfer method for each scanline of the view.  The source pixel extent is not confined to the image canvas-- that is you can include negative offsets or widths or heights that exceed the image dimension. However, the destination image view is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType TransferImageCacheMethod(const ImageCache *source,
  ImageCache *destination,const ssize_t y,const int thread_id,
  void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback transfer method that must be executed by a single thread at a time.</p>

<p>The format of the TransferImageCacheIterator method is:</p>

<pre class="text">
MagickBooleanType TransferImageCacheIterator(ImageCache *source,
  ImageCache *destination,TransferImageCacheMethod transfer,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source image view. </dd>

<dd> </dd>
<dt>destination</dt>
<dd>the destination image view. </dd>

<dd> </dd>
<dt>transfer</dt>
<dd>the transfer callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
<h2><a href="https://imagemagick.org/api/MagickCore/image-view_8c.html" id="UpdateImageCacheIterator">UpdateImageCacheIterator</a></h2>

<p>UpdateImageCacheIterator() iterates over the image view in parallel and calls your update method for each scanline of the view.  The pixel extent is confined to the image canvas-- that is no negative offsets or widths or heights that exceed the image dimension are permitted.  Updates to pixels in your callback are automagically synced back to the image.</p>

<p>The callback signature is:</p>

<pre class="text">
MagickBooleanType UpdateImageCacheMethod(ImageCache *source,
  const ssize_t y,const int thread_id,void *context)
</pre>

<p>Use this pragma if the view is not single threaded:</p>

<pre class="text">
    #pragma omp critical
</pre>

<p>to define a section of code in your callback update method that must be executed by a single thread at a time.</p>

<p>The format of the UpdateImageCacheIterator method is:</p>

<pre class="text">
MagickBooleanType UpdateImageCacheIterator(ImageCache *source,
  UpdateImageCacheMethod update,void *context)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>source</dt>
<dd>the source image view. </dd>

<dd> </dd>
<dt>update</dt>
<dd>the update callback method. </dd>

<dd> </dd>
<dt>context</dt>
<dd>the user defined context. </dd>

<dd>  </dd>
</dl>
</div>
