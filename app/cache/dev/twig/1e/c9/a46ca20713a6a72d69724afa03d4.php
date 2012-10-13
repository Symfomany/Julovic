<?php

/* SiteAdminBundle::layout.html.twig */
class __TwigTemplate_1ec9a46ca20713a6a72d69724afa03d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
        // line 7
        echo "                    ";
        $this->env->loadTemplate("SiteAdminBundle:Slot:topmenu.html.twig")->display($context);
        // line 8
        echo "                    <div class=\"container-fluid\">
                            ";
        // line 10
        echo "                            <div id=\"breadscrumb\">
                                ";
        // line 11
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
                            </div>
                            <div class=\"span3\" id=\"sidebar_context\">
                                ";
        // line 14
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:sidebar", array(), array());
        // line 15
        echo "                            </div>
                            <div class=\"span10\" id=\"content\">
                                        ";
        // line 17
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:flashdatas", array(), array());
        // line 18
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "                            </div>
                    </div>
                    <div id=\"footer\">
                            <p>Back-Office Copyright @Symfomany 2012-2013</p>
                    </div>
    ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "                        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/ajax.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
       ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  81 => 28,  78 => 27,  74 => 19,  71 => 18,  62 => 20,  59 => 18,  51 => 14,  39 => 8,  31 => 5,  28 => 4,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 59,  144 => 52,  133 => 46,  127 => 43,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  90 => 30,  87 => 31,  82 => 30,  68 => 23,  57 => 17,  53 => 15,  45 => 11,  42 => 10,  38 => 9,  36 => 7,  29 => 4,  26 => 3,);
    }
}
