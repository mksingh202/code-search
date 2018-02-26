<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5fc978033dcfb7b22a1f7d16e854672d2d0d7a3b49b5134944a05cc8104c384e extends Twig_Template
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
        $__internal_537bd054a26bb7bd346f42e7938f6362532bd1b5532290a44d0391c90162756d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537bd054a26bb7bd346f42e7938f6362532bd1b5532290a44d0391c90162756d->enter($__internal_537bd054a26bb7bd346f42e7938f6362532bd1b5532290a44d0391c90162756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_62125b48964b3169e9d29b44f0efa2421ccec9975d1400dc0c512598f1c381d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62125b48964b3169e9d29b44f0efa2421ccec9975d1400dc0c512598f1c381d4->enter($__internal_62125b48964b3169e9d29b44f0efa2421ccec9975d1400dc0c512598f1c381d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_537bd054a26bb7bd346f42e7938f6362532bd1b5532290a44d0391c90162756d->leave($__internal_537bd054a26bb7bd346f42e7938f6362532bd1b5532290a44d0391c90162756d_prof);

        
        $__internal_62125b48964b3169e9d29b44f0efa2421ccec9975d1400dc0c512598f1c381d4->leave($__internal_62125b48964b3169e9d29b44f0efa2421ccec9975d1400dc0c512598f1c381d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
