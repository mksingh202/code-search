<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3ad6bdbd83c8da54f5fee60077f237337d1d47ff1a6eaaa9325223aa87e29706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ca31564b32a21d12ad2c2b3a15b5a59a281c6d085aeaa3adcc5ad178dc1afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ca31564b32a21d12ad2c2b3a15b5a59a281c6d085aeaa3adcc5ad178dc1afc->enter($__internal_c0ca31564b32a21d12ad2c2b3a15b5a59a281c6d085aeaa3adcc5ad178dc1afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9120227b929fb4cb068d29aa70f51e5d3d41dab7646560b0bd4b98b8d9e80e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9120227b929fb4cb068d29aa70f51e5d3d41dab7646560b0bd4b98b8d9e80e87->enter($__internal_9120227b929fb4cb068d29aa70f51e5d3d41dab7646560b0bd4b98b8d9e80e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ca31564b32a21d12ad2c2b3a15b5a59a281c6d085aeaa3adcc5ad178dc1afc->leave($__internal_c0ca31564b32a21d12ad2c2b3a15b5a59a281c6d085aeaa3adcc5ad178dc1afc_prof);

        
        $__internal_9120227b929fb4cb068d29aa70f51e5d3d41dab7646560b0bd4b98b8d9e80e87->leave($__internal_9120227b929fb4cb068d29aa70f51e5d3d41dab7646560b0bd4b98b8d9e80e87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e96ec9e0742d1b258fcca98494c79b1bd1e3656f5be6f0c9d4feb1244352e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e96ec9e0742d1b258fcca98494c79b1bd1e3656f5be6f0c9d4feb1244352e2->enter($__internal_27e96ec9e0742d1b258fcca98494c79b1bd1e3656f5be6f0c9d4feb1244352e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_acbe98849ff68ef0b89dc243eaca5820f2219671ca25522403bab953eaad8880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbe98849ff68ef0b89dc243eaca5820f2219671ca25522403bab953eaad8880->enter($__internal_acbe98849ff68ef0b89dc243eaca5820f2219671ca25522403bab953eaad8880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_acbe98849ff68ef0b89dc243eaca5820f2219671ca25522403bab953eaad8880->leave($__internal_acbe98849ff68ef0b89dc243eaca5820f2219671ca25522403bab953eaad8880_prof);

        
        $__internal_27e96ec9e0742d1b258fcca98494c79b1bd1e3656f5be6f0c9d4feb1244352e2->leave($__internal_27e96ec9e0742d1b258fcca98494c79b1bd1e3656f5be6f0c9d4feb1244352e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3151ee4aa057ab526af6d283460fcd946997c8ffe3600eb66a4b6646838a22eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3151ee4aa057ab526af6d283460fcd946997c8ffe3600eb66a4b6646838a22eb->enter($__internal_3151ee4aa057ab526af6d283460fcd946997c8ffe3600eb66a4b6646838a22eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae60cbc85cc1ef3fbc80487e211b91e231c534921b63f6529bafa7233e54a178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae60cbc85cc1ef3fbc80487e211b91e231c534921b63f6529bafa7233e54a178->enter($__internal_ae60cbc85cc1ef3fbc80487e211b91e231c534921b63f6529bafa7233e54a178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae60cbc85cc1ef3fbc80487e211b91e231c534921b63f6529bafa7233e54a178->leave($__internal_ae60cbc85cc1ef3fbc80487e211b91e231c534921b63f6529bafa7233e54a178_prof);

        
        $__internal_3151ee4aa057ab526af6d283460fcd946997c8ffe3600eb66a4b6646838a22eb->leave($__internal_3151ee4aa057ab526af6d283460fcd946997c8ffe3600eb66a4b6646838a22eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecb4d91ab93546c9d2dde4f0d3335abf9b2a7f96c6309d4c918e097146293c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb4d91ab93546c9d2dde4f0d3335abf9b2a7f96c6309d4c918e097146293c77->enter($__internal_ecb4d91ab93546c9d2dde4f0d3335abf9b2a7f96c6309d4c918e097146293c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9e2c1f0035b7f90e4de7f9d13c113784df55c537d2f3232dc318e986d9fd04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e2c1f0035b7f90e4de7f9d13c113784df55c537d2f3232dc318e986d9fd04b->enter($__internal_d9e2c1f0035b7f90e4de7f9d13c113784df55c537d2f3232dc318e986d9fd04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d9e2c1f0035b7f90e4de7f9d13c113784df55c537d2f3232dc318e986d9fd04b->leave($__internal_d9e2c1f0035b7f90e4de7f9d13c113784df55c537d2f3232dc318e986d9fd04b_prof);

        
        $__internal_ecb4d91ab93546c9d2dde4f0d3335abf9b2a7f96c6309d4c918e097146293c77->leave($__internal_ecb4d91ab93546c9d2dde4f0d3335abf9b2a7f96c6309d4c918e097146293c77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
