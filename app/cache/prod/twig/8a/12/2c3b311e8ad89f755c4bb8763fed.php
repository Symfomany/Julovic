<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_8a122c3b311e8ad89f755c4bb8763fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'menu' => array($this, 'block_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo " ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
          ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "            <div id=\"content\">
                <h1>Ta pas est introuvable :)</h1>
                <p>Page à designer <3</p>
                  <img src=\"http://edensky.e.d.pic.centerblog.net/o/fbedef1a.jpg\" id=\"il_fi\" height=\"300\" width=\"300\" style=\"padding-right: 8px; padding-top: 8px; padding-bottom: 8px; \">
            </div>
    ";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " 
          ";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  75 => 10,  66 => 12,  64 => 10,  59 => 9,  56 => 8,  49 => 6,  46 => 5,  42 => 22,  39 => 18,  36 => 8,  33 => 5,  30 => 4,);
    }
}
