<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_cd6c3c0c541310836ea6c18cefad534906fcfc9292b694dd98d6fd939ebc189c extends Twig_Template
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
        $__internal_f5af714aa6ec7400613f41b74b6bc7e1646d5f8ccd72f171a7405ce62e37242b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5af714aa6ec7400613f41b74b6bc7e1646d5f8ccd72f171a7405ce62e37242b->enter($__internal_f5af714aa6ec7400613f41b74b6bc7e1646d5f8ccd72f171a7405ce62e37242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_846945a185da6ef8e12ed04de8a535cdb5564f619ced46a871a1bc785cfcba69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846945a185da6ef8e12ed04de8a535cdb5564f619ced46a871a1bc785cfcba69->enter($__internal_846945a185da6ef8e12ed04de8a535cdb5564f619ced46a871a1bc785cfcba69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f5af714aa6ec7400613f41b74b6bc7e1646d5f8ccd72f171a7405ce62e37242b->leave($__internal_f5af714aa6ec7400613f41b74b6bc7e1646d5f8ccd72f171a7405ce62e37242b_prof);

        
        $__internal_846945a185da6ef8e12ed04de8a535cdb5564f619ced46a871a1bc785cfcba69->leave($__internal_846945a185da6ef8e12ed04de8a535cdb5564f619ced46a871a1bc785cfcba69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
