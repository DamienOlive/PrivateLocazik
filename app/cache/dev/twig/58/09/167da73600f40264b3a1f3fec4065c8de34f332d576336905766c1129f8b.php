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
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "            Connecté en tant que <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a> - 
            <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 21
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a> | 
            <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
            ";
        }
        // line 24
        echo "            <div id=\"header\" class=\"hero-unit\">
                <h1>Locazik</h1>
                <p>
                    Ce site permet de louer facilement votre matos !
                </p>
            </div>

            <div class=\"row\">
                <div id=\"menu\" class=\"span3\">
                    <h3>Principaux Liens</h3>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("locazik_annonce_lister");
        echo "\">Annonce</a> - 
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("locazik_categorie_lister");
        echo "\">Catégorie</a> - 
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("locazik_mot_lister");
        echo "\">Mot Interdits</a>
                    <hr>
          ";
        // line 39
        echo "                </div>
                <div id=\"content\" class=\"span9\">
          ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>The sky's the limit © 2014 and beyond.</p>
            </footer>
        </div>

    ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
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
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-dialog.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "          ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "      ";
        // line 55
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dialog.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.js"), "html", null, true);
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
        return array (  168 => 58,  164 => 57,  160 => 56,  157 => 55,  155 => 54,  152 => 53,  148 => 42,  145 => 41,  139 => 10,  135 => 9,  130 => 8,  127 => 7,  121 => 5,  115 => 60,  113 => 53,  101 => 43,  99 => 41,  95 => 39,  90 => 36,  86 => 35,  82 => 34,  65 => 22,  55 => 19,  48 => 18,  39 => 13,  36 => 12,  34 => 7,  23 => 1,  74 => 24,  70 => 24,  66 => 22,  60 => 21,  46 => 17,  42 => 7,  38 => 5,  35 => 4,  29 => 5,);
    }
}
