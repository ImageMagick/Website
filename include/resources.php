<div class="magick-header">
<h1 class="text-center">Resources</h1>
<p class="text-center"><a href="#configure">Configuration Files</a> • <a href="#modules">Modules</a> • <a href="#fonts">Fonts</a> • <a href="#environment">Environment Variables</a></p>

<p class="lead magick-description">ImageMagick depends on a number of external resources including configuration files, loadable modules, fonts, and environment variables.</p>

<h2><a class="anchor" id="configure"></a>Configuration Files</h2>

<p>ImageMagick depends on a number of external configuration files detailed here:</p>

<dl class="row">
<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/coder.xml">coder.xml</a></dt>
  <dd class="col-md-8">Associate an image format with the specified coder module.

  ImageMagick has a number of coder modules to support the reading and/or writing of an image format (e.g. JPEG).  Some coder modules support more than one associated image format and the mapping between an associated format and its respective coder module is defined in this configuration file.  For example, the PNG coder module not only supports the PNG image format, but the JNG and MNG formats as well.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/colors.xml">colors.xml</a></dt>
  <dd class="col-md-8">Associate a color name with its red, green, blue, and alpha intensities.

  A number of command line options require a <a href="<?php echo $_SESSION['RelativePath']?>/../script/color.php">color parameter</a>.  It is often convenient to refer to a color by name (e.g. white) rather than by hex value (e.g. #fff).  This file maps a color name to its equivalent red, green, blue, and alpha intensities (e.g. for white, red = 255, green = 255, blue = 255, and alpha = 0).
  </dd>

<dt class="col-md-4"><a class="anchor" id="configure.xml"/><a href="<?php echo $_SESSION['RelativePath']?>/../source/configure.xml">configure.xml</a></dt>
  <dd class="col-md-8">Set ImageMagick build parameters and system-wide environment variables (e.g. MAGICK_TEMPORARY_PATH).
  As ImageMagick is built, a number of build parameters are saved to this configuration file.  They include the version, release date, dependent delegate libraries, and quantum depth among others.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/delegates.xml">delegates.xml</a></dt>
  <dd class="col-md-8">Associate delegate programs with certain image formats.

  ImageMagick relies on a number of delegate programs to support certain image formats such as <a href="http://ufraw.sourceforge.net/">ufraw-batch</a> to read raw camera formats or <a href="http://www.cs.wisc.edu/~ghost/">Ghostscript</a> to read Postscript images.  Use this configuration file to map an input or output format to an external delegate program.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/english.xml">english.xml</a></dt>
  <dd class="col-md-8">Associate message tags with English translations.</dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/francais.xml">francais.xml</a></dt>
  <dd class="col-md-8">Associate message tags with French translations.  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/locale.xml">locale.xml</a></dt>
  <dd class="col-md-8">Associate message tags with a  translation for your locale.

  ImageMagick has a number of informational, warning, and error messages that are represented as tags.  Tags are short descriptions of a message such as
  <var>FileNotFound</var> or <var>MemoryAllocationFailed</var>.  This configuration file lists locales that have a translation for each tag recognized by ImageMagick.  Currently only English and French translations are available in the <samp>english.xml</samp> and <samp>francais.xml</samp> configuration files.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/log.xml">log.xml</a></dt>
  <dd class="col-md-8">Configure logging parameters.
  ImageMagick is capable of spewing copious amounts of informational or debugging statements.  Use this file to configure how the information will appear in a log message and where you want the logging messages posted.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/mime.xml">mime.xml</a></dt>
  <dd class="col-md-8">Associate an internet media type with a unique identifier.
  Many files and data streams have identifiers that uniquely identify a
particular internet media type. For example, files in the "Corel Draw
drawing" format (mime type="application/vnd.corel-draw") are associated with
the filename pattern <samp>*.cdr</samp>, and also have an initial string of the
characters "CDRXvrsn". ImageMagick uses combinations of this information,
when available, to attempt to quickly determine the internet media type of a
file or data stream.
</dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/policy.xml">policy.xml</a></dt>
  <dd class="col-md-8">Configure ImageMagick <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.php">security policies</a>.
  By default any coder, delegate, filter, or file path is permitted.  Use a policy to deny access to, for example, the MPEG video delegate, or permit reading images from a file system but deny writing to that same file system.  Or use the resource policy to set resource limits.  Policies are useful for multi-user servers that want to limit the overall impact ImageMagick has on the system.  For example, to limit the maximum image size in memory to 100MP:

<ul><pre class="bg-light text-dark"><samp>&lt;policy domain="resource" name="area" value="100MP"/></samp></pre></ul>

Any image larger than this area limit is cached to disk rather than memory.

Use <samp>width</samp> to limit the maximum width of an image in pixels.  Exceed this limit and an exception is thrown and processing stops.

<ul><pre class="bg-light text-dark"><samp>&lt;policy domain="resource" name="width" value="8KP"/></samp></pre></ul>

To limit the elapsed time of any ImageMagick command to 5 minutes, use this policy:

<ul><pre class="bg-light text-dark"><samp>&lt;policy domain="resource" name="time" value="300"/></samp></pre></ul>
Define arguments for the memory, map, and disk resources with SI prefixes (.e.g 100MB).  In addition, resource policies are maximums for each instance of ImageMagick (e.g. policy memory limit 1GB, the <samp>-limit 2GB</samp> option exceeds policy maximum so memory limit is 1GB). </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/quantization-table.xml">quantization-table.xml</a></dt>
  <dd class="col-md-8">Custom JPEG quantization tables. Activate with <samp>-define:q-table=quantization-table.xml</samp>.</dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/thresholds.xml">thresholds.xml</a></dt>
  <dd class="col-md-8">Set threshold maps for ordered posterized dither.</dd>

<dt class="col-md-4"><a class="anchor" id="type.xml"></a><a href="<?php echo $_SESSION['RelativePath']?>/../source/type.xml">type.xml</a></dt>
  <dd class="col-md-8">Configure fonts.
  Define the font name, family, foundry, style, format, metrics, and glyphs for any font you want to use within ImageMagick.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/type-ghostscript.xml">type-ghostscript.xml</a></dt>
  <dd class="col-md-8">Configure <a href="http://www.cs.wisc.edu/~ghost/">Ghostscript</a> fonts.
  The Ghostscript package includes a number of <a href="https://sourceforge.net/projects/gs-fonts/">fonts</a> that can be accessed with ImageMagick.
  </dd>

<dt class="col-md-4"><a href="<?php echo $_SESSION['RelativePath']?>/../source/type-windows.xml">type-windows.xml</a></dt>
  <dd class="col-md-8">Associate names with Windows font glyphs.</dd>
</dl>

<p>Under Linux and Linux, ImageMagick searches for each of the configuration files listed above by looking in the locations given below, in order, and loads them if found:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_CONFIGURE_PATH
$PREFIX/etc/ImageMagick-<?php echo(MagickMajorReleaseText); ?> 
$PREFIX/share/ImageMagick-<?php echo(MagickMajorReleaseText); ?> 
$XDG_CACHE_HOME/ImageMagick
$HOME/.config/ImageMagick
&lt;<var>client path</var>&gt;/etc/ImageMagick</samp></pre></ul>

<p>The environmental variable $PREFIX is the default install path (e.g. <samp>/usr/local</samp>). The <var>client path</var> is the execution path of your ImageMagick client (e.g. <samp>/usr/local</samp>) .</p>

<p>For the Linux or Linux pre-compiled uninstalled binary distributions, the configuration load order is:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_CONFIGURE_PATH
$MAGICK_HOME/etc/ImageMagick-<?php echo(MagickMajorReleaseText); ?> 
$MAGICK_HOME/share/ImageMagick-<?php echo(MagickMajorReleaseText); ?> 
$PREFIX/share/ImageMagick-<?php echo(MagickMajorReleaseText); ?> 
$XDG_CACHE_HOME/ImageMagick
$HOME/.config/ImageMagick/
&lt;<var>client path</var>&gt;/etc/ImageMagick
&lt;<var>current directory</var>&gt;</samp></pre></ul>

<p>Under Windows, ImageMagick searches for these configuration files in the following order, and loads them if found:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_CONFIGURE_PATH
&lt;<var>windows registry</var>&gt;
$PREFIX/config
$USERPROFILE/.config/ImageMagick
&lt;<var>client path</var>&gt;</samp></pre></ul>

<p>Above, $PREFIX is the default install path, typically <samp>c:\\Program Files\\ImageMagick-<?php echo(MagickLibVersionText); ?></samp>.</p>

<p>For an uninstalled Windows installation, the configuration load order is:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_CONFIGURE_PATH
$MAGICK_HOME
$USERPROFILE/.config/ImageMagick
<var>client path</var>
&lt;<var>current directory</var>&gt;</samp></pre></ul>

<p>If a configuration file cannot not be found, ImageMagick relies on built-in default values.</p>

<h2><a class="anchor" id="modules"></a>Modules</h2>

<h4>Coders</h4>
<p>An image coder (i.e. encoder / decoder) is responsible for registering, optionally classifying, optionally reading, optionally writing, and unregistering one image format (e.g. PNG, GIF, JPEG, etc.).  ImageMagick searches for coders in the following order and it uses the first match found:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_HOME/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/coders
&lt;<var>client path</var>&gt;/../lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/coders
$MAGICK_HOME/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/coders
$MAGICK_HOME/share/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/coders
$XDG_CACHE_HOME/ImageMagick
$HOME/.config/ImageMagick
&lt;<var>client path</var>&gt;/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/coders</samp></pre></ul>

<h4>Filters</h4>
<p>ImageMagick provides a convenient mechanism for adding your own custom image processing algorithms.  ImageMagick searches for filters in the following order and it uses the first match found:</p>
<ul><pre class="bg-light text-dark"><samp>$MAGICK_HOME/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/filters
&lt;<var>client path</var>&gt;/../lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/filters
$MAGICK_HOME/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/filters
$MAGICK_HOME/share/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/filters
$XDG_CACHE_HOME/ImageMagick
$HOME/.config/ImageMagick
&lt;<var>client path</var>&gt;/lib/ImageMagick-<?php echo(MagickLibVersionText); ?>/modules-Q16/filters</samp></pre></ul>

<h2><a class="anchor" id="fonts"></a>Fonts</h2>

<p>ImageMagick is able to load raw TrueType and Postscript font files.  It searches for the font configuration file, <a href="#type.xml">type.xml</a>, in the following order, and loads them if found:</p>

<ul><pre class="bg-light text-dark"><samp>$MAGICK_CONFIGURE_PATH
$MAGICK_HOME/etc/ImageMagick/-<?php echo(MagickLibVersionText); ?>

$MAGICK_HOME/share/ImageMagick-<?php echo(MagickLibVersionText); ?>

$XDG_CACHE_HOME/ImageMagick
$HOME/.config/ImageMagick
&lt;<var>client path</var>&gt;/etc/ImageMagick
$MAGICK_FONT_PATH</samp></pre></ul>

<h2><a class="anchor" id="environment"></a>Environment Variables</h2>

<p>Environment variables recognized by ImageMagick include:</p>

<div class="table-responsive" style="font-size:smaller !important;">
<table class="table table-sm table-hover">
  <tr>
    <td>HOME</td>
    <td>Set path to search for configuration files in <samp>$HOME/.config/ImageMagick</samp> if the directory exists.</td>
  </tr>
  <tr>
    <td>LD_LIBRARY_PATH</td>
    <td>Set path to the ImageMagick shareable libraries and other dependent libraries.</td>
  </tr>
  <tr>
    <td>MAGICK_AREA_LIMIT</td>
    <td>Set the maximum <var>width * height</var> of an image that can reside in the pixel cache memory.  Images that exceed the area limit are cached to disk (see <a href="#disk-limit">MAGICK_DISK_LIMIT</a>) and optionally memory-mapped.</td>
  </tr>
  <tr>
    <td>MAGICK_CODER_FILTER_PATH</td>
    <td>Set search path to use when searching for filter process modules (invoked via  <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#process">-process</a>).  This path permits the user to extend ImageMagick's image processing functionality by adding loadable modules to a preferred location rather than copying them into the ImageMagick installation directory.  The formatting of the search path is similar to operating system search paths (i.e. colon delimited for Linux, and semi-colon delimited for Microsoft Windows). This user specified search path is searched before trying the <a href="#modules">default search path</a>.</td>
  </tr>
  <tr>
    <td>MAGICK_CODER_MODULE_PATH</td>
    <td>Set path where ImageMagick can locate its coder modules.  This path permits the user to arbitrarily extend the image formats supported by ImageMagick by adding loadable coder modules from an preferred location rather than copying them into the ImageMagick installation directory.  The formatting of the search path is similar to operating system search paths (i.e. colon delimited for Linux, and semi-colon delimited for Microsoft Windows). This user specified search path is searched before trying the <a href="#modules">default search path</a>.</td>
  </tr>
  <tr>
    <td>MAGICK_CONFIGURE_PATH</td>
    <td>Set path where ImageMagick can locate its configuration files.  Use this search path to search for configuration (.xml) files. The formatting of the search path is similar to operating system search paths (i.e. colon delimited for Linux, and semi-colon delimited for Microsoft Windows). This user specified search path is searched before trying the <a href="#configure">default search path</a>.</td>
  </tr>
  <tr>
    <td>MAGICK_DEBUG</td>
    <td>Set debug options.  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#debug">-debug</a> for a description of debugging options.</td>
  </tr>
  <tr>
    <td><a class="anchor" id="disk-limit"></a>MAGICK_DISK_LIMIT</td>
    <td>Set maximum amount of disk space in bytes permitted for use by the pixel cache.  When this limit is exceeded, the pixel cache is not be created and an error message is returned.</td>
  </tr>
  <tr>
    <td>MAGICK_ERRORMODE</td>
    <td>Set the process error mode (Windows only).  A typical use might be a value of 1 to prevent error mode dialogs from displaying a message box and hanging the application.</td>
  </tr>
  <tr>
    <td>MAGICK_FILE_LIMIT</td>
    <td>Set maximum number of open pixel cache files.  When this limit is exceeded, any subsequent pixels cached to disk are closed and reopened on demand.  This behavior permits a large number of images to be accessed simultaneously on disk, but with a speed penalty due to repeated open/close calls.</td>
  </tr>
  <tr>
    <td>MAGICK_FONT_PATH</td>
    <td>Set path ImageMagick searches for TrueType and Postscript Type1 font files.  This path is only consulted if a particular font file is not found in the current directory.</td>
  </tr>
  <tr>
    <td>MAGICK_HEIGHT_LIMIT</td>
    <td>Set the maximum <var>height</var> of an image.</td>
  </tr>
  <tr>
    <td>MAGICK_HOME</td>
    <td>Set the path at the top of ImageMagick installation directory.  This path is consulted by <var>uninstalled</var> builds of ImageMagick which do not have their location hard-coded or set by an installer.</td>
  </tr>
  <tr>
    <td>MAGICK_LIST_LENGTH_LIMIT</td>
    <td>Set the maximum length of an image sequence.</td>
  </tr>
  <tr>
    <td><a class="anchor" id="map-limit"></a>MAGICK_MAP_LIMIT</td>
    <td>Set maximum amount of memory map in bytes to allocate for the pixel cache.  When this limit is exceeded, the image pixels are cached to disk (see MAGICK_DISK_LIMIT).</td>
  </tr>
  <tr>
    <td>MAGICK_MEMORY_LIMIT</td>
    <td>Set maximum amount of memory in bytes to allocate for the pixel cache from the heap.  When this limit is exceeded, the image pixels are cached to memory-mapped disk (see <a href="#map-limit">MAGICK_MAP_LIMIT</a>).</td>
  </tr>
  <tr>
    <td>MAGICK_OCL_DEVICE</td>
    <td>Set to <samp>off</samp> to disable hardware acceleration of certain accelerated algorithms (e.g. blur, convolve, etc.).</td>
  </tr>
  <tr>
    <td>MAGICK_PRECISION</td>
    <td>Set the maximum number of significant digits to be printed.</td>
  </tr>
  <tr>
    <td>MAGICK_SHRED_PASSES</td>
    <td>If you want to keep the temporary files ImageMagick creates private, overwrite them with zeros or random data before they are removed.  On the first pass, the file is zeroed.  For subsequent passes, random data is written.</td>
  </tr>
  <tr>
    <td>MAGICK_SYNCHRONIZE</td>
    <td>Set to "true" to ensure all image data is fully flushed and synchronized to disk. There is a performance penalty, however, the benefits include ensuring a valid image file in the event of a system crash and early reporting if there is not enough disk space for the image pixel cache.</td>
  </tr>
  <tr>
    <td>MAGICK_TEMPORARY_PATH</td>
    <td>Set path to store temporary files.</td>
  </tr>
  <tr>
    <td>MAGICK_THREAD_LIMIT</td>
    <td>Set maximum parallel threads.  Many ImageMagick algorithms run in parallel on multi-processor systems.  Use this environment variable to set the maximum number of threads that are permitted to run in parallel.</td>
  </tr>
  <tr>
    <td>MAGICK_THROTTLE_LIMIT</td>
    <td>Periodically yield the CPU for at least the time specified in milliseconds.</td>
  </tr>
  <tr>
    <td>MAGICK_TIME_LIMIT</td>
    <td>Set maximum time in seconds.  When this limit is exceeded, an exception is thrown and processing stops.</td>
  </tr>
  <tr>
    <td>MAGICK_WIDTH_LIMIT</td>
    <td>Set the maximum <var>width</var> of an image.</td>
  </tr>
  <tr>
    <td>SOURCE_DATE_EPOCH</td>
    <td>A UNIX timestamp, defined as the number of seconds, excluding leap seconds, since <samp>01 Jan 1970 00:00:00 UTC</samp>.</td>
  </tr>
</table></div>

<p>Define arguments for the <samp>MAGICK_MEMORY_LIMIT</samp>, <samp>MAGICK_DISK_LIMIT</samp>, and <samp>MAGICK_MEMORY_LIMIT</samp> environment variables with SI prefixes (.e.g <samp>100MB</samp>). <samp>MAGICK_WIDTH_LIMIT</samp>, <samp>MAGICK_HEIGHT_LIMIT</samp> and <samp>MAGICK_AREA_LIMIT</samp> accepts pixel suffixes such as MP for mega-pixels (e.g. 100MP).  Note, you can restrict limits relative to any <a href="<?php echo $_SESSION['RelativePath']?>/../script/security-policy.xml">security policies</a>, but you cannot relax them.</p>

</div>
