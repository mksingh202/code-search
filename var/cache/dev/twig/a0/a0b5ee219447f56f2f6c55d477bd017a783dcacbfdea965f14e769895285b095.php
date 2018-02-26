<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_dc64dcef6e13cb037aac3d0cc4276248d02e6278fa8060e838e2476bd88b30f5 extends Twig_Template
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
        $__internal_34a893f82a043a7dc79ff8f70837ca0405127f1237768d4d173fba757206bdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a893f82a043a7dc79ff8f70837ca0405127f1237768d4d173fba757206bdc6->enter($__internal_34a893f82a043a7dc79ff8f70837ca0405127f1237768d4d173fba757206bdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_908752e57c4284a8989fa7c1336da8d6834ea886d95b208bc4995fd3efa18cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908752e57c4284a8989fa7c1336da8d6834ea886d95b208bc4995fd3efa18cc0->enter($__internal_908752e57c4284a8989fa7c1336da8d6834ea886d95b208bc4995fd3efa18cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_34a893f82a043a7dc79ff8f70837ca0405127f1237768d4d173fba757206bdc6->leave($__internal_34a893f82a043a7dc79ff8f70837ca0405127f1237768d4d173fba757206bdc6_prof);

        
        $__internal_908752e57c4284a8989fa7c1336da8d6834ea886d95b208bc4995fd3efa18cc0->leave($__internal_908752e57c4284a8989fa7c1336da8d6834ea886d95b208bc4995fd3efa18cc0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
