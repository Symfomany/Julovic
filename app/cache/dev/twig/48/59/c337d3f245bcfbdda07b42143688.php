<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_4859c337d3f245bcfbdda07b42143688 extends Twig_Template
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
        echo "<div class=\"block\">
    ";
        // line 2
        if (($this->getContext($context, "count") > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (($this->getContext($context, "count") - $this->getContext($context, "position")) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($this->getContext($context, "count") + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(strtr(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message")), array("
" => "<br />")));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "', 'traces'); switchIcons('icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_open', 'icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("display") : ("hidden"));
            echo "\" />
                <img class=\"toggle\" id=\"icon_traces_";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, "count"))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces_link_";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list_exception\" id=\"traces_";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "position"), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == $this->getContext($context, "count"))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => $this->getContext($context, "position"), "i" => $this->getContext($context, "i"), "trace" => $this->getContext($context, "trace")));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  97 => 22,  95 => 21,  92 => 20,  88 => 19,  82 => 18,  78 => 17,  75 => 16,  71 => 14,  67 => 12,  57 => 9,  49 => 8,  40 => 7,  25 => 4,  22 => 3,  20 => 2,  223 => 95,  214 => 89,  210 => 87,  203 => 83,  199 => 82,  194 => 79,  192 => 78,  189 => 77,  187 => 76,  184 => 75,  178 => 71,  176 => 70,  170 => 66,  161 => 62,  157 => 60,  155 => 59,  152 => 58,  145 => 54,  141 => 53,  136 => 50,  134 => 49,  130 => 47,  128 => 46,  125 => 45,  119 => 44,  116 => 43,  112 => 42,  102 => 35,  98 => 33,  93 => 30,  76 => 27,  73 => 26,  69 => 25,  61 => 23,  58 => 22,  56 => 21,  38 => 6,  31 => 5,  17 => 1,  59 => 12,  53 => 6,  46 => 18,  37 => 8,  33 => 7,  29 => 6,  24 => 6,  19 => 1,  44 => 12,  41 => 7,  30 => 4,  27 => 3,);
    }
}
