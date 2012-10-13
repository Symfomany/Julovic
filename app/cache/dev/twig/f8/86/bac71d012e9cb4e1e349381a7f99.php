<?php

/* SiteAdminBundle:Slot:search_result.html.twig */
class __TwigTemplate_f886bac71d012e9cb4e1e349381a7f99 extends Twig_Template
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

<h1>Résultat de recherche pour \"";
        // line 6
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getContext($context, "search_word")), "rien"), "html", null, true);
        echo "\"</h1>
";
        // line 8
        echo "<div class=\"navigation\">
    ";
        // line 9
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 14
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
            <th";
        // line 15
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
        // line 19
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
    <tbody>
";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "        <tr>
            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title")), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "category"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "resume"), 50, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "content"), 50, true), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tag"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "m/d/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "active"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "            </tbody>
            <tfoot>
                <tr>
                    <th>";
        // line 51
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
                    <th";
        // line 52
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
        // line 56
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
            </tfoot>
</table>
";
        // line 64
        echo "<div class=\"navigation\">
    ";
        // line 65
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  174 => 64,  160 => 56,  149 => 52,  145 => 51,  140 => 48,  128 => 42,  122 => 39,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  85 => 28,  82 => 27,  78 => 26,  64 => 19,  53 => 15,  49 => 14,  41 => 9,  38 => 8,  34 => 6,  29 => 4,  26 => 3,);
    }
}
