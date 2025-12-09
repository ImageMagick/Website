<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>
<div id="cli-examples"></div>

<p class="lead">This page described the Image composition methods that is used to define how
two images should be merged together in various image operations.  For the
Command Line API it is typically set using the <a
href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compose" >-compose</a> setting option. </p>


<p>The description of composition uses abstract terminology in order to allow
the description to be more precise, while avoiding constant values which are
specific to a particular build configuration. Each image pixel is represented
by red, green, and blue levels (which are equal for a gray pixel). The
build-dependent value <var>QuantumRange</var> is the maximum integral
value which may be stored, per pixel, in the red, green, or blue channels of
the image. Each image pixel may also optionally (if the image matte channel is
enabled) have an associated level of opacity, ranging from <var>opaque</var> to
<var>transparent</var>, which may be used to determine the influence of the pixel
color when compositing the pixel with another image pixel. If the image matte
channel is disabled, then all pixels in the image are treated as opaque. The
color of an opaque pixel is fully visible while the color of a transparent
pixel color is entirely absent (pixel color is ignored).</p>

<p>By definition, raster images have a rectangular shape. All image rows are of
equal length, as are all image columns. By treating the alpha channel as a
visual "mask" the rectangular image may be given a "shape" by treating the
alpha channel as a cookie-cutter for the image. This is done by setting the
pixels within the shape to be opaque, with pixels outside the shape set as
transparent. Pixels on the boundary of the shape may be between opaque and
transparent in order to provide antialiasing (visually smooth edges). The
description of the composition operators use this concept of image "shape" in
order to make the description of the operators easier to understand. While it
is convenient to describe the operators in terms of "shapes" they are by no
means limited to mask-style operations since they are based on continuous
floating-point mathematics rather than simple boolean operations.</p>

<p>The following alpha blending (Duff-Porter) compose methods are available:</p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left" style="width: 8%">Method</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td>clear</td>
    <td>Both the color and the alpha of the destination are
        cleared. Neither the source nor the destination are used (except for
        destinations size and other meta-data which is always preserved.</td>
  </tr>

  <tr>
    <td>src</td>
    <td>The source is copied to the destination. The destination
        is not used as input, though it is cleared.</td>
  </tr>

  <tr>
    <td>dst</td>
    <td>The destination is left untouched. The source image is
        completely ignored.</td>
  </tr>

  <tr>
    <td>src-over</td>
    <td>The source is composited over the destination. this is
       the default alpha blending compose method, when neither the compose
       setting is set, nor is set in the image meta-data.</td>
  </tr>

  <tr>
    <td>dst-over</td>
    <td>The destination is composited over the source and the
        result replaces the destination.</td>
  </tr>

  <tr>
    <td>src-in</td>
    <td>The part of the source lying inside of the destination
        replaces the destination.</td>
  </tr>

  <tr>
    <td>dst-in</td>
    <td>The part of the destination lying inside of the source
        replaces the destination. Areas not overlaid are cleared.</td>
  </tr>

  <tr>
    <td>src-out</td>
    <td>The part of the source lying outside of the destination
        replaces the destination.</td>
  </tr>

  <tr>
    <td>dst-out</td>
    <td>The part of the destination lying outside of the source
        replaces the destination.</td>
  </tr>

  <tr>
    <td>src-atop</td>
    <td>The part of the source lying inside of the destination is
        composited onto the destination.</td>
  </tr>

  <tr>
    <td>dst-atop</td>
    <td>The part of the destination lying inside of the source is
        composited over the source and replaces the destination. Areas not
        overlaid are cleared. </td>
  </tr>

  <tr>
    <td>xor</td>
    <td>The part of the source that lies outside of the
        destination is combined with the part of the destination that lies
        outside of the source.  Source or Destination, but not both. </td>
  </tr>

  </tbody>
</table>

<p>Any of the 'Src-*' methods can also be specified without the 'Src-' part.
For example the default compose method can be specified as just 'Over'.</p>

<p>Many of these compose methods will clear the destination image which was
not overlaid by the source image.  This is to be expected as part of that
specific composition methods definition. You can disable this by setting the
special <a href="<?php echo
$_SESSION['RelativePath']?>/../script/command-line-options.php#define"
>-define</a> 'compose:outside-overlay' to a value of 'false' will turn off
this behavior. </p>

<p>On top of the above 12 Duff-Porter Alpha Composition methods, one special
related method '<samp>Copy</samp>' has been provided. This is equivalent to
using the '<samp>Src</samp>'  with the special <a href="<?php echo
$_SESSION['RelativePath']?>/../script/command-line-options.php#define"
>-define</a> option '<samp>compose:outside-overlay</samp>' set to
'<samp>false</samp>', so as to only modify the overlaid area, without clearing
the rest of the image outside the overlaid area.  </p>

<p>The following mathematical composition methods are also available. </p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left" style="width: 8%">Method</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td>multiply</td>
    <td>The source is multiplied by the destination and replaces
        the destination. The resultant color is always at least as dark as
        either of the two constituent colors. Multiplying any color with black
        produces black. Multiplying any color with white leaves the original
        color unchanged.</td>
  </tr>

  <tr>
    <td>screen</td>
    <td>The source and destination are complemented and then
        multiplied and then replace the destination. The resultant color is
        always at least as light as either of the two constituent colors.
        Screening any color with white produces white. Screening any color
        with black leaves the original color unchanged.</td>
  </tr>

  <tr>
    <td>plus</td>
    <td>The source is added to the destination and replaces the
        destination. This operator is useful for averaging or a controlled
        merger of two images, rather than a direct overlay.</td>
  </tr>

  <tr>
    <td>add</td>
    <td>As per 'plus' but transparency data is treated as matte
        values. As such any transparent areas in either image remain
        transparent. </td>
  </tr>

  <tr>
    <td>minus</td>
    <td>Subtract the colors in the source image from the
        destination image. When transparency is involved, opaque areas is
        subtracted from any destination opaque areas. </td>
  </tr>

  <tr>
    <td>subtract</td>
    <td>Subtract the colors in the source image from the
        destination image. When transparency is involved transparent areas are
        subtracted, so only the opaque areas in the source remain opaque in
        the destination image. </td>
  </tr>

  <tr>
    <td>difference</td>
    <td>Subtracts the darker of the two constituent colors from
        the lighter. Painting with white inverts the destination color.
        Painting with black produces no change.</td>
  </tr>

  <tr>
    <td>exclusion</td>
    <td>Produces an effect similar to that of 'difference', but
        appears as lower contrast.  Painting with white inverts the
        destination color. Painting with black produces no change.</td>
  </tr>

  <tr>
    <td>darken</td>
    <td>Selects the darker of the destination and source colors.
        The destination is replaced with the source when the source is darker,
        otherwise it is left unchanged.</td>
  </tr>

  <tr>
    <td>lighten</td>
    <td>Selects the lighter of the destination and source colors.
        The destination is replaced with the source when the source is
        lighter, otherwise it is left unchanged. </td>
  </tr>

  <tr>
    <td>negate</td>
    <td>The "opposite" of difference mode. Note that it is not difference mode inverted, because black and white return the same result, but colors between become brighter instead of darker. </td>
  </tr>

  <tr>
    <td>reflect</td>
    <td>This mode is useful when adding shining objects or light zones to images. The formula is similar to color dodge, but the result is not that bright in most cases. The result looks a bit like soft light. </td>
  </tr>

  <tr>
    <td>freeze</td>
    <td>Another variation of reflect mode (base and blend color inverted, the result inverted again). </td>
  </tr>

  <tr>
    <td>stamp</td>
    <td>This mode somehow is similar to average mode. It is helpful when applying relief or bump textures to images. </td>
  </tr>

  <tr>
    <td>interpolate</td>
    <td>This mode somehow combines multiply and screen mode (looks very similar for very dark or bright colors). </td>
  </tr>
</table>

<p>Typically these use the default 'Over' alpha blending when transparencies
are also involved, except for 'Plus' which uses a 'plus' alpha blending.  This
means the alpha channel  of both images will only be used to ensure that any
visible input remains visible even in parts not overlaid. It also means that
any values are weighted by the alpha channel of the input and output images.
This 'Over' alpha blending is also applied to the lighting composition methods
below. </p>

<p> The math composition is applied on an individual channel basis as defined by the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel" >-channel</a>.  This includes the alpha channel. This special usage allows you to perform true mathematics of the image channels, without alpha
composition effects, becoming involved. </p>

<p>Use <samp>-define compose:sync=false</samp> and the above mathematical compositions will no longer synchronise its actions with the alpha channel.  Instead the math composition is applied on an individual channel basis as defined by the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel</a>.  This includes the alpha channel. This special usage allows you to perform true mathematics of the image channels, without alpha composition effects, becoming involved.</p> 

<p>This define is not applied to the lighting composition methods (see below) even though they are closely related to mathematical composition methods.</p>

<p>The following lighting composition methods are also available. </p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left" style="width: 8%">Method</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td>linear-dodge</td>
    <td>This is equivalent to 'Plus' in that the color channels
        are simply added, however it does not 'Plus' the alpha channel, but
        uses the normal 'Over' alpha blending, which transparencies are
        involved.  Produces a sort of additive multiply-like result.  </td>
  </tr>

  <tr>
    <td>linear-burn</td>
    <td>As 'Linear-Dodge', but also subtract one from the result.
        Sort of a additive 'Screen' of the images. </td>
  </tr>

  <tr>
    <td>color-dodge</td>
    <td>Brightens the destination color to reflect the source
        color. Painting with black produces no change.</td>
  </tr>

  <tr>
    <td>color-burn</td>
    <td>Darkens the destination color to reflect the source
        color.  Painting with white produces no change.  </td>
  </tr>

  <tr>
    <td>overlay</td>
    <td>Multiplies or screens the colors, dependent on the
        destination color. Source colors overlay the destination whilst
        preserving its highlights and shadows. The destination color is not
        replaced, but is mixed with the source color to reflect the lightness
        or darkness of the destination.</td>
  </tr>

  <tr>
    <td>hard-light</td>
    <td>Multiplies or screens the colors, dependent on the source
        color value. If the source color is lighter than 0.5, the destination
        is lightened as if it were screened. If the source color is darker
        than 0.5, the destination is darkened, as if it were multiplied. The
        degree of lightening or darkening is proportional to the difference
        between the source color and 0.5. If it is equal to 0.5 the
        destination is unchanged.  Painting with pure black or white produces
        black or white.</td>
  </tr>


  <tr>
    <td>linear-light</td>
    <td>Like 'Hard-Light' but using linear-dodge and linear-burn
        instead.  Increases contrast slightly with an impact on the
        foreground's tonal values.</td>
  </tr>

  <tr>
    <td>soft-burn</td>
    <td>A combination of color burn and inverse color dodge mode, but a lot smoother than both of them. The base image is lightened a bit, but very dark blend colors are "burned" in. </td>
  </tr>

  <tr>
    <td>soft-dodge</td>
    <td> Combination of color dodge and inverse color burn mode, but a lot smoother than both of them. The base image is darkened a bit, but very bright blend colors are "dodged" in. </td>
  </tr>

  <tr>
    <td>soft-light</td>
    <td>Darkens or lightens the colors, dependent on the source
        color value. If the source color is lighter than 0.5, the destination
        is lightened. If the source color is darker than 0.5, the destination
        is darkened, as if it were burned in. The degree of darkening or
        lightening is proportional to the difference between the source color
        and 0.5. If it is equal to 0.5, the destination is unchanged. Painting
        with pure black or white produces a distinctly darker or lighter area,
        but does not result in pure black or white. </td>
  </tr>

  <tr>
    <td>pegtop-light</td>
    <td>Almost equivalent to 'Soft-Light', but using a
        continuous mathematical formula rather than two conditionally
        selected formulae. </td>
  </tr>

  <tr>
    <td>vivid-light</td>
    <td>A modified 'Linear-Light' designed to preserve very strong
        primary and secondary colors in the image.  </td>
  </tr>

  <tr>
    <td>pin-light</td>
    <td>Similar to 'Hard-Light', but using sharp linear shadings,
        to simulate the effects of a strong 'pinhole' light source. </td>
  </tr>

  </tbody>
</table>

<p>Also included are these special purpose compose methods:</p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left" style="width: 8%">Method</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td>copy</td>
    <td>This is equivalent to the Duff-Porter composition method
        '<samp>Src,</samp>' but without clearing the parts of the destination
        image that is not overlaid.  </td>
    </tr>

  <tr>
    <td>copy-*</td>
    <td>Copy the specified channel (Red, Green, Blue, Cyan,
        Magenta, Yellow, Black, or Opacity) in the source image to the
        same channel in the destination image.  If the channel specified
        does not exist in the source image, (which can only happen for methods,
        '<samp>copy-opacity</samp>' or '<samp>copy-black</samp>') then it is
        assumed that the source image is a special grayscale channel image
        of the values that is to be copied. </td>
    </tr>

  <tr>
    <td>change-mask</td>
    <td>Replace any destination pixel that is the similar to the
    source images pixel (as defined by the current <a
    href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fuzz">-fuzz</a> factor), with transparency.
    </td>
  </tr>

  <tr>
    <td>stereo</td>
    <td>create a stereo anaglyph</td>
  </tr>
  </tbody>
</table>

<p>On top of these composed methods are a few special ones that not only require
the two images that are being merged or overlaid, but have some extra numerical
arguments, which are tabled below. </p>

<p>In the "<samp>composite</samp>" command these composition methods are
selected using special options with the arguments needed. They are usually,
but not always, the same name as the composite 'method' they use, and replaces
the normal use of the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#compose" >-compose</a>
setting in the "<samp>composite</samp>" command.  For example... </p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>composite ... -blend 50x50 ...  </samp></pre>

<p>The "<samp>magick</samp>" command can accept these extra arguments to its <a href="<?php echo
$_SESSION['RelativePath']?>/../script/command-line-options.php#composite"
>-composite</a> operator, using the special <a href="<?php echo
$_SESSION['RelativePath']?>/../script/command-line-options.php#define">-define</a>
attribute of <samp>compose:args</samp>.  This means you can now
make use of these special augmented <a href="<?php echo
$_SESSION['RelativePath']?>/../script/command-line-options.php#compose"
>-compose</a> methods, those the argument and the method both need to be set
separately.  For example... </p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick ... -compose blend  -define compose:args=50,50 -composite ...  </samp></pre>

<p>The following is a table of these special 'argumented' compose methods,
with a brief summary of what they do. For more details see the equivalent
"composite" command option name.  </p>

<table class="table table-sm table-hover table-striped table-responsive">
  <tbody>
  <tr>
    <th align="left" style="width: 8%">Method</th>
    <th align="left">Description</th>
  </tr>

  <tr>
    <td>dissolve</td>
    <td>Arguments:
        <var>src_percent</var>[x<var>dst_percent</var>]
    <br/>Equivalent to "<samp>composite</samp>" <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#dissolve">-dissolve</a>.
    Dissolve the 'source' image by the percentage given before overlaying
        'over' the 'destination' image. If <var>src_percent</var> is
        greater than 100, it starts dissolving the main image so it will
        become transparent at a value of <samp>200</samp>.  If
        both percentages are given, each image are dissolved to the
        percentages given.
    </td>
  </tr>

  <tr>
    <td>blend</td>
    <td>Arguments:
        <var>src_percent</var>[x<var>dst_percent</var>]
    <br/>Equivalent to "<samp>composite</samp>" <a
        href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#blend">-blend</a>.
    Average the images together ('plus') according to the percentages
        given and each pixels transparency.  If only a single percentage value
        is given it sets the weight of the composite or 'source' image, while
        the background image is weighted by the exact opposite amount. That is
        a <samp>-blend 30</samp> merges 30% of the 'source' image with 70% of
        the 'destination' image.  Thus it is equivalent to <samp>-blend
        30x70</samp>.
    </td>
  </tr>

  <tr>
    <td>mathematics</td>
    <td>Arguments: <var>A, B, C, D</var>
    <br/>Not available in "<samp>composite</samp>" at this time.
    Merge the source and destination images according to the formula
    <ul><samp>A*Sc*Dc + B*Sc + C*Dc + D</samp></ul>
    Can be used to generate a custom composition method that would
        otherwise need to be implemented using the slow <a
        href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fx">-fx</a> DIY image operator.
    </td>
  </tr>

  <tr>
    <td>modulate</td>
    <td>Arguments:
        <var>brightness</var>[x<var>saturation</var>]
    <br/>Equivalent to "<samp>composite</samp>" <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#watermark">-watermark</a>.
    Take a grayscale image (with alpha mask) and modify the destination
        image's brightness according to watermark image's grayscale value and
        the <var>brightness</var> percentage.  The destinations
        color saturation attribute is just direct modified by the <var>saturation</var> percentage, which defaults to 100 percent
        (no color change).

    </td>
  </tr>

  <tr>
    <td>displace</td>
    <td>Arguments:
        <var>X-scale</var>[x<var>Y-scale</var>][!][%]
    <br/>Equivalent to "<samp>composite</samp>" <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#displace">-displace</a>.
    With this option, the 'overlay' image, and optionally the 'mask'
        image, is used as a relative displacement map, which is used to
        displace the lookup of what part of the destination image is seen at
        each point of the overlaid area.  Much like the displacement map is a
        'lens' that distorts the original 'background' image behind it.
    <br/><br/>
        The X-scale is modulated by the 'red' channel of the overlay image
        while the Y-scale is modulated by the green channel, (the mask image
        if given is rolled into green channel of the overlay image. This
        separation allows you to modulate the X and Y lookup displacement
        separately allowing you to do 2-dimensional displacements, rather
        than 1-dimensional vectored displacements (using grayscale image).
    <br/><br/>
        If the overlay image contains transparency this is used as a mask
        of the resulting image to remove 'invalid' pixels.
    <br/><br/>
        The '%' flag makes the displacement scale relative to the size of the
        overlay image (100% = half width/height of image). Using '!' switches
        percentage arguments to refer to the destination image size instead.
    <br/><br/>
    </td>
  </tr>

  <tr>
    <td>distort</td>
    <td>Arguments:
        <var>X-scale</var>[x<var>Y-scale</var>[+<var>X-center</var>+<var>Y-center</var>]][!][%]
    <br/>Not available in "<samp>composite</samp>" at this time.
    Exactly as per 'Displace' (above), but using absolute coordinates,
        relative to the center of the overlay (or that given).  Basically
        allows you to generate absolute distortion maps where 'black' will
        look up the left/top edge, and 'white' looks up the bottom/right
        edge of the destination image, according to the scale given.
    <br/><br/>
        The '!' flag not only switches percentage scaling, to use the
        destination image, but also the image the center offset of the lookup.
        This means the overlay can lookup a completely different region of the
        destination image.
    <br/><br/>
    </td>
  </tr>

  <tr>
    <td>blur</td>
    <td>Arguments:
        <var>Width</var>[x<var>Height</var>[+<var>Angle</var>][+<var>Angle2</var>]]
    <br/>Equivalent to "<samp>composite</samp>" <a href="<?php echo
        $_SESSION['RelativePath']?>/../script/command-line-options.php#blur-composite">-blur</a>.
    A Variable Blur Mapping Composition method, where each pixel in the
        overlaid region is replaced with an Elliptical Weighted Average (EWA),
        with an ellipse (typically a circle) of the given sigma size, scaled
        according to overlay (source image) grayscale mapping.
    <br/><br/>
        As per 'Displace' and 'Distort', the red channel will modulate the
        width of the ellipse, while the green channel will modulate the height
        of the ellipse. If a single Angle value is given in the arguments,
        then the ellipse will then be rotated by the angle specified.
    <br/><br/>
        Normally the blue channel of the mapping overlay image is ignored.
        However if a second ellipse angle is given, then it is assumed that
        the blue channel defines a variable angle for the ellipse ranging from
        the first angle to the second angle given.  This allows to generate
        radial blurs, or a rough approximation for rotational blur. Or any mix
        of the two.
    <br/><br/>
    </td>
  </tr>
  <tr>
    <td>seamless-blend</td>
    <td>Arguments: <var>max-iterations</var>x<var>distortion</var>
    <p>Seamlessly inserts the overlay image onto the background image. This operator requires a mask. Set the maximum iterations and distortion when seamlessly blending a foreground object onto a background image. The distortion is the RMSE between each iteration, a good start might be 300x0.0001. Note, seamless blending works most effectively when the HDRI feature is enabled.</p>
    </td>
  </tr>
  <tr>
    <td>saliency-blend</td>
    <td>Arguments: <var>max-iterations</var>x<var>distortion</var>
    <p>Merges the overlay image with the background image such that the image that is most salient (has the most detail) at a given pixel will show in the result. This operator requires a mask. Set the maximum iterations and distortion when seamlessly blending a foreground object onto a background image. The distortion is the RMSE between each iteration, a good start might be 300x0.0001. Note, seamless blending works most effectively when the HDRI feature is enabled. Saliency-blending will be a bit slower than seamless blending.</p>
    </td>
  </tr>


  </tbody>
</table>

<p>To print a complete list of all the available compose operators, use <a
href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#list">-list compose</a>.</p>
</div>
