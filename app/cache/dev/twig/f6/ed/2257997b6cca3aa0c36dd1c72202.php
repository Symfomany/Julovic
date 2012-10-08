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
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "            
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
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

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
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
        return array (  89 => 29,  86 => 28,  81 => 26,  63 => 8,  60 => 7,  48 => 96,  46 => 28,  43 => 27,  41 => 26,  34 => 23,  32 => 7,  21 => 1,  378 => 186,  373 => 185,  370 => 184,  366 => 181,  360 => 178,  354 => 176,  348 => 173,  342 => 171,  336 => 168,  330 => 166,  324 => 163,  318 => 161,  315 => 160,  310 => 182,  308 => 160,  255 => 109,  225 => 82,  217 => 75,  203 => 74,  199 => 72,  195 => 70,  184 => 67,  177 => 66,  173 => 65,  170 => 64,  168 => 63,  155 => 62,  145 => 61,  137 => 58,  130 => 57,  122 => 54,  115 => 53,  112 => 52,  95 => 51,  73 => 32,  64 => 25,  56 => 23,  54 => 6,  39 => 9,  35 => 7,  31 => 5,  28 => 6,);
    }
}
