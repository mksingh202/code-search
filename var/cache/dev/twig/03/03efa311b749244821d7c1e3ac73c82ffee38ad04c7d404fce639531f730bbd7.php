<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_916d9f712cdc75ffadd295fc73c42473aaccc121c017408c0a98dbbcf6880be4 extends Twig_Template
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
        $__internal_392e346e33382a360bc44ca3edfa2dc674c283856ba2c06b9621a09c40401af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392e346e33382a360bc44ca3edfa2dc674c283856ba2c06b9621a09c40401af6->enter($__internal_392e346e33382a360bc44ca3edfa2dc674c283856ba2c06b9621a09c40401af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_10e99551ab5e66c6144a6ddae8c52276b989ecccbc12c09d881f2830521fc353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e99551ab5e66c6144a6ddae8c52276b989ecccbc12c09d881f2830521fc353->enter($__internal_10e99551ab5e66c6144a6ddae8c52276b989ecccbc12c09d881f2830521fc353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_392e346e33382a360bc44ca3edfa2dc674c283856ba2c06b9621a09c40401af6->leave($__internal_392e346e33382a360bc44ca3edfa2dc674c283856ba2c06b9621a09c40401af6_prof);

        
        $__internal_10e99551ab5e66c6144a6ddae8c52276b989ecccbc12c09d881f2830521fc353->leave($__internal_10e99551ab5e66c6144a6ddae8c52276b989ecccbc12c09d881f2830521fc353_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}