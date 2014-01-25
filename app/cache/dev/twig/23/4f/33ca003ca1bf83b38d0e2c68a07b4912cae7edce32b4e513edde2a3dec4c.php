<?php

/* LocazikAnnonceBundle:Annonce:confirmerCreation.html.twig */
class __TwigTemplate_234f33ca003ca1bf83b38d0e2c68a07b4912cae7edce32b4e513edde2a3dec4c extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Confirmation de création de votre annonce";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"well\">
    Votre annonce a bien été créée. <br />
    Elle sera validée sous 24h maximum. <br />
    Cordialement
</div>
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Annonce:confirmerCreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  36 => 7,  29 => 5,);
    }
}
