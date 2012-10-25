<?php

/* SiteAdminBundle:Links:index.html.twig */
class __TwigTemplate_043ccb917d479fc4ac29491cbcbc2935 extends Twig_Template
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

<h1>Liste des liens</h1>
";
        // line 9
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 10
        echo "
";
        // line 12
        echo "<div class=\"navigation\">
    ";
        // line 13
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>
<table class=\"table table-striped\" class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Link</th>
            <th>Description</th>
            <th>Datecreated</th>
            <th>Position</th>
            <th>Activation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class=\"sortable\">
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "        <tr id=\"menu_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\">
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("links_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "link"), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_localized_date_filter(twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d"), "short", "none"), "html", null, true);
            echo "</td>
            <td><div class=\"sort_item\"><a id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "position"), "html", null, true);
            echo "\"><i class=\"icon-move\"></i></a></div></td>
            <td>";
            // line 37
            echo $this->env->getExtension('my_twig_extension')->validate($this->getAttribute($this->getContext($context, "entity"), "active"), "links", $this->getAttribute($this->getContext($context, "entity"), "id"));
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("links_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("links_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 50
        echo "    </tbody>
</table>
<div class=\"navigation\">
    ";
        // line 53
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>

<ul>
    <li>
        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("links_new"), "html", null, true);
        echo "\">
           <i class=\"icon-pencil\"></i> Create a new entry
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Links:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  127 => 53,  122 => 50,  110 => 44,  104 => 41,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  71 => 31,  66 => 30,  62 => 29,  43 => 13,  40 => 12,  37 => 10,  35 => 9,  29 => 6,  26 => 5,);
    }
}
