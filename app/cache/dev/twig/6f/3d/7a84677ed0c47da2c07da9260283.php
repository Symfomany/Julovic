<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_6f3d7a84677ed0c47da2c07da9260283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute($this->getContext($context, "collector"), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute($this->getContext($context, "collector"), "querycount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount") > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 21
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        echo ((($this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount") > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/db.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 37
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (("explain" == $this->getContext($context, "page"))) {
            // line 44
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("DoctrineBundle:Profiler:explain", array("token" => $this->getContext($context, "token"), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "query"), "method")), array());
            // line 50
            echo "    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_queries($context, array $blocks = array())
    {
        // line 56
        echo "    <h2>Queries</h2>

    ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 59
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
        ";
            // line 60
            if (twig_test_empty($this->getContext($context, "queries"))) {
                // line 61
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 65
                echo "            <ul class=\"alt\">
                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 67
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                        <div>
                            ";
                    // line 69
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 70
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => $this->getContext($context, "token"), "page" => "explain", "connection" => $this->getContext($context, "connection"), "query" => $this->getContext($context, "i"))), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                <img alt=\"+\" src=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none;\" />
                            </a>
                            ";
                    }
                    // line 75
                    echo "                            <code>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "query"), "sql"), "html", null, true);
                    echo "</code>
                        </div>
                        <small>
                            <strong>Parameters</strong>: ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "query"), "params")), "html", null, true);
                    echo "<br />
                            <strong>Time</strong>: ";
                    // line 79
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "query"), "executionMS") * 1000)), "html", null, true);
                    echo " ms
                        </small>
                        ";
                    // line 81
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 82
                        echo "                        <div id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 84
                    echo "                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 86
                echo "            </ul>
        ";
            }
            // line 88
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "
    <h2>Database Connections</h2>

    ";
        // line 92
        if ($this->getAttribute($this->getContext($context, "collector"), "connections")) {
            // line 93
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "connections")));
            // line 94
            echo "    ";
        } else {
            // line 95
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 99
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 102
        if ($this->getAttribute($this->getContext($context, "collector"), "managers")) {
            // line 103
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "managers")));
            // line 104
            echo "    ";
        } else {
            // line 105
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 109
        echo "
    <h2>Mapping</h2>

    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "entities"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 113
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "manager"), "html", null, true);
            echo "</em></h3>
        ";
            // line 114
            if (twig_test_empty($this->getContext($context, "classes"))) {
                // line 115
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 117
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 125
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "classes"));
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 126
                    echo "                    <tr>
                        <td>";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 129
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "mappingErrors", array(), "any", false, true), $this->getContext($context, "manager"), array(), "array", false, true), $this->getContext($context, "class"), array(), "array", true, true)) {
                        // line 130
                        echo "                                <ul>
                                    ";
                        // line 131
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "mappingErrors"), $this->getContext($context, "manager"), array(), "array"), $this->getContext($context, "class"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 132
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 134
                        echo "                                </ul>
                            ";
                    } else {
                        // line 136
                        echo "                                Valid
                            ";
                    }
                    // line 138
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 141
                echo "                </tbody>
            </table>
        ";
            }
            // line 144
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 145
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }
    //]]></script>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 145,  402 => 144,  397 => 141,  389 => 138,  385 => 136,  381 => 134,  372 => 132,  365 => 130,  363 => 129,  351 => 125,  335 => 114,  330 => 113,  326 => 112,  315 => 105,  302 => 99,  296 => 95,  288 => 92,  283 => 89,  269 => 88,  265 => 86,  242 => 82,  240 => 81,  235 => 79,  231 => 78,  218 => 72,  214 => 71,  197 => 67,  171 => 61,  164 => 59,  112 => 37,  148 => 55,  142 => 51,  127 => 45,  110 => 41,  76 => 21,  155 => 56,  134 => 44,  131 => 43,  55 => 11,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  192 => 90,  177 => 65,  159 => 79,  157 => 78,  144 => 72,  140 => 55,  135 => 69,  122 => 59,  115 => 42,  97 => 43,  83 => 25,  51 => 22,  43 => 8,  26 => 3,  203 => 69,  176 => 66,  174 => 84,  168 => 60,  158 => 59,  130 => 47,  100 => 30,  88 => 28,  79 => 25,  202 => 71,  189 => 70,  183 => 68,  165 => 64,  162 => 80,  151 => 54,  145 => 53,  136 => 47,  132 => 51,  125 => 52,  120 => 42,  93 => 33,  89 => 40,  85 => 28,  82 => 25,  47 => 13,  25 => 3,  75 => 33,  69 => 17,  66 => 19,  60 => 16,  56 => 16,  54 => 23,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 131,  364 => 155,  360 => 153,  358 => 127,  355 => 126,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 115,  328 => 140,  325 => 139,  318 => 135,  312 => 104,  309 => 103,  306 => 129,  304 => 128,  299 => 125,  290 => 93,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 75,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 70,  200 => 92,  194 => 69,  191 => 68,  188 => 67,  186 => 87,  181 => 63,  175 => 59,  172 => 67,  169 => 60,  167 => 82,  160 => 57,  141 => 48,  128 => 42,  105 => 49,  101 => 25,  95 => 23,  86 => 39,  80 => 19,  77 => 23,  74 => 17,  71 => 19,  65 => 15,  59 => 13,  45 => 9,  34 => 5,  68 => 20,  61 => 16,  44 => 7,  37 => 6,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 58,  143 => 56,  137 => 45,  121 => 35,  118 => 50,  113 => 44,  109 => 32,  106 => 31,  104 => 37,  99 => 32,  96 => 31,  94 => 31,  90 => 27,  78 => 32,  72 => 32,  62 => 14,  53 => 9,  50 => 14,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 3,  354 => 163,  345 => 160,  341 => 117,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 109,  314 => 145,  307 => 102,  300 => 137,  293 => 94,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 84,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 70,  180 => 66,  170 => 64,  163 => 58,  156 => 58,  152 => 75,  149 => 53,  146 => 73,  138 => 42,  133 => 47,  129 => 50,  126 => 44,  123 => 43,  117 => 36,  114 => 35,  111 => 40,  108 => 36,  102 => 33,  98 => 24,  91 => 28,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 28,  58 => 13,  52 => 10,  49 => 10,  46 => 8,  40 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
