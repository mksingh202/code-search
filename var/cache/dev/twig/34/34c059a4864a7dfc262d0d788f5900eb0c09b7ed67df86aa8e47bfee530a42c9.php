<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_33b07ada41518f6626037fb64369e6303cde21d6283c74bd67594b369746d84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a22a589c75c09c30ee8a6df41d58e78467b905b16933eed39b05a3756347deee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22a589c75c09c30ee8a6df41d58e78467b905b16933eed39b05a3756347deee->enter($__internal_a22a589c75c09c30ee8a6df41d58e78467b905b16933eed39b05a3756347deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_f823740a6a48620e24dcff34d481d4e0156a81936faeb4e8a25579a1bdd7c2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f823740a6a48620e24dcff34d481d4e0156a81936faeb4e8a25579a1bdd7c2e3->enter($__internal_f823740a6a48620e24dcff34d481d4e0156a81936faeb4e8a25579a1bdd7c2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a22a589c75c09c30ee8a6df41d58e78467b905b16933eed39b05a3756347deee->leave($__internal_a22a589c75c09c30ee8a6df41d58e78467b905b16933eed39b05a3756347deee_prof);

        
        $__internal_f823740a6a48620e24dcff34d481d4e0156a81936faeb4e8a25579a1bdd7c2e3->leave($__internal_f823740a6a48620e24dcff34d481d4e0156a81936faeb4e8a25579a1bdd7c2e3_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9671961331bbcfc3ea8c655377be137dbc1d43469f40d0312e6ad7267ee184ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9671961331bbcfc3ea8c655377be137dbc1d43469f40d0312e6ad7267ee184ab->enter($__internal_9671961331bbcfc3ea8c655377be137dbc1d43469f40d0312e6ad7267ee184ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_83211ab3653cead0fc581faa7f493336b138639b72393bc81e7c83c2fbab86b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83211ab3653cead0fc581faa7f493336b138639b72393bc81e7c83c2fbab86b1->enter($__internal_83211ab3653cead0fc581faa7f493336b138639b72393bc81e7c83c2fbab86b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_83211ab3653cead0fc581faa7f493336b138639b72393bc81e7c83c2fbab86b1->leave($__internal_83211ab3653cead0fc581faa7f493336b138639b72393bc81e7c83c2fbab86b1_prof);

        
        $__internal_9671961331bbcfc3ea8c655377be137dbc1d43469f40d0312e6ad7267ee184ab->leave($__internal_9671961331bbcfc3ea8c655377be137dbc1d43469f40d0312e6ad7267ee184ab_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_90732a9c37415fd14b30eee8e0c133a9a9347b499942cf0ac2cca9aa42878339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90732a9c37415fd14b30eee8e0c133a9a9347b499942cf0ac2cca9aa42878339->enter($__internal_90732a9c37415fd14b30eee8e0c133a9a9347b499942cf0ac2cca9aa42878339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_17c8d2a1d32c7e75b4458842c3e5e4716ffb0cb203eae41cb16d980b7cf668fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c8d2a1d32c7e75b4458842c3e5e4716ffb0cb203eae41cb16d980b7cf668fa->enter($__internal_17c8d2a1d32c7e75b4458842c3e5e4716ffb0cb203eae41cb16d980b7cf668fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_17c8d2a1d32c7e75b4458842c3e5e4716ffb0cb203eae41cb16d980b7cf668fa->leave($__internal_17c8d2a1d32c7e75b4458842c3e5e4716ffb0cb203eae41cb16d980b7cf668fa_prof);

        
        $__internal_90732a9c37415fd14b30eee8e0c133a9a9347b499942cf0ac2cca9aa42878339->leave($__internal_90732a9c37415fd14b30eee8e0c133a9a9347b499942cf0ac2cca9aa42878339_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fe5c86610b3c8c09bed4b9c9eed12d988f80d314af7e377cfdedb8ef123fe246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5c86610b3c8c09bed4b9c9eed12d988f80d314af7e377cfdedb8ef123fe246->enter($__internal_fe5c86610b3c8c09bed4b9c9eed12d988f80d314af7e377cfdedb8ef123fe246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5398c6160ff33c097fd343e1363985d551181ec85e138af4bc9bbfc7568bbaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5398c6160ff33c097fd343e1363985d551181ec85e138af4bc9bbfc7568bbaab->enter($__internal_5398c6160ff33c097fd343e1363985d551181ec85e138af4bc9bbfc7568bbaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_5398c6160ff33c097fd343e1363985d551181ec85e138af4bc9bbfc7568bbaab->leave($__internal_5398c6160ff33c097fd343e1363985d551181ec85e138af4bc9bbfc7568bbaab_prof);

        
        $__internal_fe5c86610b3c8c09bed4b9c9eed12d988f80d314af7e377cfdedb8ef123fe246->leave($__internal_fe5c86610b3c8c09bed4b9c9eed12d988f80d314af7e377cfdedb8ef123fe246_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_931d269f496e35b0fd461c89df82c4236b8dfdd8b4d32b299a3ea25aff0d2604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931d269f496e35b0fd461c89df82c4236b8dfdd8b4d32b299a3ea25aff0d2604->enter($__internal_931d269f496e35b0fd461c89df82c4236b8dfdd8b4d32b299a3ea25aff0d2604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2996e646111cb6eb76106471eccd9ed50d23b3f42bc1d0d13e46733802668ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996e646111cb6eb76106471eccd9ed50d23b3f42bc1d0d13e46733802668ccf->enter($__internal_2996e646111cb6eb76106471eccd9ed50d23b3f42bc1d0d13e46733802668ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_2996e646111cb6eb76106471eccd9ed50d23b3f42bc1d0d13e46733802668ccf->leave($__internal_2996e646111cb6eb76106471eccd9ed50d23b3f42bc1d0d13e46733802668ccf_prof);

        
        $__internal_931d269f496e35b0fd461c89df82c4236b8dfdd8b4d32b299a3ea25aff0d2604->leave($__internal_931d269f496e35b0fd461c89df82c4236b8dfdd8b4d32b299a3ea25aff0d2604_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_56f3121f9e414df4d28a15b33500e50de6757a9a4ace6dd9290b977af1e2a903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f3121f9e414df4d28a15b33500e50de6757a9a4ace6dd9290b977af1e2a903->enter($__internal_56f3121f9e414df4d28a15b33500e50de6757a9a4ace6dd9290b977af1e2a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_23a9da11df5a2a9ca0e193596168a12bc1e351466a77c7b748012ae79c3f368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a9da11df5a2a9ca0e193596168a12bc1e351466a77c7b748012ae79c3f368f->enter($__internal_23a9da11df5a2a9ca0e193596168a12bc1e351466a77c7b748012ae79c3f368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_23a9da11df5a2a9ca0e193596168a12bc1e351466a77c7b748012ae79c3f368f->leave($__internal_23a9da11df5a2a9ca0e193596168a12bc1e351466a77c7b748012ae79c3f368f_prof);

        
        $__internal_56f3121f9e414df4d28a15b33500e50de6757a9a4ace6dd9290b977af1e2a903->leave($__internal_56f3121f9e414df4d28a15b33500e50de6757a9a4ace6dd9290b977af1e2a903_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2955dd545451a68a3b9741055491f62672f8afc640b08c7314e1b0b6067d22c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2955dd545451a68a3b9741055491f62672f8afc640b08c7314e1b0b6067d22c8->enter($__internal_2955dd545451a68a3b9741055491f62672f8afc640b08c7314e1b0b6067d22c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_55080db1ece3f61bd2aef070f050588ca9118904d4e93cf434e9521e23b87837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55080db1ece3f61bd2aef070f050588ca9118904d4e93cf434e9521e23b87837->enter($__internal_55080db1ece3f61bd2aef070f050588ca9118904d4e93cf434e9521e23b87837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_55080db1ece3f61bd2aef070f050588ca9118904d4e93cf434e9521e23b87837->leave($__internal_55080db1ece3f61bd2aef070f050588ca9118904d4e93cf434e9521e23b87837_prof);

        
        $__internal_2955dd545451a68a3b9741055491f62672f8afc640b08c7314e1b0b6067d22c8->leave($__internal_2955dd545451a68a3b9741055491f62672f8afc640b08c7314e1b0b6067d22c8_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5a161f8b3626e2802408bac1871f87e0c18241ca007ccae59e7ae9ad4be1c976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a161f8b3626e2802408bac1871f87e0c18241ca007ccae59e7ae9ad4be1c976->enter($__internal_5a161f8b3626e2802408bac1871f87e0c18241ca007ccae59e7ae9ad4be1c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_34813d6fc96e14f1e6f6cd973df7c8b2b8a4df363e377bd0f0fca48fd4a83306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34813d6fc96e14f1e6f6cd973df7c8b2b8a4df363e377bd0f0fca48fd4a83306->enter($__internal_34813d6fc96e14f1e6f6cd973df7c8b2b8a4df363e377bd0f0fca48fd4a83306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_34813d6fc96e14f1e6f6cd973df7c8b2b8a4df363e377bd0f0fca48fd4a83306->leave($__internal_34813d6fc96e14f1e6f6cd973df7c8b2b8a4df363e377bd0f0fca48fd4a83306_prof);

        
        $__internal_5a161f8b3626e2802408bac1871f87e0c18241ca007ccae59e7ae9ad4be1c976->leave($__internal_5a161f8b3626e2802408bac1871f87e0c18241ca007ccae59e7ae9ad4be1c976_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_dd046afce7753a06ca475d00c3036da3e8c67f3d7b711874290f9d86ab0d8ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd046afce7753a06ca475d00c3036da3e8c67f3d7b711874290f9d86ab0d8ed8->enter($__internal_dd046afce7753a06ca475d00c3036da3e8c67f3d7b711874290f9d86ab0d8ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_2e51aa6a8981e54d2aed4340bbb70d5c4c0c8bd2774a83636932337840ada390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e51aa6a8981e54d2aed4340bbb70d5c4c0c8bd2774a83636932337840ada390->enter($__internal_2e51aa6a8981e54d2aed4340bbb70d5c4c0c8bd2774a83636932337840ada390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_2e51aa6a8981e54d2aed4340bbb70d5c4c0c8bd2774a83636932337840ada390->leave($__internal_2e51aa6a8981e54d2aed4340bbb70d5c4c0c8bd2774a83636932337840ada390_prof);

        
        $__internal_dd046afce7753a06ca475d00c3036da3e8c67f3d7b711874290f9d86ab0d8ed8->leave($__internal_dd046afce7753a06ca475d00c3036da3e8c67f3d7b711874290f9d86ab0d8ed8_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bcebbce3b1c101bd82470c46b3e3149da28574c4c528c98b2015708a3f3e23de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcebbce3b1c101bd82470c46b3e3149da28574c4c528c98b2015708a3f3e23de->enter($__internal_bcebbce3b1c101bd82470c46b3e3149da28574c4c528c98b2015708a3f3e23de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5a6eb5dcb43450345231edb95e7acea3fdaebd8fc85209c9348405e886e7ec0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6eb5dcb43450345231edb95e7acea3fdaebd8fc85209c9348405e886e7ec0e->enter($__internal_5a6eb5dcb43450345231edb95e7acea3fdaebd8fc85209c9348405e886e7ec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5a6eb5dcb43450345231edb95e7acea3fdaebd8fc85209c9348405e886e7ec0e->leave($__internal_5a6eb5dcb43450345231edb95e7acea3fdaebd8fc85209c9348405e886e7ec0e_prof);

        
        $__internal_bcebbce3b1c101bd82470c46b3e3149da28574c4c528c98b2015708a3f3e23de->leave($__internal_bcebbce3b1c101bd82470c46b3e3149da28574c4c528c98b2015708a3f3e23de_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7f9558486c4f4f8a2c51b49f2ab2eaa5861797a9e6b9590578984b02c5033f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9558486c4f4f8a2c51b49f2ab2eaa5861797a9e6b9590578984b02c5033f69->enter($__internal_7f9558486c4f4f8a2c51b49f2ab2eaa5861797a9e6b9590578984b02c5033f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9e1fc92b6331945bec9a3f0f7ecc10f5d253affe188067bb34ae57419bf28982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1fc92b6331945bec9a3f0f7ecc10f5d253affe188067bb34ae57419bf28982->enter($__internal_9e1fc92b6331945bec9a3f0f7ecc10f5d253affe188067bb34ae57419bf28982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_9e1fc92b6331945bec9a3f0f7ecc10f5d253affe188067bb34ae57419bf28982->leave($__internal_9e1fc92b6331945bec9a3f0f7ecc10f5d253affe188067bb34ae57419bf28982_prof);

        
        $__internal_7f9558486c4f4f8a2c51b49f2ab2eaa5861797a9e6b9590578984b02c5033f69->leave($__internal_7f9558486c4f4f8a2c51b49f2ab2eaa5861797a9e6b9590578984b02c5033f69_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f5d52dfe8e7729822e21243c6f2444c5d1bb882f1bfb2b30b8e822cd891c386a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d52dfe8e7729822e21243c6f2444c5d1bb882f1bfb2b30b8e822cd891c386a->enter($__internal_f5d52dfe8e7729822e21243c6f2444c5d1bb882f1bfb2b30b8e822cd891c386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c4c031a3cd42faaea8fe592b04d6818b354d27f03348d77ca0cedfda6f841e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c031a3cd42faaea8fe592b04d6818b354d27f03348d77ca0cedfda6f841e1a->enter($__internal_c4c031a3cd42faaea8fe592b04d6818b354d27f03348d77ca0cedfda6f841e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_c4c031a3cd42faaea8fe592b04d6818b354d27f03348d77ca0cedfda6f841e1a->leave($__internal_c4c031a3cd42faaea8fe592b04d6818b354d27f03348d77ca0cedfda6f841e1a_prof);

        
        $__internal_f5d52dfe8e7729822e21243c6f2444c5d1bb882f1bfb2b30b8e822cd891c386a->leave($__internal_f5d52dfe8e7729822e21243c6f2444c5d1bb882f1bfb2b30b8e822cd891c386a_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8473abeaf334435295d05a4bf2762e010b946ab9fbc9159ccd38328dd1d2e4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8473abeaf334435295d05a4bf2762e010b946ab9fbc9159ccd38328dd1d2e4cf->enter($__internal_8473abeaf334435295d05a4bf2762e010b946ab9fbc9159ccd38328dd1d2e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_64f4f95e919927e22909fdded0847134fb5553cad0479d80d8253f28a067c52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f4f95e919927e22909fdded0847134fb5553cad0479d80d8253f28a067c52c->enter($__internal_64f4f95e919927e22909fdded0847134fb5553cad0479d80d8253f28a067c52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_64f4f95e919927e22909fdded0847134fb5553cad0479d80d8253f28a067c52c->leave($__internal_64f4f95e919927e22909fdded0847134fb5553cad0479d80d8253f28a067c52c_prof);

        
        $__internal_8473abeaf334435295d05a4bf2762e010b946ab9fbc9159ccd38328dd1d2e4cf->leave($__internal_8473abeaf334435295d05a4bf2762e010b946ab9fbc9159ccd38328dd1d2e4cf_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6896f51de2c0e725a186601ebe3383a3ff7a9235fe4c322ffaf6acc9a5abd0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6896f51de2c0e725a186601ebe3383a3ff7a9235fe4c322ffaf6acc9a5abd0cc->enter($__internal_6896f51de2c0e725a186601ebe3383a3ff7a9235fe4c322ffaf6acc9a5abd0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8fcd2bd50cfa0850c9663753991872826fdf97247c33a86b7608b8e15f203429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcd2bd50cfa0850c9663753991872826fdf97247c33a86b7608b8e15f203429->enter($__internal_8fcd2bd50cfa0850c9663753991872826fdf97247c33a86b7608b8e15f203429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8fcd2bd50cfa0850c9663753991872826fdf97247c33a86b7608b8e15f203429->leave($__internal_8fcd2bd50cfa0850c9663753991872826fdf97247c33a86b7608b8e15f203429_prof);

        
        $__internal_6896f51de2c0e725a186601ebe3383a3ff7a9235fe4c322ffaf6acc9a5abd0cc->leave($__internal_6896f51de2c0e725a186601ebe3383a3ff7a9235fe4c322ffaf6acc9a5abd0cc_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8e63672492e81c5118b7ad7724aa765390c4237ae9197186bbbb0371b46420b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e63672492e81c5118b7ad7724aa765390c4237ae9197186bbbb0371b46420b8->enter($__internal_8e63672492e81c5118b7ad7724aa765390c4237ae9197186bbbb0371b46420b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f4e55cba075c11d58216f43d16201ca8aff58afed8ffa7daafd1ed71136f09ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e55cba075c11d58216f43d16201ca8aff58afed8ffa7daafd1ed71136f09ef->enter($__internal_f4e55cba075c11d58216f43d16201ca8aff58afed8ffa7daafd1ed71136f09ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
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
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_f4e55cba075c11d58216f43d16201ca8aff58afed8ffa7daafd1ed71136f09ef->leave($__internal_f4e55cba075c11d58216f43d16201ca8aff58afed8ffa7daafd1ed71136f09ef_prof);

        
        $__internal_8e63672492e81c5118b7ad7724aa765390c4237ae9197186bbbb0371b46420b8->leave($__internal_8e63672492e81c5118b7ad7724aa765390c4237ae9197186bbbb0371b46420b8_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2be1bb29374a9a78c8a9a9e23ef89cba5a3ad81342e3121706c7c18fa386ed72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be1bb29374a9a78c8a9a9e23ef89cba5a3ad81342e3121706c7c18fa386ed72->enter($__internal_2be1bb29374a9a78c8a9a9e23ef89cba5a3ad81342e3121706c7c18fa386ed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3f75f2f59224aa344788f3edaf90aa599f0d3a810e6645738c64c66716b260e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f75f2f59224aa344788f3edaf90aa599f0d3a810e6645738c64c66716b260e4->enter($__internal_3f75f2f59224aa344788f3edaf90aa599f0d3a810e6645738c64c66716b260e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_3f75f2f59224aa344788f3edaf90aa599f0d3a810e6645738c64c66716b260e4->leave($__internal_3f75f2f59224aa344788f3edaf90aa599f0d3a810e6645738c64c66716b260e4_prof);

        
        $__internal_2be1bb29374a9a78c8a9a9e23ef89cba5a3ad81342e3121706c7c18fa386ed72->leave($__internal_2be1bb29374a9a78c8a9a9e23ef89cba5a3ad81342e3121706c7c18fa386ed72_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_affec12fc1848d64770afda5394d1c3ce280aa3a304c3659e61a2eba6814e719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affec12fc1848d64770afda5394d1c3ce280aa3a304c3659e61a2eba6814e719->enter($__internal_affec12fc1848d64770afda5394d1c3ce280aa3a304c3659e61a2eba6814e719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_eecbfe8d76cda0b14c38d9818883b7d12b7e16b7cc420da65a94096abb0364a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecbfe8d76cda0b14c38d9818883b7d12b7e16b7cc420da65a94096abb0364a9->enter($__internal_eecbfe8d76cda0b14c38d9818883b7d12b7e16b7cc420da65a94096abb0364a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_eecbfe8d76cda0b14c38d9818883b7d12b7e16b7cc420da65a94096abb0364a9->leave($__internal_eecbfe8d76cda0b14c38d9818883b7d12b7e16b7cc420da65a94096abb0364a9_prof);

        
        $__internal_affec12fc1848d64770afda5394d1c3ce280aa3a304c3659e61a2eba6814e719->leave($__internal_affec12fc1848d64770afda5394d1c3ce280aa3a304c3659e61a2eba6814e719_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
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

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
