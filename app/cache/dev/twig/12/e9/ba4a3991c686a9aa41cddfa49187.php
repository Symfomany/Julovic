<?php

/* SiteAdminBundle:Categories:new.html.twig */
class __TwigTemplate_12e9ba4a3991c686a9aa41cddfa49187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "


<h1>Categories creation</h1>

<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
        
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget');
        echo "        <span class=\"help-inline\"><span class=\"label label-info\">Help!</span> Test alpha</span>
                
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                
        
    <p>
        <button type=\"submit\" class=\"btn btn-primary btn-large\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories"), "html", null, true);
        echo "\">
            <i class=\"icon-share-alt\"></i> Back to the list
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Categories:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  65 => 19,  61 => 18,  57 => 17,  52 => 15,  48 => 14,  44 => 13,  37 => 11,  29 => 6,  26 => 5,);
    }
}
