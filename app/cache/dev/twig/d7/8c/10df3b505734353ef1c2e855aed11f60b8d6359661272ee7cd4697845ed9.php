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
        // line 22
        echo "<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>

";
        // line 25
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
        // line 91
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
        // line 114
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
        return array (  160 => 114,  134 => 91,  66 => 25,  62 => 22,  52 => 13,  48 => 12,  43 => 11,  39 => 8,  36 => 7,  29 => 5,);
    }
}
