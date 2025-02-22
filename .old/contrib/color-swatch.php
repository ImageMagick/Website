<?php
# Authors: Anthony Barnett and Fred Weinhaus: 10/24/2009
# Last Updated: Fred Weinhaus: 10/23/2013

# set path to convert
$path2convert = "/usr/local/bin/convert";

# Get the color and bgcolor value from the php page image tag as get parameter
# Then create PNG image and send back
$color = htmlspecialchars($_GET['color']);
$bgcolor = htmlspecialchars($_GET['bgcolor']);


# test for not valid characters in color and bgcolor
$colortest = preg_match_all('/[^#%(),.0-9a-zA-Z]/', $color, $matches);
$bgcolortest = preg_match_all('/[^#%(),.0-9a-zA-Z]/', $bgcolor, $matches);

if ( $colortest == 0 && $bgcolortest == 0 )
	{
	if ( $bgcolor == "checker" )
		{
		# Generate the checker background and overlay color
		# due to change of channels to linear from non-linear, one needs to 
		# convert cmyk colors to sRGB
		$cmd = "$path2convert -size 150x150 pattern:checkerboard -normalize xc:\"$color\" -colorspace sRGB -compose over -composite -depth 8 PNG:-";
		}
	else
		{
		# Generate the checker background and overlay color
		$cmd = "$path2convert -size 150x150 xc:\"$color\" -depth 8 PNG:-";
		}

	# Set the header type
	header("Content-type: image/png");
	
	# Display the image
	passthru($cmd, $retval);
	}

?>

