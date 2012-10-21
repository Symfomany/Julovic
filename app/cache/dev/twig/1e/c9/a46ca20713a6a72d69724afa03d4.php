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
        // line 67
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
        echo "                                    
                        ";
        // line 21
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Parametres:editOne", array(), array());
        // line 22
        echo "                                    
                                    <p id=\"print_btn\" class=\"right\"><i class=\"icon-print\"><a href=\"javascript:window.print()\"></i> Imprimer</a></p>
                                  ";
        // line 24
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "cookies"), "has", array(0 => "cookie_flash"), "method"))) {
            // line 25
            echo "                                          ";
            if ((array_key_exists("advices", $context) && (!twig_test_empty($this->getContext($context, "advices"))))) {
                echo " 
                                                            <div class=\"alert alert-info\">
                                                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                                     ";
                // line 28
                echo twig_escape_filter($this->env, twig_random($this->env, $this->getContext($context, "advices")), "html", null, true);
                echo "
                                                            </div>
                                    ";
            }
            // line 31
            echo "                                    ";
        }
        // line 32
        echo "                                          ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <a class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-info\">Info</span>
                                                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 38
        echo " 
                                       ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                                           <div class=\"alert alert-error\">
                                                <span class=\"label label-important\">Important</span>                                          
                                                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 44
        echo " 
                                       ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                                            <div class=\"alert alert-success\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-success\">Success</span>                                         
                                                ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 51
        echo " 
                                       ";
        // line 52
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                                           <div class=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-warning\">Warning</span>                                        
                                                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 58
        echo " 
                                       ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "inverse"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-inverse\">Inverse</span>          
                                                       ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "inverse"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 65
        echo " 
                        ";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 79
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
        return array (  198 => 79,  194 => 78,  189 => 77,  186 => 76,  181 => 65,  175 => 63,  168 => 59,  165 => 58,  159 => 56,  152 => 52,  149 => 51,  143 => 49,  136 => 45,  133 => 44,  127 => 42,  121 => 39,  112 => 36,  104 => 32,  101 => 31,  95 => 28,  88 => 25,  86 => 24,  80 => 21,  77 => 20,  74 => 19,  63 => 67,  60 => 19,  58 => 18,  54 => 16,  52 => 15,  46 => 12,  43 => 11,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  201 => 80,  193 => 75,  178 => 67,  167 => 63,  163 => 62,  158 => 59,  146 => 52,  135 => 46,  129 => 43,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 31,  82 => 22,  67 => 22,  57 => 19,  53 => 18,  45 => 13,  42 => 12,  38 => 9,  36 => 8,  29 => 4,  26 => 3,);
    }
}
