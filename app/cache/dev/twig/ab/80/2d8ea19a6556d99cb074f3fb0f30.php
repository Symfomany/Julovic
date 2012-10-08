<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab802d8ea19a6556d99cb074f3fb0f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  30 => 4,  27 => 3,  342 => 137,  337 => 136,  334 => 135,  330 => 133,  324 => 130,  318 => 128,  312 => 125,  306 => 123,  300 => 120,  294 => 118,  288 => 115,  282 => 113,  279 => 112,  275 => 134,  273 => 112,  243 => 86,  234 => 78,  220 => 77,  216 => 75,  212 => 73,  201 => 70,  194 => 69,  190 => 68,  187 => 67,  185 => 66,  172 => 65,  162 => 64,  154 => 61,  147 => 60,  139 => 57,  132 => 56,  129 => 55,  112 => 54,  103 => 47,  92 => 45,  88 => 44,  75 => 34,  63 => 24,  55 => 22,  53 => 21,  38 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
