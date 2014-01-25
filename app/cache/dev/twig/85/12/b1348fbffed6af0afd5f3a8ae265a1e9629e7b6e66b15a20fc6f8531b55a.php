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
    
    <div id=\"annonceConnexionCompte\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 16
            echo "        <div class=\"flash-notice\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
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
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'errors');
        echo "
    <div id=\"annonceCreationCompte\">
        <form method=\"post\" ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'enctype');
        echo ">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRegistration"]) ? $context["formRegistration"] : $this->getContext($context, "formRegistration")), 'widget');
        echo "
            <div style=\"clear:both;\"></div>
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
        return array (  97 => 41,  93 => 40,  88 => 38,  68 => 21,  63 => 20,  54 => 17,  51 => 16,  47 => 15,  38 => 8,  35 => 7,  29 => 5,);
    }
}
