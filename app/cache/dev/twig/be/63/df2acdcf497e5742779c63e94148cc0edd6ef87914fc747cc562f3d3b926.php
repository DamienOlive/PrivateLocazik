<?php

/* LocazikAnnonceBundle:Common:searchBar.html.twig */
class __TwigTemplate_be63df2acdcf497e5742779c63e94148cc0edd6ef87914fc747cc562f3d3b926 extends Twig_Template
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
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <form method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <ul class=\"nav navbar-nav\">
                ";
        // line 7
        echo "                <li>
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'label');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'errors');
        echo "
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'label');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'errors');
        echo "
                ";
        // line 15
        if (twig_in_filter("categorieValue", twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))))) {
            // line 16
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget', array("value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "categorieValue", array(), "array")));
            echo "
                ";
        } else {
            // line 18
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget');
            echo "
                ";
        }
        // line 20
        echo "
                </li>
                <li>
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'label');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'errors');
        echo "
                ";
        // line 35
        if (twig_in_filter("villeValue", twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))))) {
            // line 36
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget', array("value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "villeValue", array(), "array")));
            echo "
                ";
        } else {
            // line 38
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
            echo "
                ";
        }
        // line 40
        echo "                </li>
            </ul>
            <input type=\"submit\" value=\"Chercher\" class=\"btn btn-info\" />
        </form>
    </div>
</nav>

";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "nomRegion"), "html", null, true);
        echo "<br />
Nombre d'annonces ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["nbAnnonces"]) ? $context["nbAnnonces"] : $this->getContext($context, "nbAnnonces")), "html", null, true);
        echo "

<div id=\"trierPar\">
    Trier par : <select id=\"orderBySelect\" onchange=\"orderAnnonceBy(this)\">
        <option value=\"date\">Date</option>
        <option value=\"prix\">Prix</option>
    </select>
</div>

<script type=\"text/javascript\">
    var listeDepFromRegion = function(idRegion) {
        \$.post(\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("locazik_geo_listedepfromregion");
        echo "\", {idRegion: idRegion}, function(data) {
            if (data['result'] == 'success') {
                \$('#locazik_annoncebundle_rechercheannonces_departement').html('');
                \$.each(data['data'], function(key, value) {
                    \$('#locazik_annoncebundle_rechercheannonces_departement').append(new Option(value.departement, value.id, true, true));
                });
            } else {
                alertBox(BootstrapDialog.TYPE_DANGER,
                        'Erreur de chargement',
                        'Il y a eu une erreur de chargement. <br />Veuillez réessayer.<br /> \\n\\
                    Si le problème perdure, merci de contacter un administrateur.'
                        );
            }
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Common:searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 13,  161 => 58,  153 => 56,  137 => 40,  129 => 10,  81 => 25,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 59,  127 => 28,  77 => 24,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 62,  132 => 47,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 20,  56 => 16,  87 => 28,  21 => 2,  26 => 1,  93 => 26,  88 => 6,  78 => 36,  46 => 13,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 48,  121 => 46,  117 => 38,  105 => 34,  91 => 29,  62 => 18,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 10,  40 => 10,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 40,  120 => 37,  115 => 48,  111 => 36,  108 => 50,  101 => 33,  98 => 44,  96 => 40,  83 => 25,  74 => 35,  66 => 17,  55 => 11,  52 => 21,  50 => 14,  43 => 7,  41 => 6,  35 => 5,  32 => 8,  29 => 7,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 58,  125 => 56,  122 => 43,  116 => 41,  112 => 47,  109 => 35,  106 => 49,  103 => 29,  99 => 28,  95 => 30,  92 => 21,  86 => 23,  82 => 21,  80 => 37,  73 => 23,  64 => 14,  60 => 14,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 5,);
    }
}
