<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_fa0cb8c67888080e45008f78eb5bc8d6f381186c24486552dce568a44afd6d10 extends Twig_Template
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
        $__internal_dcf36c75c2f1ce237080080f0e46359aed114eaa4fb172b67cf0ddecd68ecc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf36c75c2f1ce237080080f0e46359aed114eaa4fb172b67cf0ddecd68ecc03->enter($__internal_dcf36c75c2f1ce237080080f0e46359aed114eaa4fb172b67cf0ddecd68ecc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_385f2439399daa30617b659bcf1bf966c9a1c94ede6afbb1d20e1df39a8bdf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385f2439399daa30617b659bcf1bf966c9a1c94ede6afbb1d20e1df39a8bdf40->enter($__internal_385f2439399daa30617b659bcf1bf966c9a1c94ede6afbb1d20e1df39a8bdf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dcf36c75c2f1ce237080080f0e46359aed114eaa4fb172b67cf0ddecd68ecc03->leave($__internal_dcf36c75c2f1ce237080080f0e46359aed114eaa4fb172b67cf0ddecd68ecc03_prof);

        
        $__internal_385f2439399daa30617b659bcf1bf966c9a1c94ede6afbb1d20e1df39a8bdf40->leave($__internal_385f2439399daa30617b659bcf1bf966c9a1c94ede6afbb1d20e1df39a8bdf40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
