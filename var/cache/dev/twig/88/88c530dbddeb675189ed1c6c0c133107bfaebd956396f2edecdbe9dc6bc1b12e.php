<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d1cdf491a6d0842b2e554c8aacfc2a697b812db198e83786958ecbfcbe98fbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7270035919cdf726d84f997b4f94e99a0dd648e9e104e1b78570dcffcc2b2f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7270035919cdf726d84f997b4f94e99a0dd648e9e104e1b78570dcffcc2b2f18->enter($__internal_7270035919cdf726d84f997b4f94e99a0dd648e9e104e1b78570dcffcc2b2f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2e0fda169287be25edd7a1b3c7162462fc66c8ec6635b75dcf6fbba0843d0a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0fda169287be25edd7a1b3c7162462fc66c8ec6635b75dcf6fbba0843d0a9a->enter($__internal_2e0fda169287be25edd7a1b3c7162462fc66c8ec6635b75dcf6fbba0843d0a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7270035919cdf726d84f997b4f94e99a0dd648e9e104e1b78570dcffcc2b2f18->leave($__internal_7270035919cdf726d84f997b4f94e99a0dd648e9e104e1b78570dcffcc2b2f18_prof);

        
        $__internal_2e0fda169287be25edd7a1b3c7162462fc66c8ec6635b75dcf6fbba0843d0a9a->leave($__internal_2e0fda169287be25edd7a1b3c7162462fc66c8ec6635b75dcf6fbba0843d0a9a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_240998abffeb6fa8c61c76b6c8555ccbfa8d084c8915f8f7f95c27165931f312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240998abffeb6fa8c61c76b6c8555ccbfa8d084c8915f8f7f95c27165931f312->enter($__internal_240998abffeb6fa8c61c76b6c8555ccbfa8d084c8915f8f7f95c27165931f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63b03fd3043552fbf607136203dd6fe629bc53dd54d69eb92f239f6e57d894be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b03fd3043552fbf607136203dd6fe629bc53dd54d69eb92f239f6e57d894be->enter($__internal_63b03fd3043552fbf607136203dd6fe629bc53dd54d69eb92f239f6e57d894be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_63b03fd3043552fbf607136203dd6fe629bc53dd54d69eb92f239f6e57d894be->leave($__internal_63b03fd3043552fbf607136203dd6fe629bc53dd54d69eb92f239f6e57d894be_prof);

        
        $__internal_240998abffeb6fa8c61c76b6c8555ccbfa8d084c8915f8f7f95c27165931f312->leave($__internal_240998abffeb6fa8c61c76b6c8555ccbfa8d084c8915f8f7f95c27165931f312_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
