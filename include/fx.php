<div>
<p class="text-center"><a href="#fx">The FX Special Effects Image Operator</a> • <a href="#anatomy">The Anatomy of an FX Expression</a></p>

<a class="anchor" id="fx"></a>

<p class="lead">The <a href="http://im.snibgo.com/fxnew.htm" rel="noopener" target="_blank">FX special effects image operator</a> applies a mathematical expression to each pixel channel of an image. The FX expression language provides a powerful and flexible way to manipulate images, allowing you to perform a wide range of operations and transformations on your images. Use FX to:</p>

<ul>
  <li>create canvases, gradients, mathematical colormaps</li>
  <li>move color values between images and channels</li>
  <li>translate, flip, mirror, rotate, scale, shear and generally distort images</li>
  <li>merge or composite multiple images together</li>
  <li>convolve or merge neighboring pixels together</li>
  <li>generate image metrics or 'fingerprints'</li>
</ul>

<p>The operator loops through all the pixels of an image and all the channels of each pixel and returns a new image with the results.  The expression can reference any image in the image sequence, but only a copy of the first image is returned with suitable updates per your expression.</p>

<p>The expression can be simple:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick -size 64x64 canvas:black -channel blue -fx "1/2" fx_navy.png
</samp></pre>

<p>Here, we convert a black to a navy blue image:</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/black.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/black.png" width="64" height="64" alt="black" /></a>
  <img style="margin-top:22px; margin-bottom:22px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/navy.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/navy.png" width="64" height="64" alt="navy" /></a>
</ul>

<p>Or the expression can be complex:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick rose: \
  -fx "(1.0/(1.0+exp(10.0*(0.5-u)))-0.006693)*1.0092503" \
  rose-sigmoidal.png
</samp></pre>

<p>This expression results in a high contrast version of the source image:</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose.jpg" width="70" height="46" alt="rose" /></a>
  <img style="margin-top:13px; margin-bottom:13px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/rose-sigmoidal.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/rose-sigmoidal.png" width="70" height="46" alt="rose-sigmoidal" /></a>
</ul>

<p>The expression can include variable assignments.  Assignments, in most cases, reduce the complexity of an expression and permit some operations that might not be possible any other way.  For example, lets create a radial gradient:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick -size 70x70 canvas: \
  -fx "Xi=i-w/2; Yj=j-h/2; 1.2*(0.5-hypot(Xi,Yj)/70.0)+0.5" \
  radial-gradient.png
</samp></pre>

<p>The command above returns this image:</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/radial-gradient.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/radial-gradient.png" width="70" height="70" alt="radial-gradient" /></a>
</ul>

<p>This FX expression adds random noise to an image:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick photo.jpg -fx 'iso=32; rone=rand(); rtwo=rand(); \
  myn=sqrt(-2*ln(rone))*cos(2*Pi*rtwo); myntwo=sqrt(-2*ln(rtwo))* \
  cos(2*Pi*rone); pnoise=sqrt(p)*myn*sqrt(iso)* \
  channel(4.28,3.86,6.68)/255; max(0,p+pnoise)' noisy.png
</samp></pre>

<p>This FX script utilizes a loop to create a <a href="https://en.wikipedia.org/wiki/Julia_set">Julia set</a>:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick -size 400x400 xc:gray -fx " \
  Xi=2.4*i/w-1.2; \
  Yj=2.4*j/h-1.2; \
  for (pixel=0.0, (hypot(Xi,Yj) &lt; 2.0) &amp;&amp; (pixel &lt; 1.0), \
    delta=Xi^2-Yj^2; \
    Yj=2.0*Xi*Yj+0.2; \
    Xi=delta+0.4; \
    pixel+=0.00390625 \
  ); \
  pixel == 1.0 ? 0.0 : pixel" \
  \( -size 1x1 xc:white xc:red xc:orange xc:yellow xc:green1 xc:cyan xc:blue \
     xc:blueviolet xc:white -reverse +append -filter Cubic -resize 1024x1! \) \
  -clut -rotate -90 julia-set.png</samp></pre>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/julia-set.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/julia-set.png" width="160" height="160" alt="Julia Fractals" /></a>
</ul>

<p>This FX script prints the first 10 prime numbers:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick xc:gray -fx " \
  for (prime=2, prime &lt; 30, composite=0; \
    for (nn=2, nn &lt; (prime/2+1), if ((prime % nn) == 0, composite++, ); nn++); \
      if (composite &lt;= 0, debug(prime), ); prime++)" null:</samp></pre>

<p>See <a href="https://usage.imagemagick.org/transform/index.html#fx">Using FX, The Special Effects Image Operator</a> for more examples.</p>

<p>The <samp>-fx</samp> option replaces any image sequence with a clone of the first image updated with the results of the expression.  If you prefer to apply the expression to each image in the sequence, use <samp>+fx</samp> instead.</p>

<p>The FX expression is interpreted in a single-thread, however, it is executed in multiple threads unless the expression includes the <code>debug()</code> function.</p>

<p>The next section discusses the FX expression language.</p>

<h2><a class="anchor" id="anatomy"></a>The Anatomy of an FX Expression</h2>

<h4>The FX Expression Language</h4>

<p>The formal FX expression language is defined here:</p>

<dl class="row">
  <dt class="col-md-4"> numbers:</dt>
  	<dd class="col-md-8"> integer, floating point, scientific notation (+/- required, e.g. 3.81469e-06), International System number postfixes (.e.g KB, Mib, GB, etc.)</dd>
  <dt class="col-md-4"> constants: </dt>
    <dd class="col-md-8"> E (Euler's number), Epsilon, Opaque, Phi (golden ratio), Pi, QuantumRange, QuantumScale, Transparent</dd>
  <dt class="col-md-4"> FX operators (in order of precedence): </dt>
     <dd class="col-md-8"> ^ (power), unary -, *, /, % (modulo), +, -,
     &lt;&lt;, &gt;&gt;, &lt;, &lt;=, &gt;, &gt;=, +=, -=, *=, /=, %=, &lt;&lt;=
, &gt;&gt;=,
     &amp;=, |=, ++, --, ==, !=, &amp; (bitwise AND),   | (bitwise OR),
     &amp;&amp; (logical AND),  || (logical OR),
     ~ (logical NOT),  ?: (ternary conditional)</dd>
  <dt class="col-md-4"> array: </dt>
    <dd class="col-md-8">an image offers array storage (e.g. p[-1,-1].r) bounded by its width and height.  An image sequence represents multiple arrays (e.g. u.p[0,0].r, v.p[0,0].r).  Storage is limited to Quantum values, e.g. [0..65535] for Q16 builds and floating point for HDRI-enabled builds.</dd>
  <dt class="col-md-4"> math functions: </dt>
     <dd class="col-md-8"> abs(), acos(), acosh(), airy(), alt(), asin(), asinh(), atan(), atanh(), atan2(), ceil(), clamp(), cos(), cosh(), debug(), drc(), epoch(), erf(), exp(), floor(), gauss(), gcd(), hypot(), int(), isnan(), j0(), j1(), jinc(), ln(), log(), logtwo(), magicktime(), max(), min(), mod(), not(), pow(), rand(), round(), sign(), sin(), sinc(), sinh(), sqrt(), squish(), tan(), tanh(), trunc()</dd>
  <dt class="col-md-4"> channel functions: </dt>
    <dd class="col-md-8"> define up to 5 pixel channels</dd>
  <dt class="col-md-4"> color names:</dt>
    <dd class="col-md-8"> red, cyan, black, etc.</dd>
  <dt class="col-md-4"> color functions:</dt>
    <dd class="col-md-8"> srgb(), srgba(), rgb(), rgba(), cmyk(), cmyka(), hsl(), hsla(), etc.</dd>
  <dt class="col-md-4"> color hex values:</dt>
    <dd class="col-md-8"> #ccc, #cbfed0, #b9e1cc00, etc.</dd>
  <dt class="col-md-4"> symbols:</dt><dd class="col-md-8"><dl>
     <dd><samp>u</samp>: first image in list</dd>
     <dd><samp>v</samp>: second image in list</dd>
     <dd><samp>s</samp>: current image in list (for %[fx:] otherwise = u)</dd>
     <dd><samp>t</samp>: index of current image (s) in list</dd>
     <dd><samp>n</samp>: number of images in list</dd>

     <dd><samp>i</samp>: column offset</dd>
     <dd><samp>j</samp>: row offset</dd>
     <dd><samp>p</samp>: pixel to use (absolute or relative to current pixel)</dd>

     <dd><samp>w</samp>: width of this image</dd>
     <dd><samp>h</samp>: height of this image</dd>
     <dd><samp>z</samp>: channel depth</dd>

     <dd><samp>r</samp>: red value (from RGBA), of a specific or current pixel</dd>
     <dd><samp>g</samp>: green</dd>
     <dd><samp>b</samp>: blue</dd>
     <dd><samp>a</samp>: alpha</dd>
     <dd><samp>o</samp>: opacity</dd>

     <dd><samp>c</samp>: cyan value of CMYK color of pixel</dd>
     <dd><samp>y</samp>: yellow</dd>
     <dd><samp>m</samp>: magenta</dd>
     <dd><samp>k</samp>: black</dd>

     <dd><samp>all</samp>: all channels</dd>
     <dd><samp>this</samp>: this channel</dd>

     <dd><samp>intensity</samp>: pixel intensity</dd>

     <dd><samp>hue</samp>: pixel hue</dd>
     <dd><samp>saturation</samp>: pixel saturation</dd>
     <dd><samp>lightness</samp>: pixel lightness</dd>
     <dd><samp>luma</samp>: pixel luma</dd>

     <dd><samp>page.width</samp>: page width</dd>
     <dd><samp>page.height</samp>: page height</dd>
     <dd><samp>page.x</samp>: page x offset</dd>
     <dd><samp>page.y</samp>: page y offset</dd>

     <dd><samp>printsize.x</samp>: x printsize</dd>
     <dd><samp>printsize.y</samp>: y printsize</dd>

     <dd><samp>resolution.x</samp>: x resolution</dd>
     <dd><samp>resolution.y</samp>: y resolution</dd>

     <dd><samp>depth</samp>: image depth</dd>
     <dd><samp>extent</samp>: image extent</dd>
     <dd><samp>minima</samp>: image minima</dd>
     <dd><samp>maxima</samp>: image maxima</dd>
     <dd><samp>mean</samp>: image mean</dd>
     <dd><samp>median</samp>: image median</dd>
     <dd><samp>standard_deviation</samp>: image standard deviation</dd>
     <dd><samp>kurtosis</samp>: image kurtosis</dd>
     <dd><samp>skewness</samp>: image skewness (add a channel specifier to compute a statistic for that channel, e.g. depth.r)</dd></dl></dd>
  <dt class="col-md-4"> iterators:</dt>
    <dd class="col-md-8"> do(), for(), while()</dd>
  <dt class="col-md-4"> image attributes:</dt>
  	<dd class="col-md-8"> s.depth, s.kurtosis, s.maxima, s.mean, s.minima, s.resolution.x, s.resolution.y, s.skewness, s.standard_deviation</dd>
  <dt class="col-md-4"> user settings:</dt>
  	<dd class="col-md-8">define Fx symbols as user settings, e.g. <pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick ... -set option:wd1 "%[fx:w/2]" -resize "%[fx:wd1-5]" ...</samp></pre><dd>
</dl>

<h4>The FX Expression</h4>

<p>An FX expression may include any combination of the following:</p>
<dl class="row">
<dt class="col-md-4"> <var>x</var> <samp>^</samp> <var>y</var></dt><dd class="col-md-8"> exponentiation (<var>x<sup>y</sup></var>)</dd>
<dt class="col-md-4"> <samp>(</samp> ... <samp>)</samp></dt><dd class="col-md-8"> grouping</dd>
<dt class="col-md-4"> <var>x</var> <samp>*</samp> <var>y</var></dt><dd class="col-md-8"> multiplication</dd>
<dt class="col-md-4"> <var>x</var> <samp>/</samp> <var>y</var></dt><dd class="col-md-8"> division</dd>
<dt class="col-md-4"> <var>x</var> <samp>%</samp> <var>y</var></dt><dd class="col-md-8"> modulo</dd>
<dt class="col-md-4"> <var>x</var> <samp>+</samp> <var>y</var></dt><dd class="col-md-8"> addition</dd>
<dt class="col-md-4"> <var>x</var> <samp>-</samp> <var>y</var></dt><dd class="col-md-8"> subtraction</dd>
<dt class="col-md-4"> <var>x</var> <samp>&lt;&lt;</samp> <var>y</var></dt><dd class="col-md-8"> left shift</dd>
<dt class="col-md-4"> <var>x</var> <samp>&gt;&gt;</samp> <var>y</var></dt><dd class="col-md-8"> right shift</dd>
<dt class="col-md-4"> <var>x</var> <samp>&lt;</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x</var> &lt; <var>y</var>,  otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>&lt;=</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x</var> &lt;= <var>y</var>,  otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>&gt;</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x</var> &gt; <var>y</var>,  otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>&gt;=</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x</var> &gt;= <var>y</var>,  otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>==</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x </var>==<var> y</var>, otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>!=</samp> <var>y</var></dt><dd class="col-md-8"> boolean relation, return value 1.0 if <var>x </var>!=<var> y</var>, otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>&amp;</samp> <var>y</var></dt><dd class="col-md-8"> binary AND</dd>
<dt class="col-md-4"> <var>x</var> <samp>|</samp> <var>y</var></dt><dd class="col-md-8"> binary OR</dd>
<dt class="col-md-4"> <var>x</var> <samp>&amp;&amp;</samp> <var>y</var></dt><dd class="col-md-8"> logical AND connective, return value 1.0 if <var>x</var> &gt; 0 and <var>y</var> &gt; 0,  otherwise 0.0</dd>
<dt class="col-md-4"> <var>x</var> <samp>||</samp> <var>y</var></dt><dd class="col-md-8"> logical OR connective (inclusive), return value 1.0 if <var>x</var> &gt; 0 or <var>y</var> &gt; 0 (or both),  otherwise 0.0</dd>
<dt class="col-md-4"> <samp>~</samp><var>x</var></dt><dd class="col-md-8"> logical NOT operator, return value 1.0 if <var>not</var> <var>x</var> &gt; 0,  otherwise 0.0</dd>
<dt class="col-md-4"> <samp>+</samp><var>x</var></dt><dd class="col-md-8"> unary plus, return 1.0*value</dd>
<dt class="col-md-4"> <samp>-</samp><var>x</var></dt><dd class="col-md-8"> unary minus, return -1.0*value</dd>
<dt class="col-md-4"> <var>condition</var> <samp>?</samp> <var>true-statements</var> <samp>:</samp> <var>false-statements</var> </dt><dd class="col-md-8">ternary conditional expression, return value <var>true-statements</var> if <var>condition</var> != 0, otherwise <var>false-statements</var></dd>
<dt class="col-md-4"> <var>x</var> <samp>=</samp> <var>y</var></dt><dd class="col-md-8">assignment; single character variables are reserved, instead use 2 or more characters, letter combinations only (e.g. Xi not X1)</dd>
<dt class="col-md-4"> <var>x</var> <samp>;</samp> <var>y</var></dt><dd class="col-md-8">statement separator </dd>
<dt class="col-md-4"> <samp>phi</samp></dt><dd class="col-md-8"> constant (1.618034...)</dd>
<dt class="col-md-4"> <samp>pi</samp></dt><dd class="col-md-8"> constant (3.14159265359...)</dd>
<dt class="col-md-4"> <samp>e</samp></dt><dd class="col-md-8"> constant (2.71828...)</dd>
<dt class="col-md-4"> <samp>QuantumRange</samp></dt><dd class="col-md-8"> constant maximum pixel value (255 for Q8, 65535 for Q16)</dd>
<dt class="col-md-4"> <samp>QuantumScale</samp></dt><dd class="col-md-8"> constant 1.0/<samp>QuantumRange</samp></dd>
<dt class="col-md-4"> <samp>intensity</samp></dt><dd class="col-md-8"> pixel intensity whose value respects the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#intensity">-intensity</a> option.</dd>
<dt class="col-md-4"> <samp>hue</samp></dt><dd class="col-md-8"> pixel hue</dd>
<dt class="col-md-4"> <samp>saturation</samp></dt><dd class="col-md-8"> pixel saturation</dd>
<dt class="col-md-4"> <samp>lightness</samp></dt><dd class="col-md-8"> pixel lightness; equivalent to 0.5*max(red,green,blue) + 0.5*min(red,green,blue)</dd>
<dt class="col-md-4"> <samp>luminance</samp></dt><dd class="col-md-8"> pixel luminance; equivalent to <samp>0.212656*red + 0.715158*green + 0.072186*blue</samp></dd>
<dt class="col-md-4"> <samp>red, green, blue</samp>, etc.</dt><dd class="col-md-8"> color names</dd>
<dt class="col-md-4"> <samp>#ccc, #cbfed0, #b9e1cc00</samp>, etc.</dt><dd class="col-md-8"> color hex values</dd>
<dt class="col-md-4"> <samp>rgb(), rgba(), cmyk(), cmyka(), hsl(), hsla()</samp></dt><dd class="col-md-8"> color functions</dd>
<dt class="col-md-4"> <samp>s, t, u, v, n, i, j, w, h, z, r, g, b, a, o, c, y, m, k</samp></dt><dd class="col-md-8"> symbols</dd>
<dt class="col-md-4"> <samp>abs(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> absolute value function</dd>
<dt class="col-md-4"> <samp>acos(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> arc cosine function</dd>
<dt class="col-md-4"> <samp>acosh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> inverse hyperbolic cosine function</dd>
<dt class="col-md-4"> <samp>airy(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> Airy function (max=1, min=0); airy(<var>x</var>)=[jinc(<var>x</var>)]<sup>2</sup>=[2*j1(<var>pi*x</var>)/(<var>pi*x</var>)]<sup>2</sup></dd>
<dt class="col-md-4"> <samp>alt(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> sign alternation function (return 1.0 if int(<var>x</var>) is even, -1.0 if int(<var>x</var>) is odd)</dd>
<dt class="col-md-4"> <samp>asin(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> arc sine function</dd>
<dt class="col-md-4"> <samp>asinh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> inverse hyperbolic sine function</dd>
<dt class="col-md-4"> <samp>atan(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> arc tangent function</dd>
<dt class="col-md-4"> <samp>atanh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> inverse hyperbolic tangent function</dd>
<dt class="col-md-4"> <samp>atan2(</samp><var>y</var>,<var>x</var><samp>)</samp></dt><dd class="col-md-8"> arc tangent function of two variables</dd>
<dt class="col-md-4"> <samp>ceil(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8">smallest integral value not less than argument</dd>
<dt class="col-md-4"> <samp>channel(</samp>...<samp>)</samp></dt><dd class="col-md-8">supports from zero to five arguments, e.g., channel(0.1) sets the first channel to 0.1 and zero's the other channels.</dd>
<dt class="col-md-4"> <samp>clamp(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> clamp value</dd>
<dt class="col-md-4"> <samp>cos(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> cosine function</dd>
<dt class="col-md-4"> <samp>cosh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> hyperbolic cosine function</dd>
<dt class="col-md-4"> <samp>debug(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> print <var>x</var> (useful for debugging your expression)</dd>
<dt class="col-md-4"> <samp>do(</samp><var>statements</var>, <var>condition</var><samp>)</samp></dt><dd class="col-md-8"> iterate while the condition is not equal to 0</dd>
<dt class="col-md-4"> <samp>drc(</samp><var>x</var>,<var>y</var><samp>)</samp></dt><dd class="col-md-8"> dynamic range compression (knee curve); drc(<var>x</var>,<var>y</var>)=(<var>x</var>)/(<var>y</var>*(<var>x</var>-1)+1); -1&lt;<var>y</var>&lt;1 </dd>
<dt class="col-md-4"> <samp>epoch(</samp><var>date-time</var><samp>)</samp></dt><dd class="col-md-8"> convert date-time property to the number of seconds since the epoch, 00:00:00 UTC</dd>
<dt class="col-md-4"> <samp>erf(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> error function</dd>
<dt class="col-md-4"> <samp>exp(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> natural exponential function (<var>e<sup>x</sup></var>)</dd>
<dt class="col-md-4"> <samp>floor(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> largest integral value not greater than argument</dd>
<dt class="col-md-4"> <samp>for(</samp><var>initialize</var>, <var>condition</var>, <var>statements</var><samp>)</samp></dt><dd class="col-md-8"> iterate while the condition is not equal to 0</dd>
<dt class="col-md-4"> <samp>gauss(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> gaussian function; gauss(<var>x</var>)=exp(<var>-x*x/2</var>)/sqrt(2*pi)</dd>
<dt class="col-md-4"> <samp>gcd(</samp><var>x</var>,<var>y</var><samp>)</samp></dt><dd class="col-md-8"> greatest common denominator</dd>
<dt class="col-md-4"> <samp>hypot(</samp><var>x</var>,<var>y</var><samp>)</samp></dt><dd class="col-md-8"> the square root of x<sup>2</sup>+y<sup>2</sup></dd>
<dt class="col-md-4"> <samp>if(</samp><var>condition</var>, <var>nonzero-statements</var>, <var>zero-statements</var><samp>)</samp></dt><dd class="col-md-8"> interpret expression depending on condition</dd>
<dt class="col-md-4"> <samp>int(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> greatest integer function (return greatest integer less than or equal to <var>x</var>)</dd>
<dt class="col-md-4"> <samp>isnan(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8">return 1.0 if <var>x</var> is NAN, 0.0 otherwise</dd>
<dt class="col-md-4"> <samp>j0(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> Bessel functions of <var>x</var> of the first kind of order 0</dd>
<dt class="col-md-4"> <samp>j1(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> Bessel functions of <var>x</var> of the first kind of order 1</dd>
<dt class="col-md-4"> <samp>jinc(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> jinc function (max=1, min=-0.1323); jinc(<var>x</var>)=2*j1(pi*<var>x</var>)/(pi*<var>*x</var>)</dd>
<dt class="col-md-4"> <samp>ln(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> natural logarithm function</dd>
<dt class="col-md-4"> <samp>log(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> logarithm base 10</dd>
<dt class="col-md-4"> <samp>logtwo(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> logarithm base 2</dd>
<dt class="col-md-4"> <samp>ln(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> natural logarithm</dd>
<dt class="col-md-4"> <samp>magicktime()</samp></dt><dd class="col-md-8"> the current time in seconds since the epoch, 00:00:00 UTC</dd>
<dt class="col-md-4"> <samp>max(</samp><var>x</var>, <var>y</var><samp>)</samp></dt><dd class="col-md-8"> maximum of <var>x</var> and <var>y</var></dd>
<dt class="col-md-4"> <samp>min(</samp><var>x</var>, <var>y</var><samp>)</samp></dt><dd class="col-md-8"> minimum of <var>x</var> and <var>y</var></dd>
<dt class="col-md-4"> <samp>mod(</samp><var>x</var>, <var>y</var><samp>)</samp></dt><dd class="col-md-8"> floating-point remainder function</dd>
<dt class="col-md-4"> <samp>not(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> return 1.0 if <var>x</var> is zero, 0.0 otherwise</dd>
<dt class="col-md-4"> <samp>pow(</samp><var>x</var>,<var>y</var><samp>)</samp></dt><dd class="col-md-8"> power function (<var>x<sup>y</sup></var>)</dd>
<dt class="col-md-4"> <samp>rand()</samp></dt><dd class="col-md-8"> value uniformly distributed over the interval [0.0, 1.0) with a 2 to the 128th-1 period</dd>
<dt class="col-md-4"> <samp>round()</samp></dt><dd class="col-md-8"> round to integral value, regardless of rounding direction</dd>
<dt class="col-md-4"> <samp>sign(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> return -1.0 if <var>x</var> is less than 0.0 otherwise 1.0</dd>
<dt class="col-md-4"> <samp>sin(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> sine function</dd>
<dt class="col-md-4"> <samp>sinc(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> sinc function (max=1, min=-0.21); sinc(<var>x</var>)=sin(<var>pi*x</var>)/(<var>pi*x</var>)</dd>
<dt class="col-md-4"> <samp>squish(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> squish function; squish(<var>x</var>)=1.0/(1.0+exp(<var>-x</var>))</dd>
<dt class="col-md-4"> <samp>sinh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> hyperbolic sine function</dd>
<dt class="col-md-4"> <samp>sqrt(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> square root function</dd>
<dt class="col-md-4"> <samp>tan(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> tangent function</dd>
<dt class="col-md-4"> <samp>tanh(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> hyperbolic tangent function</dd>
<dt class="col-md-4"> <samp>trunc(</samp><var>x</var><samp>)</samp></dt><dd class="col-md-8"> round to integer, towards zero</dd>
<dt class="col-md-4"> <samp>while(</samp><var>condition</var>, <var>statements</var><samp>)</samp></dt><dd class="col-md-8"> iterate while the condition is not equal to 0</dd>
<dt class="col-md-4"> <samp>image.depth, image.kurtosis, image.maxima, image.mean, image.median, image.minima, image.resolution.x, image.resolution.y, image.skewness, image.standard_deviation</samp></dt><dd class="col-md-8"> image attributes</dd>
</dl>
<p>The expression semantics include these rules:</p>

<ul>
<li>symbols are case insensitive</li>
<li>only one ternary conditional (e.g. x ? y : z) per statement</li>
<li>statements are assignments or the final expression to return</li>
<li>an assignment starts a statement, it is not an operator</li>
<li>single character variables are reserved.  Assignments to reserved built-ins throw an exception;  e.g. <samp>r=3.0; r</samp> returns <em>Attempted assignment to non-UserSymbol 'r' at '3.0'</em>.</li>
<li>unary operators have a lower priority than binary operators, that is, the unary minus (negation) has lower precedence than exponentiation, so -3^2 is interpreted as -(3^2) = -9.  Use parentheses to clarify your intent (e.g. (-3)^2 = 9).</li>
<li>care must be exercised when using the slash ('/') symbol. The string of characters <var>1/2x</var> is interpreted as (1/2)x. The contrary interpretation should be written explicitly as 1/(2x). Again, the use of parentheses helps clarify the meaning and should be used whenever there is any chance of misinterpretation.</li>
<li>As <samp>--<samp> is the variable decrement operator, use parenthesis to subtract a negative number, e.g, <samp>-4-(-5)</samp>.</li>
</ul>
<br/>


<h4>Source Images</h4>

<p>The symbols <samp>u</samp> and <samp>v</samp> refer to the first and second images, respectively, in the current image sequence.  Refer to a particular image in a sequence by appending its index to any image reference (usually <samp>u</samp>), with a zero index for the beginning of the sequence. A negative index counts from the end.  For example, <samp>u[0]</samp> is the first image in the sequence, <samp>u[2]</samp> is the third, <samp>u[-1]</samp> is the last image, and <samp>u[t]</samp> is the current image. The current image can also be referenced by <samp>s</samp>. If the sequence number exceeds the length of the sequence, the count is wrapped. Thus in a 3-image sequence,  <samp>u[-1]</samp>, <samp>u[2]</samp>, and <samp>u[5]</samp> all refer to the same (third) image.</p>

<p>As an example, we form an image by averaging the first image and third images (the second (index 1) image is ignored and just junked):</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick image1.jpg image2.jpg image3.jpg -fx "(u+u[2])/2" image.jpg
</samp></pre>

<p>By default, the image to which <samp>p</samp>, <samp>r</samp>, <samp>g</samp>, <samp>b</samp>, <samp>a</samp>, etc., are applied is the current image <samp>s</samp> in the image list. This is equivalent to <samp>u</samp> except when used in an escape sequence <samp>%[fx:...]</samp>. </p>

<p>It is important to note the special role played by the first image. This is the only image in the image sequence that is modified, other images are used only for their data. As an illustrative example, consider the following, and note that the setting <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel red</a> instructs <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fx">-fx</a> to modify only the green channel; nothing in the red or blue channels will change. It is instructive to ponder why the result is not symmetric.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick logo: -flop logo: -resize "20%" -channel green -fx "(u+v)/2" image.jpg
</samp></pre>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm-flop.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm-flop.png" width="128" height="96" alt="logo-sm-flop.png" /></a>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm.png" width="128" height="96" alt="logo-sm.png" /></a>
<img style="margin-top:38px; margin-bottom:38px;" src="<?php echo $_SESSION['RelativePath']?>/../image/right.gif" width="20" height="20" alt="==>" />
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm-fx.png"><img src="<?php echo $_SESSION['RelativePath']?>/../image/logo-sm-fx.png" width="128" height="96" alt="logo-sm-fx.png" /></a>
</ul>

<br/>
<h4>Accessing Pixels</h4>

<p>All color values are normalized to the range of 0.0 to 1.0.  The alpha channel ranges from 0.0 (fully transparent) to 1.0 (fully opaque).</p>

<p>The pixels are processed one at a time, but a different pixel of an image can be specified using a pixel index represented by <samp>p</samp>. For example,</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>p[-1].g      green value of pixel to the immediate left of the current pixel
p[-1,-1].r   red value of the pixel diagonally left and up from current pixel
</samp></pre>

<p>To specify an absolute position, use braces, rather than brackets.</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>p{0,0}.r     red value of the pixel in the upper left corner of the image
p{12,34}.b   blue pixel value at column number 12, row 34 of the image
</samp></pre>

<p>Integer values of the position retrieve the color of the pixel referenced, while non-integer position values return a blended color according to the current <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#interpolate">-interpolate</a> setting.</p>

<p>A position outside the boundary of the image retrieves a value dictated by the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#virtual-pixel">-virtual-pixel</a> option setting.</p>

<p>Specify <samp>u.r</samp> to specify the red channel of the current image. If you don't specify a channel qualifier, you get the current channel. Use <samp>mean.this</samp> to set the output channel to the mean of just the input channel.  Use <samp>mean.all</samp> to set the overall mean of the input channels.</p>

<h4>Apply an Expression to Select Image Channels</h4>

<p>Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel</a> setting to specify the output channel of the result. If no output channel is given, the result is set over all channels except the opacity channel. For example, to replace the red channel of <samp>alpha.png</samp> with the average of the green channels from the images <samp>alpha.png</samp> and <samp>beta.png</samp>, use:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick alpha.png beta.png -channel red -fx "(u.g+v.g)/2" gamma.png
</samp></pre>


<h4>Results</h4>

<p>The <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#fx">-fx</a> operator evaluates the given expression for each channel (set by <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel</a>) of each pixel in the first image (<samp>u</samp>) in the sequence. The computed values are temporarily stored in a copy (clone) of that first image until all the pixels have been processed, after which this single new image replaces the list of images in the current image sequence.  As such, in the previous example the updated version of <samp>alpha.png</samp> replaces both of the original images, <samp>alpha.png</samp> and <samp>beta.png</samp>, before being saved as <samp>gamma.png</samp>.</p>

<p>The current image <samp>s</samp> is set to the first image in the sequence (<samp>u</samp>), and <samp>t</samp> to its index, 0.  The symbols <samp>i</samp> and <samp>j</samp> reference the current pixel being processed.</p>


<p>For use with <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#format_identify_">-format</a>, the value-escape <samp>%[fx:]</samp> is evaluated just once for each image in the current image sequence. As each image in the sequence is being evaluated, <samp>s</samp> and <samp>t</samp> successively refer to the current image and its index, while <samp>i</samp> and <samp>j</samp> are set to zero, and the current channel set to red (<a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel</a> is ignored). An example:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary"><samp>$ magick canvas:'rgb(25%,50%,75%)' rose: -colorspace gray  \
  -format 'Red channel of NW corner of image #%[fx:t] is %[fx:s]\n' info:
Red channel of NW corner of image #0 is 0.464883
Red channel of NW corner of image #1 is 0.184582
</samp></pre>

<p>Here we use the image indexes to <var>rotate</var> each image differently, and use <samp>-set</samp> with the image index to set a different <var>pause delay</var> on the first image in the animation:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick rose: -duplicate 29 -virtual-pixel Gray -distort SRT '%[fx:360.0*t/n]' \
  -set delay '%[fx:t == 0 ? 240 : 10]' -loop 0 rose.gif
</samp></pre>

<p>This example tests the difference between two images, measured by RMSE. If the difference is greater than 0.1 it returns 1; otherwise it returns 0:</p>

<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick water.png reference.png -metric RMSE -compare -format "%[fx:%[distortion]>0.1]" info:</samp></pre>

<p>The color-escape <samp>%[pixel:]</samp> or <samp>%[hex:]</samp> is evaluated once per image and per color channel in that image (<a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#channel">-channel</a> is ignored), The values generated are then converted into a color string (a named color or hex color value).  The symbols <samp>i</samp> and <samp>j</samp> are set to zero, and <samp>s</samp> and <samp>t</samp> refer to each successively current image and index.</p>

<p>The <samp>epoch()</samp> method takes an date-time property, for example:</p>
<pre class="p-3 mb-2 text-body-secondary bg-body-tertiary cli"><samp>magick rose.png -precision 16 -format '%[fx:epoch(%%[date:modify])]' info:</samp></pre>

</div>
