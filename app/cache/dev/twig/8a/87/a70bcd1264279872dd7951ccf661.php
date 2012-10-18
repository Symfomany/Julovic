<?php

/* SiteAdminBundle::layoutoff.html.twig */
class __TwigTemplate_8a87a70bcd1264279872dd7951ccf661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_light.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_light.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "            ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                    <div class=\"container-fluid\">
                            <div class=\"span5\" id=\"content\">
                                ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "                            </div>
                    </div>
    ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "                                ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
       ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle::layoutoff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  49 => 9,  46 => 8,  40 => 10,  38 => 8,  31 => 5,  28 => 4,  67 => 21,  60 => 17,  57 => 16,  51 => 13,  47 => 11,  45 => 10,  36 => 5,  33 => 4,  27 => 3,);
    }
}
