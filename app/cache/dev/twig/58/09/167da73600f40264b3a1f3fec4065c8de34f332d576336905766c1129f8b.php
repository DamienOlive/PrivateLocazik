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
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "            Connecté en tant que <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a> - 
            <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 23
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a> | 
            <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
            ";
        }
        // line 26
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
        // line 36
        echo $this->env->getExtension('routing')->getPath("locazik_annonce_lister");
        echo "\">Annonce</a> - 
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("locazik_categorie_lister");
        echo "\">Catégorie</a> - 
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("locazik_mot_lister");
        echo "\">Mot Interdits</a>
                    <hr>
          ";
        // line 41
        echo "                </div>
                <div id=\"content\" class=\"span9\">
          ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "                </div>
            </div>

            <hr>

            <footer>
                <p>The sky's the limit © 2014 and beyond.</p>
            </footer>
        </div>

    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
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
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.min.css\" 
              type=\"text/css\" />
        ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "          ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "      ";
        // line 57
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dialog.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 61
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
        return array (  171 => 61,  167 => 60,  163 => 59,  159 => 57,  157 => 56,  154 => 55,  150 => 44,  147 => 43,  139 => 10,  135 => 9,  130 => 8,  127 => 7,  121 => 5,  115 => 63,  113 => 55,  101 => 45,  95 => 41,  90 => 38,  86 => 37,  82 => 36,  70 => 26,  55 => 21,  48 => 20,  46 => 19,  34 => 7,  23 => 1,  124 => 39,  120 => 37,  107 => 30,  103 => 29,  99 => 43,  94 => 26,  89 => 24,  85 => 22,  77 => 20,  72 => 19,  69 => 18,  65 => 24,  60 => 23,  54 => 13,  50 => 12,  42 => 7,  39 => 15,  36 => 14,  29 => 5,);
    }
}
