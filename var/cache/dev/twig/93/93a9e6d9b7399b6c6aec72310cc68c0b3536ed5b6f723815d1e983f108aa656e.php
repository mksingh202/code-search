<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b2eaba7af02c8fff888c9a9834ef3688aa6ec59978f2f59ae106f6f08acd02a9 extends Twig_Template
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
        $__internal_d4e305a2bd49dec4aca7f5b2859ed949ddc5c01555321ceb31934db5a1e74a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e305a2bd49dec4aca7f5b2859ed949ddc5c01555321ceb31934db5a1e74a5f->enter($__internal_d4e305a2bd49dec4aca7f5b2859ed949ddc5c01555321ceb31934db5a1e74a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_384b7283bf1a4490d1cf94a19ebd41fdd724c9d21b8c1165fcfc733ac2335f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384b7283bf1a4490d1cf94a19ebd41fdd724c9d21b8c1165fcfc733ac2335f6b->enter($__internal_384b7283bf1a4490d1cf94a19ebd41fdd724c9d21b8c1165fcfc733ac2335f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d4e305a2bd49dec4aca7f5b2859ed949ddc5c01555321ceb31934db5a1e74a5f->leave($__internal_d4e305a2bd49dec4aca7f5b2859ed949ddc5c01555321ceb31934db5a1e74a5f_prof);

        
        $__internal_384b7283bf1a4490d1cf94a19ebd41fdd724c9d21b8c1165fcfc733ac2335f6b->leave($__internal_384b7283bf1a4490d1cf94a19ebd41fdd724c9d21b8c1165fcfc733ac2335f6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
