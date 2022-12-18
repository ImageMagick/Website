<div class="magick-header">
<h1 class="text-center">Security Policy</h1>
<p class="text-center"><a href="#policy">Security Policy </a> • <a href="#synchronize">Pixel Cache Synchronize Policy</a> • <a href="#zero-configuration">Zero Configuration Security Policy</a> • <a href="#other">Other Security Considerations</a></p>

<p class="text-info">It is highly recommended by ImageMagick to set up a security policy that is appropriate for your local environment.</p>

<p class="lead magick-description">The default policy is open, which is useful for ImageMagick installations running in a secure environment, such as in a Docker container or behind a firewall.</p>

<p>Security and convenience are often at odds with each other. For optimal security, you can limit ImageMagick to only reading or writing web-safe image formats like GIF, JPEG, and PNG. Alternatively, you can customize the security policy to fit the needs of your local environment or organizational policies. This policy can cover aspects like memory usage, allowable paths for reading and writing, the number of images allowed in a sequence, the maximum time a workflow can run, the amount of disk space allowed for image pixels, a secret passphrase for remote connections, and which coders are permitted or denied. These policies can help secure your environment and also ensure that ImageMagick is a responsible member of your local environment, such as by preventing overloading with large images.</p>

<p>For example, if you accidentally download an image from the internet that has been crafted to generate a 20000 by 20000 pixel image, ImageMagick may try to allocate the necessary resources (such as memory and disk space) and your system may deny the request or cause the program to exit. Alternatively, your computer may become temporarily slow or unresponsive, or ImageMagick may be forced to abort. To avoid such situations, you can set limits in the <a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy.xml</a> configuration file. You may wonder why ImageMagick does not already come with reasonable limits built in. The reason is that what is reasonable for one environment may not be reasonable for another. For example, you may have ImageMagick sandboxed in a secure environment, while someone else may use it to process images on a publicly accessible website. Or, ImageMagick may be running on a host with 1TB of memory, while another instance is running on a tablet with limited resources. In the case of the host with large memory, it may make sense to allow giga-pixel image processing, but not on the tablet. If you are using ImageMagick on a public website, you may want to increase security by disabling the MVG or HTTPS coders. Ultimately, it is up to you to decide what limits are reasonable based on your specific environment. To help you get started, ImageMagick provides a policy with reasonable limits, but it is recommended that you modify it to suit your local environment, such as this set of polices:</p>

<pre class="pre-scrollable bg-light text-dark mx-4 text-dark mx-4"><samp>&lt;policymap>
  &lt;!-- temporary path must be a preexisting writable directory -->
  &lt;policy domain="resource" name="temporary-path" value="/data/magick"/>
  &lt;policy domain="resource" name="memory" value="256MiB"/>
  &lt;policy domain="resource" name="list-length" value="32"/>
  &lt;policy domain="resource" name="width" value="8KP"/>
  &lt;policy domain="resource" name="height" value="8KP"/>
  &lt;policy domain="resource" name="map" value="512MiB"/>
  &lt;policy domain="resource" name="area" value="16KP"/>
  &lt;policy domain="resource" name="disk" value="1GiB"/>
  &lt;policy domain="resource" name="file" value="768"/>
  &lt;policy domain="resource" name="thread" value="2"/>
  &lt;policy domain="resource" name="time" value="120"/>
  &lt;policy domain="module" rights="none" pattern="URL" /> 
  &lt;policy domain="coder" rights="write" pattern="{MSVG,MVG,PS,PDF,XPS}" />
  &lt;policy domain="filter" rights="none" pattern="*" />
  &lt;policy domain="path" rights="none" pattern="@*"/>  &lt;!-- indirect reads not permitted -->
  &lt;policy domain="cache" name="memory-map" value="anonymous"/>
  &lt;policy domain="cache" name="synchronize" value="true"/>
  &lt;policy domain="cache" name="shared-secret" value="<em>my-secret-passphrase</em>" stealth="True"/>
  &lt;policy domain="system" name="shred" value="1"/>
&lt;/policymap></samp></pre>

<p>Since we process multiple sessions at the same time, we don't want any one session to consume all of the available memory. To prevent this, large images are cached to disk with this policy. If an image is too large and exceeds the pixel cache disk limit, the program will exit. Additionally, we have set a time limit to prevent any processing tasks that run for too long. If an image has a width or height larger than 8192 pixels, or if an image sequence has more than 32 frames, an exception will be thrown and processing will stop. As of ImageMagick 7.0.1-8, you can prevent the use of any delegate or all delegates (by setting the pattern to "*"). Prior to these releases, you can use the domain of <samp>coder</samp> and set rights to <samp>none</samp> and the pattern to <samp>HTTPS</samp> to prevent delegate usage. We also prevent users from executing any image filters and prevent indirect reads. If you want to, for example, read text from a file (e.g. <samp>caption:@myCaption.txt</samp>), you'll need to disable this path policy.</p>

<p>Policy patterns are <em>case sensitive</em>.  To get expected behavior, coders and modules must be upper-case (e.g. "EPS" not "eps") or use a case-insensitive pattern such as <samp>[Pp][Nn][Gg]</samp>.</p>

<p>Here is what you can expect when you restrict the HTTPS coder, for example:</p>

<pre class="bg-light text-dark mx-4">$ magick https://imagemagick.org/image/wizard.png wizard.jpg
convert: attempt to perform an operation not allowed by the security policy `HTTPS'
convert: no images defined `wizard.jpg'</pre>

<p>As of ImageMagick version 7.0.4-7, you can conveniently deny access to all delegates and coders except for a small subset of proven web-safe image types.  For example,</p>

<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="delegate" rights="none" pattern="*" />
&lt;policy domain="module" rights="none" pattern="*" />
&lt;policy domain="module" rights="read | write" pattern="{GIF,JPEG,PNG,WEBP}" /></samp></pre>

<p>The module policy enables or disables a complete module for both read or write.  To just read or write an image format, use the coder policy instead.  For example, we disable reading just a few Postscript related formats, however, you can still write them:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="coder" rights="write" pattern="{PDF,PS,PS2,PS3,XPS}" /></samp></pre>

<p>As of ImageMagick 7.0.7-0, you can allocate the pixel cache and some internal buffers with anonymous memory mapping rather than from heap.  As a consequence, the pixels are initialized to zero resulting in a minor performance penalty.  You can also jumble the contents of certain memory buffers (requires version 7.1.0-38) and temporary files before they are freed or deleted.  The shred value is the number of times to replace content with random data.  For example,</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="system" name="memory-map" value="anonymous"/>
&lt;policy domain="cache" name="memory-map" value="anonymous"/>
&lt;policy domain="system" name="shred" value="1"/></samp></pre>
<p>For performance reasons, the first pass is fast by repeating the random sequence as necessary to overwrite the contents of the buffer or file.  Subsequent passes are an order of magnitude slower, but generate cryptographically strong random bytes for the length of the buffer or file.</p>

<p>Some image processing algorithms (e.g. wavelet transform) might consume a substantial amount of memory to complete.  ImageMagick maintains a separate memory pool for these large resource requests and as of 7.0.6-1 permits you to set a maximum request limit.  If the limit is exceeded, the allocation is instead memory-mapped on disk.  Here we limit the maximum memory request by policy:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="system" name="max-memory-request" value="256MiB"/> </samp></pre>

<p>As of ImageMagick version 7.0.4-23, you can limit the maximum number of images in a sequence.  For example, to limit an image sequence to at most 64 frames, use:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="resource" name="list-length" value="64"/></samp></pre>

<p>For additional details about resource limits and the policy configuration file, read <a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>.</p>

<p>As of ImageMagick 7.0.6-0, you can programmatically set the ImageMagick security policy with SetMagickSecurityPolicy() (MagickCore) or MagickSetSecurityPolicy() (MagickWand).</p>

<p>As of ImageMagick version 7.0.8-11, you can set a <samp>module</samp> security policy.  For example, to prevent Postscript or PDF interpretation, use:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="module" rights="none" pattern="{ps,pdf,xps}/></samp></pre>

<p>As of ImageMagick version 7.0-10-52, you can set a <samp>font</samp> policy.  Specify a path to a Unicode font that ImageMagick defaults to whenever the user does not specify a font preference:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="system" name="font" value="/usr/share/fonts/arial-unicode.ttf"/></samp></pre>

<p>You can verify your policy changes are in effect with this command:</p>

<pre class="pre-scrollable bg-light text-dark mx-4">$ magick identify -list policy
Path: ImageMagick-7/policy.xml
  Policy: Cache
    name: memory-map
    value: anonymous
  Policy: Cache
    name: synchronize
    value: true
  Policy: Resource
    name: list-length
    value: 32
  Policy: Resource
    name: time
    value: 120
  Policy: Resource
    name: thread
    value: 2
  Policy: Resource
    name: file
    value: 768
  Policy: Resource
    name: disk
    value: 1GiB
  Policy: Resource
    name: map
    value: 512MiB
  Policy: Resource
    name: memory
    value: 256MiB
  Policy: Resource
    name: area
    value: 16KP
  Policy: Resource
    name: height
    value: 8KP
  Policy: Resource
    name: width
    value: 8KP
  Policy: Resource
    name: temporary-path
    value: /opt/tmp
  Policy: Coder
    rights: Write 
    pattern: {HTTP,HTTPS,MVG,PS,PDF}
  Policy: Filter
    rights: None 
    pattern: *
  Policy: Path
    rights: None 
    pattern: @*
  Policy: System
    name: font
    value: ImageMagick-7/arial-unicode.ttf

Path: [built-in]
  Policy: Undefined
    rights: None</pre>
<p>Notice the <samp>shared-secret</samp> policy is not listed due to the <samp>stealth</samp> property.</p>

<h2><a class="anchor" id="synchronize"></a>Pixel Cache Synchronize Policy</h2>

<p>When writing image pixels to disk, ImageMagick firsts preallocates the disk file, which is much faster than fully populating the file with zeros.  To further increase performance, we memory-map the file on disk.  With memory-mapping, we get an increase in performance (up to 5x), however, there remains a possibility that as the disk file is populated, it may run out of free space.  The OS then throws a SIGBUS signal which prevents ImageMagick from continuing.  To prevent a SIGBUS, use this security policy:

<pre class="bg-light text-dark mx-4">
&lt;policy domain="cache" name="synchronize" value="True"/>
</pre>

<p>Set to True to ensure all image data is fully flushed and synchronized to disk. There is a performance penalty, however, the benefits include ensuring a valid image file in the event of a system crash and early reporting if there is not enough disk space for the image pixel cache.</p>

<h2><a class="anchor" id="zero-configuration"></a>Zero Configuration Security Policy</h2>

<p>A zero configuration build of ImageMagick does not permit external configuration files.  To define your security policy, you must instead edit the <samp>MagickCore/policy-private.h</samp> source module, add your policy statements, and then build the ImageMagick distribution.  Here is an example zero configuration security policy:</p>

<pre class="bg-light text-dark mx-4"><samp>static const char
  *ZeroConfigurationPolicy = \
"&lt;policymap> \
  &lt;policy domain=\"coder\" rights=\"none\" pattern=\"MVG\"/> \
&lt;/policymap>";</samp></pre>

<h2><a class="anchor" id="other"></a>Other Security Considerations</h2>

<p>If you spot a security flaw in ImageMagick, post your concern as an issue to
<a href="https://github.com/ImageMagick/ImageMagick/issues">GitHub</a>.  Be sure to include how to reproduce the security flaw and a link to any images needed to reproduce the flaw.  Alternatively, <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">contact us</a> and select <samp>Security Issue</samp> as the issue.</p>

<p>In addition to the security policy, you can make ImageMagick safer by ...</p>
<ul>
<li>keeping ImageMagick up-to-date.  The latest releases have fixes for any security flaws we discovered in the past;</li>
<li>sanitizing any filenames or command line options you pass to ImageMagick;</li>
<li>running ImageMagick in a sanitized software container such as Docker;</li>
<li>running ImageMagick as the least-privileged user (e.g. <samp>nobody</samp>);</li>
<li>explicitly setting the image file type.  For example, use the filename <samp>png:image.png</samp> rather than <samp>image.png</samp>.  Without an explicit image type in the filename, ImageMagick guesses the image type.</li>
<li>do not create temporary files in shared directories, instead specify a private area to store only ImageMagick temporary files by setting the <samp>temporary-path</samp> security policy or the <samp>-define registry:temporary-path=/data/magick</samp> command-line option.</li>
</ul>

</div>
