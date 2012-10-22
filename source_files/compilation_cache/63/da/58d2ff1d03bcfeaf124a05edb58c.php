<?php

/* painting-link.html */
class __TwigTemplate_63da58d2ff1d03bcfeaf124a05edb58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a class=\"painting-link\" id=\"";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "id"), "html", null, true);
        echo "\" style=\"display: block; position:absolute; top:";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "x"), "html", null, true);
        echo "; left:";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "y"), "html", null, true);
        echo "; width:";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "width"), "html", null, true);
        echo "; height:";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "height"), "html", null, true);
        echo "; background-image:url(img/";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "filename"), "html", null, true);
        echo ");\" href=\"\"></a>
";
        // line 2
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "id"), "html", null, true);
        echo "<br/>
rooms/";
        // line 3
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "id"), "html", null, true);
        echo ".html
";
        // line 4
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "description"), "html", null, true);
        echo "
<div id=\"lb-content\" style=\"display:none;\">
\t<div id=\"painting-container\">
\t\t<img id=\"painting\" src=\"https://dase.laits.utexas.edu/media/what_jane_saw/small/100286565_640.jpg\">
\t\t<p>George III (1738-1820)<br>
\t\t\tRoyal Academy of Arts, London<br>
\t\t\tPainted 1779</p>
\t</div>
\t<div id=\"painting-info\">
\t\t<p>By 1813, although George III remained Britain's official King, the country was being run as a \"regency\" by his eldest son, the Prince of Wales (later George IV). The Regency, established in 1810, was deemed necessary because George III suffered from recurring bouts of mental illness, which towards the end of his life had become permanent. The illness baffled medical practitioners at the time but may, it has been suggested, have been caused by porphyria (a blood disease).</p>
\t\t<p>Historical opinions of George III's life and reign vary, depending upon the prejudices and sources of biographers. Regardless, there is no denying that his long reign was marked by many military conflicts and important shifts in the British empire: among these were the Seven Years' War with France; changes in Indian rule; the loss of the American colonies in the American War of Independence; and two decades of war with Napoleonic France which would not conclude until 1815.</p>
\t\t<p>It may be significant that this picture depicts the King as still a vibrant leader, before he succumbed to disease.</p>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "painting-link.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 3,  38 => 2,  17 => 1,);
    }
}
