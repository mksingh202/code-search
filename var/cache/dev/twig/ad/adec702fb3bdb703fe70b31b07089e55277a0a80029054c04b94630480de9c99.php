<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c73f1426a89a27d3df4d3ab742025888155ac227ec37736f22bcf27944919335 extends Twig_Template
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
        $__internal_98fe988b275298a0aa6d2e8db4723de5490fdb7e52bb3f5792fd30048c7c1ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fe988b275298a0aa6d2e8db4723de5490fdb7e52bb3f5792fd30048c7c1ca3->enter($__internal_98fe988b275298a0aa6d2e8db4723de5490fdb7e52bb3f5792fd30048c7c1ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2edaf86a47d3c32ec0eb61976a5aadd23b42f6b7669787f8e60aa9c0c73b1e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edaf86a47d3c32ec0eb61976a5aadd23b42f6b7669787f8e60aa9c0c73b1e82->enter($__internal_2edaf86a47d3c32ec0eb61976a5aadd23b42f6b7669787f8e60aa9c0c73b1e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_98fe988b275298a0aa6d2e8db4723de5490fdb7e52bb3f5792fd30048c7c1ca3->leave($__internal_98fe988b275298a0aa6d2e8db4723de5490fdb7e52bb3f5792fd30048c7c1ca3_prof);

        
        $__internal_2edaf86a47d3c32ec0eb61976a5aadd23b42f6b7669787f8e60aa9c0c73b1e82->leave($__internal_2edaf86a47d3c32ec0eb61976a5aadd23b42f6b7669787f8e60aa9c0c73b1e82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
