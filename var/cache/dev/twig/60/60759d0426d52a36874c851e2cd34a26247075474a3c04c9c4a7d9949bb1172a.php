<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_5e528e4019049bff0c712f6cc040b7f1132c8abe4fa5d2c8087767b5837772d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a61ceede7c86fdd06e408c7aca0c685050a3f2a86e826ba04a89931b992c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a61ceede7c86fdd06e408c7aca0c685050a3f2a86e826ba04a89931b992c15->enter($__internal_73a61ceede7c86fdd06e408c7aca0c685050a3f2a86e826ba04a89931b992c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_075f80d70d4d123e6d7eb936f671fcc71e665fd7359263bf407bca7a254a8235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075f80d70d4d123e6d7eb936f671fcc71e665fd7359263bf407bca7a254a8235->enter($__internal_075f80d70d4d123e6d7eb936f671fcc71e665fd7359263bf407bca7a254a8235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_73a61ceede7c86fdd06e408c7aca0c685050a3f2a86e826ba04a89931b992c15->leave($__internal_73a61ceede7c86fdd06e408c7aca0c685050a3f2a86e826ba04a89931b992c15_prof);

        
        $__internal_075f80d70d4d123e6d7eb936f671fcc71e665fd7359263bf407bca7a254a8235->leave($__internal_075f80d70d4d123e6d7eb936f671fcc71e665fd7359263bf407bca7a254a8235_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f534b6a76b1d0cdae5233f375f0013ddf9ef2e326baddcbf509fbe356170558e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f534b6a76b1d0cdae5233f375f0013ddf9ef2e326baddcbf509fbe356170558e->enter($__internal_f534b6a76b1d0cdae5233f375f0013ddf9ef2e326baddcbf509fbe356170558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_70253314e070786ba482fdb849d11104bfcde52f613730fb382705a57bbb57bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70253314e070786ba482fdb849d11104bfcde52f613730fb382705a57bbb57bc->enter($__internal_70253314e070786ba482fdb849d11104bfcde52f613730fb382705a57bbb57bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_70253314e070786ba482fdb849d11104bfcde52f613730fb382705a57bbb57bc->leave($__internal_70253314e070786ba482fdb849d11104bfcde52f613730fb382705a57bbb57bc_prof);

        
        $__internal_f534b6a76b1d0cdae5233f375f0013ddf9ef2e326baddcbf509fbe356170558e->leave($__internal_f534b6a76b1d0cdae5233f375f0013ddf9ef2e326baddcbf509fbe356170558e_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b36a6ee156597fefbd55cc1ad7e8279d7e6122ac62b3d70cb10470bca8081ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36a6ee156597fefbd55cc1ad7e8279d7e6122ac62b3d70cb10470bca8081ce7->enter($__internal_b36a6ee156597fefbd55cc1ad7e8279d7e6122ac62b3d70cb10470bca8081ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_31fa61c2310acef583b2cdc368bf21675f3b53e50f1ea29bc5809a1d53e8d81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fa61c2310acef583b2cdc368bf21675f3b53e50f1ea29bc5809a1d53e8d81b->enter($__internal_31fa61c2310acef583b2cdc368bf21675f3b53e50f1ea29bc5809a1d53e8d81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_31fa61c2310acef583b2cdc368bf21675f3b53e50f1ea29bc5809a1d53e8d81b->leave($__internal_31fa61c2310acef583b2cdc368bf21675f3b53e50f1ea29bc5809a1d53e8d81b_prof);

        
        $__internal_b36a6ee156597fefbd55cc1ad7e8279d7e6122ac62b3d70cb10470bca8081ce7->leave($__internal_b36a6ee156597fefbd55cc1ad7e8279d7e6122ac62b3d70cb10470bca8081ce7_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a863f1bf78a46fc058e31f89fbd25e6dbee40f479239a0aab145fff5a41f242b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a863f1bf78a46fc058e31f89fbd25e6dbee40f479239a0aab145fff5a41f242b->enter($__internal_a863f1bf78a46fc058e31f89fbd25e6dbee40f479239a0aab145fff5a41f242b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b6979fb88ab9380d6d59d9c57dd61f1f4fc998b370dc0ed8185b6df67ad8a854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6979fb88ab9380d6d59d9c57dd61f1f4fc998b370dc0ed8185b6df67ad8a854->enter($__internal_b6979fb88ab9380d6d59d9c57dd61f1f4fc998b370dc0ed8185b6df67ad8a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_b6979fb88ab9380d6d59d9c57dd61f1f4fc998b370dc0ed8185b6df67ad8a854->leave($__internal_b6979fb88ab9380d6d59d9c57dd61f1f4fc998b370dc0ed8185b6df67ad8a854_prof);

        
        $__internal_a863f1bf78a46fc058e31f89fbd25e6dbee40f479239a0aab145fff5a41f242b->leave($__internal_a863f1bf78a46fc058e31f89fbd25e6dbee40f479239a0aab145fff5a41f242b_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ad1a7c1939c40b84c63fde3c8a43aa7afb82b5c094a698c1fc6cf825a60cbe61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad1a7c1939c40b84c63fde3c8a43aa7afb82b5c094a698c1fc6cf825a60cbe61->enter($__internal_ad1a7c1939c40b84c63fde3c8a43aa7afb82b5c094a698c1fc6cf825a60cbe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8f5f2d9859916f586c188cbc19dddbc5dcc835bdc79a75304e5af958d79a41c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5f2d9859916f586c188cbc19dddbc5dcc835bdc79a75304e5af958d79a41c6->enter($__internal_8f5f2d9859916f586c188cbc19dddbc5dcc835bdc79a75304e5af958d79a41c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_8f5f2d9859916f586c188cbc19dddbc5dcc835bdc79a75304e5af958d79a41c6->leave($__internal_8f5f2d9859916f586c188cbc19dddbc5dcc835bdc79a75304e5af958d79a41c6_prof);

        
        $__internal_ad1a7c1939c40b84c63fde3c8a43aa7afb82b5c094a698c1fc6cf825a60cbe61->leave($__internal_ad1a7c1939c40b84c63fde3c8a43aa7afb82b5c094a698c1fc6cf825a60cbe61_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ea8e9637796bc5b085840cf2564adc4c1fd5e32078de8801ee831ab6c48cd9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8e9637796bc5b085840cf2564adc4c1fd5e32078de8801ee831ab6c48cd9ca->enter($__internal_ea8e9637796bc5b085840cf2564adc4c1fd5e32078de8801ee831ab6c48cd9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_748d81ed0f937cd0d768d23039b499309236b234c6f2166e60804430aa2bedce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748d81ed0f937cd0d768d23039b499309236b234c6f2166e60804430aa2bedce->enter($__internal_748d81ed0f937cd0d768d23039b499309236b234c6f2166e60804430aa2bedce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_748d81ed0f937cd0d768d23039b499309236b234c6f2166e60804430aa2bedce->leave($__internal_748d81ed0f937cd0d768d23039b499309236b234c6f2166e60804430aa2bedce_prof);

        
        $__internal_ea8e9637796bc5b085840cf2564adc4c1fd5e32078de8801ee831ab6c48cd9ca->leave($__internal_ea8e9637796bc5b085840cf2564adc4c1fd5e32078de8801ee831ab6c48cd9ca_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_73561a418434834cd2a1b554201536b8520c202d8de4f0bd32673d46e098bb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73561a418434834cd2a1b554201536b8520c202d8de4f0bd32673d46e098bb24->enter($__internal_73561a418434834cd2a1b554201536b8520c202d8de4f0bd32673d46e098bb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a2c239a912e0a161a15ef8b78260b0914b70a540660075906de0725b0e659718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c239a912e0a161a15ef8b78260b0914b70a540660075906de0725b0e659718->enter($__internal_a2c239a912e0a161a15ef8b78260b0914b70a540660075906de0725b0e659718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_a2c239a912e0a161a15ef8b78260b0914b70a540660075906de0725b0e659718->leave($__internal_a2c239a912e0a161a15ef8b78260b0914b70a540660075906de0725b0e659718_prof);

        
        $__internal_73561a418434834cd2a1b554201536b8520c202d8de4f0bd32673d46e098bb24->leave($__internal_73561a418434834cd2a1b554201536b8520c202d8de4f0bd32673d46e098bb24_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dc21ded66d0ccbadb9c771d7cfa0ada159afd057beda8dd99ae8a684edf5c5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc21ded66d0ccbadb9c771d7cfa0ada159afd057beda8dd99ae8a684edf5c5f9->enter($__internal_dc21ded66d0ccbadb9c771d7cfa0ada159afd057beda8dd99ae8a684edf5c5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_385f58177158bd07ce495bbfe757a43482e525013bfe4ff8e3d6b829d026be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385f58177158bd07ce495bbfe757a43482e525013bfe4ff8e3d6b829d026be34->enter($__internal_385f58177158bd07ce495bbfe757a43482e525013bfe4ff8e3d6b829d026be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_385f58177158bd07ce495bbfe757a43482e525013bfe4ff8e3d6b829d026be34->leave($__internal_385f58177158bd07ce495bbfe757a43482e525013bfe4ff8e3d6b829d026be34_prof);

        
        $__internal_dc21ded66d0ccbadb9c771d7cfa0ada159afd057beda8dd99ae8a684edf5c5f9->leave($__internal_dc21ded66d0ccbadb9c771d7cfa0ada159afd057beda8dd99ae8a684edf5c5f9_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2e96baf74e692cb8cf97e61708d7de8615cb8b6941c5e66a0cbecc3d01bc1aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e96baf74e692cb8cf97e61708d7de8615cb8b6941c5e66a0cbecc3d01bc1aec->enter($__internal_2e96baf74e692cb8cf97e61708d7de8615cb8b6941c5e66a0cbecc3d01bc1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ec68745d8d7acaf56b8cf7ad0a236d1f5a01d44f57aa48c2e45abee8ce5d07a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec68745d8d7acaf56b8cf7ad0a236d1f5a01d44f57aa48c2e45abee8ce5d07a1->enter($__internal_ec68745d8d7acaf56b8cf7ad0a236d1f5a01d44f57aa48c2e45abee8ce5d07a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_ec68745d8d7acaf56b8cf7ad0a236d1f5a01d44f57aa48c2e45abee8ce5d07a1->leave($__internal_ec68745d8d7acaf56b8cf7ad0a236d1f5a01d44f57aa48c2e45abee8ce5d07a1_prof);

        
        $__internal_2e96baf74e692cb8cf97e61708d7de8615cb8b6941c5e66a0cbecc3d01bc1aec->leave($__internal_2e96baf74e692cb8cf97e61708d7de8615cb8b6941c5e66a0cbecc3d01bc1aec_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
