<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b95de770a425510edc0ac017cc0ecf13991a47253535f7997bedb6cc0233641f extends Twig_Template
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
        $__internal_e5494569113d39e10b8256d21769b8ff6fcc5108821afd0eeda0a4c49d1d46be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5494569113d39e10b8256d21769b8ff6fcc5108821afd0eeda0a4c49d1d46be->enter($__internal_e5494569113d39e10b8256d21769b8ff6fcc5108821afd0eeda0a4c49d1d46be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_30de5c5dc118db44936b84de6e507e3d070198b14eca95ae2f4f5b14bfe4e4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30de5c5dc118db44936b84de6e507e3d070198b14eca95ae2f4f5b14bfe4e4be->enter($__internal_30de5c5dc118db44936b84de6e507e3d070198b14eca95ae2f4f5b14bfe4e4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e5494569113d39e10b8256d21769b8ff6fcc5108821afd0eeda0a4c49d1d46be->leave($__internal_e5494569113d39e10b8256d21769b8ff6fcc5108821afd0eeda0a4c49d1d46be_prof);

        
        $__internal_30de5c5dc118db44936b84de6e507e3d070198b14eca95ae2f4f5b14bfe4e4be->leave($__internal_30de5c5dc118db44936b84de6e507e3d070198b14eca95ae2f4f5b14bfe4e4be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
