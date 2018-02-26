<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_dabbab85ec95dc9ce6449206194224c2f0b7c1c6fc66f709646a5c4dbc41d5f4 extends Twig_Template
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
        $__internal_22de26e92dcf1f75f4be5e14975a53c0bedd9370411f0077bd4efb7d93386475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22de26e92dcf1f75f4be5e14975a53c0bedd9370411f0077bd4efb7d93386475->enter($__internal_22de26e92dcf1f75f4be5e14975a53c0bedd9370411f0077bd4efb7d93386475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3d016b2252dde724d64fdea31f4d943f05a21aa6388e37282aaa17fea0f753c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d016b2252dde724d64fdea31f4d943f05a21aa6388e37282aaa17fea0f753c3->enter($__internal_3d016b2252dde724d64fdea31f4d943f05a21aa6388e37282aaa17fea0f753c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_22de26e92dcf1f75f4be5e14975a53c0bedd9370411f0077bd4efb7d93386475->leave($__internal_22de26e92dcf1f75f4be5e14975a53c0bedd9370411f0077bd4efb7d93386475_prof);

        
        $__internal_3d016b2252dde724d64fdea31f4d943f05a21aa6388e37282aaa17fea0f753c3->leave($__internal_3d016b2252dde724d64fdea31f4d943f05a21aa6388e37282aaa17fea0f753c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
