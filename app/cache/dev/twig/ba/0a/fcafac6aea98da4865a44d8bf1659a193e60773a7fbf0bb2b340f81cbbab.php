<?php

/* LocazikAnnonceBundle:Geo:listeRegionHomePage.html.twig */
class __TwigTemplate_ba0afcafac6aea98da4865a44d8bf1659a193e60773a7fbf0bb2b340f81cbbab extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeRegions"]) ? $context["listeRegions"] : $this->getContext($context, "listeRegions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 3
            echo "    ";
            $context["jsRegion"] = $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "getJsregion", array(), "method");
            // line 4
            echo "    <a id=\"liste_";
            echo twig_escape_filter($this->env, (isset($context["jsRegion"]) ? $context["jsRegion"] : $this->getContext($context, "jsRegion")), "html", null, true);
            echo "\" onmouseover=\"hoverRegion(this, '";
            echo twig_escape_filter($this->env, (isset($context["jsRegion"]) ? $context["jsRegion"] : $this->getContext($context, "jsRegion")), "html", null, true);
            echo "')\" 
       onmouseout=\"outRegion(this, '";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["jsRegion"]) ? $context["jsRegion"] : $this->getContext($context, "jsRegion")), "html", null, true);
            echo "')\"
       href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locazik_annonce_listerRegion", array("nomRegion" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "getUrlregion", array(), "method"))), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "nomRegion"), "html", null, true);
            echo "
    </a><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "LocazikAnnonceBundle:Geo:listeRegionHomePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  44 => 7,  36 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  64 => 16,  60 => 15,  55 => 14,  52 => 13,  45 => 9,  40 => 6,  37 => 5,  30 => 3,);
    }
}
