<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_055e1de0d58c14da9e31964b6fb20e9008ec53e26438e0c54edc68c112148f8d extends Twig_Template
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
        $__internal_e5228b8d02191f11df5ac2248ca97eb63263145916cc755fac5b1790904572f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5228b8d02191f11df5ac2248ca97eb63263145916cc755fac5b1790904572f7->enter($__internal_e5228b8d02191f11df5ac2248ca97eb63263145916cc755fac5b1790904572f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4b6b7e4ad72cfcd0e2b88e012aebd542b5cdfcce89873f9c0df553bf5e620cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6b7e4ad72cfcd0e2b88e012aebd542b5cdfcce89873f9c0df553bf5e620cbe->enter($__internal_4b6b7e4ad72cfcd0e2b88e012aebd542b5cdfcce89873f9c0df553bf5e620cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5228b8d02191f11df5ac2248ca97eb63263145916cc755fac5b1790904572f7->leave($__internal_e5228b8d02191f11df5ac2248ca97eb63263145916cc755fac5b1790904572f7_prof);

        
        $__internal_4b6b7e4ad72cfcd0e2b88e012aebd542b5cdfcce89873f9c0df553bf5e620cbe->leave($__internal_4b6b7e4ad72cfcd0e2b88e012aebd542b5cdfcce89873f9c0df553bf5e620cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
