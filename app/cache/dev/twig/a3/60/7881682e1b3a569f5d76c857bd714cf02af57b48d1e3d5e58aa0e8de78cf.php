<?php

/* LocazikAnnonceBundle:Categorie:listerAdmin.html.twig */
class __TwigTemplate_a3607881682e1b3a569f5d76c857bd714cf02af57b48d1e3d5e58aa0e8de78cf extends Twig_Template
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
        echo "\"> Gestion catégorie</a>
    </li>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Gestion des catégorie</h2>
<br />
<div class=\"alert alert-danger\">
    <p>
        <strong>Attention !</strong> Si vous supprimez une catégorie, 
        toutes les annonces qui y sont rattachées seront également supprimées.<br />
        Si vous supprimez une catégorie qui est parente d'autres catégories, toutes ces catégories
        et leurs annonces rattachées seront elles aussi supprimées.<br />
        Soyez donc <strong>vigilant</strong> !
    </p>
</div>
<br />


<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Dernière modification</th>
            <th>Catégorie parente</th>
            <th>Online/Offline</th>
            <th>Editer/Supprimer</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCategoriesParent"]) ? $context["listeCategoriesParent"] : $this->getContext($context, "listeCategoriesParent")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorieParent"]) {
            // line 36
            echo "    ";
            // line 37
            echo "    <tr id=\"";
            echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id")), "html", null, true);
            echo "\" class=\"";
            echo "\">
        <td>
        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id"))), "html", null, true);
            echo "\">
            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "categorieName"));
            echo "
        </a>
        </td>
        <td>
            ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "dateUpdate"), "d-m-Y"), "html", null, true);
            echo "
        </td>
        <td>
        </td>
        <td>
            ";
            // line 49
            if (($this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "isOnline") == true)) {
                // line 50
                echo "                <span id=\"";
                echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id")), "html", null, true);
                echo "\" onclick=\"updateOnlineStatusConfirm(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id"), "html", null, true);
                echo ");\" 
                      class=\"label label-success pointer\">Online</span>
            ";
            } else {
                // line 53
                echo "                <span id=\"";
                echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id")), "html", null, true);
                echo "\" onclick=\"updateOnlineStatusConfirm(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id"), "html", null, true);
                echo ");\" 
                      class=\"label label-danger pointer\">Offline</span>
            ";
            }
            // line 56
            echo "        </td>
        <td>
            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-default\">Editer <i class=\"icon-pencil\"></i></a>
            <input type=\"button\" value=\"Supprimer\" onclick=\"removeCategorieConfirm(";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id"), "html", null, true);
            echo ");\" class=\"btn btn-danger btn-default remove_fields\" />
        </td>
    </tr>
        ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "getChildren", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["childCategorie"]) {
                // line 63
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id")), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ("lineParent_" . $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "id")), "html", null, true);
                echo "\">
                <td style=\"padding-left:30px;\">
                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_modifier", array("id" => $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id"))), "html", null, true);
                echo "\">
                    ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "categorieName"));
                echo "
                </a>
                </td>
                <td>
                    ";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "dateUpdate"), "d-m-Y"), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorieParent"]) ? $context["categorieParent"] : $this->getContext($context, "categorieParent")), "getCategorieName", array(), "method"), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 76
                if (($this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "isOnline") == true)) {
                    // line 77
                    echo "                        <span id=\"";
                    echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id")), "html", null, true);
                    echo "\" onclick=\"updateOnlineStatusConfirm(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id"), "html", null, true);
                    echo ");\" 
                              class=\"label label-success pointer\">Online</span>
                    ";
                } else {
                    // line 80
                    echo "                        <span id=\"";
                    echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id")), "html", null, true);
                    echo "\" onclick=\"updateOnlineStatusConfirm(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id"), "html", null, true);
                    echo ");\" 
                              class=\"label label-danger pointer\">Offline</span>
                    ";
                }
                // line 83
                echo "                </td>
                <td>
                    <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_categorie_modifier", array("id" => $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-info btn-default\">Editer <i class=\"icon-pencil\"></i></a>
                    <input type=\"button\" value=\"Supprimer\" onclick=\"removeCategorieConfirm(";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childCategorie"]) ? $context["childCategorie"] : $this->getContext($context, "childCategorie")), "id"), "html", null, true);
                echo ");\" class=\"btn btn-danger btn-default remove_fields\" />
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childCategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieParent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </tbody>
</table>
<br />
<a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("locazik_admin_categorie_ajouter");
        echo "\" class=\"btn btn-info btn-default\">Ajouter une nouvelle catégorie <i class=\"icon-plus\"></i></a>


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
        // line 120
        echo $this->env->getExtension('routing')->getPath("locazik_admin_categorie_ajax_supprimer");
        echo "\", { id: id } );
        \$('#line_'+id).slideUp();
        \$('.lineChild_'+id).slideUp();
    }
    
    var updateOnlineStatusConfirm = function(id) {
        BootstrapDialog.show({
            type: BootstrapDialog.TYPE_DANGER,
            title: 'Confirmation',
            message: 'Etes-vous sur de vouloir modifier le status (online/offline) de l\\'enregistrement ?',
            buttons: [{
                label: 'Annuler',
                action: function(dialogRef){    
                    dialogRef.close();
                }
            }, {
                cssClass: 'btn-danger',
                label: 'Confirmer',
                action: function(dialogRef){    
                    updateOnlineStatus(id);
                    dialogRef.close();
                }
            }]
        }); 
    }
    
    var updateOnlineStatus = function (id) {
        var online = true;
        if(\$('#onlineStatus_'+id).hasClass('label-success')){
            online = false;
            \$('#onlineStatus_'+id).removeClass('label-success').addClass('label-danger');
            \$('#onlineStatus_'+id).html('Offline');
        }else{
            \$('#onlineStatus_'+id).removeClass('label-danger').addClass('label-success');
            \$('#onlineStatus_'+id).html('Online');
        }
        \$.post( \"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("locazik_admin_categorie_ajax_updateonlinevalue");
        echo "\", { id: id, isOnline: online });
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Categorie:listerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 13,  161 => 58,  153 => 56,  137 => 40,  129 => 10,  81 => 35,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 44,  127 => 28,  77 => 20,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 62,  132 => 51,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 19,  67 => 18,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 15,  56 => 28,  87 => 39,  21 => 2,  26 => 1,  93 => 26,  88 => 6,  78 => 36,  46 => 19,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 56,  121 => 46,  117 => 53,  105 => 60,  91 => 40,  62 => 23,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 47,  120 => 37,  115 => 48,  111 => 5,  108 => 50,  101 => 32,  98 => 44,  96 => 40,  83 => 25,  74 => 35,  66 => 17,  55 => 11,  52 => 21,  50 => 12,  43 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 58,  125 => 56,  122 => 43,  116 => 41,  112 => 47,  109 => 34,  106 => 49,  103 => 29,  99 => 28,  95 => 28,  92 => 21,  86 => 23,  82 => 21,  80 => 37,  73 => 19,  64 => 14,  60 => 14,  57 => 14,  54 => 12,  51 => 11,  48 => 10,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
