<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_cb2218f436f4bf2c45dbb29d1d703175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  64 => 15,  55 => 14,  39 => 9,  34 => 7,  23 => 4,  104 => 24,  97 => 22,  88 => 19,  82 => 19,  78 => 17,  75 => 16,  71 => 14,  67 => 12,  49 => 12,  40 => 7,  25 => 4,  22 => 3,  20 => 2,  223 => 95,  214 => 89,  210 => 87,  203 => 83,  199 => 82,  194 => 79,  192 => 78,  189 => 77,  187 => 76,  178 => 71,  170 => 66,  161 => 62,  157 => 60,  155 => 59,  152 => 58,  145 => 54,  141 => 53,  136 => 50,  134 => 49,  130 => 47,  128 => 46,  125 => 45,  119 => 44,  98 => 33,  93 => 30,  76 => 27,  69 => 25,  61 => 23,  58 => 22,  56 => 21,  31 => 4,  17 => 1,  59 => 12,  46 => 18,  37 => 8,  33 => 7,  24 => 3,  19 => 2,  44 => 11,  41 => 7,  30 => 4,  27 => 3,  184 => 75,  176 => 70,  158 => 58,  154 => 57,  149 => 54,  137 => 48,  131 => 45,  122 => 41,  116 => 43,  112 => 42,  109 => 38,  102 => 35,  95 => 21,  92 => 20,  90 => 34,  86 => 33,  80 => 32,  77 => 31,  73 => 26,  57 => 9,  53 => 13,  45 => 15,  42 => 10,  38 => 6,  36 => 10,  29 => 5,  26 => 5,);
    }
}
