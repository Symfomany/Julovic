<?php

/* SiteAdminBundle:Articles:index.html.twig */
class __TwigTemplate_0445053c9df41464543910286e078fbf extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<h1>Articles list</h1>

";
        // line 8
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 9
        echo "

";
        // line 12
        echo "<div class=\"navigation\">
    ";
        // line 13
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 18
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
            <th";
        // line 19
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Title", 1 => "a.title"), "method");
        echo "</th>
            <th>Resume</th>
            <th>Content</th>
            <th";
        // line 22
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Tag"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Tag", 1 => "a.tag"), "method");
        echo "</th>
            <th>Datecreated</th>
            <th>Position</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class=\"sortable\">
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "        <tr id=\"menu_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\">
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title")), "html", null, true);
            echo "</td>
            <td class=\"wide\">";
            // line 34
            echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "resume"), 50, true);
            echo "</td>
            <td class=\"wide\">";
            // line 35
            echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "content"), 50, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tag"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "m/d/Y"), "html", null, true);
            echo "</td>
            <td><div class=\"sort_item\"><a id=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "\"><i class=\"icon-move\"></i></a></div></td>
            <td>";
            // line 39
            echo $this->env->getExtension('my_twig_extension')->validate($this->getAttribute($this->getContext($context, "entity"), "active"), "articles", $this->getAttribute($this->getContext($context, "entity"), "id"));
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> edit</a>
                    </li>
                </ul>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "        <tr>
                <div class=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <strong>Warning!</strong> Aucun résultat.
                </div>
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "    </tbody>
        <thead>
        <tr>
            <th>";
        // line 62
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
            <th";
        // line 63
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Title", 1 => "a.title"), "method");
        echo "</th>
            <th>Category</th>
            <th>Resume</th>
            <th>Content</th>
            <th";
        // line 67
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Tag"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Tag", 1 => "a.tag"), "method");
        echo "</th>
            <th>Datecreated</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>
<div class=\"navigation\">
    ";
        // line 75
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>

<ul>
    <li>
        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_new"), "html", null, true);
        echo "\">
          <i class=\"icon-pencil\"></i> Create a new entry
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 80,  193 => 75,  178 => 67,  167 => 63,  163 => 62,  158 => 59,  146 => 52,  135 => 46,  129 => 43,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 31,  82 => 30,  67 => 22,  57 => 19,  53 => 18,  45 => 13,  42 => 12,  38 => 9,  36 => 8,  29 => 4,  26 => 3,);
    }
}
