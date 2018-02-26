<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6d5050b1d45c043bfe9980735838321a13cd63c9679c0cfc1e081c3d327256df extends Twig_Template
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
        $__internal_852e13d7d3b96b5074b823c73d855519177bd8fb067b6267486ec5c2888b71a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852e13d7d3b96b5074b823c73d855519177bd8fb067b6267486ec5c2888b71a5->enter($__internal_852e13d7d3b96b5074b823c73d855519177bd8fb067b6267486ec5c2888b71a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a143a18c79f1e4432bcef464104afdeffd881fc6feb4f852e0b5d1c2df9f5a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a143a18c79f1e4432bcef464104afdeffd881fc6feb4f852e0b5d1c2df9f5a47->enter($__internal_a143a18c79f1e4432bcef464104afdeffd881fc6feb4f852e0b5d1c2df9f5a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_852e13d7d3b96b5074b823c73d855519177bd8fb067b6267486ec5c2888b71a5->leave($__internal_852e13d7d3b96b5074b823c73d855519177bd8fb067b6267486ec5c2888b71a5_prof);

        
        $__internal_a143a18c79f1e4432bcef464104afdeffd881fc6feb4f852e0b5d1c2df9f5a47->leave($__internal_a143a18c79f1e4432bcef464104afdeffd881fc6feb4f852e0b5d1c2df9f5a47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
