<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ba902bdfc8270db922cf83c3561690b3e696333bdf0f052302f00a162a216ded extends Twig_Template
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
        $__internal_894f5907811a17d2436c62f25d3118e095599a1620f6ae72dbb1dc26d8e2f70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894f5907811a17d2436c62f25d3118e095599a1620f6ae72dbb1dc26d8e2f70a->enter($__internal_894f5907811a17d2436c62f25d3118e095599a1620f6ae72dbb1dc26d8e2f70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c79ff7b53b3fda2093548663a3d5c67589ed6788c1f64aff3254729a290569eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ff7b53b3fda2093548663a3d5c67589ed6788c1f64aff3254729a290569eb->enter($__internal_c79ff7b53b3fda2093548663a3d5c67589ed6788c1f64aff3254729a290569eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_894f5907811a17d2436c62f25d3118e095599a1620f6ae72dbb1dc26d8e2f70a->leave($__internal_894f5907811a17d2436c62f25d3118e095599a1620f6ae72dbb1dc26d8e2f70a_prof);

        
        $__internal_c79ff7b53b3fda2093548663a3d5c67589ed6788c1f64aff3254729a290569eb->leave($__internal_c79ff7b53b3fda2093548663a3d5c67589ed6788c1f64aff3254729a290569eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
