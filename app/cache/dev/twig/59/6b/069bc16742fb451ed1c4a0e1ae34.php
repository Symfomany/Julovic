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
        // line 28
        echo "     
";
        // line 29
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        echo "    
";
        // line 39
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 50
        echo "    
    
    
";
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('form_label', $context, $blocks);
        // line 69
        echo "             
    
";
        // line 71
        $this->displayBlock('form_row', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('form_errors', $context, $blocks);
        // line 103
        echo "                
";
        // line 104
        $this->displayBlock('date_widget', $context, $blocks);
        // line 118
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

    // line 29
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"controls\">
    ";
        // line 31
        ob_start();
        // line 32
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 33
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
        // line 35
        echo "</div>
";
    }

    // line 39
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 40
        ob_start();
        // line 41
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 42
        if (twig_test_empty($this->getAttribute($this->getContext($context, "form"), "parent"))) {
            // line 43
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        ";
        }
        // line 45
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 55
    public function block_form_label($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 57
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 58
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 59
            echo "    ";
        }
        // line 60
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 61
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 62
            echo "    ";
        }
        // line 63
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 64
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 65
            echo "    ";
        }
        // line 66
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

    // line 71
    public function block_form_row($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        <div class=\"control-group\">
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
    }

    // line 85
    public function block_form_errors($context, array $blocks = array())
    {
        // line 86
        echo "        ";
        ob_start();
        // line 87
        echo "            ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 88
            echo "            <div class=\"alert alert-error\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
            <ul>
                ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 92
                echo "                    <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getContext($context, "error"), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messagePluralization"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"))), "html", null, true);
                // line 96
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "            </ul>
        </div>
            ";
        }
        // line 101
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 104
    public function block_date_widget($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 107
            echo "         ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 109
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 110
            echo strtr($this->getContext($context, "date_pattern"), array("{{ day }}" =>             // line 111
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "day"), 'widget'), "{{ month }}" =>             // line 112
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "month"), 'widget'), "{{ year }}" =>             // line 113
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "year"), 'widget')));
            // line 114
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
        return array (  367 => 114,  365 => 113,  364 => 112,  363 => 111,  362 => 110,  357 => 109,  351 => 107,  348 => 106,  346 => 105,  343 => 104,  338 => 101,  333 => 98,  326 => 96,  323 => 92,  319 => 91,  314 => 88,  311 => 87,  308 => 86,  305 => 85,  298 => 82,  295 => 81,  287 => 76,  283 => 75,  279 => 74,  276 => 73,  273 => 72,  270 => 71,  249 => 66,  246 => 65,  243 => 64,  240 => 63,  237 => 62,  234 => 61,  231 => 60,  228 => 59,  225 => 58,  222 => 57,  220 => 56,  217 => 55,  209 => 46,  204 => 45,  198 => 43,  196 => 42,  191 => 41,  189 => 40,  186 => 39,  181 => 35,  167 => 33,  164 => 32,  162 => 31,  159 => 30,  156 => 29,  147 => 22,  141 => 20,  138 => 19,  136 => 18,  133 => 17,  127 => 12,  118 => 10,  113 => 9,  110 => 8,  101 => 6,  96 => 5,  93 => 4,  91 => 3,  88 => 2,  84 => 118,  82 => 104,  79 => 103,  77 => 85,  74 => 84,  72 => 81,  69 => 80,  67 => 71,  63 => 69,  61 => 55,  58 => 54,  53 => 50,  51 => 39,  48 => 38,  45 => 37,  43 => 29,  40 => 28,  36 => 26,  34 => 17,  31 => 16,  28 => 15,  26 => 2,);
    }
}
