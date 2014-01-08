<?php

/* ::base.html.twig */
class __TwigTemplate_5809167da73600f40264b3a1f3fec4065c8de34f332d576336905766c1129f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"hero-unit\">
                <h1>Mon Projet Symfony2</h1>
                <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
                <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
                        Lire le tutoriel »
                    </a></p>
            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"span3\">
                    <h3>Le blog</h3>
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("locazik_annonce_creer");
        echo "\">Ajouter une catégorie</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("locazik_annonce_homepage");
        echo "\">Ajouter une annonce</a></li>
                    </ul>

          ";
        // line 32
        echo "                </div>
                <div id=\"content\" class=\"span9\">
          ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>The sky's the limit © 2014 and beyond.</p>
            </footer>
        </div>

    ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Locazik";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "          ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "      ";
        // line 48
        echo "          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  122 => 48,  120 => 47,  117 => 46,  113 => 35,  110 => 34,  103 => 8,  100 => 7,  94 => 5,  88 => 51,  86 => 46,  74 => 36,  72 => 34,  68 => 32,  62 => 28,  58 => 27,  39 => 11,  36 => 10,  34 => 7,  29 => 5,  23 => 1,);
    }
}
