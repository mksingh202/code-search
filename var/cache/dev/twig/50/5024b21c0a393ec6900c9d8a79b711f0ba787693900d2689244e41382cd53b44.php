<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2818f5de66f7c73b402050293a901756a045a891705aa510cd53ed2f542f442a extends Twig_Template
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
        $__internal_4689f7db58b967cf7839a83b80f0199284a46f60dd08547718a79088b7d89016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4689f7db58b967cf7839a83b80f0199284a46f60dd08547718a79088b7d89016->enter($__internal_4689f7db58b967cf7839a83b80f0199284a46f60dd08547718a79088b7d89016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_13493311406ce5397229ac12756e8e4032f806e2e399bd891afcb8b2d1b6403e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13493311406ce5397229ac12756e8e4032f806e2e399bd891afcb8b2d1b6403e->enter($__internal_13493311406ce5397229ac12756e8e4032f806e2e399bd891afcb8b2d1b6403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4689f7db58b967cf7839a83b80f0199284a46f60dd08547718a79088b7d89016->leave($__internal_4689f7db58b967cf7839a83b80f0199284a46f60dd08547718a79088b7d89016_prof);

        
        $__internal_13493311406ce5397229ac12756e8e4032f806e2e399bd891afcb8b2d1b6403e->leave($__internal_13493311406ce5397229ac12756e8e4032f806e2e399bd891afcb8b2d1b6403e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
