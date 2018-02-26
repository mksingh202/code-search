<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_98b59ea694edac313dfdc07be46d2092b73885f88026e4235999de5b799ef1c8 extends Twig_Template
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
        $__internal_864daa608fb40bbf0856bbcf9ede84e181cd364e88101d9d1e96aadb3b87a833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864daa608fb40bbf0856bbcf9ede84e181cd364e88101d9d1e96aadb3b87a833->enter($__internal_864daa608fb40bbf0856bbcf9ede84e181cd364e88101d9d1e96aadb3b87a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0d0452518387ddab90db828c048e4cf0a6584c4815b4629e9954b9bd75f7c2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0452518387ddab90db828c048e4cf0a6584c4815b4629e9954b9bd75f7c2e1->enter($__internal_0d0452518387ddab90db828c048e4cf0a6584c4815b4629e9954b9bd75f7c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_864daa608fb40bbf0856bbcf9ede84e181cd364e88101d9d1e96aadb3b87a833->leave($__internal_864daa608fb40bbf0856bbcf9ede84e181cd364e88101d9d1e96aadb3b87a833_prof);

        
        $__internal_0d0452518387ddab90db828c048e4cf0a6584c4815b4629e9954b9bd75f7c2e1->leave($__internal_0d0452518387ddab90db828c048e4cf0a6584c4815b4629e9954b9bd75f7c2e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
