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
            <div class=\"ajaxLoading\"></div>
            ";
        // line 6
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
        return array (  33 => 6,  24 => 3,  20 => 2,  218 => 68,  204 => 67,  200 => 65,  196 => 63,  185 => 60,  178 => 59,  174 => 58,  171 => 57,  169 => 56,  146 => 54,  138 => 51,  131 => 50,  123 => 47,  113 => 45,  76 => 35,  72 => 34,  64 => 28,  61 => 27,  55 => 23,  49 => 20,  40 => 16,  30 => 13,  17 => 1,  129 => 66,  125 => 64,  63 => 8,  60 => 7,  54 => 6,  48 => 100,  46 => 29,  43 => 28,  41 => 27,  34 => 24,  32 => 14,  21 => 1,  86 => 29,  81 => 28,  78 => 27,  74 => 19,  71 => 18,  62 => 20,  59 => 18,  51 => 14,  39 => 8,  31 => 5,  28 => 4,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 55,  144 => 52,  133 => 67,  127 => 43,  120 => 39,  116 => 46,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 44,  90 => 30,  87 => 37,  82 => 27,  68 => 23,  57 => 17,  53 => 15,  45 => 19,  42 => 10,  38 => 9,  36 => 7,  29 => 4,  26 => 3,);
    }
}
