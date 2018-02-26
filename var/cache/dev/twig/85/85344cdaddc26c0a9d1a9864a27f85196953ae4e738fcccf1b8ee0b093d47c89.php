<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4302ec199c8b8850c75a73da7b663e251482e6716d9c94b0f435b0d90b34e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b179b80209c1b5d340a66a5aa7ca60e013e65b9684166236735405198e65f8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b179b80209c1b5d340a66a5aa7ca60e013e65b9684166236735405198e65f8ad->enter($__internal_b179b80209c1b5d340a66a5aa7ca60e013e65b9684166236735405198e65f8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_62b26fa6df80d388a21b1237c036bf37993a0e4836d90f858e4e8f562cbb88b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b26fa6df80d388a21b1237c036bf37993a0e4836d90f858e4e8f562cbb88b8->enter($__internal_62b26fa6df80d388a21b1237c036bf37993a0e4836d90f858e4e8f562cbb88b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b179b80209c1b5d340a66a5aa7ca60e013e65b9684166236735405198e65f8ad->leave($__internal_b179b80209c1b5d340a66a5aa7ca60e013e65b9684166236735405198e65f8ad_prof);

        
        $__internal_62b26fa6df80d388a21b1237c036bf37993a0e4836d90f858e4e8f562cbb88b8->leave($__internal_62b26fa6df80d388a21b1237c036bf37993a0e4836d90f858e4e8f562cbb88b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94584767b515a0c70e42aaddd4530882e45c403fc032d85921b65dcd86dd2675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94584767b515a0c70e42aaddd4530882e45c403fc032d85921b65dcd86dd2675->enter($__internal_94584767b515a0c70e42aaddd4530882e45c403fc032d85921b65dcd86dd2675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa8eb059a180d35b0fcf8240acef8ef0c0384766412785736153c184ee2fcf9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8eb059a180d35b0fcf8240acef8ef0c0384766412785736153c184ee2fcf9e->enter($__internal_aa8eb059a180d35b0fcf8240acef8ef0c0384766412785736153c184ee2fcf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa8eb059a180d35b0fcf8240acef8ef0c0384766412785736153c184ee2fcf9e->leave($__internal_aa8eb059a180d35b0fcf8240acef8ef0c0384766412785736153c184ee2fcf9e_prof);

        
        $__internal_94584767b515a0c70e42aaddd4530882e45c403fc032d85921b65dcd86dd2675->leave($__internal_94584767b515a0c70e42aaddd4530882e45c403fc032d85921b65dcd86dd2675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25b924a935aea3fd9f4172cafc0376f0e497bb34461eb4aba3ea37bcf8d8c6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b924a935aea3fd9f4172cafc0376f0e497bb34461eb4aba3ea37bcf8d8c6c9->enter($__internal_25b924a935aea3fd9f4172cafc0376f0e497bb34461eb4aba3ea37bcf8d8c6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6894f5514ff48eca178cbc06d8cbf09dbb5fc5a7fd9cdf708c12bf7ad18cd96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6894f5514ff48eca178cbc06d8cbf09dbb5fc5a7fd9cdf708c12bf7ad18cd96e->enter($__internal_6894f5514ff48eca178cbc06d8cbf09dbb5fc5a7fd9cdf708c12bf7ad18cd96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6894f5514ff48eca178cbc06d8cbf09dbb5fc5a7fd9cdf708c12bf7ad18cd96e->leave($__internal_6894f5514ff48eca178cbc06d8cbf09dbb5fc5a7fd9cdf708c12bf7ad18cd96e_prof);

        
        $__internal_25b924a935aea3fd9f4172cafc0376f0e497bb34461eb4aba3ea37bcf8d8c6c9->leave($__internal_25b924a935aea3fd9f4172cafc0376f0e497bb34461eb4aba3ea37bcf8d8c6c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc38bd0220c94fc7fc530cd93d133f49585cfdbef35608802139d17080ce1179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc38bd0220c94fc7fc530cd93d133f49585cfdbef35608802139d17080ce1179->enter($__internal_bc38bd0220c94fc7fc530cd93d133f49585cfdbef35608802139d17080ce1179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edee4eba76766fc29e94366a3fdd7e788d7607b04ac6cb867d4d36b9398c5899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edee4eba76766fc29e94366a3fdd7e788d7607b04ac6cb867d4d36b9398c5899->enter($__internal_edee4eba76766fc29e94366a3fdd7e788d7607b04ac6cb867d4d36b9398c5899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_edee4eba76766fc29e94366a3fdd7e788d7607b04ac6cb867d4d36b9398c5899->leave($__internal_edee4eba76766fc29e94366a3fdd7e788d7607b04ac6cb867d4d36b9398c5899_prof);

        
        $__internal_bc38bd0220c94fc7fc530cd93d133f49585cfdbef35608802139d17080ce1179->leave($__internal_bc38bd0220c94fc7fc530cd93d133f49585cfdbef35608802139d17080ce1179_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
