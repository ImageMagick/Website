<?php
  class MetaContent
  {
    public $company_name;
    public $creator;
    public $description;
    public $email;
    public $generator;
    public $keywords2;
    public $image;
    public $licence;
    public $name;
    public $sameAs;
    public $sitename;
    public $slogan;
    public $stylesheet;
    public $url;
    public $version;

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
      $meta.="  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\">\n\n";
      $meta.="  <!-- Title and Description -->\n";
      if (empty($title))
        $meta.="  <title>$this->sitename | $this->slogan</title>\n";
      else
        $meta.="  <title>$this->sitename | $title</title>\n";
      $meta.="  <meta name=\"description\" content=\"$this->description\">\n\n";
      $meta.="  <!-- Canonical URL -->\n";
      $meta.="  <link rel=\"canonical\" href=\"$this->url\">\n\n";
      $meta.="  <!-- Robots -->\n";
      $meta.="  <meta name=\"robots\" content=\"index, follow\">\n\n";
      $meta.="  <!-- Theme Color -->\n";
      $meta.="  <meta name=\"theme-color\" content=\"#000000\">\n\n";
      $meta.="  <!-- Verification Tags -->\n";
      $meta.="  <meta name=\"google-site-verification\" content=\"_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4\">\n\n";
      $meta.="  <!-- Favicon and Apple Icon -->\n";
      $meta.="  <link rel=\"shortcut icon\" href=\"/image/wand.png\" type=\"image/png\">\n";
      $meta.="  <link rel=\"apple-touch-icon\" href=\"/image/wand.png\" type=\"image/png\">\n\n";
      $meta.="  <!-- Preconnect for External Resources -->\n";
      $meta.="  <link rel=\"preconnect\" href=\"https://cse.google.com\">\n\n";
      $meta.="  <!-- Stylesheets -->\n";
      $meta.="  <link rel=\"preload\" href=\"$this->stylesheet\" as=\"style\" crossorigin=\"anonymous\">\n";
      $meta.="  <link rel=\"stylesheet\" href=\"$this->stylesheet\">\n\n";
      $meta.="  <!-- Accessibility Enhancement -->\n";
      $meta.="  <style>\n";
      $meta.="    html {\n";
      $meta.="      .navbar-brand {\n";
      $meta.="        color: #007bff;\n";
      $meta.="      }\n";
      $meta.="      .navbar-brand:hover {\n";
      $meta.="        color: #0056b3;\n";
      $meta.="      }\n";
      $meta.="      scroll-padding-top: 70px;\n";
      $meta.="    }\n";
      $meta.="  </style>\n\n";
      $meta.="  <!-- Open Graph Meta Tags -->\n";
      $meta.="  <meta property=\"og:title\" content=\"$this->sitename | $title\">\n";
      $meta.="  <meta property=\"og:description\" content=\"$this->description\">\n";
      $meta.="  <meta property=\"og:image\" content=\"$this->image\">\n";
      $meta.="  <meta property=\"og:logo\" content=\"$this->image\">\n";
      $meta.="  <meta property=\"og:url\" content=\"$this->url\">\n";
      $meta.="  <meta property=\"og:type\" content=\"website\">\n";
      $meta.="  <meta property=\"og:site_name\" content=\"$this->name\">\n";
      $meta.="  <meta property=\"og:locale\" content=\"en_us\">\n\n";
      $meta.="  <!-- Twitter Card Meta Tags -->\n";
      $meta.="  <meta name=\"twitter:card\" content=\"summary_large_image\">\n";
      $site=strtolower($this->name);
      $meta.="  <meta name=\"twitter:site\" content=\"@$site\">\n";
      $meta.="  <meta name=\"twitter:creator\" content=\"@$site\">\n";
      $meta.="  <meta name=\"twitter:title\" content=\"$this->sitename | $title\">\n";
      $meta.="  <meta name=\"twitter:description\" content=\"$this->description\">\n";
      $meta.="  <meta name=\"twitter:image\" content=\"$this->image\">\n";
      $meta.="  <meta name=\"twitter:image:alt\" content=\"$this->name logo and tag line\">\n\n";
      $meta.="  <!-- JSON-LD Structured Data -->\n";
      $meta.="  <script type=\"application/ld+json\">\n";
      $meta.="  {\n";
      $meta.="    \"@context\": \"https://schema.org\",\n";
      $meta.="    \"@type\": \"SoftwareApplication\",\n";
      $meta.="    \"name\": \"$this->name\",\n";
      $meta.="    \"url\": \"$this->url\",\n";
      $meta.="    \"image\": \"$this->image\",\n";
      $meta.="    \"description\": \"$this->description\",\n";
      $meta.="    \"applicationCategory\": \"Multimedia\",\n";
      $meta.="    \"operatingSystem\": \"Windows, macOS, Linux, Unix\",\n";
      $meta.="    \"softwareVersion\": \"$this->version\",\n";
      $meta.="    \"license\": \"$this->license\",\n";
      $meta.="    \"creator\": {\n";
      $meta.="      \"@type\": \"Organization\",\n";
      $meta.="      \"name\": \"$this->creator\",\n";
      $meta.="      \"url\": \"https://imagemagick.org\"\n";
      $meta.="    },\n";
			$meta.="    \"keywords\": [\n";
      $phrases = explode(',', $meta_words . ", " . $this->keywords2);
      $quoted = array_map(function($phrase) {
          return '"' . trim($phrase) . '"';
      }, $phrases);
      $keywords = implode(",\n      ", $quoted);
      $meta.="      $keywords\n";
      $meta.="    ],\n";
			$meta.="    \"sameAs\": [\n";
      $phrases = explode(',', $this->sameAs);
      $quoted = array_map(function($phrase) {
          return '"' . trim($phrase) . '"';
      }, $phrases);
      $sameAs = implode(",\n      ", $quoted);
      $meta.="      $sameAs\n";
      $meta.="    ],\n";
      $meta.="    \"offers\": {\n";
      $meta.="      \"@type\": \"Offer\",\n";
      $meta.="      \"price\": \"0.00\",\n";
      $meta.="      \"priceCurrency\": \"USD\"\n";
      $meta.="    }\n";
      $meta.="  }\n";
      $meta.="  </script>\n";
      return($meta);
    }
  }
?>
