<?php

/* SiteAdminBundle:Form:error.html.twig */
class __TwigTemplate_596b069bc16742fb451ed1c4a0e1ae34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'date_widget' => array($this, 'block_date_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field_errors', $context, $blocks);
        // line 14
        echo "                
";
        // line 15
        $this->displayBlock('date_widget', $context, $blocks);
        // line 29
        echo "  ";
    }

    // line 1
    public function block_field_errors($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 1)) {
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "            <p class=\"tutos\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 9
                echo "             <p class=\"tuto\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_date_widget($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 18
            echo "         ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 20
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 21
            echo strtr($this->getContext($context, "date_pattern"), array("{{ day }}" =>             // line 22
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "day"), 'widget'), "{{ month }}" =>             // line 23
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "month"), 'widget'), "{{ year }}" =>             // line 24
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "year"), 'widget')));
            // line 25
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Form:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  97 => 24,  95 => 22,  94 => 21,  89 => 20,  83 => 18,  80 => 17,  75 => 15,  69 => 11,  52 => 7,  35 => 3,  19 => 1,  33 => 2,  24 => 15,  20 => 2,  218 => 68,  204 => 67,  200 => 65,  196 => 63,  185 => 60,  178 => 59,  174 => 58,  171 => 57,  169 => 56,  146 => 54,  138 => 51,  131 => 50,  123 => 47,  113 => 45,  76 => 35,  72 => 34,  64 => 28,  61 => 27,  55 => 8,  49 => 20,  40 => 16,  30 => 1,  17 => 1,  129 => 66,  125 => 64,  63 => 8,  60 => 9,  54 => 6,  48 => 100,  46 => 29,  43 => 5,  41 => 27,  34 => 24,  32 => 14,  21 => 14,  86 => 29,  81 => 28,  78 => 16,  74 => 19,  71 => 18,  62 => 20,  59 => 18,  51 => 14,  39 => 8,  31 => 5,  28 => 4,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 55,  144 => 52,  133 => 67,  127 => 43,  120 => 39,  116 => 46,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 23,  90 => 30,  87 => 37,  82 => 27,  68 => 23,  57 => 17,  53 => 15,  45 => 19,  42 => 10,  38 => 4,  36 => 7,  29 => 4,  26 => 29,);
    }
}
