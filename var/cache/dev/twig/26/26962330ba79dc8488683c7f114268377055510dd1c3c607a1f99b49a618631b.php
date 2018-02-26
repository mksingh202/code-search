<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_23c40ab8cc996eab5dda574b38039f8ac9eb048f1a2010c9c7c38ecf79a8738a extends Twig_Template
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
        $__internal_cbd7e311f60e2f7879bdbc07b0e378d914892ec391d82c5f8ef486253f521210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd7e311f60e2f7879bdbc07b0e378d914892ec391d82c5f8ef486253f521210->enter($__internal_cbd7e311f60e2f7879bdbc07b0e378d914892ec391d82c5f8ef486253f521210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_a36339fc66c182f6ecc9c668f041337c36493fc0d307d2a3472334dbb36f6581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36339fc66c182f6ecc9c668f041337c36493fc0d307d2a3472334dbb36f6581->enter($__internal_a36339fc66c182f6ecc9c668f041337c36493fc0d307d2a3472334dbb36f6581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_cbd7e311f60e2f7879bdbc07b0e378d914892ec391d82c5f8ef486253f521210->leave($__internal_cbd7e311f60e2f7879bdbc07b0e378d914892ec391d82c5f8ef486253f521210_prof);

        
        $__internal_a36339fc66c182f6ecc9c668f041337c36493fc0d307d2a3472334dbb36f6581->leave($__internal_a36339fc66c182f6ecc9c668f041337c36493fc0d307d2a3472334dbb36f6581_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
