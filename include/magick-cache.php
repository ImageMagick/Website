<div>
<p class="lead">The MagickCache provides secure methods and tools to cache images, image sequences, video, audio or metadata in a local folder. Any content is memory-mapped for efficient retrieval.  Additional efficiencies are possible by retrieving a portion of an image.  Content can persist or you can assign a time-to-live (TTL) to automatically expire content when the TTL is exceeded. MagickCache supports virtually unlimited content upwards of billions of images making it suitable as a web image service.</p>
<p>The MagickCache works in concert with <a href="https://imagemagick.org">ImageMagick</a>.  Download the <a href="https://github.com/ImageMagick/MagickCache">MagickCache</a> and install.  You will now want to create the cache and populate it with images, video, and associated metadata.</p>
<h4>Create a MagickCache</h4>
<p>You will require a place to store and retrieve your content.  Let's create a cache on our local filesystem:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt create /opt/magick-cache</samp></pre>
<p>Where `passkey.txt` contains your cache passkey. Don't lose your passkey. Without it, you will be unable to identify, expire, or delete content in your cache.</p>
<p>You only need to create a MagickCache once.  You can, however, create more than one MagickCache with different paths.</p>
<p>Once the MagickCache is created, you will want to populate the cache with content that includes images, video, audio, or metadata.
<h4>Put content in the MagickCache</h4>
<p>Let's add a movie cast image to our newly created cache:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</samp></pre>
<p>Note, the image identifier is an IRI composed of <em>project</em>/<em>type</em>/<em>resource-path</em>.  In this example, the project is <samp>movies</samp>, type is <samp>image</samp>, and the resource path is <samp>mission-impossible/cast/rebecca-ferguson</samp>.  The path uniquely identifies a cache resource.  Two different images cannot be stored with the same resource path.  Instead use something like <samp>mission-impossible/cast/20210508-rebecca-ferguson-1</samp> and <samp>mission-impossible/cast/20210508-rebecca-ferguson-2</samp>.</p>
<p>Now, let's set a resource passkey and the time to live to 2 days.  Anytime after the second day, the image is automatically deleted with the <samp>expire</samp> function.  To get, expire, or delete the image, you will need to use the same resource passkey:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt -ttl "2 days" put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</samp></pre>
<p>Where <samp>passkey.txt</samp> contains your resource passkey.  Don't lose your passkey.  Without it, you will be unable to get, identify, expire or delete resources you own.</p>
<p>The resource passkey ensures only you and the cache owner can access your image.  To prevent the cache owner from viewing its content, scramble it with:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt -passphrase passphrase.txt -ttl "2 days" put /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.jpg</samp></pre>
<p>Note, blobs and metadata are stored in the cache in plaintext. To prevent snooping, scramble the content before you store it in the cache.</p>
<h4>Get content from the MagickCache</h4>
<p>Eventually you will want retrieve your content, let's get our original cast image from the cache:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</samp></pre>
<p>Notice the original image was put in the cache in the JPEG format. Here we conveniently convert it to the PNG format as we extract the image.</p>
<p>The <samp>-extract</samp> option is useful when retrieving an image.  To extract a portion of the image, specify tile width, height, and offset:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt -extract 100x100+0+0 get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</samp></pre>
<p>To resize instead, do not specify the offset:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt -extract 100x100 get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</samp></pre>

<p>If your image is scrambled, provide the passphrase to descramble it:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt -passphrase passphrase.txt get /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson rebecca-ferguson.png</samp></pre>

<h4>Delete content from the MagickCache</h4>
<p>We can explicitly delete content:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt delete /opt/magick-cache movies/image/mission-impossible/cast/rebecca-ferguson</samp></pre>
<p>or we can delete all cast images that have expired (exceeded their respective time to live), try this comand:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt expire /opt/magick-cache movies/image/mission-impossible/cast</samp></pre>
<h4>Identify the MagickCache content</h4>
<p>Perhaps you want to identify all the content you own:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt identify /opt/magick-cache movies/image/mission-impossible/cast
movies/image/mission-impossible/cast/rebecca-ferguson[1368x912] 406B 1:0:0:0 2021-05-30T17:41:42Z
identified 1 resources</samp></pre>
<p>Each entry includes the IRI, image dimensions for images, the content extent in bytes, time to live, whether the resource is expired (denoted with a `*`), and the creation date.</p>
<p>Others can store content in the cache along side your content.  However, their content is unavailable to you.  You cannot get, identify, expire or delete content that you do not own as determined by your secret passkey.</p>
<p>The MagickCache owner can get, identify, expire, or delete all the content, including content you own, with this command, for example:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt identify /opt/magick-cache /</samp></pre>
<p>Note, expired reesources are annotated with an asterisks.</p>
<h4>MagickCache is not just for Images</h4>
<p>In addition to a type of <samp>image</samp>, you can store the image content in its original form, video, or audio as content type of <samp>blob</samp> or metadata with a content type of <samp>meta</samp>:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt put /opt/magick-cache movies/blob/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.mp4</samp></pre>
<p> or</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt put /opt/magick-cache movies/meta/mission-impossible/cast/rebecca-ferguson 20210508-rebecca-ferguson.txt</samp></pre>
<p>Images must be in a format that ImageMagick understands.  Metadata must be text.  Blobs can be any content including images, video, audio, or binary files.</p>
<h4>Delete a MagickCache</h4>
<p>The MagickCache owner can completely delete all the content within a cache:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick-cache -passkey passkey.txt delete /opt/magick-cache /</samp></pre>
<p>Be careful, after this command, your cached content is irrevocably lost.</p>
<h4>Security</h4>
<p>MagickCache security is not crytographically strong.  Instead it generates a unique hash for each resource ensuring the resource ID cannot be discovered.  A resource is accessible to both the user of the cache and the cache owner provided they can present their respective passkeys.  They are also accessible to anyone with sufficient privileges to access the MagickCache  disk path.</p>
</div>
