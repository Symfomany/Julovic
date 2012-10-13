<?php

/* SiteAdminBundle:Medias:show.html.twig */
class __TwigTemplate_f2b75d441f4ec258c1276cd565952fa0 extends Twig_Template
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


<h1>Medias</h1>

<table class=\"table table-striped\" class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Legend</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "legend"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Picture</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "picture"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>State</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "state"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias"), "html", null, true);
        echo "\">
            <i class=\"icon-share-alt\"></i> Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary btn-large\">Delete</button>
        </form>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Medias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 45,  88 => 44,  80 => 39,  72 => 34,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  29 => 6,  26 => 5,);
    }
}
