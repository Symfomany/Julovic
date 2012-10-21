<?php

/* SiteAdminBundle:Medias:index.html.twig */
class __TwigTemplate_5eb76cbed6937e0da37c2d7ed67087f8 extends Twig_Template
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

<h1>Medias list</h1>

";
        // line 10
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 11
        echo "

";
        // line 14
        echo "<div class=\"navigation\">
    ";
        // line 15
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>";
        // line 20
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
            <th";
        // line 21
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Legend"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Legend", 1 => "a.legend"), "method");
        echo "</th>
            <th>Picture</th>
            <th>Visibility</th>
            <th>Datecreated</th>
            <th>Dateupdated</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "legend")), "html", null, true);
            echo "</td>
                   <td> ";
            // line 34
            $context["img_path"] = ((("uploads/administrateurs/" . $this->getAttribute($this->getContext($context, "user"), "id")) . "/") . $this->getAttribute($this->getContext($context, "entity"), "picture"));
            // line 35
            echo "                    ";
            if (($this->getAttribute($this->getContext($context, "entity"), "picture") && $this->env->getExtension('my_twig_extension')->file_exist($this->getContext($context, "img_path")))) {
                // line 36
                echo "                           <a href=\"/uploads/administrateurs/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "picture"), "html", null, true);
                echo "\" class=\"fancybox\">
                           <img src=\"/uploads/administrateurs/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('my_twig_extension')->sizes($this->getAttribute($this->getContext($context, "entity"), "picture"), "medium"), "html", null, true);
                echo "\"  width=\"300\" height=\"200\" class=\"img-polaroid\">
                    ";
            }
            // line 38
            echo "</a></td>
                <td>";
            // line 39
            echo $this->env->getExtension('my_twig_extension')->validate($this->getAttribute($this->getContext($context, "entity"), "active"), $this->getAttribute($this->getContext($context, "entity"), "id"));
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($this->getContext($context, "entity"), "dateCreated")) {
                echo twig_escape_filter($this->env, twig_localized_date_filter(twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d"), "short", "none"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($this->getContext($context, "entity"), "dateUpdated")) {
                echo twig_escape_filter($this->env, twig_localized_date_filter(twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateUpdated"), "Y-m-d"), "full", "none"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 54
        echo "    </tbody>
        <thead>
        <tr>
            <th>";
        // line 57
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Id", 1 => "a.id"), "method");
        echo "</th>
            <th";
        // line 58
        if ($this->getAttribute($this->getContext($context, "pagination"), "isSorted", array(0 => "a.Legend"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Legend", 1 => "a.legend"), "method");
        echo "</th>
            <th>Picture</th>
            <th>State</th>
            <th>Datecreated</th>
            <th>Dateupdated</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>

<div class=\"navigation\">
    ";
        // line 69
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>

<ul>
    <li>
        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("medias_new"), "html", null, true);
        echo "\">
           <i class=\"icon-pencil\"></i> Create a new entry
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Medias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 74,  176 => 69,  158 => 58,  154 => 57,  149 => 54,  137 => 48,  131 => 45,  122 => 41,  116 => 40,  112 => 39,  109 => 38,  102 => 37,  95 => 36,  92 => 35,  90 => 34,  86 => 33,  80 => 32,  77 => 31,  73 => 30,  57 => 21,  53 => 20,  45 => 15,  42 => 14,  38 => 11,  36 => 10,  29 => 6,  26 => 5,);
    }
}
