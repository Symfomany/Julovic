<?php

/* SiteAdminBundle:Articles:new.html.twig */
class __TwigTemplate_f419c78fd50c367caeebaed43cdc502a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<h1>Articles creation</h1>
        <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                <a class=\"fancybox\" href=\"/images/1_b.jpg\" data-fancybox-group=\"gallery\" title=\"Lorem ipsum dolor sit amet\">
                    <img src=\"/images/1_s.jpg\" alt=\"\" class=\"img-polaroid\" />
                </a>
                <p>
                    <button type=\"submit\" class=\"btn-primary btn-large\">Create</button>
                </p>
            </form>

            <ul class=\"record_actions\">
                <li>
                    <a class=\"btn\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles"), "html", null, true);
        echo "\">
                        Back to the list
                    </a>
                </li>
            </ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Articles:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  41 => 9,  35 => 8,  29 => 5,  26 => 4,);
    }
}
