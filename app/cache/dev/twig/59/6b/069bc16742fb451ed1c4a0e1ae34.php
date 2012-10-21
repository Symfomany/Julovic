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
        // line 16
        echo "     
";
        // line 17
        $this->displayBlock('form_widget', $context, $blocks);
        // line 26
        echo "             
";
        // line 27
        echo "     
";
        // line 28
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        echo "    
";
        // line 38
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 49
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

    // line 17
    public function block_form_widget($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 20
            echo "        ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 22
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"controls\">
    ";
        // line 30
        ob_start();
        // line 31
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 32
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
        // line 34
        echo "</div>
";
    }

    // line 38
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 39
        ob_start();
        // line 40
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 41
        if (twig_test_empty($this->getAttribute($this->getContext($context, "form"), "parent"))) {
            // line 42
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        ";
        }
        // line 44
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 45
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
        return array (  366 => 113,  364 => 112,  363 => 111,  362 => 110,  361 => 109,  356 => 108,  350 => 106,  347 => 105,  345 => 104,  342 => 103,  337 => 100,  332 => 97,  325 => 95,  322 => 91,  318 => 90,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  297 => 81,  294 => 80,  286 => 75,  282 => 74,  278 => 73,  275 => 72,  272 => 71,  269 => 70,  248 => 65,  245 => 64,  242 => 63,  239 => 62,  236 => 61,  233 => 60,  230 => 59,  224 => 57,  221 => 56,  216 => 54,  203 => 44,  197 => 42,  195 => 41,  188 => 39,  185 => 38,  180 => 34,  166 => 32,  155 => 28,  126 => 12,  117 => 10,  109 => 8,  100 => 6,  90 => 3,  81 => 103,  76 => 84,  73 => 83,  68 => 79,  66 => 70,  62 => 68,  50 => 38,  39 => 27,  34 => 17,  32 => 6,  208 => 45,  164 => 52,  93 => 36,  78 => 102,  70 => 27,  51 => 18,  22 => 2,  17 => 1,  231 => 77,  227 => 58,  223 => 75,  219 => 55,  215 => 73,  211 => 72,  207 => 71,  202 => 70,  190 => 40,  182 => 64,  174 => 62,  170 => 61,  161 => 30,  157 => 57,  153 => 56,  144 => 53,  140 => 20,  137 => 19,  132 => 17,  128 => 45,  125 => 28,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  91 => 16,  83 => 117,  79 => 13,  75 => 12,  71 => 80,  64 => 9,  61 => 22,  55 => 19,  49 => 109,  47 => 37,  44 => 36,  35 => 25,  33 => 8,  21 => 1,  198 => 68,  194 => 61,  189 => 77,  186 => 57,  181 => 65,  175 => 54,  168 => 53,  165 => 60,  159 => 50,  152 => 52,  149 => 55,  143 => 49,  136 => 48,  133 => 44,  127 => 42,  121 => 44,  112 => 9,  104 => 32,  101 => 42,  95 => 5,  88 => 25,  86 => 24,  80 => 21,  77 => 20,  74 => 19,  63 => 67,  60 => 54,  58 => 18,  54 => 16,  52 => 49,  46 => 15,  43 => 11,  40 => 9,  37 => 8,  31 => 16,  28 => 15,  201 => 80,  193 => 75,  178 => 63,  167 => 63,  163 => 31,  158 => 29,  146 => 22,  135 => 18,  129 => 43,  122 => 39,  118 => 43,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  92 => 4,  87 => 2,  82 => 34,  67 => 26,  57 => 53,  53 => 18,  45 => 13,  42 => 28,  38 => 13,  36 => 26,  29 => 7,  26 => 2,);
    }
}
