<?php

/* SiteAdminBundle:Comments:show.html.twig */
class __TwigTemplate_980364f6f7a47d54019252e9abdd3b16 extends Twig_Template
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

<h1>Comments</h1>

<table class=\"table table-striped\" class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "content"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Datecreated</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments"), "html", null, true);
        echo "\">
            <i class=\"icon-share-alt\"></i> Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 44
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
        return "SiteAdminBundle:Comments:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 44,  87 => 43,  79 => 38,  71 => 33,  61 => 26,  54 => 22,  47 => 18,  40 => 14,  29 => 6,  26 => 5,);
    }
}
