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
                <li>
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'label');
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'errors');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keyword"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region"), 'widget');
        echo "
                </li>
                <li>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'label');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement"), 'widget');
        echo "
                </li>
            </ul>
            <input type=\"submit\" value=\"Chercher\" class=\"btn btn-info\" />
        </form>
    </div>
</nav>

<script type=\"text/javascript\">
    var listeDepFromRegion = function(idRegion) {
        \$.post(\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("locazik_geo_listedepfromregion");
        echo "\", {idRegion: idRegion}, function(data) {
            if (data['result'] == 'success') {
                \$('#locazik_annoncebundle_rechercheannonces_departement').html('');
                \$.each(data['data'], function(key, value) {
                    \$('#locazik_annoncebundle_rechercheannonces_departement').append(new Option( value.departement, value.id, true, true));
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
        return array (  93 => 34,  80 => 24,  66 => 19,  62 => 18,  58 => 17,  44 => 12,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,  124 => 39,  120 => 37,  107 => 30,  101 => 27,  96 => 25,  92 => 23,  84 => 21,  79 => 20,  76 => 23,  72 => 22,  67 => 16,  61 => 14,  57 => 13,  52 => 14,  48 => 13,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
