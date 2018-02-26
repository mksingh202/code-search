<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1fa1390021cdd474fa4864aaff265a719af4158ee0cb9a6393d9ce70d71b5bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d862b2ae120d501669a73aa70915b3bbd6c83669a45a1f9a820b9f60f127ef65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d862b2ae120d501669a73aa70915b3bbd6c83669a45a1f9a820b9f60f127ef65->enter($__internal_d862b2ae120d501669a73aa70915b3bbd6c83669a45a1f9a820b9f60f127ef65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_75e97876359b456daf789462edc46449a63c9aa0b64769467889a900dded0f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e97876359b456daf789462edc46449a63c9aa0b64769467889a900dded0f0b->enter($__internal_75e97876359b456daf789462edc46449a63c9aa0b64769467889a900dded0f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d862b2ae120d501669a73aa70915b3bbd6c83669a45a1f9a820b9f60f127ef65->leave($__internal_d862b2ae120d501669a73aa70915b3bbd6c83669a45a1f9a820b9f60f127ef65_prof);

        
        $__internal_75e97876359b456daf789462edc46449a63c9aa0b64769467889a900dded0f0b->leave($__internal_75e97876359b456daf789462edc46449a63c9aa0b64769467889a900dded0f0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19c201a4f8463620f25ff7ebec9aa75bf305ea0b200f65e7f5349b9cc5d8799e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c201a4f8463620f25ff7ebec9aa75bf305ea0b200f65e7f5349b9cc5d8799e->enter($__internal_19c201a4f8463620f25ff7ebec9aa75bf305ea0b200f65e7f5349b9cc5d8799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3fcda1947f1e48a41c4d14d69cd0fcc33e50af0cc6f7e1e39ef83a111f388721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcda1947f1e48a41c4d14d69cd0fcc33e50af0cc6f7e1e39ef83a111f388721->enter($__internal_3fcda1947f1e48a41c4d14d69cd0fcc33e50af0cc6f7e1e39ef83a111f388721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3fcda1947f1e48a41c4d14d69cd0fcc33e50af0cc6f7e1e39ef83a111f388721->leave($__internal_3fcda1947f1e48a41c4d14d69cd0fcc33e50af0cc6f7e1e39ef83a111f388721_prof);

        
        $__internal_19c201a4f8463620f25ff7ebec9aa75bf305ea0b200f65e7f5349b9cc5d8799e->leave($__internal_19c201a4f8463620f25ff7ebec9aa75bf305ea0b200f65e7f5349b9cc5d8799e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
