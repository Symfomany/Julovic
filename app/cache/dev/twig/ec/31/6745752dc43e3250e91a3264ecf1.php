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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "            
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
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
                <link href=\"/css/reset.css\" rel=\"stylesheet\">
                <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
                <link href=\"/css/bootstrap-responsive.css\" rel=\"stylesheet\">
                <link href=\"/css/main.css\" rel=\"stylesheet\">
                <link href=\"/css/dot-luv/jquery-ui-1.8.24.custom.css\" rel=\"stylesheet\">
                <link href=\"/css/jquery.fancybox.css\" rel=\"stylesheet\">
                <link href=\"/css/uniform.default.css\" rel=\"stylesheet\">
       ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
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
        return array (  82 => 22,  79 => 21,  74 => 19,  62 => 7,  59 => 6,  42 => 20,  21 => 1,  61 => 16,  56 => 15,  53 => 5,  49 => 9,  46 => 8,  40 => 19,  38 => 8,  31 => 6,  28 => 4,  67 => 21,  60 => 17,  57 => 16,  51 => 13,  47 => 32,  45 => 21,  36 => 5,  33 => 16,  27 => 5,);
    }
}
