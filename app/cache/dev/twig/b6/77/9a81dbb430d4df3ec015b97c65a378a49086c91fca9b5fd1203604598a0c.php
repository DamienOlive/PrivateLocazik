<?php

/* LocazikAnnonceBundle:MotInterdit:listerAdmin.html.twig */
class __TwigTemplate_b6779a81dbb430d4df3ec015b97c65a378a49086c91fca9b5fd1203604598a0c extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("locazik_admin_motinterdit_lister");
        echo "\"> Gestion mots interdits</a>
    </li>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Gestion des mots interdits</h2>

<br />
<div class=\"alert alert-info\">
<p>
    Pourquoi ajouter un mot interdit ?<br />
    Le but est d'éviter que les utilisateurs n'insèrent des insultes, 
    des propos diffamatoires ou incompatible avec la charte du site.<br />
    Ce filtre permet ainsi de bloquer certaines annonces indésirables.
</p>
</div>
<br />

<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>Mot interdit</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMotsInterdits"]) ? $context["listeMotsInterdits"] : $this->getContext($context, "listeMotsInterdits")));
        foreach ($context['_seq'] as $context["_key"] => $context["motInterdit"]) {
            // line 32
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["motInterdit"]) ? $context["motInterdit"] : $this->getContext($context, "motInterdit")), "id")), "html", null, true);
            echo "\">
            <td>
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motInterdit"]) ? $context["motInterdit"] : $this->getContext($context, "motInterdit")), "mot"));
            echo "
            </td>
            <td>
                <input type=\"button\" value=\"Supprimer\" onclick=\"removeMotInterditConfirm(";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motInterdit"]) ? $context["motInterdit"] : $this->getContext($context, "motInterdit")), "id"), "html", null, true);
            echo ");\" class=\"btn btn-danger btn-default remove_fields\" />
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motInterdit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tbody>
</table>
<br />
<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("locazik_admin_motinterdit_creer");
        echo "\" class=\"btn btn-info btn-default\">Ajouter un mot interdit <i class=\"icon-plus\"></i></a>

<script type=\"text/javascript\">
    var removeMotInterditConfirm = function(id) {
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
                    removeMotInterdit(id);
                    dialogRef.close();
                }
            }]
        }); 
    }
    
    var removeMotInterdit = function (id) {
        \$.post( \"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("locazik_admin_motinterdit_ajax_supprimer");
        echo "\", { id: id } );
        \$('#line_'+id).slideUp();
    }
</script>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:MotInterdit:listerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 10,  161 => 58,  153 => 56,  137 => 40,  129 => 69,  81 => 25,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 59,  127 => 28,  77 => 24,  70 => 31,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 62,  132 => 47,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 23,  67 => 22,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 20,  56 => 16,  87 => 28,  21 => 2,  26 => 3,  93 => 26,  88 => 6,  78 => 36,  46 => 13,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 48,  121 => 46,  117 => 38,  105 => 34,  91 => 29,  62 => 21,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 40,  120 => 37,  115 => 48,  111 => 36,  108 => 50,  101 => 44,  98 => 44,  96 => 41,  83 => 25,  74 => 32,  66 => 17,  55 => 14,  52 => 13,  50 => 14,  43 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 58,  125 => 56,  122 => 43,  116 => 41,  112 => 47,  109 => 35,  106 => 49,  103 => 29,  99 => 28,  95 => 30,  92 => 21,  86 => 37,  82 => 21,  80 => 34,  73 => 23,  64 => 16,  60 => 15,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
