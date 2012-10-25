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
        echo "                    ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Notifications:index", array(), array());
        // line 6
        echo "            ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

            ";
        // line 9
        echo "                    ";
        $this->env->loadTemplate("SiteAdminBundle:Slot:topmenu.html.twig")->display($context);
        // line 10
        echo "                    <div class=\"container-fluid\">
                            ";
        // line 12
        echo "                            <div id=\"breadscrumb\">
                                ";
        // line 13
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
                            </div>
                            <div class=\"span3\" id=\"sidebar_context\">
                                ";
        // line 16
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:sidebar", array(), array());
        // line 17
        echo "                            </div>
                            <div class=\"span10\" id=\"content\">
                                        ";
        // line 19
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:flashdatas", array(), array());
        // line 20
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "                            </div>
                    </div>
                    <div id=\"footer\">
                            <p>Julovic Copyright @Symfomany 2012-2013</p>
                            <p>Project hosted by Github here <a href=\"https://github.com/Symfomany/Julovic\">Julovic</a></p>
                    </div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "                        ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Parametres:editOne", array(), array());
        // line 22
        echo "                            <p id=\"print_btn\" class=\"right\"><i class=\"icon-print\"><a href=\"javascript:window.print()\"></i> Imprimer</a></p>
                            ";
        // line 23
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "cookies"), "has", array(0 => "cookie_flash"), "method"))) {
            // line 24
            echo "                                    ";
            if ((array_key_exists("advices", $context) && (!twig_test_empty($this->getContext($context, "advices"))))) {
                echo " 
                                                    <div class=\"alert alert-info\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                                ";
                // line 27
                echo twig_escape_filter($this->env, twig_random($this->env, $this->getContext($context, "advices")), "html", null, true);
                echo "
                                                    </div>
                                        ";
            }
            // line 30
            echo "                            ";
        }
        // line 31
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                                        <div class=\"alert alert-info\">
                                        <a class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-info\">Info</span>
                                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 37
        echo " 
                                ";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                                    <div class=\"alert alert-error\">
                                        <span class=\"label label-important\">Important</span>                                          
                                        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 43
        echo " 
                                ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                                    <div class=\"alert alert-success\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-success\">Succès</span>                                         
                                        ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 50
        echo " 
                                ";
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                                    <div class=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-warning\">Warning</span>                                        
                                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 57
        echo " 
                                ";
        // line 58
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "inverse"), "method")) {
            echo " 
                                        <div class=\"alert alert-info\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-inverse\">Attention</span>          
                                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "inverse"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 64
        echo " 
                        ";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/ajax.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 77
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
        return array (  197 => 77,  193 => 76,  188 => 75,  185 => 74,  180 => 64,  174 => 62,  167 => 58,  164 => 57,  158 => 55,  151 => 51,  148 => 50,  142 => 48,  135 => 44,  132 => 43,  126 => 41,  120 => 38,  117 => 37,  111 => 35,  103 => 31,  100 => 30,  94 => 27,  87 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  66 => 66,  63 => 20,  61 => 19,  57 => 17,  55 => 16,  49 => 13,  46 => 12,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 4,);
    }
}
