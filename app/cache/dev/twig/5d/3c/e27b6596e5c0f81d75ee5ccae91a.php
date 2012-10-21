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
        echo "<form class=\"navbar-search pull-left\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("search_query"), "html", null, true);
        echo "\" id=\"top_search\" method=\"post\">
            ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "search"), 'errors');
        echo "
            ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "search"), 'widget', array("attr" => array("class" => "search-query span2", "placeholder" => "Nom, titre ...")));
        echo "
            <i id=\"search_btn\" class=\"icon-search\"></i>
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
        return array (  32 => 6,  208 => 62,  164 => 52,  93 => 36,  78 => 33,  70 => 27,  51 => 18,  22 => 2,  17 => 1,  231 => 77,  227 => 76,  223 => 75,  219 => 74,  215 => 73,  211 => 72,  207 => 71,  202 => 70,  190 => 59,  182 => 64,  174 => 62,  170 => 61,  161 => 51,  157 => 57,  153 => 56,  144 => 53,  140 => 52,  137 => 51,  132 => 31,  128 => 45,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  91 => 16,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  64 => 9,  61 => 22,  55 => 19,  49 => 109,  47 => 31,  44 => 30,  35 => 25,  33 => 8,  21 => 1,  198 => 68,  194 => 61,  189 => 77,  186 => 57,  181 => 65,  175 => 54,  168 => 53,  165 => 60,  159 => 50,  152 => 52,  149 => 55,  143 => 49,  136 => 48,  133 => 44,  127 => 42,  121 => 44,  112 => 36,  104 => 32,  101 => 42,  95 => 17,  88 => 25,  86 => 24,  80 => 21,  77 => 20,  74 => 19,  63 => 67,  60 => 19,  58 => 18,  54 => 16,  52 => 15,  46 => 15,  43 => 11,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  201 => 80,  193 => 75,  178 => 63,  167 => 63,  163 => 62,  158 => 59,  146 => 49,  135 => 32,  129 => 43,  122 => 39,  118 => 43,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 15,  82 => 34,  67 => 26,  57 => 19,  53 => 18,  45 => 13,  42 => 28,  38 => 13,  36 => 12,  29 => 7,  26 => 3,);
    }
}
