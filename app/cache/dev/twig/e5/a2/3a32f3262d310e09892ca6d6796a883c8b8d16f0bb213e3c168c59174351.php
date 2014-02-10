<?php

/* LocazikAnnonceBundle:Categorie:detailAdmin.html.twig */
class __TwigTemplate_e5a23a32f3262d310e09892ca6d6796a883c8b8d16f0bb213e3c168c59174351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseAdmin.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("locazik_admin");
        echo "\"><i class=\"icon-dashboard\"></i> Dashboard</a> / 
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("locazik_admin_categorie_lister");
        echo "\"> Gestion catégorie</a> / 
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_detail", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
        echo "\"> Détail catégorie</a>
    </li>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    Détail : <br />
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieName"), "html", null, true);
        echo "</a><br />
    <strong>Description :</strong> <br /> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieDesc"), "html", null, true);
        echo "<br />
    <strong>Est en ligne : </strong> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "isOnline"), "html", null, true);
        echo " <br />
    <strong>Date Creation</strong> : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateCreation"), "d-m-Y"), "html", null, true);
        echo " <br />
    <strong>Date mise à jour</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateUpdate"), "d-m-Y"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Categorie:detailAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 13,  161 => 58,  153 => 56,  137 => 40,  129 => 10,  81 => 35,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 44,  127 => 28,  77 => 20,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 51,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 19,  67 => 85,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 15,  56 => 28,  87 => 104,  21 => 2,  26 => 1,  93 => 26,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 62,  158 => 46,  156 => 62,  151 => 59,  142 => 57,  138 => 54,  136 => 56,  121 => 46,  117 => 7,  105 => 60,  91 => 42,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 16,  69 => 29,  47 => 12,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 47,  120 => 37,  115 => 48,  111 => 5,  108 => 46,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 14,  66 => 17,  55 => 16,  52 => 21,  50 => 12,  43 => 20,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 78,  199 => 94,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 52,  141 => 38,  133 => 54,  130 => 29,  125 => 56,  122 => 43,  116 => 41,  112 => 47,  109 => 34,  106 => 36,  103 => 29,  99 => 28,  95 => 28,  92 => 21,  86 => 23,  82 => 21,  80 => 22,  73 => 19,  64 => 14,  60 => 13,  57 => 14,  54 => 12,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
