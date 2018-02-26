<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82d4d9c5383c418fe606d7b55d494200cf61b2453f3fa12892ae61f0342127fd extends Twig_Template
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
        $__internal_3095634ca45bd6d46d5f0e69071a8941db4e5cacf6f61105c7955e2868bc4db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3095634ca45bd6d46d5f0e69071a8941db4e5cacf6f61105c7955e2868bc4db5->enter($__internal_3095634ca45bd6d46d5f0e69071a8941db4e5cacf6f61105c7955e2868bc4db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d8aea39d9f3b256007833e3b62685aa88d5c36373292706e9a5604e2206f703d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8aea39d9f3b256007833e3b62685aa88d5c36373292706e9a5604e2206f703d->enter($__internal_d8aea39d9f3b256007833e3b62685aa88d5c36373292706e9a5604e2206f703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3095634ca45bd6d46d5f0e69071a8941db4e5cacf6f61105c7955e2868bc4db5->leave($__internal_3095634ca45bd6d46d5f0e69071a8941db4e5cacf6f61105c7955e2868bc4db5_prof);

        
        $__internal_d8aea39d9f3b256007833e3b62685aa88d5c36373292706e9a5604e2206f703d->leave($__internal_d8aea39d9f3b256007833e3b62685aa88d5c36373292706e9a5604e2206f703d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
