<?php

/* LocazikAnnonceBundle:Annonce:detail.html.twig */
class __TwigTemplate_9f2f657f1353c5f6274c14c027d1afee9e3aa25266fce835a835c2efd84e581f extends Twig_Template
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
        echo " - Détail Annonce";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<input type=\"hidden\" id=\"annonceKey\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceKey"), "html", null, true);
        echo "\" />

Détail : <br />

Contacter l'annonceur : <div id=\"affNumTelAnnonce\">Cliquez pour voir le numéro de téléphone</div>

<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceName"), "html", null, true);
        echo "</a><br />
<strong>Description :</strong> <br /> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceDesc"), "html", null, true);
        echo "<br />
<strong>Prix à la journée : </strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annoncePrix"), "html", null, true);
        echo "€ <br />

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "getImageAnnonces", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getUploadDir", array(), "method") . $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "getImageName", array(), "method"))), "html", null, true);
            echo "\" width=\"300\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<br />

<strong>Date de publication :</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateCreation"), "d-m-Y"), "html", null, true);
        echo " <br />
<strong>Date de mise à jour</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateUpdate"), "d-m-Y"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  83 => 22,  79 => 20,  70 => 18,  66 => 17,  61 => 15,  57 => 14,  51 => 13,  42 => 7,  39 => 6,  36 => 5,  29 => 3,);
    }
}
