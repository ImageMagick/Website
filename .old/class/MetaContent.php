<?php
  class MetaContent
  {
    public $application_name;
    public $application_url;
    public $company_name;
    public $description;
    public $email;
    public $generator;
    public $keywords2;
    public $sitename;
    public $slogan;

    function metadata($title)
    {
      /*
        Formulate the description for each page.
      */
      $description=$this->description;
      if (!empty($title))
        $description="$title – $this->description";
      $meta_words=ucfirst($title);
      $meta="<meta charset=\"utf-8\">\n";
      $meta.="  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
      if (empty($title))
        $meta.="  <title>$this->sitename – $this->slogan</title>\n";
      else
        $meta.="  <title>$this->sitename – $title</title>\n";
      $meta.="  <meta name=\"keywords\" content=\"$meta_words, $this->keywords2\">\n";
      $meta.="  <meta name=\"description\" content=\"$this->description\">\n";
      $meta.="  <meta name=\"application-name\" content=\"$this->application_name\">\n";
      $meta.="  <meta name=\"application-url\" content=\"$this->application_url\">\n";
      $meta.="  <meta name=\"copyright\" content=\"Copyright (c) 1999 $this->company_name\">\n";
      return($meta);
    }
  }
?>
