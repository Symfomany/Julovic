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
        return array (  37 => 11,  20 => 3,  58 => 19,  18 => 1,  63 => 10,  48 => 7,  27 => 5,  25 => 7,  32 => 5,  175 => 54,  168 => 53,  136 => 48,  121 => 44,  101 => 34,  70 => 27,  51 => 17,  22 => 4,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  676 => 147,  674 => 146,  671 => 145,  663 => 139,  661 => 138,  660 => 137,  659 => 136,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  642 => 130,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  607 => 117,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  521 => 93,  519 => 92,  514 => 91,  511 => 90,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  377 => 47,  367 => 43,  365 => 42,  354 => 37,  351 => 36,  348 => 35,  343 => 33,  340 => 32,  327 => 26,  321 => 24,  319 => 23,  314 => 22,  312 => 21,  309 => 20,  293 => 16,  290 => 15,  288 => 14,  285 => 13,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  262 => 3,  258 => 331,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  246 => 325,  244 => 324,  234 => 314,  231 => 313,  229 => 307,  226 => 306,  218 => 296,  213 => 286,  206 => 265,  200 => 262,  177 => 221,  172 => 213,  169 => 212,  164 => 52,  162 => 199,  159 => 50,  152 => 185,  142 => 172,  139 => 171,  134 => 164,  127 => 145,  124 => 144,  104 => 101,  97 => 68,  94 => 67,  89 => 29,  84 => 27,  77 => 26,  69 => 19,  366 => 113,  364 => 112,  363 => 111,  362 => 41,  361 => 109,  356 => 108,  350 => 106,  347 => 105,  345 => 34,  342 => 103,  337 => 100,  332 => 27,  325 => 95,  322 => 91,  318 => 90,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  297 => 81,  294 => 80,  286 => 75,  282 => 74,  278 => 73,  275 => 72,  272 => 71,  269 => 70,  248 => 326,  245 => 64,  242 => 323,  239 => 322,  236 => 320,  233 => 60,  230 => 59,  224 => 299,  221 => 298,  216 => 287,  208 => 62,  197 => 44,  195 => 258,  188 => 239,  185 => 238,  180 => 222,  155 => 30,  137 => 165,  126 => 12,  117 => 114,  112 => 39,  109 => 107,  100 => 6,  76 => 84,  73 => 83,  66 => 11,  60 => 54,  54 => 18,  52 => 40,  41 => 29,  93 => 17,  86 => 41,  74 => 14,  68 => 12,  17 => 2,  227 => 58,  223 => 56,  219 => 55,  215 => 54,  211 => 271,  207 => 52,  203 => 264,  198 => 259,  194 => 61,  190 => 59,  186 => 57,  182 => 236,  174 => 219,  166 => 34,  161 => 51,  157 => 192,  153 => 37,  149 => 184,  145 => 35,  140 => 22,  132 => 157,  125 => 28,  119 => 128,  115 => 22,  111 => 21,  103 => 35,  95 => 5,  91 => 16,  79 => 40,  71 => 23,  64 => 21,  61 => 20,  55 => 19,  47 => 31,  44 => 30,  35 => 25,  33 => 18,  21 => 3,  189 => 75,  184 => 74,  181 => 73,  176 => 63,  170 => 42,  160 => 56,  154 => 191,  147 => 178,  144 => 177,  138 => 47,  131 => 43,  128 => 45,  116 => 37,  113 => 36,  107 => 102,  99 => 86,  96 => 29,  90 => 3,  83 => 117,  81 => 103,  78 => 26,  75 => 12,  72 => 24,  62 => 3,  59 => 9,  49 => 39,  46 => 15,  43 => 10,  40 => 12,  34 => 6,  31 => 8,  28 => 7,  201 => 80,  193 => 249,  178 => 44,  167 => 206,  163 => 33,  158 => 31,  146 => 49,  135 => 20,  129 => 156,  122 => 129,  118 => 43,  114 => 113,  110 => 36,  106 => 36,  102 => 87,  98 => 33,  92 => 30,  87 => 28,  82 => 34,  67 => 26,  57 => 53,  53 => 18,  45 => 14,  42 => 13,  38 => 8,  36 => 10,  29 => 7,  26 => 6,);
    }
}
