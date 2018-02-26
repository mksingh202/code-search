<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_10e864963868baf1b5b80d46c158c71f9213fce6db524ae8626c996a783e62ef extends Twig_Template
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
        $__internal_19631884d8f0ee194012aca691e35609587dc6f23e18770f7ffe8117b6c4aba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19631884d8f0ee194012aca691e35609587dc6f23e18770f7ffe8117b6c4aba5->enter($__internal_19631884d8f0ee194012aca691e35609587dc6f23e18770f7ffe8117b6c4aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d6ba19b2ed397d067b999e23c1f5115e3c7325dd214c3f1df87f1e12a76e1690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ba19b2ed397d067b999e23c1f5115e3c7325dd214c3f1df87f1e12a76e1690->enter($__internal_d6ba19b2ed397d067b999e23c1f5115e3c7325dd214c3f1df87f1e12a76e1690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_19631884d8f0ee194012aca691e35609587dc6f23e18770f7ffe8117b6c4aba5->leave($__internal_19631884d8f0ee194012aca691e35609587dc6f23e18770f7ffe8117b6c4aba5_prof);

        
        $__internal_d6ba19b2ed397d067b999e23c1f5115e3c7325dd214c3f1df87f1e12a76e1690->leave($__internal_d6ba19b2ed397d067b999e23c1f5115e3c7325dd214c3f1df87f1e12a76e1690_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
