<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ceedd5e38c723cc6dcbe4043048c535c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  46 => 13,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  44 => 12,  41 => 7,  30 => 4,  27 => 3,  342 => 137,  337 => 136,  334 => 135,  330 => 133,  324 => 130,  318 => 128,  312 => 125,  306 => 123,  300 => 120,  294 => 118,  288 => 115,  282 => 113,  279 => 112,  275 => 134,  273 => 112,  243 => 86,  234 => 78,  220 => 77,  216 => 75,  212 => 73,  201 => 70,  194 => 69,  190 => 68,  187 => 67,  185 => 66,  172 => 65,  162 => 64,  154 => 61,  147 => 60,  139 => 57,  132 => 56,  129 => 55,  112 => 54,  103 => 47,  92 => 45,  88 => 44,  75 => 34,  63 => 24,  55 => 22,  53 => 6,  38 => 8,  34 => 6,  31 => 5,  28 => 4,);
    }
}
