<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_fb29c282b2636c536ff4ca7512129171 extends Twig_Template
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
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/exception_detected.gif"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"text_exception\">
                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 14
        echo $this->env->getExtension('code')->formatFileFromText(strtr(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message")), array("
" => "<br />")));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "exception"), "class"));
        echo "
                </div>

                ";
        // line 21
        $context["previous_count"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
        // line 22
        echo "                ";
        if ($this->getContext($context, "previous_count")) {
            // line 23
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "previous_count"), "html", null, true);
            echo "</strong> linked Exception";
            echo ((($this->getContext($context, "previous_count") > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "allPrevious"));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 26
                echo "                                <li>
                                    ";
                // line 27
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getContext($context, "previous"), "class"));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_open', 'icon_traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
                echo "_close');\">&raquo;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "                        </ul>
                    </div>
                ";
        }
        // line 33
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html", null, true);
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 43
            echo "        ";
            $this->env->loadTemplate("TwigBundle:Exception:traces.html.twig")->display(array("exception" => $this->getContext($context, "e"), "position" => $this->getContext($context, "position"), "count" => $this->getContext($context, "previous_count")));
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
    ";
        // line 46
        if ($this->getContext($context, "logger")) {
            // line 47
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 49
            ob_start();
            // line 50
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 58
            echo "
                ";
            // line 59
            if ($this->getAttribute($this->getContext($context, "logger"), "counterrors")) {
                // line 60
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logger"), "counterrors"), "html", null, true);
                echo " error";
                echo ((($this->getAttribute($this->getContext($context, "logger"), "counterrors") > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 66
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 70
            $this->env->loadTemplate("TwigBundle:Exception:logs.html.twig")->display(array("logs" => $this->getAttribute($this->getContext($context, "logger"), "logs")));
            // line 71
            echo "            </div>

        </div>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if ($this->getContext($context, "currentContent")) {
            // line 77
            echo "        <div class=\"block\">
            ";
            // line 78
            ob_start();
            // line 79
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: visible; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 87
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 89
            echo twig_escape_filter($this->env, $this->getContext($context, "currentContent"), "html", null, true);
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 95
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 95,  214 => 89,  210 => 87,  203 => 83,  199 => 82,  194 => 79,  192 => 78,  189 => 77,  187 => 76,  184 => 75,  178 => 71,  176 => 70,  170 => 66,  161 => 62,  157 => 60,  155 => 59,  152 => 58,  145 => 54,  141 => 53,  136 => 50,  134 => 49,  130 => 47,  128 => 46,  125 => 45,  119 => 44,  116 => 43,  112 => 42,  102 => 35,  98 => 33,  93 => 30,  76 => 27,  73 => 26,  69 => 25,  61 => 23,  58 => 22,  56 => 21,  38 => 14,  31 => 10,  17 => 1,  59 => 12,  53 => 6,  46 => 18,  37 => 8,  33 => 7,  29 => 6,  24 => 6,  19 => 1,  44 => 12,  41 => 7,  30 => 4,  27 => 3,);
    }
}
