<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f1b4822eb47216530929262aca52164c4945c992f9dfbc4afcae3e93137c7107 extends Twig_Template
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
        $__internal_18851301ab54514c7ed67f141f2d9c5446638ce085e34a691b0c87dcc035ebce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18851301ab54514c7ed67f141f2d9c5446638ce085e34a691b0c87dcc035ebce->enter($__internal_18851301ab54514c7ed67f141f2d9c5446638ce085e34a691b0c87dcc035ebce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3c75f52934ead6eb43b3146342ea84667c54dc9be2b4cddd603fefc18eccc823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c75f52934ead6eb43b3146342ea84667c54dc9be2b4cddd603fefc18eccc823->enter($__internal_3c75f52934ead6eb43b3146342ea84667c54dc9be2b4cddd603fefc18eccc823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_18851301ab54514c7ed67f141f2d9c5446638ce085e34a691b0c87dcc035ebce->leave($__internal_18851301ab54514c7ed67f141f2d9c5446638ce085e34a691b0c87dcc035ebce_prof);

        
        $__internal_3c75f52934ead6eb43b3146342ea84667c54dc9be2b4cddd603fefc18eccc823->leave($__internal_3c75f52934ead6eb43b3146342ea84667c54dc9be2b4cddd603fefc18eccc823_prof);

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
