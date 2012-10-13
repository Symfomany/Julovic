<?php

/* ::base.html.twig */
class __TwigTemplate_f6ed2257997b6cca3aa0c36dd1c72202 extends Twig_Template
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "            
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <!-- Le styles -->
                <link href=\"/css/reset.css\" rel=\"stylesheet\">
                <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
                <link href=\"/css/bootstrap-responsive.css\" rel=\"stylesheet\">
                <link href=\"/css/docs.css\" rel=\"stylesheet\">
                <link href=\"/css/pretify.css\" rel=\"stylesheet\">
                <link href=\"/css/main.css\" rel=\"stylesheet\">
                <link href=\"/css/jHtmlArea.css\" rel=\"stylesheet\">
                <link href=\"/css/dot-luv/jquery-ui-1.8.24.custom.css\" rel=\"stylesheet\">
                <link href=\"/css/jquery.fancybox.css\" rel=\"stylesheet\">
                <link href=\"/css/uniform.default.css\" rel=\"stylesheet\">
                <link href=\"/css/select2.css\" rel=\"stylesheet\">
                <link href=\"/css/fullcalendar.css\" rel=\"stylesheet\">
                <link href=\"/css/tipsy.css\" rel=\"stylesheet\">
                <link href=\"/css/jquery.ui.timepicker.css\" rel=\"stylesheet\">
       ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "               <!-- Le javascript
                    ================================================== -->
                    <!-- Placed at the end of the document so the pages load faster -->
                    <script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/jquery.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/google-code-prettify/prettify.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/bootstrap-affix.js\"></script>
                    <script type=\"text/javascript\" src=\"http://twitter.github.com/bootstrap/assets/js/application.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.mousewheel-3.0.6.pack.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.easing.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.fancybox.pack.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery-ui-1.8.24.custom.min.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jhtml.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.uniform.min.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/select2.min.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.overscroll.min.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/modernizr.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/fullcalendar.min.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.tipsy.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.knob.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.carouFredSel.js\"></script>
                    ";
        // line 64
        echo "                    <script type=\"text/javascript\" src=\"/js/jquery.scrollTo.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jquery.ui.timepicker.js\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
        echo "\"></script>

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
        return array (  129 => 66,  125 => 64,  63 => 8,  60 => 7,  54 => 6,  48 => 100,  46 => 29,  43 => 28,  41 => 27,  34 => 24,  32 => 7,  21 => 1,  86 => 29,  81 => 28,  78 => 27,  74 => 19,  71 => 18,  62 => 20,  59 => 18,  51 => 14,  39 => 8,  31 => 5,  28 => 6,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 59,  144 => 52,  133 => 67,  127 => 43,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  90 => 30,  87 => 29,  82 => 27,  68 => 23,  57 => 17,  53 => 15,  45 => 11,  42 => 10,  38 => 9,  36 => 7,  29 => 4,  26 => 3,);
    }
}
