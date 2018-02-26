<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_374d635035b461e00118dfa9f599634d0ceb2f28670508e30246ccff2d8cbb7c extends Twig_Template
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
        $__internal_b01b367d522853af838cc9119c0bf041582d575b747ec5167e2f1a6fe31de6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01b367d522853af838cc9119c0bf041582d575b747ec5167e2f1a6fe31de6d0->enter($__internal_b01b367d522853af838cc9119c0bf041582d575b747ec5167e2f1a6fe31de6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7261ab080ba7a433ffdd0675bd3f02a3a5265e44d3066aacc48fd90f8dc6d7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7261ab080ba7a433ffdd0675bd3f02a3a5265e44d3066aacc48fd90f8dc6d7f5->enter($__internal_7261ab080ba7a433ffdd0675bd3f02a3a5265e44d3066aacc48fd90f8dc6d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b01b367d522853af838cc9119c0bf041582d575b747ec5167e2f1a6fe31de6d0->leave($__internal_b01b367d522853af838cc9119c0bf041582d575b747ec5167e2f1a6fe31de6d0_prof);

        
        $__internal_7261ab080ba7a433ffdd0675bd3f02a3a5265e44d3066aacc48fd90f8dc6d7f5->leave($__internal_7261ab080ba7a433ffdd0675bd3f02a3a5265e44d3066aacc48fd90f8dc6d7f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
