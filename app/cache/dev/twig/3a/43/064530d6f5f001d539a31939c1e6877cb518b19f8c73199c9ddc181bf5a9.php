<?php

/* LocazikAnnonceBundle::home.html.twig */
class __TwigTemplate_3a43064530d6f5f001d539a31939c1e6877cb518b19f8c73199c9ddc181bf5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Détail Annonce";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "        <div id=\"canvas_france\">
        </div>
        
        ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LocazikAnnonceBundle:Geo:listerRegion"));
        echo "
        
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mapping.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  58 => 17,  165 => 83,  137 => 56,  126 => 50,  97 => 38,  124 => 39,  84 => 21,  76 => 23,  134 => 91,  160 => 114,  155 => 54,  152 => 53,  148 => 42,  127 => 7,  113 => 53,  90 => 36,  70 => 14,  65 => 22,  34 => 8,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 9,  119 => 42,  102 => 32,  71 => 19,  67 => 16,  63 => 15,  59 => 22,  38 => 9,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 25,  56 => 12,  87 => 34,  21 => 2,  26 => 3,  93 => 34,  88 => 6,  78 => 17,  46 => 17,  27 => 4,  44 => 7,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 18,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 22,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 55,  145 => 41,  139 => 59,  131 => 53,  123 => 47,  120 => 37,  115 => 60,  111 => 37,  108 => 36,  101 => 27,  98 => 31,  96 => 25,  83 => 25,  74 => 16,  66 => 19,  55 => 14,  52 => 13,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 43,  116 => 46,  112 => 45,  109 => 34,  106 => 36,  103 => 41,  99 => 39,  95 => 39,  92 => 23,  86 => 35,  82 => 34,  80 => 24,  73 => 19,  64 => 16,  60 => 15,  57 => 13,  54 => 10,  51 => 14,  48 => 13,  45 => 9,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
