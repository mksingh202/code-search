<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d9535026a1ef195c82b175329b20f825de237f2dd88a990e65cc86d541a50b2c extends Twig_Template
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
        $__internal_fba39a228f6e013424f7540d0246a8d97fb8d1be967f7551fb28fe76422db51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba39a228f6e013424f7540d0246a8d97fb8d1be967f7551fb28fe76422db51d->enter($__internal_fba39a228f6e013424f7540d0246a8d97fb8d1be967f7551fb28fe76422db51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_af28c2f36f65a1fb2a59bcc859fb67a9d7673fbea74189f43164b21b0fb204e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af28c2f36f65a1fb2a59bcc859fb67a9d7673fbea74189f43164b21b0fb204e4->enter($__internal_af28c2f36f65a1fb2a59bcc859fb67a9d7673fbea74189f43164b21b0fb204e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fba39a228f6e013424f7540d0246a8d97fb8d1be967f7551fb28fe76422db51d->leave($__internal_fba39a228f6e013424f7540d0246a8d97fb8d1be967f7551fb28fe76422db51d_prof);

        
        $__internal_af28c2f36f65a1fb2a59bcc859fb67a9d7673fbea74189f43164b21b0fb204e4->leave($__internal_af28c2f36f65a1fb2a59bcc859fb67a9d7673fbea74189f43164b21b0fb204e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
