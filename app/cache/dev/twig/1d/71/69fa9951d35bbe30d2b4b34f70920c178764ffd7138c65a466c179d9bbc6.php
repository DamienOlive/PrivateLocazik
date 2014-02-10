<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_1d7169fa9951d35bbe30d2b4b34f70920c178764ffd7138c65a466c179d9bbc6 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  185 => 66,  172 => 64,  181 => 65,  178 => 66,  167 => 76,  165 => 60,  148 => 69,  113 => 48,  104 => 51,  188 => 88,  155 => 75,  114 => 59,  20 => 1,  97 => 52,  292 => 156,  253 => 120,  213 => 78,  195 => 83,  186 => 80,  175 => 65,  152 => 74,  134 => 54,  126 => 63,  76 => 31,  248 => 94,  244 => 132,  160 => 63,  124 => 62,  84 => 24,  90 => 27,  53 => 12,  161 => 63,  153 => 56,  137 => 65,  129 => 64,  81 => 23,  34 => 26,  23 => 4,  242 => 131,  234 => 99,  231 => 98,  226 => 84,  223 => 91,  216 => 79,  212 => 84,  198 => 71,  191 => 67,  170 => 77,  150 => 55,  127 => 28,  77 => 12,  70 => 19,  65 => 35,  58 => 32,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 77,  169 => 73,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 61,  143 => 56,  135 => 53,  119 => 40,  102 => 40,  71 => 23,  67 => 24,  63 => 34,  59 => 14,  38 => 6,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 35,  87 => 34,  21 => 2,  26 => 2,  93 => 47,  88 => 17,  78 => 18,  46 => 13,  27 => 3,  44 => 26,  31 => 25,  28 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 58,  151 => 59,  142 => 57,  138 => 69,  136 => 48,  121 => 50,  117 => 48,  105 => 34,  91 => 50,  62 => 19,  49 => 14,  24 => 18,  25 => 3,  19 => 1,  79 => 25,  72 => 19,  69 => 40,  47 => 10,  40 => 8,  37 => 6,  22 => 17,  246 => 93,  157 => 57,  145 => 46,  139 => 45,  131 => 61,  123 => 42,  120 => 57,  115 => 47,  111 => 47,  108 => 56,  101 => 44,  98 => 44,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 16,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 24,  209 => 83,  203 => 73,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 63,  141 => 51,  133 => 54,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 47,  109 => 35,  106 => 49,  103 => 34,  99 => 31,  95 => 30,  92 => 40,  86 => 45,  82 => 21,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 14,  54 => 34,  51 => 33,  48 => 7,  45 => 10,  42 => 29,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
