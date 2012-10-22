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
        echo "\" style=\"display: block; position:relative; top:";
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
        echo ".html";
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
        return array (  43 => 3,  38 => 2,  17 => 1,);
    }
}
