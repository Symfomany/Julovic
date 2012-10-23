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
        // line 68
        echo "                            </div>
                    </div>
                    <div id=\"footer\">
                            <p>Julovic Copyright @Symfomany 2012-2013</p>
                            <p>Project hosted by Github here <a href=\"https://github.com/Symfomany/Julovic\">Julovic</a>
</p>
                    </div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "                                    
                        ";
        // line 22
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Parametres:editOne", array(), array());
        // line 23
        echo "                                 
                                    <p id=\"print_btn\" class=\"right\"><i class=\"icon-print\"><a href=\"javascript:window.print()\"></i> Imprimer</a></p>
                                  ";
        // line 25
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "cookies"), "has", array(0 => "cookie_flash"), "method"))) {
            // line 26
            echo "                                            ";
            if ((array_key_exists("advices", $context) && (!twig_test_empty($this->getContext($context, "advices"))))) {
                echo " 
                                                            <div class=\"alert alert-info\">
                                                                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                                     ";
                // line 29
                echo twig_escape_filter($this->env, twig_random($this->env, $this->getContext($context, "advices")), "html", null, true);
                echo "
                                                            </div>
                                             ";
            }
            // line 32
            echo "                                    ";
        }
        // line 33
        echo "                                          ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <a class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-info\">Info</span>
                                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 39
        echo " 
                                       ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                                           <div class=\"alert alert-error\">
                                                <span class=\"label label-important\">Important</span>                                          
                                                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 45
        echo " 
                                       ";
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                                            <div class=\"alert alert-success\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-success\">Success</span>                                         
                                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 52
        echo " 
                                       ";
        // line 53
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                                           <div class=\"alert\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-warning\">Warning</span>                                        
                                                ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 59
        echo " 
                                       ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "inverse"), "method")) {
            echo " 
                                              <div class=\"alert alert-info\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                                <span class=\"label label-inverse\">Inverse</span>          
                                                       ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "inverse"), "method"), "html", null, true);
            echo " 
                                            </div> 
                                       ";
        }
        // line 66
        echo " 
                        ";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
                                    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
                                    <script src=\"";
        // line 80
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
        return array (  201 => 80,  197 => 79,  192 => 78,  189 => 77,  184 => 66,  178 => 64,  171 => 60,  168 => 59,  162 => 57,  155 => 53,  152 => 52,  146 => 50,  139 => 46,  136 => 45,  130 => 43,  124 => 40,  121 => 39,  115 => 37,  107 => 33,  104 => 32,  98 => 29,  91 => 26,  89 => 25,  85 => 23,  83 => 22,  80 => 21,  77 => 20,  66 => 68,  63 => 20,  61 => 19,  57 => 17,  55 => 16,  49 => 13,  46 => 12,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 4,);
    }
}
