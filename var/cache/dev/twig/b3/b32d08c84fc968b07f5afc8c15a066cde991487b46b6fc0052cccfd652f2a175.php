<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_031ebe877cecdcdbd581c9b4859dc62b493243ba42628e9373656a0eaec043f6 extends Twig_Template
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
        $__internal_b92dc90f41a1f5ce570777960ba41ba0954f327fbfe3b908424dcd12c9fb5b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92dc90f41a1f5ce570777960ba41ba0954f327fbfe3b908424dcd12c9fb5b0b->enter($__internal_b92dc90f41a1f5ce570777960ba41ba0954f327fbfe3b908424dcd12c9fb5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1a9184b1b15c0d64b3ce2aab65c0a3f620fc03fd258cc1f54764b3128e7ad5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9184b1b15c0d64b3ce2aab65c0a3f620fc03fd258cc1f54764b3128e7ad5cc->enter($__internal_1a9184b1b15c0d64b3ce2aab65c0a3f620fc03fd258cc1f54764b3128e7ad5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b92dc90f41a1f5ce570777960ba41ba0954f327fbfe3b908424dcd12c9fb5b0b->leave($__internal_b92dc90f41a1f5ce570777960ba41ba0954f327fbfe3b908424dcd12c9fb5b0b_prof);

        
        $__internal_1a9184b1b15c0d64b3ce2aab65c0a3f620fc03fd258cc1f54764b3128e7ad5cc->leave($__internal_1a9184b1b15c0d64b3ce2aab65c0a3f620fc03fd258cc1f54764b3128e7ad5cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
