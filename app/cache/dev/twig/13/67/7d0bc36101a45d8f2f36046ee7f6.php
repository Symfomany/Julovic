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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<h1>Categories list</h1>

";
        // line 10
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 11
        echo "
<table class=\"table table-striped\" class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Datecreated</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <tr>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            if ($this->getAttribute($this->getContext($context, "entity"), "dateCreated")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 35
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
            // line 41
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
        // line 48
        echo "    </tbody>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Datecreated</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>

<ul>
    <li>
        <a href=\"";
        // line 62
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
        return array (  128 => 62,  112 => 48,  100 => 41,  89 => 35,  83 => 32,  74 => 28,  70 => 27,  66 => 26,  60 => 25,  57 => 24,  52 => 23,  38 => 11,  36 => 10,  29 => 6,  26 => 5,);
    }
}
