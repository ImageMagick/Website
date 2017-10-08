<div class="magick-header">

<p class="lead magick-description">An image gradient creates a gradual blend between two colors formed into a shape that is linear, circular, or ellipical.</p>

<p>For a linear gradient, the operator is either:</p>

<pre class="highlight"><code>gradient:
gradient:color1-color2
</code></pre>

<p> The for a radial gradient, the operator is either:</p>

<pre class="highlight"><code>radial-gradient:
radial-gradient:color1-color2
</code></pre>

<p> In the above, color1 is the fromColor and color2 is the toColor, as described in more detail below. The default is white for color1 and black for color2, i.e., white-black.</p> 

<p>The default for a linear gradient has color1 at the top of the image and color2 at the bottom of the image. Similarly, the default for a radial gradient has color1 at the center of the image and color2 at the boundary of the image.</p>

<p>Gradient colors may be any valid color defined per <a href="https://www.imagemagick.org/script/color.php" target="_blank">https://www.imagemagick.org/script/color.php</a>. The named colors of black/white/grayXX are non-linear gray gradients; whereas gray(XX[%]) is a linear gray gradient. For Unix systems, enclose rgb(a) and hex colors in quotes. Use double quotes, if using variables for the values.</p>

<p>Here is an example linear gradient:</p>

<pre class="highlight"><code>convert -size 256x256 gradient: linear_gradient.png
convert -size 256x256 gradient:white-black linear_gradient.png
</code></pre>
<p><img src="/script/../image/gradients/linear_gradient.png" width="256" height="256"></p>

<p>If you want a radial gradient, try:</p>

<pre class="highlight"><code>convert -size 256x256 radial-gradient: radial_gradient.png
convert -size 256x256 radial-gradient:white-black radial_gradient.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient.png" width="256" height="256"></p>

<p>As of IM 6.9.2.5, gradients have been enhanced through the use of several -defines.</p>

<table class="table table-sm table-striped">
  <tr>
    <td><code>-define gradient:vector=<var>x1</var>,<var>y1</var>, <var>x2</var>,<var>y2</var></code></td>
    <td>Specifies the direction of the linear gradient going from vector1 
    (x1,y1) to vector2 (x2,y2). Color1 (fromColor) will be located at vector 
    position x1,y1 and color2 (toColor) will be located at vector position 
    x2,y2.</td>
  </tr>

  <tr>
    <td><code>-define gradient:center=<var>x</var>,<var>y</var></code></td>
    <td>Specifies the coordinates of the center point for the radial gradient. 
    The default is the center of the image.</td>
  </tr>

  <tr>
    <td><code>-define gradient:radii=<var>x</var>,<var>y</var></code></td>
    <td>Specifies the x and y radii of the gradient. If the x radius and the y 
    radius are equal, the shape of the radial gradient will be a circle. If 
    they differ, then the shape will be an ellipse. The default values are the 
    maximum of the half width and half height of the image.</td>
  </tr>

  <tr>
    <td><code>-define gradient:angle=<var>angle in degrees</var></code></td>
    <td>For a linear gradient, this specifies the direction of the gradient 
    going from color1 to color2 in a clockwise positive manner relative to 
    north (up). For a radial gradient, this specifies the rotation of the 
    gradient in a clockwise positive manner from its normal X-Y 
    orientation.</td>
  </tr>

  <tr>
    <td><code>-define gradient:bounding-box=<var>width</var>x<var>height</var>+<var>x</var>+<var>y</var></code></td>
    <td>Limits the gradient to a larger or smaller region than the image 
    dimensions. If the region defined by the bounding box is smaller than the 
    image, then color1 will be the color of the background.</td>
  </tr>
</table>


<p>We also support two convenience defines for setting the linear gradient direction and the radial gradient shape.</p>

<table class="table table-sm table-striped">
  <tr>
    <td><code>-define gradient:direction=<em>{NorthWest, North, Northeast, West, East, SouthWest, South, SouthEast}</em></code></td>
    <td>Specifies the direction of the linear gradient towards the 
    top/bottom/left/right or diagonal corners.</td>
  </tr>

  <tr>
    <td><code>-define gradient:extent=<em>{Circle, Diagonal, Ellipse, Maximum, Minimum}</em></code></td>
    <td>Specifies the shape of an image centered radial gradient. Circle and 
    Maximum draw a circular radial gradient even for rectangular shaped images 
    of radius equal to the larger of the half-width and half-height of the 
    image. The Circle and Maximum options are both equivalent to the default 
    radial gradient. The Minimum option draws a circular radial gradient 
    even for rectangular shaped images of radius equal to the smaller of the 
    half-width and half-height of the image. The Diagonal option draws a 
    circular radial gradient even for rectangular shaped images of radius equal 
    to the half-diagonal of the image. The Ellipse options draws an elliptical 
    radial gradient for rectangular shaped images of radii equal to half the
    width and half the height of the image.</td>
  </tr>
</table>

<p>Examples</p>

<p>The default linear gradient may also be generated in any of the following ways (or by reversing the direction and swapping color1 and color2):</p>

<pre class="highlight"><code>convert -size 256x128 -define gradient:direction=north gradient:black-white linear_gradient_default.png
convert -size 256x128 -define gradient:angle=0 gradient:black-white linear_gradient_default.png
</code></pre>
<p><img src="/script/../image/gradients/linear_gradient_default.png" width="256" height="128"></p>

<p>The equivalent of </p>

<pre class="highlight"><code>convert -size 128x256 gradient: -rotate 90 linear_gradient_east.png
</code></pre>

<p>can be generate by either of the following (or by reversing the direction and swapping color1 and color2):</p>

<pre class="highlight"><code>convert -size 256x128 -define gradient:direction=east gradient:black-white linear_gradient_east.png
convert -size 256x128 -define gradient:angle=90 gradient:black-white linear_gradient_east.png
</code></pre>
<p><img src="/script/../image/gradients/linear_gradient_east.png" width="256" height="128"></p>


<p>Examples of radial gradients going from black in the center to white at the boundary for the cases of "maximum/circle/default", "minimum", "diagonal", "ellipse" and 45 degree rotated ellipse, respectively, follow below.</p>


<pre class="highlight"><code>convert -size 256x128 radial-gradient:black-white radial_gradient_maximum.png
convert -size 256x128 -define gradient:radii=128,128 radial-gradient:black-white radial_gradient_maximum.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient_maximum.png" width="256" height="128"></p>

<pre class="highlight"><code>convert -size 256x128 -define gradient:extent=minimum radial-gradient:black-white radial_gradient_minimum.png
convert -size 256x128 -define gradient:radii=64,64 radial-gradient:black-white radial_gradient_minimum.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient_minimum.png" width="256" height="128"></p>

<pre class="highlight"><code>convert -size 256x128 -define gradient:extent=diagonal radial-gradient:black-white radial_gradient_diagonal.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient_diagonal.png" width="256" height="128"></p>

<pre class="highlight"><code>convert -size 256x128 -define gradient:extent=ellipse radial-gradient:black-white radial_gradient_ellipse.png
convert -size 256x128 -define gradient:radii=128,64 radial-gradient:black-white radial_gradient_ellipse.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient_ellipse.png" width="256" height="128"></p>

<pre class="highlight"><code>convert -size 256x256 -define gradient:radii=128,64 -define gradient:angle=45 radial-gradient:black-white radial_gradient_ellipse_angle45.png
</code></pre>
<p><img src="/script/../image/gradients/radial_gradient_ellipse_angle45.png" width="256" height="256"></p>

</div>

