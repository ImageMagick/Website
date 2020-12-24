<div class="magick-header">
<h1 class="text-center">ImageMagick Security Policy</h1>
<p class="text-center"><a href="#policy">Security Policy </a> • <a href="#synchronize">Pixel Cache Synchronize Policy</a> • <a href="#zero-configuration">Zero Configuration Security Policy</a> • <a href="#other">Other Security Considerations</a></p>


<p class="lead magick-description">ImageMagick best practices strongly encourages you to configure a security <a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy</a> that suits your local environment.  The policy is open by default.  This affords maximum utility for ImageMagick installations that run in a sandboxed environment, perhaps in a Docker instance, or behind a firewall where security risks are greatly diminished as opposed to a public website.</p>

<p>Security is a trade-off between a secure environment and convenience. If you want ImageMagick to be optimally secure, you could, for example, limit ImageMagick to only read or write web safe images (e.g. GIF, JPEG, PNG).   However, ImageMagick provides for a more secure option by adjusting the security policy per the requirements of your local environment or organizational policies. The security policy covers areas such as memory, which paths to read or write, how many images are permitted in an image sequence, how long a workflow can run, how much disk the image pixels can consume, a secret passphrase for remote connections, which coders are permitted or denied, and others. These policies should provide robust coverage to not only secure your environment per your requirements but also ensure ImageMagick remains a good citizen (e.g. prevent thrashing with large images) in your local environment.</p>

<p>As an example, suppose you download an image from the internet and unbeknownst to you its been crafted to generate a 20000 by 20000 pixel image. ImageMagick attempts to allocate enough resources (memory, disk) and your system will likely deny the resource request and exit. However, its also possible that your computer might be temporarily sluggish or unavailable or ImageMagick may abort. To prevent such a scenario, you can set limits in the <a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy.xml</a> configuration file. You might wonder why ImageMagick does not already include reasonable limits? Simply because what is reasonable in your environment, might not be reasonable to someone else. For example, you may have ImageMagick sandboxed where security is not a concern, whereas another user may use ImageMagick to process images on their publically accessible website.  Or ImageMagick runs on a host with 1TB of memory whereas another ImageMagick instance runs on an mobile phone. By policy, permitting giga-pixel image processing on the large memory host makes sense, not so much for the resource constrained mobile phone. If you utilize ImageMagick from a public website, you may want to increase security by preventing usage of the MVG or HTTPS coders. Only you can decide what are reasonable limits taking in consideration your environment. We provide this policy with reasonable limits and encourage you to modify it to suit your local environment:</p>

<pre class="pre-scrollable"><code>&lt;policymap>
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
  &lt;policy domain="coder" rights="write" pattern="{HTTP,HTTPS,MSVG,MVG,PS,EPS,PDF,XPS}" />
  &lt;policy domain="filter" rights="none" pattern="*" />
  &lt;policy domain="path" rights="none" pattern="@*"/>  &lt;!-- indirect reads not permitted -->
  &lt;policy domain="cache" name="memory-map" value="anonymous"/>
  &lt;policy domain="cache" name="synchronize" value="true"/>
  &lt;policy domain="cache" name="shared-secret" value="<em>passphrase</em>" stealth="True"/>
  &lt;policy domain="system" name="precision" value="6"/>
  &lt;policy domain="system" name="shred" value="1"/>
&lt;/policymap></code></pre>

<p>Since we process multiple simultaneous sessions, we do not want any one session consuming all the available memory. With this policy, large images are cached to disk. If the image is too large and exceeds the pixel cache disk limit, the program exits. In addition, we place a time limit to prevent any run-away processing tasks. If any one image has a width or height that exceeds 8192 pixels or if an image sequence exceeds 32 frames, an exception is thrown and processing stops. As of ImageMagick 7.0.1-8, you can prevent the use of any delegate or all delegates (set the pattern to "*"). Note, prior to these releases, use a domain of <code>coder</code> to prevent delegate usage (e.g. <code>domain="coder" rights="none" pattern="HTTPS"</code>). We prevent users from executing any image filters.  The policy also prevents indirect reads. If you want to, for example, read text from a file (e.g. <code>caption:@myCaption.txt</code>), you'll need to disable the <code>path</code> policy.</p>

<p>Policy patterns are <em>case sensitive</em>.  To get expected behavior, coders and modules must be upper-case (e.g. "EPS" not "eps").</p>

<p>Here is what you can expect when you restrict the HTTPS coder, for example:</p>

<pre class="highlight">-> convert https://imagemagick.org/image/wizard.png wizard.jpg
convert: attempt to perform an operation not allowed by the security policy `HTTPS'
convert: no images defined `wizard.jpg'</pre>

<p>As of ImageMagick version 7.0.4-7, you can conveniently deny access to all delegates and coders except for a small subset of proven web-safe image types.  For example,</p>

<pre class="highlight"><code>&lt;policy domain="delegate" rights="none" pattern="*" />
&lt;policy domain="module" rights="none" pattern="*" />
&lt;policy domain="module" rights="read | write" pattern="{GIF,JPEG,PNG,WEBP}" /></code></pre>

<p>Here we disable reading just a few Postscript related formats, you can still write them:</p>
<pre class="highlight"><code>&lt;policy domain="module" rights="write" pattern="{PDF,PS,PS2,PS3,XPS}" /></code></pre>

<p>As of ImageMagick 7.0.7-0, you can allocate the pixel cache and some internal buffers with anonymous memory mapping rather than from heap.  As a consequence, the pixels are initialized to zero resulting in a minor performance penalty.  You can also securely delete any temporary files for increased security.  The value is the number of times to shred (replace its content with random data) before deleting a temporary file.  For example,</p>
<pre class="highlight"><code>&lt;policy domain="system" name="memory-map" value="anonymous"/>
&lt;policy domain="cache" name="memory-map" value="anonymous"/>
&lt;policy domain="system" name="shred" value="1"/></code></pre>

<p>Some image processing algorithms (e.g. wavelet transform) might consume a substantial amount of memory to complete.  ImageMagick maintains a separate memory pool for these large resource requests and as of 7.0.6-1 permits you to set a maximum request limit.  If the limit is exceeded, the allocation is instead memory-mapped on disk.  Here we limit the maximum memory request by policy:</p>
<pre class="highlight"><code>&lt;policy domain="system" name="max-memory-request" value="256MiB"/> </code></pre>

<p>As of ImageMagick version 7.0.4-23, you can limit the maximum number of images in a sequence.  For example, to limit an image sequence to at most 64 frames, use:</p>
<pre class="highlight"><code>&lt;policy domain="resource" name="list-length" value="64"/></code></pre>

<p>For additional details about resource limits and the policy configuration file, read <a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>.</p>

<p>As of ImageMagick 7.0.6-0, you can programmatically set the ImageMagick security policy with SetMagickSecurityPolicy() (MagickCore) or MagickSetSecurityPolicy() (MagickWand).</p>

<p>As of ImageMagick version 7.0.8-11, you can set a module security policy.  For example, to prevent Postscript or PDF interpretation, use:</p>
<pre class="highlight"><code>&lt;policy domain="module" rights="none" pattern="{ps,pdf,xps}/></code></pre>

<p>As of ImageMagick version 7.0-10-52, you can set a font policy.  Specify a path to a Unicode font that ImageMagick defaults to whenever the user does not specify a font preference:</p>
<pre class="highlight"><code>&lt;policy domain="system" name="font" value="/usr/share/fonts/arial-unicode.ttf"/></code></pre>

<p>You can verify your policy changes are in effect with this command:</p>

<pre class="pre-scrollable">-> identify -list policy
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
  Policy: System
    name: precision
    value: 6
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
<p>Notice the <code>shared-secret</code> policy is not listed due to the <code>stealth</code> property.</p>

<h2><a class="anchor" id="synchronize"></a>Pixel Cache Synchronize Policy</h2>

<p>When writing image pixels to disk, ImageMagick firsts preallocates the disk file, which is much faster than fully populating the file with zeros.  To further increase performance, we memory-map the file on disk.  With memory-mapping, we get an increase in performance (up to 5x), however, there remains a possibility that as the disk file is populated, it may run out of free space.  The OS then throws a SIGBUS signal which prevents ImageMagick from continuing.  To prevent a SIGBUS, use this security policy:

<pre class="highlight">
&lt;policy domain="cache" name="synchronize" value="True"/>
</pre>

<p>Set to True to ensure all image data is fully flushed and synchronized to disk. There is a performance penalty, however, the benefits include ensuring a valid image file in the event of a system crash and early reporting if there is not enough disk space for the image pixel cache.</p>

<h2><a class="anchor" id="zero-configuration"></a>Zero Configuration Security Policy</h2>

<p>A zero configuration build of ImageMagick does not permit external configuration files.  To define your security policy, you must instead edit the <code>MagickCore/policy-private.h</code> source module, add your policy statements, and then build the ImageMagick distribution.  Here is an example zero configuration security policy:</p>

<pre class="highlight"><code>static const char
  *ZeroConfigurationPolicy = \
"&lt;policymap> \
  &lt;policy domain=\"coder\" rights=\"none\" pattern=\"MVG\"/> \
&lt;/policymap>";</code></pre>

<h2><a class="anchor" id="other"></a>Other Security Considerations</h2>

<p>If you spot a security flaw in ImageMagick, post your concern as an issue to
<a href="https://github.com/ImageMagick/ImageMagick/issues">GitHub</a>.  Be sure to include how to reproduce the security flaw and a link to any images needed to reproduce the flaw.  Alternatively, <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">contact us</a> and select Security Issue as the issue.</p>

<p>In addition to the security policy, you can make ImageMagick safer by ...</p>
<ul>
<li>keeping ImageMagick up-to-date.  The latest releases have fixes for any security flaws we discovered in the past;</li>
<li>sanitizing any filenames or command line options you pass to ImageMagick;</li>
<li>running ImageMagick in a sanitized software container such as Docker;</li>
<li>running ImageMagick as the least-privileged user (e.g. 'nobody');</li>
<li>explicitly setting the image file type.  For example, use the filename <code>png:image.png</code> rather than <code>image.png</code>.  Without an explicit image type in the filename, ImageMagick guesses the image type.</li>
<li>do not create temporary files in shared directories, instead specify a private area to store only ImageMagick temporary files by setting the <code>temporary-path</code> security policy or the <code>-define registry:temporary-path=/data/magick</code> command-line option.</li>
</ul>

</div>
