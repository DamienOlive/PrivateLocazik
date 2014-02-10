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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LocazikAnnonceBundle:AnnonceSearch:searchBar", array("data" => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "nbAnnonces" => $this->getAttribute((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")), "getTotalItemCount"))));
        echo "
    <br /><br />

    
    <ul class=\"list-group\">
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 13
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_annonce_detail", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\">
            <li class=\"list-group-item\">
                <div class=\"dateListeAnnonce\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateCreation"), "d-m-Y"), "html", null, true);
            echo "</div>
                <div class=\"photoListeAnnonce\">
                    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "                        ";
                $context["imageLink"] = ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"));
                // line 19
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["imageLink"]) ? $context["imageLink"] : $this->getContext($context, "imageLink")), "liste_annonce"), "html", null, true);
                echo "\" /><br />
                        <small>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"), "count"), "html", null, true);
                echo " photo(s)</small>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </div>
                <div class=\"detailListeAnnonce\">
                    <div class=\"title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"));
            echo "</div>
                    <div class=\"category\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getParent", array(), "method"), "getCategorieName", array(), "method") . " / ") . $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "categorie"), "getCategorieName", array(), "method")), "html", null, true);
            echo "
                    </div>
                    <div class=\"placement\"> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getVille", array(), "method"), "getNom", array(), "method"), "html", null, true);
            echo " / 
                                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getDepartement", array(), "method"), "getNomdepartement", array(), "method"), "html", null, true);
            echo " </div>
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
    
    <div class=\"navigation\">
        ";
        // line 40
        echo $this->env->getExtension('knp_pagination')->render((isset($context["listeAnnonces"]) ? $context["listeAnnonces"] : $this->getContext($context, "listeAnnonces")));
        echo "
    </div>
    
    <a href=\"";
        // line 43
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
        return array (  90 => 24,  53 => 13,  161 => 58,  153 => 56,  137 => 40,  129 => 10,  81 => 35,  34 => 7,  23 => 1,  242 => 102,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 49,  150 => 44,  127 => 28,  77 => 20,  70 => 18,  65 => 17,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 90,  132 => 51,  128 => 49,  107 => 30,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 12,  71 => 19,  67 => 85,  63 => 15,  59 => 14,  38 => 7,  94 => 26,  89 => 24,  85 => 22,  75 => 30,  68 => 14,  56 => 28,  87 => 104,  21 => 2,  26 => 1,  93 => 9,  88 => 6,  78 => 21,  46 => 19,  27 => 4,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 62,  158 => 46,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 7,  105 => 60,  91 => 42,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 94,  72 => 19,  69 => 18,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 43,  123 => 47,  120 => 37,  115 => 15,  111 => 5,  108 => 57,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 17,  55 => 21,  52 => 21,  50 => 12,  43 => 20,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 52,  141 => 38,  133 => 55,  130 => 29,  125 => 40,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 29,  99 => 28,  95 => 28,  92 => 21,  86 => 23,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 13,  51 => 13,  48 => 20,  45 => 17,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
