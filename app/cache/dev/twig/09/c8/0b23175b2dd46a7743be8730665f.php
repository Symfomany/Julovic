<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_09c80b23175b2dd46a7743be8730665f extends Twig_Template
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
        echo "<ul class=\"breadcrumb\">
    <li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">Home</a> <span class=\"divider\">/</span></li>
";
        // line 3
        if (twig_length_filter($this->env, $this->env->getExtension('breadcrumbs')->getBreadcrumbs())) {
            // line 4
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "breadcrumbs"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "      <li>
        ";
                // line 6
                if (($this->getAttribute($this->getContext($context, "b"), "url") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "b"), "url"), "html", null, true);
                    echo "\">";
                }
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "b"), "text"), $this->getAttribute($this->getContext($context, "b"), "translationParameters"), $this->getContext($context, "translation_domain"), $this->getContext($context, "locale")), "html", null, true);
                echo "
        ";
                // line 8
                if (($this->getAttribute($this->getContext($context, "b"), "url") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    echo "</a>";
                }
                // line 9
                echo "        ";
                if (($this->getContext($context, "separator") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    // line 10
                    echo "          <span class=\"divider\">/</span>
      ";
                }
                // line 12
                echo "    </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "  
";
        }
        // line 15
        echo "      </ul>
";
    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  69 => 12,  65 => 10,  58 => 8,  44 => 5,  24 => 3,  20 => 2,  17 => 1,  88 => 15,  85 => 27,  80 => 25,  62 => 9,  59 => 6,  47 => 6,  45 => 27,  42 => 26,  40 => 25,  33 => 22,  27 => 5,  21 => 1,  363 => 171,  358 => 170,  355 => 169,  351 => 166,  345 => 163,  339 => 161,  333 => 158,  327 => 156,  321 => 153,  315 => 151,  309 => 148,  303 => 146,  300 => 145,  295 => 167,  293 => 145,  242 => 96,  212 => 69,  203 => 61,  189 => 60,  185 => 58,  181 => 56,  170 => 53,  163 => 52,  159 => 51,  156 => 50,  154 => 49,  141 => 48,  131 => 47,  123 => 44,  116 => 43,  108 => 40,  101 => 39,  81 => 37,  72 => 31,  55 => 22,  53 => 7,  38 => 8,  34 => 6,  31 => 6,  28 => 4,  117 => 50,  110 => 45,  98 => 38,  90 => 36,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 24,  57 => 26,  54 => 25,  50 => 24,  29 => 6,  26 => 4,);
    }
}
