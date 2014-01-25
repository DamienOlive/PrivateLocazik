<?php

/* LocazikAnnonceBundle::home.html.twig */
class __TwigTemplate_3a43064530d6f5f001d539a31939c1e6877cb518b19f8c73199c9ddc181bf5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "        <div id=\"canvas_france\">
        </div>
        
        ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("LocazikAnnonceBundle:Geo:listerRegion"));
        echo "
        
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mapping.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  55 => 14,  52 => 13,  45 => 9,  40 => 6,  37 => 5,  30 => 3,);
    }
}
