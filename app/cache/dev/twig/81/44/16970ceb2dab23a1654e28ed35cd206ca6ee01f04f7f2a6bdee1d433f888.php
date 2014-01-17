<?php

/* LocazikAnnonceBundle:Categorie:lister.html.twig */
class __TwigTemplate_814416970ceb2dab23a1654e28ed35cd206ca6ee01f04f7f2a6bdee1d433f888 extends Twig_Template
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
        echo " - Liste Catégorie";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>Liste des catégorie</h2>

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Dernière modification</th>
            <th>Nombre d'annonces liées</th>
            <th>Online/Offline</th>
            <th>Editer/Supprimer</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategories"]) ? $context["listeCategories"] : $this->getContext($context, "listeCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "    ";
            // line 23
            echo "    <tr id=\"";
            echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id")), "html", null, true);
            echo "\" class=\"";
            echo "\">
        <td>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
            echo "\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieName"));
            echo "
        </a>
        </td>
        <td>
            ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateUpdate"), "d-m-Y"), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 33
            if ((!(null === $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "parent")))) {
                // line 34
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "parent"), "getCategorieName", array(), "method"), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "        </td>
        <td>
            ";
            // line 38
            if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "isOnline") == true)) {
                // line 39
                echo "                <span class=\"label label-success\">Online</span>
            ";
            } else {
                // line 41
                echo "                <span class=\"label label-danger\">Offline</span>
            ";
            }
            // line 42
            echo " 
        </td>
        <td>
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-default\">Editer <i class=\"icon-pencil\"></i></a>
            <input type=\"button\" value=\"Supprimer\" onclick=\"removeCategorieConfirm(";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"), "html", null, true);
            echo ");\" class=\"btn btn-danger btn-default remove_fields\" />
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
</table>
<br />
<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("locazik_categorie_ajouter");
        echo "\" class=\"btn btn-info btn-default\">Ajouter une nouvelle catégorie <i class=\"icon-plus\"></i></a>


";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "
<script type=\"text/javascript\">
    var removeCategorieConfirm = function(id) {
        BootstrapDialog.show({
            type: BootstrapDialog.TYPE_DANGER,
            title: 'Confirmation',
            message: 'Etes-vous sur de vouloir supprimer l\\'enregistrement ?',
            buttons: [{
                label: 'Annuler',
                action: function(dialogRef){    
                    dialogRef.close();
                }
            }, {
                cssClass: 'btn-danger',
                label: 'Confirmer',
                action: function(dialogRef){    
                    removeCategorie(id);
                    dialogRef.close();
                }
            }]
        }); 
    }
    
    var removeCategorie = function (id) {
        \$.post( \"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("locazik_categorie_supprimer");
        echo "\", { id: id } );
        \$('#line_'+id).slideUp();
        \$('.lineChild_'+id).slideUp();
    }
</script>

";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Categorie:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 83,  137 => 56,  126 => 50,  97 => 38,  134 => 91,  160 => 114,  155 => 54,  152 => 53,  148 => 42,  127 => 7,  113 => 33,  90 => 36,  70 => 16,  65 => 22,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 9,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 22,  38 => 6,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 25,  56 => 12,  87 => 34,  21 => 2,  26 => 6,  93 => 36,  88 => 6,  78 => 17,  46 => 8,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 22,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 26,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 55,  145 => 41,  139 => 59,  131 => 53,  123 => 47,  120 => 40,  115 => 60,  111 => 37,  108 => 36,  101 => 43,  98 => 31,  96 => 24,  83 => 19,  74 => 16,  66 => 15,  55 => 21,  52 => 13,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 43,  116 => 46,  112 => 45,  109 => 31,  106 => 36,  103 => 41,  99 => 39,  95 => 39,  92 => 21,  86 => 35,  82 => 34,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 10,  48 => 12,  45 => 17,  42 => 9,  39 => 8,  36 => 7,  33 => 4,  30 => 5,);
    }
}
