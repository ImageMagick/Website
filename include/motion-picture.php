<div class="magick-header">
<h1 class="text-center">Motion Picture and Effects</h1>
<p class="text-center"><a href="#log">Log Format</a> • <a href="#properties">DPX Properties</a> • <a href="#settings">DPX Settings</a></p>

<p class="lead magick-description">DPX (SMPTE 268M-2003) - This format is used in Motion Picture and Effects industry that makes particular use of the extensive header information and the format's flexibility in being able to handle high dynamic range and logarithmic color values at a variety of bit depths using RGB or YCbCr pixel descriptions.  It is based on, but largely supersedes, Kodak's Cineon format that has a more film specific header.</p>

<p>One example of it's use includes scanning film for use in post production. Each frame is stored as an individual DPX file ranging from 2k (2048 pixels wide) to 8k (8192 pixels wide - for IMAX frames) at anything between 8 to 64 bits per color component. A sequence of these might then be processed using compositing software, altering the color or adding visual effects. Once complete they might then be recorded digitally to tape or projected back on to film.</p>

<p>The color values for each pixel are often stored logarithmically (particularly if the sequence is destined to be transferred back on to film) which more naturally reflects the density of how color information is stored in the emulsion on the original film. When viewed without alteration, logarithmic files appear to have very low contrast and requires a 'look up table' to translate the logarithmic image to something that resembles what you might see if the image was transferred back to film and projected in a cinema. Apart from making the image linear (like most typical computer images) and adjusting the gamma level this table sets where the black and white point lies.</p>

<p>For a 10 bit logarithmic image where each color component value ranges from 0 to 1023 the black and white points are normally set at 95 for black and 685 for white. What this means is that the logarithmic file stores color values that are lighter than what the linear version will display as pure white and darker than what it will display as pure black. This extra information therefore remains available for an effects artists who might wish to alter the brightness of the image after it has been stored as a DPX file.</p>

<p>As an example, had this information been lost, reducing the brightness of an image uniformly would result in highlights becoming darker, whereas with this extra information the highlights instead reduce in size and start showing details that were previously too bright to be seen. The latter is far closer to what happens in the real world.</p>

<p>The header can contain Film and/or Television specific data related to a production. For example the television header can contain a SMPTE time code so that shots exported as a DPX sequence from a production's edit can be easily replaced once any effects have been added. The film header holds information about the reel of film the frames originated from and various camera settings that were used while filming.  All these details usually stay with the images as they are passed between post-production companies.</p>

<h2><a class="anchor" id="log"></a>Log Format</h2>

<p>The color values for each pixel are often stored logarithmically (particularly if the sequence is destined to be transferred back on to film) which more naturally reflects the density of how color information is stored in the emulsion on the original film. When viewed without alteration logarithmic files appear to have very low contrast (leftmost image), and so require a 'look up table' to translate the logarithmic image to something that resembles what you might see if the image was transferred back to film and projected in a cinema (rightmost image). Apart from making the image linear (like most typical computer images) and adjusting the gamma level this table sets where the black and white point lies.</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_log.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_log.jpg" width="384" height="288" class="image-slices" alt="bluebells-log" /></a>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_lin.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_lin.jpg" width="384" height="288" class="image-slices" alt="bluebells-linear" /></a>
</ul>

<p>For a 10 bit logarithmic image where each color component value ranges from 0 to 1023 the black and white points are normally set at 95 for black and 685 for white. What this means is that the logarithmic file stores color values that are lighter than what the linear version will display as pure white and darker than what it will display as pure black. This extra information therefore remains available for an effects artists who might wish to alter the brightness of the image after it has been stored as a DPX file.</p>

<p>As an example, had this information been lost, reducing the brightness of a linear image uniformly would result in highlights becoming darker (leftmost image), whereas with this extra information the highlights instead reduce in size and start showing details that were previously too bright to be seen (rightmost image). The latter is far closer to what happens in the real world.</p>

<ul>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_clipped.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_clipped.jpg" width="384" height="288" class="image-slices" alt="bluebells-clipped" /></a>
  <a href="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_darker.jpg"><img src="<?php echo $_SESSION['RelativePath']?>/../image/bluebells_darker.jpg" width="384" height="288" class="image-slices" alt="bluebells-darker" /></a>
</ul>

<h2><a class="anchor" id="properties"></a>DPX Properties</h2>

<p>ImageMagick supports these DPX properties:</p>

<ul><pre class="pre-scrollable bg-light text-dark"><samp>dpx:file.copyright
dpx:file.creator
dpx:file.filename
dpx:file.project
dpx:file.version
dpx:film.count
dpx:film.format
dpx:film.frame_id
dpx:film.frame_position
dpx:film.frame_rate
dpx:film.held_count
dpx:film.id
dpx:film.offset
dpx:film.prefix
dpx:film.sequence_length
dpx:film.shutter_angle
dpx:film.slate
dpx:film.type
dpx:orientation.aspect_ratio
dpx:orientation.border
dpx:orientation.device
dpx:orientation.filename
dpx:orientation.serial
dpx:orientation.x_center
dpx:orientation.x_offset
dpx:orientation.x_size
dpx:orientation.y_center
dpx:orientation.y_offset
dpx:orientation.y_size
dpx:television.black_gain
dpx:television.black_level
dpx:television.break_point
dpx:television.field_number
dpx:television.frame_rate
dpx:television.gamma
dpx:television.integration_times
dpx:television.interlace
dpx:television.padding
dpx:television.time.code
dpx:television.time_offset
dpx:television.user.bits
dpx:television.vertical_sample_rate
dpx:television.video_signal
dpx:television.white_level
dpx:user.id
dpx:user.data
</samp></pre></ul>

<p>Look for any user data as the <samp>dpx:user-data</samp> image profile.</p>

<p> To determine which properties are associated with your DPX image, use this command for example:</p>

<ul><pre class="bg-light text-dark"><samp>magick identify -verbose bluebells.dpx
</samp></pre></ul>

<p>To identify a particular property, try this:</p>

<ul><pre class="bg-light text-dark"><samp>magick identify -format "%[dpx:television.time.code]" bluebells.dpx
</samp></pre></ul>

<p>Finally, to set a property:</p>

<ul><pre class="bg-light text-dark"><samp>magick bluebells.dpx -define dpx:television.time.code=10:00:02:15 bluebells-001.dpx
</samp></pre></ul>

<h2><a class="anchor" id="settings"></a>DPX Settings</h2>

<p>Use <a href="<?php echo $_SESSION['RelativePath']?>/../script/command-line-options.php#set">-set</a> to specify the image or film gamma or black and white points.  For example use:
</p>

<ul><pre class="bg-light text-dark"><samp>-set gamma 1.7
-set film-gamma 0.6
-set reference-black 95
-set reference-white 685
-set profile dpx:user.data
</samp></pre></ul>

</div>
