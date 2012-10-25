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
                            </div>
                            <div class=\"span10\" id=\"content\">
                                        ";
        // line 18
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:flashdatas", array(), array());
        // line 19
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "                            </div>
                    </div>
                    <div id=\"footer\">
                            <p>Julovic Copyright @Symfomany 2012-2013</p>
                            <p>Project hosted by Github here <a href=\"https://github.com/Symfomany/Julovic\">Julovic</a></p>
                    </div>
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "                        ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Parametres:editOne", array(), array());
        // line 21
        echo "                            <p id=\"print_btn\" class=\"right\"><i class=\"icon-print\"><a href=\"javascript:window.print()\"></i> Imprimer</a></p>
                            ";
        // line 22
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "cookies"), "has", array(0 => "cookie_flash"), "method"))) {
            // line 23
            echo "                                    ";
            if ((array_key_exists("advices", $context) && (!twig_test_empty($this->getContext($context, "advices"))))) {
                echo " 
                                                    <div class=\"alert alert-info\">
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                                ";
                // line 26
                echo twig_escape_filter($this->env, twig_random($this->env, $this->getContext($context, "advices")), "html", null, true);
                echo "
                                                    </div>
                                        ";
            }
            // line 29
            echo "                            ";
        }
        // line 30
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                                        <div class=\"alert alert-info\">
                                        <a class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-info\">Info</span>
                                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 36
        echo " 
                                ";
        // line 37
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                                    <div class=\"alert alert-error\">
                                        <span class=\"label label-important\">Important</span>                                          
                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 42
        echo " 
                                ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                                    <div class=\"alert alert-success\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-success\">Succès</span>                                         
                                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 49
        echo " 
                                ";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                                    <div class=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-warning\">Warning</span>                                        
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 56
        echo " 
                                ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "inverse"), "method")) {
            echo " 
                                        <div class=\"alert alert-info\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                        <span class=\"label label-inverse\">Attention</span>          
                                                ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "inverse"), "method"), "html", null, true);
            echo " 
                                    </div> 
                                ";
        }
        // line 63
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/ajax.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 76
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
        return array (  189 => 75,  184 => 74,  181 => 73,  176 => 63,  170 => 61,  160 => 56,  154 => 54,  147 => 50,  144 => 49,  138 => 47,  131 => 43,  128 => 42,  116 => 37,  113 => 36,  107 => 34,  99 => 30,  96 => 29,  90 => 26,  83 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  62 => 65,  59 => 19,  49 => 13,  46 => 12,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 4,  201 => 80,  193 => 76,  178 => 67,  167 => 63,  163 => 57,  158 => 59,  146 => 52,  135 => 46,  129 => 43,  122 => 40,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 31,  82 => 30,  67 => 22,  57 => 18,  53 => 18,  45 => 13,  42 => 12,  38 => 9,  36 => 8,  29 => 4,  26 => 3,);
    }
}
