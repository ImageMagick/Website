<div class="magick-header">
<h1 class="text-center">Advanced Linux Installation</h1>
<p class="text-center"><a href="#download">Download &amp; Unpack</a> • <a href="#configure">Configure</a>  • <a href="#build">Build</a> • <a href="#install">Install</a> • <a href="#linux">Linux-specific Build Instructions</a> • <a href="#macosx">Mac OS X-specific Build Instructions</a> • <a href="#mingw">MinGW-specific Build Instructions</a> • <a href="#problems">Dealing with Unexpected Problems</a></p>

<p  class="lead magick-description">It's possible you don't want to concern yourself with advanced installation under Linux or Linux systems.  If so, you also have the option of installing a pre-compiled <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php#linux">binary release</a>  or if you still want to install from source without all the fuss see the simple <a href="<?php echo $_SESSION['RelativePath']?>/../script/install-source.php#linux">Install From Source</a> instructions.  However, if you want to customize the configuration and installation of ImageMagick under Linux or Linux systems, lets begin.</p>

<h2><a class="anchor" id="download"></a>Download &amp; Unpack</h2>

<p>ImageMagick builds on a variety of Linux and Linux-like operating systems including Linux, Solaris, FreeBSD, Mac OS X, and others.  A compiler is required and fortunately almost all modern Linux systems have one.  Download <a href="https://download.imagemagick.org/ImageMagick/download/ImageMagick.tar.gz">ImageMagick.tar.gz</a> from <a href="https://imagemagick.org/download">imagemagick.org</a> or a <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">mirror</a> and verify the distribution against its <a href="https://download.imagemagick.org/ImageMagick/download/digest.rdf">message digest</a>.</p>

<p>Unpack the distribution it with this command:</p>

<ul><pre class="bg-light text-dark"><samp>tar xvzf ImageMagick.tar.gz</samp></pre></ul>

<p>Now that you have the ImageMagick Linux/Linux source distribution unpacked, let's configure it.</p>


<h2><a class="anchor" id="configure"></a>Configure</h2>

<p>The configure script looks at your environment and decides what it can cobble together to get ImageMagick compiled and installed on your system.  This includes finding a compiler, where your compiler header files are located (e.g. stdlib.h), and if any delegate libraries are available for ImageMagick to use (e.g. JPEG, PNG, TIFF, etc.).  If you are willing to accept configure's default options, and build from within the source directory, you can simply type:</p>

<?php crt("cd ImageMagick-" . MagickLibVersionText . MagickLibSubversion, "", "./configure"); ?>

<p>Watch the configure script output to verify that it finds everything that
 you think it should.  Pay particular attention to the last lines of the script output.  For example, here is a recent report from our system:</p>

<ul><pre class="pre-scrollable bg-light text-dark"><samp>ImageMagick is configured as follows. Please verify that this configuration
matches your expectations.

Host system type: x86_64-unknown-linux-gnu
Build system type: x86_64-unknown-linux-gnu

                  Option                     Value
-------------------------------------------------------------------------------
Shared libraries  --enable-shared=yes		yes
Static libraries  --enable-static=yes		yes
Module support    --with-modules=yes		yes
GNU ld            --with-gnu-ld=yes		yes
Quantum depth     --with-quantum-depth=16	16
High Dynamic Range Imagery
                  --enable-hdri=no		no

Delegate Configuration:
BZLIB             --with-bzlib=yes		yes
Autotrace         --with-autotrace=yes	yes
DJVU              --with-djvu=yes		no
DPS               --with-dps=yes		no
FlashPIX          --with-fpx=yes		no
FontConfig        --with-fontconfig=yes	yes
FreeType          --with-freetype=yes		yes
GhostPCL          None			pcl6 (unknown)
GhostXPS          None			gxps (unknown)
Ghostscript       None			gs (8.63)
result_ghostscript_font_dir='none'
Ghostscript fonts --with-gs-font-dir=default
Ghostscript lib   --with-gslib=yes		no (failed tests)
Graphviz          --with-gvc=yes		yes
JBIG              --with-jbig=		no
JPEG v1           --with-jpeg=yes		yes
JPEG-2000         --with-jp2=yes		yes
LCMS              --with-lcms=yes		yes
LQR               --with-lqr=yes		no
Magick++          --with-magick-plus-plus=yes	yes
OpenEXR           --with-openexr=yes		yes
PERL              --with-perl=yes		/usr/bin/perl
PNG               --with-png=yes		yes
RSVG              --with-rsvg=yes		yes
TIFF              --with-tiff=yes		yes
result_windows_font_dir='none'
Windows fonts     --with-windows-font-dir=
WMF               --with-wmf=yes		yes
X11               --with-x=			yes
XML               --with-xml=yes		yes
ZLIB              --with-zlib=yes		yes

X11 Configuration:
      X_CFLAGS        =
      X_PRE_LIBS      = -lSM -lICE
      X_LIBS          =
      X_EXTRA_LIBS    =

Options used to compile and link:
  PREFIX          = /usr/local
  EXEC-PREFIX     = /usr/local
  VERSION         = 6.4.8
  CC              = gcc -std=gnu99
  CFLAGS          = -fopenmp -g -O2 -Wall -W -pthread
  MAGICK_CFLAGS   = -fopenmp -g -O2 -Wall -W -pthread
  CPPFLAGS        = -I/usr/local/include/ImageMagick
  PCFLAGS         = -fopenmp
  DEFS            = -DHAVE_CONFIG_H
  LDFLAGS         = -lfreetype
  MAGICK_LDFLAGS  = -L/usr/local/lib -lfreetype
  LIBS            = -lMagickCore-Q16 -llcms -ltiff -lfreetype -ljpeg -lfontconfig -lXext
                    -lSM -lICE -lX11 -lXt -lbz2 -lz -lm -lgomp -lpthread -lltdl
  CXX             = g++
  CXXFLAGS        = -g -O2 -Wall -W -pthread</samp></pre></ul>

<p>You can influence choice of compiler, compilation flags, or libraries of the configure script by setting initial values for variables in the configure command line. These include, among others:</p>

<dl class="row">
<dt class="col-md-4">CC</dt>
  <dd class="col-md-8">Name of C compiler (e.g. <samp>cc -Xa</samp>) to use.</dd>
<dt class="col-md-4">CXX</dt>
  <dd class="col-md-8">Name of C++ compiler to use (e.g. <samp>CC</samp>).</dd>
<dt class="col-md-4">CFLAGS</dt>
  <dd class="col-md-8">Compiler flags (e.g. <samp>-g -O2</samp>) to compile C code.</dd>
<dt class="col-md-4">CXXFLAGS</dt>
  <dd class="col-md-8">Compiler flags (e.g. <samp>-g -O2</samp>) to compile C++ code.</dd>
<dt class="col-md-4">CPPFLAGS</dt>
  <dd class="col-md-8">Include paths (.e.g. <samp>-I/usr/local</samp>) to look for header files.</dd>
<dt class="col-md-4">LDFLAGS</dt>
  <dd class="col-md-8">Library paths (.e.g. <samp>-L/usr/local</samp>) to look for libraries systems that support the notion of a library run-path may require an additional argument in order to find shared libraries at run time. For example, the Solaris linker requires an argument of the form <var>-R/path</var>.  Some Linux systems will work with <samp>-rpath /usr/local/lib</samp>, while some other Linux systems who's gcc does not pass <samp>-rpath</samp> to the linker, require an argument of the form <samp>-Wl,-rpath,/usr/local/lib</samp>.</dd>
<dt class="col-md-4">LIBS</dt>
  <dd class="col-md-8">Extra libraries (.e.g. <samp>-l/usr/local/lib</samp>) required to link.</dd>
</dl>

<p>Here is an example of setting configure variables from the command line:</p>

<ul><pre class="bg-light text-dark"><samp>configure CC=c99 CFLAGS=-O2 LDFLAGS='-L/usr/local/lib -R/usr/local/lib' LIBS=-lposix</samp></pre></ul>

<p>Any variable (e.g. CPPFLAGS or LDFLAGS) which requires a directory path must specify an absolute path rather than a relative path.</p>

<p>Configure can usually find the X include and library files automagically, but if it doesn't, you can use the <var>--x-includes=path</var> and <var>--x-libraries=path</var> options to specify their locations.</p>

<p>The configure script provides a number of ImageMagick specific options.  When disabling an option <var>--disable-something</var> is equivalent to specifying <var>--enable-something=no</var> and <var>--without-something</var> is equivalent to <var>--with-something=no</var>.  The configure options are as follows (execute <samp>configure --help</samp> to see all options).</p>

<p> ImageMagick options represent either features to be enabled, disabled, or packages to be included in the build.  When a feature is enabled (via <var>--enable-something</var>), it enables code already present in ImageMagick.  When a package is enabled (via <var>--with-something</var>), the configure script will search for it, and if is properly installed and ready to use (headers and built libraries are found by compiler) it will be included in the build.  The configure script is delivered with all features disabled and all packages enabled. In general, the only reason to disable a package is if a package exists but it is unsuitable for the build (perhaps an old version or not compiled with the right compilation flags).</p>

<p>Here are the optional features you can configure:</p>

<div class="table-responsive" style="font-size:smaller !important;">
<table class="table table-sm table-hover">
  <tr>
    <td>--enable-shared</td>
    <td>build the  shared libraries and support for loading coder and process modules. Shared libraries are preferred because they allow programs to share common code, making the individual programs much smaller. In addition shared libraries are required in order for PerlMagick to be dynamically loaded by an installed PERL (otherwise an additional PERL (PerlMagick) must be installed.
  <br /><br />
  ImageMagick built with delegates (see MAGICK PLUG-INS below) can pose additional challenges. If ImageMagick is built using static libraries (the default without <samp>--enable-shared</samp>) then delegate libraries may be built as either static libraries or shared libraries. However, if ImageMagick is built using shared libraries, then all delegate libraries must also be built as shared libraries.  Static libraries usually have the extension <samp>.a</samp>, while shared libraries typically have extensions like <samp>.so</samp>, <samp>.sa</samp>, or <samp>.dll</samp>. Code in shared libraries normally must compiled using a special compiler option to produce Position Independent Code (PIC). The only time this not necessary is if the platform compiles code as PIC by default.
  <br /><br />
  PIC compilation flags differ from vendor to vendor (gcc's is <samp>-fPIC</samp>). However, you must compile all shared library source with the same flag (for gcc use <samp>-fPIC</samp> rather than <samp>-fpic</samp>). While static libraries are normally created using an archive tool like <samp>ar</samp>, shared libraries are built using special linker or compiler options (e.g. <samp>-shared</samp> for gcc).
  <br/><br />
  If <samp>--enable-shared</samp> is not specified, a new PERL interpreter (PerlMagick) is built which is statically linked against the PerlMagick extension. This new interpreter is installed into the same directory as the ImageMagick utilities. If <samp>--enable-shared</samp> is specified, the PerlMagick extension is built as a dynamically loadable object which is loaded into your current PERL interpreter at run-time. Use of dynamically-loaded extensions is preferable over statically linked extensions so use <samp>--enable-shared</samp> if possible (note that all libraries used with ImageMagick must be shared libraries!).</td>
  </tr>
  <tr>
    <td>--disable-static</td>
    <td>static archive libraries (with extension <samp>.a</samp>) are not built.  If you are building shared libraries, there is little value to building static libraries. Reasons to build static libraries include: 1) they can be easier to debug; 2) clients do not have external dependencies (i.e. libMagick.so); 3) building PIC versions of the delegate libraries may take additional expertise and effort; 4) you are unable to build shared libraries.</td>
  </tr>
  <tr>
    <td>--disable-installed</td>
    <td>disable building an installed ImageMagick (default enabled).
  <br/><br />
  By default the ImageMagick build is configured to formally install into a directory tree.  This the most secure and reliable way to install ImageMagick.  Use this option to configure ImageMagick so that it doesn't use hard-coded paths and locates support files by computing an offset path from the executable (or from the location specified by the MAGICK_HOME environment variable. The uninstalled configuration is ideal for binary distributions which are expected to extract and run in any location.</td>
  </tr>
  <tr>
    <td>--enable-ccmalloc</td>
    <td>enable 'ccmalloc' memory debug support (default disabled).</td>
  </tr>
  <tr>
    <td>--enable-prof</td>
    <td>enable 'prof' profiling support (default disabled).</td>
  </tr>
  <tr>
    <td>--enable-gprof</td>
    <td>enable 'gprof' profiling support (default disabled).</td>
  </tr>
  <tr>
    <td>--enable-gcov</td>
    <td>enable 'gcov' profiling support (default disabled).</td>
  </tr>
  <tr>
    <td>--disable-openmp</td>
    <td>disable OpenMP (default enabled).
  <br/><br />
  Certain ImageMagick algorithms, for example convolution, can achieve a significant speed-up with the assistance of the OpenMP API when running on modern dual and quad-core processors.</td>
  </tr>
  <tr>
    <td>--disable-largefile</td>
    <td>disable support for large (64 bit) file offsets.
  <br/><br />
  By default, ImageMagick is compiled with support for large files (&gt; 2GB on a 32-bit CPU) if the operating system supports large files.  Some applications which use the ImageMagick library may also require support for large files. By disabling support for large files via <samp>--disable-largefile</samp>, dependent applications do not require special compilation options for large files in order to use the library.</td>
  </tr>
</table></div>

<p>Here are the optional packages you can configure:</p>

<div class="table-responsive" style="font-size:smaller !important;">
<table class="table table-sm table-hover">
  <tr>
    <td>--with-quantum-depth</td>
    <td>number of bits in a pixel quantum (default 16).
  <br/><br />
  Use this option to specify the number of bits to use per pixel quantum (the size of the red, green, blue, and alpha pixel components). For example, <samp>--with-quantum-depth=8</samp> builds ImageMagick using 8-bit quantums.  Most computer display adapters use 8-bit quantums. Currently supported arguments are 8, 16, or 32. We recommend the default of 16 because some image formats support 16 bits-per-pixel. However, this option is important in determining the overall run-time performance of ImageMagick.
  <br /><br />
  The number of bits in a quantum determines how many values it may contain. Each quantum level supports 256 times as many values as the previous level. The following table shows the range available for various quantum sizes.
  <br /><br />
<ul><pre class="bg-light text-dark"><samp>Quantum Depth     Valid Range (Decimal)   Valid Range (Hex)
    8             0-255                   00-FF
   16             0-65535                 0000-FFFF
   32             0-4294967295            00000000-FFFFFFFF</samp></pre></ul>
  <br /><br />
  Larger pixel quantums can cause ImageMagick to run more slowly and to require more memory. For example, using sixteen-bit pixel quantums can cause ImageMagick to run 15% to 50% slower (and take twice as much memory) than when it is built to support eight-bit pixel quantums.
  <br /><br />
  The amount of virtual memory consumed by an image can be computed by the equation <var>(5 * Quantum Depth * Rows * Columns) / 8</var>. This an important consideration when resources are limited, particularly since processing an image may require several images to be in memory at one time. The following table shows memory consumption values for a 1024x768 image:
  <br /><br />
<ul><pre class="bg-light text-dark"><samp>Quantum Depth   Virtual Memory
     8               3MB
    16               8MB
    32              15MB</samp></pre></ul>
</td>
  </tr>
  <tr>
  </tr>
  <tr>
      <td>--enable-hdri</td>
    <td>accurately represent the wide range of intensity levels.</td>
  </tr>
  <tr>
      <td>--enable-osx-universal-binary</td>
    <td>build a universal binary on OS X.</td>
  </tr>
  <tr>
      <td>--without-modules</td>
    <td>disable support for dynamically loadable modules.
  <br /><br />
  Image coders and process modules are built as loadable modules which are installed under the directory <var>[prefix]/lib/ImageMagick-X.X.X/modules-QN</var> (where 'N' equals 8, 16, or 32 depending on the quantum depth) in the subdirectories <samp>coders</samp> and <samp>filters</samp> respectively. The modules build option is only available in conjunction with <samp>--enable-shared</samp>. If <samp>--enable-shared</samp> is not also specified, support for building modules is disabled.  Note that if <samp>--enable-shared</samp> and <samp>--disable-modules</samp> are specified, the module loader is active (allowing extending an installed ImageMagick by simply copying a module into place) but ImageMagick itself is not built using modules.</td>
  </tr>
  <tr>
    <td>--with-cache</td>
    <td>set pixel cache threshold (defaults to available memory).
  <br /><br />
  Specify a different image pixel cache threshold with this option. This sets the maximum amount of heap memory that ImageMagick is allowed to consume before switching to using memory-mapped temporary files to store raw pixel data.</td>
  </tr>
  <tr>
    <td>--without-threads</td>
    <td>disable threads support.
  <br /><br />
  By default, the ImageMagick library is compiled with multi-thread support.  If this undesirable, specify <samp>--without-threads</samp>.</td>
  </tr>
  <tr>
    <td>--with-frozenpaths</td>
    <td>enable frozen delegate paths.
  <br /><br />
  Normally, external program names are substituted into the <samp>delegates.xml</samp> configuration file without full paths. Specify this option to enable saving full paths to programs using locations determined by configure. This useful for environments where programs are stored under multiple paths, and users may use different PATH settings than the person who builds ImageMagick.</td>
  </tr>
  <tr>
    <td>--without-magick-plus-plus</td>
    <td>disable build/install of Magick++.
  <br /><br />
  Disable building Magick++, the C++ application programming interface to ImageMagick. A suitable C++ compiler is required in order to build Magick++. Specify the CXX configure variable to select the C++ compiler to use (default <samp>g++</samp>), and CXXFLAGS to select the desired compiler optimization and debug flags (default <samp>-g -O2</samp>). Antique C++ compilers will normally be rejected by configure tests so specifying this option should only be necessary if Magick++ fails to compile.</td>
  </tr>
  <tr>
    <td>--without-perl</td>
    <td>disable build/install of PerlMagick, or
  <br /><br />
  By default, PerlMagick is conveniently compiled and installed as part of ImageMagick's normal <samp>configure</samp>, <samp>make</samp>, <samp>sudo make install</samp> process. When <samp>--without-perl</samp> is specified, you must first install ImageMagick, change to the PerlMagick subdirectory, build, and finally install PerlMagick. Note, PerlMagick is configured even if <samp>--without-perl</samp> is specified. If the argument <var>--with-perl=/path/to/perl</var> is supplied, <var>/../path/to/perl</var> is be taken as the PERL interpreter to use. This important in case the <samp>perl</samp> executable in your PATH is not PERL5, or is not the PERL you want to use.</td>
  </tr>
  <tr>
    <td>--with-perl=PERL</td>
    <td>use specified Perl binary to configure PerlMagick.</td>
  </tr>
  <tr>
    <td>--with-perl-options=OPTIONS</td>
    <td>options to pass on command-line when generating PerlMagick's Makefile from Makefile.PL.
  <br /><br />
  The PerlMagick module is normally installed using the Perl interpreter's installation PREFIX, rather than ImageMagick's. If ImageMagick's installation prefix is not the same as PERL's PREFIX, then you may find that PerlMagick's <samp>sudo make install</samp> step tries to install into a directory tree that you don't have write permissions to. This common when PERL is delivered with the operating system or on Internet Service Provider (ISP) web servers. If you want PerlMagick to install elsewhere, then provide a PREFIX option to PERL's configuration step via "--with-perl-options=PREFIX=/some/place". Other options accepted by MakeMaker are 'LIB', 'LIBPERL_A', 'LINKTYPE', and 'OPTIMIZE'. See the ExtUtils::MakeMaker(3) manual page for more information on configuring PERL extensions.</td>
  </tr>
  <tr>
    <td>--without-bzlib</td>
    <td>disable BZLIB support.</td>
  </tr>
  <tr>
    <td>--without-dps</td>
    <td>disable Display Postscript support.</td>
  </tr>
  <tr>
    <td>--with-fpx</td>
    <td>enable FlashPIX support.</td>
  </tr>
  <tr>
    <td>--without-freetype</td>
    <td>disable TrueType support.</td>
  </tr>
  <tr>
    <td>--with-gslib</td>
    <td>enable Ghostscript library support.</td>
  </tr>
  <tr>
    <td>--without-jbig</td>
    <td>disable JBIG support.</td>
  </tr>
  <tr>
    <td>--without-jpeg</td>
    <td>disable JPEG support.</td>
  </tr>
  <tr>
    <td>--without-jp2</td>
    <td>disable JPEG v2 support.</td>
  </tr>
  <tr>
    <td>--without-lcms</td>
    <td>disable LCMS support.</td>
  </tr>
  <tr>
    <td>--without-lzma</td>
    <td>disable LZMA support.</td>
  </tr>
  <tr>
    <td>--without-png</td>
    <td>disable PNG support.</td>
  </tr>
  <tr>
    <td>--without-tiff</td>
    <td>disable TIFF support.</td>
  </tr>
  <tr>
    <td>--without-wmf</td>
    <td>disable WMF support.</td>
  </tr>
  <tr>
    <td>--with-fontpath</td>
    <td>prepend to default font search path.</td>
  </tr>
  <tr>
    <td>--with-gs-font-dir</td>
    <td>directory containing Ghostscript fonts.
  <br /><br />
  Specify the directory containing the Ghostscript Postscript Type 1 font files (e.g. <samp>n022003l.pfb</samp>) so that they can be rendered using the FreeType library. If the font files are installed using the default Ghostscript installation paths (<var>${prefix}/share/ghostscript/fonts</var>), they should be discovered automagically by configure and specifying this option is not necessary. Specify this option if the Ghostscript fonts fail to be located automagically, or the location needs to be overridden.</td>
  </tr>
  <tr>
    <td>--with-windows-font-dir</td>
    <td>directory containing MS-Windows fonts.
  <br /><br />
  Specify the directory containing MS-Windows-compatible fonts. This not necessary when ImageMagick is running under MS-Windows.</td>
  </tr>
  <tr>
    <td>--without-xml</td>
    <td>disable XML support.</td>
  </tr>
  <tr>
    <td>--without-zlib</td>
    <td>disable ZLIB support.</td>
  </tr>
  <tr>
    <td>--without-x</td>
    <td>don't use the X Window System.
  <br /><br />
  By default, ImageMagick uses the X11 delegate libraries if they are available. When --without-x is specified, use of X11 is disabled.  The display, animate, and import sub-commands are not included. The remaining sub-commands have reduced functionality such as no access to X11 fonts (consider using Postscript or TrueType fonts instead).</td>
  </tr>
  <tr>
    <td>--with-share-path=DIR</td>
    <td>Alternate path to share directory (default share/ImageMagick).</td>
  </tr>
  <tr>
    <td>--with-libstdc=DIR</td>
    <td>use libstdc++ in DIR (for GNU C++).</td>
  </tr>
</table></div>

<p>While <samp>configure</samp> is designed to ease installation of ImageMagick, it often discovers problems that would otherwise be encountered later when compiling ImageMagick. The configure script tests for headers and libraries by executing the compiler (CC) with the specified compilation flags (CFLAGS), pre-processor flags (CPPFLAGS), and linker flags (LDFLAGS). Any errors are logged to the file <samp>config.log</samp>. If configure fails to discover a header or library please review this log file to determine why, however, please be aware that *errors in the <samp>config.log</samp> are normal* because configure works by trying something and seeing if it fails. An error in <samp>config.log</samp> is only a problem if the test should have passed on your system.</p>

<p>Common causes of configure failures are: 1) a delegate header is not in the header include path (CPPFLAGS -I option); 2) a delegate library is not in the linker search/run path (LDFLAGS -L/-R option); 3) a delegate library is missing a function (old version?); or 4) compilation environment is faulty.</p>
<p>If all reasonable corrective actions have been tried and the problem appears be due to a flaw in the configure script, please send a bug report to the <a href="https://github.com/ImageMagick/ImageMagick/issues">ImageMagick Defect Support Forum</a>. All bug reports should contain the operating system type (as reported by <samp>uname -a</samp>) and the compiler/compiler-version. A copy of the configure script output and/or the relevant portion of  <samp>config.log</samp> file may be valuable in order to find the problem.  If you post portions of <samp>config.log</samp>, please also send a script of the configure output and a description of what you expected to see (and why) so the failure you are observing can be identified and resolved.</p>

<p>ImageMagick is now configured and ready to build</p>

<h2><a class="anchor" id="build"></a>Build</h2>

<p>Once ImageMagick is configured, these standard build targets are available from the generated <samp>make</samp> files:</p>

<dl class="row">
<dt class="col-md-4">make</dt>
  <dd class="col-md-8">Build ImageMagick.</dd>
<dt class="col-md-4">sudo make install</dt>
  <dd class="col-md-8">Install ImageMagick.</dd>
<dt class="col-md-4">make check</dt>
  <dd class="col-md-8">Run tests using the installed ImageMagick (<samp>sudo make install</samp> must be done first). Ghostscript and Freetype are prerequisites, otherwise certain unit tests that render text and the EPS, PS, and PDF formats will likely fail.</dd>
<dt class="col-md-4">make clean</dt>
  <dd class="col-md-8"> Remove everything in the build directory created by <samp>make</samp>.</dd>
<dt class="col-md-4">make distclean</dt>
  <dd class="col-md-8">remove everything in the build directory created by <samp>configure</samp> and <samp>make</samp>.  This useful if you want to start over from scratch.</dd>
<dt class="col-md-4">make uninstall</dt>
  <dd class="col-md-8">Remove all files from the system which are (or would be) installed by <samp>sudo make install</samp> using the current configuration.  Note that this target is imperfect for PerlMagick since Perl no longer supports an <var>uninstall</var> target.</dd>
</dl>

<p>In most cases you will simply want to compile ImageMagick with this command:</p>

<ul><pre class="bg-light text-dark"><samp>make </samp></pre></ul>

<p>Once built, you can optionally install ImageMagick on your system as discussed below.</p>

<h2><a class="anchor" id="install"></a>Install</h2>

<p>Now that ImageMagick is configured and built, type:</p>

<ul><pre class="bg-light text-dark"><samp>make install </samp></pre></ul>

<p>to install it.</p>

<p>By default, ImageMagick is installs binaries in <samp>/../usr/local/bin</samp>, libraries in <samp>/../usr/local/lib</samp>, header files in <samp>/../usr/local/include</samp> and documentation in <samp>/../usr/local/share</samp>.  You can specify an alternative installation prefix other than <samp>/../usr/local</samp> by giving <samp>configure</samp> the option <var>--prefix=PATH</var>.  This valuable in case you don't have privileges to install under the default paths or if you want to install in the system directories instead.</p>

<p>To confirm your installation of the ImageMagick distribution was successful, ensure that the installation directory is in your executable search path and type:</p>

<ul><pre class="bg-light text-dark"><samp>magick logo: logo.gif
identify logo.gif</samp></pre></ul>

<p>The ImageMagick logo is displayed on your X11 display.</p>

<p>To verify the ImageMagick build configuration, type:</p>

<ul><pre class="bg-light text-dark"><samp>magick identify -list configure</samp></pre></ul>

<p>To list which image formats are supported , type:</p>

<ul><pre class="bg-light text-dark"><samp>magick identify -list format </samp></pre></ul>

<p>For a more comprehensive test, you run the ImageMagick test suite by typing:</p>

<ul><pre class="bg-light text-dark"><samp>make check</samp></pre></ul>

<p>Ghostscript is a prerequisite, otherwise the EPS, PS, and PDF tests will fail.  Note that due to differences between the developer's environment and your own it is possible that a few tests may fail even though the results are ok. Differences between the developer's environment and your own may include the compiler, the CPU type, and the library versions used. The ImageMagick developers use the current release of all dependent libraries.</p>

<h2><a class="anchor" id="linux"></a>Linux-specific Build instructions</h2>

<p>Download <a href="https://download.imagemagick.org/ImageMagick/download/linux/SRPMS/ImageMagick.src.rpm">ImageMagick.src.rpm</a> from <a href="https://imagemagick.org/download">ftp.imagemagick.org</a> or its <a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">mirrors</a> and verify the distribution against its <a href="https://download.imagemagick.org/ImageMagick/download/linux/SRPMS/digest.rdf">message digest</a>.</p>

<p>Build ImageMagick with this command:</p>

<ul><pre class="bg-light text-dark"><samp>rpmbuild --rebuild ImageMagick.src.rpm</samp></pre></ul>

<p>After the build you, locate the RPMS folder and install the ImageMagick binary RPM distribution:</p>

<?php crt("rpm -ivh ImageMagick-" . MagickLibVersionText . "-?.*.rpm"); ?>

<h2><a class="anchor" id="macosx"></a>Mac OS X-specific Build instructions</h2>

<p>Perform these steps as an administrator or with the <tt>sudo</tt> command:</p>

  <p>Install <a href="http://www.macports.org">MacPorts</a>.  Download and install MacPorts and type the following commands:</p>

<ul><pre class="bg-light text-dark"><samp>sudo port -v install freetype +bytecode
sudo port -v install librsvg
sudo port -v install graphviz +gs +wmf +jbig +jpeg2 +lcms </samp></pre></ul>

<p>This installs many of the delegate libraries ImageMagick will utilize such as JPEG and FreeType.</p>


	  <p>Install the latest <a href="http://developer.apple.com/tools/download/">Xcode</a> from Apple.</p>
	  <p>Use the <tt>port</tt> command to install any delegate libraries you require, for example:</p>

<ul><pre class="bg-light text-dark"><samp>sudo port install jpeg </samp></pre></ul>

<p>Now lets build ImageMagick:</p>

	  <p><a href="<?php echo $_SESSION['RelativePath']?>/../script/download.php">Download</a> the ImageMagick source distribution and verify the distribution against its <a href="https://download.imagemagick.org/ImageMagick/download/digest.rdf">message digest</a>.</p>
	  <p>Unpack and change into the top-level ImageMagick directory:</p>
		<?php crt("tar xvzf ImageMagick-" . MagickLibVersionText . MagickLibSubversion . ".tar.gz",
				"",
				"cd ImageMagick-" . MagickLibVersionText . MagickLibSubversion
		 ); ?>
	  <p>Configure ImageMagick:</p>
<ul><pre class="bg-light text-dark"><samp>./configure --prefix=/opt --with-quantum-depth=16 \
  --disable-dependency-tracking --with-x=yes \
  --x-includes=/usr/X11R6/include --x-libraries=/usr/X11R6/lib/ \
  --without-perl" </samp></pre></ul>
	  <p>Build ImageMagick:</p>
<ul><pre class="bg-light text-dark"><samp>make </samp></pre></ul>
	  <p>Install ImageMagick:</p>
<ul><pre class="bg-light text-dark"><samp>sudo make install </samp></pre></ul>
  <p>To verify your install, type</p>

<ul><pre class="bg-light text-dark"><samp>/opt/local/bin/identify -list font </samp></pre></ul>

  <p>to list all the fonts ImageMagick knows about.</p>
	  <p>To test the ImageMagick GUI, in a new shell, type:</p>

<ul><pre class="bg-light text-dark"><samp>display -display :0 </samp></pre></ul>

<h2><a class="anchor" id="mingw"></a>MinGW-specific Build instructions</h2>

<p>Although you can download and install delegate libraries yourself, many are already available in the <a href="http://gnuwin32.sourceforge.net/">GnuWin32</a> distribution.  Download and install whichever delegate libraries you require such as JPEG, PNG, TIFF, etc.  Make sure you specify the development headers when you install a package.  Next type,</p>

<?php crt(
  "tar jxvf ImageMagick-" . MagickLibVersionText . "-?.tar.bz2", "<br/>",
  "cd ImageMagick-" . MagickLibVersionText . MagickLibSubversion, "<br/>",
  'export CPPFLAGS="-Ic:/Progra~1/GnuWin32/include"', "<br/>",
  'export LDFLAGS="-Lc:/Progra~1/GnuWin32/lib"', "<br/>",
  "./configure --without-perl", "<br/>",
  "make", "<br/>",
  "sudo make install"
  ); ?>

<h2><a class="anchor" id="problems"></a>Dealing with Unexpected Problems</h2>

<p>Chances are the download, configure, build, and install of ImageMagick went flawlessly as it is intended, however, certain systems and environments may cause one or more steps to fail.  We discuss a few problems we've run across and how to take corrective action to ensure you have a working release of ImageMagick</p>

<h4>Build Problems</h4>
<p>If the build complains about missing dependencies (e.g. <var>.deps/source.PLO</var>), add <samp>--disable-dependency-tracking</samp> to your <samp>configure</samp> command line.</p>

<p>Some systems may fail to link at build time due to unresolved symbols. Try adding the LDFLAGS to the <samp>configure</samp> command line:</p>

<ul><pre class="bg-light text-dark"><samp>configure LDFLAGS='-L/usr/local/lib -R/usr/local/lib' </samp></pre></ul>

<h4>Dynamic Linker Run-time Bindings</h4>
<p>On some systems, ImageMagick may not find its shared library, <var>libMagick.so</var>.  Try running the <samp>ldconfig</samp> with the library path:</p>

<ul><pre class="bg-light text-dark"><samp>/sbin/ldconfig /usr/local/lib </samp></pre></ul>

<p>Solaris and Linux systems have the <samp>ldd</samp> command which is useful to track which libraries ImageMagick depends on:</p>

<ul><pre class="bg-light text-dark"><samp>ldd `which convert` </samp></pre></ul>

<h4>Delegate Libraries</h4>
<p>On occasion you may receive these warnings:</p>
<ul><pre class="bg-light text-dark"><samp>no decode delegate for this image format
no encode delegate for this image format </samp></pre></ul>
<p>This exception indicates that an external delegate library or its headers were not available when ImageMagick was built.  To add support for the image format, download and install the requisite delegate library and its header files and reconfigure, rebuild, and reinstall ImageMagick.  As an example, lets add support for the JPEG image format.  First we install the JPEG RPMS:</p>

<ul><pre class="bg-light text-dark"><samp>yum install libjpeg libjpeg-devel </samp></pre></ul>

<p>Now reconfigure, rebuild, and reinstall ImageMagick.  To verify JPEG is now properly supported within ImageMagick, use this command:</p>

<ul><pre class="bg-light text-dark"><samp>magick identify -list format </samp></pre></ul>

<p>You should see a mode of rw- associated with the JPEG tag.  This mode means the image can be read or written and can only support one image per image file.</p>

<h4>PerlMagick</h4>
<p>If PerlMagick fails to link with a message similar to <var>libperl.a is not found</var>, rerun <samp>configure</samp> with the <samp>--enable-shared</samp> or <samp>--enable-shared --with-modules</samp> options.</p>

</div>
