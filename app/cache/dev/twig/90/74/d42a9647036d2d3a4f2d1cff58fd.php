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
        return array (  58 => 17,  18 => 1,  93 => 17,  66 => 11,  27 => 5,  25 => 2,  1174 => 331,  1168 => 330,  1162 => 329,  1156 => 328,  1150 => 327,  1144 => 326,  1138 => 325,  1132 => 324,  1126 => 323,  1110 => 317,  1103 => 316,  1101 => 315,  1098 => 314,  1075 => 310,  1050 => 309,  1048 => 308,  1045 => 307,  1033 => 302,  1028 => 301,  1026 => 300,  1023 => 299,  1014 => 293,  1008 => 291,  1005 => 290,  1000 => 289,  998 => 288,  995 => 287,  988 => 282,  981 => 280,  978 => 276,  974 => 275,  971 => 274,  968 => 273,  966 => 272,  963 => 271,  955 => 267,  953 => 266,  950 => 265,  943 => 260,  940 => 259,  932 => 254,  928 => 253,  924 => 252,  921 => 251,  919 => 250,  916 => 249,  908 => 245,  906 => 241,  904 => 240,  901 => 239,  880 => 233,  877 => 232,  874 => 231,  871 => 230,  868 => 229,  865 => 228,  862 => 227,  859 => 226,  856 => 225,  853 => 224,  851 => 223,  848 => 222,  840 => 216,  837 => 215,  835 => 214,  832 => 213,  824 => 209,  821 => 208,  819 => 207,  816 => 206,  808 => 202,  805 => 201,  803 => 200,  800 => 199,  792 => 195,  789 => 194,  787 => 193,  784 => 192,  776 => 188,  773 => 187,  771 => 186,  768 => 185,  760 => 181,  757 => 180,  755 => 179,  752 => 178,  744 => 174,  742 => 173,  739 => 172,  731 => 168,  728 => 167,  726 => 166,  723 => 165,  715 => 161,  712 => 160,  710 => 159,  708 => 158,  705 => 157,  698 => 152,  690 => 151,  685 => 150,  679 => 148,  676 => 147,  674 => 146,  671 => 145,  663 => 139,  661 => 138,  660 => 137,  659 => 136,  658 => 135,  653 => 134,  647 => 132,  644 => 131,  642 => 130,  639 => 129,  630 => 123,  626 => 122,  622 => 121,  618 => 120,  613 => 119,  607 => 117,  604 => 116,  602 => 115,  599 => 114,  583 => 110,  581 => 109,  578 => 108,  562 => 104,  560 => 103,  557 => 102,  540 => 98,  528 => 96,  521 => 93,  519 => 92,  514 => 91,  511 => 90,  493 => 89,  491 => 88,  488 => 87,  479 => 82,  476 => 81,  473 => 80,  467 => 78,  465 => 77,  460 => 76,  457 => 75,  454 => 74,  448 => 72,  446 => 71,  438 => 70,  436 => 69,  433 => 68,  427 => 64,  419 => 62,  414 => 61,  410 => 60,  405 => 59,  403 => 58,  400 => 57,  391 => 52,  385 => 50,  382 => 49,  380 => 48,  377 => 47,  367 => 43,  365 => 42,  362 => 41,  354 => 37,  351 => 36,  348 => 35,  345 => 34,  343 => 33,  340 => 32,  332 => 27,  327 => 26,  321 => 24,  319 => 23,  314 => 22,  312 => 21,  309 => 20,  293 => 16,  290 => 15,  288 => 14,  285 => 13,  276 => 8,  270 => 6,  267 => 5,  265 => 4,  262 => 3,  258 => 331,  256 => 330,  254 => 329,  252 => 328,  250 => 327,  248 => 326,  246 => 325,  244 => 324,  242 => 323,  239 => 322,  236 => 320,  234 => 314,  231 => 313,  229 => 307,  226 => 306,  224 => 299,  221 => 298,  216 => 287,  213 => 286,  211 => 271,  208 => 270,  206 => 265,  203 => 264,  198 => 259,  195 => 258,  193 => 249,  190 => 248,  188 => 239,  182 => 236,  180 => 222,  177 => 221,  172 => 213,  167 => 206,  164 => 205,  162 => 199,  159 => 198,  157 => 192,  154 => 191,  152 => 185,  149 => 184,  147 => 178,  142 => 172,  139 => 171,  137 => 165,  134 => 164,  132 => 157,  124 => 144,  122 => 129,  119 => 128,  117 => 114,  114 => 113,  109 => 107,  107 => 102,  102 => 87,  92 => 57,  84 => 46,  79 => 40,  77 => 26,  67 => 13,  99 => 86,  97 => 68,  95 => 22,  94 => 67,  89 => 15,  83 => 18,  80 => 17,  75 => 15,  69 => 19,  52 => 7,  35 => 3,  19 => 1,  33 => 2,  24 => 15,  20 => 2,  218 => 296,  204 => 67,  200 => 262,  196 => 63,  185 => 238,  178 => 59,  174 => 219,  171 => 57,  169 => 212,  146 => 54,  138 => 51,  131 => 50,  123 => 47,  113 => 45,  76 => 35,  72 => 20,  64 => 20,  61 => 27,  55 => 8,  49 => 20,  40 => 16,  30 => 1,  17 => 1,  129 => 156,  125 => 64,  63 => 10,  60 => 9,  54 => 8,  48 => 7,  46 => 29,  43 => 5,  41 => 27,  34 => 24,  32 => 5,  21 => 3,  86 => 29,  81 => 28,  78 => 16,  74 => 14,  71 => 23,  62 => 3,  59 => 9,  51 => 14,  39 => 8,  31 => 5,  28 => 4,  199 => 80,  191 => 75,  176 => 67,  165 => 63,  161 => 62,  156 => 55,  144 => 177,  133 => 67,  127 => 145,  120 => 39,  116 => 46,  112 => 108,  108 => 36,  104 => 101,  100 => 34,  96 => 23,  90 => 30,  87 => 47,  82 => 41,  68 => 12,  57 => 17,  53 => 15,  45 => 11,  42 => 10,  38 => 8,  36 => 7,  29 => 4,  26 => 29,);
    }
}
