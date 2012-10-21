<?php

/* SiteAdminBundle:Articles:new.html.twig */
class __TwigTemplate_f419c78fd50c367caeebaed43cdc502a extends Twig_Template
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

<h1>Articles creation</h1>


<form  action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_create"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget');
        echo "
                
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "resume"), 'label');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "resume"), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "resume"), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'label');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "notes"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "notes"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "notes"), 'widget', array("attr" => array("class" => "knobed")));
        echo "
                
                
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "medias"));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 32
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "media"), 'label');
            echo "
                        ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "media"), 'errors');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "media"), 'widget');
            echo "  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                
                
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                
                <p>
                    <button type=\"submit\" class=\"btn-primary btn-large\">Create</button>
                </p>
</form>
            <ul class=\"record_actions\">
                <li>
                    <a class=\"btn\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles"), "html", null, true);
        echo "\">
                        <i class=\"icon-share-alt\"></i> Back to the list
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
        return array (  136 => 46,  125 => 38,  121 => 36,  113 => 34,  109 => 33,  104 => 32,  100 => 31,  94 => 28,  90 => 27,  86 => 26,  81 => 24,  77 => 23,  73 => 22,  68 => 20,  64 => 19,  60 => 18,  55 => 16,  51 => 15,  47 => 14,  42 => 12,  37 => 10,  29 => 5,  26 => 4,);
    }
}
