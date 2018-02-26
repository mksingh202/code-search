<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_80efc62d5c886efa4a13a75ec44f992364fd20f4c09c3c039c2068c63b9e8e47 extends Twig_Template
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
        $__internal_b11a28bf2bc34785ffaac2f2b7f9b969dbbb6bdd1a8e2914d2f3bdcb124dedfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11a28bf2bc34785ffaac2f2b7f9b969dbbb6bdd1a8e2914d2f3bdcb124dedfa->enter($__internal_b11a28bf2bc34785ffaac2f2b7f9b969dbbb6bdd1a8e2914d2f3bdcb124dedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_726a0e722b2d13771c24cfd2a6ee7ceb25f4798fa97b3c4d554a921ed57cb7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726a0e722b2d13771c24cfd2a6ee7ceb25f4798fa97b3c4d554a921ed57cb7a3->enter($__internal_726a0e722b2d13771c24cfd2a6ee7ceb25f4798fa97b3c4d554a921ed57cb7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b11a28bf2bc34785ffaac2f2b7f9b969dbbb6bdd1a8e2914d2f3bdcb124dedfa->leave($__internal_b11a28bf2bc34785ffaac2f2b7f9b969dbbb6bdd1a8e2914d2f3bdcb124dedfa_prof);

        
        $__internal_726a0e722b2d13771c24cfd2a6ee7ceb25f4798fa97b3c4d554a921ed57cb7a3->leave($__internal_726a0e722b2d13771c24cfd2a6ee7ceb25f4798fa97b3c4d554a921ed57cb7a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
