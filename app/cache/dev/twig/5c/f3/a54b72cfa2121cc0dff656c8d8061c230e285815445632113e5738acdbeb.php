<?php

/* LocazikAnnonceBundle:Annonce:lister.html.twig */
class __TwigTemplate_5cf3a54b72cfa2121cc0dff656c8d8061c230e285815445632113e5738acdbeb extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste annonces";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
    ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LocazikAnnonceBundle:AnnonceSearch:searchBar"));
        echo "
    <br /><br />

    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "nomRegion"), "html", null, true);
        echo "<br />
    Nombre d'annonces ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces"))), "html", null, true);
        echo "
    <ul class=\"list-group\">
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_annonce_detail", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\">
            <li class=\"list-group-item\">
                <div class=\"dateListeAnnonce\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateCreation"), "d-m-Y"), "html", null, true);
            echo "</div>
                <div class=\"photoListeAnnonce\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 19
                echo "                        ";
                $context["imageLink"] = ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"));
                // line 20
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["imageLink"]) ? $context["imageLink"] : $this->getContext($context, "imageLink")), "liste_annonce"), "html", null, true);
                echo "\" /><br />
                        <small>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), "count"), "html", null, true);
                echo " photo(s)</small>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
                <div class=\"detailListeAnnonce\">
                    <div class=\"title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"));
            echo "</div>
                    <div class=\"category\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getParent", array(), "method"), "getCategorieName", array(), "method") . " / ") . $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getCategorieName", array(), "method")), "html", null, true);
            echo "
                    </div>
                    <div class=\"placement\"> Salses-le-Château / Pyrénées-Orientales </div>
                    <div class=\"price\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annoncePrix"), "html", null, true);
            echo "€/jour</div>
                    <p></p>
                </div>
                <div class=\"clear\"></div>
            </li>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </ul>
    
    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("locazik_annonce_creer");
        echo "\">Ajouter des annonces</a>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  84 => 21,  76 => 19,  134 => 91,  160 => 114,  155 => 54,  152 => 53,  148 => 42,  127 => 7,  113 => 53,  90 => 36,  70 => 14,  65 => 22,  34 => 7,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 30,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 9,  119 => 42,  102 => 32,  71 => 19,  67 => 16,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 17,  46 => 17,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 22,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 20,  72 => 18,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 55,  145 => 41,  139 => 10,  131 => 52,  123 => 47,  120 => 37,  115 => 60,  111 => 37,  108 => 36,  101 => 27,  98 => 31,  96 => 25,  83 => 25,  74 => 16,  66 => 25,  55 => 19,  52 => 11,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 41,  95 => 39,  92 => 23,  86 => 35,  82 => 34,  80 => 19,  73 => 19,  64 => 17,  60 => 21,  57 => 13,  54 => 10,  51 => 14,  48 => 10,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 7,);
    }
}
