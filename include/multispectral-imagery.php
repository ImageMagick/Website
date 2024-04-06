<div>
<p class="lead">Multispectral imagery refers to images that are captured using multiple bands of the electromagnetic spectrum, beyond just the visible light spectrum. This means that they capture data across a wider range of wavelengths, from ultraviolet to infrared.</p>
<p>By capturing data across multiple spectral bands, multispectral imagery can provide additional information about the objects or scenes being imaged, such as their composition, temperature, and vegetation health. This information can be used for a wide range of applications, including agriculture, environmental monitoring, disaster response, and military surveillance.</p>
<p>Multispectral imagery is often captured using specialized sensors on satellites, drones, or aircraft. The data is then processed using specialized software to create images that display the information captured in each spectral band.</p>
<p>Overall, multispectral imagery provides a powerful tool for analyzing and understanding the world around us, allowing us to gain insights that would be impossible to obtain using visible light imagery alone.</p>
<h4>Multispectral Support in ImageMagick</h4>
<p>ImageMagick supports multispectral images where all channels have the same dimensions and number of pixels as the original image.  However, not all image formats support multispectral images.  PSD, TIFF, MIFF, MPC, and <a href="http://im.snibgo.com/fmttxt.htm">FTXT</a> have full support for multispectral images up to 31 bands with 21 meta channels. If you build ImageMagick with the configure script <samp>--enable-64bit-channel-masks</samp> option, you can process 62 band multispectral images with up to 52 meta channels.</p>
<p>We call image channels beyond the standard RGB(A) or CMYK(A) channels, "meta" channels.  We label them as "meta", "meta1", "meta2", etc..  Meta channels are treated the same as any other channel meaning they can be read, written, and operated upon-- e.g., resized, gamma adjusted, etc.</p>
<h5>Create a Multispectral Image</h5>
<p>Begin with a multispectral image, typically in the TIFF or PSD format.  If you don't have one, you can create your own.  In our example, we create a single CMYK pixel with two meta channels.  Stuff this in a file titled <code>multiMeta.txt</code>:</p>
<pre class="bg-light text-dark mx-4"><samp>0,0: 10,20,30,40,50,60</samp></pre>
<p>Let's convert that to the TIFF image format:</p>
<pre class="bg-light text-dark mx-4"><samp>$ magick -size 1x1 -colorspace CMYK -define ftxt:format="\x,\y:\c\n" -define ftxt:hasalpha=false -define ftxt:nummeta=2 ftxt:multiMeta.txt multiMeta.tif</samp></pre>
<p>Let confirm that worked as expected:<p>
<pre class="pre-scrollable bg-light text-dark mx-4"><samp>$ identify -verbose multiMeta.tif
Image:
  Filename: multiMeta.tif
  Permissions: rw-------
  Format: TIFF (Tagged Image File Format)
  Mime type: image/tiff
  Class: DirectClass
  Geometry: 1x1+0+0
  Units: PixelsPerInch
  Colorspace: CMYK
  Type: ColorSeparation
  Endianness: LSB
  Depth: 16-bit
  Channels: 6.2
  Channel depth:
    Cyan: 16-bit
    Magenta: 16-bit
    Yellow: 16-bit
    Black: 16-bit
    Meta channel[0]: 16-bit
    Meta channel[1]: 16-bit
  Channel statistics:
    Pixels: 1
    Cyan:
      min: 10  (0.00015259)
      max: 10 (0.00015259)
      mean: 10 (0.00015259)
      median: 10 (0.00015259)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
    Magenta:
      min: 20  (0.00030518)
      max: 20 (0.00030518)
      mean: 20 (0.00030518)
      median: 20 (0.00030518)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
    Yellow:
      min: 30  (0.000457771)
      max: 30 (0.000457771)
      mean: 30 (0.000457771)
      median: 30 (0.000457771)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
    Black:
      min: 40  (0.000610361)
      max: 40 (0.000610361)
      mean: 40 (0.000610361)
      median: 40 (0.000610361)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
    Meta channel[0]:
      min: 50  (0.000762951)
      max: 50 (0.000762951)
      mean: 50 (0.000762951)
      median: 50 (0.000762951)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
    Meta channel[1]:
      min: 60  (0.000915541)
      max: 60 (0.000915541)
      mean: 60 (0.000915541)
      median: 60 (0.000915541)
      standard deviation: 0 (0)
      kurtosis: -3
      skewness: 0
      entropy: 0
  Image statistics:
    Overall:
      min: 10  (0.00015259)
      max: 60 (0.000915541)
      mean: 35 (0.000534066)
      median: 35 (0.000534066)
      standard deviation: 0 (0)
      kurtosis: -1.79762
      skewness: 4.44476e-15
      entropy: 0
  Total ink density: 0.15259%
  Colors: 1
  Histogram:
             1: (10,20,30,40) #000A0014001E0028 cmyk(0.0389105,0.077821,0.116732,0.155642)
  Rendering intent: Perceptual
  Gamma: 0.454545
  Chromaticity:
    red primary: (0.64,0.33)
    green primary: (0.3,0.6)
    blue primary: (0.15,0.06)
    white point: (0.3127,0.329)
  Matte color: grey74
  Background color: white
  Border color: srgb(223,223,223)
  Transparent color: black
  Interlace: None
  Intensity: Undefined
  Compose: Over
  Page geometry: 1x1+0+0
  Dispose: Undefined
  Iterations: 0
  Compression: None
  Orientation: TopLeft
  Properties:
    date:create: 2023-03-12T11:38:42+00:00
    date:modify: 2023-03-12T11:38:42+00:00
    date:timestamp: 2023-03-12T11:38:56+00:00
    signature: c51848f16d296f7c95be14404cc582f49db6fd33f31b544a2ce10e440b3747b3
    tiff:alpha: unspecified
    tiff:endian: lsb
    tiff:photometric: separated
    tiff:rows-per-strip: 1
  Artifacts:
    verbose: true
  Tainted: False
  Filesize: 306B
  Number pixels: 1
</samp></pre>
<p>Notice the channel depth and statistics associated with the two meta channels.<p>
<h5>Working with Multispectral Images</h5>
<p>Meta channels are treated the same as any other channel meaning they can be read, written, and operated upon-- e.g., resized, gamma adjusted, etc..  Here, we replace the first channel with the contents of the meta channel:<p>
<pre class="bg-light text-dark mx-4"><samp>magick multiMeta.tif -channel-fx 'meta1=>cyan' multiMeta-1.tif</samp></pre>
<p>The original cyan channel has an intensity of 10.  It's now, per the channel FX instructions, 50.<p>
<p>And in this example, we create two meta channels:</p>
<pre class="bg-light text-dark mx-4"><samp>magick lena.png \( mandril3.jpg -colorspace gray \) -channel-fx '| gray=>meta' \( zelda1.jpg -colorspace gray \) -channel-fx '| gray=>meta1' meta.tif</samp></pre>
<h5>Writing Multispectral Images</h5>
<p>You can preserve multispectral images by writing them to a format that supports meta channels such as TIFF or PSD.  If you write to other image formats that do not support multisprectal images, the channels are not preserved and instead lost-- e.g., PNG.  In this example, we read, resize, and  write a multispectral image:</p>
<pre class="bg-light text-dark mx-4"><samp>magick multiMeta.tif -resize 50% resizedMeta.tif</samp></pre>
</div>
