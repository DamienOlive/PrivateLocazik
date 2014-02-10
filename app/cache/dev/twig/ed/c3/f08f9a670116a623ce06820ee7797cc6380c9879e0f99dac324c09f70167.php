<?php

/* LocazikAnnonceBundle:Annonce:listerAdmin.html.twig */
class __TwigTemplate_edc3f08f9a670116a623ce06820ee7797cc6380c9879e0f99dac324c09f70167 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("locazik_admin_annonce_lister");
        echo "\"> Gestion annonces</a>
    </li>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<h2>Gestion des annonces</h2>
    
<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Id - Nom</th>
            <th>Dernière modification</th>
            <th>Catégorie</th>
            <th>Prix</th>
            <th>Photos</th>
            <th>Online/Offline</th>
            <th>Editer/Supprimer</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 29
            echo "    <tr id=\"";
            echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id")), "html", null, true);
            echo "\">
        <td>
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_annonce_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\">
                ";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id") . " - ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"))), "html", null, true);
            echo "
            </a> <br />
            <span title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceDesc"), "html", null, true);
            echo "\" class=\"pointer\"><i>Passer la souris ci-dessus pour voir le texte</i></span>
        </td>
        <td>
            ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateUpdate"), "d-m-Y"), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getCategorieName", array(), "method"), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annoncePrix"), "html", null, true);
            echo "€/jour
        </td>
        <td>
            ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 47
                echo "                ";
                $context["imageLink"] = ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"));
                // line 48
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["imageLink"]) ? $context["imageLink"] : $this->getContext($context, "imageLink")), "admin_liste_annonce"), "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), "count"), "html", null, true);
            echo " photo(s)</small>
        </td>
        <td>
            ";
            // line 53
            if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "isOnline") == true)) {
                // line 54
                echo "                <span id=\"";
                echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id")), "html", null, true);
                echo "\" onclick=\"updateOnlineStatusConfirm(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"), "html", null, true);
                echo ");\" 
                      class=\"label label-success pointer\">Online</span>
            ";
            } else {
                // line 57
                echo "                <span id=\"";
                echo twig_escape_filter($this->env, ("onlineStatus_" . $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id")), "html", null, true);
                echo "\" onclick=\"updateOnlineStatusConfirm(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"), "html", null, true);
                echo ");\" 
                      class=\"label label-danger pointer\">Offline</span>
            ";
            }
            // line 59
            echo " 
        </td>
        <td>
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_annonce_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-default\">Editer <i class=\"icon-pencil\"></i></a>
            <input type=\"button\" value=\"Supprimer\" onclick=\"removeAnnonceConfirm(";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"), "html", null, true);
            echo ");\" class=\"btn btn-danger btn-default remove_fields\" />
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>
<br />

<script type=\"text/javascript\">
    var removeAnnonceConfirm = function(id) {
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
                    removeAnnonce(id);
                    dialogRef.close();
                }
            }]
        }); 
    }
    
    var removeAnnonce = function (id) {
        \$.post( \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("locazik_admin_annonce_ajax_supprimer");
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
        // line 130
        echo $this->env->getExtension('routing')->getPath("locazik_admin_annonce_ajax_updateonlinevalue");
        echo "\", { id: id, isOnline: online });
        ";
        // line 131
        if (array_key_exists("offlinePage", $context)) {
            // line 132
            echo "            \$('#line_'+id).slideUp();
        ";
        }
        // line 134
        echo "    }
</script>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:listerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 34,  90 => 37,  53 => 13,  161 => 58,  153 => 56,  137 => 40,  129 => 10,  81 => 35,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 44,  127 => 28,  77 => 20,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 51,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 19,  67 => 85,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 31,  68 => 14,  56 => 28,  87 => 104,  21 => 2,  26 => 1,  93 => 9,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 62,  158 => 46,  156 => 62,  151 => 59,  142 => 57,  138 => 54,  136 => 56,  121 => 46,  117 => 7,  105 => 60,  91 => 42,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 12,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 47,  120 => 37,  115 => 48,  111 => 5,  108 => 46,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 14,  66 => 17,  55 => 21,  52 => 21,  50 => 12,  43 => 20,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 78,  199 => 94,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 52,  141 => 38,  133 => 54,  130 => 29,  125 => 40,  122 => 43,  116 => 41,  112 => 47,  109 => 34,  106 => 36,  103 => 29,  99 => 28,  95 => 28,  92 => 21,  86 => 23,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 13,  51 => 13,  48 => 20,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
