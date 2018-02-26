<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1bd56e29c6bbce478d7245e00b5191af799cd72209f116b401e3d967f7841960 extends Twig_Template
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
        $__internal_c8c2e9cda44952cc3e4f7f5de3d42e5927e259d8f70f4eddf0d9cbddb3f5dc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c2e9cda44952cc3e4f7f5de3d42e5927e259d8f70f4eddf0d9cbddb3f5dc1b->enter($__internal_c8c2e9cda44952cc3e4f7f5de3d42e5927e259d8f70f4eddf0d9cbddb3f5dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d0c021a2ee17501ff36d1dd0e679818d012483d5927508a5841fc33f93bca7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c021a2ee17501ff36d1dd0e679818d012483d5927508a5841fc33f93bca7a0->enter($__internal_d0c021a2ee17501ff36d1dd0e679818d012483d5927508a5841fc33f93bca7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c8c2e9cda44952cc3e4f7f5de3d42e5927e259d8f70f4eddf0d9cbddb3f5dc1b->leave($__internal_c8c2e9cda44952cc3e4f7f5de3d42e5927e259d8f70f4eddf0d9cbddb3f5dc1b_prof);

        
        $__internal_d0c021a2ee17501ff36d1dd0e679818d012483d5927508a5841fc33f93bca7a0->leave($__internal_d0c021a2ee17501ff36d1dd0e679818d012483d5927508a5841fc33f93bca7a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
