<?php

/* SiteAdminBundle:Comments:index.html.twig */
class __TwigTemplate_5003186df1ec80a6c02a86e4dc210b16 extends Twig_Template
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

<h1>Comments list</h1>

";
        // line 8
        $this->env->loadTemplate("SiteAdminBundle:Slot:filter.html.twig")->display($context);
        // line 9
        echo "
<table class=\"table table-striped\" class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Content</th>
            <th>Datecreated</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "        <tr>
            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "content"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            if ($this->getAttribute($this->getContext($context, "entity"), "dateCreated")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateCreated"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 39
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comments_new"), "html", null, true);
        echo "\">
           <i class=\"icon-pencil\"></i> Create a new entry
        </a>
    </li>
</ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Comments:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 44,  100 => 39,  88 => 33,  82 => 30,  73 => 26,  69 => 25,  65 => 24,  59 => 23,  56 => 22,  52 => 21,  38 => 9,  36 => 8,  29 => 4,  26 => 3,);
    }
}
