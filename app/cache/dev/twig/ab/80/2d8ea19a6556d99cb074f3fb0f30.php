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
        return array (  44 => 8,  41 => 7,  30 => 4,  27 => 3,  184 => 74,  176 => 69,  158 => 58,  154 => 57,  149 => 54,  137 => 48,  131 => 45,  122 => 41,  116 => 40,  112 => 39,  109 => 38,  102 => 37,  95 => 36,  92 => 35,  90 => 34,  86 => 33,  80 => 32,  77 => 31,  73 => 30,  57 => 21,  53 => 20,  45 => 15,  42 => 14,  38 => 11,  36 => 10,  29 => 6,  26 => 5,);
    }
}
