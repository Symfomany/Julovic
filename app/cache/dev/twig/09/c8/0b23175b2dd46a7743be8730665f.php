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
        return array (  88 => 15,  84 => 13,  69 => 12,  65 => 10,  62 => 9,  58 => 8,  53 => 7,  47 => 6,  44 => 5,  26 => 4,  24 => 3,  20 => 2,  17 => 1,);
    }
}
