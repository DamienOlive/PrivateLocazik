<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_0fed3a8388bf14c15edeedd7c635cdb77bd6e9e58e7de9f569b8c8c0b6332eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  291 => 102,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  202 => 77,  190 => 76,  174 => 65,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 198,  353 => 121,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 101,  205 => 108,  184 => 101,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 206,  373 => 156,  361 => 195,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  207 => 75,  200 => 72,  197 => 104,  194 => 70,  185 => 74,  172 => 64,  181 => 65,  178 => 66,  167 => 76,  165 => 60,  148 => 69,  113 => 48,  104 => 32,  188 => 102,  155 => 75,  114 => 59,  20 => 1,  97 => 52,  292 => 156,  253 => 120,  213 => 78,  195 => 83,  186 => 80,  175 => 65,  152 => 74,  134 => 54,  126 => 63,  76 => 25,  248 => 94,  244 => 132,  160 => 63,  124 => 62,  84 => 24,  90 => 26,  53 => 12,  161 => 63,  153 => 56,  137 => 65,  129 => 64,  81 => 23,  34 => 5,  23 => 4,  242 => 131,  234 => 99,  231 => 83,  226 => 84,  223 => 91,  216 => 79,  212 => 78,  198 => 71,  191 => 67,  170 => 96,  150 => 55,  127 => 28,  77 => 20,  70 => 19,  65 => 35,  58 => 14,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 77,  169 => 73,  140 => 58,  132 => 65,  128 => 60,  107 => 52,  61 => 15,  273 => 174,  269 => 94,  254 => 92,  243 => 92,  240 => 86,  238 => 130,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 23,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 51,  89 => 28,  85 => 24,  75 => 19,  68 => 36,  56 => 35,  87 => 34,  21 => 2,  26 => 2,  93 => 27,  88 => 25,  78 => 18,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 106,  196 => 90,  183 => 82,  171 => 81,  166 => 95,  163 => 78,  158 => 62,  156 => 62,  151 => 59,  142 => 57,  138 => 69,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  24 => 18,  25 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 8,  37 => 6,  22 => 17,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 57,  115 => 47,  111 => 47,  108 => 56,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 39,  66 => 39,  55 => 13,  52 => 12,  50 => 29,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 24,  209 => 83,  203 => 73,  199 => 85,  193 => 73,  189 => 71,  187 => 75,  182 => 85,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 63,  141 => 51,  133 => 54,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 49,  103 => 34,  99 => 31,  95 => 30,  92 => 27,  86 => 45,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 15,  57 => 14,  54 => 34,  51 => 13,  48 => 7,  45 => 9,  42 => 29,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
