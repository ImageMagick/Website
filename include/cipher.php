<div class="magick-header">
<p class="text-center"><a href="#encipher">Encipher an Image</a> • <a href="#decipher">Decipher an Image</a> • <a href="#caveats">Encipher and Decipher Caveats</a></p>

<p class="lead magick-description">Most images, by design, are made to be viewed often and by many people.  Web images, for example, may be viewed hundreds of times a day by a multitude of vistors.  However, in some cases, you may want to keep a particular image private so that only you or perhaps a select group of your friends or web visitors can view it.  ImageMagick permits you to scramble your images such that unless someone knows your passphrase, they will be unable to view the original content.</p>

<p>You could use an <a href="http://www.wizards-toolkit.org/script/encipher.php">enciphering</a> utility to scramble your image but they typically scramble the entire file making it unrecognizable as an image format.  With ImageMagick, only the pixels are scrambled.  The scrambled image continues to be recognized as an image and will even display in your web page.  However, the content appears as gibberish, nothing like the original content.</p>

<h2 class="magick-post-title"><a class="anchor" id="encipher"></a>Encipher an Image</h2>

<p>Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#encipher">-encipher</a> option to scramble your image so that it is unrecognizable.  The option requires a filename that contains your passphrase.  In this example we scramble an image and save it in the PNG format:</p>

<pre class="highlight"><code>convert rose.jpg -encipher passphrase.txt rose.png
</code></pre>

<p>Here we encipher an image using another image as the passphrase:</p>

<pre class="highlight"><code>convert rose.jpg -encipher smiley.gif rose.png
</code></pre>

<h2 class="magick-post-title"><a class="anchor" id="decipher"></a>Decipher an Image</h2>

<p>Use the <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#decipher">-decipher</a> option to unscramble your image so that it is recognizable once again.  The option requires a filename that contains your passphrase.  In this example we unscramble an image and save it in the JPEG format:</p>

<pre class="highlight"><code>convert rose.png -decipher passphrase.txt rose.jpg
</code></pre>

<h2 class="magick-post-title"><a class="anchor" id="caveats"></a>Encipher and Decipher Caveats</h2>

<p>Some formats do not support enciphered pixels-- the JPEG or GIF format, for
example.  To ensure your image format is supported, encipher a test image and
verify you can restore its original content <var>before</var> you encipher any
additional images in that format.</p>

<p>The image format may only support 8-bit and RGB (TrueColor). As such you may
like to include the options "-depth 8 -type TrueColor" before the output
filename.</p>

<p>The passphrase can be any combinations of letters and symbols.  It should
be a minimum of 12 character combinations to help ensure your image remains
private.  Also make sure your passphrase file permissions prevent others from
reading it otherwise unintended users may be able to view the original image
content.</p>

<p>You can only restore the original image content if you know your
passphrase.  If you lose or forget it, your original image content is lost
forever.</p>

<p>ImageMagick only scrambles the image pixels.  The image metadata remains
untouched and readable by anyone with access to the image file.</p>

<p>ImageMagick uses the <a
href="http://en.wikipedia.org/wiki/Advanced_Encryption_Standard">AES</a>
cipher in Counter mode.  We use the the first half of your passphrase to derive the nonce.  The second half is the cipher key. When used correctly, AES-CTR provides a high level of confidentiality. To avoid information leaks, you must use a fresh passphrase for each image your encrypt.</p>

<p>Currently only ImageMagick can restore your enciphered image content.  We
use a standard cipher and mode so other vendors could support enciphered image content.</p>

<p>Some small practical examples of image enciphering can be found in IM
Examples <a href="https://www.imagemagick.org/Usage/transform/#encipher"
>Encrypting Image Data</a>. </p>

</div>
