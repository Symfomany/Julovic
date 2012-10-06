<?php

/* SiteAdminBundle::layout.html.twig */
class __TwigTemplate_5c6bcc65535fe51fa74de6bd477da4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'flash_data_off' => array($this, 'block_flash_data_off'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"wrapper\">
            ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                     ";
        // line 8
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"./index.html\">Administration</a>
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">
                             ";
        // line 19
        if (isset($context["topmenu"])) { $_topmenu_ = $context["topmenu"]; } else { $_topmenu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_topmenu_);
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
            // line 20
            echo "                                ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 21
                echo "                                <li class=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_param_, "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 22
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_param_, "routing")), "html", null, true);
                echo "\">";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_param_, "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } elseif ($this->getAttribute($_loop_, "last")) {
                // line 25
                echo "                                <li class=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_param_, "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 26
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_param_, "routing")), "html", null, true);
                echo "\">";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_param_, "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } else {
                // line 29
                echo "                                <li class=\"";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if ($this->getAttribute($_param_, "subrouting", array(), "any", true, true)) {
                    echo "dropdown ";
                }
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_param_, "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a ";
                // line 30
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if ($this->getAttribute($_param_, "subrouting", array(), "any", true, true)) {
                    echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                }
                echo " href=\"";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_param_, "routing")), "html", null, true);
                echo "\">";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_param_, "label"), "html", null, true);
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if ($this->getAttribute($_param_, "subrouting", array(), "any", true, true)) {
                    echo "<b class=\"caret\"></b>";
                }
                echo "</a>
                                    ";
                // line 31
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if ($this->getAttribute($_param_, "subrouting", array(), "any", true, true)) {
                    // line 32
                    echo "                                    <ul class=\"dropdown-menu\">
                                        ";
                    // line 33
                    if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_param_, "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 34
                        echo "                                           <li class=\"";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (isset($context["subroute"])) { $_subroute_ = $context["subroute"]; } else { $_subroute_ = null; }
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_subroute_, "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                <a href=\"";
                        // line 35
                        if (isset($context["subroute"])) { $_subroute_ = $context["subroute"]; } else { $_subroute_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_subroute_, "routing")), "html", null, true);
                        echo "\">";
                        if (isset($context["subroute"])) { $_subroute_ = $context["subroute"]; } else { $_subroute_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_subroute_, "label"), "html", null, true);
                        echo "</a>
                                            </li>  
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subroute'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 38
                    echo "                                    </ul>
                                    ";
                }
                // line 40
                echo "                                </li>                                 
                                ";
            }
            // line 42
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
        // line 43
        echo "                        </ul>
                    </div>
            <div class=\"navbar-text pull-right\">
            <div class=\"nav-collapse collapse\">
                    <div class=\"btn-group\">
                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-user icon-white\"></i> 
                            ";
        // line 49
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 50
            echo "                                        Bonjour <b>";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                            ";
        }
        // line 52
        echo "                            </a>
                            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><i class=\"icon-pencil\"></i> Editer</a></li>
                                <li><a href=\"#\"><i class=\"icon-wrench\"></i> Parametres</a></li>
                                <li><a href=\"#\"><i class=\"icon-user\"></i> Preference</a></li>
                                <li class=\"divider\"></li>
                                <li> <a id=\"logout\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Deconnexion</a> <br /></li>
                            </ul>
                    </div>
          </div>
          </div>
                     
                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>
        ";
        // line 71
        echo "        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">Home</a> <span class=\"divider\">/</span></li>
            <li><a href=\"";
        // line 73
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "\">";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</a></li>
        </ul>
        
        ";
        // line 77
        echo "        <div id=\"primary_nav\">
            <div class=\"navbar navbar-inverse\" style=\"position: static;\">
                <div class=\"navbar-inner\">
                    <div class=\"container\">
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".subnav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>
                        <a class=\"brand\" href=\"#\">Title</a>
                        <div class=\"nav-collapse subnav-collapse\">
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Action</a></li>
                                        <li><a href=\"#\">Another action</a></li>
                                        <li><a href=\"#\">Something else here</a></li>
                                        <li class=\"divider\"></li>
                                        <li class=\"nav-header\">Nav header</li>
                                        <li><a href=\"#\">Separated link</a></li>
                                        <li><a href=\"#\">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class=\"navbar-search pull-left\" action=\"\">
                                <input type=\"text\" class=\"search-query span2\" placeholder=\"Search\">
                            </form>
                            <ul class=\"nav pull-right\">
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"divider-vertical\"></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">Action</a></li>
                                        <li><a href=\"#\">Another action</a></li>
                                        <li><a href=\"#\">Something else here</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </div>
                </div><!-- /navbar-inner -->
            </div>
        </div>
     

                ";
        // line 129
        $this->displayBlock('flash_data_off', $context, $blocks);
        // line 151
        echo "    </div>
     ";
    }

    // line 129
    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 130
        echo "                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-info fade in\"> 
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 132
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 135
        echo "                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-error fade in\"> 
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 137
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 140
        echo "                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-success fade in\"> 
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 142
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 145
        echo "                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-warning fade in\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 147
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 150
        echo "                  ";
    }

    // line 153
    public function block_footer($context, array $blocks = array())
    {
        // line 154
        echo "    <div id=\"footer\">
    </div>
            ";
    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        // line 158
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
       ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 159,  394 => 158,  391 => 157,  385 => 154,  382 => 153,  378 => 150,  371 => 147,  364 => 145,  357 => 142,  350 => 140,  343 => 137,  336 => 135,  329 => 132,  322 => 130,  319 => 129,  314 => 151,  312 => 129,  258 => 77,  248 => 73,  244 => 72,  241 => 71,  227 => 59,  218 => 52,  208 => 50,  205 => 49,  197 => 43,  183 => 42,  179 => 40,  175 => 38,  162 => 35,  153 => 34,  148 => 33,  145 => 32,  142 => 31,  125 => 30,  112 => 29,  102 => 26,  93 => 25,  83 => 22,  74 => 21,  70 => 20,  52 => 19,  35 => 6,  32 => 5,  29 => 4,  85 => 19,  82 => 18,  75 => 10,  66 => 12,  64 => 10,  59 => 9,  56 => 8,  49 => 6,  46 => 5,  42 => 22,  39 => 8,  36 => 8,  33 => 5,  30 => 4,);
    }
}
