<?php

/* LocazikAnnonceBundle:Annonce:creer.html.twig */
class __TwigTemplate_d78c10df3b505734353ef1c2e855aed11f60b8d6359661272ee7cd4697845ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Créer une annonce";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"well\">

    ";
        // line 11
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div style=\"clear:both;\"></div>
        <br />
        <input type=\"submit\" class=\"btn btn-info\" />
    </form>
</div>

";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 24
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {

        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#locazik_annoncebundle_annonce_imageAnnonces');

        // On ajoute un lien pour ajouter une nouvelle photo
        var \$lienAjout = \$('<a href=\"#\" id=\"ajout_photo\" class=\"btn\">Ajouter une photo</a><br /><br />');
        \$container.append(\$lienAjout);

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$lienAjout.click(function(e) {
            if (index + 1 <= 3)
            {
                ajouterPhoto(\$container);
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            }
        });

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;

        // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
        if (index == 0 && index < 3) {
            //alert(\$container.children('div').addClass('photoAnnonce'));
            ajouterPhoto(\$container);
        } else {
            // Pour chaque photo déjà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                ajouterLienSuppression(\$(this));
            });
        }


        function ajouterPhoto(\$container) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Photo n°' + (index + 1))
                    .replace(/__name__/g, index));

            // On ajoute au prototype un lien pour pouvoir supprimer la photo
            ajouterLienSuppression(\$prototype);

            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);
            \$container.children('div').addClass('photoAnnonce');

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;

            if (index < 3) {
                \$('#ajout_photo').show();
            } else {
                \$('#ajout_photo').hide();
            }

            \$('input:file').change(function() {
                readURL(this);
            });
        }

        // La fonction qui ajoute un lien de suppression d'une catégorie
        function ajouterLienSuppression(\$prototype) {
            // Création du lien
            \$photoAnnonce = \$(\"<img src='";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/locazikannonce/images/photoAnnonce.jpg"), "html", null, true);
        echo "' id='photoAnnonce_\" + (index) + \"' width='160' height='120' /><br />\");
            \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

            // Ajout du lien
            \$prototype.append(\$photoAnnonce);
            \$prototype.append(\$lienSuppression);

            // Ajout du listener sur le clic du lien
            \$lienSuppression.click(function(e) {
                index--;
                if (index < 3) {
                    \$('#ajout_photo').show();
                } else {
                    \$('#ajout_photo').hide();
                }
                \$prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });

    var listeDepFromRegion = function(idRegion) {
        \$.post(\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("locazik_geo_listedepfromregion");
        echo "\", {idRegion: idRegion}, function(data) {
            if (data['result'] == 'success') {
                \$('#locazik_annoncebundle_annonce_departement').html('');
                \$.each(data['data'], function(key, value) {
                    \$('#locazik_annoncebundle_annonce_departement').append(new Option( value.departement, value.id, true, true));
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

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            var photoId = input.id.match(/\\d+/g);

            reader.onload = function(e) {
                \$('#photoAnnonce_' + photoId[0]).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  167 => 60,  150 => 44,  127 => 7,  113 => 55,  90 => 38,  70 => 26,  65 => 22,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 57,  143 => 56,  135 => 9,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 59,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 10,  131 => 52,  123 => 47,  120 => 40,  115 => 63,  111 => 37,  108 => 36,  101 => 45,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 21,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 43,  95 => 41,  92 => 21,  86 => 37,  82 => 36,  80 => 19,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 20,  45 => 17,  42 => 7,  39 => 15,  36 => 14,  33 => 4,  30 => 5,);
    }
}
