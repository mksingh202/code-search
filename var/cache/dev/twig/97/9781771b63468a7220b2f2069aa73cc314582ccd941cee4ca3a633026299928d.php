<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b134596063011e1ecf1260e9ab45015c761b412ba448f4acc49d2a20181d2d57 extends Twig_Template
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
        $__internal_7454de7bb8cbdda99b13ca396b0264055e46335860d541e3271c158bfd3fda26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7454de7bb8cbdda99b13ca396b0264055e46335860d541e3271c158bfd3fda26->enter($__internal_7454de7bb8cbdda99b13ca396b0264055e46335860d541e3271c158bfd3fda26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f474a13e13b610f78c36e89e433940702fb7507a72bf9ed7798c2e6229962476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f474a13e13b610f78c36e89e433940702fb7507a72bf9ed7798c2e6229962476->enter($__internal_f474a13e13b610f78c36e89e433940702fb7507a72bf9ed7798c2e6229962476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7454de7bb8cbdda99b13ca396b0264055e46335860d541e3271c158bfd3fda26->leave($__internal_7454de7bb8cbdda99b13ca396b0264055e46335860d541e3271c158bfd3fda26_prof);

        
        $__internal_f474a13e13b610f78c36e89e433940702fb7507a72bf9ed7798c2e6229962476->leave($__internal_f474a13e13b610f78c36e89e433940702fb7507a72bf9ed7798c2e6229962476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
