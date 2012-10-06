<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_e3869dfee1f09f19bcebc6576951ae3e extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => $this->getContext($context, "position"), "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
    ";
        // line 18
        if (("normal" != $this->getContext($context, "position"))) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  17 => 1,  408 => 145,  402 => 144,  397 => 141,  389 => 138,  385 => 136,  381 => 134,  372 => 132,  365 => 130,  363 => 129,  351 => 125,  335 => 114,  330 => 113,  326 => 112,  315 => 105,  302 => 99,  296 => 95,  288 => 92,  283 => 89,  269 => 88,  265 => 86,  242 => 82,  240 => 81,  235 => 79,  231 => 78,  218 => 72,  214 => 71,  197 => 67,  171 => 61,  164 => 59,  112 => 37,  148 => 55,  142 => 51,  127 => 45,  110 => 41,  76 => 21,  155 => 56,  134 => 44,  131 => 43,  55 => 11,  32 => 5,  29 => 6,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  192 => 90,  177 => 65,  159 => 79,  157 => 78,  144 => 72,  140 => 55,  135 => 69,  122 => 59,  115 => 42,  97 => 43,  83 => 25,  51 => 22,  43 => 8,  26 => 3,  203 => 69,  176 => 66,  174 => 84,  168 => 60,  158 => 59,  130 => 47,  100 => 30,  88 => 28,  79 => 25,  202 => 71,  189 => 70,  183 => 68,  165 => 64,  162 => 80,  151 => 54,  145 => 53,  136 => 47,  132 => 51,  125 => 52,  120 => 42,  93 => 33,  89 => 40,  85 => 28,  82 => 25,  47 => 17,  25 => 4,  75 => 33,  69 => 17,  66 => 19,  60 => 25,  56 => 16,  54 => 23,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 131,  364 => 155,  360 => 153,  358 => 127,  355 => 126,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 115,  328 => 140,  325 => 139,  318 => 135,  312 => 104,  309 => 103,  306 => 129,  304 => 128,  299 => 125,  290 => 93,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 75,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 70,  200 => 92,  194 => 69,  191 => 68,  188 => 67,  186 => 87,  181 => 63,  175 => 59,  172 => 67,  169 => 60,  167 => 82,  160 => 57,  141 => 48,  128 => 42,  105 => 49,  101 => 25,  95 => 23,  86 => 39,  80 => 19,  77 => 23,  74 => 17,  71 => 19,  65 => 15,  59 => 13,  45 => 9,  34 => 5,  68 => 20,  61 => 16,  44 => 7,  37 => 9,  20 => 2,  161 => 32,  153 => 50,  150 => 49,  147 => 58,  143 => 56,  137 => 45,  121 => 35,  118 => 50,  113 => 44,  109 => 32,  106 => 31,  104 => 37,  99 => 32,  96 => 31,  94 => 31,  90 => 27,  78 => 32,  72 => 32,  62 => 14,  53 => 9,  50 => 18,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 3,  354 => 163,  345 => 160,  341 => 117,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 109,  314 => 145,  307 => 102,  300 => 137,  293 => 94,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 84,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 70,  180 => 66,  170 => 64,  163 => 58,  156 => 58,  152 => 75,  149 => 53,  146 => 73,  138 => 42,  133 => 47,  129 => 50,  126 => 44,  123 => 43,  117 => 36,  114 => 35,  111 => 40,  108 => 36,  102 => 33,  98 => 24,  91 => 28,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 28,  58 => 13,  52 => 19,  49 => 10,  46 => 8,  40 => 15,  36 => 6,  33 => 8,  31 => 4,  28 => 3,);
    }
}
