<div class="magick-header">
<h1 class="text-center">Magick Cache: an Efficient Image Cache</h1>
<p class="text-info">The Magick image cache is a work in progress.  Do not use the cache in production services until the API is at least version 1.0.0.  It is currently 0.9.2. The Magick Cache requires ImageMagick version 7.0.11-14 or above.</p>
<p class="lead magick-description">The Magick Cache stores and retrieves images efficiently within milliseconds with a small memory footprint. In addition to images, you can store video, audio, and associated properties.  The cache supports virtually unlimited content upwards of billions of images making it suitable as a web image service.</p>
<p>The Magick Cache works in concert with <a href="https://imagemagick.org">ImageMagick</a>.  Download the <a href="https://github.com/ImageMagick/MagickCache">MagickCache</a> and install.  You'll now want to create the cache and populate it with images, video, and associated metadata.</p>
<h5>Create a Magick Cache</h5>
<ul><pre class="bg-light text-dark"><code>$ magick-cache create /opt/magick-cache</code></pre></ul>
<p>Once you create the magick cache, you will want to populate it with content that includes images, video, audio, or metadata.
<h5>Put Content in the Magick Cache</h5>
<ul><pre class="bg-light text-dark"><code>$ magick-cache put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 0200508-rebecca-ferguson.jpg</code></pre></ul>
<p>Note, image identifier is an IRI composed of <em>project</em>/<em>type</em>/<em>resource-path</em>.  In this example, the project is <code>movies</code>, type is <code>image</code>, and the resource path is <code>mission-impossible/cast/rebecca-ferguson</code>.  The path uniquely identifies a resource.  Two different images cannot be stored with the same resource path.  Instead use something like <code>mission-impossible/cast/200508-rebecca-ferguson</code> and <code>mission-impossible/cast/200513-rebecca-ferguson</code>.</p>
<p>Set a cache key and the time to live to 2 days.  Anytime after 1 day, the image will automatically expire with the <code>expire</code> function.  To get, expire, or delete the image, you will need to use the same cache key.</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key s5hPjbxEwS -ttl "2 days" put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 0200508-rebecca-ferguson.jpg</code></pre></ul>
<p>Don't forget your cache key.  Without it, you will not be able to get, list, delete or expire your content.</p>
<h5>Get Content from the Magick Cache</h5>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key s5hPjbxEwS get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</code></pre></ul>
<p>Notice the original image was put in the Magick Cache in the JPEG format.  Here we the the image and convert it to the PNG image format.</p>
<h5>Delete Content from the Magick Cache</h5>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key s5hPjbxEwS delete /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson</code></pre></ul>
<p>To delete any cast images that have expired (exceeded their respective time to live), try this comand:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key s5hPjbxEwS expire /opt/magick-cache movies/image/mission-impossible/cast</code></pre></ul>
<h5>List the Magick Cache Content</h5>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key s5hPjbxEwS list /opt/magick-cache movies/image/mission-impossible/cast</code></pre></ul>
<p>In addition to a type of <code>image</code>, you can store the image content in its original form, video, or audio as content type of <code>blob</code> or metadata with a content type of <code>meta</code>:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key D4HiNCZeRn put /opt/magick-cache movies/blob/mission-impossible/cast/rebecca-ferguson 0200508-rebecca-ferguson.mp4</code></pre></ul>
<p> or</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -key D4HiNCZeRn put /opt/magick-cache movies/meta/mission-impossible/cast/rebecca-ferguson 0200508-rebecca-ferguson.txt</code></pre></ul>
</div>
