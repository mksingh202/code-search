<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3bfc2ad390476dc02d96dade6dc736fe492209422594c16b8ef4d89098c9bb42 extends Twig_Template
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
        $__internal_d038a71703ae8aef5e35aafe4ef16414c244d82c45094dd15587a2fe11b919cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d038a71703ae8aef5e35aafe4ef16414c244d82c45094dd15587a2fe11b919cd->enter($__internal_d038a71703ae8aef5e35aafe4ef16414c244d82c45094dd15587a2fe11b919cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_663b88f98f023384feef07b21e5a6c6511f0dc7e596eeabfe0d29efd66403ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663b88f98f023384feef07b21e5a6c6511f0dc7e596eeabfe0d29efd66403ce2->enter($__internal_663b88f98f023384feef07b21e5a6c6511f0dc7e596eeabfe0d29efd66403ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d038a71703ae8aef5e35aafe4ef16414c244d82c45094dd15587a2fe11b919cd->leave($__internal_d038a71703ae8aef5e35aafe4ef16414c244d82c45094dd15587a2fe11b919cd_prof);

        
        $__internal_663b88f98f023384feef07b21e5a6c6511f0dc7e596eeabfe0d29efd66403ce2->leave($__internal_663b88f98f023384feef07b21e5a6c6511f0dc7e596eeabfe0d29efd66403ce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
