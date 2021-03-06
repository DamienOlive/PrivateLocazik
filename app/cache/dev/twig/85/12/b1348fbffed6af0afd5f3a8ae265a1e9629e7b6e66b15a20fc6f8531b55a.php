<?php

/* LocazikUserBundle:Identification:identification.html.twig */
class __TwigTemplate_8512b1348fbffed6af0afd5f3a8ae265a1e9629e7b6e66b15a20fc6f8531b55a extends Twig_Template
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
        echo " Identification ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"well\">

    <h3>Avant de créer votre annonce, veuillez d'abord vous identifier.</h3>

    <span id=\"showAnnonceConnexionCompte\">J'ai déjà un compte</span><br />
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 14
            echo "    <div class=\"flash-notice\">
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <div id=\"annonceConnexionCompte\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\">Adresse e-mail</label>
            <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" />

            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">se souvenir de moi</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />
        </form>
    </div>
    <br /><br />
    <hr>

    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'errors');
        echo "
    <div id=\"annonceCreationCompte\">        
        <form method=\"post\" ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'enctype');
        echo ">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'widget');
        echo "
            <div class=\"clear\"></div>
            <br />
            <input type=\"submit\" value=\"Valider\" class=\"btn btn-info\" />
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "LocazikUserBundle:Identification:identification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  292 => 156,  253 => 120,  213 => 90,  195 => 83,  186 => 80,  175 => 76,  152 => 65,  134 => 59,  126 => 56,  76 => 20,  248 => 134,  244 => 132,  160 => 63,  124 => 50,  84 => 23,  90 => 37,  53 => 23,  161 => 58,  153 => 56,  137 => 40,  129 => 69,  81 => 19,  34 => 7,  23 => 1,  242 => 131,  234 => 99,  231 => 98,  226 => 92,  223 => 91,  216 => 86,  212 => 84,  198 => 71,  191 => 67,  170 => 67,  150 => 59,  127 => 28,  77 => 24,  70 => 18,  65 => 28,  58 => 78,  100 => 52,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 73,  140 => 58,  132 => 47,  128 => 49,  107 => 30,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 130,  235 => 74,  230 => 82,  227 => 81,  224 => 94,  221 => 77,  219 => 91,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 16,  102 => 43,  71 => 23,  67 => 16,  63 => 26,  59 => 25,  38 => 8,  94 => 26,  89 => 24,  85 => 22,  75 => 21,  68 => 20,  56 => 16,  87 => 28,  21 => 2,  26 => 3,  93 => 39,  88 => 37,  78 => 18,  46 => 13,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 113,  163 => 70,  158 => 46,  156 => 66,  151 => 59,  142 => 57,  138 => 54,  136 => 48,  121 => 50,  117 => 48,  105 => 34,  91 => 29,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 19,  69 => 29,  47 => 10,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 46,  139 => 45,  131 => 53,  123 => 40,  120 => 37,  115 => 47,  111 => 36,  108 => 44,  101 => 44,  98 => 44,  96 => 41,  83 => 25,  74 => 31,  66 => 17,  55 => 14,  52 => 15,  50 => 14,  43 => 7,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  209 => 83,  203 => 86,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 47,  154 => 45,  149 => 54,  147 => 53,  144 => 63,  141 => 38,  133 => 54,  130 => 54,  125 => 51,  122 => 43,  116 => 41,  112 => 47,  109 => 35,  106 => 49,  103 => 29,  99 => 42,  95 => 30,  92 => 40,  86 => 37,  82 => 21,  80 => 34,  73 => 20,  64 => 19,  60 => 15,  57 => 14,  54 => 15,  51 => 12,  48 => 10,  45 => 13,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
