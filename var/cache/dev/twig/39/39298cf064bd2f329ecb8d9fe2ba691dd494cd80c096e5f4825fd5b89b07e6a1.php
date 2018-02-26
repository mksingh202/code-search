<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a32c32062b4213d0db8f76f91e59a62355c9eb6d804b98e54599cca7d57994ba extends Twig_Template
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
        $__internal_bec9e9e15f87ad86325af35ab46cd48b1f47e6085cf2086840f76d26ca91acc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec9e9e15f87ad86325af35ab46cd48b1f47e6085cf2086840f76d26ca91acc9->enter($__internal_bec9e9e15f87ad86325af35ab46cd48b1f47e6085cf2086840f76d26ca91acc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_5f7e8c30b6989415c7cc8baff97027d1defa17fa65c4780f8d4dd6f874ba1219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7e8c30b6989415c7cc8baff97027d1defa17fa65c4780f8d4dd6f874ba1219->enter($__internal_5f7e8c30b6989415c7cc8baff97027d1defa17fa65c4780f8d4dd6f874ba1219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_bec9e9e15f87ad86325af35ab46cd48b1f47e6085cf2086840f76d26ca91acc9->leave($__internal_bec9e9e15f87ad86325af35ab46cd48b1f47e6085cf2086840f76d26ca91acc9_prof);

        
        $__internal_5f7e8c30b6989415c7cc8baff97027d1defa17fa65c4780f8d4dd6f874ba1219->leave($__internal_5f7e8c30b6989415c7cc8baff97027d1defa17fa65c4780f8d4dd6f874ba1219_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
