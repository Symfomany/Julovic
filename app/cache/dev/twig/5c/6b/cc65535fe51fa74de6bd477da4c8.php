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
                            <li class=\"\">
                                <a href=\"./index.html\">Accueil</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"\">Page 1</a>
                            </li>
                            <li class=\"\">
                                <a href=\"\">Page 2</a>
                            </li>
                            <li class=\"\">
                                <a href=\"\">Page 3</a>
                            </li>
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
                            <p class=\"navbar-text pull-right\">
                                ";
        // line 45
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app", true), "user", array(), "any", false, true), "firstname", array(), "any", true, true)) {
            // line 46
            echo "                                                Bonjour <b>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "firstname")), "Prénom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "lastname")), "Nom"), "html", null, true);
            echo "</b>
                                                <a id=\"logout\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Deconnexion</a> <br />
                                    ";
        }
        // line 49
        echo "                                </p>
                    </div>
                </div>
            </div>
        </div>

                    ";
        // line 56
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
        // line 107
        $this->displayBlock('flash_data_off', $context, $blocks);
        // line 127
        echo "    </div>
     ";
    }

    // line 107
    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 108
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-error fade in\"> 
            <span class=\"close\"></span>
                            ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 114
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-success fade in\"> 
            <span class=\"close\"></span>
                            ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 120
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
        <div class=\"alert alert-block alert-warning fade in\">
            <span class=\"close\"></span>
                            ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
        </div> 
                    ";
        }
        // line 126
        echo "                  ";
    }

    // line 129
    public function block_footer($context, array $blocks = array())
    {
        // line 130
        echo "    <div id=\"footer\">
    </div>
            ";
    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        // line 134
        echo "             ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 135
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
        return array (  223 => 135,  218 => 134,  215 => 133,  209 => 130,  206 => 129,  202 => 126,  196 => 123,  189 => 120,  183 => 117,  176 => 114,  170 => 111,  163 => 108,  160 => 107,  155 => 127,  153 => 107,  100 => 56,  92 => 49,  87 => 47,  80 => 46,  78 => 45,  39 => 8,  35 => 6,  32 => 5,  115 => 50,  108 => 45,  96 => 39,  90 => 36,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  57 => 26,  54 => 25,  50 => 24,  29 => 4,  26 => 5,);
    }
}
