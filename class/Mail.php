<?php
  class Mail
  {
    var $authenticate;
    var $from;
    var $message;
    var $name;
    var $subject;
    var $to;
  
    function Send()
    {
      if (strncmp($this->authenticate,sha1($_SERVER['REMOTE_ADDR']),6) != 0)
        return;
      $message=stripslashes($this->message);
      $headers='From: ' . $this->name . ' <' . $this->from .">\r\n";
      $headers.='Reply-To: ' . $this->name . ' <' . $this->from .">\r\n";
      $headers.='X-Mailer: PHP/' . phpversion() . "\r\n";
      $headers.='Origin: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
      mail($this->to,$this->subject,$message,$headers,'-f' . $this->to);
    }
  }
?>
