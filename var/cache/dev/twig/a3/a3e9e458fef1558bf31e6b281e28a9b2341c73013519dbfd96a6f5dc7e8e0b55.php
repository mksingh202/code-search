<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6bf292c1cc8b899d1226174be8e3b7b99c8f0356cadb233b5e153c28fdb3526e extends Twig_Template
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
        $__internal_28c7694af4903d33461b0d30e476fe825cff4e8e32fc77e5c20c0e01c38f32b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c7694af4903d33461b0d30e476fe825cff4e8e32fc77e5c20c0e01c38f32b3->enter($__internal_28c7694af4903d33461b0d30e476fe825cff4e8e32fc77e5c20c0e01c38f32b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c9a6946e0f1720e9f8c490c9b59bcba47c58c8a0c42d2787cebed54d51ae0c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a6946e0f1720e9f8c490c9b59bcba47c58c8a0c42d2787cebed54d51ae0c14->enter($__internal_c9a6946e0f1720e9f8c490c9b59bcba47c58c8a0c42d2787cebed54d51ae0c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_28c7694af4903d33461b0d30e476fe825cff4e8e32fc77e5c20c0e01c38f32b3->leave($__internal_28c7694af4903d33461b0d30e476fe825cff4e8e32fc77e5c20c0e01c38f32b3_prof);

        
        $__internal_c9a6946e0f1720e9f8c490c9b59bcba47c58c8a0c42d2787cebed54d51ae0c14->leave($__internal_c9a6946e0f1720e9f8c490c9b59bcba47c58c8a0c42d2787cebed54d51ae0c14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
