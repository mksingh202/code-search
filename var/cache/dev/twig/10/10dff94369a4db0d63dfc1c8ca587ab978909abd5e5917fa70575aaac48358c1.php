<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9f26a11e28849fc20543db0bef26d2cdb6d96efd83b90ec93327797342531f54 extends Twig_Template
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
        $__internal_a6e67108d5ecb90c6cbeb214faf4fc9257a409e0a449ba8ae02fc09abf1941bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e67108d5ecb90c6cbeb214faf4fc9257a409e0a449ba8ae02fc09abf1941bb->enter($__internal_a6e67108d5ecb90c6cbeb214faf4fc9257a409e0a449ba8ae02fc09abf1941bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ab113b414a563db781e26754d5ea8bef818bcfbc53b4bafaea36a163b1d458db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab113b414a563db781e26754d5ea8bef818bcfbc53b4bafaea36a163b1d458db->enter($__internal_ab113b414a563db781e26754d5ea8bef818bcfbc53b4bafaea36a163b1d458db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a6e67108d5ecb90c6cbeb214faf4fc9257a409e0a449ba8ae02fc09abf1941bb->leave($__internal_a6e67108d5ecb90c6cbeb214faf4fc9257a409e0a449ba8ae02fc09abf1941bb_prof);

        
        $__internal_ab113b414a563db781e26754d5ea8bef818bcfbc53b4bafaea36a163b1d458db->leave($__internal_ab113b414a563db781e26754d5ea8bef818bcfbc53b4bafaea36a163b1d458db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
