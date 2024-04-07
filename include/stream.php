<div>
<p class="text-center"><a href="#usage">Example Usage</a> • <a href="#options">Option Summary</a></p>

<p class="lead"><samp>Stream</samp> is a lightweight tool to stream one or more pixel components of the image or portion of the image to your choice of storage formats.  It writes the pixel components as they are read from the input image a row at a time making <samp>stream</samp> desirable when working with large images or when you require raw pixel components.</p>

<h2><a class="anchor" id="usage"></a>Example Usage</h2>

<p>We list a few examples of the <samp>stream</samp> command here to illustrate its usefulness and ease of use. To get started, lets stream the red, green, blue components of a 640x480 JPEG image to disk as unsigned characters:</p>

<pre class="p-3 mb-2 bg-light text-dark cli"><samp>magick stream -map rgb -storage-type char image.jpg pixels.dat
magick display -depth 8 -size 640x480 rgb:pixels.dat
</samp></pre>

<p>Here we extract a 100x100 region from a TIFF image in the grayscale format as doubles:</p>

<pre class="p-3 mb-2 bg-light text-dark cli"><samp>magick stream -map i -storage-type double -extract 100x100+30+40 image.tif gray.raw
</samp></pre>

<p>You can also associate the region to extract with the image filename:</p>

<pre class="p-3 mb-2 bg-light text-dark cli"><samp>magick stream -map i -storage-type double 'image.tif[100x100+30+40]' gray.raw
</samp></pre>

<p>Streaming requires that the image coder read the image pixels in row order.  Not all formats adhere to this requirement.  Verify a particular image format first, before you utilize streaming in your workflow.</p>


<h2><a class="anchor" id="options"></a>Option Summary</h2>

<p>The <samp>stream</samp> command recognizes these options.  Click on an option to get more details about how that option works.</p>

<table class="table table-sm table-hover table-striped table-responsive">
  <thead>
  <tr>
    <th scope="col">Option</th>
    <th scope="col">Description</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td><a href="/script/command-line-options.php#authenticate">-authenticate <var>value</var></a></td>
    <td>decrypt image with this password</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#channel">-channel <var>type</var></a></td>
    <td>apply option to select image channels</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#colorspace">-colorspace <var>type</var></a></td>
    <td>set image colorspace</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#debug">-debug <var>events</var></a></td>
    <td>display copious debugging information</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#define">-define <var>format:option</var></a></td>
    <td>define one or more image format options</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#density">-density <var>geometry</var></a></td>
    <td>horizontal and vertical density of the image</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#depth">-depth <var>value</var></a></td>
    <td>image depth</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#extract">-extract <var>geometry</var></a></td>
    <td>extract area from image</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#help">-help</a></td>
    <td>print program options</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#interlace">-interlace <var>type</var></a></td>
    <td>type of image interlacing scheme</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#interpolate">-interpolate <var>method</var></a></td>
    <td>pixel color interpolation method</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#limit">-limit <var>type value</var></a></td>
    <td>pixel cache resource limit</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#list">-list <var>type</var></a></td>
    <td>Color, Configure, Delegate, Format, Magic, Module, Resource, or Type</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#log">-log <var>format</var></a></td>
    <td>format of debugging information</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#stream-map">-map <var>components</var></a></td>
    <td>store pixels in this format.</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#monitor">-monitor</a></td>
    <td>monitor progress</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#quantize">-quantize <var>colorspace</var></a></td>
    <td>reduce image colors in this colorspace</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#quiet">-quiet</a></td>
    <td>suppress all warning messages</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#regard-warnings">-regard-warnings</a></td>
    <td>pay attention to warning messages.</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#respect-parentheses">-respect-parentheses</a></td>
    <td>settings remain in effect until parenthesis boundary.</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#sampling-factor">-sampling-factor <var>geometry</var></a></td>
    <td>horizontal and vertical sampling factor</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#seed">-seed <var>value</var></a></td>
    <td>seed a new sequence of pseudo-random numbers</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#set">-set <var>attribute value</var></a></td>
    <td>set an image attribute</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#size">-size <var>geometry</var></a></td>
    <td>width and height of image</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#storage-type">-storage-type <var>type</var></a></td>
    <td>store pixels with this storage type.</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#synchronize">-synchronize</a></td>
    <td>synchronize image to storage device</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#taint">-taint</a></td>
    <td>mark the image as modified</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#transparent-color">-transparent-color <var>color</var></a></td>
    <td>transparent color</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#verbose">-verbose</a></td>
    <td>print detailed information about the image</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#version">-version</a></td>
    <td>print version information</td>
  </tr>

  <tr>
    <td><a href="/script/command-line-options.php#virtual-pixel">-virtual-pixel <var>method</var></a></td>
    <td>access method for pixels outside the boundaries of the image</td>
  </tr>

  </tbody>
</table>

</div>
