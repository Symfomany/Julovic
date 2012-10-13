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
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 14
            echo "                                            Bonjour <b>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                                ";
        }
        // line 16
        echo "                                    </a>
                                    <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_account"), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i>  Editer</a></li>
                                        <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres"), "html", null, true);
        echo "\"><i class=\"icon-wrench\"></i> Parametres</a></li>
                                        <li><a href=\"#\"><i class=\"icon-user\"></i> Preference</a></li>
                                        <li class=\"divider\"></li>
                                        <li> <a id=\"logout\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Deconnexion</a> <br /></li>
                                    </ul>
                            </div>
                            ";
        // line 27
        echo "                            ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:search", array(), array());
        // line 28
        echo "                                <div class=\"btn-group pull-right\" id=\"another_links\">
                                    <a class=\"btn btn-inverse dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        Actions Rapides
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"right dropdown-menu\">
                                         ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fastactions"));
        foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
            // line 35
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
        // line 37
        echo "                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <ul class=\"nav\">
                        ";
        // line 44
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
            // line 45
            echo "                                ";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                // line 46
                echo "                                    <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\"><i class=\"icon-home\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo " </a>
                                    </li>                                 
                                ";
            } elseif ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                // line 50
                echo "                                    <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo "</a>
                                    </li>                                 
                                ";
            } else {
                // line 54
                echo "                                    <li class=\"";
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    echo "dropdown ";
                }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                        <a ";
                // line 55
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
                // line 56
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    // line 57
                    echo "                                        <ul class=\"dropdown-menu\">
                                        ";
                    // line 58
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "param"), "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 59
                        echo "                                                <li class=\"";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "subroute"), "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                    <a href=\"";
                        // line 60
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
                    // line 63
                    echo "                                            </ul>
                                    ";
                }
                // line 65
                echo "                                        </li>                                 
                                ";
            }
            // line 67
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
        // line 68
        echo "                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                    </div>";
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
        return array (  218 => 68,  204 => 67,  200 => 65,  196 => 63,  185 => 60,  178 => 59,  174 => 58,  171 => 57,  169 => 56,  146 => 54,  138 => 51,  131 => 50,  123 => 47,  113 => 45,  76 => 35,  72 => 34,  64 => 28,  61 => 27,  55 => 23,  49 => 20,  40 => 16,  30 => 13,  17 => 2,  129 => 66,  125 => 64,  63 => 8,  60 => 7,  54 => 6,  48 => 100,  46 => 29,  43 => 28,  41 => 27,  34 => 24,  32 => 14,  21 => 1,  86 => 29,  81 => 28,  78 => 27,  74 => 19,  71 => 18,  62 => 20,  59 => 18,  51 => 14,  39 => 8,  31 => 5,  28 => 6,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 55,  144 => 52,  133 => 67,  127 => 43,  120 => 39,  116 => 46,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 44,  90 => 30,  87 => 37,  82 => 27,  68 => 23,  57 => 17,  53 => 15,  45 => 19,  42 => 10,  38 => 9,  36 => 7,  29 => 4,  26 => 3,);
    }
}
