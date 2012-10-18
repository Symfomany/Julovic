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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "            
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <!-- Le styles -->
                <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/pretify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/jHtmlArea.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/dot-luv/jquery-ui-1.8.24.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/tipsy.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/css/jquery.ui.timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
       ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "                    <script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
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
                    
                    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery-ui-1.8.24.custom.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jhtml.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/select2.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.overscroll.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/modernizr.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.tipsy.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.carouFredSel.js"), "html", null, true);
        echo "\"></script>
                    ";
        // line 64
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.scrollTo.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.ui.timepicker.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jscolor.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/wysihtml5-0.3.0.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\">
                            \$.cookie('cookie_flash', true);
                    </script>
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
        return array (  236 => 71,  232 => 70,  228 => 69,  224 => 68,  220 => 67,  216 => 66,  212 => 65,  207 => 64,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  135 => 32,  132 => 31,  128 => 29,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  64 => 9,  61 => 8,  55 => 7,  49 => 103,  47 => 31,  44 => 30,  42 => 28,  35 => 25,  33 => 8,  29 => 7,  21 => 1,);
    }
}
