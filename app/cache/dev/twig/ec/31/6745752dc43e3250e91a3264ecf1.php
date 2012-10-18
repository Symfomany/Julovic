<?php

/* ::base_light.html.twig */
class __TwigTemplate_ec316745752dc43e3250e91a3264ecf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "            
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <!-- Le styles -->
                <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/dot-luv/jquery-ui-1.8.24.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                         
                         
       ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "               <!-- Le javascript
                    ================================================== -->
                    <!-- Placed at the end of the document so the pages load faster -->
                    <script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/jquery.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js\"></script>
                    <script src=\"/js/jquery-ui-1.8.24.custom.min.js\"></script>
                    <script src=\"/js/jquery.uniform.min.js\"></script>
                    <script src=\"/js/app_light.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "::base_light.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  97 => 21,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  62 => 7,  59 => 6,  53 => 5,  47 => 34,  45 => 23,  42 => 22,  40 => 21,  33 => 18,  31 => 6,  27 => 5,  21 => 1,);
    }
}
