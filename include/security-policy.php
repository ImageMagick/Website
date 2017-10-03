<div class="magick-header">
<p class="text-center"><a href="#policy">Security Policy </a> • <a href="#synchronize">Pixel Cache Synchronize Policy</a> • <a href="#zero-configuration">Zero Configuration Security Policy</a> • <a href="#other">Other Security Considerations</a></p>


<p class="lead magick-description">ImageMagick includes a security policy configuration file, <a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy.xml</a>. It is useful for limiting the resources consumed by ImageMagick and can help prevent a denial-of-service or other exploits.</p>

<p>As an example, suppose you download an image from the internet and unbeknownst to you its been crafted to generate a 20000 by 20000 pixel image. ImageMagick attempts to allocate enough resources (memory, disk) and your system will likely deny the resource request and exit. However, its also possible that your computer might be temporarily sluggish or unavailable or ImageMagick may abort. To prevent such a scenario, you can set limits in the <code>policy.xml</code> configuration file. You might wonder why ImageMagick does not already include reasonable limits? Simply because what is reasonable in your environment, might not be reasonable to someone else. For example, you may have ImageMagick sandboxed where security is not a concern, whereas another user may use ImageMagick to process images on their publically accessible website.  Or ImageMagick runs on a host with 1TB of memory whereas another ImageMagick instance runs on an iPhone. By policy, permitting giga-pixel image processing on the large memory host makes sense, not so much for the resource constrained iPhone. If you utilize ImageMagick from a public website, you may want to increase security by preventing usage of the MVG or HTTPS coders. Only you can decide what are reasonable limits taking in consideration your environment. We provide this policy with reasonable limits and encourage you to modify it to suit your local environment:</p>

<pre class="pre-scrollable"><code>&lt;policymap>
  &lt;policy domain="resource" name="temporary-path" value="/tmp"/>
  &lt;policy domain="resource" name="memory" value="256MiB"/>
  &lt;policy domain="resource" name="map" value="512MiB"/>
  &lt;policy domain="resource" name="width" value="8KP"/>
  &lt;policy domain="resource" name="height" value="8KP"/>
  &lt;policy domain="resource" name="area" value="16KP"/>
  &lt;policy domain="resource" name="disk" value="1GiB"/>
  &lt;policy domain="resource" name="file" value="768"/>
  &lt;policy domain="resource" name="thread" value="2"/>
  &lt;policy domain="resource" name="throttle" value="0"/>
  &lt;policy domain="resource" name="time" value="120"/>
  &lt;policy domain="system" name="precision" value="6"/>
  &lt;policy domain="cache" name="shared-secret" stealth="true" value="replace with your secret phrase"/>
  &lt;policy domain="coder" rights="none" pattern="MVG" />
  &lt;policy domain="delegate" rights="none" pattern="HTTPS" />  <!--  prevent 'curl' program from reading HTTPS URL's -->
  &lt;policy domain="path" rights="none" pattern="@*"/>  <!-- indirect reads not permitted -->
&lt;/policymap></code></pre>

<p>Since we process multiple simultaneous sessions, we do not want any one session consuming all the available memory.With this policy, large images are cached to disk. If the image is too large and exceeds the pixel cache disk limit, the program exits. In addition, we place a time limit to prevent any run-away processing tasks. If any one image has a width or height that exceeds 8192 pixels, an exception is thrown and processing stops. As of ImageMagick 7.0.1-8 and 6.9.4-6, you can prevent the use of any delegate or all delegates (set the pattern to "*"). Note, prior to these releases, use a domain of <code>coder</code> to prevent delegate usage (e.g. <code>domain="coder" rights="none" pattern="HTTPS"</code>). The policy also prevents indirect reads. If you want to, for example, read text from a file (e.g. <code>caption:@myCaption.txt</code>), you'll need to disable the <code>path</code> policy.</p>

<p>Here is what you can expect when you restrict the HTTPS coder, for example:</p>

<pre>-> convert https://www.imagemagick.org/image/wizard.png wizard.jpg
convert: not authorized `HTTPS'
convert: unable to open file: No such file or directory
convert: no images defined `wizard.jpg'</pre>

<p>As of ImageMagick version 7.0.4-7, you can conveniently deny access to all delegates and coders except for a small subset of proven web-safe image types.  For example,</p>

<pre><code>&lt;policy domain="delegate" rights="none" pattern="*" />
&lt;policy domain="coder" rights="none" pattern="*" />
&lt;policy domain="coder" rights="read | write" pattern="{GIF,JPEG,PNG,WEBP}" /></code></pre>

<p>As of ImageMagick 7.0.7-0, you can allocate the pixel cache and some internal buffers with anonymous memory mapping rather than from heap.  As a consequence, the pixels are initialized to zero.  You can also securely delete any temporary files for increased security.  The value is the number of times to shred (replace its content with random data) before deleting a temporary file.  For example,</p>
<pre><code>&lt;policy domain="system" name="memory-map" value="anonymous"/>
&lt;policy domain="cache" name="memory-map" value="anonymous"/>
&lt;policy domain="system" name="shred" value="1"/></code></pre>

<p>Some image processing algorithms (e.g. wavelet transform) might consume a substantial amount of memory to complete.  ImageMagick maintains a separate memory pool for these large resource requests and as of 7.0.6-1 permits you to set a maximum request limit.  If the limit is exceeded, the allocation is instead memory-mapped on disk.  Here we limit the maximum memory request by policy:</p>
<pre><code>&lt;policy domain="system" name="max-memory-request" value="256MiB"/> </code></pre>

<p>You can verify your policy changes are in effect with this command:</p>

<pre class="pre-scrollable">-> identify -list policy
Path: ImageMagick/policy.xml
  Policy: Resource
    name: time
    value: 120
  Policy: Resource
    name: throttle
    value: 0
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
    value: /tmp
  Policy: System
    name: precision
    value: 6
  Policy: Path
    rights: None 
    pattern: @*

Path: [built-in]
  Policy: Undefined
    rights: None</pre>
<p>Notice the <code>Cache</code> policy is not listed due to the <code>stealth</code> property.</p>

<p>As of ImageMagick 7.0.6-0, you can programmatically set the ImageMagick security policy with SetMagickSecurityPolicy() (MagickCore) or MagickSetSecurityPolicy() (MagickWand).</p>

<p>For additional details about resource limits and the policy configuration file, read <a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>.</p>

<h2 class="magick-post-title"><a id="synchronize"></a>Pixel Cache Synchronize Policy</h2>

<p>When writing image pixels to disk, ImageMagick firsts preallocates the disk file, which is much faster than fully populating the file with zeros.  To further increase performances, we memory-map the file on disk.  With memory-mapping, we get an increase in performance (up to 5x), however, there remains a possibility that as the disk file is populated, it may run out of free space.  The OS then throws a SIGBUS signal which prevents ImageMagick from continuing.  To prevent a SIGBUS, use this security policy:

<pre>
&lt;policy domain="cache" name="synchronize" value="True"/>
</pre>

<p>Set to True to ensure all image data is fully flushed and synchronized to disk. There is a performance penalty, however, the benefits include ensuring a valid image file in the event of a system crash and early reporting if there is not enough disk space for the image pixel cache.</p>

<h2 class="magick-post-title"><a id="zero-configuration"></a>Zero Configuration Security Policy</h2>

<p>A zero configuration build of ImageMagick does not permit external configuration files.  To define your security policy, you must instead edit the <code>MagickCore/policy-private.h</code> source module, add your policy statements, and then build the ImageMagick distribution.  Here is an example zero configuration security policy:</p>

<pre><code>static const char
  *ZeroConfigurationPolicy = \
"&lt;policymap> \
  &lt;policy domain=\"coder\" rights=\"none\" pattern=\"MVG\"/> \
&lt;/policymap>";</code></pre>

<h2 class="magick-post-title"><a id="other"></a>Other Security Considerations</h2>

<p>If you spot a security flaw in ImageMagick, post your concern to
<a href="https://github.com/ImageMagick/ImageMagick/issues">GitHub</a>.  Be sure to include how to reproduce the security flaw and a link to any images needed to reproduce the flaw.  Alternatively, <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">contact us</a> and select Security Issue as the issue.</p>

<p>In addition to the security policy, you can make ImageMagick safer by ...</p>
<ul>
<li>keeping ImageMagick up-to-date.  The latest releases have fixes for any security flaws we discovered in the past;</li>
<li>sanitizing any filenames or command line options you pass to ImageMagick;</li>
<li>running ImageMagick in a sanitized software container such as Docker;</li>
<li>running ImageMagick as the least-privileged user (e.g. 'nobody');</li>
<li>explicitly setting the image file type.  For example, use the filename <code>png:image.png</code> rather than <code>image.png</code>.  Without an explicit image type in the filename, ImageMagick guesses the image type.</li>
</ul>

</div>
