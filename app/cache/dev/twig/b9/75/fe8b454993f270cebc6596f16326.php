<?php

/* SiteAdminBundle:Articles:show.html.twig */
class __TwigTemplate_b975fe8b454993f270cebc6596f16326 extends Twig_Template
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

<h1>Articles</h1>

<table class=\"record_properties table table-striped\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "category"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Resume</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "resume"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "content"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tag</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tag"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Datecreated</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "m/d/Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Active</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles"), "html", null, true);
        echo "\">
            <i class=\"icon-share-alt\"></i> Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\" class=\"btn-primary btn-large\">Delete</button>
        </form>
    </li>
</ul>

 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 56,  108 => 55,  100 => 50,  92 => 45,  82 => 38,  75 => 34,  68 => 30,  61 => 26,  54 => 22,  47 => 18,  40 => 14,  29 => 6,  26 => 5,);
    }
}
