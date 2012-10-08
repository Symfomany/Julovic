<?php

/* SiteAdminBundle:Slot:sidebar.html.twig */
class __TwigTemplate_7535136bcb2ec6e07ec7b9f0420fb583 extends Twig_Template
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
        echo "<div class=\"well sidebar-nav\">
    <ul class=\"nav nav-list\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
            // line 4
            echo "                <li class=\"nav-header\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</li>
                <li class=\"active\"><a href=\"#\">Link</a></li>
                <li><a href=\"#\">Link</a></li>
                <li><a href=\"#\">Link</a></li>
                <li><a href=\"#\">Link</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "            </ul>
</div><!--/.well -->";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  25 => 4,  21 => 3,  17 => 1,);
    }
}
