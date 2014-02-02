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
        return array (  131 => 43,  125 => 40,  120 => 37,  107 => 30,  103 => 29,  99 => 28,  94 => 26,  89 => 24,  85 => 22,  77 => 20,  72 => 19,  69 => 18,  65 => 17,  60 => 15,  54 => 13,  50 => 12,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
