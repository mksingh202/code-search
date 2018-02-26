<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0e94fce16b3e154189969c703f4bc31d4ed26f7917aa6f7b1e69cde092be6e5 extends Twig_Template
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
        $__internal_0c537d0cb4cc4c3a5e1b742da266fd640ff8b24db8083db41daeaa32fab97cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c537d0cb4cc4c3a5e1b742da266fd640ff8b24db8083db41daeaa32fab97cc9->enter($__internal_0c537d0cb4cc4c3a5e1b742da266fd640ff8b24db8083db41daeaa32fab97cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_203ee3e0292a6b35887d2cba496abce0b14220256f48ee54043c6ca9b34e83b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203ee3e0292a6b35887d2cba496abce0b14220256f48ee54043c6ca9b34e83b4->enter($__internal_203ee3e0292a6b35887d2cba496abce0b14220256f48ee54043c6ca9b34e83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0c537d0cb4cc4c3a5e1b742da266fd640ff8b24db8083db41daeaa32fab97cc9->leave($__internal_0c537d0cb4cc4c3a5e1b742da266fd640ff8b24db8083db41daeaa32fab97cc9_prof);

        
        $__internal_203ee3e0292a6b35887d2cba496abce0b14220256f48ee54043c6ca9b34e83b4->leave($__internal_203ee3e0292a6b35887d2cba496abce0b14220256f48ee54043c6ca9b34e83b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
