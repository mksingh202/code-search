<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3d1083ba5eeeb3b8aec2d467d31e6ed2ffa984705e685af564006198840b882b extends Twig_Template
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
        $__internal_b11e2bd13396fd19b8b7257f5847374aa85ac14fb56034167029753777ddceb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11e2bd13396fd19b8b7257f5847374aa85ac14fb56034167029753777ddceb5->enter($__internal_b11e2bd13396fd19b8b7257f5847374aa85ac14fb56034167029753777ddceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5fde3f4134a49dc7b6e6c269cc8cb088e9b82b462bceac7ae952197397c35cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fde3f4134a49dc7b6e6c269cc8cb088e9b82b462bceac7ae952197397c35cad->enter($__internal_5fde3f4134a49dc7b6e6c269cc8cb088e9b82b462bceac7ae952197397c35cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b11e2bd13396fd19b8b7257f5847374aa85ac14fb56034167029753777ddceb5->leave($__internal_b11e2bd13396fd19b8b7257f5847374aa85ac14fb56034167029753777ddceb5_prof);

        
        $__internal_5fde3f4134a49dc7b6e6c269cc8cb088e9b82b462bceac7ae952197397c35cad->leave($__internal_5fde3f4134a49dc7b6e6c269cc8cb088e9b82b462bceac7ae952197397c35cad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
