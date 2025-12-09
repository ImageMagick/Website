<?php
if (!isset($_SESSION) || !is_array($_SESSION)) {
  header("Location: ../script/index.php");
  exit();
}
?>
<div>

<p class="lead">The Voluntary Product Accessibility Template (VPAT) is a document that describes how an information technology (IT) product, such as software, hardware, or web-based applications, meets the accessibility standards defined by Section 508 of the Rehabilitation Act. This VPAT describes the accessibility features of the ImageMagick open-source project.</p>
<ul>
<li>Product Name: ImageMagick</li>
<li>Version: 7.1.0</li>
</ul>

<h5>Evaluation Methods Used</h5>
<p>This VPAT is based on a review of the ImageMagick project documentation, including the project website and the software documentation.</p>

<h6>Section 1194.21 - Software Applications and Operating Systems</h6>

<p>ImageMagick is a command-line utility for creating, editing, and converting images. The software can be used with screen readers and other assistive technologies to access the command-line interface. However, the interface is not optimized for use with assistive technologies, and some users may find it difficult to use without significant customization.</p>

<h6>Section 1194.22 - Web-based Intranet and Internet Information and Applications</h6>

<p>ImageMagick does not have any web-based features, so this section does not apply.</p>

<h6>Section 1194.23 - Telecommunications Products</h6>

<p>ImageMagick does not include any telecommunications features, so this section does not apply.</p>

<h6>Section 1194.24 - Video and Multimedia Products</h6>

<p>ImageMagick does not include any video or multimedia features, so this section does not apply.</p>

<p>Section 1194.25 - Self-Contained, Closed Products</p>

<p>ImageMagick is an open-source command-line utility and does not meet the requirements of this section.</p>

<h6>Section 1194.26 - Desktop and Portable Computers</h6>

<p>ImageMagick is a command-line utility and does not include a graphical user interface (GUI) that could be used with assistive technologies. This section does not apply.</p>

<h6>Section 1194.31 - Functional Performance Criteria</h6>

<p>ImageMagick does not include any functional performance criteria.</p>

<h6>Section 1194.41 - Information, Documentation, and Support</h6>

<p>The ImageMagick project provides online documentation in HTML format, which is accessible using screen readers and other assistive technologies. The documentation includes installation instructions, command-line reference, and other resources. However, some of the documentation may be technical and difficult for non-technical users to understand. The project does not offer any support services for users with disabilities.</p>

<h5>Conclusion</h5>

<p>ImageMagick is an open-source command-line utility that provides basic accessibility features for users who rely on assistive technologies. However, the software is not optimized for use with assistive technologies and may require significant customization to be accessible to all users. The project provides accessible online documentation, but may not be suitable for non-technical users.</p>


</div>
