<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_684cc133c0ef5fd9117d4e753974e0968a17355df1ebed35df8837f499bab319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_020eb149bc3d11d57a1f928c28347b42d8d6bffe292551cd488c9ba0a10aa555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020eb149bc3d11d57a1f928c28347b42d8d6bffe292551cd488c9ba0a10aa555->enter($__internal_020eb149bc3d11d57a1f928c28347b42d8d6bffe292551cd488c9ba0a10aa555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f0fe200799190b54688e99f9be1c7b177de0f2f4995ceea54c89be849dcacbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe200799190b54688e99f9be1c7b177de0f2f4995ceea54c89be849dcacbe0->enter($__internal_f0fe200799190b54688e99f9be1c7b177de0f2f4995ceea54c89be849dcacbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_020eb149bc3d11d57a1f928c28347b42d8d6bffe292551cd488c9ba0a10aa555->leave($__internal_020eb149bc3d11d57a1f928c28347b42d8d6bffe292551cd488c9ba0a10aa555_prof);

        
        $__internal_f0fe200799190b54688e99f9be1c7b177de0f2f4995ceea54c89be849dcacbe0->leave($__internal_f0fe200799190b54688e99f9be1c7b177de0f2f4995ceea54c89be849dcacbe0_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d4ae14c1fcf1b97effa9cb835e1223048631180822174ffe439f2448accf0b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ae14c1fcf1b97effa9cb835e1223048631180822174ffe439f2448accf0b9d->enter($__internal_d4ae14c1fcf1b97effa9cb835e1223048631180822174ffe439f2448accf0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b8745a307add163d14c4de8695ed29592a7d3a3bce19a81bb1585d7515f2645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8745a307add163d14c4de8695ed29592a7d3a3bce19a81bb1585d7515f2645d->enter($__internal_b8745a307add163d14c4de8695ed29592a7d3a3bce19a81bb1585d7515f2645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b8745a307add163d14c4de8695ed29592a7d3a3bce19a81bb1585d7515f2645d->leave($__internal_b8745a307add163d14c4de8695ed29592a7d3a3bce19a81bb1585d7515f2645d_prof);

        
        $__internal_d4ae14c1fcf1b97effa9cb835e1223048631180822174ffe439f2448accf0b9d->leave($__internal_d4ae14c1fcf1b97effa9cb835e1223048631180822174ffe439f2448accf0b9d_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_36090a4d51eda704972da066aba435be6aefafabd98de07cdb25a11d9e7e6fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36090a4d51eda704972da066aba435be6aefafabd98de07cdb25a11d9e7e6fad->enter($__internal_36090a4d51eda704972da066aba435be6aefafabd98de07cdb25a11d9e7e6fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7b8c69cae108a42c06d88eca97b5366ab8447429e208cd580e8e28b6cdc0566a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8c69cae108a42c06d88eca97b5366ab8447429e208cd580e8e28b6cdc0566a->enter($__internal_7b8c69cae108a42c06d88eca97b5366ab8447429e208cd580e8e28b6cdc0566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7b8c69cae108a42c06d88eca97b5366ab8447429e208cd580e8e28b6cdc0566a->leave($__internal_7b8c69cae108a42c06d88eca97b5366ab8447429e208cd580e8e28b6cdc0566a_prof);

        
        $__internal_36090a4d51eda704972da066aba435be6aefafabd98de07cdb25a11d9e7e6fad->leave($__internal_36090a4d51eda704972da066aba435be6aefafabd98de07cdb25a11d9e7e6fad_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3a7084d2ceb42bfb59f8c4256b029b998388fad2f47ced829f213a4300c556d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7084d2ceb42bfb59f8c4256b029b998388fad2f47ced829f213a4300c556d1->enter($__internal_3a7084d2ceb42bfb59f8c4256b029b998388fad2f47ced829f213a4300c556d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d8f3ac35ec0b0a01d9593aeaf96abacd7cb2794c11e841b175e30a3a5416d8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f3ac35ec0b0a01d9593aeaf96abacd7cb2794c11e841b175e30a3a5416d8be->enter($__internal_d8f3ac35ec0b0a01d9593aeaf96abacd7cb2794c11e841b175e30a3a5416d8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_d8f3ac35ec0b0a01d9593aeaf96abacd7cb2794c11e841b175e30a3a5416d8be->leave($__internal_d8f3ac35ec0b0a01d9593aeaf96abacd7cb2794c11e841b175e30a3a5416d8be_prof);

        
        $__internal_3a7084d2ceb42bfb59f8c4256b029b998388fad2f47ced829f213a4300c556d1->leave($__internal_3a7084d2ceb42bfb59f8c4256b029b998388fad2f47ced829f213a4300c556d1_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ae081314eb6d6ca4c9af8b20328ea8cdacd6b658e2e5062137191dae738d135c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae081314eb6d6ca4c9af8b20328ea8cdacd6b658e2e5062137191dae738d135c->enter($__internal_ae081314eb6d6ca4c9af8b20328ea8cdacd6b658e2e5062137191dae738d135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_354263944bd1a769da91659fe97407362cd94b4549b400010ea1b9588e7528c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354263944bd1a769da91659fe97407362cd94b4549b400010ea1b9588e7528c9->enter($__internal_354263944bd1a769da91659fe97407362cd94b4549b400010ea1b9588e7528c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_354263944bd1a769da91659fe97407362cd94b4549b400010ea1b9588e7528c9->leave($__internal_354263944bd1a769da91659fe97407362cd94b4549b400010ea1b9588e7528c9_prof);

        
        $__internal_ae081314eb6d6ca4c9af8b20328ea8cdacd6b658e2e5062137191dae738d135c->leave($__internal_ae081314eb6d6ca4c9af8b20328ea8cdacd6b658e2e5062137191dae738d135c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_39d89da1cd2c20eca4192ba0b0ccc3e08d770bc5fc861c2b4f9f8136263e00d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d89da1cd2c20eca4192ba0b0ccc3e08d770bc5fc861c2b4f9f8136263e00d9->enter($__internal_39d89da1cd2c20eca4192ba0b0ccc3e08d770bc5fc861c2b4f9f8136263e00d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4d0f1fb6db8637f076a31edab10cfbf4070b108b1475aee7cc00e170200b5ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f1fb6db8637f076a31edab10cfbf4070b108b1475aee7cc00e170200b5ce0->enter($__internal_4d0f1fb6db8637f076a31edab10cfbf4070b108b1475aee7cc00e170200b5ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4d0f1fb6db8637f076a31edab10cfbf4070b108b1475aee7cc00e170200b5ce0->leave($__internal_4d0f1fb6db8637f076a31edab10cfbf4070b108b1475aee7cc00e170200b5ce0_prof);

        
        $__internal_39d89da1cd2c20eca4192ba0b0ccc3e08d770bc5fc861c2b4f9f8136263e00d9->leave($__internal_39d89da1cd2c20eca4192ba0b0ccc3e08d770bc5fc861c2b4f9f8136263e00d9_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_800e90d22dfc07f05fda2361018524c56252fca220868b3b3d068463b121d498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800e90d22dfc07f05fda2361018524c56252fca220868b3b3d068463b121d498->enter($__internal_800e90d22dfc07f05fda2361018524c56252fca220868b3b3d068463b121d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0ea9f9019445bc7d90b82729aee89157396552a4bc247d17731a941c8a42c29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea9f9019445bc7d90b82729aee89157396552a4bc247d17731a941c8a42c29d->enter($__internal_0ea9f9019445bc7d90b82729aee89157396552a4bc247d17731a941c8a42c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0ea9f9019445bc7d90b82729aee89157396552a4bc247d17731a941c8a42c29d->leave($__internal_0ea9f9019445bc7d90b82729aee89157396552a4bc247d17731a941c8a42c29d_prof);

        
        $__internal_800e90d22dfc07f05fda2361018524c56252fca220868b3b3d068463b121d498->leave($__internal_800e90d22dfc07f05fda2361018524c56252fca220868b3b3d068463b121d498_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7e8f8bdc9f1df7df8371cb1942eb6a4555abc7c7744d5a0c1dcec3131801da5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e8f8bdc9f1df7df8371cb1942eb6a4555abc7c7744d5a0c1dcec3131801da5b->enter($__internal_7e8f8bdc9f1df7df8371cb1942eb6a4555abc7c7744d5a0c1dcec3131801da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b1e39dfa374ae9dfb06c7b24033de2a5f87f845236cbdd95bbbc1449cfadb490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e39dfa374ae9dfb06c7b24033de2a5f87f845236cbdd95bbbc1449cfadb490->enter($__internal_b1e39dfa374ae9dfb06c7b24033de2a5f87f845236cbdd95bbbc1449cfadb490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b1e39dfa374ae9dfb06c7b24033de2a5f87f845236cbdd95bbbc1449cfadb490->leave($__internal_b1e39dfa374ae9dfb06c7b24033de2a5f87f845236cbdd95bbbc1449cfadb490_prof);

        
        $__internal_7e8f8bdc9f1df7df8371cb1942eb6a4555abc7c7744d5a0c1dcec3131801da5b->leave($__internal_7e8f8bdc9f1df7df8371cb1942eb6a4555abc7c7744d5a0c1dcec3131801da5b_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e69c59c3d02888633c1cdd5f12746ec3e00efa95553741c0bebb402f20f82e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69c59c3d02888633c1cdd5f12746ec3e00efa95553741c0bebb402f20f82e22->enter($__internal_e69c59c3d02888633c1cdd5f12746ec3e00efa95553741c0bebb402f20f82e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_25ccc5af58803761bd8c0c9b23244ce944bc0ff668f8934a3f74b35c9401d7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ccc5af58803761bd8c0c9b23244ce944bc0ff668f8934a3f74b35c9401d7ab->enter($__internal_25ccc5af58803761bd8c0c9b23244ce944bc0ff668f8934a3f74b35c9401d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_25ccc5af58803761bd8c0c9b23244ce944bc0ff668f8934a3f74b35c9401d7ab->leave($__internal_25ccc5af58803761bd8c0c9b23244ce944bc0ff668f8934a3f74b35c9401d7ab_prof);

        
        $__internal_e69c59c3d02888633c1cdd5f12746ec3e00efa95553741c0bebb402f20f82e22->leave($__internal_e69c59c3d02888633c1cdd5f12746ec3e00efa95553741c0bebb402f20f82e22_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_25660c97bd3f1004d4059bdf5c4989f6fbc113e84db720473ab1c839bb281bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25660c97bd3f1004d4059bdf5c4989f6fbc113e84db720473ab1c839bb281bf1->enter($__internal_25660c97bd3f1004d4059bdf5c4989f6fbc113e84db720473ab1c839bb281bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_426cce11c89290259ff855efcb982fc3e84d0bd75c10e3d35e4a254866405ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426cce11c89290259ff855efcb982fc3e84d0bd75c10e3d35e4a254866405ac4->enter($__internal_426cce11c89290259ff855efcb982fc3e84d0bd75c10e3d35e4a254866405ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
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
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_426cce11c89290259ff855efcb982fc3e84d0bd75c10e3d35e4a254866405ac4->leave($__internal_426cce11c89290259ff855efcb982fc3e84d0bd75c10e3d35e4a254866405ac4_prof);

        
        $__internal_25660c97bd3f1004d4059bdf5c4989f6fbc113e84db720473ab1c839bb281bf1->leave($__internal_25660c97bd3f1004d4059bdf5c4989f6fbc113e84db720473ab1c839bb281bf1_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85ad70970cc7d38b859bdd45d4b5ae2c8f146ef18f0355dfb96cf8986dd0f91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ad70970cc7d38b859bdd45d4b5ae2c8f146ef18f0355dfb96cf8986dd0f91b->enter($__internal_85ad70970cc7d38b859bdd45d4b5ae2c8f146ef18f0355dfb96cf8986dd0f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5c3c9e02ac49e36ac253bfff0fd2f72d0780b6e62fc0636e75883928b62760ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3c9e02ac49e36ac253bfff0fd2f72d0780b6e62fc0636e75883928b62760ef->enter($__internal_5c3c9e02ac49e36ac253bfff0fd2f72d0780b6e62fc0636e75883928b62760ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_5c3c9e02ac49e36ac253bfff0fd2f72d0780b6e62fc0636e75883928b62760ef->leave($__internal_5c3c9e02ac49e36ac253bfff0fd2f72d0780b6e62fc0636e75883928b62760ef_prof);

        
        $__internal_85ad70970cc7d38b859bdd45d4b5ae2c8f146ef18f0355dfb96cf8986dd0f91b->leave($__internal_85ad70970cc7d38b859bdd45d4b5ae2c8f146ef18f0355dfb96cf8986dd0f91b_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a23c7690455975de6f733665f5cf139311727425a05496377c63dfb6cff94130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23c7690455975de6f733665f5cf139311727425a05496377c63dfb6cff94130->enter($__internal_a23c7690455975de6f733665f5cf139311727425a05496377c63dfb6cff94130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ff9c85492fc2f5afce6471ce810a88cdc30876b9874a0e1c6ac5c219446b3a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9c85492fc2f5afce6471ce810a88cdc30876b9874a0e1c6ac5c219446b3a38->enter($__internal_ff9c85492fc2f5afce6471ce810a88cdc30876b9874a0e1c6ac5c219446b3a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_ff9c85492fc2f5afce6471ce810a88cdc30876b9874a0e1c6ac5c219446b3a38->leave($__internal_ff9c85492fc2f5afce6471ce810a88cdc30876b9874a0e1c6ac5c219446b3a38_prof);

        
        $__internal_a23c7690455975de6f733665f5cf139311727425a05496377c63dfb6cff94130->leave($__internal_a23c7690455975de6f733665f5cf139311727425a05496377c63dfb6cff94130_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_87d28eca9cbfdd8659857250a5b623edf15c749000e969619c6e4b9d8476f4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d28eca9cbfdd8659857250a5b623edf15c749000e969619c6e4b9d8476f4c8->enter($__internal_87d28eca9cbfdd8659857250a5b623edf15c749000e969619c6e4b9d8476f4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c77068870f6fe726b52a50ed92cb79ee6a551a56adc1854030f5af9cc540f7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77068870f6fe726b52a50ed92cb79ee6a551a56adc1854030f5af9cc540f7c0->enter($__internal_c77068870f6fe726b52a50ed92cb79ee6a551a56adc1854030f5af9cc540f7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c77068870f6fe726b52a50ed92cb79ee6a551a56adc1854030f5af9cc540f7c0->leave($__internal_c77068870f6fe726b52a50ed92cb79ee6a551a56adc1854030f5af9cc540f7c0_prof);

        
        $__internal_87d28eca9cbfdd8659857250a5b623edf15c749000e969619c6e4b9d8476f4c8->leave($__internal_87d28eca9cbfdd8659857250a5b623edf15c749000e969619c6e4b9d8476f4c8_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_198300c5234f54d61acba3f8b7d58d3f4d188f4141af56c3b949c6a376bc61e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198300c5234f54d61acba3f8b7d58d3f4d188f4141af56c3b949c6a376bc61e2->enter($__internal_198300c5234f54d61acba3f8b7d58d3f4d188f4141af56c3b949c6a376bc61e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9819bd7143b084cb6eb71a15b24feef0725826f45aa17ea1d613e789523722f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9819bd7143b084cb6eb71a15b24feef0725826f45aa17ea1d613e789523722f5->enter($__internal_9819bd7143b084cb6eb71a15b24feef0725826f45aa17ea1d613e789523722f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9819bd7143b084cb6eb71a15b24feef0725826f45aa17ea1d613e789523722f5->leave($__internal_9819bd7143b084cb6eb71a15b24feef0725826f45aa17ea1d613e789523722f5_prof);

        
        $__internal_198300c5234f54d61acba3f8b7d58d3f4d188f4141af56c3b949c6a376bc61e2->leave($__internal_198300c5234f54d61acba3f8b7d58d3f4d188f4141af56c3b949c6a376bc61e2_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_acb5b1678277888acf1fb2ed484feff741cf500d5f132362215b979081574103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb5b1678277888acf1fb2ed484feff741cf500d5f132362215b979081574103->enter($__internal_acb5b1678277888acf1fb2ed484feff741cf500d5f132362215b979081574103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5790160d6c8e990db5dc9aa82f422f7a091f2f28323da4f71bb7aa877a1bf8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5790160d6c8e990db5dc9aa82f422f7a091f2f28323da4f71bb7aa877a1bf8d0->enter($__internal_5790160d6c8e990db5dc9aa82f422f7a091f2f28323da4f71bb7aa877a1bf8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5790160d6c8e990db5dc9aa82f422f7a091f2f28323da4f71bb7aa877a1bf8d0->leave($__internal_5790160d6c8e990db5dc9aa82f422f7a091f2f28323da4f71bb7aa877a1bf8d0_prof);

        
        $__internal_acb5b1678277888acf1fb2ed484feff741cf500d5f132362215b979081574103->leave($__internal_acb5b1678277888acf1fb2ed484feff741cf500d5f132362215b979081574103_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ad45a46e7e44ac37e763c2da834a099972b587559357136dbc8a033a6953607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad45a46e7e44ac37e763c2da834a099972b587559357136dbc8a033a6953607d->enter($__internal_ad45a46e7e44ac37e763c2da834a099972b587559357136dbc8a033a6953607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2ead122b3768dd9f196fc2ed54fe3939358b844f4b4e1525108dc2a63f32c245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ead122b3768dd9f196fc2ed54fe3939358b844f4b4e1525108dc2a63f32c245->enter($__internal_2ead122b3768dd9f196fc2ed54fe3939358b844f4b4e1525108dc2a63f32c245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2ead122b3768dd9f196fc2ed54fe3939358b844f4b4e1525108dc2a63f32c245->leave($__internal_2ead122b3768dd9f196fc2ed54fe3939358b844f4b4e1525108dc2a63f32c245_prof);

        
        $__internal_ad45a46e7e44ac37e763c2da834a099972b587559357136dbc8a033a6953607d->leave($__internal_ad45a46e7e44ac37e763c2da834a099972b587559357136dbc8a033a6953607d_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ee615efd01bc7e717c9dd2a7e8ccb2c2a0d61545d4edab3ad5505a99e02ed9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee615efd01bc7e717c9dd2a7e8ccb2c2a0d61545d4edab3ad5505a99e02ed9bb->enter($__internal_ee615efd01bc7e717c9dd2a7e8ccb2c2a0d61545d4edab3ad5505a99e02ed9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f5bcfaf7bd78e68015da518fa305db2a41fef610ece408a090acef096cc76e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5bcfaf7bd78e68015da518fa305db2a41fef610ece408a090acef096cc76e1->enter($__internal_6f5bcfaf7bd78e68015da518fa305db2a41fef610ece408a090acef096cc76e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_6f5bcfaf7bd78e68015da518fa305db2a41fef610ece408a090acef096cc76e1->leave($__internal_6f5bcfaf7bd78e68015da518fa305db2a41fef610ece408a090acef096cc76e1_prof);

        
        $__internal_ee615efd01bc7e717c9dd2a7e8ccb2c2a0d61545d4edab3ad5505a99e02ed9bb->leave($__internal_ee615efd01bc7e717c9dd2a7e8ccb2c2a0d61545d4edab3ad5505a99e02ed9bb_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ba850b9b41cbc9b87f639d873317f9b468c42896a1a1125f8c1ef45e24f983a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba850b9b41cbc9b87f639d873317f9b468c42896a1a1125f8c1ef45e24f983a1->enter($__internal_ba850b9b41cbc9b87f639d873317f9b468c42896a1a1125f8c1ef45e24f983a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fe10b1105c9c9d4b7de2d3853dd6d8bb495c0b0610b12c5203661250e35f48b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe10b1105c9c9d4b7de2d3853dd6d8bb495c0b0610b12c5203661250e35f48b0->enter($__internal_fe10b1105c9c9d4b7de2d3853dd6d8bb495c0b0610b12c5203661250e35f48b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_fe10b1105c9c9d4b7de2d3853dd6d8bb495c0b0610b12c5203661250e35f48b0->leave($__internal_fe10b1105c9c9d4b7de2d3853dd6d8bb495c0b0610b12c5203661250e35f48b0_prof);

        
        $__internal_ba850b9b41cbc9b87f639d873317f9b468c42896a1a1125f8c1ef45e24f983a1->leave($__internal_ba850b9b41cbc9b87f639d873317f9b468c42896a1a1125f8c1ef45e24f983a1_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0476ff2157493884307c4279e7bb123d5fd852eb0b64e58c4bccd6600ba1126a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0476ff2157493884307c4279e7bb123d5fd852eb0b64e58c4bccd6600ba1126a->enter($__internal_0476ff2157493884307c4279e7bb123d5fd852eb0b64e58c4bccd6600ba1126a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5001183d28c34558fdd5e9a04cbc547c2751a416a7233ae4791fd7dda5b25ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5001183d28c34558fdd5e9a04cbc547c2751a416a7233ae4791fd7dda5b25ff4->enter($__internal_5001183d28c34558fdd5e9a04cbc547c2751a416a7233ae4791fd7dda5b25ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5001183d28c34558fdd5e9a04cbc547c2751a416a7233ae4791fd7dda5b25ff4->leave($__internal_5001183d28c34558fdd5e9a04cbc547c2751a416a7233ae4791fd7dda5b25ff4_prof);

        
        $__internal_0476ff2157493884307c4279e7bb123d5fd852eb0b64e58c4bccd6600ba1126a->leave($__internal_0476ff2157493884307c4279e7bb123d5fd852eb0b64e58c4bccd6600ba1126a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
