<?php

/* LocazikUserBundle:Email:confirmation.txt.twig */
class __TwigTemplate_c59c8cd78f929d0f4ccf846fda193bd738ecd945b8687ae81d94748c0724ca6e extends Twig_Template
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
        echo "Bonjour ";
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo ",

Merci pour votre inscription sur Locazik !

N'hésitez pas à vous connecter à votre compte avec les accès suivants :

Adresse mail : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "
Mot de passe : Vous seul le connaissez

A bientôt sur www.Locazik.com !

L'équipe Locazik";
    }

    public function getTemplateName()
    {
        return "LocazikUserBundle:Email:confirmation.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  165 => 83,  137 => 56,  126 => 50,  97 => 38,  77 => 24,  53 => 10,  167 => 60,  150 => 59,  127 => 7,  113 => 55,  90 => 38,  70 => 18,  65 => 17,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 35,  128 => 49,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 57,  143 => 56,  135 => 36,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 22,  38 => 6,  94 => 26,  89 => 24,  85 => 33,  75 => 17,  68 => 20,  56 => 17,  87 => 28,  21 => 2,  26 => 3,  93 => 36,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  44 => 7,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 59,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 48,  121 => 5,  117 => 38,  105 => 34,  91 => 29,  62 => 19,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 26,  69 => 18,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 59,  131 => 53,  123 => 40,  120 => 37,  115 => 63,  111 => 36,  108 => 36,  101 => 33,  98 => 31,  96 => 31,  83 => 28,  74 => 14,  66 => 20,  55 => 14,  52 => 16,  50 => 14,  43 => 11,  41 => 7,  35 => 5,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 40,  122 => 61,  116 => 46,  112 => 45,  109 => 35,  106 => 36,  103 => 41,  99 => 39,  95 => 35,  92 => 21,  86 => 37,  82 => 36,  80 => 19,  73 => 24,  64 => 16,  60 => 18,  57 => 14,  54 => 15,  51 => 16,  48 => 12,  45 => 9,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
