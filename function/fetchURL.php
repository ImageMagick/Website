<?php
  function fetchURL($url)
  {
    $url_hash=parse_url($url);
    $host=isset($url_hash['host']) ? $url_hash['host'] : 'localhost';
    $port=isset($url_hash['port']) ? $url_hash['port'] : 80;
    $path=isset($url_hash['path']) ? $url_hash['path'] : '/';
    $query=isset($url_hash['query']) ? $url_hash['query'] : '';
    if (!empty($query))
      $path.="?" . $query;
    $command="GET $path HTTP/1.0\r\nHost: $host\r\n\r\n";
    $socket=fsockopen($host,$port,$errno,$errstr,30);
    fwrite($socket,$command);
    for ($content=""; ($content != "\r\n") && !feof($socket); )
    {
      $content=fgets($socket,2048);
    }
    for ($content=""; !feof($socket); )
    {
      $content.=fgets($socket,2048);
    }
    fclose($socket);
    return($content);
  }
?>
