<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8dba93186f2c951ccb62af7db055db21546af10947b91bc3b849e0285667620f extends Twig_Template
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
        $__internal_761d4e4d7c8d7b06dcb7a675fd4e98ac29b45d98b56b14c34b2bac4f1b08f14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761d4e4d7c8d7b06dcb7a675fd4e98ac29b45d98b56b14c34b2bac4f1b08f14e->enter($__internal_761d4e4d7c8d7b06dcb7a675fd4e98ac29b45d98b56b14c34b2bac4f1b08f14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7957d59359aaa13e96c710198ee4be65f4f4d6f62f02a4ae838b08ee4fe379bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7957d59359aaa13e96c710198ee4be65f4f4d6f62f02a4ae838b08ee4fe379bc->enter($__internal_7957d59359aaa13e96c710198ee4be65f4f4d6f62f02a4ae838b08ee4fe379bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_761d4e4d7c8d7b06dcb7a675fd4e98ac29b45d98b56b14c34b2bac4f1b08f14e->leave($__internal_761d4e4d7c8d7b06dcb7a675fd4e98ac29b45d98b56b14c34b2bac4f1b08f14e_prof);

        
        $__internal_7957d59359aaa13e96c710198ee4be65f4f4d6f62f02a4ae838b08ee4fe379bc->leave($__internal_7957d59359aaa13e96c710198ee4be65f4f4d6f62f02a4ae838b08ee4fe379bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
