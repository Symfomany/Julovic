<?php

/* SiteAdminBundle:Categories:index.html.twig */
class __TwigTemplate_13677d0bc36101a45d8f2f36046ee7f6 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<h1>Les Categories</h1>

";
        // line 9
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 10
        echo "<div class=\"navigation\">
    ";
        // line 11
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
    </div>
    <table class=\"table table-striped\" class=\"records_list\">
        <thead>
            <tr>
                <th>";
        // line 16
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
                <th";
        // line 17
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Titre", 1 => "a.title"), "method");
        echo "</th>
                <th>Parent</th>
                <th>Position</th>
                <th>Description</th>
                <th>Date de création</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class=\"sortable\">
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "                <tr id=\"menu_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title")), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "parent")), "html", null, true);
            echo "</td>
                    <td><div class=\"sort_item\"><a id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "\"><i class=\"icon-move\"></i></a></div></td>
                    <td>";
            // line 32
            echo $this->getAttribute($this->getContext($context, "entity"), "description");
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($this->getContext($context, "entity"), "dateCreated")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                <tr><td colspan=\"9\">
                    <div class=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Attention:</strong> Aucune catégorie crée.
                    </div>
                </td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "    
    </tbody>
        <thead>
            <tr>
                <th>";
        // line 56
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
                <th";
        // line 57
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Title", 1 => "a.title"), "method");
        echo "</th>
                <th>Description</th>
                <th>Datecreated</th>
                <th>Actions</th>
            </tr>
        </thead>
</table>


<ul>
    <li>
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_new"), "html", null, true);
        echo "\">
            <i class=\"icon-pencil\"></i> Create a new entry
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 68,  149 => 57,  145 => 56,  139 => 52,  127 => 46,  116 => 40,  110 => 37,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  79 => 28,  74 => 27,  69 => 26,  53 => 17,  49 => 16,  41 => 11,  38 => 10,  36 => 9,  29 => 5,  26 => 4,);
    }
}
