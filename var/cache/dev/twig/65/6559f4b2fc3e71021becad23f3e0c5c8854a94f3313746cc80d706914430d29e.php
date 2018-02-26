<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_00cb2e724e888741a18e34297f1005a9f01e34a9dfcb3a084ceaa43684f6fe73 extends Twig_Template
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
        $__internal_8927beeb847657224f6c778b9b2a0c7fbfc72d6a8b549d8d3e25f4939855256a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8927beeb847657224f6c778b9b2a0c7fbfc72d6a8b549d8d3e25f4939855256a->enter($__internal_8927beeb847657224f6c778b9b2a0c7fbfc72d6a8b549d8d3e25f4939855256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_624f9d217e693239ff402a4b32707537f232868cc61af1ced15d649e32f0ffa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624f9d217e693239ff402a4b32707537f232868cc61af1ced15d649e32f0ffa5->enter($__internal_624f9d217e693239ff402a4b32707537f232868cc61af1ced15d649e32f0ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8927beeb847657224f6c778b9b2a0c7fbfc72d6a8b549d8d3e25f4939855256a->leave($__internal_8927beeb847657224f6c778b9b2a0c7fbfc72d6a8b549d8d3e25f4939855256a_prof);

        
        $__internal_624f9d217e693239ff402a4b32707537f232868cc61af1ced15d649e32f0ffa5->leave($__internal_624f9d217e693239ff402a4b32707537f232868cc61af1ced15d649e32f0ffa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
