<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_5b89f216f25bcdd596cab0e263f73d3de4c2d3c7283f007a28845e4d62311eed extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  100 => 33,  58 => 9,  20 => 1,  81 => 14,  165 => 83,  137 => 56,  126 => 50,  97 => 40,  77 => 12,  53 => 10,  167 => 60,  150 => 59,  127 => 7,  113 => 55,  90 => 38,  70 => 18,  65 => 20,  34 => 7,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 35,  128 => 49,  107 => 42,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 57,  143 => 56,  135 => 36,  119 => 42,  102 => 32,  71 => 19,  67 => 16,  63 => 15,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 16,  75 => 11,  68 => 20,  56 => 17,  87 => 28,  21 => 2,  26 => 2,  93 => 39,  88 => 17,  78 => 18,  46 => 13,  27 => 5,  44 => 7,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 59,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 48,  121 => 5,  117 => 38,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 26,  69 => 22,  47 => 11,  40 => 6,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 59,  131 => 53,  123 => 40,  120 => 37,  115 => 63,  111 => 36,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 28,  74 => 14,  66 => 20,  55 => 17,  52 => 16,  50 => 10,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 40,  122 => 61,  116 => 46,  112 => 45,  109 => 35,  106 => 36,  103 => 34,  99 => 39,  95 => 35,  92 => 21,  86 => 27,  82 => 36,  80 => 19,  73 => 23,  64 => 20,  60 => 18,  57 => 16,  54 => 15,  51 => 13,  48 => 7,  45 => 13,  42 => 9,  39 => 7,  36 => 7,  33 => 5,  30 => 2,);
    }
}