<?php
  function ThrowException($message)
  {
    print "  <div id=\"notice\">\n";
    print "    <h4><img src=\"" . $_SESSION['RelativePath'] .
      "/../image/icon-notice.gif\" width=\"30\" height=\"24\" border=\"0\" " .
      "alt=\"\" align=\"top\">$message</h4>\n";
    print "  </div>\n";
  }
?>
