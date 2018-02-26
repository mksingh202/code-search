<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5757865fbf47c41a20b73ee5154ffeeb7b62b1715a3d5b400b215b7665f1b534 extends Twig_Template
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
        $__internal_cc2384f156e68ceb885a72a602a5279f89b260e88aa2a51ba5872b72732202a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2384f156e68ceb885a72a602a5279f89b260e88aa2a51ba5872b72732202a3->enter($__internal_cc2384f156e68ceb885a72a602a5279f89b260e88aa2a51ba5872b72732202a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bf03b6277f7553a40cb1bb8e392eaa739178e363757810d87603cb131a7d3b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf03b6277f7553a40cb1bb8e392eaa739178e363757810d87603cb131a7d3b3a->enter($__internal_bf03b6277f7553a40cb1bb8e392eaa739178e363757810d87603cb131a7d3b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_cc2384f156e68ceb885a72a602a5279f89b260e88aa2a51ba5872b72732202a3->leave($__internal_cc2384f156e68ceb885a72a602a5279f89b260e88aa2a51ba5872b72732202a3_prof);

        
        $__internal_bf03b6277f7553a40cb1bb8e392eaa739178e363757810d87603cb131a7d3b3a->leave($__internal_bf03b6277f7553a40cb1bb8e392eaa739178e363757810d87603cb131a7d3b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
