<?php

/* SiteAdminBundle:Slot:flashdatas.html.twig */
class __TwigTemplate_9074d42a9647036d2d3a4f2d1cff58fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash_data_off' => array($this, 'block_flash_data_off'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('flash_data_off', $context, $blocks);
    }

    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 2
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-info fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                        
                     ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 8
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-error fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                          
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-success fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                          
                 ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-warning fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                           
                  ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:flashdatas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  64 => 20,  58 => 17,  51 => 14,  45 => 11,  38 => 8,  32 => 5,  25 => 2,  18 => 1,  117 => 48,  110 => 43,  98 => 37,  90 => 34,  83 => 30,  79 => 29,  75 => 28,  71 => 23,  67 => 26,  63 => 25,  57 => 24,  54 => 23,  50 => 22,  29 => 4,  26 => 3,);
    }
}
