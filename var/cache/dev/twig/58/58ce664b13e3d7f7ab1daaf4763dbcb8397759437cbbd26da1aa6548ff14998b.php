<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_63dbf8c0b634507554b9ec6b4c80d6cb2c0636d62a9cc76ea6b50a0d52ac4081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3729d038c3206d3c0e3c2c3e4a9dfdece58aedfe5f36c7aa08a02586642374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3729d038c3206d3c0e3c2c3e4a9dfdece58aedfe5f36c7aa08a02586642374->enter($__internal_4f3729d038c3206d3c0e3c2c3e4a9dfdece58aedfe5f36c7aa08a02586642374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4eaabca00ad7ea94f1e5df403efd21fb934d067863d45c3269db4e601f7958ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eaabca00ad7ea94f1e5df403efd21fb934d067863d45c3269db4e601f7958ef->enter($__internal_4eaabca00ad7ea94f1e5df403efd21fb934d067863d45c3269db4e601f7958ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_4f3729d038c3206d3c0e3c2c3e4a9dfdece58aedfe5f36c7aa08a02586642374->leave($__internal_4f3729d038c3206d3c0e3c2c3e4a9dfdece58aedfe5f36c7aa08a02586642374_prof);

        
        $__internal_4eaabca00ad7ea94f1e5df403efd21fb934d067863d45c3269db4e601f7958ef->leave($__internal_4eaabca00ad7ea94f1e5df403efd21fb934d067863d45c3269db4e601f7958ef_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ad63c4ced5e6ddc3a3c7384bd7c7f0958782579892ee8357ba6f5a00968b8074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad63c4ced5e6ddc3a3c7384bd7c7f0958782579892ee8357ba6f5a00968b8074->enter($__internal_ad63c4ced5e6ddc3a3c7384bd7c7f0958782579892ee8357ba6f5a00968b8074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_72aa538fa149e5ba00d2cd19636742f310f86b229219e8d67d13b244d7e925cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aa538fa149e5ba00d2cd19636742f310f86b229219e8d67d13b244d7e925cc->enter($__internal_72aa538fa149e5ba00d2cd19636742f310f86b229219e8d67d13b244d7e925cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_72aa538fa149e5ba00d2cd19636742f310f86b229219e8d67d13b244d7e925cc->leave($__internal_72aa538fa149e5ba00d2cd19636742f310f86b229219e8d67d13b244d7e925cc_prof);

        
        $__internal_ad63c4ced5e6ddc3a3c7384bd7c7f0958782579892ee8357ba6f5a00968b8074->leave($__internal_ad63c4ced5e6ddc3a3c7384bd7c7f0958782579892ee8357ba6f5a00968b8074_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_39304d3a37ab5754c5590c3ae6fbdde5dc71eaf72e070528f027fdd71abc6205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39304d3a37ab5754c5590c3ae6fbdde5dc71eaf72e070528f027fdd71abc6205->enter($__internal_39304d3a37ab5754c5590c3ae6fbdde5dc71eaf72e070528f027fdd71abc6205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_83ec649d91415499578e4e7e530850d3aaf018c3670aef3561c9bedc0255f41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ec649d91415499578e4e7e530850d3aaf018c3670aef3561c9bedc0255f41a->enter($__internal_83ec649d91415499578e4e7e530850d3aaf018c3670aef3561c9bedc0255f41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_83ec649d91415499578e4e7e530850d3aaf018c3670aef3561c9bedc0255f41a->leave($__internal_83ec649d91415499578e4e7e530850d3aaf018c3670aef3561c9bedc0255f41a_prof);

        
        $__internal_39304d3a37ab5754c5590c3ae6fbdde5dc71eaf72e070528f027fdd71abc6205->leave($__internal_39304d3a37ab5754c5590c3ae6fbdde5dc71eaf72e070528f027fdd71abc6205_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8303ea660f0390bc266afdc6dcba2e055e54d47e3fe58bc49afa8a49af60de7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8303ea660f0390bc266afdc6dcba2e055e54d47e3fe58bc49afa8a49af60de7d->enter($__internal_8303ea660f0390bc266afdc6dcba2e055e54d47e3fe58bc49afa8a49af60de7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3472f0487dae33e03b89f7255489a05713ba5a18f70cd020531f236154e9e0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3472f0487dae33e03b89f7255489a05713ba5a18f70cd020531f236154e9e0e3->enter($__internal_3472f0487dae33e03b89f7255489a05713ba5a18f70cd020531f236154e9e0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_3472f0487dae33e03b89f7255489a05713ba5a18f70cd020531f236154e9e0e3->leave($__internal_3472f0487dae33e03b89f7255489a05713ba5a18f70cd020531f236154e9e0e3_prof);

        
        $__internal_8303ea660f0390bc266afdc6dcba2e055e54d47e3fe58bc49afa8a49af60de7d->leave($__internal_8303ea660f0390bc266afdc6dcba2e055e54d47e3fe58bc49afa8a49af60de7d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_b23bb09048989eaa0add11077f1e1febbdd32ee58ded53dbba13f9fccd7712a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23bb09048989eaa0add11077f1e1febbdd32ee58ded53dbba13f9fccd7712a9->enter($__internal_b23bb09048989eaa0add11077f1e1febbdd32ee58ded53dbba13f9fccd7712a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_82ec0812da545d1494e3933df9352c9f555275e6a3860a7e21af73f6e62ba633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ec0812da545d1494e3933df9352c9f555275e6a3860a7e21af73f6e62ba633->enter($__internal_82ec0812da545d1494e3933df9352c9f555275e6a3860a7e21af73f6e62ba633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_82ec0812da545d1494e3933df9352c9f555275e6a3860a7e21af73f6e62ba633->leave($__internal_82ec0812da545d1494e3933df9352c9f555275e6a3860a7e21af73f6e62ba633_prof);

        
        $__internal_b23bb09048989eaa0add11077f1e1febbdd32ee58ded53dbba13f9fccd7712a9->leave($__internal_b23bb09048989eaa0add11077f1e1febbdd32ee58ded53dbba13f9fccd7712a9_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cb4560c6261077383edef4d8243f154c8438dfcb42a943c81d5bc94550b708a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4560c6261077383edef4d8243f154c8438dfcb42a943c81d5bc94550b708a1->enter($__internal_cb4560c6261077383edef4d8243f154c8438dfcb42a943c81d5bc94550b708a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7e12a3b6c6970b81f4f6e14032322f5ec54ef990f2966326547751e24bc2b622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e12a3b6c6970b81f4f6e14032322f5ec54ef990f2966326547751e24bc2b622->enter($__internal_7e12a3b6c6970b81f4f6e14032322f5ec54ef990f2966326547751e24bc2b622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_7e12a3b6c6970b81f4f6e14032322f5ec54ef990f2966326547751e24bc2b622->leave($__internal_7e12a3b6c6970b81f4f6e14032322f5ec54ef990f2966326547751e24bc2b622_prof);

        
        $__internal_cb4560c6261077383edef4d8243f154c8438dfcb42a943c81d5bc94550b708a1->leave($__internal_cb4560c6261077383edef4d8243f154c8438dfcb42a943c81d5bc94550b708a1_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a84264b0c9bdf2ae7f549427c5dd5dc1ea1a1a681d17c10d22fa899552ddfb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84264b0c9bdf2ae7f549427c5dd5dc1ea1a1a681d17c10d22fa899552ddfb00->enter($__internal_a84264b0c9bdf2ae7f549427c5dd5dc1ea1a1a681d17c10d22fa899552ddfb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_da4872ca86cd1d68b63cfa49301c1fd4782a80e039e97b25925e0c53899746ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4872ca86cd1d68b63cfa49301c1fd4782a80e039e97b25925e0c53899746ac->enter($__internal_da4872ca86cd1d68b63cfa49301c1fd4782a80e039e97b25925e0c53899746ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_da4872ca86cd1d68b63cfa49301c1fd4782a80e039e97b25925e0c53899746ac->leave($__internal_da4872ca86cd1d68b63cfa49301c1fd4782a80e039e97b25925e0c53899746ac_prof);

        
        $__internal_a84264b0c9bdf2ae7f549427c5dd5dc1ea1a1a681d17c10d22fa899552ddfb00->leave($__internal_a84264b0c9bdf2ae7f549427c5dd5dc1ea1a1a681d17c10d22fa899552ddfb00_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_db7a31e59e05ddfb98340ff83eeb8d067d97f21e92e2474da51953dae6efea24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7a31e59e05ddfb98340ff83eeb8d067d97f21e92e2474da51953dae6efea24->enter($__internal_db7a31e59e05ddfb98340ff83eeb8d067d97f21e92e2474da51953dae6efea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f2db72b3c5d044714e6c7d56f55c68224528d9ee9ce389abcf398351a695a163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2db72b3c5d044714e6c7d56f55c68224528d9ee9ce389abcf398351a695a163->enter($__internal_f2db72b3c5d044714e6c7d56f55c68224528d9ee9ce389abcf398351a695a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_f2db72b3c5d044714e6c7d56f55c68224528d9ee9ce389abcf398351a695a163->leave($__internal_f2db72b3c5d044714e6c7d56f55c68224528d9ee9ce389abcf398351a695a163_prof);

        
        $__internal_db7a31e59e05ddfb98340ff83eeb8d067d97f21e92e2474da51953dae6efea24->leave($__internal_db7a31e59e05ddfb98340ff83eeb8d067d97f21e92e2474da51953dae6efea24_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f7c8464230bb79430f08eaedab7b0eab410e4c4f915d49031793cf1e9a6201de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c8464230bb79430f08eaedab7b0eab410e4c4f915d49031793cf1e9a6201de->enter($__internal_f7c8464230bb79430f08eaedab7b0eab410e4c4f915d49031793cf1e9a6201de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c1e4bf11946cf1f7a14e55a5e8029026a458af928ab2098ed02519d1d234d02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e4bf11946cf1f7a14e55a5e8029026a458af928ab2098ed02519d1d234d02c->enter($__internal_c1e4bf11946cf1f7a14e55a5e8029026a458af928ab2098ed02519d1d234d02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_c1e4bf11946cf1f7a14e55a5e8029026a458af928ab2098ed02519d1d234d02c->leave($__internal_c1e4bf11946cf1f7a14e55a5e8029026a458af928ab2098ed02519d1d234d02c_prof);

        
        $__internal_f7c8464230bb79430f08eaedab7b0eab410e4c4f915d49031793cf1e9a6201de->leave($__internal_f7c8464230bb79430f08eaedab7b0eab410e4c4f915d49031793cf1e9a6201de_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/gitsearch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
