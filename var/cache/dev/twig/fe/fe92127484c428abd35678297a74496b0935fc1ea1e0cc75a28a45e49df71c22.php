<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7bcbbc30a72bc02267b3511d338066476cdfaf01c48bcd28f629a397bff464cc extends Twig_Template
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
        $__internal_a0690dcc6903a8105aed57528c35236b8a09b5979506c17601f84daf77df1d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0690dcc6903a8105aed57528c35236b8a09b5979506c17601f84daf77df1d9d->enter($__internal_a0690dcc6903a8105aed57528c35236b8a09b5979506c17601f84daf77df1d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4ec25e5f933ff178924d2cf96f49c16e0e90159dab852bca5904a721126d1081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec25e5f933ff178924d2cf96f49c16e0e90159dab852bca5904a721126d1081->enter($__internal_4ec25e5f933ff178924d2cf96f49c16e0e90159dab852bca5904a721126d1081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a0690dcc6903a8105aed57528c35236b8a09b5979506c17601f84daf77df1d9d->leave($__internal_a0690dcc6903a8105aed57528c35236b8a09b5979506c17601f84daf77df1d9d_prof);

        
        $__internal_4ec25e5f933ff178924d2cf96f49c16e0e90159dab852bca5904a721126d1081->leave($__internal_4ec25e5f933ff178924d2cf96f49c16e0e90159dab852bca5904a721126d1081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
