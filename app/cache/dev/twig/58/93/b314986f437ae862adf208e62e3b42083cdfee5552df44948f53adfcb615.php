<?php

/* LocazikAnnonceBundle:MotInterdit:creer.html.twig */
class __TwigTemplate_5893b314986f437ae862adf208e62e3b42083cdfee5552df44948f53adfcb615 extends Twig_Template
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
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajouter un mot interdit";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Ajouter un mot interdit</h1>
<p>
    Pourquoi ajouter un mot interdit ?<br />
    Le but est d'éviter que les utilisateurs n'insèrent des insultes, 
    des propos diffamatoires ou incompatible avec la charte du site.<br />
    Ce filtre permet ainsi de bloquer certaines annonces indésirables.
</p>

<div class=\"well\">
    ";
        // line 16
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <form method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:MotInterdit:creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  56 => 17,  51 => 16,  40 => 6,  37 => 5,  29 => 3,);
    }
}
