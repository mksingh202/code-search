<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5ef9050175b7c519dbba78e057fb71db63189953dd332575ab146f3bdc8c31f8 extends Twig_Template
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
        $__internal_5efdef523b62857b591dfda4c94af9f772d8cc59ddcb6275d3eaa59bd119c1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efdef523b62857b591dfda4c94af9f772d8cc59ddcb6275d3eaa59bd119c1b8->enter($__internal_5efdef523b62857b591dfda4c94af9f772d8cc59ddcb6275d3eaa59bd119c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_da10e09e764fa08c078d6f3c5ccdb82bedc3976be5496f268e3a56fd16ba5b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da10e09e764fa08c078d6f3c5ccdb82bedc3976be5496f268e3a56fd16ba5b27->enter($__internal_da10e09e764fa08c078d6f3c5ccdb82bedc3976be5496f268e3a56fd16ba5b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5efdef523b62857b591dfda4c94af9f772d8cc59ddcb6275d3eaa59bd119c1b8->leave($__internal_5efdef523b62857b591dfda4c94af9f772d8cc59ddcb6275d3eaa59bd119c1b8_prof);

        
        $__internal_da10e09e764fa08c078d6f3c5ccdb82bedc3976be5496f268e3a56fd16ba5b27->leave($__internal_da10e09e764fa08c078d6f3c5ccdb82bedc3976be5496f268e3a56fd16ba5b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
