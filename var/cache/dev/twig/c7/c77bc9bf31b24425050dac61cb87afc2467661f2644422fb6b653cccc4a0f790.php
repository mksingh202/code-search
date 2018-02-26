<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_afe676ebba49daea26ff8be9deeee0874bfa2d1d5d02677e6a11e1414197235a extends Twig_Template
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
        $__internal_8f6ac5ddf0346f0c02431cb2308941a7a2ed003ff08ba367662f3ed5cd55cdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6ac5ddf0346f0c02431cb2308941a7a2ed003ff08ba367662f3ed5cd55cdff->enter($__internal_8f6ac5ddf0346f0c02431cb2308941a7a2ed003ff08ba367662f3ed5cd55cdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_013e9f980fdc7beb22e647aaff5b64f948a4d4fb1635ff8acf8f036399001d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013e9f980fdc7beb22e647aaff5b64f948a4d4fb1635ff8acf8f036399001d89->enter($__internal_013e9f980fdc7beb22e647aaff5b64f948a4d4fb1635ff8acf8f036399001d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8f6ac5ddf0346f0c02431cb2308941a7a2ed003ff08ba367662f3ed5cd55cdff->leave($__internal_8f6ac5ddf0346f0c02431cb2308941a7a2ed003ff08ba367662f3ed5cd55cdff_prof);

        
        $__internal_013e9f980fdc7beb22e647aaff5b64f948a4d4fb1635ff8acf8f036399001d89->leave($__internal_013e9f980fdc7beb22e647aaff5b64f948a4d4fb1635ff8acf8f036399001d89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
