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
                <div id=\"box_slogan\" class=\"pull-left\">
                         <p><span class=\"lead\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "nom_site"), "html", null, true);
        echo "</a></span><br /><span class=\"italic\"><i>";
        echo twig_escape_filter($this->env, $this->getContext($context, "slogan"), "html", null, true);
        echo "</i></span></p>
                </div>   
                <a id=\"scrollTop\" class=\"btn btn-small\"><i class=\"icon-chevron-up\"></i>Remonter</a>
                    <div class=\"nav-collapse collapse\">
                        <div class=\"navbar-text pull-right\">
                            <div class=\"btn-group\">
                                <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-user icon-white\"></i> 
                                ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 13
            echo "                                            Bonjour <b>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                                ";
        }
        // line 15
        echo "                                    </a>
                                    <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_account"), "html", null, true);
        echo "\"><i class=\"icon-edit\"></i>  Editer</a></li>
                                        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parametres"), "html", null, true);
        echo "\"><i class=\"icon-wrench\"></i> Parametres</a></li>
                                        <li><a href=\"#\"><i class=\"icon-user\"></i> Preference</a></li>
                                        <li class=\"divider\"></li>
                                        <li> <a id=\"logout\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Deconnexion</a> <br /></li>
                                    </ul>
                            </div>
                            ";
        // line 26
        echo "                            ";
        echo $this->env->getExtension('actions')->renderAction("SiteAdminBundle:Slot:search", array(), array());
        // line 27
        echo "                                <div class=\"btn-group pull-right\" id=\"another_links\">
                                    <a class=\"btn btn-small  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        Actions Rapides
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"right dropdown-menu\">
                                         ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fastactions"));
        foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
            // line 34
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
        // line 36
        echo "                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Base</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class=\"nav\">
                                        ";
        // line 42
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
            // line 43
            echo "                                            ";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                // line 44
                echo "                                                <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\"><i class=\"icon-home\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo " </a>
                                                </li>                                 
                                            ";
            } else {
                // line 48
                echo "                                                <li class=\"";
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    echo "dropdown ";
                }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                                    <a ";
                // line 49
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
                // line 50
                if ($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "subrouting", array(), "any", true, true)) {
                    // line 51
                    echo "                                                    <ul class=\"dropdown-menu\">
                                                    ";
                    // line 52
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "param"), "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 53
                        echo "                                                            <li class=\"";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "subroute"), "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                                <a href=\"";
                        // line 54
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
                    // line 57
                    echo "                                                        </ul>
                                                ";
                }
                // line 59
                echo "                                                    </li>                                 
                                            ";
            }
            // line 61
            echo "                                        ";
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
        // line 62
        echo "                            </ul>
                            <div class=\"pull-right\" id=\"btn_param\">
                                <button type=\"button\" class=\"btn btn-mini\" data-toggle=\"modal\" data-target=\"#myModal\">Paramètres</button>
                        </div>
                    </div>
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
        return array (  208 => 62,  164 => 52,  93 => 36,  78 => 33,  70 => 27,  51 => 18,  22 => 5,  17 => 2,  231 => 77,  227 => 76,  223 => 75,  219 => 74,  215 => 73,  211 => 72,  207 => 71,  202 => 70,  190 => 59,  182 => 64,  174 => 62,  170 => 61,  161 => 51,  157 => 57,  153 => 56,  144 => 53,  140 => 52,  137 => 51,  132 => 31,  128 => 45,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  91 => 16,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  64 => 9,  61 => 22,  55 => 19,  49 => 109,  47 => 31,  44 => 30,  35 => 25,  33 => 8,  21 => 1,  198 => 68,  194 => 61,  189 => 77,  186 => 57,  181 => 65,  175 => 54,  168 => 53,  165 => 60,  159 => 50,  152 => 52,  149 => 55,  143 => 49,  136 => 48,  133 => 44,  127 => 42,  121 => 44,  112 => 36,  104 => 32,  101 => 42,  95 => 17,  88 => 25,  86 => 24,  80 => 21,  77 => 20,  74 => 19,  63 => 67,  60 => 19,  58 => 18,  54 => 16,  52 => 15,  46 => 15,  43 => 11,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  201 => 80,  193 => 75,  178 => 63,  167 => 63,  163 => 62,  158 => 59,  146 => 49,  135 => 32,  129 => 43,  122 => 39,  118 => 43,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 15,  82 => 34,  67 => 26,  57 => 19,  53 => 18,  45 => 13,  42 => 28,  38 => 13,  36 => 12,  29 => 7,  26 => 3,);
    }
}
