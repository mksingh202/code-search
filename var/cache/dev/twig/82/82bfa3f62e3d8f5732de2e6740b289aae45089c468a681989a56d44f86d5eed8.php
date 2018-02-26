<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_1c00c04ca29605b3c83cb8fe9dcc1df34f8313455a93c733da9000624ab7a3e0 extends Twig_Template
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
        $__internal_ca41ec4de66778c4b2e0a7a814b1a2d0ec56335a1fe41c8744ccb7fa91bcef55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca41ec4de66778c4b2e0a7a814b1a2d0ec56335a1fe41c8744ccb7fa91bcef55->enter($__internal_ca41ec4de66778c4b2e0a7a814b1a2d0ec56335a1fe41c8744ccb7fa91bcef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e4c86fbf7aae98b05b169744975c3dd362e794a3ec4842a40746546d18c8218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c86fbf7aae98b05b169744975c3dd362e794a3ec4842a40746546d18c8218c->enter($__internal_e4c86fbf7aae98b05b169744975c3dd362e794a3ec4842a40746546d18c8218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_ca41ec4de66778c4b2e0a7a814b1a2d0ec56335a1fe41c8744ccb7fa91bcef55->leave($__internal_ca41ec4de66778c4b2e0a7a814b1a2d0ec56335a1fe41c8744ccb7fa91bcef55_prof);

        
        $__internal_e4c86fbf7aae98b05b169744975c3dd362e794a3ec4842a40746546d18c8218c->leave($__internal_e4c86fbf7aae98b05b169744975c3dd362e794a3ec4842a40746546d18c8218c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
