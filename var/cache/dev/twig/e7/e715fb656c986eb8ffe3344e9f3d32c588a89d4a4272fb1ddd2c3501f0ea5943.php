<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a6b543f1954b9bf274628f77eb4c8e5a5002318e943894345adc0abaff847504 extends Twig_Template
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
        $__internal_6cfd305d1642a4f8faf243691664f236552485f485567a997fe3366807977214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfd305d1642a4f8faf243691664f236552485f485567a997fe3366807977214->enter($__internal_6cfd305d1642a4f8faf243691664f236552485f485567a997fe3366807977214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_72eda930e145ff3b6e79ccb29dc2f7e11c4f6d8fb59ac9637db3dd5935a61a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eda930e145ff3b6e79ccb29dc2f7e11c4f6d8fb59ac9637db3dd5935a61a81->enter($__internal_72eda930e145ff3b6e79ccb29dc2f7e11c4f6d8fb59ac9637db3dd5935a61a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6cfd305d1642a4f8faf243691664f236552485f485567a997fe3366807977214->leave($__internal_6cfd305d1642a4f8faf243691664f236552485f485567a997fe3366807977214_prof);

        
        $__internal_72eda930e145ff3b6e79ccb29dc2f7e11c4f6d8fb59ac9637db3dd5935a61a81->leave($__internal_72eda930e145ff3b6e79ccb29dc2f7e11c4f6d8fb59ac9637db3dd5935a61a81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
