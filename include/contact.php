<div class="magick-header">
<?php
  require_once($_SESSION['AbsolutePath'] . '/../function/exception.php');

  $action=isset($_POST['action']) ? $_POST['action'] : '';
  $authenticate=isset($_POST['authenticate']) ? htmlspecialchars($_POST['authenticate']) : '';
  $name=isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
  $address=isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
  $issue=isset($_POST['issue']) ? $_POST['issue'] : '';
  $message=isset($_POST['message']) ? $_POST['message'] : '';
  $status='';
  switch ($action)
  {
    case 'Send':
    {
      if (!$message)
        $status="Message not sent: message is required.";
      if (strlen($message) < 32)
        $status="Message not sent: message does not have sufficient content.";
      if ((preg_match("/\blink\b/i",$message) != 0) &&
          (preg_match("/\bexchange\b/i",$message) != 0))
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\bad\b/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\bads\b/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\badvertis/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\bpromot/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\btraffic/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (preg_match("/\bmonetiz/i",$message) != 0)
        $status="Message not sent: solicitions not permitted.";
      if (!$address)
        $status="Message not sent: e-mail address is required.";
      if (strpos($address,'@') == false)
        $status="Message not sent: malformed e-mail address.";
      if (!$name)
        $status="Message not sent: name is required.";
      if (strlen($issue) == 0)
        $status="Message not sent: issue is required.";
      if (!$authenticate)
        $status="Message not sent: authentication code is required.";
      if (strncmp($authenticate,sha1($_SERVER['REMOTE_ADDR']),6) != 0)
        $status="Message not sent: authentication code does not match.";
      if ($status)
        break;
      $mail=new Mail;
      $mail->authenticate=$authenticate;
      $mail->to=DevelopmentTeam;
      $mail->from=$address;
      $mail->name=$name;
      $mail->subject=$issue;
      $mail->message=$message;
      $mail->Send();
?>
      <p>Your message was sent.  Expect a reply within 24-48 hours if your message is on topic and is a sponsorship, license, security, or paid support issue.  For all other issues, post your message to the <a href="https://imagemagick.org/discourse-server">discourse server</a>.</p>
  <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />

<?php
      return;
    }
    default:
      break;
  }
?>
  <div>
  <p class="lead magick-description">Post here for any of the issues listed below.  You can expect a response from our team if your issue is a sponsorship, <a href="https://imagemagick.org/script/license.php">license</a>, security, or paid support issue.  If you require a response for any other issue, post to the ImageMagick public <a href="https://imagemagick.org/discourse-server">forums</a>.  You can also post bug reports to the <a href="https://github.com/ImageMagick/ImageMagick/issues">issues</a> forum.  Note, we do <u>not</u> offer sponsored links <u>nor do we respond to solicitations</u>.</p>
  <fieldset>
  <h2>Contact the Wizards</h2>
	<p>Enter this code, <code>
<?php
  print substr(sha1($_SERVER['REMOTE_ADDR']),0,6);
?>
</code>, in the Authenticate field and fill in the remaining fields.  Press Send to forward your message to the ImageMagick wizards:</p>
  <br/>
  <form method="post" name="post" id="post" action="<?php echo $_SESSION['RelativePath']?>/../script/contact.php" enctype="application/x-www-form-urlencoded">
  <div class="table-responsive" style="font-size:80% !important;">
  <table class="table table-sm table-striped">
    <tr>
      <td><label id="authenticate" title="Your authentication code">Authenticate</label></td>
<?php
    print "        <td valign=\"top\"><input type=\"text\" name=\"authenticate\" size=\"32\" maxlength=\"255\" value=\"$authenticate\" /></td>\n";
?>
    </tr>

    <tr>
      <td><label id="e-mail" title="Without a valid e-mail address, we cannot respond to your message">E-mail</label></td>
<?php
    print "        <td valign=\"top\"><input type=\"text\" name=\"address\" size=\"32\" maxlength=\"255\" value=\"$address\" /></td>\n";
?>
    </tr>

    <tr>
      <td><label id="name" title="Your name or nickname">Name</label></td>
<?php
    print "        <td valign=\"top\"><input type=\"text\" name=\"name\" size=\"32\" maxlength=\"255\" value=\"$name\" /></td>\n";
?>
    </tr>

    <tr>
      <td><label id="issues" title="We only accept these issues">Issue</label></td>
<?php
    print "    <td valign=\"top\"><select name=\"issue\" >
<option value=\"\">Choose an appropriate issue</option>
<option value=\"Bug Report\">Bug Report</option>
<option value=\"ImageMagick Mirror\">ImageMagick Mirror</option>
<option value=\"Source or Documentation Patch\">Source or Documentation Patch</option>
<option value=\"Website Suggestion\">Website Suggestion</option>
<option value=\"Security Issue\">Security Issue</option>
<option value=\"License or Export Classification Issue\">License or Export Classification Issue</option>
<option value=\"ImageMagick Support ($$)\">ImageMagick Support ($$)</option>
<option value=\"ImageMagick Donation\">ImageMagick Donation</option>
</select></td>\n";
?>
    </tr>

    <tr>
      <td><label id="message" title="Your message must directly relate to the issue, otherwise do not expect a response">Message</label></td>
      <td><textarea style="font-size: 90%;" rows="24" cols="80" name="message"><?php print $message ?></textarea></td>
    </tr>

    <tr>
      <td colspan="2" style="text-align: center"><br />
        <input type="submit" name="action" value="Send" />
        <input type="reset" name="Reset" value="Clear" />
      </td>
    </tr>
  </table>
  </div>
  </form>
  </fieldset>
  </div>
  <br />
<?php
  if ($status)
    ThrowException($status);
?>
</div>
