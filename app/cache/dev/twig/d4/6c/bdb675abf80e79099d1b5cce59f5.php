<?php

/* SiteAdminBundle:Articles:edit.html.twig */
class __TwigTemplate_d46cbdb675abf80e79099d1b5cce59f5 extends Twig_Template
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<h1>Articles edit</h1>

<form novalidate=\"novalidate\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
                
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'errors');
        echo "
    
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "category"), 'widget');
        echo "
                    
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "title"), 'label');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "title"), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "title"), 'widget');
        echo "
                
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "resume"), 'label');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "resume"), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "resume"), 'widget');
        echo "
                
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "content"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "content"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "content"), 'widget');
        echo "
                
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "notes"), 'label');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "notes"), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "notes"), 'widget', array("attr" => array("class" => "knobed")));
        echo "
                
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "edit_form"), "active"), 'widget');
        echo "  
                
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'rest');
        echo "
                
                <p>
        <button type=\"submit\" class=\"btn\">edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles"), "html", null, true);
        echo "\">
            <i class=\"icon-share-alt\"></i> Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\" class=\"btn\">Delete</button>
        </form>
    </li>
</ul>

 ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  146 => 52,  138 => 47,  126 => 38,  121 => 36,  117 => 35,  113 => 34,  108 => 32,  104 => 31,  100 => 30,  95 => 28,  91 => 27,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  56 => 16,  52 => 15,  48 => 14,  43 => 12,  36 => 10,  29 => 6,  26 => 5,);
    }
}
