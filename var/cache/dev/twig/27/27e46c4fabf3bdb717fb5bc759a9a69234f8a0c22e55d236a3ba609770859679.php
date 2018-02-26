<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cba64fa231d99290cd0b64fb6393b375dadf5707a30015bf1c6628b6e23802b5 extends Twig_Template
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
        $__internal_d1dd3bcb20e001a64d6f7a5467ab2f44dc298ebeca7b5a7b6f7ed23c34315df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dd3bcb20e001a64d6f7a5467ab2f44dc298ebeca7b5a7b6f7ed23c34315df3->enter($__internal_d1dd3bcb20e001a64d6f7a5467ab2f44dc298ebeca7b5a7b6f7ed23c34315df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a197c408363c9cf5cf1d63e8d16b3c1d60a927310086f550ee4f86e5b60a6ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a197c408363c9cf5cf1d63e8d16b3c1d60a927310086f550ee4f86e5b60a6ccd->enter($__internal_a197c408363c9cf5cf1d63e8d16b3c1d60a927310086f550ee4f86e5b60a6ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d1dd3bcb20e001a64d6f7a5467ab2f44dc298ebeca7b5a7b6f7ed23c34315df3->leave($__internal_d1dd3bcb20e001a64d6f7a5467ab2f44dc298ebeca7b5a7b6f7ed23c34315df3_prof);

        
        $__internal_a197c408363c9cf5cf1d63e8d16b3c1d60a927310086f550ee4f86e5b60a6ccd->leave($__internal_a197c408363c9cf5cf1d63e8d16b3c1d60a927310086f550ee4f86e5b60a6ccd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
