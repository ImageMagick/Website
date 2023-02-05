<div class="magick-header">
<h1 class="text-center">Security Policy</h1>
<p class="text-center"><a href="#policy">Security Policy </a> • <a href="#synchronize">Pixel Cache Synchronize Policy</a> • <a href="#zero-configuration">Zero Configuration Security Policy</a> • <a href="#other">Other Security Considerations</a></p>

<p class="text-info">ImageMagick strongly advises setting up a security policy that is suitable for your local environment.</p>

<p class="lead magick-description">The default policy is open, which is useful for ImageMagick installations running in a secure environment, such as in a Docker container or behind a firewall.</p>

<p>ImageMagick is a tool that allows you to manipulate images. While it offers a range of features and capabilities, there is often a trade-off between security and convenience. To ensure optimal security, you can restrict ImageMagick to only reading or writing web-safe image formats like GIF, JPEG, and PNG. Alternatively, you can customize the security policy to fit the needs of your local environment or organizational policies. This policy can include details such as memory usage limits, allowed paths for reading and writing, limits on the number of images in a sequence, maximum workflow runtime, allowed disk space for image pixels, a secret passphrase for remote connections, and which coders are permitted or denied. By customizing the security policy, you can help secure your environment and ensure that ImageMagick is a responsible member of your local system, such as by preventing overloading with large images.</p>

<p>It is important to set limits on ImageMagick's resource usage to prevent potentially harmful situations. For example, if you accidentally download an image from the internet that has been crafted to generate a very large image (e.g., 20000 by 20000 pixels), ImageMagick may try to allocate the necessary resources (such as memory and disk space) and your system may deny the request or cause the program to exit. Alternatively, your computer may become temporarily slow or unresponsive, or ImageMagick may be forced to abort. To avoid such situations, you can set limits in the <a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy.xml</a> configuration file.</p>

<p>Keep in mind that what is considered reasonable for one environment may not be suitable for another. For example, you may have ImageMagick sandboxed in a secure environment, while someone else may use it to process images on a publicly accessible website. Or, ImageMagick may be running on a host with a lot of memory, while another instance is running on a device with limited resources. In the case of the host with large memory, it may make sense to allow large image processing, but not on the device with limited resources. If you are using ImageMagick on a public website, you may want to increase security by disabling certain coders such as MVG or HTTPS.</p>

<p>To help you get started, ImageMagick provides a default policy with reasonable limits, but it is recommended that you modify it to suit your local environment. For example, you may want to set limits on memory usage, allowable paths for reading and writing, the number of images allowed in a sequence, the maximum time a workflow can run, and the amount of disk space allowed for image pixels. Ultimately, it is up to you to decide what limits are appropriate based on your specific environment and needs.</p>

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
  &lt;policy domain="path" rights="none" pattern="/etc/*"/>  &lt;!-- don't read sensitive paths -->
  &lt;policy domain="path" rights="none" pattern="@*"/>  &lt;!-- indirect reads not permitted -->
  &lt;policy domain="cache" name="memory-map" value="anonymous"/>
  &lt;policy domain="cache" name="synchronize" value="true"/>
  &lt;policy domain="cache" name="shared-secret" value="<em>my-secret-passphrase</em>" stealth="True"/>
  &lt;policy domain="system" name="shred" value="1"/>
&lt;/policymap></samp></pre>

<p>To prevent one session from consuming all available memory when processing multiple sessions at the same time, large images are cached to disk with this policy. If an image exceeds the pixel cache disk limit, the program will exit. Additionally, a time limit has been set to prevent any processing tasks from running for too long. If an image has a width or height larger than 8192 pixels, or if an image sequence has more than 32 frames, processing will stop and an exception will be thrown.</p>

<p>Starting with ImageMagick 7.0.1-8, you can prevent the use of any delegate or all delegates (by setting the pattern to "*"). Prior to these releases, you can use the domain of <samp>coder</samp> and set rights to none and the glob pattern to HTTPS to prevent delegate usage. Additionally, users are prevented from executing any image filters and from performing indirect reads. If you want to, for example, read text from a file (e.g. <samp>caption:@myCaption.txt</samp>), you'll need to disable this path policy.</p>

<p>Policy <a href="https://en.wikipedia.org/wiki/Glob_(programming)">glob patterns</a> are <em>case sensitive</em>.  To get expected behavior, coders and modules must be upper-case (e.g. "EPS" not "eps") or use a case-insensitive pattern such as <samp>[Pp][Nn][Gg]</samp>.</p>

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

<p>Note, numeric values in policies are floating-point with an optional SI prefix (e.g., 10MiB).</p>

<p>For additional details about resource limits and the policy configuration file, read <a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>.</p>

<p>As of ImageMagick 7.0.6-0, you can programmatically set the ImageMagick security policy with SetMagickSecurityPolicy() (MagickCore) or MagickSetSecurityPolicy() (MagickWand).</p>

<p>As of ImageMagick version 7.0.8-11, you can set a <samp>module</samp> security policy.  For example, to prevent Postscript or PDF interpretation, use:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="module" rights="none" pattern="{ps,pdf,xps}/></samp></pre>

<p>As of ImageMagick version 7.0-10-52, you can set a <samp>font</samp> policy.  Specify a path to a Unicode font that ImageMagick defaults to whenever the user does not specify a font preference:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="system" name="font" value="/usr/share/fonts/arial-unicode.ttf"/></samp></pre>

<p>Note, in file path glob patterns, use the backslash character (\) to escape characters that would otherwise be interpreted as special characters. For example:</p>
<pre class="bg-light text-dark mx-4"><samp>&lt;policy domain="path" rights="none" pattern="c:\\\\*"/></samp></pre>

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

<p>Doyensec provides a policy evaluator tool that can assist you in designing and auditing your security policy.  The tool is found at <a href="https://imagemagick-secevaluator.doyensec.com/">imagemagick-secevaluator.doyensec.com</a>.</p>

<h2><a class="anchor" id="synchronize"></a>Pixel Cache Synchronize Policy</h2>

<p>When writing image pixels to disk, ImageMagick first preallocates the disk file, which is faster than fully populating the file with zeros. To improve performance even further, the file is memory-mapped on disk. This can result in an increase in performance of up to 5 times, but there is a possibility that the disk file may run out of free space as it is populated, causing the operating system (OS) to throw a SIGBUS signal which prevents ImageMagick from continuing. To prevent a SIGBUS signal from occurring, use this security policy:</p>

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

<p>There are several ways to keep ImageMagick safer:<p>
<ol>
<li>Use web-safe image formats: Limiting ImageMagick to only reading or writing web-safe image formats like GIF, JPEG, and PNG can help increase security.</li>

<li>Customize the security policy: You can customize the security policy to fit the needs of your local environment or organizational policies. This policy can cover aspects such as memory usage, allowable paths for reading and writing, the number of images allowed in a sequence, the maximum time a workflow can run, the amount of disk space allowed for image pixels, a secret passphrase for remote connections, and which coders are permitted or denied.</li>

<li>Set limits on resource usage: You can set limits on resources such as memory usage, disk space, and workflow runtime to prevent potentially harmful situations.</li>

<li>Use sandboxing: Sandboxing is a security technique that allows you to run a program in a restricted environment to prevent it from accessing sensitive information or making changes to the system.</li>

<li>Disable potentially dangerous coders: If you are using ImageMagick on a public website, you may want to increase security by disabling certain coders such as MVG or HTTPS.</li>

<li>Prevent execution of image filters and indirect reads: You can prevent users from executing image filters and performing indirect reads to increase security.</li>

<li>Use a current version of ImageMagick: It is important to use a current version of ImageMagick to take advantage of the latest security fixes and updates.</li>
</ol>

</div>
