<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d9cf54258485c46811f83aec8a15d6f509eaf6b9d8b80d3eb3c5c72afa77a21c extends Twig_Template
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
        $__internal_067be070e93085afc393f20413433f2c8d51eef573143b6eff987b8b698e9cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067be070e93085afc393f20413433f2c8d51eef573143b6eff987b8b698e9cf6->enter($__internal_067be070e93085afc393f20413433f2c8d51eef573143b6eff987b8b698e9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_68c1e65e267e4fa819cbf9530c137c4f09a2dc4eef6c52b6b6501b0467fcb42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c1e65e267e4fa819cbf9530c137c4f09a2dc4eef6c52b6b6501b0467fcb42c->enter($__internal_68c1e65e267e4fa819cbf9530c137c4f09a2dc4eef6c52b6b6501b0467fcb42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_067be070e93085afc393f20413433f2c8d51eef573143b6eff987b8b698e9cf6->leave($__internal_067be070e93085afc393f20413433f2c8d51eef573143b6eff987b8b698e9cf6_prof);

        
        $__internal_68c1e65e267e4fa819cbf9530c137c4f09a2dc4eef6c52b6b6501b0467fcb42c->leave($__internal_68c1e65e267e4fa819cbf9530c137c4f09a2dc4eef6c52b6b6501b0467fcb42c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
