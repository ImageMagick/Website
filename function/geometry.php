<?php

function geometryUrl()
{
	$href = $_SESSION['RelativePath'];
	return (sprintf("<a href=\"%s/../script/command-line-processing.php#geometry\">Image Geometry</a>",
	$href));
}

function seeGeometry()
{
	printf("See %s for complete details about the <em class=\"arg\">geometry</em> argument.", geometryUrl());

}

?>

