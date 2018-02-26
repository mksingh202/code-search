<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3b6de0194593ef27a4cdd40dc246370432ffebeb16349c644b58268c21fce9ce extends Twig_Template
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
        $__internal_7a494d81d9f85ee31eb207aed176302b5774d41592caf129365e6be8fbf38868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a494d81d9f85ee31eb207aed176302b5774d41592caf129365e6be8fbf38868->enter($__internal_7a494d81d9f85ee31eb207aed176302b5774d41592caf129365e6be8fbf38868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e7df959e5d6bd86b4d2210ee5038ac1537196db5051308115f65029ab25778e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7df959e5d6bd86b4d2210ee5038ac1537196db5051308115f65029ab25778e1->enter($__internal_e7df959e5d6bd86b4d2210ee5038ac1537196db5051308115f65029ab25778e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7a494d81d9f85ee31eb207aed176302b5774d41592caf129365e6be8fbf38868->leave($__internal_7a494d81d9f85ee31eb207aed176302b5774d41592caf129365e6be8fbf38868_prof);

        
        $__internal_e7df959e5d6bd86b4d2210ee5038ac1537196db5051308115f65029ab25778e1->leave($__internal_e7df959e5d6bd86b4d2210ee5038ac1537196db5051308115f65029ab25778e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
