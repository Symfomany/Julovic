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
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('field_errors', $context, $blocks);
        // line 15
        echo "             

             
";
        // line 18
        echo "     
";
        // line 19
        $this->displayBlock('form_widget', $context, $blocks);
        // line 28
        echo "             
";
        // line 29
        echo "     
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        echo "    
";
        // line 40
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        echo "    
";
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('form_label', $context, $blocks);
        // line 68
        echo "             
    
";
        // line 70
        $this->displayBlock('form_row', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('form_errors', $context, $blocks);
        // line 102
        echo "                
";
        // line 103
        $this->displayBlock('date_widget', $context, $blocks);
        // line 117
        echo "  ";
    }

    // line 2
    public function block_field_errors($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 1)) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "            <p class=\"tutos\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "             <p class=\"tuto\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 12
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_form_widget($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 22
            echo "        ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 24
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"controls\">
    ";
        // line 32
        ob_start();
        // line 33
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 34
        echo "        <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "</div>
";
    }

    // line 40
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 41
        ob_start();
        // line 42
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 43
        if (twig_test_empty($this->getAttribute($this->getContext($context, "form"), "parent"))) {
            // line 44
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        ";
        }
        // line 46
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_form_label($context, array $blocks = array())
    {
        // line 55
        ob_start();
        // line 56
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 57
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 58
            echo "    ";
        }
        // line 59
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 60
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 63
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 64
            echo "    ";
        }
        // line 65
        echo "    <label class=\"control-label\"  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_form_row($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        <div class=\"control-group\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
    }

    // line 84
    public function block_form_errors($context, array $blocks = array())
    {
        // line 85
        echo "        ";
        ob_start();
        // line 86
        echo "            ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 87
            echo "            <div class=\"alert alert-error\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <ul>
                ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                echo "                    <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getContext($context, "error"), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messagePluralization"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"))), "html", null, true);
                // line 95
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 97
            echo "            </ul>
        </div>
            ";
        }
        // line 100
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_date_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 106
            echo "         ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 108
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 109
            echo strtr($this->getContext($context, "date_pattern"), array("{{ day }}" =>             // line 110
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "day"), 'widget'), "{{ month }}" =>             // line 111
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "month"), 'widget'), "{{ year }}" =>             // line 112
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "year"), 'widget')));
            // line 113
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
        return array (  366 => 113,  364 => 112,  363 => 111,  362 => 110,  361 => 109,  356 => 108,  350 => 106,  347 => 105,  345 => 104,  342 => 103,  337 => 100,  332 => 97,  325 => 95,  322 => 91,  318 => 90,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  297 => 81,  294 => 80,  286 => 75,  282 => 74,  278 => 73,  275 => 72,  272 => 71,  269 => 70,  248 => 65,  245 => 64,  242 => 63,  239 => 62,  236 => 61,  233 => 60,  230 => 59,  224 => 57,  221 => 56,  216 => 54,  208 => 47,  197 => 44,  195 => 43,  188 => 41,  185 => 40,  180 => 36,  155 => 30,  137 => 21,  126 => 12,  117 => 10,  112 => 9,  109 => 8,  100 => 6,  76 => 84,  73 => 83,  66 => 70,  60 => 54,  54 => 51,  52 => 40,  41 => 29,  93 => 46,  86 => 41,  74 => 35,  68 => 79,  17 => 1,  227 => 58,  223 => 56,  219 => 55,  215 => 54,  211 => 53,  207 => 52,  203 => 46,  198 => 50,  194 => 48,  190 => 42,  186 => 46,  182 => 45,  174 => 43,  166 => 34,  161 => 32,  157 => 38,  153 => 37,  149 => 36,  145 => 35,  140 => 22,  132 => 19,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  103 => 19,  95 => 5,  91 => 16,  79 => 13,  71 => 80,  64 => 9,  61 => 8,  55 => 27,  47 => 31,  44 => 30,  35 => 25,  33 => 18,  21 => 1,  189 => 75,  184 => 74,  181 => 73,  176 => 63,  170 => 42,  160 => 56,  154 => 54,  147 => 50,  144 => 49,  138 => 47,  131 => 43,  128 => 29,  116 => 37,  113 => 36,  107 => 20,  99 => 47,  96 => 29,  90 => 3,  83 => 117,  81 => 103,  78 => 102,  75 => 12,  72 => 19,  62 => 68,  59 => 28,  49 => 39,  46 => 38,  43 => 10,  40 => 9,  34 => 6,  31 => 5,  28 => 15,  201 => 80,  193 => 76,  178 => 44,  167 => 63,  163 => 33,  158 => 31,  146 => 24,  135 => 20,  129 => 43,  122 => 40,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 4,  87 => 2,  82 => 30,  67 => 10,  57 => 53,  53 => 18,  45 => 13,  42 => 24,  38 => 28,  36 => 19,  29 => 7,  26 => 2,);
    }
}
