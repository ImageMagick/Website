<div class="magick-header">
<p class="lead magick-description"></p>

<table class="table table-sm table-striped">
  <tr>
    <td>auto-threshold:verbose</td>
    <td>return derived threshold as the <kbd>auto-threshold:threshold</kbd> image property.</td>
  </tr>

  <tr>
    <td>bmp3:alpha=<var>true|false</var></td>
    <td>include any alpha channel when writing in the BMP image format.</td>
  </tr>

  <tr>
    <td>bmp:format=<var>value</var></td>
    <td> valid values are <var>bmp2</var>, <var>bmp3</var>,
   and <var>bmp4</var>.  This option can be useful when the
   method of prepending "BMP2:" to the output filename is inconvenient or
   is not available, such as when using the <?php cmd("mogrify"); ?>
   utility.</td>
  </tr>

  <tr>
    <td>bmp:subtype=<var>RGB555|RGB565|ARGB4444|ARGB1555</var></td>
    <td>BMP channel depth subtypes. Only support in BMP (BMP4). BMP3 and BMP2 do not
    contain header fields to support these options.</td>
  </tr>

  <tr>
    <td>colorspace:auto-grayscale=<var>on|off</var></td>
    <td>prevent automatic conversion to grayscale inside coders that support
    grayscale. This should be accompanied by -type truecolor. PNG and TIF do
    not need this define. With PNG, just use PNG24:image. With TIF, just use
    -type truecolor. JPG and PSD will need this define.</td>
  </tr>

  <tr>
    <td>complex:snr=<var>value</var></td>
    <td>Set the divide SNR constant<a href="#complex">-complex</a>.</td>
  </tr>

  <tr>
    <td>compose:args=<var>arguments</var></td>
     <td>Sets certain compose argument values when using convert ... -compose ...
    -composite. See <a href="https://imagemagick.org/script/compose.php"
    >Image Composition</a>.</td>
  </tr>

  <tr>
    <td>compose:clip-to-self=<var>true|false</var></td>
    <td>Some <a href="#compose" >-compose</a> methods can modify the 'destination' image outside the overlay area.  It is disabled by default.</td>
  </tr>

  <tr>
    <td>compose:clamp=<var>on|off</var></td>
    <td>set each pixel whose value is below zero to zero and any the pixel
    whose value is above the quantum range to the quantum range (e.g. 65535)
    otherwise the pixel value remains unchanged.  Define supported in
    ImageMagick 6.9.1-3 and above.</td>
  </tr>

  <tr>
    <td>connected-components:area-threshold=<var>value</var></td>
    <td>Merges any region with area smaller than <var>value</var> into its surrounding region or largest neighbor.</td>
  </tr>

  <tr>
    <td>connected-components:keep=<var>list-of-ids</var></td>
    <td>Comma and/or hyphenated list of id values to keep in the output.
    Supported in Imagemagick 6.9.3-0.</td>
  </tr>

  <tr>
    <td>connected-components:mean-color=<var>true</var></td>
    <td>Changes the output image from id values to mean color values. Supported
    in Imagemagick 6.9.2-8.</td>
  </tr>

  <tr>
    <td>connected-components:remove=<var>list-of-ids</var></td>
    <td>Comma and/or hyphenated list of id values to remove from the output.
     Supported in Imagemagick 6.9.2-9.</td>
  </tr>

  <tr>
    <td>connected-components:verbose=<var>true</var></td>
    <td>Lists id, bounding box, centroid, area, mean color for each region.</td>
  </tr>

  <tr>
    <td>convolve:scale=<var>{kernel_scale}[!^] [,{origin_addition}] [%]</var></td>
     <td>Defines the kernel scaling. The special flag ! automatically scales to
    full dynamic range. The ! flag can be used in combination with a factor or
    percent. The factor or percent is then applied after the automatic scaling.
    An example is 50%!. This produces a result 50% darker than full dynamic
    range scaling. The ^ flag assures the kernel is 'zero-summing', for
    example when some values are positive and some are negative as in edge
    detection kernels. The origin addition adds that value to the center
    pixel of the kernel. This produces an effect that is like adding the image 	
    that many times to the result of the filtered image. The typical value
    is 1 so that the original image is added to the result of the convolution.
    The default is 0.</td>
  </tr>

  <tr>
    <td>dcm:display-range=<var>reset</var></td>
     <td>Sets the display range to the minimum and maximum pixel values for the
    DCM image format.</td>
  </tr>

  <tr>
    <td>dds:cluster-fit=<var>true|false</var></td>
     <td>Enables the dds cluster-fit.</td>
  </tr>

  <tr>
    <td>dds:compression=<var>dxt1|dxt5|none</var></td>
     <td>Sets the dds compression.</td>
  </tr>

  <tr>
    <td>dds:mipmaps=<var>value</var></td>
     <td>Sets the dds number of mipmaps.</td>
  </tr>

  <tr>
     <td>dds:weight-by-alpha=<var>true|false</var></td>
     <td>Enables the dds alpha weighting.</td>
  </tr>

  <tr>
    <td>deskew:auto-crop=<var>true</var></td>
    <td>auto crop the image after deskewing.</td>
  </tr>

  <tr>
    <td>delegate:bimodal=<var>true</var></td>
     <td>Specifies direct conversion from Postscript to PDF.</td>
  </tr>

  <tr>
    <td>distort:scale=<var>value</var></td>
    <td>Sets the output scaling factor for use with <a href="#distort"
   >-distort</a>.</td>
  </tr>

  <tr>
    <td>distort:viewport=<var>WxH+X+Y</var></td>
    <td>Sets the viewport for use with <a href="#distort">-distort</a>.</td>
  </tr>

  <tr>
    <td>dither:diffusion-amount=<var>X%</var></td>
    <td>Sets the amount of diffusion to use with Floyd-Steinberg diffusion</td>
  </tr>

  <tr>

  <tr>
    <td>dot:layout-engine=<var>value</var></td>
     <td>Specifies the layout engine for the DOT image format (e.g.
    <code>neato</code>).</td>
  </tr>

  <tr>
    <td>exr:color-type=<var>value</var></td>
     <td>Specifies the color type for the EXR format: RGB, RGBA, YC, YCA, Y, YA, R, G, B, A).</td>
  </tr>

  <tr>
    <td>filter:option=<var>value</var></td>
     <td>Set a filter option for use with <a href="#resize">-resize</a>.
    See <a href="#filter">-filter</a> for details.</td>
  </tr>

  <tr>
    <td>fourier:normalize=<var>inverse</var></td>
    <td>Sets the location for the FFT/IFT normalization as use by
    <a href="#fft">+-fft</a> and <a href="#ift">+-ift</a>. The default is
    <var>forward</var>.</td>
  </tr>

  <tr>
    <td>h:format=<var>value</var></td>
     <td>Set the image encoding format use when writing a C-style header.
         <var>format</var> can be any output format supported by ImageMagick
         except for <var>h</var> and <var>magick</var>.  If this
         option is omitted, the default is <var>GIF</var> for PseudoClass
         images and <var>PNM</var> for DirectClass images.
    </td>
  </tr>

  <tr>
    <td>hough-lines:accumulator=true</td>
     <td>Returns the accumulator image in addition to the lines image.</td>
  </tr>

  <tr>
    <td>heic:preserve-orientation=true</td>
    <td>Preserve the original EXIF orientation during HEIC decoding and rotate the pixels accordingly.
        By default, EXIF orientation is reset to "1" to match the actual orientation of pixels in HEIC.
    </td>
  </tr>

  <tr>
    <td>icon:auto-resize</td>
     <td>Automatically stores multiple sizes when writing an ico image
    (requires a 256x256 input image).</td>
  </tr>

  <tr>
    <td>identify:locate=<var>minimum|maximum</var></td>
     <td>Locates the coordinates of one or more image minimum or maximum.</td>
  </tr>

  <tr>
    <td>identify:limit=<var>number</var></td>
     <td>Locates the coordinates for the number of minima or maxima specified.</td>
  </tr>

  <tr>
    <td>jp2:layer-number=<var>value</var></td>
     <td>Sets the maximum number of quality layers to decode. Same for JPT, JC2,
    and J2K.</td>
  </tr>

  <tr>
    <td>jp2:number-resolutions=<var>value</var></td>
     <td>Sets the number of resolutions to encode.Same for JPT, JC2, and
     J2K.</td>
  </tr>

  <tr>
    <td>jp2:progression-order=<var>value</var></td>
     <td>choose from LRCP, RLCP, RPCL, PCRL or CPRL. Same for JPT, JC2, and
    J2K.</td>
  </tr>

  <tr>
    <td>jp2:quality=<var>value,value...</var></td>
     <td>Sets the quality layer PSNR, given in dB. The order is from left to
    right in ascending order. The default is a single lossless quality layer.
    Same for JPT, JC2, and J2K.</td>
  </tr>

  <tr>
    <td>jp2:rate=<var>value</var></td>
     <td>Specify the compression factor to use while writing JPEG-2000 files.
     The compression factor is the reciprocal of the compression ratio. The
     valid range is 0.0 to 1.0, with 1.0 indicating lossless compression. If
     defined, this value overrides the -quality setting.  A quality setting
     of 75 results in a rate value of 0.06641. Same for JPT, JC2, and J2K.</td>
  </tr>

  <tr>
    <td>jp2:reduce-factor=<var>value</var></td>
     <td>Sets the number of highest resolution levels to be discarded.Same for
    JPT, JC2, and J2K.</td>
  </tr>

  <tr>
    <td>jpeg:block-smoothing=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:colors=<var>value</var></td>
     <td>Set the desired number of colors and let the JPEG encoder do the
    quantizing.</td>
  </tr>

  <tr>
    <td>jpeg:dct-method=<var>value</var></td>
     <td>Choose from <code>default</code>, <code>fastest</code>,
    <code>float</code>, <code>ifast</code>, and <code>islow</code>.</td>
  </tr>

  <tr>
    <td>jpeg:extent=<var>value</var></td>
     <td>Restrict the maximum JPEG file size, for example <code>-define
    jpeg:extent=400KB</code>.  The JPEG encoder will search for the highest
    compression quality level that results in an output file that does not
    exceed the value. The <code>-quality</code> option also will be respected
    starting with version 6.9.2-5. Between 6.9.1-0 and 6.9.2-4, add -quality
    100 in order for the jpeg:extent to work properly. Prior to 6.9.1-0, the
    -quality setting was ignored.</td>
  </tr>

  <tr>
    <td>jpeg:fancy-upsampling=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:optimize-coding=<var>on|off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:q-table=<var>table</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:sampling-factor=<var>sampling-factor-string</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>jpeg:size=<var>geometry</var></td>
     <td>Set the size hint of a JPEG image, for
    example, <code>-define jpeg:size=128x128</code>.
    It is most useful for increasing performance and reducing the memory
    requirements when reducing the size of a large JPEG image.</td>
  </tr>

  <tr>
    <td>json:features</td>
   <td>includes features in verbose information.</td>
  </tr>

  <tr>
    <td>json:limit</td>
    <td> </td>
  </tr>

  <tr>
    <td>json:locate</td>
    <td> </td>
  </tr>

  <tr>
    <td>json:moments</td>
   <td>includes image moments in verbose information.</td>
  </tr>

  <tr>
    <td>magick:format=<var>value</var></td>
     <td>Set the image encoding format use when writing a C-style header.
         This is the same as "h:format=format" described above.</td>
  </tr>

  <tr>
    <td>mng:need-cacheoff</td>
   <td>turn playback caching off for streaming MNG.</td>
  </tr>

  <tr>
    <td>morphology:compose=<var>compose-method</var></td>
     <td>Specifies how to merge results generated by multiple<a
    href="#morphology" >-morphology</a> kernel. The default is none. One
    typical value is 'lighten' as used, for example, with the sobel edge
    kernels. </td>
  </tr>

  <tr>
    <td>morphology:showKernel=<var>1</var></td>
     <td>Outputs (to 'standard error') all the information about a generated <a
    href="#morphology" >-morphology</a> kernel.</td>
  </tr>

  <tr>
    <td>pcl:fit-to-page=<var>true</var></td>
  </tr>

  <tr>
    <td>pdf:fit-page=<var>geometry</var></td>
     <td> geometry specifies the scaling dimensions for resizing when the PDF is
    being read. The geometry is either WxH{%} or page size. No offsets are
    allowed. (introduced in IM 6.8.8-8)</td>
  </tr>

  <tr>
    <td>pdf:fit-to-page=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:use-cropbox=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:use-trimbox=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:stop-on-error=<var>true</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>pdf:pdf:page-direction=<var>right-to-left</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>phash:colorspaces=<var>colorspace,colorspace,...</var></td>
    <td>the perceptual hash defaults to the sRGB and HCLp colorspaces.  When
    using this define, you can specify up to six alternative colorspaces. (as
    of IM 7.0.3-8)</td>
  </tr>

  <tr>
    <td>phash:normalize=<var>true</var></td>
    <td>normalizes the phash metric by dividing by the number of channels
    specified by <code>-define phash:colorspaces</code> when using compare
    -metric phash. (as of IM 7.0.3-8)</td>
  </tr>

  <tr>
    <td>png:bit-depth=<var>value</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>png:color-type=<var>value</var></td>
     <td>desired bit-depth and color-type for PNG output.  You can force the PNG
    encoder to use a different bit-depth and color-type than it would have
    normally selected, but only if this does not cause any loss of image
    quality. Any attempt to reduce image quality is treated as an error and no
    PNG file is written.  E.g., if you have a 1-bit black-and-white image, you
    can use these "defines" to cause it to be written as an 8-bit grayscale,
    indexed, or even a 64-bit RGBA.  But if you have a 16-million color image,
    you cannot force it to be written as a grayscale or indexed PNG.  If you
    wish to do this, you must use the appropriate <a href="#depth">-depth</a>,
    <a href="#colors">-colors</a>, or <a href="#type">-type</a> directives to
    reduce the image quality prior to using the PNG encoder. Note that in
    indexed PNG files, "bit-depth" refers to the number of bits per index,
    which can be 1, 2, 4, or 8.  In such files, the color samples always have
    8-bit depth.</td>
  </tr>

  <tr>
    <td>png:compression-filter=<var>value</var></td>
    <td> valid values are 0 through 9. 0-4 are the corresponding PNG filters,
   5 means adaptive filtering except for images with a colormap, 6 means
   adaptive filtering for all images, 7 means MNG "loco" compression, 8 means
   Z_RLE strategy with adaptive filtering, and 9 means Z_RLE strategy with no
   filtering.</td>
  </tr>

  <tr>
    <td>png:compression-level=<var>value</var></td>
    <td> valid values are 0 through 9, with 0 providing the least but fastest
       compression and 9 usually providing the best and always the slowest.</td>
  </tr>

  <tr>
    <td>png:compression-strategy=<var>value</var></td>
    <td> valid values are 0 through 4, meaning default, filtered, huffman_only,
   rle, and fixed ZLIB compression strategy. If you are using an old zlib
   that does not support Z_RLE (before 1.2.0) or Z_FIXED (before 1.2.2.2),
   values 3 and 4, respectively, will use the zlib default strategy
   instead.</td>
  </tr>

  <tr>
    <td>png:format=<var>value</var></td>
    <td> valid values are <var>png8</var>, <var>png24</var>,
   <var>png32</var>, <var>png48</var>,
   <var>png64</var>, and <var>png00</var>.
   This property can be useful for specifying
   the specific PNG format to be used, when the usual method of prepending the
   format name to the output filename is inconvenient, such as when writing
   a PNG-encoded ICO file or when using <?php cmd("mogrify"); ?>.
   Value = <var>png8</var> reduces the number of colors to 256,
   only one of which may be fully transparent, if necessary.  The other
   values do not force any reduction of quality; it is an error to request
   a format that cannot represent the image data without loss (except that
   it is allowed to reduce the bit-depth from 16 to 8 for all formats).
   Value = <var>png24</var> and <var>png48</var>
   allow transparency, only if a single color is fully transparent and that
   color does not also appear in an opaque pixel; such transparency is
   written in a PNG <code>tRNS</code> chunk.
   Value = <var>png00</var> causes the image to inherit its
   color-type and bit-depth from the input image, if the input was also
   a PNG.</td>
  </tr>

  <tr>
    <td>png:exclude-chunk=<var>value</var></td>

  <tr>
    <td>png:include-chunk=<var>value</var></td>
     <td>ancillary chunks to be excluded from or included in PNG output.

    <p>The <var>value</var> can be the name of a PNG chunk-type such
    as <var>bKGD</var>, a comma-separated list of chunk-names
    (which can include the word <var>date</var>, the word
    <var>all</var>, or the word <var>none</var>).
    Although PNG chunk-names are case-dependent, you can use all lowercase
    names if you prefer.</p>

    <p>The "include-chunk" and "exclude-chunk" lists only affect the behavior
    of the PNG encoder and have no effect on the PNG decoder.</p>

    <p>As a special case, if the <code>sRGB</code> chunk is excluded and
    the <code>gAMA</code> chunk is included, the <code>gAMA</code> chunk will
    only be written if gamma is not 1/2.2, since most decoders assume
    sRGB and gamma=1/2.2 when no colorspace information is included in
    the PNG file.  Because the list is processed from left to right, you
    can achieve this with a single define:</p>

<pre class="highlight"><code>-define png:include-chunk=none,gAMA
</code></pre>

    <p>As a special case, if the <code>sRGB</code> chunk is not excluded and
    the PNG encoder recognizes that the image contains the sRGB ICC profile,
    the PNG encoder will write the <code>sRGB</code> chunk instead of the
    entire ICC profile.  To force the PNG encoder to write the sRGB
    profile as an <code>iCCP</code> chunk in the output PNG instead of the
    <code>sRGB</code> chunk, exclude the <code>sRGB</code> chunk.</p>

    <p>The critical PNG chunks <code>IHDR</code>, <code>PLTE</code>,
    <code>IDAT</code>, and <code>IEND</code> cannot be excluded.  Any such
    entries appearing in the list will be ignored.</p>

    <p>If the ancillary PNG <code>tRNS</code> chunk is excluded and the
    image has transparency, the PNG colortype is forced to be 4 or 6
    (GRAY_ALPHA or RGBA).  If the image is not transparent, then the
    <code>tRNS</code> chunk isn't written anyhow, and there is no effect
    on the PNG colortype of the output image.</p>

    <p>The <a href="#strip">-strip</a> option does the equivalent of the
    following for PNG output:</p>

<pre class="highlight"><code>-define png:exclude-chunk=EXIF,iCCP,iTXt,sRGB,tEXt,zCCP,zTXt,date
</code></pre>

    <p>The default behavior is to include all known PNG ancillary chunks
    plus ImageMagick's private <code>vpAg</code> ("virtual page") chunk,
    and to exclude all PNG chunks that are unknown to ImageMagick,
    regardless of their PNG "copy-safe" status as described in the
    PNG specification.</p>

    <p>Any chunk names that are not known to ImageMagick are ignored
    if they appear in either the "include-chunk" or "exclude-chunk" list.
    The ancillary chunks currently known to ImageMagick are
    <code>bKGD</code>, <code>cHRM</code>, <code>gAMA</code>, <code>iCCP</code>,
    <code>oFFs</code>, <code>pHYs</code>, <code>sRGB</code>, <code>tEXt</code>,
    <code>tRNS</code>, <code>vpAg</code>, and <code>zTXt</code>.</p>

    <p>You can also put <code>date</code> in the list to include or exclude
    the "Date:create" and "Date:modify" text chunks that ImageMagick normally
    inserts in the output PNG.</p></td>
  </tr>

  <tr>
    <td>png:ignore-crc[=<var>true</var>]</td>
     <td>When you know your image has no CRC or ADLER32 errors, this can speed up
     decoding. It is also helpful in debugging bug reports from "fuzzers".</td>
  </tr>

  <tr>
    <td>png:preserve-colormap[=<var>true</var>]</td>
     <td>Use the existing image->colormap. Normally the PNG encoder will
    try to optimize the palette, eliminating unused entries and putting
    the transparent colors first.  If this flag is set, that behavior
    is suppressed.</td>
  </tr>

  <tr>
    <td>png:preserve-iCCP[=<var>true</var>]</td>
     <td>By default, the PNG decoder and encoder examine any ICC profile
    that is present, either from an <code>iCCP</code> chunk in the PNG
    input or supplied via an option, and if the profile is recognized
    to be the sRGB profile, converts it to the <code>sRGB</code> chunk.
    You can use <code>-define png:preserve-iCCP</code> to prevent
    this from happening; in such cases the <code>iCCP</code> chunk
    will be read or written and no <code>sRGB</code> chunk will be
    written.  There are some ICC profiles that claim to be sRGB but
    have various errors that cause them to be rejected by libpng16; such
    profiles are recognized anyhow and converted to the <code>sRGB</code>
    chunk, but are rejected if the <code>-define png:preserve-iCCP</code>
    is present. Note that not all "sRGB" ICC profiles are recognized
    yet; we will add them to the list as we encounter them.</td>
  </tr>

  <tr>
    <td>png:swap-bytes[=<var>true</var>]</td>
     <td>The PNG specification requires that any multi-byte integers be stored in
    network byte order (MSB-LSB endian).  This option allows you to
    fix any invalid PNG files that have 16-bit samples stored incorrectly
    in little-endian order (LSB-MSB).  The "-define png:swap-bytes" option
    must appear before the input filename on the commandline.  The swapping
    is done during the libpng decoding operation.</td>
  </tr>

  <tr>
    <td>profile:skip=<var>name1,name2,...</var></td>
     <td>Skip the named profile[s] when reading the image. Use skip="*" to
    skip all named profiles in the image. Many named profiles exist,
    including ICC, EXIF, APP1, IPTC, XMP, and others.</td>
  </tr>

  <tr>
    <td>ps:imagemask</td>
     <td>If the ps:imagemask flag is defined, the PS3 and EPS3 coders will
    create Postscript files that render bilevel images with the Postscript
    imagemask operator instead of the image operator.</td>
  </tr>

  <tr>
    <td>psd:additional-info=all|selective</td>
     <td>This option should only be used when converting from a PSD file to
     another PSD file. This should be placed after the image is read. The two
     options are 'all' and 'selective'. The 'selective' option will preserve
     all additional information that is not related to the geometry of the
     image. The 'all' option should only be used when the geometry of the
     image has not been changed. This option is helpful when transferring
     non-simple layers, such as adjustment layers from the input PSD file to
     the output PSD file. If this option is not used, the additional
     information will not be preserved. This define is available as of
     Imagemagick version 6.9.5-8.
</td>
  </tr>

  <tr>
    <td>psd:alpha-unblend=off</td>
     <td>Disables new automatic un-blending of transparency with the base image
     for the flattened layer 0 before adding the alpha channel to the output
     image. This define must be placed before the input psd image. (Available
     as of IM 6.9.2.5). The automatic un-blending is new to IM 6.9.2.5 and
     prevents the transparency from being applied twice in the output
     image. This option should be set before reading the image.</td>
  </tr>

  <tr>
    <td>psd:preserve-opacity-mask=true</td>
     <td>This option should only be used when converting from a PSD file to
     another PSD file. It will preserve the opacity mask of a layer and add it
     back to the layer when the image is saved. Setting this to 'true' will
     enable this feature. This define is available as of Imagemagick version
     6.9.5-10.
</td>
  </tr>

  <tr>
    <td>preserve-timestamp=<var>{True, False}</var></td>
     <td>Preserve file timestamp (<code>mogrify</code> only).</td>
  </tr>

  <tr>
    <td>q-table=<var>quantization-table.xml</var></td>
     <td>Custom JPEG quantization tables.</td>
  </tr>

  <tr>
    <td>quantum:format=<var>type</var></td>
     <td>Set the type to <code>floating-point</code> to specify a floating-point
    format for raw files (e.g. GRAY:) or for MIFF and TIFF images in HDRI mode
    to preserve negative values. If <a href="#depth">-depth</a> 16 is
    included, the result is a single precision floating point format.
    If <a href="#depth">-depth</a> 32 is included, the result is
    double precision floating point format. For signed pixel data, use <code>-define quantum:format=signed</code></td>
  </tr>

  <tr>
    <td>quantum:polarity=<var>photometric-interpretation</var></td>
     <td>Set the photometric-interpretation of an image (typically for TIFF
     image file format) to either <code>min-is-black</code> (default) or
    <code>min-is-white</code>.</td>
  </tr>

  <tr>
    <td>sample:offset=<var>geometry</var></td>
     <td>Location of the sampling point within the sub-region being sampled,
    expressed as percentages (see <a href="#sample" >-sample</a>).</td>
  </tr>

  <tr>
    <td>morphology:showKernel=<var>1</var></td>
     <td>Outputs (to 'standard error') all the information about a generated <a
    href="#morphology" >-morphology</a> kernel.</td>
  </tr>

  <tr>
    <td>stream:buffer-size=<var>value</var></td>
   <td>Set the stream buffer size.  Select 0 for unbuffered I/O.</td>
  </tr>

  <tr>
    <td>tiff:alpha=<var>associated|unassociated|unspecified</var></td>
    <td>Specify the alpha extra samples as associated, unassociated or
    unspecified.</td>
  </tr>

  <tr>
    <td>tiff:endian=<var>msb|lsb</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>tiff:exif-properties=<var>true</var></td>
    <td>Enables reading the EXIF properties.</td>
  </tr>

  <tr>
    <td>tiff:fill-order=<var>msb|lsb</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>tiff:ignore-layers=<var>true</var></td>
    <td>Ignores the photoshop layers.</td>
  </tr>

  <tr>
    <td>tiff:ignore-tags=<var>comma-separate-list-of-tag-IDs</var></td>
    <td>Allows one or more tag ID values to be ignored.</td>
  </tr>

  <tr>
    <td>tiff:predictor=<var>[1, 2 or 3]</var></td>
    <td>A mathematical operator that is applied to the image data before an encoding scheme is applied. The general idea is that subsequent pixels of an image resemble each other. Thus, substracting the information from a pixel that is already contained in previous one is likely to reduce its information density considerably and aid subsequent compression. 1 = No prediction scheme used before coding. 2 = Horizontal differencing. 3 = Floating point horizontal differencing.</td>
  </tr>

  <tr>
    <td>tiff:rows-per-strip=<var>value</var></td>
    <td>Sets the number of rows per strip.</td>
  </tr>

  <tr>
    <td>tiff:tile-geometry=<var>WxH</var></td>
    <td>Sets the tile size for pyramid tiffs. Requires the suffix
        PTIF: before the outputname.</td>
  </tr>

  <tr>
    <td>type:features=<var>string</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>type:hinting=<var>off</var></td>
    <td> </td>
  </tr>

  <tr>
    <td>txt:compliance=<var>css</var></td>
    <td>The first argument of a hsl() color is integer, not percentage.</td>
  </tr>

  <tr>
    <td>x:screen=<var>true</var></td>
    <td>Obtains the image from the root window.</td>
  </tr>

  <tr>
    <td>x:silent=<var>true</var></td>
    <td>Turns off the beep when importing an image.</td>
  </tr>
</table>

</div>
