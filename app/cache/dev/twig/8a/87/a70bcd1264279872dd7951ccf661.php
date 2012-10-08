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
            'flash_data_off' => array($this, 'block_flash_data_off'),
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
        echo "            <div id=\"wrapper\">
                        ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                                ";
        // line 8
        echo "                            ";
        $this->displayBlock('flash_data_off', $context, $blocks);
        // line 28
        echo "                </div>
     ";
    }

    // line 8
    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 9
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                    <div class=\"alert alert-block alert-error fade in\"> 
                        <span class=\"close\"></span>
                                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                    </div> 
                                ";
        }
        // line 15
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                    <div class=\"alert alert-block alert-success fade in\"> 
                        <span class=\"close\"></span>
                                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                    </div> 
                                ";
        }
        // line 21
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                    <div class=\"alert alert-block alert-warning fade in\">
                        <span class=\"close\"></span>
                                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                    </div> 
                                ";
        }
        // line 27
        echo "                            ";
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
        return array (  87 => 27,  81 => 24,  74 => 21,  68 => 18,  61 => 15,  55 => 12,  48 => 9,  40 => 28,  37 => 8,  30 => 5,  67 => 21,  60 => 17,  57 => 16,  51 => 13,  47 => 11,  45 => 8,  36 => 5,  33 => 6,  27 => 4,);
    }
}
