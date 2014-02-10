<?php

/* LocazikUserBundle:Account:listeAnnonces.html.twig */
class __TwigTemplate_a7999912f02145986cbfdb2f4ee11a2e4eb5c944fd8f5714bbb839b7cf769011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LocazikUserBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LocazikUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 23
            echo "    <tr id=\"";
            echo twig_escape_filter($this->env, ("line_" . $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id")), "html", null, true);
            echo "\">
        <td>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_annonce_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\">
                ";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id") . " - ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"))), "html", null, true);
            echo "
            </a> <br />
            <span title=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceDesc"), "html", null, true);
            echo "\" class=\"pointer\"><i>Passer la souris ci-dessus pour voir le texte</i></span>
        </td>
        <td>
            ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateUpdate"), "d-m-Y"), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getCategorieName", array(), "method"), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annoncePrix"), "html", null, true);
            echo "€/jour
        </td>
        <td>
            ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "                ";
                $context["imageLink"] = ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"));
                // line 42
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["imageLink"]) ? $context["imageLink"] : $this->getContext($context, "imageLink")), "admin_liste_annonce"), "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            <small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), "count"), "html", null, true);
            echo " photo(s)</small>
        </td>
        <td>
            ";
            // line 47
            if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "isOnline") == true)) {
                // line 48
                echo "                <span class=\"label label-success\">Online</span>
            ";
            } else {
                // line 50
                echo "                <span class=\"label label-danger\">Offline</span>
            ";
            }
            // line 51
            echo " 
        </td>
        <td>
            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_admin_annonce_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-default\">Editer <i class=\"icon-pencil\"></i></a>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
</table>
<br />

";
    }

    public function getTemplateName()
    {
        return "LocazikUserBundle:Account:listeAnnonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 23,  161 => 58,  153 => 56,  137 => 40,  129 => 69,  81 => 19,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 59,  127 => 28,  77 => 24,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 58,  132 => 47,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 23,  67 => 16,  63 => 26,  59 => 25,  38 => 9,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 28,  56 => 16,  87 => 28,  21 => 2,  26 => 3,  93 => 26,  88 => 6,  78 => 18,  46 => 13,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 48,  121 => 50,  117 => 48,  105 => 34,  91 => 29,  62 => 21,  49 => 22,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 11,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 40,  120 => 37,  115 => 47,  111 => 36,  108 => 44,  101 => 44,  98 => 44,  96 => 41,  83 => 25,  74 => 31,  66 => 17,  55 => 14,  52 => 12,  50 => 14,  43 => 7,  41 => 6,  35 => 8,  32 => 6,  29 => 5,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 54,  125 => 51,  122 => 43,  116 => 41,  112 => 47,  109 => 35,  106 => 49,  103 => 29,  99 => 42,  95 => 30,  92 => 40,  86 => 37,  82 => 21,  80 => 34,  73 => 20,  64 => 16,  60 => 15,  57 => 14,  54 => 15,  51 => 11,  48 => 10,  45 => 10,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
