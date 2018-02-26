<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e48f7dd6287a9dffe310d0d20e70bf14d2acaab4347c22f1a33a1845bacc5800 extends Twig_Template
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
        $__internal_ce2412095a193779a44638d907005d178692a2bf4c29be7d01a9b56a0e55235f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2412095a193779a44638d907005d178692a2bf4c29be7d01a9b56a0e55235f->enter($__internal_ce2412095a193779a44638d907005d178692a2bf4c29be7d01a9b56a0e55235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_34d4339d68adc309a734b950e28c123e4d84e1389c9edc99fcfbd6f7102f03cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d4339d68adc309a734b950e28c123e4d84e1389c9edc99fcfbd6f7102f03cd->enter($__internal_34d4339d68adc309a734b950e28c123e4d84e1389c9edc99fcfbd6f7102f03cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ce2412095a193779a44638d907005d178692a2bf4c29be7d01a9b56a0e55235f->leave($__internal_ce2412095a193779a44638d907005d178692a2bf4c29be7d01a9b56a0e55235f_prof);

        
        $__internal_34d4339d68adc309a734b950e28c123e4d84e1389c9edc99fcfbd6f7102f03cd->leave($__internal_34d4339d68adc309a734b950e28c123e4d84e1389c9edc99fcfbd6f7102f03cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
