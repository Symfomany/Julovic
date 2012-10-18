<?php

/* SiteAdminBundle:Pagination:sliding.html.twig */
class __TwigTemplate_f19a124a5e841a83d22a0bc466aea8bb extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if (($this->getContext($context, "pageCount") > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    <ul>
    ";
            // line 6
            if ((array_key_exists("first", $context) && ($this->getContext($context, "current") != $this->getContext($context, "first")))) {
                // line 7
                echo "      <li class=\"first\">
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "first")))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </li> 
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "        <li class=\"previous\">
            <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "previous")))), "html", null, true);
                echo "\">Prev</a>
        </li>
    ";
            }
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagesInRange"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "         ";
                if (($this->getContext($context, "page") != $this->getContext($context, "current"))) {
                    // line 20
                    echo "            <li class=\"page\">
                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 24
                    echo "            <li class=\"current\"><a>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></span>
        ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "
    ";
            // line 28
            if (array_key_exists("next", $context)) {
                // line 29
                echo "        <li class=\"next\">
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "next")))), "html", null, true);
                echo "\">Next</a>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((array_key_exists("last", $context) && ($this->getContext($context, "current") != $this->getContext($context, "last")))) {
                // line 35
                echo "         <li class=\"last\">
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "route"), twig_array_merge($this->getContext($context, "query"), array($this->getContext($context, "pageParameterName") => $this->getContext($context, "last")))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </li> 
    ";
            }
            // line 39
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  101 => 34,  98 => 33,  78 => 26,  61 => 20,  58 => 19,  18 => 1,  93 => 17,  68 => 12,  66 => 11,  27 => 5,  25 => 2,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  676 => 147,  674 => 146,  671 => 145,  663 => 139,  661 => 138,  660 => 137,  659 => 136,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  642 => 130,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  607 => 117,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  521 => 93,  519 => 92,  514 => 91,  511 => 90,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  377 => 47,  367 => 43,  365 => 42,  362 => 41,  354 => 37,  351 => 36,  348 => 35,  345 => 34,  343 => 33,  340 => 32,  332 => 27,  327 => 26,  321 => 24,  319 => 23,  314 => 22,  312 => 21,  309 => 20,  293 => 16,  290 => 15,  288 => 14,  285 => 13,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  262 => 3,  258 => 331,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  248 => 326,  246 => 325,  244 => 324,  242 => 323,  239 => 322,  236 => 320,  234 => 314,  231 => 313,  229 => 307,  226 => 306,  224 => 299,  221 => 298,  218 => 296,  216 => 287,  213 => 286,  211 => 271,  208 => 270,  206 => 265,  203 => 264,  200 => 262,  198 => 259,  195 => 258,  193 => 249,  190 => 248,  188 => 239,  182 => 236,  174 => 219,  169 => 212,  167 => 206,  164 => 205,  162 => 199,  152 => 185,  129 => 156,  119 => 128,  107 => 102,  104 => 101,  99 => 86,  94 => 67,  89 => 29,  84 => 27,  72 => 24,  69 => 19,  64 => 21,  144 => 177,  142 => 172,  141 => 43,  128 => 38,  123 => 36,  120 => 35,  115 => 32,  110 => 29,  100 => 23,  96 => 22,  91 => 19,  85 => 17,  76 => 11,  67 => 13,  40 => 12,  37 => 11,  22 => 4,  24 => 3,  20 => 3,  219 => 69,  205 => 68,  201 => 66,  197 => 64,  186 => 61,  179 => 60,  175 => 59,  170 => 57,  157 => 192,  147 => 178,  139 => 171,  132 => 157,  117 => 114,  114 => 113,  97 => 68,  88 => 18,  65 => 29,  56 => 24,  50 => 5,  33 => 49,  17 => 2,  135 => 69,  125 => 37,  87 => 28,  82 => 41,  63 => 10,  60 => 7,  54 => 18,  48 => 7,  46 => 20,  43 => 28,  41 => 17,  34 => 7,  32 => 5,  21 => 3,  189 => 73,  185 => 238,  180 => 222,  177 => 221,  172 => 213,  166 => 59,  159 => 198,  156 => 54,  150 => 52,  143 => 48,  140 => 42,  134 => 164,  127 => 145,  124 => 144,  118 => 38,  103 => 35,  79 => 40,  74 => 14,  71 => 23,  62 => 3,  59 => 9,  51 => 17,  39 => 8,  31 => 8,  28 => 7,  184 => 74,  176 => 69,  158 => 58,  154 => 191,  149 => 184,  137 => 165,  131 => 68,  122 => 129,  116 => 40,  112 => 39,  109 => 107,  102 => 87,  95 => 28,  92 => 30,  90 => 30,  86 => 24,  80 => 32,  77 => 26,  73 => 35,  57 => 17,  53 => 15,  45 => 14,  42 => 13,  38 => 8,  36 => 7,  29 => 6,  26 => 6,);
    }
}
