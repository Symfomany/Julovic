<?php

/* SiteAdminBundle:Slot:topmenu.html.twig */
class __TwigTemplate_fe67dc8676b54d23d55a1a64eb73da00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                    <a id=\"scrollTop\" class=\"btn\"><i class=\"icon-chevron-up\"></i>Remonter</a>
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <div class=\"nav-collapse collapse\">
                        <div class=\"navbar-text pull-right\">
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-user icon-white\"></i> 
                                ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 15
            echo "                                            Bonjour <b>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                                ";
        }
        // line 17
        echo "                                    </a>
                                    <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_account"), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i>  Editer</a></li>
                                        <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres"), "html", null, true);
        echo "\"><i class=\"icon-wrench\"></i> Parametres</a></li>
                                        <li><a href=\"#\"><i class=\"icon-user\"></i> Preference</a></li>
                                        <li class=\"divider\"></li>
                                        <li> <a id=\"logout\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Deconnexion</a> <br /></li>
                                    </ul>
                            </div>
                            ";
        // line 28
        echo "                            ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:search", array(), array());
        // line 29
        echo "                                <div class=\"btn-group pull-right\" id=\"another_links\">
                                    <a class=\"btn btn-inverse dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        Actions Rapides
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"right dropdown-menu\">
                                         ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fastactions"));
        foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
            // line 36
            echo "                                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "subroute"), "routing")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subroute"), "label"), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subroute'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <ul class=\"nav\">
                        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topmenu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 46
            echo "                                ";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                // line 47
                echo "                                    <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\"><i class=\"icon-home\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo " </a>
                                    </li>                                 
                                ";
            } elseif ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                // line 51
                echo "                                    <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo "</a>
                                    </li>                                 
                                ";
            } else {
                // line 55
                echo "                                    <li class=\"";
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    echo "dropdown ";
                }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a ";
                // line 56
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    echo "<b class=\"caret\"></b>";
                }
                echo "</a>
                                    ";
                // line 57
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    // line 58
                    echo "                                        <ul class=\"dropdown-menu\">
                                        ";
                    // line 59
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "param"), "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 60
                        echo "                                                <li class=\"";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "subroute"), "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                    <a href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "subroute"), "routing")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subroute"), "label"), "html", null, true);
                        echo "</a>
                                                </li>  
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subroute'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 64
                    echo "                                            </ul>
                                    ";
                }
                // line 66
                echo "                                        </li>                                 
                                ";
            }
            // line 68
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:topmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 69,  205 => 68,  201 => 66,  197 => 64,  186 => 61,  179 => 60,  175 => 59,  170 => 57,  157 => 56,  147 => 55,  139 => 52,  132 => 51,  117 => 47,  114 => 46,  97 => 45,  88 => 38,  65 => 29,  56 => 24,  50 => 21,  33 => 15,  17 => 2,  135 => 69,  125 => 64,  87 => 29,  82 => 27,  63 => 8,  60 => 7,  54 => 6,  48 => 104,  46 => 20,  43 => 28,  41 => 17,  34 => 24,  32 => 7,  21 => 1,  189 => 73,  185 => 72,  180 => 71,  177 => 70,  172 => 58,  166 => 59,  159 => 55,  156 => 54,  150 => 52,  143 => 48,  140 => 47,  134 => 45,  127 => 41,  124 => 48,  118 => 38,  103 => 32,  79 => 21,  74 => 19,  71 => 18,  62 => 28,  59 => 18,  51 => 14,  39 => 8,  31 => 14,  28 => 6,  184 => 74,  176 => 69,  158 => 58,  154 => 57,  149 => 54,  137 => 48,  131 => 68,  122 => 41,  116 => 40,  112 => 35,  109 => 34,  102 => 37,  95 => 28,  92 => 27,  90 => 30,  86 => 24,  80 => 32,  77 => 36,  73 => 35,  57 => 17,  53 => 15,  45 => 11,  42 => 10,  38 => 11,  36 => 7,  29 => 6,  26 => 5,);
    }
}
