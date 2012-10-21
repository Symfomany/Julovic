<?php

/* SiteAdminBundle:Slot:flashdatas.html.twig */
class __TwigTemplate_9074d42a9647036d2d3a4f2d1cff58fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash_data_off' => array($this, 'block_flash_data_off'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('flash_data_off', $context, $blocks);
    }

    public function block_flash_data_off($context, array $blocks = array())
    {
        // line 2
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-info fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                        
                     ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 8
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-error fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                          
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "success"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-success fade in\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                          
                 ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "warning"), "method")) {
            echo " 
                <div class=\"alert alert-block alert-warning fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>                           
                  ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "warning"), "method"), "html", null, true);
            echo " 
                </div> 
                ";
        }
        // line 26
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SiteAdminBundle:Slot:flashdatas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  48 => 7,  27 => 5,  25 => 2,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  676 => 147,  674 => 146,  671 => 145,  663 => 139,  661 => 138,  660 => 137,  659 => 136,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  642 => 130,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  607 => 117,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  521 => 93,  519 => 92,  514 => 91,  511 => 90,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  377 => 47,  367 => 43,  365 => 42,  354 => 37,  351 => 36,  348 => 35,  343 => 33,  340 => 32,  327 => 26,  321 => 24,  319 => 23,  314 => 22,  312 => 21,  309 => 20,  293 => 16,  290 => 15,  288 => 14,  285 => 13,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  262 => 3,  258 => 331,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  246 => 325,  244 => 324,  234 => 314,  229 => 307,  226 => 306,  218 => 296,  213 => 286,  206 => 265,  200 => 262,  177 => 221,  172 => 213,  169 => 212,  162 => 199,  154 => 191,  147 => 178,  142 => 172,  139 => 171,  134 => 164,  124 => 144,  97 => 68,  94 => 67,  89 => 15,  84 => 46,  72 => 20,  69 => 19,  59 => 9,  366 => 113,  364 => 112,  363 => 111,  362 => 41,  361 => 109,  356 => 108,  350 => 106,  347 => 105,  345 => 34,  342 => 103,  337 => 100,  332 => 27,  325 => 95,  322 => 91,  318 => 90,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  297 => 81,  294 => 80,  286 => 75,  282 => 74,  278 => 73,  275 => 72,  272 => 71,  269 => 70,  248 => 326,  245 => 64,  242 => 323,  239 => 322,  236 => 320,  233 => 60,  230 => 59,  224 => 299,  221 => 298,  216 => 287,  203 => 264,  197 => 42,  195 => 258,  188 => 239,  185 => 238,  180 => 222,  166 => 32,  155 => 28,  126 => 12,  117 => 114,  109 => 107,  100 => 6,  90 => 3,  81 => 103,  76 => 84,  73 => 83,  68 => 12,  66 => 11,  62 => 3,  50 => 38,  39 => 27,  34 => 17,  32 => 5,  208 => 270,  164 => 205,  93 => 17,  78 => 102,  70 => 27,  51 => 14,  22 => 2,  17 => 1,  231 => 313,  227 => 58,  223 => 75,  219 => 55,  215 => 73,  211 => 271,  207 => 71,  202 => 70,  190 => 248,  182 => 236,  174 => 219,  170 => 61,  161 => 30,  157 => 192,  153 => 56,  144 => 177,  140 => 20,  137 => 165,  132 => 157,  128 => 45,  125 => 28,  119 => 128,  115 => 22,  111 => 21,  107 => 102,  103 => 19,  99 => 86,  91 => 16,  83 => 117,  79 => 40,  75 => 12,  71 => 23,  64 => 20,  61 => 22,  55 => 19,  49 => 109,  47 => 37,  44 => 36,  35 => 25,  33 => 8,  21 => 3,  198 => 259,  194 => 61,  189 => 77,  186 => 57,  181 => 65,  175 => 54,  168 => 53,  165 => 60,  159 => 198,  152 => 185,  149 => 184,  143 => 49,  136 => 48,  133 => 44,  127 => 145,  121 => 44,  112 => 108,  104 => 101,  101 => 42,  95 => 5,  88 => 25,  86 => 24,  80 => 21,  77 => 26,  74 => 14,  63 => 10,  60 => 54,  58 => 17,  54 => 8,  52 => 49,  46 => 15,  43 => 11,  40 => 9,  37 => 8,  31 => 16,  28 => 15,  201 => 80,  193 => 249,  178 => 63,  167 => 206,  163 => 31,  158 => 29,  146 => 22,  135 => 18,  129 => 156,  122 => 129,  118 => 43,  114 => 113,  110 => 36,  106 => 35,  102 => 87,  98 => 33,  92 => 57,  87 => 47,  82 => 41,  67 => 13,  57 => 53,  53 => 18,  45 => 11,  42 => 28,  38 => 8,  36 => 26,  29 => 7,  26 => 2,);
    }
}
