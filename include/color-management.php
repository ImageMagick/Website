<div class="magick-header">
<h1 class="text-center">Accurate Color Management</h1>
<p class="lead magick-description">Due to the standardization of sRGB on the Internet, most image formats use SRGB as the default working color space.  If the color space of an image is unknown and it is an 8- to 16-bit image format, assuming it is in the sRGB color space is a safe choice.  This extends to grayscale as well.  We assume non-linear grayscale. These assumptions are overridden if a particular image format includes color space and / or gamma metadata.  ImageMagick assumes linear color if the color space is RGB instead of sRGB.  You can also override the default color space assumptions with color profiles or the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php#set">-set</a> option.</p>

<p>ImageMagick supports color profiles, however, for images without a profile or a declaration of colorspace, ImageMagick assumes non-linear sRGB.  Most image processing algorithms assume a linear colorspace, therefore it might be prudent to convert to linear color or remove the gamma function before certain image processing algorithms are applied. For example,</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.jpg -colorspace RGB -resize 200% -colorspace sRGB mybigimage.jpg</samp></pre></ul>

<p>To declare that an image is linear RGB rather than sRGB, you can use the set option:</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -set colorspace RGB myRGBimage.png</samp></pre></ul>

<p>Note that declaring an image as linear is not the same as converting the image to linear. Declaring it is linear only sets the meta data and does not change the pixel data. Whereas converting to linear actually changes the pixel data as described in more detail below.</p>

<p>Afterwards, the verbose information for the output file lists the colorspace as RGB. This only works on image types containing meta data that distinguishes between linear RGB and non-linear sRGB, such as PNG and GIF. Therefore, if the above command is run with a JPG or TIF output format, the verbose information for the colorspace still shows sRGB. In order to properly have the JPG output know that it is linear RGB, include an appropriate color profile.</p>


<p>By default, converting color images to grayscale returns non-linear gray.  To instead convert to linear gray, use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php#set">-set</a> or <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php#intensity">-intensity</a
> or <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-processing.php#grayscale">-grayscale</a> options:</p>

<ul><pre class="bg-light text-dark"><samp>
convert myimage.png -colorspace LinearGray myRGBimage.png
convert myimage.png -colorspace RGB -colorspace Gray myRGBimage.png
convert myimage.png -intensity Rec709luminance -colorspace gray myRGBimage.png
convert myimage.png -grayscale Rec709luminance myRGBimage.png
</samp></pre></ul>

<p>Note that LinearGray is new as of Imagemagick 6.9.9-29 and 7.0.7-17.</p>

<p>The same concept is needed when separating channels.  Normally, the conversion to separate each channel of an sRGB color image produces separate non-linear grayscale images. However the same concept can be applied, if it is desired to keep the separate channels as linear grayscale. For example, the following produces linear grayscale channels.</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -colorspace RGB -separate myimage_channels_%d.png</samp></pre></ul>

<p>When separating and recombining channels, with potential intermediate processing, it is important to identify the colorspace used, especially during the recombination. For example,</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -separate myimage_channels_%d.png
magick myimage_channels_*.png -combine myimage2.png</samp></pre></ul>

<p>In the above example, the separated channels are non-linear and the default for <samp>-combine</samp> is to assume non-linear channels. So the result is the same as the input.</p>

If one desires to separate to linear grayscale channels, recombine them later back to non-linear color, perhaps after some processing, then use the same concept as above for maintaining linear grayscale:</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -set colorspace RGB -separate myimage_channels_%d.png
magick myimage_channels_*.png -set colorspace RGB -combine -colorspace sRGB myimage2.png
</samp></pre></ul>

<p>When converting to another colorspace and back, such as between sRGB and HSL, the following two commands handle the first case of non-linear channels and the second case of linear channels:</p>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -colorspace HSL -separate myimage_channels_%d.png
magick myimage_channels_*.png -set colorspace HSL -combine -colorspace sRGB myimage2.png</samp></pre></ul>

<ul><pre class="bg-light text-dark"><samp>magick myimage.png -set colorspace RGB -colorspace HSL -separate myimage_channels_%d.png
magick myimage_channels_*.png -set colorspace HSL -combine -colorspace RGB -set colorspace sRGB myimage2.png</samp></pre></ul>

<p>A majority of the image formats assume an sRGB colorspace (e.g. JPEG, PNG, etc.). A few support only linear RGB (e.g. EXR, DPX, CIN, HDR) or only linear GRAY. A few formats support CMYK. For example JPG does, but PNG does not. Then there is the occasional format that also supports LAB (that is CieLAB) (e.g. TIFF, PSD, JPG, JP2). For additional information, see the <a href="https://imagemagick.org/script/formats.php#colorspace" >Colorspace</a> and <a href="https://imagemagick.org/script/formats.php#supported" >Supported Formats</a> pages.</p>

<p>When specifying individual colors as <samp>rgb(...)</samp> or hex, these colors will still be interpreted as non-linear, that is, as sRGB colors. However if one wants to create linear colors, use <samp>icc-color(rgb,r,g,b)"</samp>, where <samp>r</samp>, <samp>g</samp>, and <samp>b</samp> are in the range 0 to 1. See the <a href="https://imagemagick.org/script/color.php" >Color</a> page.</p>

</div>
