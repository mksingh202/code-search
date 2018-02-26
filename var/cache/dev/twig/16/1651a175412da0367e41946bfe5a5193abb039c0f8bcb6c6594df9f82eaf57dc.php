<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_591300b55f5038f5252263a840c0b657ec0102fa5ccb57c390ea9fe282479e1a extends Twig_Template
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
        $__internal_7978be22798f8a66e4d9ab53b64dac67e8c926f0bb621b00392cf1d556a133c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7978be22798f8a66e4d9ab53b64dac67e8c926f0bb621b00392cf1d556a133c7->enter($__internal_7978be22798f8a66e4d9ab53b64dac67e8c926f0bb621b00392cf1d556a133c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_88ad3179e528292efb964a4471fc688c7ff9bddbfabf7b69504c443b480a9c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ad3179e528292efb964a4471fc688c7ff9bddbfabf7b69504c443b480a9c88->enter($__internal_88ad3179e528292efb964a4471fc688c7ff9bddbfabf7b69504c443b480a9c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7978be22798f8a66e4d9ab53b64dac67e8c926f0bb621b00392cf1d556a133c7->leave($__internal_7978be22798f8a66e4d9ab53b64dac67e8c926f0bb621b00392cf1d556a133c7_prof);

        
        $__internal_88ad3179e528292efb964a4471fc688c7ff9bddbfabf7b69504c443b480a9c88->leave($__internal_88ad3179e528292efb964a4471fc688c7ff9bddbfabf7b69504c443b480a9c88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
