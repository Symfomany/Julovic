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
        // line 6
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:topmenu", array(), array());
        // line 7
        echo "                    <div class=\"container-fluid\">
                            ";
        // line 9
        echo "                                ";
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
                            <div class=\"span3\" id=\"sidebar_context\">
                                ";
        // line 11
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:sidebar", array(), array());
        // line 12
        echo "                            </div>
                            <div class=\"span9\" id=\"content\">
                                        ";
        // line 14
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:flashdatas", array(), array());
        // line 15
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "                            </div>
                    </div>
    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "                        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
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
        return array (  79 => 23,  74 => 22,  71 => 21,  67 => 16,  64 => 15,  58 => 17,  55 => 15,  53 => 14,  49 => 12,  47 => 11,  41 => 9,  38 => 7,  36 => 6,  31 => 5,  28 => 4,);
    }
}
