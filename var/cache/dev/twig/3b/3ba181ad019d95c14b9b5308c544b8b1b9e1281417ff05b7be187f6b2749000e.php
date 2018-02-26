<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4fe20f3b341e49edae8f6876a2537868fa780992b683bd695652f3753f78f285 extends Twig_Template
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
        $__internal_9fd27ce8e3fbe92a4fecf8d36975f9d0ecbc9afefd3cccdd773c0a60bbc760a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd27ce8e3fbe92a4fecf8d36975f9d0ecbc9afefd3cccdd773c0a60bbc760a7->enter($__internal_9fd27ce8e3fbe92a4fecf8d36975f9d0ecbc9afefd3cccdd773c0a60bbc760a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0f58b0e4c50ae85f0f7552b6429e10dff387eac22c463ba44d8c33090b9a9d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f58b0e4c50ae85f0f7552b6429e10dff387eac22c463ba44d8c33090b9a9d02->enter($__internal_0f58b0e4c50ae85f0f7552b6429e10dff387eac22c463ba44d8c33090b9a9d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9fd27ce8e3fbe92a4fecf8d36975f9d0ecbc9afefd3cccdd773c0a60bbc760a7->leave($__internal_9fd27ce8e3fbe92a4fecf8d36975f9d0ecbc9afefd3cccdd773c0a60bbc760a7_prof);

        
        $__internal_0f58b0e4c50ae85f0f7552b6429e10dff387eac22c463ba44d8c33090b9a9d02->leave($__internal_0f58b0e4c50ae85f0f7552b6429e10dff387eac22c463ba44d8c33090b9a9d02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
