<?php

/* LocazikAnnonceBundle:Categorie:detail.html.twig */
class __TwigTemplate_5abbdcc70fb27b297493775d7b0ef9d0ec572a0f82ba2a23b336ac2f65d3d298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
    <body>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_categorie_modifier", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieName"), "html", null, true);
        echo "</a><br />
        <strong>Description :</strong> <br /> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieDesc"), "html", null, true);
        echo "<br />
        <strong>Catégorie parente : </strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "categorieParentName"), "html", null, true);
        echo " <br />
        <strong>Est en ligne : </strong> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "isOnline"), "html", null, true);
        echo " <br />
        Date Creation : ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateCreation"), "d-m-Y"), "html", null, true);
        echo " <br />
        <strong>Date mise à jour</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "dateUpdate"), "d-m-Y"), "html", null, true);
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Categorie:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
