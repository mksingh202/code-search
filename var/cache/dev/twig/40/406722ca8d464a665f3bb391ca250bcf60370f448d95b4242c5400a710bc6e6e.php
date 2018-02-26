<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7c3b85916d20791f3128ca76610cd97ffe5676705f828c6968cff47ab886b54c extends Twig_Template
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
        $__internal_d87bb5b33c40ce41fcf3c1fb45cbfc2a3e2a11c35bf98c99dc8f634b41b8f7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87bb5b33c40ce41fcf3c1fb45cbfc2a3e2a11c35bf98c99dc8f634b41b8f7d1->enter($__internal_d87bb5b33c40ce41fcf3c1fb45cbfc2a3e2a11c35bf98c99dc8f634b41b8f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_522fc78cec63c66f529696676bc6b58c965e9a0d0063d0a19fd32adad7ae222f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522fc78cec63c66f529696676bc6b58c965e9a0d0063d0a19fd32adad7ae222f->enter($__internal_522fc78cec63c66f529696676bc6b58c965e9a0d0063d0a19fd32adad7ae222f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d87bb5b33c40ce41fcf3c1fb45cbfc2a3e2a11c35bf98c99dc8f634b41b8f7d1->leave($__internal_d87bb5b33c40ce41fcf3c1fb45cbfc2a3e2a11c35bf98c99dc8f634b41b8f7d1_prof);

        
        $__internal_522fc78cec63c66f529696676bc6b58c965e9a0d0063d0a19fd32adad7ae222f->leave($__internal_522fc78cec63c66f529696676bc6b58c965e9a0d0063d0a19fd32adad7ae222f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
