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
      $headers ='MIME-Version: 1.0' . "\r\n";
      $headers.='Content-type: text/plain; charset=utf-8' . "\r\n";
      $headers.='Content-Transfer-Encoding: base64' . "\r\n";
      $headers.='Date: ' . date('r (T)') . "\r\n";
      $headers.='Origin: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
      $headers.='From: ' . $this->name . ' <' . $this->from .">\r\n";
      $headers.='Reply-To: ' . $this->name . ' <' . $this->from .">\r\n";
      $headers.='X-Mailer: PHP ' . phpversion();
      mail($this->to,$this->subject,base64_encode($message),$headers,
        '-f' . $this->to);
    }
  }
?>
