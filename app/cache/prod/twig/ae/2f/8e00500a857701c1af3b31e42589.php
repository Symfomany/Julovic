<?php

/* ::base.html.twig */
class __TwigTemplate_ae2f8e00500a857701c1af3b31e42589 extends Twig_Template
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
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "            
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
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
                <link href=\"/css/docs.css\" rel=\"stylesheet\">
                <link href=\"/css/prettify.css\" rel=\"stylesheet\">
                <link href=\"/css/main.css\" rel=\"stylesheet\">
                <link href=\"/css/jHtmlArea.css\" rel=\"stylesheet\">
                <link href=\"/css/dot-luv/jquery-ui-1.8.24.custom.css\" rel=\"stylesheet\">
                <link href=\"/css/jquery.fancybox.css\" rel=\"stylesheet\">
                <link href=\"/css/uniform.default.css\" rel=\"stylesheet\">
                <link href=\"/css/select2.css\" rel=\"stylesheet\">
                <link href=\"/css/fullcalendar.css\" rel=\"stylesheet\">
                <link href=\"/css/tipsy.css\" rel=\"stylesheet\">
       ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "               <!-- Le javascript
                    ================================================== -->
                    <!-- Placed at the end of the document so the pages load faster -->
                    <script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/jquery.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-affix.js\"></script>
                    <script src=\"http://twitter.github.com/bootstrap/assets/js/application.js\"></script>
                    <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js\"></script>
                    <script src=\"/js/jquery.mousewheel-3.0.6.pack.js\"></script>
                    <script src=\"/js/jquery.easing.js\"></script>
                    <script src=\"/js/jquery.fancybox.pack.js\"></script>
                    <script src=\"/js/jquery-ui-1.8.24.custom.min.js\"></script>
                    <script src=\"/js/jhtml.js\"></script>
                    <script src=\"/js/jquery.uniform.min.js\"></script>
                    <script src=\"/js/select2.min.js\"></script>
                    <script src=\"/js/jquery.overscroll.min.js\"></script>
                    <script src=\"/js/modernizr.js\"></script>
                    <script src=\"/js/fullcalendar.min.js\"></script>
                    <script src=\"/js/jquery.tipsy.js\"></script>
                    <script src=\"/js/jquery.knob.js\"></script>
                    <script src=\"/js/jquery.carouFredSel.js\"></script>
                    <script src=\"/js/jquery.timer.js\"></script>
                    <script src=\"/js/jquery.scrollTo.js\"></script>
                  <!--[if lt IE 9]>
                     <script type=\"text/javascript\" src=\"/js/excanvas.js\"></script>
                 <![endif]-->
                    
                    
                    
<!--[if IE]>
    <script type=\"text/javascript\">
    // <![CDATA[
        \$(document).ready(function(){
        if(!Modernizr.input.placeholder){
                \$(\"input\").each(
                function(){
                if(\$(this).val()==\"\" && \$(this).attr(\"placeholder\")!=\"\"){
                \$(this).val(\$(this).attr(\"placeholder\"));
                \$(this).focus(function(){
                if(\$(this).val()==\$(this).attr(\"placeholder\")) \$(this).val(\"\");
                });
                \$(this).blur(function(){
                if(\$(this).val()==\"\") \$(this).val(\$(this).attr(\"placeholder\"));
                });
                }
                });
            }
        });
    // ]]>
    </script>
<![endif]-->
       
    </script>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  80 => 25,  62 => 7,  53 => 5,  47 => 95,  45 => 27,  40 => 25,  31 => 6,  27 => 5,  21 => 1,  399 => 159,  394 => 158,  391 => 157,  385 => 154,  382 => 153,  378 => 150,  371 => 147,  364 => 145,  357 => 142,  350 => 140,  343 => 137,  336 => 135,  329 => 132,  322 => 130,  319 => 129,  314 => 151,  312 => 129,  258 => 77,  248 => 73,  244 => 72,  241 => 71,  227 => 59,  218 => 52,  208 => 50,  205 => 49,  197 => 43,  183 => 42,  179 => 40,  175 => 38,  162 => 35,  153 => 34,  148 => 33,  145 => 32,  142 => 31,  125 => 30,  112 => 29,  102 => 26,  93 => 25,  83 => 22,  74 => 21,  70 => 20,  52 => 19,  35 => 6,  32 => 5,  29 => 4,  85 => 27,  82 => 18,  75 => 10,  66 => 12,  64 => 10,  59 => 6,  56 => 8,  49 => 6,  46 => 5,  42 => 26,  39 => 8,  36 => 8,  33 => 22,  30 => 4,);
    }
}
