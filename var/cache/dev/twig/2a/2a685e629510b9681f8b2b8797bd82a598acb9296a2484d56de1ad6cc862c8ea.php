<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_02f659eff18e2c623bca26c9e25c44e9b5c5f27002edf0ab9d579b9b6a6da9b0 extends Twig_Template
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
        $__internal_7bf8933a1f484f02b6c8148a01a8ccac9df5e080bc9764a171df07e03634073c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf8933a1f484f02b6c8148a01a8ccac9df5e080bc9764a171df07e03634073c->enter($__internal_7bf8933a1f484f02b6c8148a01a8ccac9df5e080bc9764a171df07e03634073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_48d1c6920941d1575d114138bc63a732b1dae89f7f794f1244d4e10865dc8951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d1c6920941d1575d114138bc63a732b1dae89f7f794f1244d4e10865dc8951->enter($__internal_48d1c6920941d1575d114138bc63a732b1dae89f7f794f1244d4e10865dc8951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7bf8933a1f484f02b6c8148a01a8ccac9df5e080bc9764a171df07e03634073c->leave($__internal_7bf8933a1f484f02b6c8148a01a8ccac9df5e080bc9764a171df07e03634073c_prof);

        
        $__internal_48d1c6920941d1575d114138bc63a732b1dae89f7f794f1244d4e10865dc8951->leave($__internal_48d1c6920941d1575d114138bc63a732b1dae89f7f794f1244d4e10865dc8951_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
