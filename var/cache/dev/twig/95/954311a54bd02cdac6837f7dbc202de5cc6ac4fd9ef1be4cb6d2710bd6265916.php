<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e85a3c59e75d770463c8bffad58fb7e9784f110381aeba92d5a6a3e20bd92e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b59fc6e87b99063ff79c6b85ceb7e01c40a9de54b93216cf42fa1ae478cd956e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59fc6e87b99063ff79c6b85ceb7e01c40a9de54b93216cf42fa1ae478cd956e->enter($__internal_b59fc6e87b99063ff79c6b85ceb7e01c40a9de54b93216cf42fa1ae478cd956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ba131e8dc8eae2f1b9763c4a1b147903622b45eca3707332d59f06688537f651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba131e8dc8eae2f1b9763c4a1b147903622b45eca3707332d59f06688537f651->enter($__internal_ba131e8dc8eae2f1b9763c4a1b147903622b45eca3707332d59f06688537f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b59fc6e87b99063ff79c6b85ceb7e01c40a9de54b93216cf42fa1ae478cd956e->leave($__internal_b59fc6e87b99063ff79c6b85ceb7e01c40a9de54b93216cf42fa1ae478cd956e_prof);

        
        $__internal_ba131e8dc8eae2f1b9763c4a1b147903622b45eca3707332d59f06688537f651->leave($__internal_ba131e8dc8eae2f1b9763c4a1b147903622b45eca3707332d59f06688537f651_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9534edb5d767b71d10a873df0a6c9614f74be062f1a0c4fe284eb11f9b2f2cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9534edb5d767b71d10a873df0a6c9614f74be062f1a0c4fe284eb11f9b2f2cfc->enter($__internal_9534edb5d767b71d10a873df0a6c9614f74be062f1a0c4fe284eb11f9b2f2cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c4cd7a120c51adc40f81bdc4f0e49aea8b63ee82858e3d5d33c078d076b25bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cd7a120c51adc40f81bdc4f0e49aea8b63ee82858e3d5d33c078d076b25bea->enter($__internal_c4cd7a120c51adc40f81bdc4f0e49aea8b63ee82858e3d5d33c078d076b25bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c4cd7a120c51adc40f81bdc4f0e49aea8b63ee82858e3d5d33c078d076b25bea->leave($__internal_c4cd7a120c51adc40f81bdc4f0e49aea8b63ee82858e3d5d33c078d076b25bea_prof);

        
        $__internal_9534edb5d767b71d10a873df0a6c9614f74be062f1a0c4fe284eb11f9b2f2cfc->leave($__internal_9534edb5d767b71d10a873df0a6c9614f74be062f1a0c4fe284eb11f9b2f2cfc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c345c69c600ac64818a47bc14b3b7bde41d46844b4b8f9718089193cc16847ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c345c69c600ac64818a47bc14b3b7bde41d46844b4b8f9718089193cc16847ec->enter($__internal_c345c69c600ac64818a47bc14b3b7bde41d46844b4b8f9718089193cc16847ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_135b6858ee28cfea4864d674065d896c2ee9ce82e0707f3c48c6f32afd3afd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135b6858ee28cfea4864d674065d896c2ee9ce82e0707f3c48c6f32afd3afd11->enter($__internal_135b6858ee28cfea4864d674065d896c2ee9ce82e0707f3c48c6f32afd3afd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_135b6858ee28cfea4864d674065d896c2ee9ce82e0707f3c48c6f32afd3afd11->leave($__internal_135b6858ee28cfea4864d674065d896c2ee9ce82e0707f3c48c6f32afd3afd11_prof);

        
        $__internal_c345c69c600ac64818a47bc14b3b7bde41d46844b4b8f9718089193cc16847ec->leave($__internal_c345c69c600ac64818a47bc14b3b7bde41d46844b4b8f9718089193cc16847ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
