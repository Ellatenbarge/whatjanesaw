<?php

/* roomview.html */
class __TwigTemplate_59a5b11851abdac4cf63a21bd444d90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["pageTitle"])) { $_pageTitle_ = $context["pageTitle"]; } else { $_pageTitle_ = null; }
        echo twig_escape_filter($this->env, $_pageTitle_, "html", null, true);
        echo " ";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>";
        if (isset($context["pageTitle"])) { $_pageTitle_ = $context["pageTitle"]; } else { $_pageTitle_ = null; }
        echo twig_escape_filter($this->env, $_pageTitle_, "html", null, true);
        echo "</h1>
    <div id=\"main\" style=\"position: relative; background:url(img/roombg.jpeg) top center no-repeat;width: 960px;height:800px;margin-top: 116px;\">

        fuckin a it actually works
    
      \t";
        // line 16
        if (isset($context["docs"])) { $_docs_ = $context["docs"]; } else { $_docs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_docs_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 17
            echo "      \t
      \t";
            // line 18
            $this->env->loadTemplate("painting-link.html")->display($context);
            // line 19
            echo "
      \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "roomview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  86 => 19,  84 => 18,  81 => 17,  63 => 16,  53 => 11,  50 => 10,  40 => 5,  37 => 4,  28 => 3,);
    }
}
