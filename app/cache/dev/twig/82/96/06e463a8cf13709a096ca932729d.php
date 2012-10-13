<?php

/* SiteAdminBundle:Parametres:index.html.twig */
class __TwigTemplate_829606e463a8cf13709a096ca932729d extends Twig_Template
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

<h1>Paramètres du sites</h1>

  <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Principal</a></li>
    <li><a href=\"#tab2\" data-toggle=\"tab\">Serveur</a></li>
    <li><a href=\"#tab3\" data-toggle=\"tab\">Administrateurs</a></li>
  </ul>
  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"tab1\">
<table class=\"records_list table table-striped\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom du site</th>
            <th>URL du site</th>
            <th>Nom de l'administrateur</th>
            <th>Email de l'administrateur</th>
            <th>Ville de l'administrateur</th>
            <th>Tel de l'administrateur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "        <tr>
            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomSite"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "urlSite"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomAdmin"), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "emailAdmin"), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "villeAdmin"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telAdmin"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 52
        echo "    </tbody>
</table>
    </div>
    <div class=\"tab-pane\" id=\"tab2\">
      <p>Configuration Serveur</p>
    </div>
    <div class=\"tab-pane\" id=\"tab3\">
      
    </div>
  </div>
</div>



 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Parametres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  103 => 46,  97 => 43,  90 => 39,  86 => 38,  82 => 37,  78 => 36,  74 => 35,  70 => 34,  64 => 33,  61 => 32,  57 => 31,  29 => 6,  26 => 5,);
    }
}
