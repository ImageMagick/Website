<p>The convex hull is the is the smallest area convex polygon containing the set of points inside it. The convex hull may be visualized as the shape enclosed by a rubber band stretched around the set of points.</p>

<p>The convex-hull string format returns a list of x,y coordinates of the vertices of the convex-hull polygon containing all the non-black pixels within it.</p>

The syntax is:
CODE: SELECT ALL

magick <-fuzz XX%> <-define convex-hull:background-color> -format "%[convex-hull]" info:
where the string format is sensitive to an optional -fuzz value and to an optional background color specified by the define. The command above will find the background color automatically according to the fuzz value unless the background color is defined. The fuzz value defaults to 0 when not specified.

For example, consider the following white rectangle on a black background:

<ul><img class="img-fluid d-block" src="<?php echo $_SESSION['RelativePath']?>/../image/color-thresholding.jpg" alt="[Color Thresholding]" width="265" height="333" name="color-thresholding" /></ul>

