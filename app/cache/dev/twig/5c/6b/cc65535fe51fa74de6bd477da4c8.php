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
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app", true), "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 22
            echo "                                        Bonjour <b>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname")), "Nom"), "html", null, true);
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
        // line 36
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
            // line 37
            echo "                                ";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                // line 38
                echo "                                <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } elseif ($this->getAttribute($this->getContext($context, "loop"), "last")) {
                // line 42
                echo "                                <li class=\"";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                echo "</a>
                                </li>                                 
                                ";
            } else {
                // line 46
                echo "                                <li class=\"";
                if ($this->getAttribute($this->getContext($context, "param", true), "subrouting", array(), "any", true, true)) {
                    echo "dropdown ";
                }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "param"), "routing"))) {
                    echo "active";
                }
                echo "\">
                                    <a ";
                // line 47
                if ($this->getAttribute($this->getContext($context, "param", true), "subrouting", array(), "any", true, true)) {
                    echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "param"), "routing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "param"), "label"), "html", null, true);
                if ($this->getAttribute($this->getContext($context, "param", true), "subrouting", array(), "any", true, true)) {
                    echo "<b class=\"caret\"></b>";
                }
                echo "</a>
                                    ";
                // line 48
                if ($this->getAttribute($this->getContext($context, "param", true), "subrouting", array(), "any", true, true)) {
                    // line 49
                    echo "                                    <ul class=\"dropdown-menu\">
                                        ";
                    // line 50
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "param"), "subrouting"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subroute"]) {
                        // line 51
                        echo "                                           <li class=\"";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method") == $this->getAttribute($this->getContext($context, "subroute"), "routing"))) {
                            echo "active";
                        }
                        echo "\">
                                                <a href=\"";
                        // line 52
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
                    // line 55
                    echo "                                    </ul>
                                    ";
                }
                // line 57
                echo "                                </li>                                 
                                ";
            }
            // line 59
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
        // line 60
        echo "            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>        
        
        
        

        <div class=\"clearfix\"></div>
        <div class=\"container-fluid\">
        ";
        // line 72
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
        // line 99
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
        ";
        // line 148
        $this->displayBlock('flash_data_off', $context, $blocks);
        // line 170
        echo "                    </div>
                </div>
            ";
    }

    // line 148
    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 149
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-info fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 154
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-error fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 159
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-success fade in\"> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 164
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                        <div class=\"alert alert-block alert-warning fade in\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                            ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                        </div> 
                                    ";
        }
        // line 169
        echo "                                ";
    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        // line 174
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
             <script src=\"";
        // line 175
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
        return array (  367 => 175,  362 => 174,  359 => 173,  355 => 169,  349 => 166,  343 => 164,  337 => 161,  331 => 159,  325 => 156,  319 => 154,  313 => 151,  307 => 149,  304 => 148,  298 => 170,  296 => 148,  245 => 99,  215 => 72,  202 => 60,  188 => 59,  184 => 57,  180 => 55,  169 => 52,  162 => 51,  158 => 50,  155 => 49,  153 => 48,  140 => 47,  130 => 46,  122 => 43,  115 => 42,  107 => 39,  100 => 38,  97 => 37,  80 => 36,  72 => 31,  63 => 24,  55 => 22,  53 => 21,  38 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
