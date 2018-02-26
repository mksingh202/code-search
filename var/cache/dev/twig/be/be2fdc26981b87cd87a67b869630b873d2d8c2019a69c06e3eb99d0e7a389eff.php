<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8de0ccb31e1692fb7b9f6f98aa3a41e2952b7ee3768f8d8d09cbb98aa537fd44 extends Twig_Template
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
        $__internal_4a2627cc888230a4b141fbac2f559b0eedde3489d3859745bb180a5ac53e26ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2627cc888230a4b141fbac2f559b0eedde3489d3859745bb180a5ac53e26ab->enter($__internal_4a2627cc888230a4b141fbac2f559b0eedde3489d3859745bb180a5ac53e26ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2e02b1b7404fe2c9d6831c9e588c79488c605dbae6e8ad6d54d263206dc30b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e02b1b7404fe2c9d6831c9e588c79488c605dbae6e8ad6d54d263206dc30b12->enter($__internal_2e02b1b7404fe2c9d6831c9e588c79488c605dbae6e8ad6d54d263206dc30b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4a2627cc888230a4b141fbac2f559b0eedde3489d3859745bb180a5ac53e26ab->leave($__internal_4a2627cc888230a4b141fbac2f559b0eedde3489d3859745bb180a5ac53e26ab_prof);

        
        $__internal_2e02b1b7404fe2c9d6831c9e588c79488c605dbae6e8ad6d54d263206dc30b12->leave($__internal_2e02b1b7404fe2c9d6831c9e588c79488c605dbae6e8ad6d54d263206dc30b12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
