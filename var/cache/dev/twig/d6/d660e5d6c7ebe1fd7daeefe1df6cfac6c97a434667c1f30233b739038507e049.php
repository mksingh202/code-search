<?php

/* form_table_layout.html.twig */
class __TwigTemplate_965b4142b33a877beb8c72556f77a6fb11768b66cdb7f8ec90964afa8fff0035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_979e764d8a5b06b547d17ef776951ec4b0258f3d7514bcc08f33cb706bacadce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979e764d8a5b06b547d17ef776951ec4b0258f3d7514bcc08f33cb706bacadce->enter($__internal_979e764d8a5b06b547d17ef776951ec4b0258f3d7514bcc08f33cb706bacadce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_8f8626710e018fc047f79b8abe987d9f86696deed64ba866ea5371d24f46ff50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8626710e018fc047f79b8abe987d9f86696deed64ba866ea5371d24f46ff50->enter($__internal_8f8626710e018fc047f79b8abe987d9f86696deed64ba866ea5371d24f46ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_979e764d8a5b06b547d17ef776951ec4b0258f3d7514bcc08f33cb706bacadce->leave($__internal_979e764d8a5b06b547d17ef776951ec4b0258f3d7514bcc08f33cb706bacadce_prof);

        
        $__internal_8f8626710e018fc047f79b8abe987d9f86696deed64ba866ea5371d24f46ff50->leave($__internal_8f8626710e018fc047f79b8abe987d9f86696deed64ba866ea5371d24f46ff50_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e5ed8be03cb508a096ad79e33f8416f62b6a1f11e2d50d96f56041af038cbf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ed8be03cb508a096ad79e33f8416f62b6a1f11e2d50d96f56041af038cbf41->enter($__internal_e5ed8be03cb508a096ad79e33f8416f62b6a1f11e2d50d96f56041af038cbf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a35f694f53216784f7fda8d6f446b0b51602fdd68d7175b85cdf2183da5ad180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35f694f53216784f7fda8d6f446b0b51602fdd68d7175b85cdf2183da5ad180->enter($__internal_a35f694f53216784f7fda8d6f446b0b51602fdd68d7175b85cdf2183da5ad180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a35f694f53216784f7fda8d6f446b0b51602fdd68d7175b85cdf2183da5ad180->leave($__internal_a35f694f53216784f7fda8d6f446b0b51602fdd68d7175b85cdf2183da5ad180_prof);

        
        $__internal_e5ed8be03cb508a096ad79e33f8416f62b6a1f11e2d50d96f56041af038cbf41->leave($__internal_e5ed8be03cb508a096ad79e33f8416f62b6a1f11e2d50d96f56041af038cbf41_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3f5a7bd683c325890fc17db6aa243cdabc0fa3b7aaadc112817a9a3b2de4e182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5a7bd683c325890fc17db6aa243cdabc0fa3b7aaadc112817a9a3b2de4e182->enter($__internal_3f5a7bd683c325890fc17db6aa243cdabc0fa3b7aaadc112817a9a3b2de4e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_25f188169aadc8ad012cbd4374d8a0a4e1972f007bf6a9d079bcb5abc99de6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f188169aadc8ad012cbd4374d8a0a4e1972f007bf6a9d079bcb5abc99de6c4->enter($__internal_25f188169aadc8ad012cbd4374d8a0a4e1972f007bf6a9d079bcb5abc99de6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_25f188169aadc8ad012cbd4374d8a0a4e1972f007bf6a9d079bcb5abc99de6c4->leave($__internal_25f188169aadc8ad012cbd4374d8a0a4e1972f007bf6a9d079bcb5abc99de6c4_prof);

        
        $__internal_3f5a7bd683c325890fc17db6aa243cdabc0fa3b7aaadc112817a9a3b2de4e182->leave($__internal_3f5a7bd683c325890fc17db6aa243cdabc0fa3b7aaadc112817a9a3b2de4e182_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_9ce96a78838cd9eeb4f767de5e749c093bea02cf505f6c93fc7926875662fc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce96a78838cd9eeb4f767de5e749c093bea02cf505f6c93fc7926875662fc4d->enter($__internal_9ce96a78838cd9eeb4f767de5e749c093bea02cf505f6c93fc7926875662fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_8ee9c6874cfbcfad593d9c622328f0035abb8b73dffe2b5fa648271974d40203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee9c6874cfbcfad593d9c622328f0035abb8b73dffe2b5fa648271974d40203->enter($__internal_8ee9c6874cfbcfad593d9c622328f0035abb8b73dffe2b5fa648271974d40203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_8ee9c6874cfbcfad593d9c622328f0035abb8b73dffe2b5fa648271974d40203->leave($__internal_8ee9c6874cfbcfad593d9c622328f0035abb8b73dffe2b5fa648271974d40203_prof);

        
        $__internal_9ce96a78838cd9eeb4f767de5e749c093bea02cf505f6c93fc7926875662fc4d->leave($__internal_9ce96a78838cd9eeb4f767de5e749c093bea02cf505f6c93fc7926875662fc4d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bd3610c167045808aaf294f3828281c7aa8b8eccc3fbf887ee1646bcdef9881a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3610c167045808aaf294f3828281c7aa8b8eccc3fbf887ee1646bcdef9881a->enter($__internal_bd3610c167045808aaf294f3828281c7aa8b8eccc3fbf887ee1646bcdef9881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_77d44c02b530c9fb824a1d84cbc8a8f1b31df819aff0157ed47024580b46e97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d44c02b530c9fb824a1d84cbc8a8f1b31df819aff0157ed47024580b46e97d->enter($__internal_77d44c02b530c9fb824a1d84cbc8a8f1b31df819aff0157ed47024580b46e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_77d44c02b530c9fb824a1d84cbc8a8f1b31df819aff0157ed47024580b46e97d->leave($__internal_77d44c02b530c9fb824a1d84cbc8a8f1b31df819aff0157ed47024580b46e97d_prof);

        
        $__internal_bd3610c167045808aaf294f3828281c7aa8b8eccc3fbf887ee1646bcdef9881a->leave($__internal_bd3610c167045808aaf294f3828281c7aa8b8eccc3fbf887ee1646bcdef9881a_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
