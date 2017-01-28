<div class="magick-header">
<p class="text-center"><a href="#policy">Security Policy </a> • <a href="#other">Other Security Considerations</a></p>


<p class="lead magick-description">ImageMagick includes a security policy configuration file, <code>policy.xml</code>. It is useful for limiting the resources consumed by ImageMagick and can help prevent a denial-of-service or other exploits.</p>

<p>As an example, suppose you download an image from the internet and unbeknownst to you its been crafted to generate a 20000 by 20000 pixel image. ImageMagick attempts to allocate enough resources (memory, disk) and your system will likely deny the resource request and exit. However, its also possible that your computer might be temporarily sluggish or unavailable or ImageMagick may abort. To prevent such a scenario, you can set limits in the <code>policy.xml</code> configuration file. You may ask why ImageMagick does not already include reasonable limits? Simply because what is reasonable in your environment, might not be reasonable to someone else. For example, one user has access to a host with 1TB of memory whereas another user is running ImageMagick on an iPhone. By policy, permitting giga-pixel image processing on the large memory host makes sense, not so much for the resource constrained iPhone. If you utilize ImageMagick from a public website, you may want to increase security by preventing usage of the MVG or HTTPS coders. Only you can decide what are reasonable limits taking in consideration your environment. We provide this policy with reasonable limits and encourage you to modify it to suit your local environment:</p>

<pre class="pre-scrollable">
&lt;policymap>
  &lt;policy domain="resource" name="temporary-path" value="/tmp"/>
  &lt;policy domain="resource" name="memory" value="256MiB"/>
  &lt;policy domain="resource" name="map" value="512MiB"/>
  &lt;policy domain="resource" name="width" value="8KP"/>
  &lt;policy domain="resource" name="height" value="8KP"/>
  &lt;policy domain="resource" name="area" value="128MB"/>
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
&lt;/policymap>
</pre>

<p>Since we process multiple simultaneous sessions, we do not want any one session consuming all the available memory.With this policy, large images are cached to disk. If the image is too large and exceeds the pixel cache disk limit, the program exits. In addition, we place a time limit to prevent any run-away processing tasks. If any one image has a width or height that exceeds 8192 pixels, an exception is thrown and processing stops. As of ImageMagick 7.0.1-8 and 6.9.4-6, you can prevent the use of any delegate or all delegates (set the pattern to "*"). Note, prior to these releases, use a domain of <code>coder</code> to prevent delegate usage (e.g. <code>domain="coder" rights="none" pattern="HTTPS"</code>). The policy also prevents indirect reads. If you want to, for example, read text from a file (e.g. <code>caption:@myCaption.txt</code>), you'll need to disable the <code>path</code> policy.</p>

<p>Here is what you can expect when you restrict the HTTPS coder, for example:</p>

<pre>
$ convert https://www.imagemagick.org/image/wizard.png wizard.jpg
convert: not authorized `HTTPS'
convert: unable to open file: No such file or directory
convert: no images defined `wizard.jpg'
</pre>

<p>As of ImageMagick version 7.0.4-7 and 6.9.7-7, you can conveniently deny access to all coders except for a small subset of proven safe image types.  For example,</p>

<pre>
  &lt;policy domain="coder" rights="none" pattern="*" />
  &lt;policy domain="coder" rights="all" pattern="MAGICK,GIF,JPEG,PNG}" />
</pre>

<p>You can verify your policy changes are in effect with this command:</p>

<pre class="pre-scrollable">
-> identify -list policy
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
    value: 128MB
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
  Policy: Cache
    name: shared-secret
    value: replace with your secret phrase
  Policy: Path
    rights: None 
    pattern: @*

Path: [built-in]
  Policy: Undefined
    rights: None 
</pre>

<p>For additional details about resource limits and the policy configuration file, read <a href="<?php echo $_SESSION['RelativePath']?>/../script/resources.php">Resources</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/architecture.php">Architecture</a>.</p>

<h2 class="magick-header"><a id="other"></a>Other Security Considerations</h2>

<p>If you spot a security flaw in ImageMagick, <a href="<?php echo $_SESSION['RelativePath']?>/../script/contact.php">contact us</a> and select Security Issue as the issue.  Alternatively, post your concern to <a href="https://github.com/ImageMagick/ImageMagick/issues">GitHub</a>.  Be sure to include how to reproduce the security flaw and a link to any images needed to reproduce the flaw.</p>

<p>In addition to the security policy, you can make ImageMagick safer by ...</p>
<ul>
<li>keeping ImageMagick up-to-date.  The latest releases have fixes for any security flaws we discovered in the past.</li>
<li>sanitizing any filenames or command line options you pass to ImageMagick.</li>
<li>running ImageMagick in a sanitized software container such as Docker.</li>
<li>running ImageMagick as the least-privileged user (e.g. 'nobody').</li>
<li>explicitly setting the image file type.  For example, use the filename <code>png:image.png</code> rather than <code>image.png</code>.  Without an explicit image type in the filename, ImageMagick guesses the image type.</li>
</ul>

</div>
