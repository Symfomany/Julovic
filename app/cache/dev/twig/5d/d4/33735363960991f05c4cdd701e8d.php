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
        return array (  187 => 64,  178 => 61,  55 => 16,  32 => 5,  29 => 4,  786 => 468,  783 => 467,  772 => 465,  768 => 464,  764 => 462,  751 => 461,  725 => 456,  722 => 455,  703 => 453,  686 => 452,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  662 => 445,  659 => 444,  657 => 443,  640 => 442,  629 => 441,  614 => 436,  609 => 434,  605 => 433,  602 => 432,  588 => 431,  556 => 401,  538 => 398,  521 => 397,  518 => 396,  516 => 395,  511 => 393,  506 => 391,  179 => 87,  171 => 59,  164 => 82,  159 => 80,  154 => 77,  148 => 49,  142 => 73,  124 => 61,  110 => 52,  107 => 51,  26 => 3,  203 => 71,  176 => 86,  174 => 60,  168 => 60,  158 => 59,  130 => 47,  100 => 34,  88 => 41,  79 => 24,  202 => 94,  189 => 70,  183 => 68,  165 => 64,  162 => 63,  151 => 62,  145 => 48,  136 => 55,  132 => 54,  125 => 42,  120 => 51,  93 => 43,  89 => 35,  85 => 40,  82 => 25,  47 => 13,  25 => 3,  75 => 23,  69 => 20,  66 => 30,  60 => 27,  56 => 25,  54 => 13,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 95,  200 => 73,  194 => 66,  191 => 68,  188 => 89,  186 => 67,  181 => 63,  175 => 59,  172 => 67,  169 => 84,  167 => 58,  160 => 53,  141 => 56,  128 => 53,  105 => 27,  101 => 25,  95 => 23,  86 => 20,  80 => 19,  77 => 35,  74 => 34,  71 => 22,  65 => 23,  59 => 12,  45 => 11,  34 => 5,  68 => 21,  61 => 16,  44 => 11,  37 => 6,  20 => 1,  161 => 81,  153 => 50,  150 => 49,  147 => 48,  143 => 57,  137 => 71,  121 => 41,  118 => 40,  113 => 44,  109 => 38,  106 => 41,  104 => 36,  99 => 45,  96 => 32,  94 => 29,  90 => 21,  78 => 32,  72 => 21,  62 => 19,  53 => 13,  50 => 14,  48 => 22,  41 => 10,  39 => 8,  35 => 8,  30 => 4,  27 => 3,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 121,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 138,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 88,  180 => 64,  170 => 64,  163 => 54,  156 => 51,  152 => 50,  149 => 47,  146 => 74,  138 => 46,  133 => 47,  129 => 43,  126 => 45,  123 => 44,  117 => 57,  114 => 39,  111 => 40,  108 => 42,  102 => 31,  98 => 30,  91 => 28,  87 => 29,  84 => 26,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 20,  58 => 15,  52 => 12,  49 => 12,  46 => 15,  40 => 7,  36 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
