<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a6f771cbd8749c7b356a2b47eca000c5e5e5f367ff34b091c3a782bb956829ed extends Twig_Template
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
        $__internal_a85a19a328afff5708dcb263cd1511b72253a4e33fff0c0e279ca9d197c6e411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85a19a328afff5708dcb263cd1511b72253a4e33fff0c0e279ca9d197c6e411->enter($__internal_a85a19a328afff5708dcb263cd1511b72253a4e33fff0c0e279ca9d197c6e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_15d1fde7638abfbb70e0aaacedd21951461790cfff13251d62fece4773803a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d1fde7638abfbb70e0aaacedd21951461790cfff13251d62fece4773803a0a->enter($__internal_15d1fde7638abfbb70e0aaacedd21951461790cfff13251d62fece4773803a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a85a19a328afff5708dcb263cd1511b72253a4e33fff0c0e279ca9d197c6e411->leave($__internal_a85a19a328afff5708dcb263cd1511b72253a4e33fff0c0e279ca9d197c6e411_prof);

        
        $__internal_15d1fde7638abfbb70e0aaacedd21951461790cfff13251d62fece4773803a0a->leave($__internal_15d1fde7638abfbb70e0aaacedd21951461790cfff13251d62fece4773803a0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
