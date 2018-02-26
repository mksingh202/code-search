<?php

/* base.html.twig */
class __TwigTemplate_3757b7d2c22cb139aa0567e090cd1db5d3e0ebf607e329960a0219df57277242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1f606a6f2468dcff49d2095d40366afef2b94b42e4e34b8784f5e49c9844b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1f606a6f2468dcff49d2095d40366afef2b94b42e4e34b8784f5e49c9844b9->enter($__internal_ee1f606a6f2468dcff49d2095d40366afef2b94b42e4e34b8784f5e49c9844b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f807010664b364560461c4fc5c547ec51db7fdb5c9528d3a3c483bd7b473406e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f807010664b364560461c4fc5c547ec51db7fdb5c9528d3a3c483bd7b473406e->enter($__internal_f807010664b364560461c4fc5c547ec51db7fdb5c9528d3a3c483bd7b473406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ee1f606a6f2468dcff49d2095d40366afef2b94b42e4e34b8784f5e49c9844b9->leave($__internal_ee1f606a6f2468dcff49d2095d40366afef2b94b42e4e34b8784f5e49c9844b9_prof);

        
        $__internal_f807010664b364560461c4fc5c547ec51db7fdb5c9528d3a3c483bd7b473406e->leave($__internal_f807010664b364560461c4fc5c547ec51db7fdb5c9528d3a3c483bd7b473406e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6e28941ce57f968e5a5f433e124810d00f6fcc6738b23291e629c5894dda6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e28941ce57f968e5a5f433e124810d00f6fcc6738b23291e629c5894dda6e9->enter($__internal_c6e28941ce57f968e5a5f433e124810d00f6fcc6738b23291e629c5894dda6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ea5223a6902d13f0088ecdd91255b6f89a3691bfafc58a614be1280c5c858c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea5223a6902d13f0088ecdd91255b6f89a3691bfafc58a614be1280c5c858c8->enter($__internal_1ea5223a6902d13f0088ecdd91255b6f89a3691bfafc58a614be1280c5c858c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ea5223a6902d13f0088ecdd91255b6f89a3691bfafc58a614be1280c5c858c8->leave($__internal_1ea5223a6902d13f0088ecdd91255b6f89a3691bfafc58a614be1280c5c858c8_prof);

        
        $__internal_c6e28941ce57f968e5a5f433e124810d00f6fcc6738b23291e629c5894dda6e9->leave($__internal_c6e28941ce57f968e5a5f433e124810d00f6fcc6738b23291e629c5894dda6e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aead8a9022de1df226d863691eea37293b22169c296160ca2ca21e40084a1aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aead8a9022de1df226d863691eea37293b22169c296160ca2ca21e40084a1aa0->enter($__internal_aead8a9022de1df226d863691eea37293b22169c296160ca2ca21e40084a1aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cafee36f9472be1cf171e961bfe410c61d81da7b0e9c9f236515d5bf20c1caa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafee36f9472be1cf171e961bfe410c61d81da7b0e9c9f236515d5bf20c1caa8->enter($__internal_cafee36f9472be1cf171e961bfe410c61d81da7b0e9c9f236515d5bf20c1caa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cafee36f9472be1cf171e961bfe410c61d81da7b0e9c9f236515d5bf20c1caa8->leave($__internal_cafee36f9472be1cf171e961bfe410c61d81da7b0e9c9f236515d5bf20c1caa8_prof);

        
        $__internal_aead8a9022de1df226d863691eea37293b22169c296160ca2ca21e40084a1aa0->leave($__internal_aead8a9022de1df226d863691eea37293b22169c296160ca2ca21e40084a1aa0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_69833152ab2b7a411c74e8fec960231a80971ba76fcdc25a38aeea23a9327f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69833152ab2b7a411c74e8fec960231a80971ba76fcdc25a38aeea23a9327f1c->enter($__internal_69833152ab2b7a411c74e8fec960231a80971ba76fcdc25a38aeea23a9327f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7a47c3099d27124d211c01bc2bc7edfc52833a120e7685ef7d9a33f0695dd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a47c3099d27124d211c01bc2bc7edfc52833a120e7685ef7d9a33f0695dd2e->enter($__internal_f7a47c3099d27124d211c01bc2bc7edfc52833a120e7685ef7d9a33f0695dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7a47c3099d27124d211c01bc2bc7edfc52833a120e7685ef7d9a33f0695dd2e->leave($__internal_f7a47c3099d27124d211c01bc2bc7edfc52833a120e7685ef7d9a33f0695dd2e_prof);

        
        $__internal_69833152ab2b7a411c74e8fec960231a80971ba76fcdc25a38aeea23a9327f1c->leave($__internal_69833152ab2b7a411c74e8fec960231a80971ba76fcdc25a38aeea23a9327f1c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a164b58743bd7556c750aaea00578d8b92bdcd3e83e7b95d5213b4d6fa8bba55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a164b58743bd7556c750aaea00578d8b92bdcd3e83e7b95d5213b4d6fa8bba55->enter($__internal_a164b58743bd7556c750aaea00578d8b92bdcd3e83e7b95d5213b4d6fa8bba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97fbdff507cdbc4c7ac8474a486d955a363f0b94c16ace18d167d919b4a92bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fbdff507cdbc4c7ac8474a486d955a363f0b94c16ace18d167d919b4a92bc8->enter($__internal_97fbdff507cdbc4c7ac8474a486d955a363f0b94c16ace18d167d919b4a92bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97fbdff507cdbc4c7ac8474a486d955a363f0b94c16ace18d167d919b4a92bc8->leave($__internal_97fbdff507cdbc4c7ac8474a486d955a363f0b94c16ace18d167d919b4a92bc8_prof);

        
        $__internal_a164b58743bd7556c750aaea00578d8b92bdcd3e83e7b95d5213b4d6fa8bba55->leave($__internal_a164b58743bd7556c750aaea00578d8b92bdcd3e83e7b95d5213b4d6fa8bba55_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/gitsearch/app/Resources/views/base.html.twig");
    }
}
