<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_90ca8306547244bcded6b216441eb537a0e4ffd42d6fb728d10a32c5146ba1ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98ddb0cf944cb95dfbab6be2524d2e75e73dba67aecbdccf334e84d9539c5936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ddb0cf944cb95dfbab6be2524d2e75e73dba67aecbdccf334e84d9539c5936->enter($__internal_98ddb0cf944cb95dfbab6be2524d2e75e73dba67aecbdccf334e84d9539c5936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1b0dee85df3f180d161dfa3dd1a2000b6c7e900d68efb460e3f515f19cc2470f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0dee85df3f180d161dfa3dd1a2000b6c7e900d68efb460e3f515f19cc2470f->enter($__internal_1b0dee85df3f180d161dfa3dd1a2000b6c7e900d68efb460e3f515f19cc2470f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_98ddb0cf944cb95dfbab6be2524d2e75e73dba67aecbdccf334e84d9539c5936->leave($__internal_98ddb0cf944cb95dfbab6be2524d2e75e73dba67aecbdccf334e84d9539c5936_prof);

        
        $__internal_1b0dee85df3f180d161dfa3dd1a2000b6c7e900d68efb460e3f515f19cc2470f->leave($__internal_1b0dee85df3f180d161dfa3dd1a2000b6c7e900d68efb460e3f515f19cc2470f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a86574bed769412bdd43767264ba7c7403a26ed526880e3a5d40bfe126bc618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a86574bed769412bdd43767264ba7c7403a26ed526880e3a5d40bfe126bc618->enter($__internal_8a86574bed769412bdd43767264ba7c7403a26ed526880e3a5d40bfe126bc618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c38156c38b1e134f28e5b694d8b12cb367db3268971978c1459b6d1d058293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c38156c38b1e134f28e5b694d8b12cb367db3268971978c1459b6d1d058293d->enter($__internal_6c38156c38b1e134f28e5b694d8b12cb367db3268971978c1459b6d1d058293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6c38156c38b1e134f28e5b694d8b12cb367db3268971978c1459b6d1d058293d->leave($__internal_6c38156c38b1e134f28e5b694d8b12cb367db3268971978c1459b6d1d058293d_prof);

        
        $__internal_8a86574bed769412bdd43767264ba7c7403a26ed526880e3a5d40bfe126bc618->leave($__internal_8a86574bed769412bdd43767264ba7c7403a26ed526880e3a5d40bfe126bc618_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e7988c39c7ff5b055aed3d52632f415566e23ea5723d3a87f788309d42a6d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7988c39c7ff5b055aed3d52632f415566e23ea5723d3a87f788309d42a6d65->enter($__internal_2e7988c39c7ff5b055aed3d52632f415566e23ea5723d3a87f788309d42a6d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2deea4c97652b1ba4015278a3dd8e04d0fe4a1d4f02eefc755cce3e8c70149a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deea4c97652b1ba4015278a3dd8e04d0fe4a1d4f02eefc755cce3e8c70149a9->enter($__internal_2deea4c97652b1ba4015278a3dd8e04d0fe4a1d4f02eefc755cce3e8c70149a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2deea4c97652b1ba4015278a3dd8e04d0fe4a1d4f02eefc755cce3e8c70149a9->leave($__internal_2deea4c97652b1ba4015278a3dd8e04d0fe4a1d4f02eefc755cce3e8c70149a9_prof);

        
        $__internal_2e7988c39c7ff5b055aed3d52632f415566e23ea5723d3a87f788309d42a6d65->leave($__internal_2e7988c39c7ff5b055aed3d52632f415566e23ea5723d3a87f788309d42a6d65_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ce33bd825a1d312eb510b96d8b4c405fc9deb2458c4f04f747ca87a6d0b4f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce33bd825a1d312eb510b96d8b4c405fc9deb2458c4f04f747ca87a6d0b4f0a->enter($__internal_4ce33bd825a1d312eb510b96d8b4c405fc9deb2458c4f04f747ca87a6d0b4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff34cb61491d2e314b3483ffd3770a3de496792db5125ce61f0c6d660beaffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff34cb61491d2e314b3483ffd3770a3de496792db5125ce61f0c6d660beaffbb->enter($__internal_ff34cb61491d2e314b3483ffd3770a3de496792db5125ce61f0c6d660beaffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff34cb61491d2e314b3483ffd3770a3de496792db5125ce61f0c6d660beaffbb->leave($__internal_ff34cb61491d2e314b3483ffd3770a3de496792db5125ce61f0c6d660beaffbb_prof);

        
        $__internal_4ce33bd825a1d312eb510b96d8b4c405fc9deb2458c4f04f747ca87a6d0b4f0a->leave($__internal_4ce33bd825a1d312eb510b96d8b4c405fc9deb2458c4f04f747ca87a6d0b4f0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
