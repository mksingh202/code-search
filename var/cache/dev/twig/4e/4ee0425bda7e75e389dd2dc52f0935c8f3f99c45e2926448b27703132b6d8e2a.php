<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e7c90b44cebfb616e361a4e1d4c56234501744dee74e1bd1339ac52835d9d7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6bc592507eff3260df59372db53701bd00c6f4f0d8bc21b44103a115023d57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6bc592507eff3260df59372db53701bd00c6f4f0d8bc21b44103a115023d57b->enter($__internal_d6bc592507eff3260df59372db53701bd00c6f4f0d8bc21b44103a115023d57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7c4676e8ef1713d0543c8f428522d1248136da49deadd5eebf8db3d92cd3a42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4676e8ef1713d0543c8f428522d1248136da49deadd5eebf8db3d92cd3a42f->enter($__internal_7c4676e8ef1713d0543c8f428522d1248136da49deadd5eebf8db3d92cd3a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6bc592507eff3260df59372db53701bd00c6f4f0d8bc21b44103a115023d57b->leave($__internal_d6bc592507eff3260df59372db53701bd00c6f4f0d8bc21b44103a115023d57b_prof);

        
        $__internal_7c4676e8ef1713d0543c8f428522d1248136da49deadd5eebf8db3d92cd3a42f->leave($__internal_7c4676e8ef1713d0543c8f428522d1248136da49deadd5eebf8db3d92cd3a42f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e5fc5f8adb99140a3a5e7870a4e644ddcd3765ab7de62bbd4adc7701299a28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5fc5f8adb99140a3a5e7870a4e644ddcd3765ab7de62bbd4adc7701299a28f->enter($__internal_1e5fc5f8adb99140a3a5e7870a4e644ddcd3765ab7de62bbd4adc7701299a28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d6820e326a6f0082b7da65bd27f7ddb82703fe1161e033c2e93618799cae38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6820e326a6f0082b7da65bd27f7ddb82703fe1161e033c2e93618799cae38b->enter($__internal_2d6820e326a6f0082b7da65bd27f7ddb82703fe1161e033c2e93618799cae38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2d6820e326a6f0082b7da65bd27f7ddb82703fe1161e033c2e93618799cae38b->leave($__internal_2d6820e326a6f0082b7da65bd27f7ddb82703fe1161e033c2e93618799cae38b_prof);

        
        $__internal_1e5fc5f8adb99140a3a5e7870a4e644ddcd3765ab7de62bbd4adc7701299a28f->leave($__internal_1e5fc5f8adb99140a3a5e7870a4e644ddcd3765ab7de62bbd4adc7701299a28f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_35025d054492a27aee3849a80ebe92b7f6dcd96173aa33a84c36350cb155d43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35025d054492a27aee3849a80ebe92b7f6dcd96173aa33a84c36350cb155d43c->enter($__internal_35025d054492a27aee3849a80ebe92b7f6dcd96173aa33a84c36350cb155d43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_985ea5e779ee057859ce9d1b050baac6f1df258ca7e382863555adcb604a37fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985ea5e779ee057859ce9d1b050baac6f1df258ca7e382863555adcb604a37fa->enter($__internal_985ea5e779ee057859ce9d1b050baac6f1df258ca7e382863555adcb604a37fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_985ea5e779ee057859ce9d1b050baac6f1df258ca7e382863555adcb604a37fa->leave($__internal_985ea5e779ee057859ce9d1b050baac6f1df258ca7e382863555adcb604a37fa_prof);

        
        $__internal_35025d054492a27aee3849a80ebe92b7f6dcd96173aa33a84c36350cb155d43c->leave($__internal_35025d054492a27aee3849a80ebe92b7f6dcd96173aa33a84c36350cb155d43c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b16a1e83202c67257c809446b5510193e0acec9a89ad16fad48bae70ebbfad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b16a1e83202c67257c809446b5510193e0acec9a89ad16fad48bae70ebbfad3->enter($__internal_1b16a1e83202c67257c809446b5510193e0acec9a89ad16fad48bae70ebbfad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f813beb65186a83883e7a132b36bf152f0a15aa59adef2f6b85e7433c028255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f813beb65186a83883e7a132b36bf152f0a15aa59adef2f6b85e7433c028255->enter($__internal_8f813beb65186a83883e7a132b36bf152f0a15aa59adef2f6b85e7433c028255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8f813beb65186a83883e7a132b36bf152f0a15aa59adef2f6b85e7433c028255->leave($__internal_8f813beb65186a83883e7a132b36bf152f0a15aa59adef2f6b85e7433c028255_prof);

        
        $__internal_1b16a1e83202c67257c809446b5510193e0acec9a89ad16fad48bae70ebbfad3->leave($__internal_1b16a1e83202c67257c809446b5510193e0acec9a89ad16fad48bae70ebbfad3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
