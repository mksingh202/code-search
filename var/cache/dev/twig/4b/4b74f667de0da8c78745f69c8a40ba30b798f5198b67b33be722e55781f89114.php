<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_984495320c604c45adfa4546378e0c744219bdb108fc753a6420abad3087e64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1aae5005766e99e2257d3e9d0dc8b47d4958fb4171029038bb4ff3a433689a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1aae5005766e99e2257d3e9d0dc8b47d4958fb4171029038bb4ff3a433689a2->enter($__internal_a1aae5005766e99e2257d3e9d0dc8b47d4958fb4171029038bb4ff3a433689a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_4f0b208b6e4929deefbc75cc27809d12178d8ff38883c91ac1d51ebd2c016ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0b208b6e4929deefbc75cc27809d12178d8ff38883c91ac1d51ebd2c016ad5->enter($__internal_4f0b208b6e4929deefbc75cc27809d12178d8ff38883c91ac1d51ebd2c016ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1aae5005766e99e2257d3e9d0dc8b47d4958fb4171029038bb4ff3a433689a2->leave($__internal_a1aae5005766e99e2257d3e9d0dc8b47d4958fb4171029038bb4ff3a433689a2_prof);

        
        $__internal_4f0b208b6e4929deefbc75cc27809d12178d8ff38883c91ac1d51ebd2c016ad5->leave($__internal_4f0b208b6e4929deefbc75cc27809d12178d8ff38883c91ac1d51ebd2c016ad5_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_003e3c67c61fd3d594df3580d1b69720d7da3c8388804a3265e2f452403b0606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003e3c67c61fd3d594df3580d1b69720d7da3c8388804a3265e2f452403b0606->enter($__internal_003e3c67c61fd3d594df3580d1b69720d7da3c8388804a3265e2f452403b0606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7683496fb3b6b5d5b2baf3f1d093bbd31b9d824893ea5e2dfb359a5bfb0d525c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7683496fb3b6b5d5b2baf3f1d093bbd31b9d824893ea5e2dfb359a5bfb0d525c->enter($__internal_7683496fb3b6b5d5b2baf3f1d093bbd31b9d824893ea5e2dfb359a5bfb0d525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7683496fb3b6b5d5b2baf3f1d093bbd31b9d824893ea5e2dfb359a5bfb0d525c->leave($__internal_7683496fb3b6b5d5b2baf3f1d093bbd31b9d824893ea5e2dfb359a5bfb0d525c_prof);

        
        $__internal_003e3c67c61fd3d594df3580d1b69720d7da3c8388804a3265e2f452403b0606->leave($__internal_003e3c67c61fd3d594df3580d1b69720d7da3c8388804a3265e2f452403b0606_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c2b3fda53bf097220c5d0c6c975ca7c7cb851cdaf2dae30f599f660dd91c8872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b3fda53bf097220c5d0c6c975ca7c7cb851cdaf2dae30f599f660dd91c8872->enter($__internal_c2b3fda53bf097220c5d0c6c975ca7c7cb851cdaf2dae30f599f660dd91c8872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d8c33686c662d8802085c01d38de488444e2a90211bec70ca3e34688ea9c2248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c33686c662d8802085c01d38de488444e2a90211bec70ca3e34688ea9c2248->enter($__internal_d8c33686c662d8802085c01d38de488444e2a90211bec70ca3e34688ea9c2248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d8c33686c662d8802085c01d38de488444e2a90211bec70ca3e34688ea9c2248->leave($__internal_d8c33686c662d8802085c01d38de488444e2a90211bec70ca3e34688ea9c2248_prof);

        
        $__internal_c2b3fda53bf097220c5d0c6c975ca7c7cb851cdaf2dae30f599f660dd91c8872->leave($__internal_c2b3fda53bf097220c5d0c6c975ca7c7cb851cdaf2dae30f599f660dd91c8872_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6c4cae147ada2ae85ded2e1809a9c6b942310365f2d7de0f75c5cdc792f90192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4cae147ada2ae85ded2e1809a9c6b942310365f2d7de0f75c5cdc792f90192->enter($__internal_6c4cae147ada2ae85ded2e1809a9c6b942310365f2d7de0f75c5cdc792f90192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d7965c06942d6dc0dbb97670c95eee07f1b941a43d9dca19a1ed42c8741a19d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7965c06942d6dc0dbb97670c95eee07f1b941a43d9dca19a1ed42c8741a19d1->enter($__internal_d7965c06942d6dc0dbb97670c95eee07f1b941a43d9dca19a1ed42c8741a19d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d7965c06942d6dc0dbb97670c95eee07f1b941a43d9dca19a1ed42c8741a19d1->leave($__internal_d7965c06942d6dc0dbb97670c95eee07f1b941a43d9dca19a1ed42c8741a19d1_prof);

        
        $__internal_6c4cae147ada2ae85ded2e1809a9c6b942310365f2d7de0f75c5cdc792f90192->leave($__internal_6c4cae147ada2ae85ded2e1809a9c6b942310365f2d7de0f75c5cdc792f90192_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_55067683c9a82494b8aa7d628818573f3952e3f77dda99766500b7f13e196ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55067683c9a82494b8aa7d628818573f3952e3f77dda99766500b7f13e196ef7->enter($__internal_55067683c9a82494b8aa7d628818573f3952e3f77dda99766500b7f13e196ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_bd49992df01f95ec7f5b4af0df64454f87f127f008ad140b9513d75ccba73c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd49992df01f95ec7f5b4af0df64454f87f127f008ad140b9513d75ccba73c74->enter($__internal_bd49992df01f95ec7f5b4af0df64454f87f127f008ad140b9513d75ccba73c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_bd49992df01f95ec7f5b4af0df64454f87f127f008ad140b9513d75ccba73c74->leave($__internal_bd49992df01f95ec7f5b4af0df64454f87f127f008ad140b9513d75ccba73c74_prof);

        
        $__internal_55067683c9a82494b8aa7d628818573f3952e3f77dda99766500b7f13e196ef7->leave($__internal_55067683c9a82494b8aa7d628818573f3952e3f77dda99766500b7f13e196ef7_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a8026b6de6b2b90273d10fe56bd1bea6ce7cc75c7878a5832583a7467e83d4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8026b6de6b2b90273d10fe56bd1bea6ce7cc75c7878a5832583a7467e83d4db->enter($__internal_a8026b6de6b2b90273d10fe56bd1bea6ce7cc75c7878a5832583a7467e83d4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_82049f43ef9ed1d00b6a769715768b4e741ff7847fdd43b14af314ea5c35e372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82049f43ef9ed1d00b6a769715768b4e741ff7847fdd43b14af314ea5c35e372->enter($__internal_82049f43ef9ed1d00b6a769715768b4e741ff7847fdd43b14af314ea5c35e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_82049f43ef9ed1d00b6a769715768b4e741ff7847fdd43b14af314ea5c35e372->leave($__internal_82049f43ef9ed1d00b6a769715768b4e741ff7847fdd43b14af314ea5c35e372_prof);

        
        $__internal_a8026b6de6b2b90273d10fe56bd1bea6ce7cc75c7878a5832583a7467e83d4db->leave($__internal_a8026b6de6b2b90273d10fe56bd1bea6ce7cc75c7878a5832583a7467e83d4db_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_45d69f13f4fa95558443520f3aeb3b3044682d76bfa9480b61714f7a04a97191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d69f13f4fa95558443520f3aeb3b3044682d76bfa9480b61714f7a04a97191->enter($__internal_45d69f13f4fa95558443520f3aeb3b3044682d76bfa9480b61714f7a04a97191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3953aeb0b9b7d9963650aab9209afd1634babfa18317f4feb358269f84dea95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3953aeb0b9b7d9963650aab9209afd1634babfa18317f4feb358269f84dea95a->enter($__internal_3953aeb0b9b7d9963650aab9209afd1634babfa18317f4feb358269f84dea95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_3953aeb0b9b7d9963650aab9209afd1634babfa18317f4feb358269f84dea95a->leave($__internal_3953aeb0b9b7d9963650aab9209afd1634babfa18317f4feb358269f84dea95a_prof);

        
        $__internal_45d69f13f4fa95558443520f3aeb3b3044682d76bfa9480b61714f7a04a97191->leave($__internal_45d69f13f4fa95558443520f3aeb3b3044682d76bfa9480b61714f7a04a97191_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_caaee3d7517f54c41f7cba246f1614bea9f41d78f0b3922ef0d57341e8a21449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caaee3d7517f54c41f7cba246f1614bea9f41d78f0b3922ef0d57341e8a21449->enter($__internal_caaee3d7517f54c41f7cba246f1614bea9f41d78f0b3922ef0d57341e8a21449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1ff331b73714e36463925f73622460a667f5ef685dbe611b2ed767bf3ee6ccab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff331b73714e36463925f73622460a667f5ef685dbe611b2ed767bf3ee6ccab->enter($__internal_1ff331b73714e36463925f73622460a667f5ef685dbe611b2ed767bf3ee6ccab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_1ff331b73714e36463925f73622460a667f5ef685dbe611b2ed767bf3ee6ccab->leave($__internal_1ff331b73714e36463925f73622460a667f5ef685dbe611b2ed767bf3ee6ccab_prof);

        
        $__internal_caaee3d7517f54c41f7cba246f1614bea9f41d78f0b3922ef0d57341e8a21449->leave($__internal_caaee3d7517f54c41f7cba246f1614bea9f41d78f0b3922ef0d57341e8a21449_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_03244eeec3be7d3c14a585d2c45b981c474485a9cb432afd8ecb02ed80a4b48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03244eeec3be7d3c14a585d2c45b981c474485a9cb432afd8ecb02ed80a4b48e->enter($__internal_03244eeec3be7d3c14a585d2c45b981c474485a9cb432afd8ecb02ed80a4b48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d4f82ce5851b995d133f1bf166fce4e166f94dd2e5c18bb4751a6978e0aa2270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f82ce5851b995d133f1bf166fce4e166f94dd2e5c18bb4751a6978e0aa2270->enter($__internal_d4f82ce5851b995d133f1bf166fce4e166f94dd2e5c18bb4751a6978e0aa2270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_d4f82ce5851b995d133f1bf166fce4e166f94dd2e5c18bb4751a6978e0aa2270->leave($__internal_d4f82ce5851b995d133f1bf166fce4e166f94dd2e5c18bb4751a6978e0aa2270_prof);

        
        $__internal_03244eeec3be7d3c14a585d2c45b981c474485a9cb432afd8ecb02ed80a4b48e->leave($__internal_03244eeec3be7d3c14a585d2c45b981c474485a9cb432afd8ecb02ed80a4b48e_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d197e5f7ddc13f31a395bddfcd6b2703a75f80495f1b6fe08f470eb951381293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d197e5f7ddc13f31a395bddfcd6b2703a75f80495f1b6fe08f470eb951381293->enter($__internal_d197e5f7ddc13f31a395bddfcd6b2703a75f80495f1b6fe08f470eb951381293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_dc298043a31b71b2a11927cadc2a245f42b83e69f48e6b568f4fad99cb1ca71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc298043a31b71b2a11927cadc2a245f42b83e69f48e6b568f4fad99cb1ca71d->enter($__internal_dc298043a31b71b2a11927cadc2a245f42b83e69f48e6b568f4fad99cb1ca71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_dc298043a31b71b2a11927cadc2a245f42b83e69f48e6b568f4fad99cb1ca71d->leave($__internal_dc298043a31b71b2a11927cadc2a245f42b83e69f48e6b568f4fad99cb1ca71d_prof);

        
        $__internal_d197e5f7ddc13f31a395bddfcd6b2703a75f80495f1b6fe08f470eb951381293->leave($__internal_d197e5f7ddc13f31a395bddfcd6b2703a75f80495f1b6fe08f470eb951381293_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4a8f8de6327fa4108c6698da962643093b465c0a46defc539d8f772d2f2f9134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8f8de6327fa4108c6698da962643093b465c0a46defc539d8f772d2f2f9134->enter($__internal_4a8f8de6327fa4108c6698da962643093b465c0a46defc539d8f772d2f2f9134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e050e20801a24107c1c2cd67e0e7657fec0060120c22fe6ec7777173d5d15b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e050e20801a24107c1c2cd67e0e7657fec0060120c22fe6ec7777173d5d15b13->enter($__internal_e050e20801a24107c1c2cd67e0e7657fec0060120c22fe6ec7777173d5d15b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_e050e20801a24107c1c2cd67e0e7657fec0060120c22fe6ec7777173d5d15b13->leave($__internal_e050e20801a24107c1c2cd67e0e7657fec0060120c22fe6ec7777173d5d15b13_prof);

        
        $__internal_4a8f8de6327fa4108c6698da962643093b465c0a46defc539d8f772d2f2f9134->leave($__internal_4a8f8de6327fa4108c6698da962643093b465c0a46defc539d8f772d2f2f9134_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_50155fe142440a981985118e3073c63b652952a6fe6deb97b180cd34cc5e4031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50155fe142440a981985118e3073c63b652952a6fe6deb97b180cd34cc5e4031->enter($__internal_50155fe142440a981985118e3073c63b652952a6fe6deb97b180cd34cc5e4031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7d3410c7227c76dc611f7c2ca431f3cfbf0b778bd327345148cd0c1710a644e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3410c7227c76dc611f7c2ca431f3cfbf0b778bd327345148cd0c1710a644e0->enter($__internal_7d3410c7227c76dc611f7c2ca431f3cfbf0b778bd327345148cd0c1710a644e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_7d3410c7227c76dc611f7c2ca431f3cfbf0b778bd327345148cd0c1710a644e0->leave($__internal_7d3410c7227c76dc611f7c2ca431f3cfbf0b778bd327345148cd0c1710a644e0_prof);

        
        $__internal_50155fe142440a981985118e3073c63b652952a6fe6deb97b180cd34cc5e4031->leave($__internal_50155fe142440a981985118e3073c63b652952a6fe6deb97b180cd34cc5e4031_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0c4ce67b15c82495fa16e89f65a0fda61eb926a07b679441e9b9b4ab0f3822f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4ce67b15c82495fa16e89f65a0fda61eb926a07b679441e9b9b4ab0f3822f6->enter($__internal_0c4ce67b15c82495fa16e89f65a0fda61eb926a07b679441e9b9b4ab0f3822f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_67457c4edf96e11b9a7272649210654e42ad0ea3e44e0955db63937b9341b617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67457c4edf96e11b9a7272649210654e42ad0ea3e44e0955db63937b9341b617->enter($__internal_67457c4edf96e11b9a7272649210654e42ad0ea3e44e0955db63937b9341b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_67457c4edf96e11b9a7272649210654e42ad0ea3e44e0955db63937b9341b617->leave($__internal_67457c4edf96e11b9a7272649210654e42ad0ea3e44e0955db63937b9341b617_prof);

        
        $__internal_0c4ce67b15c82495fa16e89f65a0fda61eb926a07b679441e9b9b4ab0f3822f6->leave($__internal_0c4ce67b15c82495fa16e89f65a0fda61eb926a07b679441e9b9b4ab0f3822f6_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_022d54815e4b58dbd15c13dde992c22e5740195b9045f0fb3b576da0c6debc30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022d54815e4b58dbd15c13dde992c22e5740195b9045f0fb3b576da0c6debc30->enter($__internal_022d54815e4b58dbd15c13dde992c22e5740195b9045f0fb3b576da0c6debc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1f733659817f0a63b3eded51225ab99201d9d07d79aba149e848882fcdb22e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f733659817f0a63b3eded51225ab99201d9d07d79aba149e848882fcdb22e34->enter($__internal_1f733659817f0a63b3eded51225ab99201d9d07d79aba149e848882fcdb22e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1f733659817f0a63b3eded51225ab99201d9d07d79aba149e848882fcdb22e34->leave($__internal_1f733659817f0a63b3eded51225ab99201d9d07d79aba149e848882fcdb22e34_prof);

        
        $__internal_022d54815e4b58dbd15c13dde992c22e5740195b9045f0fb3b576da0c6debc30->leave($__internal_022d54815e4b58dbd15c13dde992c22e5740195b9045f0fb3b576da0c6debc30_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ac4681ce833b1a7fb4deed341e6c9869dcfcd03d4dfe07c223a6b6d8499fe430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4681ce833b1a7fb4deed341e6c9869dcfcd03d4dfe07c223a6b6d8499fe430->enter($__internal_ac4681ce833b1a7fb4deed341e6c9869dcfcd03d4dfe07c223a6b6d8499fe430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f17836f700da43996ebd72225bc6da420b985296c6a8f14ed2bf0faa40dee62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17836f700da43996ebd72225bc6da420b985296c6a8f14ed2bf0faa40dee62e->enter($__internal_f17836f700da43996ebd72225bc6da420b985296c6a8f14ed2bf0faa40dee62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f17836f700da43996ebd72225bc6da420b985296c6a8f14ed2bf0faa40dee62e->leave($__internal_f17836f700da43996ebd72225bc6da420b985296c6a8f14ed2bf0faa40dee62e_prof);

        
        $__internal_ac4681ce833b1a7fb4deed341e6c9869dcfcd03d4dfe07c223a6b6d8499fe430->leave($__internal_ac4681ce833b1a7fb4deed341e6c9869dcfcd03d4dfe07c223a6b6d8499fe430_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5be3d08eb92909bdd7ab0afa1d9b794afff35b995844ce7d5017f95bde38eb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be3d08eb92909bdd7ab0afa1d9b794afff35b995844ce7d5017f95bde38eb6b->enter($__internal_5be3d08eb92909bdd7ab0afa1d9b794afff35b995844ce7d5017f95bde38eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9e67aedd60fb26cad15484a0fdc2515f68d315fe2facd65e120e741d7390ba6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e67aedd60fb26cad15484a0fdc2515f68d315fe2facd65e120e741d7390ba6f->enter($__internal_9e67aedd60fb26cad15484a0fdc2515f68d315fe2facd65e120e741d7390ba6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9e67aedd60fb26cad15484a0fdc2515f68d315fe2facd65e120e741d7390ba6f->leave($__internal_9e67aedd60fb26cad15484a0fdc2515f68d315fe2facd65e120e741d7390ba6f_prof);

        
        $__internal_5be3d08eb92909bdd7ab0afa1d9b794afff35b995844ce7d5017f95bde38eb6b->leave($__internal_5be3d08eb92909bdd7ab0afa1d9b794afff35b995844ce7d5017f95bde38eb6b_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ce3e17fe31bd882d08f54745526f46e9ae2495f27ebd64ac3bf211b4d7caa18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3e17fe31bd882d08f54745526f46e9ae2495f27ebd64ac3bf211b4d7caa18a->enter($__internal_ce3e17fe31bd882d08f54745526f46e9ae2495f27ebd64ac3bf211b4d7caa18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e6be98aa5842aff10c671537df46e74671b26d4987eca57365927937078e7ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6be98aa5842aff10c671537df46e74671b26d4987eca57365927937078e7ab0->enter($__internal_e6be98aa5842aff10c671537df46e74671b26d4987eca57365927937078e7ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e6be98aa5842aff10c671537df46e74671b26d4987eca57365927937078e7ab0->leave($__internal_e6be98aa5842aff10c671537df46e74671b26d4987eca57365927937078e7ab0_prof);

        
        $__internal_ce3e17fe31bd882d08f54745526f46e9ae2495f27ebd64ac3bf211b4d7caa18a->leave($__internal_ce3e17fe31bd882d08f54745526f46e9ae2495f27ebd64ac3bf211b4d7caa18a_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5bc22bb29c7801689ffedbb0bac38d1821816039de7d9e94f0fd849c3ac20913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc22bb29c7801689ffedbb0bac38d1821816039de7d9e94f0fd849c3ac20913->enter($__internal_5bc22bb29c7801689ffedbb0bac38d1821816039de7d9e94f0fd849c3ac20913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_320a71a9dd716dac600c225924aa22a6b9a224fe2d4db6ef624cb8b28c18d027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320a71a9dd716dac600c225924aa22a6b9a224fe2d4db6ef624cb8b28c18d027->enter($__internal_320a71a9dd716dac600c225924aa22a6b9a224fe2d4db6ef624cb8b28c18d027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_320a71a9dd716dac600c225924aa22a6b9a224fe2d4db6ef624cb8b28c18d027->leave($__internal_320a71a9dd716dac600c225924aa22a6b9a224fe2d4db6ef624cb8b28c18d027_prof);

        
        $__internal_5bc22bb29c7801689ffedbb0bac38d1821816039de7d9e94f0fd849c3ac20913->leave($__internal_5bc22bb29c7801689ffedbb0bac38d1821816039de7d9e94f0fd849c3ac20913_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_57d791ba3d811054417daa4a1205f421e65e642067a07baa6614ef466f99f2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d791ba3d811054417daa4a1205f421e65e642067a07baa6614ef466f99f2a8->enter($__internal_57d791ba3d811054417daa4a1205f421e65e642067a07baa6614ef466f99f2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8b2817f25157b2a19dbaade3eab97c9749acaddd60d0ba5d10fd4095c8f4d9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2817f25157b2a19dbaade3eab97c9749acaddd60d0ba5d10fd4095c8f4d9e6->enter($__internal_8b2817f25157b2a19dbaade3eab97c9749acaddd60d0ba5d10fd4095c8f4d9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_8b2817f25157b2a19dbaade3eab97c9749acaddd60d0ba5d10fd4095c8f4d9e6->leave($__internal_8b2817f25157b2a19dbaade3eab97c9749acaddd60d0ba5d10fd4095c8f4d9e6_prof);

        
        $__internal_57d791ba3d811054417daa4a1205f421e65e642067a07baa6614ef466f99f2a8->leave($__internal_57d791ba3d811054417daa4a1205f421e65e642067a07baa6614ef466f99f2a8_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a8c479e2b4e09b01791850fad2c8306f0556497f2e6465de7a2623bbe9ecd54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c479e2b4e09b01791850fad2c8306f0556497f2e6465de7a2623bbe9ecd54e->enter($__internal_a8c479e2b4e09b01791850fad2c8306f0556497f2e6465de7a2623bbe9ecd54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5a1001f1d066896444a0364a78169ecdea87a09d0bab9024d243d1f8de7ed2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1001f1d066896444a0364a78169ecdea87a09d0bab9024d243d1f8de7ed2b5->enter($__internal_5a1001f1d066896444a0364a78169ecdea87a09d0bab9024d243d1f8de7ed2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5a1001f1d066896444a0364a78169ecdea87a09d0bab9024d243d1f8de7ed2b5->leave($__internal_5a1001f1d066896444a0364a78169ecdea87a09d0bab9024d243d1f8de7ed2b5_prof);

        
        $__internal_a8c479e2b4e09b01791850fad2c8306f0556497f2e6465de7a2623bbe9ecd54e->leave($__internal_a8c479e2b4e09b01791850fad2c8306f0556497f2e6465de7a2623bbe9ecd54e_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fe778869a4a6407a61c1a7ada0fc69a9766639d84fea5699decf90eefadf6b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe778869a4a6407a61c1a7ada0fc69a9766639d84fea5699decf90eefadf6b18->enter($__internal_fe778869a4a6407a61c1a7ada0fc69a9766639d84fea5699decf90eefadf6b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aeb8f740fc3e7995adadc5e5c9668caa5a83fa727f33d1ce12e6ef5a36265da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb8f740fc3e7995adadc5e5c9668caa5a83fa727f33d1ce12e6ef5a36265da2->enter($__internal_aeb8f740fc3e7995adadc5e5c9668caa5a83fa727f33d1ce12e6ef5a36265da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aeb8f740fc3e7995adadc5e5c9668caa5a83fa727f33d1ce12e6ef5a36265da2->leave($__internal_aeb8f740fc3e7995adadc5e5c9668caa5a83fa727f33d1ce12e6ef5a36265da2_prof);

        
        $__internal_fe778869a4a6407a61c1a7ada0fc69a9766639d84fea5699decf90eefadf6b18->leave($__internal_fe778869a4a6407a61c1a7ada0fc69a9766639d84fea5699decf90eefadf6b18_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_42afa72056e6e92697c113cb761966521f0bd018747ec4a4433d4b9e215f25a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42afa72056e6e92697c113cb761966521f0bd018747ec4a4433d4b9e215f25a6->enter($__internal_42afa72056e6e92697c113cb761966521f0bd018747ec4a4433d4b9e215f25a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b06694ab5a4d9a95aa510a9ba4a52dfee97210d8b41ac1b4ddc4e5e4c31602f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06694ab5a4d9a95aa510a9ba4a52dfee97210d8b41ac1b4ddc4e5e4c31602f1->enter($__internal_b06694ab5a4d9a95aa510a9ba4a52dfee97210d8b41ac1b4ddc4e5e4c31602f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b06694ab5a4d9a95aa510a9ba4a52dfee97210d8b41ac1b4ddc4e5e4c31602f1->leave($__internal_b06694ab5a4d9a95aa510a9ba4a52dfee97210d8b41ac1b4ddc4e5e4c31602f1_prof);

        
        $__internal_42afa72056e6e92697c113cb761966521f0bd018747ec4a4433d4b9e215f25a6->leave($__internal_42afa72056e6e92697c113cb761966521f0bd018747ec4a4433d4b9e215f25a6_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_564f8bc09a34dd3428602c501f2ca69054a31396955cc6fa1b693db76e29e695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564f8bc09a34dd3428602c501f2ca69054a31396955cc6fa1b693db76e29e695->enter($__internal_564f8bc09a34dd3428602c501f2ca69054a31396955cc6fa1b693db76e29e695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e577b9b258a6dc8963dbcc443ca84023095e3d49f7a3f3bea0e849972904f376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e577b9b258a6dc8963dbcc443ca84023095e3d49f7a3f3bea0e849972904f376->enter($__internal_e577b9b258a6dc8963dbcc443ca84023095e3d49f7a3f3bea0e849972904f376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e577b9b258a6dc8963dbcc443ca84023095e3d49f7a3f3bea0e849972904f376->leave($__internal_e577b9b258a6dc8963dbcc443ca84023095e3d49f7a3f3bea0e849972904f376_prof);

        
        $__internal_564f8bc09a34dd3428602c501f2ca69054a31396955cc6fa1b693db76e29e695->leave($__internal_564f8bc09a34dd3428602c501f2ca69054a31396955cc6fa1b693db76e29e695_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_31805d61296cedfae1963e01fa7b766d8fb46a042c55d50050efed439b0714b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31805d61296cedfae1963e01fa7b766d8fb46a042c55d50050efed439b0714b5->enter($__internal_31805d61296cedfae1963e01fa7b766d8fb46a042c55d50050efed439b0714b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c6bdaa510c6202115f42df772fdadab868ffb20386743523512f2c46d9b80514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bdaa510c6202115f42df772fdadab868ffb20386743523512f2c46d9b80514->enter($__internal_c6bdaa510c6202115f42df772fdadab868ffb20386743523512f2c46d9b80514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c6bdaa510c6202115f42df772fdadab868ffb20386743523512f2c46d9b80514->leave($__internal_c6bdaa510c6202115f42df772fdadab868ffb20386743523512f2c46d9b80514_prof);

        
        $__internal_31805d61296cedfae1963e01fa7b766d8fb46a042c55d50050efed439b0714b5->leave($__internal_31805d61296cedfae1963e01fa7b766d8fb46a042c55d50050efed439b0714b5_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9523e7466a0baf4a0e78d5087a136bcec75506a9015265bc90337698e5876e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9523e7466a0baf4a0e78d5087a136bcec75506a9015265bc90337698e5876e23->enter($__internal_9523e7466a0baf4a0e78d5087a136bcec75506a9015265bc90337698e5876e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_30f5d825e3512f52ff59468bff6833efdcf939b2e5e2e943e2d608faa5fd63c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f5d825e3512f52ff59468bff6833efdcf939b2e5e2e943e2d608faa5fd63c7->enter($__internal_30f5d825e3512f52ff59468bff6833efdcf939b2e5e2e943e2d608faa5fd63c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_30f5d825e3512f52ff59468bff6833efdcf939b2e5e2e943e2d608faa5fd63c7->leave($__internal_30f5d825e3512f52ff59468bff6833efdcf939b2e5e2e943e2d608faa5fd63c7_prof);

        
        $__internal_9523e7466a0baf4a0e78d5087a136bcec75506a9015265bc90337698e5876e23->leave($__internal_9523e7466a0baf4a0e78d5087a136bcec75506a9015265bc90337698e5876e23_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1da4eda7b4880662016d0761749b422d43396e7c8eb1b1e85c776f22af669404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da4eda7b4880662016d0761749b422d43396e7c8eb1b1e85c776f22af669404->enter($__internal_1da4eda7b4880662016d0761749b422d43396e7c8eb1b1e85c776f22af669404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_405ffb3e9caa644ceb503d5749aaf021abb8765ed6effc2506c508c25fdd05ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405ffb3e9caa644ceb503d5749aaf021abb8765ed6effc2506c508c25fdd05ad->enter($__internal_405ffb3e9caa644ceb503d5749aaf021abb8765ed6effc2506c508c25fdd05ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_405ffb3e9caa644ceb503d5749aaf021abb8765ed6effc2506c508c25fdd05ad->leave($__internal_405ffb3e9caa644ceb503d5749aaf021abb8765ed6effc2506c508c25fdd05ad_prof);

        
        $__internal_1da4eda7b4880662016d0761749b422d43396e7c8eb1b1e85c776f22af669404->leave($__internal_1da4eda7b4880662016d0761749b422d43396e7c8eb1b1e85c776f22af669404_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
