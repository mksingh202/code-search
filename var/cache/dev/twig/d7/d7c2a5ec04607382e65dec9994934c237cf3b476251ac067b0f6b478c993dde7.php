<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_2bbeadaf2730653e669935fc73b8820d1fe787a9b52b27f923d4348f1d6d5075 extends Twig_Template
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
        $__internal_5130457cda405f3d35fe87fe6a54dedd1cb9f7f3533fe69a06e81616153e3faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5130457cda405f3d35fe87fe6a54dedd1cb9f7f3533fe69a06e81616153e3faa->enter($__internal_5130457cda405f3d35fe87fe6a54dedd1cb9f7f3533fe69a06e81616153e3faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_77f9f9e288b3783114f00db98330fc05408a44b208fe1636b9c9be21ea0ea20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f9f9e288b3783114f00db98330fc05408a44b208fe1636b9c9be21ea0ea20a->enter($__internal_77f9f9e288b3783114f00db98330fc05408a44b208fe1636b9c9be21ea0ea20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5130457cda405f3d35fe87fe6a54dedd1cb9f7f3533fe69a06e81616153e3faa->leave($__internal_5130457cda405f3d35fe87fe6a54dedd1cb9f7f3533fe69a06e81616153e3faa_prof);

        
        $__internal_77f9f9e288b3783114f00db98330fc05408a44b208fe1636b9c9be21ea0ea20a->leave($__internal_77f9f9e288b3783114f00db98330fc05408a44b208fe1636b9c9be21ea0ea20a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
