<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_122fb6638a16cdbd5ff66647fa6b9ed75848f58b3982571ccd26113a3c466b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 83,  137 => 56,  126 => 50,  97 => 38,  58 => 11,  134 => 91,  160 => 56,  155 => 54,  152 => 53,  148 => 42,  127 => 7,  113 => 53,  90 => 36,  70 => 14,  65 => 15,  34 => 7,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 35,  128 => 49,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 57,  159 => 61,  143 => 56,  135 => 36,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 22,  38 => 8,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 16,  56 => 17,  87 => 34,  21 => 2,  26 => 12,  93 => 36,  88 => 31,  78 => 17,  46 => 17,  27 => 5,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 30,  72 => 26,  69 => 25,  47 => 9,  40 => 9,  37 => 5,  22 => 3,  246 => 90,  157 => 55,  145 => 41,  139 => 59,  131 => 53,  123 => 47,  120 => 40,  115 => 60,  111 => 37,  108 => 36,  101 => 43,  98 => 31,  96 => 31,  83 => 28,  74 => 16,  66 => 20,  55 => 21,  52 => 16,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 58,  164 => 57,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 8,  125 => 44,  122 => 61,  116 => 46,  112 => 45,  109 => 34,  106 => 36,  103 => 41,  99 => 39,  95 => 35,  92 => 21,  86 => 35,  82 => 34,  80 => 19,  73 => 24,  64 => 17,  60 => 17,  57 => 15,  54 => 13,  51 => 16,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
