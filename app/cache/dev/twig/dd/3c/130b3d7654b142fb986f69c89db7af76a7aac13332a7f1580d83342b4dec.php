<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_dd3c130b3d7654b142fb986f69c89db7af76a7aac13332a7f1580d83342b4dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'titre' => array($this, 'block_titre'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <div id=\"wrapper\">

        <!-- Sidebar -->
        ";
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 78
        echo "
        <div id=\"page-wrapper\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 83
        $this->displayBlock('titre', $context, $blocks);
        // line 85
        echo "                    <ol class=\"breadcrumb\">
                        ";
        // line 86
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 88
        echo "                    </ol>
                </div>
            </div><!-- /.row -->
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "        </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    ";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Locazik";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-dialog.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/locazikannonce/cssAdmin/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/locazikannonce/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.min.css\" 
              type=\"text/css\" />
        ";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("locazik_admin");
        echo "\">Administration Locazik</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("locazik_admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("locazik_admin_stats");
        echo "\"><i class=\"fa fa-bar-chart-o\"></i> Statistiques</a></li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("locazik_admin_annonce_lister");
        echo "\"><i class=\"fa fa-file\"></i> Annonces</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("locazik_admin_categorie_lister");
        echo "\"><i class=\"fa fa-edit\"></i> Categories</a></li>
                    <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("locazik_admin_motinterdit_lister");
        echo "\"><i class=\"fa fa-font\"></i> Mots Interdits</a></li>
                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("locazik_admin_user_lister");
        echo "\"><i class=\"fa fa-user\"></i> Utilisateurs</a></li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right navbar-user\">
                    <li class=\"dropdown alerts-dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> Alerts <span class=\"badge\">3</span> <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Default <span class=\"label label-default\">Default</span></a></li>
                            <li><a href=\"#\">Primary <span class=\"label label-primary\">Primary</span></a></li>
                            <li><a href=\"#\">Success <span class=\"label label-success\">Success</span></a></li>
                            <li><a href=\"#\">Info <span class=\"label label-info\">Info</span></a></li>
                            <li><a href=\"#\">Warning <span class=\"label label-warning\">Warning</span></a></li>
                            <li><a href=\"#\">Danger <span class=\"label label-danger\">Danger</span></a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">View All</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown user-dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Configuration</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-power-off\"></i> Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        ";
    }

    // line 83
    public function block_titre($context, array $blocks = array())
    {
        // line 84
        echo "                    ";
    }

    // line 86
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 87
        echo "                        ";
    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        // line 92
        echo "
            ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dialog.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 102,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 49,  150 => 44,  127 => 28,  77 => 91,  70 => 86,  65 => 83,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 13,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 101,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 87,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 12,  71 => 19,  67 => 85,  63 => 15,  59 => 14,  38 => 7,  94 => 28,  89 => 20,  85 => 98,  75 => 30,  68 => 14,  56 => 28,  87 => 104,  21 => 2,  26 => 1,  93 => 9,  88 => 6,  78 => 21,  46 => 21,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 48,  163 => 62,  158 => 46,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 94,  72 => 88,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 15,  111 => 14,  108 => 57,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 20,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 83,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 51,  147 => 58,  144 => 49,  141 => 38,  133 => 55,  130 => 29,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 11,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 3,);
    }
}
