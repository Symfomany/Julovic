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
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"/\">Administration</a>
          <div class=\"nav-collapse collapse\">
            <div class=\"navbar-text pull-right\">
              <div class=\"btn-group\">
                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-user icon-white\"></i> 
                            ";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 22
            echo "                                        Bonjour <b>";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                            ";
        }
        // line 24
        echo "                            </a>
                            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><i class=\"icon-pencil\"></i> Editer</a></li>
                                <li><a href=\"#\"><i class=\"icon-wrench\"></i> Parametres</a></li>
                                <li><a href=\"#\"><i class=\"icon-user\"></i> Preference</a></li>
                                <li class=\"divider\"></li>
                                <li> <a id=\"logout\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Deconnexion</a> <br /></li>
                            </ul>
                </div>
            </div>
                  
            <ul class=\"nav\">
              ";
        // line 37
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
            // line 38
            echo "                                ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 39
                echo "                                <li class=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_param_, "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 40
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_param_, "routing")), "html", null, true);
                echo "\">";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_param_, "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } elseif ($this->getAttribute($_loop_, "last")) {
                // line 43
                echo "                                <li class=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_param_, "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 44
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_param_, "routing")), "html", null, true);
                echo "\">";
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_param_, "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } else {
                // line 47
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
                // line 48
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
                // line 49
                if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                if ($this->getAttribute($_param_, "subrouting", array(), "any", true, true)) {
                    // line 50
                    echo "                                    <ul class=\"dropdown-menu\">
                                        ";
                    // line 51
                    if (isset($context["param"])) { $_param_ = $context["param"]; } else { $_param_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_param_, "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 52
                        echo "                                           <li class=\"";
                        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                        if (isset($context["subroute"])) { $_subroute_ = $context["subroute"]; } else { $_subroute_ = null; }
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($_subroute_, "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                <a href=\"";
                        // line 53
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
                    // line 56
                    echo "                                    </ul>
                                    ";
                }
                // line 58
                echo "                                </li>                                 
                                ";
            }
            // line 60
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
        // line 61
        echo "            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>        
    <div class=\"clearfix\"></div>
    <div class=\"container-fluid\">
        ";
        // line 69
        echo "            ";
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs();
        echo "
        
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Sidebar</li>
              <li class=\"active\"><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Sidebar</li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Sidebar</li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div>
        
    <div class=\"span12\">
        ";
        // line 96
        echo "        <div id=\"primary_nav\">
            <div class=\"navbar\" style=\"position: static;\">
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
                            <ul class=\"nav pull-right\" id=\"another_links\">
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
        ";
        // line 145
        $this->displayBlock('flash_data_off', $context, $blocks);
        // line 167
        echo "                    </div>
            ";
    }

    // line 145
    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 146
        echo "            ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-info fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 148
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 151
        echo "                                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-error fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 153
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 156
        echo "                                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-success fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 158
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 161
        echo "                                    ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-warning fade in\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 163
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 166
        echo "                                ";
    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        // line 170
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
             <script src=\"";
        // line 171
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
        return array (  397 => 171,  392 => 170,  389 => 169,  385 => 166,  378 => 163,  371 => 161,  364 => 158,  357 => 156,  350 => 153,  343 => 151,  336 => 148,  329 => 146,  326 => 145,  321 => 167,  319 => 145,  268 => 96,  238 => 69,  229 => 61,  215 => 60,  211 => 58,  207 => 56,  194 => 53,  185 => 52,  180 => 51,  177 => 50,  174 => 49,  157 => 48,  144 => 47,  134 => 44,  125 => 43,  115 => 40,  106 => 39,  102 => 38,  84 => 37,  53 => 21,  38 => 8,  34 => 6,  31 => 5,  28 => 4,  85 => 19,  82 => 18,  75 => 31,  66 => 24,  64 => 10,  59 => 9,  56 => 22,  49 => 6,  46 => 5,  42 => 22,  39 => 18,  36 => 8,  33 => 5,  30 => 4,);
    }
}
