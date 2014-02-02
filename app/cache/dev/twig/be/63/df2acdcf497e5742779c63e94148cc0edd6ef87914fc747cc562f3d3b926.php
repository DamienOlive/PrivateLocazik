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
        return array (  136 => 48,  132 => 47,  123 => 40,  117 => 38,  111 => 36,  109 => 35,  105 => 34,  91 => 29,  87 => 28,  81 => 25,  73 => 23,  68 => 20,  62 => 18,  56 => 16,  40 => 10,  32 => 8,  24 => 4,  19 => 1,  171 => 61,  167 => 60,  163 => 59,  159 => 57,  157 => 56,  154 => 55,  150 => 59,  147 => 43,  139 => 10,  135 => 9,  130 => 8,  127 => 7,  121 => 5,  115 => 63,  113 => 55,  101 => 33,  95 => 30,  90 => 38,  86 => 37,  82 => 36,  70 => 26,  55 => 21,  48 => 20,  46 => 13,  34 => 7,  23 => 1,  124 => 39,  120 => 37,  107 => 30,  103 => 29,  99 => 43,  94 => 26,  89 => 24,  85 => 22,  77 => 24,  72 => 19,  69 => 18,  65 => 24,  60 => 23,  54 => 15,  50 => 14,  42 => 7,  39 => 15,  36 => 9,  29 => 7,);
    }
}
