<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3433b424aeab4a3caf62d799686c70a3f04713c9a5012e1011688853fc82c3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3abcd93481004c72ddba1dde4c54d7a8de9258e0dc3b4908f2b2a98a9c5fa50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abcd93481004c72ddba1dde4c54d7a8de9258e0dc3b4908f2b2a98a9c5fa50d->enter($__internal_3abcd93481004c72ddba1dde4c54d7a8de9258e0dc3b4908f2b2a98a9c5fa50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f3b9d4ccfd6877b72c5d831a87fa3864891b5e2037c4206409d7f6142c12d418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b9d4ccfd6877b72c5d831a87fa3864891b5e2037c4206409d7f6142c12d418->enter($__internal_f3b9d4ccfd6877b72c5d831a87fa3864891b5e2037c4206409d7f6142c12d418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3abcd93481004c72ddba1dde4c54d7a8de9258e0dc3b4908f2b2a98a9c5fa50d->leave($__internal_3abcd93481004c72ddba1dde4c54d7a8de9258e0dc3b4908f2b2a98a9c5fa50d_prof);

        
        $__internal_f3b9d4ccfd6877b72c5d831a87fa3864891b5e2037c4206409d7f6142c12d418->leave($__internal_f3b9d4ccfd6877b72c5d831a87fa3864891b5e2037c4206409d7f6142c12d418_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13fcab150b9d02bef1b8e9f30ef17f99a5bf240c5689ef79b5263058c0a8cbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13fcab150b9d02bef1b8e9f30ef17f99a5bf240c5689ef79b5263058c0a8cbb5->enter($__internal_13fcab150b9d02bef1b8e9f30ef17f99a5bf240c5689ef79b5263058c0a8cbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c306470280f89b9f15d0460c205c3546e5e1cc986ba16d929b8b9ed38a5edf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c306470280f89b9f15d0460c205c3546e5e1cc986ba16d929b8b9ed38a5edf76->enter($__internal_c306470280f89b9f15d0460c205c3546e5e1cc986ba16d929b8b9ed38a5edf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c306470280f89b9f15d0460c205c3546e5e1cc986ba16d929b8b9ed38a5edf76->leave($__internal_c306470280f89b9f15d0460c205c3546e5e1cc986ba16d929b8b9ed38a5edf76_prof);

        
        $__internal_13fcab150b9d02bef1b8e9f30ef17f99a5bf240c5689ef79b5263058c0a8cbb5->leave($__internal_13fcab150b9d02bef1b8e9f30ef17f99a5bf240c5689ef79b5263058c0a8cbb5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07625ceac96808ac2d780b056f6f9a12391ec4c48d48863c8e01ee4764415876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07625ceac96808ac2d780b056f6f9a12391ec4c48d48863c8e01ee4764415876->enter($__internal_07625ceac96808ac2d780b056f6f9a12391ec4c48d48863c8e01ee4764415876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bce197c73db9f051617658fa939fad93ec5103acb7201fcc78b72f2e50d0fe1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce197c73db9f051617658fa939fad93ec5103acb7201fcc78b72f2e50d0fe1f->enter($__internal_bce197c73db9f051617658fa939fad93ec5103acb7201fcc78b72f2e50d0fe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_bce197c73db9f051617658fa939fad93ec5103acb7201fcc78b72f2e50d0fe1f->leave($__internal_bce197c73db9f051617658fa939fad93ec5103acb7201fcc78b72f2e50d0fe1f_prof);

        
        $__internal_07625ceac96808ac2d780b056f6f9a12391ec4c48d48863c8e01ee4764415876->leave($__internal_07625ceac96808ac2d780b056f6f9a12391ec4c48d48863c8e01ee4764415876_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
