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
        return array (  114 => 39,  20 => 1,  97 => 40,  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 23,  161 => 58,  153 => 56,  137 => 40,  129 => 69,  81 => 14,  34 => 7,  23 => 4,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 59,  127 => 28,  77 => 12,  70 => 18,  65 => 20,  58 => 9,  100 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 58,  132 => 47,  128 => 49,  107 => 30,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 23,  67 => 16,  63 => 26,  59 => 18,  38 => 10,  94 => 30,  89 => 28,  85 => 16,  75 => 11,  68 => 20,  56 => 16,  87 => 28,  21 => 2,  26 => 2,  93 => 39,  88 => 17,  78 => 18,  46 => 13,  27 => 5,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 48,  121 => 50,  117 => 48,  105 => 35,  91 => 29,  62 => 19,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 19,  69 => 29,  47 => 10,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 40,  120 => 37,  115 => 47,  111 => 36,  108 => 36,  101 => 44,  98 => 44,  96 => 41,  83 => 25,  74 => 31,  66 => 22,  55 => 17,  52 => 16,  50 => 10,  43 => 12,  41 => 11,  35 => 5,  32 => 7,  29 => 6,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 54,  125 => 51,  122 => 43,  116 => 41,  112 => 47,  109 => 35,  106 => 49,  103 => 34,  99 => 42,  95 => 30,  92 => 40,  86 => 27,  82 => 21,  80 => 34,  73 => 23,  64 => 19,  60 => 15,  57 => 14,  54 => 16,  51 => 12,  48 => 7,  45 => 13,  42 => 9,  39 => 7,  36 => 7,  33 => 5,  30 => 2,);
    }
}
