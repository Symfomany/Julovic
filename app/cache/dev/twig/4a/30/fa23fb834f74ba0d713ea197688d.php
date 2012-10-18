<?php

/* SiteAdminBundle:Form:fields.html.twig */
class __TwigTemplate_4a30fa23fb834f74ba0d713ea197688d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'formule_widget' => array($this, 'block_formule_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'file_widget' => array($this, 'block_file_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field_row', $context, $blocks);
        // line 6
        echo "

";
        // line 9
        $this->displayBlock('formule_widget', $context, $blocks);
        // line 24
        echo "

";
        // line 27
        $this->displayBlock('form_label', $context, $blocks);
        // line 41
        echo "
            
";
        // line 43
        $this->displayBlock('form_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 59
        echo "    
    
";
        // line 61
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 71
        echo "    

";
        // line 73
        $this->displayBlock('file_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('money_widget', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('choice_widget', $context, $blocks);
    }

    // line 1
    public function block_field_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_formule_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        if ($this->getContext($context, "expanded")) {
            // line 12
            echo "               ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "                <label>
                    ";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
                echo "
                    <div style=\"display:none\">";
                // line 15
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "</div>
               </label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            ";
            // line 20
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 22
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_form_label($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 30
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 33
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 36
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    <label";
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

    // line 43
    public function block_form_widget($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 46
            echo "        ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 48
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 56
        echo "    <input type=\"";
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
    }

    // line 61
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 64
        if (twig_test_empty($this->getAttribute($this->getContext($context, "form"), "parent"))) {
            // line 65
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        ";
        }
        // line 67
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_file_widget($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_money_widget($context, array $blocks = array())
    {
        // line 80
        ob_start();
        // line 81
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 85
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 86
        ob_start();
        // line 87
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 88
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 89
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "    ";
        } else {
            // line 92
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 93
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 94
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 96
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 97
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 98
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 99
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 100
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 102
                echo "        ";
            }
            // line 103
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 104
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  358 => 104,  355 => 103,  352 => 102,  346 => 100,  344 => 99,  339 => 98,  336 => 97,  333 => 96,  327 => 94,  325 => 93,  317 => 92,  314 => 91,  305 => 89,  300 => 88,  297 => 87,  295 => 86,  292 => 85,  284 => 81,  282 => 80,  279 => 79,  271 => 75,  269 => 74,  266 => 73,  258 => 68,  253 => 67,  247 => 65,  245 => 64,  240 => 63,  238 => 62,  235 => 61,  219 => 56,  216 => 55,  214 => 54,  211 => 53,  202 => 48,  196 => 46,  193 => 45,  191 => 44,  188 => 43,  167 => 38,  164 => 37,  161 => 36,  158 => 35,  155 => 34,  152 => 33,  149 => 32,  146 => 31,  143 => 30,  140 => 29,  138 => 28,  135 => 27,  130 => 22,  124 => 20,  122 => 19,  119 => 18,  110 => 15,  106 => 14,  103 => 13,  98 => 12,  95 => 11,  92 => 10,  89 => 9,  81 => 3,  78 => 2,  75 => 1,  71 => 85,  68 => 84,  66 => 79,  63 => 78,  61 => 73,  57 => 71,  55 => 61,  51 => 59,  49 => 53,  46 => 52,  44 => 43,  40 => 41,  38 => 27,  34 => 24,  32 => 9,  28 => 6,  26 => 1,);
    }
}
