<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_44966162161668ef6d559626d2e0f823176327087b6383153d130f180c593aeb extends Twig_Template
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
        $__internal_2bfffea1f354c6800a5e8d36b90dc3aff38af589202b22c1fbc61e8967b73216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfffea1f354c6800a5e8d36b90dc3aff38af589202b22c1fbc61e8967b73216->enter($__internal_2bfffea1f354c6800a5e8d36b90dc3aff38af589202b22c1fbc61e8967b73216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a9ab11247643df90a97e6434156d4530d1b12ea96dd35f79d447ec0917d7b6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab11247643df90a97e6434156d4530d1b12ea96dd35f79d447ec0917d7b6b9->enter($__internal_a9ab11247643df90a97e6434156d4530d1b12ea96dd35f79d447ec0917d7b6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2bfffea1f354c6800a5e8d36b90dc3aff38af589202b22c1fbc61e8967b73216->leave($__internal_2bfffea1f354c6800a5e8d36b90dc3aff38af589202b22c1fbc61e8967b73216_prof);

        
        $__internal_a9ab11247643df90a97e6434156d4530d1b12ea96dd35f79d447ec0917d7b6b9->leave($__internal_a9ab11247643df90a97e6434156d4530d1b12ea96dd35f79d447ec0917d7b6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
