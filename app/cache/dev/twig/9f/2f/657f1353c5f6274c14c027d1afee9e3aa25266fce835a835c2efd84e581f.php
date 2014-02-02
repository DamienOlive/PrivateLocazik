<?php

/* LocazikAnnonceBundle:Annonce:detail.html.twig */
class __TwigTemplate_9f2f657f1353c5f6274c14c027d1afee9e3aa25266fce835a835c2efd84e581f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "
<input type=\"hidden\" id=\"annonceKey\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceKey"), "html", null, true);
        echo "\" />

Détail : <br />

Contacter l'annonceur : <div id=\"affNumTelAnnonce\">Cliquez pour voir le numéro de téléphone</div>

<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"), "html", null, true);
        echo "</a><br />
<strong>Description :</strong> <br /> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceDesc"), "html", null, true);
        echo "<br />
<strong>Prix à la journée : </strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annoncePrix"), "html", null, true);
        echo "€ <br />

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"))), "html", null, true);
            echo "\" width=\"300\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<br />

<strong>Date de publication :</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateCreation"), "d-m-Y"), "html", null, true);
        echo " <br />
<strong>Date de mise à jour</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateUpdate"), "d-m-Y"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  167 => 60,  150 => 44,  127 => 7,  113 => 55,  90 => 38,  70 => 18,  65 => 22,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 57,  143 => 56,  135 => 9,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 23,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 59,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 20,  72 => 24,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 10,  131 => 52,  123 => 47,  120 => 40,  115 => 63,  111 => 37,  108 => 36,  101 => 45,  98 => 31,  96 => 31,  83 => 22,  74 => 14,  66 => 17,  55 => 21,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 43,  95 => 41,  92 => 21,  86 => 37,  82 => 36,  80 => 19,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 13,  48 => 20,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
