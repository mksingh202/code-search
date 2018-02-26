<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7505903b4f86c4dfb1f8d1dba91eb89edd67c75e45d2da97b278fa26102cf299 extends Twig_Template
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
        $__internal_674512c08af28170b2eb77992d20b427070583a68f3f3c2be9769c221b70a86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674512c08af28170b2eb77992d20b427070583a68f3f3c2be9769c221b70a86a->enter($__internal_674512c08af28170b2eb77992d20b427070583a68f3f3c2be9769c221b70a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_59b88b0ec502e68c34eff61f0c442ffc4f037179d55561a87b438983564fcab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b88b0ec502e68c34eff61f0c442ffc4f037179d55561a87b438983564fcab4->enter($__internal_59b88b0ec502e68c34eff61f0c442ffc4f037179d55561a87b438983564fcab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_674512c08af28170b2eb77992d20b427070583a68f3f3c2be9769c221b70a86a->leave($__internal_674512c08af28170b2eb77992d20b427070583a68f3f3c2be9769c221b70a86a_prof);

        
        $__internal_59b88b0ec502e68c34eff61f0c442ffc4f037179d55561a87b438983564fcab4->leave($__internal_59b88b0ec502e68c34eff61f0c442ffc4f037179d55561a87b438983564fcab4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
