<?php

/* LocazikAnnonceBundle:Categorie:detail.html.twig */
class __TwigTemplate_5abbdcc70fb27b297493775d7b0ef9d0ec572a0f82ba2a23b336ac2f65d3d298 extends Twig_Template
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
        echo "
<html>
    <body>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieName"), "html", null, true);
        echo "</a><br />
        <strong>Description :</strong> <br /> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieDesc"), "html", null, true);
        echo "<br />
        <strong>Catégorie parente : </strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieParentName"), "html", null, true);
        echo " <br />
        <strong>Est en ligne : </strong> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "isOnline"), "html", null, true);
        echo " <br />
        Date Creation : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateCreation"), "d-m-Y"), "html", null, true);
        echo " <br />
        <strong>Date mise à jour</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateUpdate"), "d-m-Y"), "html", null, true);
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Categorie:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  110 => 34,  100 => 7,  58 => 27,  34 => 6,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 7,  94 => 5,  89 => 20,  85 => 25,  75 => 17,  68 => 32,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 51,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 27,  62 => 28,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 34,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 47,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 36,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 49,  122 => 48,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 8,  99 => 31,  95 => 28,  92 => 21,  86 => 46,  82 => 22,  80 => 19,  73 => 19,  64 => 23,  60 => 20,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 8,  39 => 8,  36 => 7,  33 => 4,  30 => 5,);
    }
}
