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
        // line 89
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Julovic CMF Framework";
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
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/twitter/jquery.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/twitter/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    
                    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery-ui-1.9.0.custom.min.js"), "html", null, true);
        echo "\"></script>
                   ";
        // line 40
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jhtml.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/select2.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.overscroll.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/modernizr.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.tipsy.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.carouFredSel.js"), "html", null, true);
        echo "\"></script>
                    ";
        // line 50
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.scrollTo.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.ui.timepicker.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/jscolor.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/wysihtml5-0.3.0.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siteadmin/js/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 57
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
        return array (  227 => 57,  223 => 56,  219 => 55,  215 => 54,  211 => 53,  207 => 52,  203 => 51,  198 => 50,  194 => 48,  190 => 47,  186 => 46,  182 => 45,  174 => 43,  166 => 41,  161 => 40,  157 => 38,  153 => 37,  149 => 36,  145 => 35,  140 => 33,  132 => 31,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  103 => 19,  95 => 17,  91 => 16,  79 => 13,  71 => 11,  64 => 9,  61 => 8,  55 => 7,  47 => 31,  44 => 30,  35 => 25,  33 => 8,  21 => 1,  189 => 75,  184 => 74,  181 => 73,  176 => 63,  170 => 42,  160 => 56,  154 => 54,  147 => 50,  144 => 49,  138 => 47,  131 => 43,  128 => 29,  116 => 37,  113 => 36,  107 => 20,  99 => 18,  96 => 29,  90 => 26,  83 => 14,  81 => 22,  78 => 21,  75 => 12,  72 => 19,  62 => 65,  59 => 19,  49 => 89,  46 => 12,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 4,  201 => 80,  193 => 76,  178 => 44,  167 => 63,  163 => 57,  158 => 59,  146 => 52,  135 => 32,  129 => 43,  122 => 40,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 32,  87 => 15,  82 => 30,  67 => 10,  57 => 18,  53 => 18,  45 => 13,  42 => 28,  38 => 9,  36 => 8,  29 => 7,  26 => 3,);
    }
}
