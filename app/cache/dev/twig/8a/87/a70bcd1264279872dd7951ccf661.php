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
 ";
        // line 6
        $this->env->loadTemplate("SiteAdminBundle:Slot:topmenulight.html.twig")->display($context);
        // line 7
        echo "                    <div class=\"container-fluid\">
                            <div class=\"span5\" id=\"content\">
                                ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "                            </div>
                    </div>
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "                                ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
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
        return array (  57 => 15,  53 => 10,  42 => 9,  38 => 7,  31 => 5,  28 => 4,  69 => 23,  60 => 16,  56 => 15,  50 => 9,  46 => 10,  44 => 11,  36 => 6,  33 => 4,  27 => 3,);
    }
}
