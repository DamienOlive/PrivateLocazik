<?php

/* LocazikAnnonceBundle:MotInterdit:liste.html.twig */
class __TwigTemplate_4b4763b9b2893f88d3f4b514143326121ab019f957825abf6d5800f6950e4c10 extends Twig_Template
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
        echo " Liste des mots interdits";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Liste des mots interdits</h1>

";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMotsInterdits"]) ? $context["listeMotsInterdits"] : $this->getContext($context, "listeMotsInterdits")));
        foreach ($context['_seq'] as $context["_key"] => $context["motInterdit"]) {
            // line 9
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_mot_supprimer", array("id" => $this->getAttribute((isset($context["motInterdit"]) ? $context["motInterdit"] : $this->getContext($context, "motInterdit")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motInterdit"]) ? $context["motInterdit"] : $this->getContext($context, "motInterdit")), "mot"));
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motInterdit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("locazik_mot_creer");
        echo "\">Ajouter des mots interdits</a>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:MotInterdit:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  58 => 11,  47 => 9,  43 => 8,  39 => 6,  36 => 5,  29 => 3,);
    }
}
