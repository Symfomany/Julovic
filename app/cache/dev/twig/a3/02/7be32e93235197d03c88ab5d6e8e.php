<?php

/* SiteAdminBundle:Pages:new.html.twig */
class __TwigTemplate_a3027be32e93235197d03c88ab5d6e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteAdminBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<h1>Pages creation</h1>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <button type=\"submit\" class=\"btn-primary btn-large\">Create</button>
    </p>
</form>
            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pages"), "html", null, true);
        echo "\">
                        <i class=\"icon-share-alt\"></i> Back to the list
                    </a>
                </li>
            </ul>
 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Pages:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  42 => 10,  36 => 9,  29 => 5,  26 => 4,);
    }
}
