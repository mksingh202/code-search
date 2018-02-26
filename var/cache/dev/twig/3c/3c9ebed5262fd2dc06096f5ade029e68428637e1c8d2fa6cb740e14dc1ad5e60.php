<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fe0d7eced052864bb7c928ac9096fd6510a02dda495389816898ef38dd642a77 extends Twig_Template
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
        $__internal_df41a75ab34b8bb6491efac4acabd53e33fc5151e9763e8a95a2bc400fa52364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df41a75ab34b8bb6491efac4acabd53e33fc5151e9763e8a95a2bc400fa52364->enter($__internal_df41a75ab34b8bb6491efac4acabd53e33fc5151e9763e8a95a2bc400fa52364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_fda0ed38ab6013fc38bfa6a331f3a34289936de65503ccb25700ec43a2b6196d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda0ed38ab6013fc38bfa6a331f3a34289936de65503ccb25700ec43a2b6196d->enter($__internal_fda0ed38ab6013fc38bfa6a331f3a34289936de65503ccb25700ec43a2b6196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_df41a75ab34b8bb6491efac4acabd53e33fc5151e9763e8a95a2bc400fa52364->leave($__internal_df41a75ab34b8bb6491efac4acabd53e33fc5151e9763e8a95a2bc400fa52364_prof);

        
        $__internal_fda0ed38ab6013fc38bfa6a331f3a34289936de65503ccb25700ec43a2b6196d->leave($__internal_fda0ed38ab6013fc38bfa6a331f3a34289936de65503ccb25700ec43a2b6196d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
