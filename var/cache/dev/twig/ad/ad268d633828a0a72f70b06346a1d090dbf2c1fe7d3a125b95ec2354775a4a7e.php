<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_103402f2fe625c796c373a447c42f2b024a28d8845ae19f36f5d1ef64c8a3989 extends Twig_Template
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
        $__internal_19ea175ea602f9f7b69e113eb04e2ca9c426abe25f24715a1e9b7513a158ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ea175ea602f9f7b69e113eb04e2ca9c426abe25f24715a1e9b7513a158ea69->enter($__internal_19ea175ea602f9f7b69e113eb04e2ca9c426abe25f24715a1e9b7513a158ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4e2cf8e5aba1acb83f18239f2a3fee57333a15f1c206681b90620ee31c98b214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2cf8e5aba1acb83f18239f2a3fee57333a15f1c206681b90620ee31c98b214->enter($__internal_4e2cf8e5aba1acb83f18239f2a3fee57333a15f1c206681b90620ee31c98b214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_19ea175ea602f9f7b69e113eb04e2ca9c426abe25f24715a1e9b7513a158ea69->leave($__internal_19ea175ea602f9f7b69e113eb04e2ca9c426abe25f24715a1e9b7513a158ea69_prof);

        
        $__internal_4e2cf8e5aba1acb83f18239f2a3fee57333a15f1c206681b90620ee31c98b214->leave($__internal_4e2cf8e5aba1acb83f18239f2a3fee57333a15f1c206681b90620ee31c98b214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
