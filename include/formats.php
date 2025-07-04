﻿<div>
<p class="text-center"><a href="#colorspace">A Word about Colorspaces</a> • <a href="#supported">Supported Formats</a> • <a href="#pseudo">Pseudo Formats</a> • <a href="#builtin-images">Built-in Images</a>  • <a href="#builtin-patterns">Built-in Patterns</a> • <a href="#embedded">Embedded Profiles</a></p>

<p class="lead">ImageMagick uses an ASCII string known as <var>magick</var> (e.g. <samp>GIF</samp>) to identify file formats, algorithms acting as formats, built-in patterns, and embedded profile types.  Support for some of the formats are delegated to libraries or external programs. The Installation Guide describes where to find these distributions and any special configuration options required.</p>

<p>To get a complete listing of which image formats are supported on your system, type</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick identify -list format </samp></pre>

<p>On some platforms, ImageMagick automagically processes these extensions: .gz for Zip compression, .Z for Linux compression, .bz2 for block compression, and .pgp for PGP encryption. For example, a PNM image called image.pnm.gz is automagically uncompressed.</p>

<h2><a class="anchor" id="colorspace"></a>A Word about Colorspaces</h2>
 <p>A majority of the image formats assume an sRGB
colorspace (e.g. JPEG, PNG, etc.).  A few support only linear RGB (e.g. EXR,
DPX, CIN, HDR) or only linear GRAY (e.g. PGM).  A few formats support CMYK.
Then there is the occasional format that also supports LAB (that is CieLAB)
(e.g. TIFF, PSD, JPG, JP2).  To determine the colorspace of your image, use
this command:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick identify -verbose image.jpg
Image: image.jpg
Format: JPEG (Joint Photographic Experts Group JFIF format)
...
Colorspace: sRGB </samp></pre>

OR use the appropriate percent escape
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick image.jpg -print "%[colorspace]\n" null:
sRGB </samp></pre>


<p>When processing an image, be aware of the colorspace.  Many image
processing algorithms assume a linear RGB colorspace.  Although you may get
satisfactory results processing in the sRGB colorspace, you may get improved
results in linear RGB (essentially sRGB with the gamma function removed).  For
example,</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick image.jpg -colorspace RGB -resize 50% -colorspace sRGB resize.jpg </samp></pre>

<p>As of IM 6.7.8-2 one can properly work in LAB colorspace whether or not
Imagemagick is <a href="<?php echo $_SESSION['RelativePath']
?>/../script/high-dynamic-range.php">HDRI</a>-enabled.  Essentially the A and
B channels are stored with a 50% gray bias, to allow it to handle the
negatives required by the format.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick lab.tif -resize 50% resize.jpg </samp></pre> </ul>

<p>Again, it may not make sense for some image processing operators to work
directly in LAB space, but ImageMagick permits it and generally returns
reasonable results.</p>

<h2><a class="anchor" id="supported"></a>Supported Image Formats</h2>

<p>ImageMagick supports reading over 100 major file formats (not
including sub-formats). The following table provides a summary of
the supported image formats.</p>

<div class="pre-scrollable">
<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th>Tag</th>
    <th>Mode</th>
    <th>Description</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td>AAI</td>
    <td>RW</td>
    <td>AAI Dune image</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://www.adobe.com/creativecloud/file-types/image/vector/ai-file.html">AI</a></td>
    <td>RW</td>
    <td>Adobe Illustrator CS2</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://en.wikipedia.org/wiki/APNG">APNG</a></td>
    <td>RW</td>
    <td>Animated Portable Network Graphics</td>
    <td>Note, you must use an explicit image format specifier to read an APNG (<samp>apng:myImage.apng</samp>) image sequence, otherwise it assumes a PNG image and only reads the first frame.  You must have <samp>ffmpeg</samp> in your execution path to process APNG images. </td>
  </tr>

  <tr>
    <td>ART</td>
    <td>RW</td>
    <td>PFS: 1st Publisher</td>
    <td>Format originally used on the Macintosh (MacPaint?) and later used for PFS: 1st Publisher clip art.</td>
  </tr>

  <tr>
    <td>ARW</td>
    <td>R</td>
    <td>Sony Digital Camera Alpha Raw Image Format</td>
    <td>Set <samp>-define dng:use-camera-wb=true</samp> to use the RAW-embedded color profile for Sony cameras.  You can also set these options: <samp>use-auto-wb</samp>, <samp>no-auto-bright</samp>, and <samp>output-color</samp>.</td>
  </tr>

  <tr>
    <td><a href="http://www.jmcgowan.com/avi.html">AVI</a></td>
    <td>R</td>
    <td>Microsoft Audio/Visual Interleaved</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://en.wikipedia.org/wiki/AV1#AV1_Image_File_Format_(AVIF)">AVIF</a></td>
    <td>RW</td>
    <td>Format derived from the keyframes of AV1 video</td>
    <td> </td>
  </tr>

  <tr>
    <td>AVS</td>
    <td>RW</td>
    <td>AVS X image</td>
    <td> </td>
  </tr>

  <tr>
    <td>BAYER</td>
    <td>RW</td>
    <td>Raw mosaiced samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.  For signed pixel data, use <samp>-define quantum:format=signed</samp>.</td>
  </tr>

  <tr>
    <td><a href="http://bellard.org/bpg/">BPG</a></td>
    <td>RW</td>
    <td>Better Portable Graphics</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quality">-quality</a> to specify the image compression quality.  To meet the requirements of BPG, the quality argument divided by 2 (e.g. -quality 92 assigns 46 as the BPG compression.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/bmp/egff.htm">BMP, BMP2, BMP3</a></td>
    <td>RW</td>
    <td>Microsoft Windows bitmap</td>
    <td>By default the BMP format is version 4.  Use BMP3 and BMP2 to write versions 3 and 2 respectively. Use <samp>-define bmp:ignore-filesize</samp> to ignore the filesize check.</td>
  </tr>

  <tr>
    <td><a href="http://en.wikipedia.org/wiki/Braille_ASCII">BRF</a></td>
    <td>W</td>
    <td>Braille Ready Format</td>
    <td>Uses juxtaposition of 6-dot braille patterns (thus 6x2 dot matrices) to reproduce images, using the BRF ASCII Braille encoding.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/cals/egff.htm">CALS</a></td>
    <td>R</td>
    <td>Continuous Acquisition and Life-cycle Support Type 1 image</td>
    <td>Specified in MIL-R-28002 and MIL-PRF-28002. Standard blueprint archive format as used by the US military to replace microfiche.</td>
  </tr>

  <tr>
    <td><a href="http://www.cineon.com/ff_draft.php">CIN</a></td>
    <td>RW</td>
    <td>Kodak Cineon Image Format</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set</a> to specify the image gamma or black and white points (e.g. <samp>-set gamma 1.7</samp>, <samp>-set reference-black 95</samp>, <samp>-set reference-white 685</samp>).  Properties include cin:file.create_date, cin:file.create_time, cin:file.filename, cin:file.version, cin:film.count, cin:film.format, cin:film.frame_id, cin:film.frame_position, cin:film.frame_rate, cin:film.id, cin:film.offset, cin:film.prefix, cin:film.slate_info, cin:film.type, cin:image.label, cin:origination.create_date, cin:origination.create_time, cin:origination.device, cin:origination.filename, cin:origination.model, cin:origination.serial, cin:origination.x_offset, cin:origination.x_pitch, cin:origination.y_offset, cin:origination.y_pitch, cin:user.data.</td>
  </tr>

  <tr>
    <td>CIP</td>
    <td>W</td>
    <td>Cisco IP phone image format</td>
    <td> </td>
  </tr>

  <tr>
    <td>CMYK</td>
    <td>RW</td>
    <td>Raw cyan, magenta, yellow, and black samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>CMYKA</td>
    <td>RW</td>
    <td>Raw cyan, magenta, yellow, black, and alpha samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>CR2</td>
    <td>R</td>
    <td>Canon Digital Camera Raw Image Format</td>
    <td>Requires an explicit image format otherwise the image is interpreted as a TIFF image (e.g. cr2:image.cr2).</td>
  </tr>

  <tr>
    <td>CRW</td>
    <td>R</td>
    <td>Canon Digital Camera Raw Image Format</td>
    <td> </td>
  </tr>

  <tr>
    <td>CUBE</td>
    <td>R</td>
    <td>A lookup table containing math instructions to replace a color (based on RGB value) by another one. It's like a color grading preset.  This process is done pixel by pixel with a very high accuracy.</td>
    <td>Select levels like this: cube:Vibrant.cube[8] for level 8</td>
  </tr>

  <tr>
    <td>CUR</td>
    <td>R</td>
    <td>Microsoft Cursor Icon</td>
    <td> </td>
  </tr>

  <tr>
    <td>CUT</td>
    <td>R</td>
    <td>DR Halo</td>
    <td> </td>
  </tr>

  <tr>
    <td>DCM</td>
    <td>R</td>
    <td>Digital Imaging and Communications in Medicine (DICOM) image</td>
    <td>Used by the medical community for images like X-rays.  ImageMagick sets the initial display range based on the Window Center (0028,1050) and Window Width (0028,1051) tags. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define dcm:display-range=reset</a> to set the display range to the minimum and maximum pixel values. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define dcm:rescale=true</a> to enable interpretation of the rescale slope and intercept settings in the file. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define dcm:window=centerXwidth</a> to override the center and width settings in the file with your own values.</td>
  </tr>

  <tr>
    <td>DCR</td>
    <td>R</td>
    <td>Digital Camera Raw Image File</td>
    <td>Use DCRAW to leverage the raw photo decoder delegate program, e.g., dcraw:IMG_2600.dng</td>
  </tr>

  <tr>
    <td>DCX</td>
    <td>RW</td>
    <td>ZSoft IBM PC multi-page Paintbrush image</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://en.wikipedia.org/wiki/DirectDraw_Surface">DDS</a></td>
    <td>RW</td>
    <td>Microsoft Direct Draw Surface</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to specify the compression (e.g. <samp>-define dds:compression={dxt1, dxt5, none}</samp>). Other defines include <samp>dds:cluster-fit={true,false}</samp>, <samp>dds:weight-by-alpha={true,false}</samp>, <samp>dds:fast-mipmaps={true,false}</samp>, and use <samp>dds:mipmaps</samp> to set the number of mipmaps (use <samp>fromlist</samp> to use the image list).</td>

  </tr>

  <tr>
    <td>DEBUG</td>
    <td>W</td>
    <td>Raw pixel debug file, likely only useful to the developers</td>
    <td></td>
  </tr>

  <tr>
    <td>DIB</td>
    <td>RW</td>
    <td>Microsoft Windows Device Independent Bitmap</td>
    <td>DIB is a <a href="#BMP">BMP</a> file without the <a href="#BMP">BMP</a> header. Used to support embedded images in compound formats like WMF.</td>
  </tr>

  <tr>
    <td><a href="http://www.djvu.org/">DJVU</a></td>
    <td>R</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
    <td><a href="https://github.com/ImageMagick/MagickCache">DMR</a></td>
    <td>RW</td>
    <td>Digital media repository</td>
    <td>Requires the <a href="https://gitlab.com/ImageMagick/MagickCache">MagickCache</a> delegate library.  Supported options include <samp>dmr:path</samp> (location of repository), <samp>dmr:passkey</samp> (key to open digital media repository), <samp>dmr:passphrase</samp> (optionally scramble or unscramble media resource), and <samp>dmr:ttl</samp> (time-to-live); Set the <samp>dmr:meta</samp> (metadata) property to store the resource as meta data.</td>
  </tr>

  <tr>
    <td><a href="http://www.adobe.com/products/dng/main.html">DNG</a></td>
    <td>R</td>
    <td>Digital Negative</td>
    <td>Requires an explicit image format otherwise the image is interpreted as a TIFF image (e.g. dng:image.dng).</td>
  </tr>

  <tr>
    <td><a href="http://www.graphviz.org">DOT</a></td>
    <td>R</td>
    <td>Graph Visualization</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to specify the layout engine (e.g. <samp>-define dot:layout-engine=twopi</samp>).</td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/motion-picture.php">DPX</a></td>
    <td>RW</td>
    <td>SMPTE Digital Moving Picture Exchange 2.0 (SMPTE 268M-2003)</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set</a> to specify the image gamma or black and white points (e.g. <samp>-set gamma 1.7</samp>, <samp>-set reference-black 95</samp>, <samp>-set reference-white 685</samp>).</td>
  </tr>

  <tr>
    <td>EMF</td>
    <td>R</td>
    <td>Microsoft Enhanced Metafile (32-bit)</td>
    <td>Only available under Microsoft Windows.  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> command line option to specify the maximum width and height.</td>
  </tr>

  <tr>
    <td>EPDF</td>
    <td>RW</td>
    <td>Encapsulated Portable Document Format</td>
    <td></td>
  </tr>

  <tr>
    <td>EPI</td>
    <td>RW</td>
    <td>Adobe Encapsulated PostScript Interchange format</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPS</td>
    <td>RW</td>
    <td>Adobe Encapsulated PostScript</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPS2</td>
    <td>W</td>
    <td>Adobe Level II Encapsulated PostScript</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPS3</td>
    <td>W</td>
    <td>Adobe Level III Encapsulated PostScript</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPSF</td>
    <td>RW</td>
    <td>Adobe Encapsulated PostScript</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPSI</td>
    <td>RW</td>
    <td>Adobe Encapsulated PostScript Interchange format</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>EPT</td>
    <td>RW</td>
    <td>Adobe Encapsulated PostScript Interchange format with <a href="#TIFF">TIFF</a> preview</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td><a href="http://www.openexr.org">EXR</a></td>
    <td>RW</td>
    <td>High dynamic-range (HDR) file format developed by Industrial Light &amp; Magic</td>
    <td>See <a href="<?php echo $_SESSION['RelativePath']?>/../script/high-dynamic-range.php">High Dynamic-Range Images</a> for details on this image format. To specify the output color type, use <samp>-define exr:color-type={RGB,RGBA,YC,YCA,Y,YA,R,G,B,A}</samp>. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sampling-factor">-sampling-factor</a> to specify the sampling rate for YC(A) (e.g. <samp>2x2 or 4:2:0</samp>). Requires the <a href="http://www.openexr.org/">OpenEXR</a> delegate library.</td>
  </tr>

  <tr>
    <td>FARBFELD</td>
    <td>RW</td>
    <td>Farbfeld lossless image format</td>
    <td>sRGB 16-bit RGBA lossless image format</td>
  </tr>

  <tr>
    <td>FAX</td>
    <td>RW</td>
    <td>Group 3 TIFF</td>
    <td>This format is a fixed width of 1728 as required by the standard.  See <a href="#TIFF">TIFF</a> format. Note that FAX machines use non-square pixels which are 1.5 times wider than they are tall but computer displays use square pixels so FAX images may appear to be narrow unless they are explicitly resized using a resize specification of <samp>100x150%</samp>.</td>
  </tr>

  <tr>
    <td><a href="http://www.cv.nrao.edu/fits/">FITS</a></td>
    <td>RW</td>
    <td>Flexible Image Transport System</td>
    <td>To specify a single-precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 64 for a double-precision floating-point format.</td>
  </tr>

  <tr>
    <td>FL32</td>
    <td>RW</td>
    <td>FilmLight floating point image format</td>
    <td></td>
  </tr>

  <tr>
    <td><a href="https://flif.info/">FLIF</a></td>
    <td>RW</td>
    <td>Free Lossless Image Format</td>
    <td></td>
  </tr>

  <tr>
    <td>FPX</td>
    <td>RW</td>
    <td>FlashPix Format</td>
    <td>FlashPix has the option to store mega- and giga-pixel images at various resolutions in a single file which permits conservative bandwidth and fast reveal times when displayed within a Web browser.  Requires the <a href="https://github.com/ImageMagick/libfpx">FlashPix SDK</a>. Specify the FlashPix viewing parameters with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define fpx:view</a>.</td>
  </tr>

  <tr>
    <td><a href="http://im.snibgo.com/fmttxt.htm">FTXT</a></td>
    <td>RW</td>
    <td>Read and write multispectral channels as formatted text</td>
    <td></td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/gif/egff.htm">GIF</a></td>
    <td>RW</td>
    <td>CompuServe Graphics Interchange Format</td>
    <td>8-bit RGB PseudoColor with up to 256 palette entries. Specify the format <samp>GIF87</samp> to write the older version 87a of the format.  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#transparent-color">-transparent-color</a> to specify the GIF transparent color (e.g. <samp>-transparent-color wheat</samp>).</td>
  </tr>

  <tr>
    <td>GPLT</td>
    <td>R</td>
    <td>Gnuplot plot files</td>
    <td>Requires <a href="http://www.gnuplot.info/">gnuplot4.0.tar.Z</a> or later.</td>
  </tr>

  <tr>
    <td>GRAY</td>
    <td>RW</td>
    <td>Raw gray samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.  For signed pixel data, use <samp>-define quantum:format=signed</samp>. ImageMagick supports scanline padding.  If your image is not padded, you can instead read the image as a 1-D vector and reshape it:  <samp>magick -size 38700x1 -depth 1 gray:image.bin -reshape 180x215 image.png</samp>.</td>
  </tr>

  <tr>
    <td>GRAYA</td>
    <td>RW</td>
    <td>Raw gray and alpha samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>GROUP4</td>
    <td>RW</td>
    <td>Raw CCITT Group 4 samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> to specify the image width and height.</td>
  </tr>

  <tr>
    <td><a href="http://en.wikipedia.org/wiki/RGBE_image_format">HDR</a></td>
    <td>RW</td>
    <td>Radiance RGBE image format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://en.wikipedia.org/wiki/RGBE_image_format">HDR</a></td>
    <td>RW</td>
    <td>Radiance RGBE image format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://en.wikipedia.org/wiki/High_Efficiency_Image_File_Format">HEIC</a></td>
    <td>RW</td>
    <td>Apple High efficiency Image Format</td>
    <td>Set the quality to 100 to produce lossless HEIC images.  Requires the <a href="https://github.com/strukturag/libheif">libheif</a> delegate library.  Recognized defines include <samp>heic:cicp</samp>, <samp>heic:preserve-orientation={true,false}</samp>, <samp>depth-image={true,false}</samp>, <samp>heic:speed</samp>, and <samp>heic:chroma</samp>.</td>
  </tr>

  <tr>
    <td>HPGL</td>
    <td>R</td>
    <td>HP-GL plotter language</td>
    <td>Requires <a href="http://ftp.gnu.org/gnu/hp2xx">hp2xx-3.4.4.tar.gz</a></td>
  </tr>

  <tr>
    <td>HRZ</td>
    <td>RW</td>
    <td>Slow Scan TeleVision</td>
    <td> </td>
  </tr>

  <tr>
    <td>HTML</td>
    <td>RW</td>
    <td>Hypertext Markup Language with a client-side image map</td>
    <td>Also known as <samp>HTM</samp>. Requires <a href="http://user.it.uu.se/%7Ejan/html2ps.html">html2ps</a> to read.  Note, the <samp>\\xff</samp> character is not permitted in any filename when exporting client-side image maps.</td>
  </tr>

  <tr>
    <td>ICO</td>
    <td>R</td>
    <td>Microsoft icon</td>
    <td>Also known as <samp>ICON</samp>.</td>
  </tr>

  <tr>
    <td>INFO</td>
    <td>W</td>
    <td>Format and characteristics of the image</td>
    <td></td>
  </tr>

  <tr>
    <td><a href="https://www.iso.org/obp/ui/#iso:std:iso:tr:11548:-1">ISOBRL</a></td>
    <td>W</td>
    <td>ISO/TR 11548-1 BRaiLle</td>
    <td>Uses juxtaposition of 8-dot braille patterns (thus 8x2 dot matrices) to reproduce images, using the ISO/TR 11548-1 Braille encoding.</td>
  </tr>

  <tr>
    <td><a href="https://www.iso.org/obp/ui/#iso:std:iso:tr:11548:-1">ISOBRL6</a></td>
    <td>W</td>
    <td>ISO/TR 11548-1 BRaiLle 6 dots</td>
    <td>Uses juxtaposition of 6-dot braille patterns (thus 6x2 dot matrices) to reproduce images, using the ISO/TR 11548-1 Braille encoding.</td>
  </tr>

  <tr>
    <td>JBIG</td>
    <td>RW</td>
    <td>Joint Bi-level Image experts Group file interchange format</td>
    <td>Also known as <samp>BIE</samp> and <samp>JBG</samp>. Requires <a href="http://www.cl.cam.ac.uk/~mgk25/jbigkit/">jbigkit-1.6.tar.gz</a>.</td>
  </tr>

  <tr>
    <td><a href="http://www.libmng.com/">JNG</a></td>
    <td>RW</td>
    <td>Multiple-image Network Graphics</td>
    <td>JPEG in a PNG-style wrapper with transparency. Requires libjpeg and libpng-1.0.11 or later, <a href="http://www.libpng.org/pub/png/libpng.html">libpng-1.2.5</a> or later recommended.</td>
  </tr>

  <tr>
    <td><a href="http://www.openjpeg.org/">JP2</a></td>
    <td>RW</td>
    <td>JPEG-2000 JP2 File Format Syntax</td>
    <td>Specify the encoding options with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> option. See <a href="<?php echo $_SESSION['RelativePath']?>/../script/jp2.php">JP2 Encoding Options</a> for more details.</td>
  </tr>

  <tr>
    <td><a href="http://www.openjpeg.org/">JPT</a></td>
    <td>RW</td>
    <td>JPEG-2000 Code Stream Syntax</td>
    <td>Specify the encoding options with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> option  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/jp2.php">JP2 Encoding Options</a> for more details.</td>
  </tr>

  <tr>
    <td><a href="http://www.openjpeg.org/">J2C</a></td>
    <td>RW</td>
    <td>JPEG-2000 Code Stream Syntax</td>
    <td>Specify the encoding options with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> option  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/jp2.php">JP2 Encoding Options</a> for more details.</td>
  </tr>

  <tr>
    <td><a href="http://www.openjpeg.org/">J2K</a></td>
    <td>RW</td>
    <td>JPEG-2000 Code Stream Syntax</td>
    <td>Specify the encoding options with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> option  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/jp2.php">JP2 Encoding Options</a> for more details.</td>
  </tr>

  <tr>
    <td><a href="http://www.jpeg.org/">JPEG</a></td>
    <td>RW</td>
    <td>Joint Photographic Experts Group JFIF format</td>
    <td>Note, JPEG is a lossy compression.  In addition, you cannot create black and white images with JPEG nor can you save transparency.<br /><br /> Requires <a href="http://www.ijg.org/files/">jpegsrc.v8c.tar.gz</a>.  You can set quality scaling for luminance and chrominance separately (e.g. <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quality">-quality</a> 90,70). You can optionally define the DCT method, for example to specify the float method, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:dct-method=float</a>. By default we compute optimal Huffman coding tables.  Specify <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:optimize-coding=false</a> to use the default Huffman tables. Specify <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:arithmetic-coding=true</a> to enable Huffman optimization. Two other options include <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:block-smoothing</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:fancy-upsampling</a>. Set the sampling factor with <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:sampling-factor</a>. You can size the image with <samp>jpeg:size</samp>, for example <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:size=128x128</a>. To restrict the maximum file size, use <samp>jpeg:extent</samp>, for example <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:extent=400KB</a>.  To define one or more custom quantization tables, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define jpeg:q-table=<i>filename</i></a>. These values are multiplied by <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#quality">-quality</a> argument divided by 100.0. To avoid reading a particular associated image profile, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define profile:skip=<i>name</i></a> (e.g. profile:skip=ICC).</td>
  </tr>

  <tr>
    <td><a href="http://www.json.org">JSON</a></td>
    <td>W</td>
    <td>JavaScript Object Notation, a lightweight data-interchange format</td>
    <td>Include additional attributes about the image with these defines: <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define json:locate</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define json:limit</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define json:moments</a>, or <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define json:features</a>.  Specify the JSON model schema version with <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define json:version</a>.  The current version is 1.0.  Any version less than 1.0, returns the original JSON output which included misspelled labels.</td>
  </tr>

  <tr>
    <td><a href="https://jpeg.org/jpegxl">JXL</a></td>
    <td>RW</td>
    <td>JPEG XL image coding system</td>
    <td>Requires the <a href="https://gitlab.com/wg1/jpeg-xl.git">JPEG XL</a> delegate library. Use <samp>-define jxl:effort=<i>integer</i></samp> to set the effort and <samp>-define jxl:decoding-speed=<i>integer</i></samp> to set the decoding speed. To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats and 16 for half-precision.</td>
  </tr>

  <tr>
    <td><a href="https://en.wikipedia.org/wiki/JPEG_XR">JXR</a></td>
    <td>RW</td>
    <td>JPEG extended range</td>
    <td>Requires the <a href="https://jxrlib.codeplex.com/">jxrlib</a> delegate library. Put the JxrDecApp and JxrEncApp applications in your execution path.</p>
  </tr>

  <tr>
    <td>KERNEL</td>
    <td>W</td>
    <td>Morphology kernel format</td>
    <td>format suitable for a morphology kernel</td>
  </tr>

  <tr>
    <td>MAN</td>
    <td>R</td>
    <td>Linux reference manual pages</td>
    <td>Requires that GNU groff and Ghostcript are installed.</td>
  </tr>

  <tr>
    <td>MAT</td>
    <td>R</td>
    <td>MATLAB image format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/miff.php">MIFF</a></td>
    <td>RW</td>
    <td>Magick multispectral image file format</td>
    <td>This format persists all image attributes known to ImageMagick.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>MONO</td>
    <td>RW</td>
    <td>Bi-level bitmap in least-significant-byte first order</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/mng/">MNG</a></td>
    <td>RW</td>
    <td>Multiple-image Network Graphics</td>
    <td>A PNG-like Image Format Supporting Multiple Images, Animation and Transparent JPEG. Requires libpng-1.0.11 or later, <a href="http://www.libpng.org/pub/png/libpng.html">libpng-1.2.5</a> or later recommended. An interframe delay of 0 generates one frame with each additional layer composited on top.  For motion, be sure to specify a non-zero delay.</td>
  </tr>

  <tr>
    <td><a href="http://www.ffmpeg.org/">M2V</a></td>
    <td>RW</td>
    <td>Motion Picture Experts Group file interchange format (version 2)</td>
    <td>Requires <a href="http://www.ffmpeg.org/download.html">ffmpeg</a>.</td>
  </tr>

  <tr>
    <td><a href="http://www.ffmpeg.org/">MPEG</a></td>
    <td>RW</td>
    <td>Motion Picture Experts Group file interchange format (version 1)</td>
    <td>Requires <a href="http://www.ffmpeg.org/download.html">ffmpeg</a>.</td>
  </tr>

  <tr>
    <td>MPC</td>
    <td>RW</td>
    <td>Magick Pixel Cache image file format</td>
    <td>The most efficient data processing pattern is a write-once, read-many-times pattern. The image is generated or copied from source, then various analyses are performed on the image pixels over time.  MPC supports this pattern. MPC is the native <var>in-memory</var> ImageMagick uncompressed file format. This file format is identical to that used by ImageMagick to represent images in memory and is read by mapping the file directly into memory. The MPC format is not portable and is not suitable as an archive format. It is suitable as an intermediate format for high-performance image processing.  The MPC format requires two files to support one image. Image attributes are written to a file with the extension <samp>.mpc</samp>, whereas, image pixels are written to a file with the extension <samp>.cache</samp>.</td>
  </tr>

  <tr>
    <td>MPO</td>
    <td>R</td>
    <td>Multi-picture Object</td>
    <td> </td>
  </tr>

  <tr>
    <td>MPR</td>
    <td>RW</td>
    <td>Magick Persistent Registry</td>
    <td>This format permits you to write to and read images from memory.  The filename is the registry key.  The image persists until you explicitly delete it or the program exits.  For example, let's use the MPR to create a checkerboard:
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick \( -size 15x15 canvas:black canvas:white -append \) \
  \( +clone -flip \) +append -write mpr:checkers +delete \
  -size 240x240 tile:mpr:checkers -delete registry:checkers board.png </samp></pre>
  </td>
  </tr>

  <tr>
    <td>MRW</td>
    <td>R</td>
    <td>Sony (Minolta) Raw Image File</td>
    <td>Set <samp>-define dng:use-camera-wb=true</samp> to use the RAW-embedded color profile for Sony cameras.</td>
  </tr>

  <tr>
    <td>MSL</td>
    <td>RW</td>
    <td>Magick Scripting Language</td>
    <td>MSL is the XML-based scripting language supported by the <a href="<?php echo $_SESSION['RelativePath']?>/../script/conjure.php">conjure</a> utility. MSL requires the <a href="http://xmlsoft.org/">libxml2</a> delegate library.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/mtv/egff.htm">MTV</a></td>
    <td>RW</td>
    <td>MTV Raytracing image format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../script/magick-vector-graphics.php">MVG</a></td>
    <td>RW</td>
    <td>Magick Vector Graphics.</td>
    <td>The native ImageMagick vector metafile format. A text file containing vector drawing commands accepted by <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick.php">magick</a>'s <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#draw">-draw</a> option.</td>
  </tr>

  <tr>
    <td>NEF</td>
    <td>R</td>
    <td>Nikon Digital SLR Camera Raw Image File</td>
    <td> </td>
  </tr>

  <tr>
    <td>ORF</td>
    <td>R</td>
    <td>Olympus Digital Camera Raw Image File</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://www.freedesktop.org/wiki/Specifications/OpenRaster/">ORA</a></td>
    <td>R</td>
    <td>open exchange format for layered raster based graphics</td>
    <td> </td>
  </tr>

  <tr>
    <td>OTB</td>
    <td>RW</td>
    <td>On-the-air Bitmap</td>
    <td> </td>
  </tr>

  <tr>
    <td>P7</td>
    <td>RW</td>
    <td>Xv's Visual Schnauzer thumbnail format</td>
    <td> </td>
  </tr>

  <tr>
    <td>PALM</td>
    <td>RW</td>
    <td>Palm pixmap</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pam.html">PAM</a></td>
    <td>W</td>
    <td>Common 2-dimensional bitmap format</td>
    <td> </td>
  </tr>

  <tr>
    <td>CLIPBOARD</td>
    <td>RW</td>
    <td>Windows Clipboard</td>
    <td>Only available under Microsoft Windows.</td>
  </tr>
  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pbm.html">PBM</a></td>
    <td>RW</td>
    <td>Portable bitmap format (black and white)</td>
    <td> </td>
  </tr>

  <tr>
    <td>PCD</td>
    <td>RW</td>
    <td>Photo CD</td>
    <td>The maximum resolution written is 768x512 pixels since larger images require huffman compression (which is not supported). Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#bordercolor">-bordercolor</a> to specify the border color (e.g. <samp>-bordercolor black</samp>).</td>
  </tr>

  <tr>
    <td>PCDS</td>
    <td>RW</td>
    <td>Photo CD</td>
    <td>Decode with the sRGB color tables.</td>
  </tr>

  <tr>
    <td>PCL</td>
    <td>W</td>
    <td>HP Page Control Language</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to specify fit to page option (e.g. <samp>-define pcl:fit-to-page=true</samp>).</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/pcx/egff.htm">PCX</a></td>
    <td>RW</td>
    <td>ZSoft IBM PC Paintbrush file</td>
    <td> </td>
  </tr>

  <tr>
    <td>PDB</td>
    <td>RW</td>
    <td>Palm Database ImageViewer Format</td>
    <td> </td>
  </tr>

  <tr>
    <td>PDF</td>
    <td>RW</td>
    <td>Portable Document Format</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.  By default, ImageMagick sets the page size to the MediaBox. Some PDF files, however, have a CropBox or TrimBox that is smaller than the MediaBox and may include white space, registration or cutting marks outside the CropBox or TrimBox. To force ImageMagick to use the CropBox or TrimBox rather than the MediaBox, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> (e.g. <samp>-define pdf:use-cropbox=true</samp> or <samp>-define pdf:use-trimbox=true</samp>).  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#density">-density</a> to improve the appearance of your PDF rendering (e.g. -density 300x300).  To specify direct conversion from  Postscript to PDF, use <samp>-define delegate:bimodel=true</samp>. Use <samp>-define pdf:fit-page=true</samp> to scale to the page size. To immediately stop processing upon an error, set <samp>-define pdf:stop-on-error</samp> to <samp>true</samp>. To set the page direction preferences to right-to-left, try  <samp>-define pdf:page-direction=right-to-left</samp>. By default, the PDF is printed using "screen" for annotations and images.  Use <samp>-define pdf:printed=true</samp> to instead utilize the printer options. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#alpha">-alpha remove </a> to remove transparency.  When writing to a PDF, thumbnails are included by default.  Generate thumbnails with <samp>-define pdf:thumbnail=true</samp>. To enable interpolation when rendering, use <samp>-define pdf:interpolate=true</samp>.</td>
  </tr>

  <tr>
    <td>PEF</td>
    <td>R</td>
    <td>Pentax Electronic File</td>
    <td>Requires an explicit image format otherwise the image is interpreted as a TIFF image (e.g. pef:image.pef).</td>
  </tr>

  <tr>
    <td>PES</td>
    <td>R</td>
    <td>Embrid Embroidery Format</td>
    <td> </td>
  </tr>

  <tr>
    <td>PFA</td>
    <td>R</td>
    <td>Postscript Type 1 font (ASCII)</td>
    <td>Opening as file returns a preview image.</td>
  </tr>

  <tr>
    <td>PFB</td>
    <td>R</td>
    <td>Postscript Type 1 font (binary)</td>
    <td>Opening as file returns a preview image.</td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pfm.html">PFM</a></td>
    <td>RW</td>
    <td>Portable float map format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pgm.html">PGM</a></td>
    <td>RW</td>
    <td>Portable graymap format (gray scale)</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pfm.html">PHM</a></td>
    <td>RW</td>
    <td>Portable float map format 16-bit half</td>
    <td> </td>
  </tr>

  <tr>
    <td>PICON</td>
    <td>RW</td>
    <td>Personal Icon</td>
    <td> </td>
  </tr>

  <tr>
    <td>PICT</td>
    <td>RW</td>
    <td>Apple Macintosh QuickDraw/PICT file</td>
    <td> </td>
  </tr>

  <tr>
    <td>PIX</td>
    <td>R</td>
    <td>Alias/Wavefront RLE image format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>Requires libpng-1.0.11 or later, <a href="http://www.libpng.org/pub/png/libpng.html">libpng-1.2.5</a> or later recommended. The PNG specification does not support pixels-per-inch units, only pixels-per-centimeter. To avoid reading a particular associated image profile, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define profile:skip=<i>name</i></a> (e.g. profile:skip=ICC).  Set the maximum chunk size with <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define png:chunk-malloc-max=<i>value</i></a>.</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG8</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>8-bit indexed with optional binary transparency</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG00</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>PNG inheriting subformat from original if possible</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG24</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>opaque or binary transparent 24-bit RGB</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG32</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>opaque or transparent 32-bit RGBA</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG48</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>opaque or binary transparent 48-bit RGB</td>
  </tr>

  <tr>
    <td><a href="http://www.libpng.org/pub/png/">PNG64</a></td>
    <td>RW</td>
    <td>Portable Network Graphics</td>
    <td>opaque or transparent 64-bit RGB</td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/pnm.html">PNM</a></td>
    <td>RW</td>
    <td>Portable anymap</td>
    <td>PNM is a family of formats supporting portable bitmaps (PBM) , graymaps (PGM), and pixmaps (PPM). There is no file format associated with pnm itself. If PNM is used as the output format specifier, then ImageMagick automagically selects the most appropriate format to represent the image.  The default is to write the binary version of the formats. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compress">-compress none</a> to write the ASCII version of the formats.</td>
  </tr>

  <tr>
    <td>POCKETMOD</td>
    <td>RW</td>
    <td>Pocketmod personal organizer format</td>
    <td>Example usage: <samp>magick -density 300 pages?.pdf pocketmod:organize.pdf</samp> </td>
  </tr>

  <tr>
    <td><a href="http://netpbm.sourceforge.net/doc/ppm.html">PPM</a></td>
    <td>RW</td>
    <td>Portable pixmap format (color)</td>
    <td> </td>
  </tr>

  <tr>
    <td>PS</td>
    <td>RW</td>
    <td>Adobe PostScript file</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read. To force ImageMagick to respect the crop box, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> (e.g. <samp>-define eps:use-cropbox=true</samp>). Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#density">-density</a> to improve the appearance of your Postscript rendering (e.g. -density 300x300).  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#alpha">-alpha remove </a> to remove transparency. To specify direct conversion from PDF to Postscript, use <samp>-define delegate:bimodel=true</samp>.</td>
  </tr>

  <tr>
    <td>PS2</td>
    <td>RW</td>
    <td>Adobe Level II PostScript file</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td>PS3</td>
    <td>RW</td>
    <td>Adobe Level III PostScript file</td>
    <td>Requires <a href="https://www.ghostscript.com/download.html">Ghostscript</a> to read.</td>
  </tr>

  <tr>
    <td><a href="http://www.adobe.com/devnet-apps/photoshop/fileformatashtml/">PSB</a></td>
    <td>RW</td>
    <td>Adobe Large Document Format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.adobe.com/devnet-apps/photoshop/fileformatashtml/">PSD</a></td>
    <td>RW</td>
    <td>Adobe Photoshop multispectral bitmap file</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define psd:alpha-unblend=off</a> to disable alpha blending in the merged image. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define psd:additional-info=all|selective</a> to transfer additional information from the input PSD file to output PSD file. The 'selective' option will preserve all additional information that is not related to the geometry of the image. The 'all' option should only be used when the geometry of the image has not been changed. This option is helpful when transferring non-simple layers, such as adjustment layers from the input PSD file to the output PSD file. This define is available as of Imagemagick version 6.9.5-8. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define psd:preserve-opacity-mask=true</a> to preserve the opacity mask of a layer and add it back to the layer when the image is saved.</td>
  </tr>

  <tr>
    <td>PTIF</td>
    <td>RW</td>
    <td>Pyramid encoded <a href="#TIFF">TIFF</a></td>
    <td>Multi-resolution <a href="#TIFF">TIFF</a> containing successively smaller versions of the image down to the size of an icon.  Use <samp>-define ptif:pyramid</samp> to specify the min-base and levels of the pyramid, e.g. 64x4.</td>
  </tr>

  <tr>
    <td><a href="http://www.photoworks.com/">PWP</a></td>
    <td>R</td>
    <td>Seattle File Works multi-image file</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://qoiformat.org/">QOI</a></td>
    <td>RW</td>
    <td>Quite OK Image Format</td>
    <td>Fast, lossless image compression.</td>
  </tr>

  <tr>
    <td>RAD</td>
    <td>R</td>
    <td>Radiance image file</td>
    <td>Requires that <i>ra_ppm</i> from the Radiance software package be installed.</td>
  </tr>

  <tr>
    <td>RAF</td>
    <td>R</td>
    <td>Fuji CCD-RAW Graphic File</td>
    <td> </td>
  </tr>

  <tr>
    <td>RAW</td>
    <td>R</td>
    <td>Raw</td>
    <td></td>
  </tr>

  <tr>
    <td>RGB</td>
    <td>RW</td>
    <td>Raw red, green, and blue samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>RGB565</td>
    <td>R</td>
    <td>Raw red, green, blue pixels in the 5-6-5 format</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> to specify the image width and height.</td>
  </tr>

  <tr>
    <td>RGBA</td>
    <td>RW</td>
    <td>Raw red, green, blue, and alpha samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.  To specify a single precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 32 for single precision floats, 64 for double precision, and 16 for half-precision.</td>
  </tr>

  <tr>
    <td>RGF</td>
    <td>RW</td>
    <td>LEGO Mindstorms EV3 Robot Graphics File</td>
    <td> </td>
  </tr>

  <tr>
    <td>RLA</td>
    <td>R</td>
    <td>Alias/Wavefront image file</td>
    <td> </td>
  </tr>

  <tr>
    <td>RLE</td>
    <td>R</td>
    <td>Utah Run length encoded image file</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.oreilly.com/www/centers/gff/formats/scitex/">SCT</a></td>
    <td>R</td>
    <td>Scitex Continuous Tone Picture</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.photoworks.com/">SFW</a></td>
    <td>R</td>
    <td>Seattle File Works image</td>
    <td> </td>
  </tr>

  <tr>
    <td>SGI</td>
    <td>RW</td>
    <td>Irix RGB image</td>
    <td> </td>
  </tr>

  <tr>
    <td>SHTML</td>
    <td>W</td>
    <td>Hypertext Markup Language client-side image map</td>
    <td>Used to write HTML clickable image maps based on a the output of <a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">montage</a> or a format which supports tiled images such as <a href="#MIFF">MIFF</a>.</td>
  </tr>

  <tr>
    <td>SID, MrSID</td>
    <td>R</td>
    <td>Multiresolution seamless image</td>
    <td>Requires the <a href="http://www.lizardtech.com/downloads/downloads.php?dl=/download/files/lin/geoexpress_commandlineutils_linux.tgz">mrsidgeodecode</a> command line utility that decompresses MG2 or MG3 SID image files.</td>
  </tr>

  <tr>
    <td>SPARSE-COLOR</td>
    <td>W</td>
    <td>Raw text file</td>
    <td>Format compatible with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sparse-color">-sparse-color</a> option. Lists only non-fully-transparent pixels.</td>
  </tr>

  <tr>
    <td>STRIMG</td>
    <td>RW</td>
    <td>String to images and back</td>
    <td> </td>
  </tr>

  <tr>
    <td>SUN</td>
    <td>RW</td>
    <td>SUN Rasterfile</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.w3.org/Graphics/SVG">SVG</a></td>
    <td>RW</td>
    <td>Scalable Vector Graphics</td>
    <td>By default, ImageMagick renders SVGs with <a href="http://www.inkscape.org/">inkscape</a> if it is in your execution path; otherwise <a href="http://developer.gnome.org/rsvg/">RSVG</a>. If neither is available, ImageMagick reverts to its internal SVG renderer (called MSVG). The default resolution is 96 dpi. Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> command line option to specify the maximum width and height. (<samp>-size</samp> is currently ignored by the Inkscape renderer due to a limitation on the Inkscape side). The SVG standard expects to draw over a transparent background.  Set <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#background">-background none</a> to comply with the standard. If you want to substitute entities and you trust the SVG source, enable this option: <samp>-define svg:substitute-entities=true</samp>. If you want to render a very large SVG and you trust the source, enable this option: <samp>-define svg:parse-huge=true</samp>. Enable embedding if your SVG embeds another SVG and you trust the source:  <samp>-define svg:embedding=true</samp>. If RSVG is installed and you want to render an SVG using RSVG, add <samp>rsvg:</samp> just before the file name. If you want to render an SVG using MSVG, add <samp>msvg:</samp> just before the file name.</td>
  </tr>

  <tr>
    <td>TEXT</td>
    <td>R</td>
    <td>text file</td>
    <td>Requires an explicit format specifier to read, e.g. text:README.txt.</td>
  </tr>

  <tr>
    <td>TGA</td>
    <td>RW</td>
    <td>Truevision Targa image</td>
    <td>Also known as formats <samp>ICB</samp>, <samp>VDA</samp>, and <samp>VST</samp>. Use <samp>-define tga:preserve-orientation=true</samp> to preserve the image orientation.</td>
  </tr>

  <tr>
    <td><a href="http://www.libtiff.org/">TIFF</a></td>
    <td>RW</td>
    <td>Tagged image file multispectral format</td>
    <td>Also known as <samp>TIF</samp>. Requires <a href="http://www.libtiff.org/">tiff-v3.6.1.tar.gz</a> or later.  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to specify the rows per strip (e.g. <samp>-define tiff:rows-per-strip=8</samp>).  To define the tile geometry, use for example, <samp>-define tiff:tile-geometry=128x128</samp>. To specify a <var>signed</var> format, use  <samp>-define quantum:format=signed</samp>. To specify a single-precision floating-point format, use <samp>-define quantum:format=floating-point</samp>.  Set the depth to 64 for a double-precision floating-point format.  Use <samp>-define quantum:polarity=min-is-black</samp> or <samp>-define quantum:polarity=min-is-white</samp> toggle the photometric interpretation for a bilevel image.  Specify the extra samples as associated or unassociated alpha with, for example, <samp>-define tiff:alpha=unassociated</samp>.  Set the fill order with <samp>-define tiff:fill-order=msb|lsb</samp>. Set the TIFF endianness with <samp>-define tiff:endian=msb|lsb</samp>. Use <samp>-define tiff:exif-properties=false</samp> to skip reading the EXIF properties.  Use <samp>-define tiff:gps-properties=false</samp> to skip reading the GPS properties. You can set a number of TIFF software attributes including document name, host computer, artist, timestamp, make, model, software, and copyright.  For example, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set tiff:software "My Company"</a>. If you want to ignore certain TIFF tags, use this option: <samp>-define tiff:ignore-tags=comma-separated-list-of-tag-IDs</samp>. Since version 6.9.1-4 there is support for reading photoshop layers in TIFF files, this can be disabled with <samp>-define tiff:ignore-layers=true</samp>. To preserve compression of the source image, use: <samp>-define tiff:preserve-compression=true</samp>.</td>
  </tr>

  <tr>
    <td>TIM</td>
    <td>R</td>
    <td>PSX TIM file</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.freetype.org/">TTF</a></td>
    <td>R</td>
    <td>TrueType font file</td>
    <td>Requires <a href="http://www.freetype.org/">freetype 2</a>. Opening as file returns a preview image. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set</a> if you do not want to hint glyph outlines after their scaling to device pixels (e.g. <samp>-set type:hinting off</samp>).</td>
  </tr>

  <tr>
    <td>TXT</td>
    <td>RW</td>
    <td>Multispectral raw text file</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to specify the color compliance (e.g. <samp>-define txt:compliance=css</samp>).</td>
  </tr>

   <tr>
    <td><a href="http://www.unicode.org/charts/PDF/U2800.pdf">UBRL</a></td>
    <td>W</td>
    <td>Unicode BRaiLle</td>
    <td>Uses juxtaposition of 8-dot braille patterns (thus 8x2 dot matrices) to reproduce images, using the Unicode Braille encoding.</td>
  </tr>

  <tr>
    <td><a href="http://www.unicode.org/charts/PDF/U2800.pdf">UBRL6</a></td>
    <td>W</td>
    <td>Unicode BRaiLle 6 dots</td>
    <td>Uses juxtaposition of 6-dot braille patterns (thus 6x2 dot matrices) to reproduce images, using the Unicode Braille encoding.</td>
  </tr>

  <tr>
    <td><a href="https://developer.android.com/media/platform/hdr-image-format">UHDR</a></td>
    <td>RW</td>
    <td>Ultra HDR</td>
    <td>Requires the <a href="https://github.com/google/libultrahdr.git">libultrahdr</a> delegate library. Recognized <a href="<?php echo $_SESSION['RelativePath']?>/../script/defines.php">defines</a> include <samp>uhdr:hdr-color-gamut</samp>, <samp>uhdr:hdr-color-transfer</samp>, <samp>uhdr:sdr-color-gamut</samp>, <samp>uhdr:gainmap-quality</samp>, <samp>uhdr:gainmap-gamma</samp>, <samp>uhdr:gainmap-min-content-boost</samp>, <samp>uhdr:gainmap-max-content-boost</samp>, and <samp>uhdr:target-display-peak-brightness</samp>.</td>
  </tr>

  <tr>
    <td>UIL</td>
    <td>W</td>
    <td>X-Motif UIL table</td>
    <td> </td>
  </tr>

  <tr>
    <td>UYVY</td>
    <td>RW</td>
    <td>Interleaved YUV raw image</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> command line options to specify width and height.  Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sampling-factor">-sampling-factor</a> to set the desired subsampling (e.g. -sampling-factor 4:2:2).</td>
  </tr>

  <tr>
    <td>VICAR</td>
    <td>RW</td>
    <td>VICAR rasterfile format</td>
    <td> </td>
  </tr>

  <tr>
    <td>VIDEO</td>
    <td>RW</td>
    <td>Various video formats</td>
    <td>Video formats such as APNG, AVI, MP4, WEBM, etc.  Refer to <a href="<?php echo $_SESSION['RelativePath']?>/../script/defines.php">defines</a>  for a description of these defines: <samp>video:intermediate-format</samp>, <samp>video:pixel-format</samp>, and <samp>video:vsync</samp> defines, that can affect the operation on these video formats.</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/viff/egff.htm">VIFF</a></td>
    <td>RW</td>
    <td>Khoros Visualization Image File Format</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.openmobilealliance.org/Technical/wapindex.aspx">WBMP</a></td>
    <td>RW</td>
    <td>Wireless bitmap</td>
    <td>Support for uncompressed monochrome only.</td>
  </tr>

  <tr>
    <td><a href="https://en.wikipedia.org/wiki/JPEG_XR">WDP</a></td>
    <td>RW</td>
    <td>JPEG extended range</td>
    <td>Requires the <a href="https://jxrlib.codeplex.com/">jxrlib</a> delegate library. Put the JxrDecApp and JxrEncApp applications in your execution path. </td>
  </tr>

  <tr>
    <td><a href="http://en.wikipedia.org/wiki/WebP">WEBP</a></td>
    <td>RW</td>
    <td>Weppy image format</td>
    <td>Requires the <a href="https://developers.google.com/speed/webp/download">WEBP</a> delegate library.  The muxing delegate library is required to read animated Webp image containers. Specify the encoding options with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> option  See <a href="<?php echo $_SESSION['RelativePath']?>/../script/webp.php">WebP Encoding Options</a> for more details.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/wmf/egff.htm">WMF</a></td>
    <td>R</td>
    <td>Windows Metafile</td>
    <td>Requires <a href="http://sourceforge.net/projects/wvware/">libwmf</a>. By default, renders WMF files using the dimensions specified by the metafile header. Use the -density option to adjust the output resolution, and thereby adjust the output size. The default output resolution is 72DPI so <samp>-density 144</samp> results in an image twice as large as the default. Use <samp>-background color</samp> to specify the WMF background color (default white) or <samp>-texture filename</samp> to specify a background texture image.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/wpg/egff.htm">WPG</a></td>
    <td>R</td>
    <td>Word Perfect Graphics File</td>
    <td> </td>
  </tr>

  <tr>
    <td>X</td>
    <td>RW</td>
    <td>display or import an image to or from an X11 server</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a> to obtain the image from the root window (e.g. <samp>-define x:screen=true</samp>).  Set <samp>x:silent=true</samp> to turn off the beep when importing an image.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/xbm/egff.htm">XBM</a></td>
    <td>RW</td>
    <td>X Windows system bitmap, black and white only</td>
    <td>Used by the X Windows System to store monochrome icons.</td>
  </tr>

  <tr>
    <td>XCF</td>
    <td>R</td>
    <td>GIMP image</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/xpm/egff.htm">XPM</a></td>
    <td>RW</td>
    <td>X Windows system pixmap</td>
    <td>Also known as <samp>PM</samp>. Used by the X Windows System to store color icons.</td>
  </tr>

  <tr>
    <td><a href="http://www.fileformat.info/format/xwd/egff.htm">XWD</a></td>
    <td>RW</td>
    <td>X Windows system window dump</td>
    <td>Used by the X Windows System to save/display screen dumps.</td>
  </tr>

  <tr>
    <td>X3F</td>
    <td>R</td>
    <td>Sigma Camera RAW Picture File</td>
    <td> </td>
  </tr>

  <tr>
    <td><a href="https://yaml.org/">YAML</a></td>
    <td>W</td>
    <td>human-readable data-serialization language</td>
    <td>Include additional attributes about the image with these defines: <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define yaml:locate</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define yaml:limit</a>, <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define yaml:moments</a>, or <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define yaml:features</a>.  Specify the JSON model schema version with <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define yaml:version</a>.  The current version is 1.0.</td>
  </tr>

  <tr>
    <td>YCbCr</td>
    <td>RW</td>
    <td>Raw Y, Cb, and Cr samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.</td>
  </tr>

  <tr>
    <td>YCbCrA</td>
    <td>RW</td>
    <td>Raw Y, Cb, Cr, and alpha samples</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to specify the image width, height, and depth.</td>
  </tr>

  <tr>
    <td>YUV</td>
    <td>RW</td>
    <td>CCIR 601 4:1:1</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> command line options to specify width, height, and depth.   Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#sampling-factor">-sampling-factor</a> to set the desired subsampling (e.g. -sampling-factor 4:2:2).</td>
  </tr>
  </tbody>
</table>
</div>
<br/>
<h2><a class="anchor" id="pseudo"></a>Pseudo-image Formats</h2>

<p>ImageMagick supports a number of image format specifications which refer to images prepared via an algorithm, or input/output targets. The following table lists these pseudo-image formats:</p>

<div class="pre-scrollable p-3 mb-2 text-body-secondary bg-body-tertiary">
<table class="table table-sm table-hover table-striped table-responsive">
  <tr>
    <th>Tag</th>
    <th>Mode</th>
    <th>Description</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td>ASHLAR</td>
    <td>W</td>
    <td>Image sequence laid out in continuous irregular courses</td>
    <td>By default, a reasonable canvas size and border width is determined relative to the image collection you provide.  You can explicitly set the canvas size and border width by appending to the filename, e.g. <samp>ashlar:canvas.png[1024x768+4+4]</samp>. By default, alignment is along the left edge.  Use <samp>-define ashlar:best-fit=true</samp> to align on both the left  and right edges.  You can label the image tiles with, for example, <samp>-label %f</samp>. By default, all image tiles are rendered on a single canvas.  Use <samp>-define ashlar:tiles=50</samp>, for example, to render at most 50 tiles per canvas.</td>
  </tr>

  <tr>
    <td>CANVAS</td>
    <td>R</td>
    <td>Canvas image of specified color</td>
    <td>Useful to create solid color <var>canvas</var> images. Use
       <a href="<?php echo $_SESSION['RelativePath']
       ?>/../script/command-line-options.php#size" >-size</a> and <a
       href="<?php echo $_SESSION['RelativePath']
       ?>/../script/command-line-options.php#depth" >-depth</a> to specify the
       image width, height, and depth.  Example canvas color specifications
       include <samp>canvas:red</samp> and <samp>canvas:#FF0000</samp>.<br/>

       If no color is specified a '<samp>white</samp>' canvas image is
       generated.  If no <a href="<?php echo $_SESSION['RelativePath']
       ?>/../script/command-line-options.php#size" >-size</a> is specified
       a single pixel image of the specified color is generated.</td>

  </tr>

  <tr>
    <td>CAPTION</td>
    <td>R</td>
    <td>Image caption</td>
    <td>Use <samp>-define caption:split=true</samp> to split text if required to fit caption on the canvas</td>
  </tr>

  <tr>
    <td>CLIP</td>
    <td>RW</td>
    <td>Clip path of image</td>
    <td> </td>
  </tr>

  <tr>
    <td>CLIPBOARD</td>
    <td>RW</td>
    <td>Clipboard</td>
    <td></td>
  </tr>

  <tr>
    <td>FRACTAL</td>
    <td>R</td>
    <td>Plasma fractal image</td>
    <td> </td>
  </tr>

  <tr>
    <td>GRADIENT</td>
    <td>R</td>
    <td>Gradual passing from one shade to another</td>
    <td>Returns a rendered linear or radial top-to-bottom <a href="<?php echo $_SESSION['RelativePath']?>/../script/gradient.php">gradient image</a> using the specified image size.</td>

  </tr>

  <tr>
    <td>HALD</td>
    <td>R</td>
    <td>Identity Hald CLUT Image</td>
    <td>Select levels like this: hald:[8] for level 8.</td>
  </tr>

  <tr>
    <td>HISTOGRAM</td>
    <td>W</td>
    <td>Histogram of the image</td>
    <td>The histogram includes the unique colors of the image as an image comment.  If you have no need for the unique color list, use <samp>-define histogram:unique-colors=false</samp> to forego this expensive operation.</td>
  </tr>

  <tr>
    <td>INLINE</td>
    <td>RW</td>
    <td>Base64-encoded inline image</td>
    <td>The inline image look similar to <samp>inline:data:;base64,/9j/4AAQSk...knrn//2Q==</samp>.  If the inline image exceeds 5000 characters, reference it from a file (e.g. <samp>inline:inline.txt</samp>). You can also write a base64-encoded image.  Embed the mime type in the filename, for example, <samp>magick myimage inline:jpeg:myimage.txt</samp>.</td>
  </tr>

  <tr>
    <td>LABEL</td>
    <td>R</td>
    <td>Text image format</td>
    <td>Specify the desired text as the filename (e.g. <samp>label:"This a label"</samp>).</td>
  </tr>

  <tr>
    <td>MAP</td>
    <td>RW</td>
    <td>Colormap intensities and indices</td>
    <td>Set <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#depth">-depth</a> to set the sample size of the intensities; indices are 16-bit if colors &gt; 256.</td>
  </tr>

  <tr>
    <td>MASK</td>
    <td>RW</td>
    <td>Grayscale image mask.  A sequence is emitted if the source image has more than one mask.</td>
    <td> </td>
  </tr>

  <tr>
    <td>MATTE</td>
    <td>W</td>
    <td>MATTE format</td>
    <td>Write only.</td>
  </tr>

  <tr>
    <td>NULL</td>
    <td>RW</td>
    <td>NULL image</td>
    <td>Useful for creating blank tiles with <a href="<?php echo $_SESSION['RelativePath']?>/../script/montage.php">montage</a> (use <samp>NULL:</samp>). Also useful as an output format when evaluating image read performance.</td>
  </tr>

  <tr>
    <td>PANGO</td>
    <td>R</td>
    <td>Image caption</td>
    <td>You can configure the caption layout with these defines: <samp>-define pango:auto-dir=</samp><var>true/false</var>, <samp>-define pango:ellipsize=</samp><var>start/middle/end</var>, <samp>-define pango:gravity-hint=</samp><var>natural/strong/line</var>, <samp>-define pango:hinting=</samp><var>none/auto/full</var>, <samp>-define pango:indent=</samp><var>points</var>, <samp>-define pango:justify=</samp><var>true/false</var>, <samp>-define pango:language=</samp><var>en_US/etc</var>, <samp>-define pango:markup=</samp><var>true/false</var>, <samp>-define pango:single-paragraph=</samp><var>true/false</var>, <samp>-define pango:wrap=</samp><var>word/char/word-char</var> and <samp>-define pango:align=</samp><var>left/center/right</var>.</td>
  </tr>

  <tr>
    <td>PLASMA</td>
    <td>R</td>
    <td>Plasma fractal image</td>
    <td> </td>
  </tr>

  <tr>
    <td>PREVIEW</td>
    <td>W</td>
    <td>Show a preview an image enhancement, effect, or f/x</td>
    <td>Creates a preview montage of images prepared over a parametric range in order to assist with parameter selection. Specify the desired
    preview type via the -preview option).</td>
  </tr>

  <tr>
    <td>PRINT</td>
    <td>W</td>
    <td>Send image to your computer printer</td>
    <td>Linux users may set the PRINTER (for 'lpr') or LPDEST (for 'lp') environment variables to select the desired printer.</td>
  </tr>

  <tr>
    <td>SCAN</td>
    <td>R</td>
    <td>Import image from a scanner device</td>
    <td>Requires <a href="http://www.sane-project.org/">SANE</a> Specify the device name and path as the filename (e.g.  <samp>scan:'hpaio:/usb/Officejet_6200_series?serial=CN4ATCE3G20453'</samp>).</td>
  </tr>

  <tr>
    <td>RADIAL_GRADIENT</td>
    <td>R</td>
    <td>Gradual radial passing from one shade to another</td>
    <td>Returns a rendered radial top-to-bottom <a href="<?php echo $_SESSION['RelativePath']?>/../script/gradient.php">gradient image</a> using the specified image size.</td>
  </tr>

  <tr>
    <td>SCANX</td>
    <td>R</td>
    <td>Import image from the default scanner device</td>
    <td> </td>
  </tr>

  <tr>
    <td>SCREENSHOT</td>
    <td>R</td>
    <td>an image that shows the contents of a computer display.  Under Windows, if you have multiple monitors, it returns a screenshot for each monitor.</td>
    <td> </td>
  </tr>

  <tr>
    <td>STEGANO</td>
    <td>R</td>
    <td>Steganographic image</td>
    <td>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> command line option to specify width, height, and offset of the steganographic image</td>
  </tr>

  <tr>
    <td>TILE</td>
    <td>R</td>
    <td>Tiled image</td>
    <td>Create a tiled version of an image at by tiling a image. Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> to specify the tiled image size. Tiles are composited on an image background and therefore is responsive to the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compose">-compose</a> option.  The image is specified similar to
    <samp>TILE:image.miff</samp>.</td>
  </tr>

  <tr>
    <td>UNIQUE</td>
    <td>W</td>
    <td>Write only unique pixels to the image file.</td>
    <td> </td>
  </tr>

  <tr>
    <td>VID</td>
    <td>RW</td>
    <td>Visual Image Directory</td>
    <td>Used to create a thumbnailed directory (tiled thumbnails) of a set of images which may be used to select images to view via the <a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a> program, or saved to a <a href="#MIFF">MIFF</a> or <a href="#SHTML">SHTML</a> file.</td>
  </tr>

  <tr>
    <td>WIN</td>
    <td>RW</td>
    <td>Select image from or display image to your computer screen</td>
    <td>Only supported under Microsoft Windows.</td>
  </tr>

  <tr>
    <td>X</td>
    <td>RW</td>
    <td>Select image from or display image to your X server screen</td>
    <td>Also see the <a href="<?php echo $_SESSION['RelativePath']?>/../script/import.php">import</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/display.php">display</a>
    programs.</td>
  </tr>

  <tr>
    <td>XC</td>
    <td>R</td>
    <td>Canvas image of specified color</td>
    <td>An backward compatible alias for the '<samp>canvas:</samp>'
    psuedo-file format, used to create a solid color <var>canvas</var> image.
    </td>
  </tr>
</table>
</div>

<br/>
<h2><a class="anchor" id="builtin-images"></a>Built-in Images</h2>

<p>ImageMagick includes a number of built-in (embedded) images which may be referenced as if they were an image file. The <samp>magick:</samp> format tag may be used via the syntax <samp>magick:</samp><var>name</var> to request an embedded image (e.g. <samp>magick:logo</samp>). For backwards compatibility, the image specifications <samp>GRANITE:</samp>, <samp>LOGO:</samp>, <samp>NETSCAPE:</samp>, and <samp>ROSE:</samp> may also be used to request images with those names.</p>

<div class="pre-scrollabl">
<table class="table table-sm table-hover table-striped table-responsive">
  <tr>
    <th>Tag</th>
    <th>Mode</th>
    <th>Description</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td>GRANITE</td>
    <td>R</td>
    <td>128x128 granite texture pattern</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/granite.png" width="64" height="64" alt="GRANITE"/></td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../image/logo.png">LOGO</a></td>
    <td>R</td>
    <td>ImageMagick Logo, 640x480</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/logo.jpg" width="123" height="118" alt="Logo"/></td>
  </tr>

  <tr>
    <td> NETSCAPE</td>
    <td>R</td>
    <td>image using colors in Netscape 216 (6x6x6 ) color cube, 216x144</td>
    <td>Most commonly used with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick.php">magick</a> and <a href="<?php echo $_SESSION['RelativePath']?>/../script/mogrify.php">magick mogrify</a> programs with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#map">-map</a> option to create <var>web safe</var> images.</td>
  </tr>

  <tr>
    <td>ROSE</td>
    <td>R</td>
    <td>Picture of a rose, 70x46</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose.png" width="70" height="46" alt="ROSE"/></td>
  </tr>

  <tr>
    <td><a href="<?php echo $_SESSION['RelativePath']?>/../image/wizard.png">WIZARD</a></td>
    <td>R</td>
    <td>ImageMagick Wizard, 480x640</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/wizard.jpg" width="125" height="167" alt="Logo"/></td>
  </tr>

</table></div>

<br/>
<h2><a class="anchor" id="builtin-patterns"></a>Built-in Patterns</h2>

<p>ImageMagick includes a number of built-in (embedded) patterns which may be referenced as if they were an image file. The <samp>pattern:</samp> format tag may be used via the syntax <samp>pattern:</samp><var>name</var> to request an embedded pattern (e.g. <samp>pattern:checkerboard</samp>). The pattern size is controlled with the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#size">-size</a> command line option.</p>

<div class="pre-scrollable">
<table class="table table-sm table-hover table-striped table-responsive">
  <tr>
    <th>Tag</th>
    <th>Mode</th>
    <th>Description</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td>BRICKS</td>
    <td>R</td>
    <td>brick pattern, 16x16</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/bricks.png" width="100" height="26" alt="BRICKS" /></td>
  </tr>

  <tr>
    <td>CHECKERBOARD</td>
    <td>R</td>
    <td>checkerboard pattern, 30x30</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/checkerboard.png" width="100" height="26" alt="CHECKERBOARD" /></td>
  </tr>

  <tr>
    <td>CIRCLES</td>
    <td>R</td>
    <td>circles pattern, 16x16</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/circles.png" width="100" height="26" alt="CIRCLES"/></td>
  </tr>

  <tr>
    <td>CROSSHATCH</td>
    <td>R</td>
    <td>crosshatch pattern, 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/crosshatch.png" width="100" height="26" alt="CROSSHATCH" /></td>
  </tr>

  <tr>
    <td>CROSSHATCH30</td>
    <td>R</td>
    <td>crosshatch pattern with lines at 30 degrees, 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/crosshatch30.png" width="100" height="26" alt="CROSSHATCH30" /></td>
  </tr>

  <tr>
    <td>CROSSHATCH45</td>
    <td>R</td>
    <td>crosshatch pattern with lines at 45 degrees, 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/crosshatch45.png" width="100" height="26" alt="CROSSHATCH45" /></td>
  </tr>

  <tr>
    <td>FISHSCALES</td>
    <td>R</td>
    <td>fish scales pattern, 16x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/fishscales.png" width="100" height="26" alt="FISHSCALES" /></td>
  </tr>

  <tr>
    <td>GRAY0</td>
    <td>R</td>
    <td>0% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray0.png" width="100" height="32" alt="GRAY0" /></td>
  </tr>

  <tr>
    <td>GRAY5</td>
    <td>R</td>
    <td>5% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray5.png" width="100" height="32" alt="GRAY5" /></td>
  </tr>

  <tr>
    <td>GRAY10</td>
    <td>R</td>
    <td>10% intensity gray, 32x32</td>
    <td> <img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray10.png" width="100" height="32" alt="GRAY10" /></td>
  </tr>

  <tr>
    <td>GRAY15</td>
    <td>R</td>
    <td>15% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray15.png" width="100" height="32" alt="GRAY15" /></td>
  </tr>

  <tr>
    <td>GRAY20</td>
    <td>R</td>
    <td>20% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray20.png" width="100" height="32" alt="GRAY20" /></td>
  </tr>

  <tr>
    <td>GRAY25</td>
    <td>R</td>
    <td>25% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray25.png" width="100" height="32" alt="GRAY25" /></td>
  </tr>

  <tr>
    <td>GRAY30</td>
    <td>R</td>
    <td>30% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray30.png" width="100" height="32" alt="GRAY30" /></td>
  </tr>

  <tr>
    <td>GRAY35</td>
    <td>R</td>
    <td>35% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray35.png" width="100" height="32" alt="GRAY35" /></td>
  </tr>

  <tr>
    <td>GRAY40</td>
    <td>R</td>
    <td>40% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray40.png" width="100" height="32" alt="GRAY40" /></td>
  </tr>

  <tr>
    <td>GRAY45</td>
    <td>R</td>
    <td>45% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray45.png" width="100" height="32" alt="GRAY45" /></td>
  </tr>

  <tr>
    <td>GRAY50</td>
    <td>R</td>
    <td>50% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray50.png" width="100" height="32" alt="GRAY50" /></td>
  </tr>

  <tr>
    <td>GRAY55</td>
    <td>R</td>
    <td>55% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray55.png" width="100" height="32" alt="GRAY55" /></td>
  </tr>

  <tr>
    <td>GRAY60</td>
    <td>R</td>
    <td>60% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray60.png" width="100" height="32" alt="GRAY60" /></td>
  </tr>

  <tr>
    <td>GRAY65</td>
    <td>R</td>
    <td>65% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray65.png" width="100" height="32" alt="GRAY65" /></td>
  </tr>

  <tr>
    <td>GRAY70</td>
    <td>R</td>
    <td>70% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray70.png" width="100" height="32" alt="GRAY70" /></td>
  </tr>

  <tr>
    <td>GRAY75</td>
    <td>R</td>
    <td>75% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray75.png" width="100" height="32" alt="GRAY75" /></td>
  </tr>

  <tr>
    <td>GRAY80</td>
    <td>R</td>
    <td>80% intensity gray, 32x32</td>
    <td> <img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray80.png" width="100" height="32" alt="GRAY80" /></td>
  </tr>

  <tr>
    <td>GRAY85</td>
    <td>R</td>
    <td>85% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray85.png" width="100" height="32" alt="GRAY85" /></td>
  </tr>

  <tr>
    <td>GRAY90</td>
    <td>R</td>
    <td>90% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray90.png" width="100" height="32" alt="GRAY90" /></td>
  </tr>

  <tr>
    <td>GRAY95</td>
    <td>R</td>
    <td>95% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray95.png" width="100" height="32" alt="GRAY95" /></td>
  </tr>

  <tr>
    <td>GRAY100</td>
    <td>R</td>
    <td>100% intensity gray, 32x32</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/gray100.png" width="100" height="32" alt="GRAY100" /></td>
  </tr>

  <tr>
    <td>HEXAGONS</td>
    <td>R</td>
    <td>hexagon pattern, 30x18</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hexagons.png" width="100" height="26" alt="HEXAGONS" /></td>
  </tr>

  <tr>
    <td>HORIZONTAL</td>
    <td>R</td>
    <td>horizontal line pattern, 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/horizontal.png" width="100" height="26" alt="HORIZONTAL" /></td>
  </tr>

  <tr>
    <td>HORIZONTAL2</td>
    <td>R</td>
    <td>horizontal line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/horizontal2.png" width="100" height="26" alt="HORIZONTAL2" /></td>
  </tr>

  <tr>
    <td>HORIZONTAL3</td>
    <td>R</td>
    <td>horizontal line pattern, 9x9</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/horizontal3.png" width="100" height="26" alt="HORIZONTAL3" /></td>
  </tr>

  <tr>
    <td>HORIZONTALSAW</td>
    <td>R</td>
    <td>horizontal saw-tooth pattern, 16x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/horizontalsaw.png" width="100" height="26" alt="HORIZONTALSAW" /></td>
  </tr>

  <tr>
    <td>HS_BDIAGONAL</td>
    <td>R</td>
    <td>backward diagonal line pattern (45 degrees slope), 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_bdiagonal.png" width="100" height="26" alt="HS_BDIAGONAL" /></td>
  </tr>

  <tr>
    <td>HS_CROSS</td>
    <td>R</td>
    <td>cross line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_cross.png" width="100" height="26" alt="HS_CROSS" /></td>
  </tr>

  <tr>
    <td>HS_DIAGCROSS</td>
    <td>R</td>
    <td>diagonal line cross pattern (45 degrees slope), 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_diagcross.png" width="100" height="26" alt="HS_DIAGCROSS" /></td>
  </tr>

  <tr>
    <td>HS_FDIAGONAL</td>
    <td>R</td>
    <td>forward diagonal line pattern (45 degrees slope), 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_fdiagonal.png" width="100" height="26" alt="HS_FDIAGONAL" /></td>
  </tr>

  <tr>
    <td>HS_HORIZONTAL</td>
    <td>R</td>
    <td>horizontal line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_horizontal.png" width="100" height="26" alt="HS_HORIZONTAL" /></td>
  </tr>

  <tr>
    <td>HS_VERTICAL</td>
    <td>R</td>
    <td>vertical line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/hs_vertical.png" width="100" height="26" alt="HS_VERTICAL" /></td>
  </tr>

  <tr>
    <td>LEFT30</td>
    <td>R</td>
    <td>forward diagonal pattern (30 degrees slope), 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/left30.png" width="100" height="26" alt="LEFT0" /></td>
  </tr>

  <tr>
    <td>LEFT45</td>
    <td>R</td>
    <td>forward diagonal line pattern (45 degrees slope), 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/left45.png" width="100" height="26" alt="LEFT45" /></td>
  </tr>

  <tr>
    <td>LEFTSHINGLE</td>
    <td>R</td>
    <td>left shingle pattern, 24x24</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/leftshingle.png" width="100" height="26" alt="LEFTSHINGLE" /></td>
  </tr>

  <tr>
    <td>OCTAGONS</td>
    <td>R</td>
    <td>octagons pattern, 16x16</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/octagons.png" width="100" height="26" alt="OCTAGONS" /></td>
  </tr>

  <tr>
    <td>RIGHT30</td>
    <td>R</td>
    <td>backward diagonal line pattern (30 degrees) 8x4</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/right30.png" width="100" height="26" alt="RIGHT30" /></td>
  </tr>

  <tr>
    <td>RIGHT45</td>
    <td>R</td>
    <td>backward diagonal line pattern (30 degrees), 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/right45.png" width="100" height="26" alt="RIGHT45" /></td>
  </tr>

  <tr>
    <td>RIGHTSHINGLE</td>
    <td>R</td>
    <td>right shingle pattern, 24x24</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/rightshingle.png" width="100" height="26" alt="RIGHTSHINGLE" /></td>
  </tr>

  <tr>
    <td>SMALLFISHSCALES</td>
    <td>R</td>
    <td>small fish scales pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/smallfishscales.png" width="100" height="26" alt="SMALLFISHSCALES" /></td>
  </tr>

  <tr>
    <td>VERTICAL</td>
    <td>R</td>
    <td>vertical line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/vertical.png" width="100" height="26" alt="VERTICAL" /></td>
  </tr>

  <tr>
    <td>VERTICAL2</td>
    <td>R</td>
    <td>vertical line pattern, 8x8</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/vertical2.png" width="100" height="26" alt="VERTICAL2" /></td>
  </tr>

  <tr>
    <td>VERTICAL3</td>
    <td>R</td>
    <td>vertical line pattern, 9x9</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/vertical3.png" width="100" height="26" alt="VERTICAL3" /></td>
  </tr>

  <tr>
    <td>VERTICALBRICKS</td>
    <td>R</td>
    <td>vertical brick pattern, 16x16</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/verticalbricks.png" width="100" height="26" alt="VERTICALBRICKS" /></td>
  </tr>

  <tr>
    <td>VERTICALLEFTSHINGLE</td>
    <td>R</td>
    <td>vertical left shingle pattern, 24x24</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/verticalleftshingle.png" width="100" height="26" alt="VERTICALLEFTSHINGLE" /></td>
  </tr>

  <tr>
    <td>VERTICALRIGHTSHINGLE</td>
    <td>R</td>
    <td>vertical right shingle pattern, 24x24</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/verticalrightshingle.png" width="100" height="26" alt="VERTICALRIGHTSHINGLE" /></td>
  </tr>

  <tr>
    <td>VERTICALSAW</td>
    <td>R</td>
    <td>vertical saw-tooth pattern, 8x16</td>
    <td><img src="<?php echo $_SESSION['RelativePath']?>/../image/patterns/verticalsaw.png" width="100" height="26" alt="VERTICALSAW" /></td>
  </tr>
</table></div>

<br/>
<h2><a class="anchor" id="embedded"></a>Embedded Image Profiles</h2>

<p>ImageMagick provides a number of format identifiers which are used to add, remove, and save embedded profiles for images which can support embedded profiles. Image types which may contain embedded profiles are TIFF, JPEG, and PDF.</p>

<div class="pre-scrollable">
<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th>Tag</th>
    <th>Mode</th>
    <th>Description</th>
    <th>Notes</th>
  </tr>

  <tr>
    <td>8BIM</td>
    <td>RW</td>
    <td>Photoshop resource format (binary)</td>
    <td> </td>
  </tr>

  <tr>
    <td>8BIMTEXT</td>
    <td>RW</td>
    <td>Photoshop resource format (ASCII)</td>
    <td>An ASCII representation of the 8BIM format.</td>
  </tr>

  <tr>
    <td>APP1</td>
    <td>RW</td>
    <td>Raw application information</td>
    <td> </td>
  </tr>

  <tr>
    <td>APP1JPEG</td>
    <td>RW</td>
    <td>Raw JPEG binary data</td>
    <td>Profile in JPEG wrapper.</td>
  </tr>

  <tr>
    <td>ICC</td>
    <td>RW</td>
    <td>International Color Consortium color profile</td>
    <td>Also known as <samp>ICM</samp>. To read, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#profile">-profile</a> with
      <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick.php">magick</a>.</td>
  </tr>

  <tr>
    <td>IPTC</td>
    <td>RW</td>
    <td>IPTC Newsphoto (binary)</td>
    <td>To read, use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#profile">-profile</a> with <a href="<?php echo $_SESSION['RelativePath']?>/../script/magick.php">magick</a></td>
  </tr>

  <tr>
    <td>IPTCTEXT</td>
    <td>RW</td>
    <td>IPTC Newsphoto (ASCII)</td>
    <td>An ASCII representation of the IPTC format.</td>
  </tr>
  </tbody>
</table></div>

</div>
