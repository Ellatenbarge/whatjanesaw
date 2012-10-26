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
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "filenamethumb"), "html", null, true);
        echo ");\"  data-toggle=\"modal\" href=\"#myModal\"></a>
         
<!-- sample modal content -->
<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div id=\"lb-content\" style=\"color: #000;\">
\t\t\t<div id=\"painting-container\">
\t\t\t\t<img id=\"painting\" src=\"";
        // line 7
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "filename"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div id=\"painting-info\">
\t\t\t\t<p id=\"title\">
\t\t\t\t";
        // line 11
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "title"), "html", null, true);
        echo "<br/>
\t\t\t\t";
        // line 12
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "currentlocation"), "html", null, true);
        echo "<br/>
\t\t\t\t";
        // line 13
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "date"), "html", null, true);
        echo "
\t\t\t\t</p>\t
\t\t\t\t<p>";
        // line 15
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "p1"), "html", null, true);
        echo "</p>
\t\t\t\t<p>";
        // line 16
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "p2"), "html", null, true);
        echo "</p>
\t\t\t\t<p>";
        // line 17
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "p3"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t</div>
</div>


";
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
        return array (  77 => 17,  72 => 16,  67 => 15,  61 => 13,  56 => 12,  51 => 11,  43 => 7,  17 => 1,);
    }
}
