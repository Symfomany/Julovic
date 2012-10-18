<?php

/* SiteAdminBundle:Slot:search.html.twig */
class __TwigTemplate_5d3ce27b6596e5c0f81d75ee5ccae91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<form class=\"navbar-search pull-left\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_query"), "html", null, true);
        echo "\" id=\"top_search\" method=\"post\">
            ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "search"), 'errors');
        echo "
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "search"), 'widget', array("attr" => array("class" => "search-query span2", "placeholder" => "Nom, titre ...")));
        echo "
            <i id=\"search_btn\" class=\"icon-search\"></i>
            <div class=\"ajaxLoading\"></div>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
</form>

";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  24 => 3,  20 => 2,  17 => 1,);
    }
}
