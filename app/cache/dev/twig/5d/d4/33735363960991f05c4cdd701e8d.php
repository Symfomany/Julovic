<?php

/* SensioLabsDoctrineQueryStatisticsBundle:Collector:doctrinequerystatistics.html.twig */
class __TwigTemplate_5dd433735363960991f05c4cdd701e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/db.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Doctrine Statistics</strong>
</span>
";
    }

    // line 10
    public function block_panel($context, array $blocks = array())
    {
        // line 11
        echo "<h2>All Queries (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "queriesCount"), "html", null, true);
        echo ")</h2>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 13
            echo "    <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
    <table>
        <tr>
            <th>SQL</th>
            <th>Parameters</th>
        </tr>

        ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 21
                echo "        <tr>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "query"), "sql"), "html", null, true);
                echo "</td>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "query"), "params")), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "
<h2>Identical Queries (";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "identicalQueriesCount"), "html", null, true);
        echo ")</h2>
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "identicalQueries"));
        foreach ($context['_seq'] as $context["connection"] => $context["identicalQueries"]) {
            // line 31
            echo "    <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
    <table>
        <tr>
            <th>Times called</th>
            <th>SQL</th>
            <th>Parameters</th>
        </tr>

        ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "identicalQueries"));
            foreach ($context['_seq'] as $context["_key"] => $context["identicalQuery"]) {
                // line 40
                echo "        <tr>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "identicalQuery"), "count"), "html", null, true);
                echo "</td>
            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "identicalQuery"), "sql"), "html", null, true);
                echo "</td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "identicalQuery"), "parameters")), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identicalQuery'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 46
            echo "    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['identicalQueries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "
<h2>Similar Queries (";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "similarQueriesCount"), "html", null, true);
        echo ")</h2>
";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "similarQueries"));
        foreach ($context['_seq'] as $context["connection"] => $context["similarQueries"]) {
            // line 51
            echo "    <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
    <table>
        <tr>
            <th>Times called</th>
            <th>SQL</th>
        </tr>

        ";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "similarQueries"));
            foreach ($context['_seq'] as $context["_key"] => $context["similarQuery"]) {
                // line 59
                echo "            <tr>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "similarQuery"), "count"), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "similarQuery"), "sql"), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similarQuery'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 64
            echo "    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['similarQueries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "SensioLabsDoctrineQueryStatisticsBundle:Collector:doctrinequerystatistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  178 => 61,  171 => 59,  148 => 49,  55 => 16,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  192 => 90,  177 => 85,  159 => 79,  157 => 78,  144 => 72,  140 => 71,  135 => 69,  122 => 59,  115 => 55,  97 => 43,  83 => 38,  51 => 22,  43 => 19,  26 => 3,  203 => 93,  176 => 62,  174 => 60,  168 => 60,  158 => 59,  130 => 47,  100 => 34,  88 => 28,  79 => 24,  202 => 71,  189 => 70,  183 => 68,  165 => 64,  162 => 80,  151 => 62,  145 => 48,  136 => 55,  132 => 54,  125 => 42,  120 => 51,  93 => 31,  89 => 40,  85 => 34,  82 => 25,  47 => 13,  25 => 3,  75 => 23,  69 => 31,  66 => 19,  60 => 16,  56 => 16,  54 => 23,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 76,  200 => 92,  194 => 66,  191 => 68,  188 => 67,  186 => 87,  181 => 63,  175 => 59,  172 => 67,  169 => 83,  167 => 58,  160 => 53,  141 => 56,  128 => 53,  105 => 49,  101 => 25,  95 => 23,  86 => 39,  80 => 19,  77 => 23,  74 => 17,  71 => 22,  65 => 23,  59 => 12,  45 => 11,  34 => 16,  68 => 21,  61 => 16,  44 => 11,  37 => 17,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 57,  137 => 45,  121 => 41,  118 => 40,  113 => 44,  109 => 38,  106 => 41,  104 => 36,  99 => 33,  96 => 32,  94 => 29,  90 => 21,  78 => 32,  72 => 32,  62 => 19,  53 => 13,  50 => 14,  48 => 10,  41 => 10,  39 => 8,  35 => 8,  30 => 4,  27 => 3,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 121,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 70,  180 => 86,  170 => 64,  163 => 54,  156 => 51,  152 => 50,  149 => 47,  146 => 73,  138 => 46,  133 => 47,  129 => 43,  126 => 45,  123 => 44,  117 => 45,  114 => 39,  111 => 40,  108 => 50,  102 => 31,  98 => 30,  91 => 28,  87 => 29,  84 => 26,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 20,  58 => 25,  52 => 12,  49 => 12,  46 => 20,  40 => 18,  36 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
