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
        // line 8
        echo "                    ";
        $this->env->loadTemplate("SiteAdminBundle:Slot:topmenu.html.twig")->display($context);
        // line 9
        echo "                    <div class=\"container-fluid\">
                            ";
        // line 11
        echo "                            <div id=\"breadscrumb\">
                                ";
        // line 12
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
                            </div>
                            <div class=\"span3\" id=\"sidebar_context\">
                                ";
        // line 15
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:sidebar", array(), array());
        // line 16
        echo "                            </div>
                            <div class=\"span10\" id=\"content\">
                                        ";
        // line 18
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:flashdatas", array(), array());
        // line 19
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "                            </div>
                    </div>
                    <div id=\"footer\">
                            <p>Julovic Copyright @Symfomany 2012-2013</p>
                            <p>Project hosted by Github here <a href=\"https://github.com/Symfomany/Julovic\">Julovic</a>
</p>
                    </div>
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "                                    <p id=\"print_btn\" class=\"right\"><i class=\"icon-print\"><a href=\"javascript:window.print()\"></i> Imprimer</a></p>
                                  ";
        // line 21
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "cookies"), "has", array(0 => "cookie_flash"), "method"))) {
            // line 22
            echo "                                          ";
            if ((array_key_exists("advices", $context) && (!twig_test_empty($this->getContext($context, "advices"))))) {
                echo " 
                                                            <div class=\"alert alert-info\">
                                                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                                     ";
                // line 25
                echo twig_escape_filter($this->env, twig_random($this->env, $this->getContext($context, "advices")), "html", null, true);
                echo "
                                                            </div>
                                    ";
            }
            // line 28
            echo "                                    ";
        }
        // line 29
        echo "                                          ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <a class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-info\">Info</span>
                                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 35
        echo " 
                                       ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                                           <div class=\"alert alert-error\">
                                                <span class=\"label label-important\">Important</span>                                          
                                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 41
        echo " 
                                       ";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                                            <div class=\"alert alert-success\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-success\">Success</span>                                         
                                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 48
        echo " 
                                       ";
        // line 49
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                                           <div class=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-warning\">Warning</span>                                        
                                                ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 55
        echo " 
                                       ";
        // line 56
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "inverse"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-inverse\">Inverse</span>          
                                                       ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "inverse"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 62
        echo " 
                        ";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 76
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
        return array (  192 => 76,  188 => 75,  183 => 74,  180 => 73,  175 => 62,  169 => 60,  162 => 56,  159 => 55,  153 => 53,  146 => 49,  143 => 48,  137 => 46,  130 => 42,  127 => 41,  121 => 39,  115 => 36,  112 => 35,  106 => 33,  98 => 29,  95 => 28,  89 => 25,  82 => 22,  80 => 21,  77 => 20,  74 => 19,  63 => 64,  60 => 19,  58 => 18,  54 => 16,  52 => 15,  46 => 12,  43 => 11,  40 => 9,  37 => 8,  31 => 5,  28 => 4,);
    }
}
