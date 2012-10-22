<?php

/* base.html */
class __TwigTemplate_8944b57466f08564caa53a1988261ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<!-- saved from url=(0049)file:///Users/ella/Desktop/What%20Jane%20Saw.html -->
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\">
\t
  

  <title>What Jane Saw</title>
  <link rel=\"StyleSheet\" href=\"index_files/bootstrap.css\" type=\"text/css\">
  <link rel=\"StyleSheet\" href=\"css/style.css\" type=\"text/css\">
  <style type=\"text/css\">
\t\t
\t\t\t</style>
  <script src=\"index_files/jquery.min.js\" type=\"text/javascript\">
</script>
  <script type=\"text/javascript\" src=\"index_files/script.js\">

</script>
</head>

<body id=\"home\">
  <div class=\"navbar container\" id=\"header\">
    <h1><a href=\"http://dev.laits.utexas.edu/whatjanesaw/index.html\">What Jane Saw</a></h1>
    
  </div>

  <div id=\"menu\">
    <div id=\"menu-content\" style=\"\">
      <div id=\"nav-map\" style=\"background-position: 0px 0px; \">
        <div class=\"rooms\" id=\"nav-rm1\">
          <a class=\"nav-map-link r1s1\" name=\"0.0\" href=\"\"></a>
\t  <a class=\"nav-map-link r1s2\" name=\"0.-154\" href=\"\"></a>
\t  <a class=\"nav-map-link r1s3\" name=\"0.-308\" href=\"\"></a>
\t  <a class=\"nav-map-link r1s4\" name=\"0.-462\" href=\"\"></a>
        </div>

        <div class=\"rooms\" id=\"nav-rm2\">
          <a class=\"nav-map-link r2s1\" name=\"-649.0\" href=\"\"></a>
\t  <a class=\"nav-map-link r2s2\" name=\"-649.-154\" href=\"\"></a>
\t  <a class=\"nav-map-link r2s3\" name=\"-649.-308\" href=\"\"></a>
\t  <a class=\"nav-map-link r2s4\" name=\"-649.-462\" href=\"\"></a>
        </div>

        <div class=\"rooms\" id=\"nav-rm3\">
          <a class=\"nav-map-link r3s1\" name=\"-1298.0\" href=\"\"></a>
\t  <a class=\"nav-map-link r3s2\" name=\"-1298.-154\" href=\"\"></a>
\t  <a class=\"nav-map-link r3s3\" name=\"-1298.-308\" href=\"\"></a>
\t  <a class=\"nav-map-link r3s4\" name=\"-1298.-462\" href=\"\"></a>
        </div>
      </div>
    </div>  
    <div id=\"menu-tab\">
      <div id=\"explore\">
        <div id=\"menu-links\">
          <a href=\"http://dev.laits.utexas.edu/whatjanesaw/catalogue.html\">Catalogue</a>
\t\t  <a class=\"tab-link\" href=\"\">Floorplan <i class=\"icon-chevron-down icon-white\"></i></a>
\t\t  <a href=\"http://dev.laits.utexas.edu/whatjanesaw/about.html\">About</a>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container\">
  
   \t";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
  </div><!-- #container -->

  <div id=\"footer-container\">
  <div id=\"footer\">
    <div class=\"left\">
      <h1><a href=\"http://dev.laits.utexas.edu/whatjanesaw/index.html\">What Jane Saw</a></h1><br>

      <span class=\"englishandname\"><h4 style=\"font-size: 20px; font-variant:small-caps;\"><a href=\"http://www.utexas.edu/cola/depts/english/\" target=\"_blank\">Department of English</a></h4> <h4>Professor Janine Barchas</h4></span>
    </div><!-- #left -->

    <div class=\"right\">
      <a href=\"http://www.utexas.edu/\" target=\"_blank\" class=\"ut-branding\"></a><br>
      <a href=\"http://www.utexas.edu/cola/\" target=\"_blank\" class=\"cola-branding\"></a><br>
      <a href=\"http://www.utexas.edu/cola/laits/\" target=\"_blank\" class=\"laits-branding\"></a>
    </div><!-- #right -->
  </div><!-- #footer -->
  </div><!-- #footer-container -->

</body></html>";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  108 => 64,  85 => 65,  83 => 64,  18 => 1,);
    }
}
