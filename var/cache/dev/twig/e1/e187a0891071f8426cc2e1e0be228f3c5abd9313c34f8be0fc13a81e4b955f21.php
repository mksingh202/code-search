<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c7949913d98be664e2f194765d6b72c86aaa8bf0a027d8357fba8f6a74dc469e extends Twig_Template
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
        $__internal_f81c545fc4d4ddf7228ae5ded6cec675afedf7d18a360c6fe71f9227e754f324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81c545fc4d4ddf7228ae5ded6cec675afedf7d18a360c6fe71f9227e754f324->enter($__internal_f81c545fc4d4ddf7228ae5ded6cec675afedf7d18a360c6fe71f9227e754f324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f40246646dce24236f00cda15929be34af05f9dffb17cfa6551cfb0f555c45b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40246646dce24236f00cda15929be34af05f9dffb17cfa6551cfb0f555c45b7->enter($__internal_f40246646dce24236f00cda15929be34af05f9dffb17cfa6551cfb0f555c45b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f81c545fc4d4ddf7228ae5ded6cec675afedf7d18a360c6fe71f9227e754f324->leave($__internal_f81c545fc4d4ddf7228ae5ded6cec675afedf7d18a360c6fe71f9227e754f324_prof);

        
        $__internal_f40246646dce24236f00cda15929be34af05f9dffb17cfa6551cfb0f555c45b7->leave($__internal_f40246646dce24236f00cda15929be34af05f9dffb17cfa6551cfb0f555c45b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
