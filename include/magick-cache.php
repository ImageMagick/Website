<div class="magick-header">
<h1 class="text-center">Magick Cache: an Efficient Image Cache</h1>
<p class="text-info">The Magick cache is a work in progress.  Do not use the cache in production services until version is at least 1.0.0.  It is currently 0.9.2. The Magick Cache requires ImageMagick version 7.1.0-0 or above.</p>
<p class="lead magick-description">The MagickCache provides methods and tools to cache images, image sequences, video, audio or metadata in a local folder. Any content is memory-mapped for efficient retrieval.  Additional efficiences are possible by retrieving a portion of an image.  Content can persist or you can assign a time-to-live (TTL) to automatically expire content when the TTL is exceeded. MagickCache supports virtually unlimited content upwards of billions of images making it suitable as a web image service.</p>
<p>The Magick Cache works in concert with <a href="https://imagemagick.org">ImageMagick</a>.  Download the <a href="https://github.com/ImageMagick/MagickCache">MagickCache</a> and install.  You'll now want to create the cache and populate it with images, video, and associated metadata.</p>
<h5>Create a Magick Cache</h5>
<p>You'll need a place to store and retrieve your content.  Let's create a cache on our local filesystem:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt create /opt/magick-cache</code></pre></ul>
<p>Where `passkey.txt` contains your cache passkey. Don't forget your passkey. Without it, you will be unable to identify, expire, or delete content in your cache.</p>
<p>Once its created, you will want to populate the cache with content that includes images, video, audio, or metadata.
<h5>Put content in the Magick Cache</h5>
<p>Let's add a movie cast image to our newly created cache:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</code></pre></ul>
<p>Note, the image identifier is an IRI composed of <em>project</em>/<em>type</em>/<em>resource-path</em>.  In this example, the project is <code>movies</code>, type is <code>image</code>, and the resource path is <code>mission-impossible/cast/rebecca-ferguson</code>.  The path uniquely identifies a resource.  Two different images cannot be stored with the same resource path.  Instead use something like <code>mission-impossible/cast/20210508-rebecca-ferguson-1</code> and <code>mission-impossible/cast/20210508-rebecca-ferguson-2</code>.</p>
<p>Now, set a resource passkey and the time to live to 2 days.  Anytime after 1 day, the image will automatically expire with the <code>expire</code> function.  To get, expire, or delete the image, you will need to use the same resource passkey.</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt -ttl "2 days" put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</code></pre></ul>
<p>Where <code>passkey.txt</code> contains your resource passkey.  Don't forget your passkey.  Without it, you will be unable to get, identify, expire or delete your content.</p>
<p>The resource passkey ensures only you and the cache owner can access your image.  To prevent the cache owner from viewing its content, scramble it with:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt -passphrase passphrase.txt -ttl "2 days" put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</code></pre></ul>
<p>Note, blobs and metadata are stored in the cache in plaintext. To prevent snooping, scramble its content before you store it in the cache.</p>
<h5>Get content from the Magick Cache</h5>
<p>Eventually you will want retrieve your content, let's get our cast image from the cache:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</code></pre></ul>
<p>Notice the original image was put in the cache in the JPEG format. Here we conveniently convert it to the PNG image format.</p>
<p>The <code>-extract</code> option is useful when retrieving an image.  To extract a portion of the image, specify tile width, height, and offset:</p>

<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt -extract 100x100+0+0 get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</code></pre></ul>
<p>To resize instead, do not specify the offset:</p>

<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt -extract 100x100 get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</code></pre></ul>

<p>If your image is scrambled, provide the passphrase to descrample it:</p>

<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt -passphrase passphrase.txt get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</code></pre></ul>

<h5>Delete content from the Magick Cache</h5>
<p>We can explicitly delete content:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt delete /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson</code></pre></ul>
<p>or we can delete cast images that have expired (exceeded their respective time to live), try this comand:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt expire /opt/magick-cache movies/image/mission-impossible/cast</code></pre></ul>
<h5>Identify the Magick Cache content</h5>
<p>Perhaps you want to identify all the content you own:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt identify /opt/magick-cache movies/image/mission-impossible/cast
movies/image/mission-impossible/cast/rebecca-ferguson[1368x912] 406B 1:0:0:0 2021-05-30T17:41:42Z
identified 1 resources</code></pre></ul>
<p>Each entry includes the IRI, image dimensions for images, the content extent in bytes, time to live, whether the resource is expired (denoted with a `*`), and the creation date.</p>
<p>Others can store content in the cache along side your content.  However, their content is unavailable to you.  You cannot get, identify, expire or delete content that you do not own as determined by your secret passkey.</p>
<p>The magick owner can get, identify, expire, or delete all the content, including content you own, with this command, for example:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt identify /opt/magick-cache /</code></pre></ul>
<p>Note, expired reesources are annotated with an asterisks.</p>
<h5>Magick Cache is not just for Images</h5>
<p>In addition to a type of <code>image</code>, you can store the image content in its original form, video, or audio as content type of <code>blob</code> or metadata with a content type of <code>meta</code>:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt put /opt/magick-cache movies/blob/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.mp4</code></pre></ul>
<p> or</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt put /opt/magick-cache movies/meta/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.txt</code></pre></ul>
<p>Images must be in a format that ImageMagick understands.  Metadata must be text.  Blobs can be any content including images, video, audio, or binary files.</p>
<h5>Delete a Magick Cache</h5>
<p>To completely delete all the content within a cache:</p>
<ul><pre class="bg-light text-dark"><code>$ magick-cache -passkey passkey.txt delete /opt/magick-cache /</code></pre></ul>
<p>Be careful, after this command, your cached content is irrevocably lost.</p>
<h5>Security</h5>
<p>MagickCache security is not crytographically strong.  Instead it generates a unique hash for each resource ensuring the resource ID cannot be discovered.  A resource is accessible to both the user of the cache and the cache owner.  They are also accessible to anyone with sufficient privileges to access the MagickCache  disk path.</p>
</div>
