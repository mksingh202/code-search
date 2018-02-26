<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3ca863379f40746a464771e68855bfc4d64a9973b914943e87f97863acb7da46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_533ca681ce3c1013687ef5a62f250f48d83ba6edb06df368e30e5274e5efa747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533ca681ce3c1013687ef5a62f250f48d83ba6edb06df368e30e5274e5efa747->enter($__internal_533ca681ce3c1013687ef5a62f250f48d83ba6edb06df368e30e5274e5efa747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_166bc89e6155096bc12782a310a066b50e38bdcfd0af0dd4f5cd69d07b13fedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166bc89e6155096bc12782a310a066b50e38bdcfd0af0dd4f5cd69d07b13fedb->enter($__internal_166bc89e6155096bc12782a310a066b50e38bdcfd0af0dd4f5cd69d07b13fedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533ca681ce3c1013687ef5a62f250f48d83ba6edb06df368e30e5274e5efa747->leave($__internal_533ca681ce3c1013687ef5a62f250f48d83ba6edb06df368e30e5274e5efa747_prof);

        
        $__internal_166bc89e6155096bc12782a310a066b50e38bdcfd0af0dd4f5cd69d07b13fedb->leave($__internal_166bc89e6155096bc12782a310a066b50e38bdcfd0af0dd4f5cd69d07b13fedb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9267979d0fcc60b0233c432acc3cc250fe6c8dfab3311caabcd2343125cbf243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9267979d0fcc60b0233c432acc3cc250fe6c8dfab3311caabcd2343125cbf243->enter($__internal_9267979d0fcc60b0233c432acc3cc250fe6c8dfab3311caabcd2343125cbf243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8451e6e0785c4b8484addde4a26afccfa8ea06fb1f878a66fa271727abca16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8451e6e0785c4b8484addde4a26afccfa8ea06fb1f878a66fa271727abca16a->enter($__internal_a8451e6e0785c4b8484addde4a26afccfa8ea06fb1f878a66fa271727abca16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8451e6e0785c4b8484addde4a26afccfa8ea06fb1f878a66fa271727abca16a->leave($__internal_a8451e6e0785c4b8484addde4a26afccfa8ea06fb1f878a66fa271727abca16a_prof);

        
        $__internal_9267979d0fcc60b0233c432acc3cc250fe6c8dfab3311caabcd2343125cbf243->leave($__internal_9267979d0fcc60b0233c432acc3cc250fe6c8dfab3311caabcd2343125cbf243_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a34c00fbcd2f3ee8558a141058a00d007f1f8f3d13895fa74a47f15c08a533f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a34c00fbcd2f3ee8558a141058a00d007f1f8f3d13895fa74a47f15c08a533f->enter($__internal_6a34c00fbcd2f3ee8558a141058a00d007f1f8f3d13895fa74a47f15c08a533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3baa84ac9a80df755df9582bd0c90430a51ca401d9daa062dfca0e7745a8955b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baa84ac9a80df755df9582bd0c90430a51ca401d9daa062dfca0e7745a8955b->enter($__internal_3baa84ac9a80df755df9582bd0c90430a51ca401d9daa062dfca0e7745a8955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3baa84ac9a80df755df9582bd0c90430a51ca401d9daa062dfca0e7745a8955b->leave($__internal_3baa84ac9a80df755df9582bd0c90430a51ca401d9daa062dfca0e7745a8955b_prof);

        
        $__internal_6a34c00fbcd2f3ee8558a141058a00d007f1f8f3d13895fa74a47f15c08a533f->leave($__internal_6a34c00fbcd2f3ee8558a141058a00d007f1f8f3d13895fa74a47f15c08a533f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
