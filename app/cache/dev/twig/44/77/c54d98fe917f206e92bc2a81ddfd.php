<?php

/* WhiteOctoberBreadcrumbsBundle::breadcrumbs.html.twig */
class __TwigTemplate_4477c54d98fe917f206e92bc2a81ddfd extends Twig_Template
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
        if (twig_length_filter($this->env, $this->env->getExtension('breadcrumbs')->getBreadcrumbs())) {
            // line 2
            echo "  <ul id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "listId"), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "listClass"), "html", null, true);
            echo "\">
    ";
            // line 3
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
                // line 4
                echo "      <li>
        ";
                // line 5
                if (($this->getAttribute($this->getContext($context, "b"), "url") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "b"), "url"), "html", null, true);
                    echo "\">";
                }
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "b"), "text"), $this->getAttribute($this->getContext($context, "b"), "translationParameters"), $this->getContext($context, "translation_domain"), $this->getContext($context, "locale")), "html", null, true);
                echo "
        ";
                // line 7
                if (($this->getAttribute($this->getContext($context, "b"), "url") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    echo "</a>";
                }
                // line 8
                echo "        
        ";
                // line 9
                if (($this->getContext($context, "separator") && (!$this->getAttribute($this->getContext($context, "loop"), "last")))) {
                    // line 10
                    echo "          <span class='separator'>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</span>
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
  </ul>
";
        }
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
        return array (  87 => 13,  66 => 10,  64 => 9,  61 => 8,  52 => 6,  46 => 5,  43 => 4,  19 => 2,  17 => 1,  88 => 28,  85 => 27,  80 => 25,  62 => 7,  59 => 6,  47 => 95,  45 => 27,  42 => 26,  40 => 25,  33 => 22,  27 => 5,  21 => 1,  376 => 184,  371 => 183,  368 => 182,  364 => 179,  358 => 176,  352 => 174,  346 => 171,  340 => 169,  334 => 166,  328 => 164,  322 => 161,  316 => 159,  313 => 158,  308 => 180,  306 => 158,  255 => 109,  225 => 82,  216 => 74,  202 => 73,  198 => 71,  194 => 69,  183 => 66,  176 => 65,  172 => 64,  169 => 63,  167 => 62,  154 => 61,  144 => 60,  136 => 57,  129 => 56,  121 => 53,  114 => 52,  111 => 51,  94 => 50,  72 => 12,  55 => 22,  53 => 5,  38 => 8,  34 => 6,  31 => 6,  28 => 4,  117 => 50,  110 => 45,  98 => 39,  90 => 36,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  67 => 28,  63 => 24,  57 => 7,  54 => 25,  50 => 24,  29 => 6,  26 => 3,);
    }
}
