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
        return array (  88 => 28,  85 => 27,  80 => 25,  62 => 7,  59 => 6,  47 => 95,  45 => 27,  42 => 26,  40 => 25,  33 => 22,  27 => 5,  21 => 1,  363 => 171,  358 => 170,  355 => 169,  351 => 166,  345 => 163,  339 => 161,  333 => 158,  327 => 156,  321 => 153,  315 => 151,  309 => 148,  303 => 146,  300 => 145,  295 => 167,  293 => 145,  242 => 96,  212 => 69,  203 => 61,  189 => 60,  185 => 58,  181 => 56,  170 => 53,  163 => 52,  159 => 51,  156 => 50,  154 => 49,  141 => 48,  131 => 47,  123 => 44,  116 => 43,  108 => 40,  101 => 39,  81 => 37,  72 => 31,  55 => 22,  53 => 5,  38 => 8,  34 => 6,  31 => 6,  28 => 4,  117 => 50,  110 => 45,  98 => 38,  90 => 36,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 24,  57 => 26,  54 => 25,  50 => 24,  29 => 6,  26 => 5,);
    }
}
