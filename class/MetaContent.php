<?php
  class MetaContent
  {
    function metadata($title)
    {
      /*
        Formulate the description for each page.
      */
      $description=$this->description;
      if (!empty($title))
        $description="$title – $this->description";
      $keywords=strtolower($title);
      $keywords=str_replace('  ',' ',$keywords);
      $keywords=str_replace(',','',$keywords);
      $keywords=str_replace('and ','',$keywords);
      $meta_words=str_replace(' ',', ',$keywords);
      $meta="<meta charset=\"utf-8\" >\n";
      $meta.="  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" >\n";
      if (empty($title))
        $meta.="  <title>$this->sitename – $this->slogan</title>\n";
      else
        $meta.="  <title>$this->sitename – $title</title>\n";
      $meta.="  <meta name=\"application-name\" content=\"$this->application_name\">\n";
      $meta.="  <meta name=\"description\" content=\"$this->description\">\n";
      $meta.="  <meta name=\"application-url\" content=\"$this->application_url\">\n";
      $meta.="  <meta name=\"generator\" content=\"$this->generator\">\n";
      $meta.="  <meta name=\"keywords\" content=\"$meta_words, $this->keywords2\">\n";
      $meta.="  <meta name=\"rating\" content=\"GENERAL\">\n";
      $meta.="  <meta name=\"robots\" content=\"INDEX, FOLLOW\">\n";
      $meta.="  <meta name=\"generator\" content=\"$this->company_name\">\n";
      $meta.="  <meta name=\"author\" content=\"$this->company_name\">\n";
      $meta.="  <meta name=\"revisit-after\" content=\"2 DAYS\">\n";
      $meta.="  <meta name=\"resource-type\" content=\"document\">\n";
      $meta.="  <meta name=\"copyright\" content=\"Copyright (c) 1999-2020 $this->company_name\">\n";
      $meta.="  <meta name=\"distribution\" content=\"Global\">\n";
      $meta.="  <meta name=\"magick-serial\" content=\"P131-S030410-R485315270133-P82224-A6668-G1245-1\">\n";
      return($meta);
    }
  }
?>
