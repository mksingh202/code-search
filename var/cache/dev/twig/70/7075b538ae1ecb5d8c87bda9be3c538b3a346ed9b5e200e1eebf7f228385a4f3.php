<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e565bc2dccd0caa13814c2399c3ad41ca598d8302726923fd9d8def905ab134a extends Twig_Template
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
        $__internal_abf371379a36eb1f3b8a3426341638f74284b7ccc66774ea284f817ecd2d79a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf371379a36eb1f3b8a3426341638f74284b7ccc66774ea284f817ecd2d79a2->enter($__internal_abf371379a36eb1f3b8a3426341638f74284b7ccc66774ea284f817ecd2d79a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5dd7d228dc09f63cebf011bacf04791736e7ae678ac081617eabbbbdf54ad354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd7d228dc09f63cebf011bacf04791736e7ae678ac081617eabbbbdf54ad354->enter($__internal_5dd7d228dc09f63cebf011bacf04791736e7ae678ac081617eabbbbdf54ad354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_abf371379a36eb1f3b8a3426341638f74284b7ccc66774ea284f817ecd2d79a2->leave($__internal_abf371379a36eb1f3b8a3426341638f74284b7ccc66774ea284f817ecd2d79a2_prof);

        
        $__internal_5dd7d228dc09f63cebf011bacf04791736e7ae678ac081617eabbbbdf54ad354->leave($__internal_5dd7d228dc09f63cebf011bacf04791736e7ae678ac081617eabbbbdf54ad354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
