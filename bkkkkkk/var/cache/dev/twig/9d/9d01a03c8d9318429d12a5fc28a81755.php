<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_f696573ad273a029ce1ae2ccc3f15986 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        // line 26
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 26, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 27
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 27, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 28
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 28);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 28, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig"));

        // line 29
        echo "
";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('button_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('money_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('date_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('time_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 249
        echo "
";
        // line 250
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('color_picker_widget', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 395
        echo "
";
        // line 396
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 416
        echo "
";
        // line 417
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('form_label', $context, $blocks);
        // line 452
        echo "
";
        // line 453
        $this->displayBlock('choice_label', $context, $blocks);
        // line 458
        echo "
";
        // line 459
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 462
        echo "
";
        // line 463
        $this->displayBlock('radio_label', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 496
        echo "
";
        // line 498
        echo "
";
        // line 499
        $this->displayBlock('form_row', $context, $blocks);
        // line 506
        echo "
";
        // line 507
        $this->displayBlock('button_row', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('choice_row', $context, $blocks);
        // line 517
        echo "
";
        // line 518
        $this->displayBlock('date_row', $context, $blocks);
        // line 522
        echo "
";
        // line 523
        $this->displayBlock('time_row', $context, $blocks);
        // line 527
        echo "
";
        // line 528
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 532
        echo "
";
        // line 533
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 539
        echo "
";
        // line 540
        $this->displayBlock('radio_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        echo "
";
        // line 549
        $this->displayBlock('form_errors', $context, $blocks);
        // line 578
        echo "

";
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 618
        echo "
";
        // line 619
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 671
        echo "
";
        // line 672
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 708
        echo "
";
        // line 709
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 733
        echo "
";
        // line 734
        $this->displayBlock('file_widget', $context, $blocks);
        // line 761
        echo "
";
        // line 762
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 778
        echo "
";
        // line 779
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 793
        echo "
";
        // line 794
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 819
        echo "
";
        // line 820
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 824
        echo "
";
        // line 825
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 829
        echo "
";
        // line 830
        $this->displayBlock('form_help', $context, $blocks);
        // line 835
        echo "
";
        // line 836
        $this->displayBlock('form_hint', $context, $blocks);
        // line 843
        echo "
";
        // line 844
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 847
        echo "
";
        // line 848
        $this->displayBlock('text_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 33
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })())))) {
            // line 34
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")) . " form-control"))]);
        }
        // line 36
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 40
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 40), "")) : ("")) . " form-control"))]);
        // line 41
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 45
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 46
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 50
        echo "<div class=\"input-group money-type\">
        ";
        // line 51
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 51, $this->source); })()), 0, 2));
        // line 52
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 54, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 57
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 58
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 60
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 60, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 63
        echo "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 67
        echo "<div class=\"input-group\">";
        // line 68
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 69
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 76
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 76, $this->source); })()) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 79, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 79), "")) : ("")) . " form-inline"))]);
            // line 80
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "date", [], "any", false, false, false, 81), 'errors');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "time", [], "any", false, false, false, 82), 'errors');
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "date", [], "any", false, false, false, 83), 'widget', ["datetime" => true]);
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "time", [], "any", false, false, false, 84), 'widget', ["datetime" => true]);
            // line 85
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 90
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 90, $this->source); })()) == "single_text")) {
            // line 91
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 93
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 93, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 93), "")) : ("")) . " form-inline"))]);
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 94, $this->source); })()))) {
                // line 95
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 97
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 97, $this->source); })()), ["{{ year }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "year", [], "any", false, false, false, 98), 'widget'), "{{ month }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "month", [], "any", false, false, false, 99), 'widget'), "{{ day }}" =>             // line 100
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "day", [], "any", false, false, false, 100), 'widget')]);
            // line 102
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 102, $this->source); })()))) {
                // line 103
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 109, $this->source); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 112), "")) : ("")) . " form-inline"))]);
            // line 113
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 113, $this->source); })())))) {
                // line 114
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "hour", [], "any", false, false, false, 116), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "minute", [], "any", false, false, false, 116), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 116, $this->source); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "second", [], "any", false, false, false, 116), 'widget');
            }
            // line 117
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 117, $this->source); })())))) {
                // line 118
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 124
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 124, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 124), "")) : ("")) . " custom-select"))]);
        // line 125
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 125, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)], "Admin.Global")]);
        // line 126
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 130
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 130)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 130), "")) : ("")))) {
            // line 131
            echo "<div class=\"control-group\">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 134
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 134), "")) : ("")), "translation_domain" =>                 // line 135
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 135, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        } else {
            // line 140
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 142
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 143
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 143), "")) : ("")), "translation_domain" =>                 // line 144
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 144, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 152, $this->source); })()), "")) : (""));
        // line 153
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 153, $this->source); })()))) {
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 158
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 163
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 163, $this->source); })()), "")) : (""));
        // line 164
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 164, $this->source); })()))) {
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 167
            echo "<div class=\"radio form-check form-check-radio\">";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 169
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 173
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 174
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 177, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 178
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</ul>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 184
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 185
        echo "<li";
        if ((array_key_exists("defaultHidden", $context) && ((isset($context["defaultHidden"]) || array_key_exists("defaultHidden", $context) ? $context["defaultHidden"] : (function () { throw new RuntimeError('Variable "defaultHidden" does not exist.', 185, $this->source); })()) === true))) {
            echo " class=\"more\"";
        }
        echo ">
        ";
        // line 186
        $context["checked"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 186), "submitted_values", [], "any", true, true, false, 186) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 186, $this->source); })()), "id_category", [], "any", false, false, false, 186), [], "array", true, true, false, 186));
        // line 187
        echo "        ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 187, $this->source); })())) {
            // line 188
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "vars", [], "any", false, false, false, 190), "full_name", [], "any", false, false, false, 190), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 190, $this->source); })()), "id_category", [], "any", false, false, false, 190), "html", null, true);
            echo "\"";
            if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 190, $this->source); })())) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\">
                    ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 191) && (twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 191, $this->source); })()), "active", [], "any", false, false, false, 191) == 0))) {
                // line 192
                echo "                        <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 192, $this->source); })()), "name", [], "any", false, false, false, 192), "html", null, true);
                echo "</i>";
            } else {
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 194, $this->source); })()), "name", [], "any", false, false, false, 194), "html", null, true);
                echo "
                    ";
            }
            // line 196
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 197
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 197, $this->source); })()), "id_category", [], "any", false, false, false, 197), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 199
            echo "                </label>
            </div>";
        } else {
            // line 202
            echo "<div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 204, $this->source); })()), "id_category", [], "any", false, false, false, 204), "html", null, true);
            echo "\"";
            if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 204, $this->source); })())) {
                echo " checked=\"checked\"";
            }
            echo " class=\"category\"";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 204, $this->source); })())) {
                echo " required";
            }
            echo ">
                    ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 205, $this->source); })()), "name", [], "any", false, false, false, 205), "html", null, true);
            echo "
                    ";
            // line 206
            if (array_key_exists("defaultCategory", $context)) {
                // line 207
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 207, $this->source); })()), "id_category", [], "any", false, false, false, 207), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 209
            echo "                </label>
            </div>";
        }
        // line 212
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 212)) {
            // line 213
            echo "            <ul";
            if ((array_key_exists("defaultHidden", $context) && ((isset($context["defaultHidden"]) || array_key_exists("defaultHidden", $context) ? $context["defaultHidden"] : (function () { throw new RuntimeError('Variable "defaultHidden" does not exist.', 213, $this->source); })()) === true))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 214, $this->source); })()), "children", [], "any", false, false, false, 214));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 215
                echo "                    ";
                $context["child"] = $context["item"];
                // line 216
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "</ul>
        ";
        }
        // line 220
        echo "    </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 223
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 224
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "vars", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225), "html", null, true);
        echo "\">
        ";
        // line 226
        if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 226, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })())) > 1))) {
            // line 227
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 229
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "label", [], "any", false, false, false, 230), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 230, $this->source); })()), "id_lang", [], "any", false, false, false, 230) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "name", [], "any", false, false, false, 230))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
                echo "\">
                        ";
                // line 231
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 231), "label", [], "any", false, false, false, 231)), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "        </ul>
        ";
        }
        // line 237
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 240
            echo "                <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "label", [], "any", false, false, false, 240), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
            echo " tab-pane translation-field ";
            if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 240, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })())) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 240, $this->source); })()), "id_lang", [], "any", false, false, false, 240) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "name", [], "any", false, false, false, 240))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "vars", [], "any", false, false, false, 240), "valid", [], "any", false, false, false, 240)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 240), "label", [], "any", false, false, false, 240), "html", null, true);
            echo "\">
                    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            // line 243
            $this->displayBlock("form_help", $context, $blocks);
            // line 244
            echo "</div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 250
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 251
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 251, $this->source); })())))) {
            // line 252
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 252, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 252)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 252), "")) : ("")) . " form-control"))]);
        }
        // line 254
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 257
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 261
            echo "            ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 261), "attr", [], "any", false, true, false, 261), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 261), "attr", [], "any", false, true, false, 261), "class", [], "any", false, false, false, 261), "")) : ("")) . " js-locale-input");
            // line 262
            echo "            ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 262, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 262), "label", [], "any", false, false, false, 262));
            // line 263
            echo "
            ";
            // line 264
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 264, $this->source); })()), "id_lang", [], "any", false, false, false, 264) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 264), "name", [], "any", false, false, false, 264))) {
                // line 265
                echo "                ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 265, $this->source); })()) . " d-none");
                // line 266
                echo "            ";
            }
            // line 267
            echo "
            ";
            // line 268
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 268), "attr", [], "any", false, false, false, 268);
            // line 269
            echo "
            ";
            // line 270
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 270, $this->source); })()))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
        ";
        // line 273
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 273, $this->source); })())) {
            // line 274
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "vars", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280), "html", null, true);
            echo "\"
            >
                ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "vars", [], "any", false, false, false, 282), "default_locale", [], "any", false, false, false, 282), "iso_code", [], "any", false, false, false, 282), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "vars", [], "any", false, false, false, 285), "id", [], "any", false, false, false, 285), "html", null, true);
            echo "\">
                ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 286, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 287
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 287), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 287), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "            </div>
        </div>
        ";
        }
        // line 292
        echo "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 295
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 299
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 299), "attr", [], "any", false, true, false, 299), "class", [], "any", true, true, false, 299)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 299), "attr", [], "any", false, true, false, 299), "class", [], "any", false, false, false, 299), "")) : ("")) . " js-locale-input");
            // line 300
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 300, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 300), "label", [], "any", false, false, false, 300));
            // line 301
            echo "
      ";
            // line 302
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 302, $this->source); })()), "id_lang", [], "any", false, false, false, 302) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 302), "name", [], "any", false, false, false, 302))) {
                // line 303
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 303, $this->source); })()) . " d-none");
                // line 304
                echo "      ";
            }
            // line 305
            echo "
      <div class=\"";
            // line 306
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 306, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 307
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 307, $this->source); })()))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "
    ";
        // line 311
        if ((isset($context["show_locale_select"]) || array_key_exists("show_locale_select", $context) ? $context["show_locale_select"] : (function () { throw new RuntimeError('Variable "show_locale_select" does not exist.', 311, $this->source); })())) {
            // line 312
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "vars", [], "any", false, false, false, 318), "id", [], "any", false, false, false, 318), "html", null, true);
            echo "\"
        >
          ";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "vars", [], "any", false, false, false, 320), "default_locale", [], "any", false, false, false, 320), "iso_code", [], "any", false, false, false, 320), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "vars", [], "any", false, false, false, 323), "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\">
          ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 324, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 325
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 326
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 326), "html", null, true);
                echo "\"
            >
              ";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 328), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "        </div>
      </div>
    ";
        }
        // line 334
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 337
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 338
        echo "  ";
        ob_start();
        // line 339
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 339, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 339)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 339), "")) : ("")) . " datepicker form-control"))]);
        // line 340
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 340, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "vars", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340)], "Admin.Global")]);
        // line 341
        echo "<div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["date_format"]) || array_key_exists("date_format", $context) ? $context["date_format"] : (function () { throw new RuntimeError('Variable "date_format" does not exist.', 342, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 342, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 342, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 353
        echo "  ";
        ob_start();
        // line 354
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), "from", [], "any", false, false, false, 354), 'widget');
        echo "
    ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "from", [], "any", false, false, false, 355), 'errors');
        echo "
    ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "to", [], "any", false, false, false, 356), 'widget');
        echo "
    ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "to", [], "any", false, false, false, 357), 'errors');
        echo "
  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 353
        echo twig_spaceless($___internal_parse_5_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 361
    public function block_color_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "color_picker_widget"));

        // line 362
        echo "  ";
        ob_start();
        // line 363
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 363, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 363)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 363), "")) : ("")) . " form-control colorpicker"))]);
        // line 364
        echo "    <div class=\"input-group colorpicker\">
      <input type=\"text\" ";
        // line 365
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 365, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 365, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 362
        echo twig_spaceless($___internal_parse_6_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 370
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 371
        echo "    ";
        ob_start();
        // line 372
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block\"
                title=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 375
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 375, $this->source); })()), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      ";
        // line 380
        if ((isset($context["show_reset_button"]) || array_key_exists("show_reset_button", $context) ? $context["show_reset_button"] : (function () { throw new RuntimeError('Variable "show_reset_button" does not exist.', 380, $this->source); })())) {
            // line 381
            echo "          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"";
            // line 383
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 383, $this->source); })()), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"";
            // line 385
            echo twig_escape_filter($this->env, (isset($context["reset_url"]) || array_key_exists("reset_url", $context) ? $context["reset_url"] : (function () { throw new RuntimeError('Variable "reset_url" does not exist.', 385, $this->source); })()), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["redirect_url"]) || array_key_exists("redirect_url", $context) ? $context["redirect_url"] : (function () { throw new RuntimeError('Variable "redirect_url" does not exist.', 386, $this->source); })()), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </div>
      ";
        }
        // line 393
        echo "    ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 371
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 396
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 397
        echo "    ";
        ob_start();
        // line 398
        echo "    <span class=\"ps-switch\">
        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 399, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 400
            echo "            ";
            $context["inputId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 400, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 400));
            // line 401
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 401, $this->source); })()), "html", null, true);
            echo "\"
                ";
            // line 402
            $this->displayBlock("attributes", $context, $blocks);
            echo "
                name=\"";
            // line 403
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 403, $this->source); })()), "html", null, true);
            echo "\"
                value=\"";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 404), "html", null, true);
            echo "\"
                ";
            // line 405
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 405, $this->source); })()))) {
                echo "checked=\"\"";
            }
            // line 406
            echo "                ";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 406, $this->source); })())) {
                echo "disabled=\"\"";
            }
            // line 407
            echo "                type=\"radio\"
                aria-label=\"";
            // line 408
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 408), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 408, $this->source); })())), "html", null, true);
            echo "\"
                >
            <label for=\"";
            // line 410
            echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 410, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 410), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 410, $this->source); })())), "html", null, true);
            echo "</label>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        echo twig_spaceless($___internal_parse_8_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 417
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 418
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })())) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 422
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 422, $this->source); })())) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 434
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 436
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "vars", [], "any", false, false, false, 436), "attr", [], "any", false, false, false, 436), "data", [], "any", false, false, false, 436), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 436), [], "array", false, false, false, 436), "file_name", [], "array", false, false, false, 436), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 437
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 437, $this->source); })()), "vars", [], "any", false, false, false, 437), "attr", [], "any", false, false, false, 437), "data", [], "any", false, false, false, 437), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 437), [], "array", false, false, false, 437), "mime", [], "array", false, false, false, 437), "html", null, true);
            echo "</td>
              </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 449
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 450
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 453
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 455
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 455, $this->source); })()), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 455), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 456
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 459
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 460
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 463
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 464
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 467
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 468
        echo "    ";
        // line 469
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 470
            echo "      ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 470, $this->source); })())) {
                // line 471
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 471, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 471)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 471), "")) : ("")) . " required"))]);
                // line 472
                echo "      ";
            }
            // line 473
            echo "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 474
                echo "          ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 474, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 474)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 474), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 474, $this->source); })())))]);
                // line 475
                echo "      ";
            }
            // line 476
            echo "      ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 476, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 476, $this->source); })())))) {
                // line 477
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 477, $this->source); })()));
                // line 478
                echo "      ";
            }
            // line 479
            echo "
      ";
            // line 480
            if ((array_key_exists("material_design", $context) || twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "material_design", [], "any", true, true, false, 480))) {
                // line 481
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 482
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 482, $this->source); })()));
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
                // line 483
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 483, $this->source); })());
                // line 484
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 485
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 485, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 485, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 485, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 485, $this->source); })())))) : (""));
                // line 486
                echo "</label>
        </div>
      ";
            } else {
                // line 489
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 489, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        echo " form-check-label";
                    }
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((twig_length_filter($this->env, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 489, $this->source); })())) <= 0)) {
                    echo " class=\"form-check-label\"";
                }
                echo ">";
                // line 490
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 490, $this->source); })());
                // line 491
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 491, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 491, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 491, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 491, $this->source); })())))) : (""));
                // line 492
                echo "</label>
      ";
            }
            // line 494
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 499
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 500
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 500, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 500, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 500, $this->source); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), 'label');
        // line 502
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), 'widget');
        // line 503
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 503, $this->source); })()), 'errors');
        // line 504
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 507
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 508
        echo "<div class=\"form-group\">";
        // line 509
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), 'widget');
        // line 510
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 513
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_row"));

        // line 514
        $context["force_error"] = true;
        // line 515
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 518
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_row"));

        // line 519
        $context["force_error"] = true;
        // line 520
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 523
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_row"));

        // line 524
        $context["force_error"] = true;
        // line 525
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 528
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 529
        $context["force_error"] = true;
        // line 530
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 533
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 534
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 534, $this->source); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 535
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 535, $this->source); })()), 'widget');
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), 'errors');
        // line 537
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 540
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_row"));

        // line 541
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 541, $this->source); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 542
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), 'widget');
        // line 543
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), 'errors');
        // line 544
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 549
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 550
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 550, $this->source); })())) > 0)) {
            // line 551
            echo "<div class=\"alert alert-danger\">";
            // line 552
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 552, $this->source); })())) > 1)) {
                // line 553
                echo "<ul class=\"alert-text\">";
                // line 554
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 554, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 555
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 556
$context["error"], "messagePluralization", [], "any", false, false, false, 556))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 557
$context["error"], "messageTemplate", [], "any", false, false, false, 557), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 557), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 558
$context["error"], "messageTemplate", [], "any", false, false, false, 558), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 558), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 558), "form_error"))), "html", null, true);
                    // line 559
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                echo "</ul>";
            } else {
                // line 564
                echo "<div class=\"alert-text\">";
                // line 565
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 565, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 566
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 567
$context["error"], "messagePluralization", [], "any", false, false, false, 567))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 568
$context["error"], "messageTemplate", [], "any", false, false, false, 568), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 568), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 569
$context["error"], "messageTemplate", [], "any", false, false, false, 569), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 569), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 569), "form_error"))), "html", null, true);
                    // line 570
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 573
                echo "</div>";
            }
            // line 575
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 582
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 583
        echo "  ";
        ob_start();
        // line 584
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    ";
        // line 594
        if ((isset($context["isCheckSelectAll"]) || array_key_exists("isCheckSelectAll", $context) ? $context["isCheckSelectAll"] : (function () { throw new RuntimeError('Variable "isCheckSelectAll" does not exist.', 594, $this->source); })())) {
            // line 595
            echo "                      checked
                    ";
        }
        // line 597
        echo "                  >
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 606
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 607
            echo "          <tr>
            <td>
              ";
            // line 609
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 583
        echo twig_spaceless($___internal_parse_9_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 619
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 620
        echo "  ";
        ob_start();
        // line 621
        echo "    <div class=\"choice-table";
        if ((isset($context["headers_fixed"]) || array_key_exists("headers_fixed", $context) ? $context["headers_fixed"] : (function () { throw new RuntimeError('Variable "headers_fixed" does not exist.', 621, $this->source); })())) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 625
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 625, $this->source); })()), "html", null, true);
        echo "</th>
            ";
        // line 626
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 627
            echo "              <th class=\"text-center\">
                ";
            // line 628
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 628), "multiple", [], "any", false, false, false, 628) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 628), "name", [], "any", false, false, false, 628), (isset($context["headers_to_disable"]) || array_key_exists("headers_to_disable", $context) ? $context["headers_to_disable"] : (function () { throw new RuntimeError('Variable "headers_to_disable" does not exist.', 628, $this->source); })())))) {
                // line 629
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 631
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 631) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 634
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 634), "label", [], "any", false, false, false, 634), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 637
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 637), "label", [], "any", false, false, false, 637), "html", null, true);
                echo "
                ";
            }
            // line 639
            echo "              </th>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 644
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 644, $this->source); })()));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 645
            echo "          <tr>
            <td>
              ";
            // line 647
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 649
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 649, $this->source); })()));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 650
                echo "              <td class=\"text-center\">
                ";
                // line 651
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 651), $context["child_choice_name"], [], "array", true, true, false, 651)) {
                    // line 652
                    echo "                  ";
                    $context["entry_index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child_choice_entry_index_mapping"]) || array_key_exists("child_choice_entry_index_mapping", $context) ? $context["child_choice_entry_index_mapping"] : (function () { throw new RuntimeError('Variable "child_choice_entry_index_mapping" does not exist.', 652, $this->source); })()), $context["choice_value"], [], "array", false, false, false, 652), $context["child_choice_name"], [], "array", false, false, false, 652);
                    // line 653
                    echo "
                  ";
                    // line 654
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 654), "multiple", [], "any", false, false, false, 654)) {
                        // line 655
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 655, $this->source); })()), [], "array", false, false, false, 655), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 657
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 657, $this->source); })()), [], "array", false, false, false, 657), 'widget');
                        echo "
                  ";
                    }
                    // line 659
                    echo "                ";
                } else {
                    // line 660
                    echo "                  --
                ";
                }
                // line 662
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 664
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 620
        echo twig_spaceless($___internal_parse_10_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 672
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        // line 673
        $context["formClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 673), "attr", [], "any", false, true, false, 673), "class", [], "any", true, true, false, 673)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 673), "attr", [], "any", false, true, false, 673), "class", [], "any", false, false, false, 673), "")) : ("")) . twig_trim_filter(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 674
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 674, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 675, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 676
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 676), "attr", [], "any", false, true, false, 676), "class", [], "any", true, true, false, 676)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 676), "attr", [], "any", false, true, false, 676), "class", [], "any", false, false, false, 676), "")) : ("")) . " js-locale-input");
            // line 677
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 677, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 677), "label", [], "any", false, false, false, 677));
            // line 678
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 678, $this->source); })()), "id_lang", [], "any", false, false, false, 678) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 678), "name", [], "any", false, false, false, 678))) {
                // line 679
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 679, $this->source); })()) . " d-none");
                // line 680
                echo "      ";
            }
            // line 681
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 681, $this->source); })()), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 682
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 685
        echo "    ";
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 685, $this->source); })())) {
            // line 686
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 690
            if (array_key_exists("change_form_language_url", $context)) {
                // line 691
                echo "                  data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 691, $this->source); })()), "vars", [], "any", false, false, false, 691), "change_form_language_url", [], "any", false, false, false, 691), "html", null, true);
                echo "\"
                ";
            }
            // line 693
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 695
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 695, $this->source); })()), "vars", [], "any", false, false, false, 695), "id", [], "any", false, false, false, 695), "html", null, true);
            echo "_dropdown\"
        >
          ";
            // line 697
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 697, $this->source); })()), "vars", [], "any", false, false, false, 697), "default_locale", [], "any", false, false, false, 697), "iso_code", [], "any", false, false, false, 697), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 699
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 699, $this->source); })()), "vars", [], "any", false, false, false, 699), "id", [], "any", false, false, false, 699), "html", null, true);
            echo "_dropdown\">
          ";
            // line 700
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 700, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 701
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 701), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 701), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 703
            echo "        </div>
      </div>
    ";
        }
        // line 706
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 709
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        // line 710
        echo "  ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 710, $this->source); })()) == "single_text")) {
            // line 711
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 713
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 713, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 713)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 713), "")) : ("")) . " form-inline"))]);
            // line 714
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 714, $this->source); })()))) {
                // line 715
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 717
            echo "
    ";
            // line 718
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), "year", [], "any", false, false, false, 718), 'widget')) . "</div>");
            // line 719
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "month", [], "any", false, false, false, 719), 'widget')) . "</div>");
            // line 720
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 720, $this->source); })()), "day", [], "any", false, false, false, 720), 'widget')) . "</div>");
            // line 722
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 722, $this->source); })()), ["{{ year }}" =>             // line 723
(isset($context["yearWidget"]) || array_key_exists("yearWidget", $context) ? $context["yearWidget"] : (function () { throw new RuntimeError('Variable "yearWidget" does not exist.', 723, $this->source); })()), "{{ month }}" =>             // line 724
(isset($context["monthWidget"]) || array_key_exists("monthWidget", $context) ? $context["monthWidget"] : (function () { throw new RuntimeError('Variable "monthWidget" does not exist.', 724, $this->source); })()), "{{ day }}" =>             // line 725
(isset($context["dayWidget"]) || array_key_exists("dayWidget", $context) ? $context["dayWidget"] : (function () { throw new RuntimeError('Variable "dayWidget" does not exist.', 725, $this->source); })())]);
            // line 728
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 728, $this->source); })()))) {
                // line 729
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 734
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 735
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 741
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 741, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 742
($context["attr"] ?? null), "class", [], "any", true, true, false, 742)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 742), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 747
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 747) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 747, $this->source); })()), "disabled", [], "any", false, false, false, 747))) {
            // line 748
            echo "      ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 748, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source,             // line 749
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 749, $this->source); })()), "class", [], "any", false, false, false, 749) . " disabled")]);
            // line 751
            echo "    ";
        }
        // line 752
        echo "
    ";
        // line 753
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 753, $this->source); })())]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 755
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 755, $this->source); })()), "vars", [], "any", false, false, false, 755), "id", [], "any", false, false, false, 755), "html", null, true);
        echo "\">
      ";
        // line 756
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "vars", [], "any", false, false, false, 756), "attr", [], "any", false, false, false, 756);
        // line 757
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 757)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 757, $this->source); })()), "placeholder", [], "any", false, false, false, 757)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 762
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        // line 763
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 763, $this->source); })()), "vars", [], "any", false, false, false, 763), "attr", [], "any", false, false, false, 763), "is_allowed_to_display", [], "any", false, false, false, 763)) {
            // line 764
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 766
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 766, $this->source); })()), "checkbox")) : ("checkbox"));
            // line 767
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 769
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 769, $this->source); })()), "html", null, true);
            echo "\"
          ";
            // line 770
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 771
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 771, $this->source); })()), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 779
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        // line 780
        echo "  <div class=\"input-group\">";
        // line 781
        $this->displayBlock("form_widget", $context, $blocks);
        // line 782
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 785
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 785, $this->source); })()), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 786
        echo twig_escape_filter($this->env, (isset($context["generated_value_length"]) || array_key_exists("generated_value_length", $context) ? $context["generated_value_length"] : (function () { throw new RuntimeError('Variable "generated_value_length" does not exist.', 786, $this->source); })()), "html", null, true);
        echo "\"
      >
        ";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 794
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        // line 795
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 795, $this->source); })()), ["data-recommended-length-counter" => (("#" .         // line 796
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 796, $this->source); })())) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 800
        if (((isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 800, $this->source); })()) == "textarea")) {
            // line 801
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 803
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 805
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 807
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 807, $this->source); })()), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 810
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 811
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 811, $this->source); })()))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 813
(isset($context["recommended_length"]) || array_key_exists("recommended_length", $context) ? $context["recommended_length"] : (function () { throw new RuntimeError('Variable "recommended_length" does not exist.', 813, $this->source); })())), "[/2]" => "</span>"]);
        // line 815
        echo "
    </em>
  </small>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 820
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        // line 821
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), "min_field", [], "array", false, false, false, 821), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 822
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 822, $this->source); })()), "max_field", [], "array", false, false, false, 822), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 825
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        // line 826
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 826, $this->source); })()), "min_field", [], "array", false, false, false, 826), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 827
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 827, $this->source); })()), "max_field", [], "array", false, false, false, 827), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 830
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 831
        echo "  ";
        if ((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 831, $this->source); })())) {
            // line 832
            echo "    <small class=\"form-text\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 832, $this->source); })()), "html", null, true);
            echo "</small>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 836
    public function block_form_hint($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_hint"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_hint"));

        // line 837
        echo "  ";
        if ((isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 837, $this->source); })())) {
            // line 838
            echo "    <div class=\"hint-box\">
      <div class=\"alert alert-info\">";
            // line 839
            echo (isset($context["hint"]) || array_key_exists("hint", $context) ? $context["hint"] : (function () { throw new RuntimeError('Variable "hint" does not exist.', 839, $this->source); })());
            echo "</div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 844
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        // line 845
        echo "  ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 845, $this->source); })()), "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 845)->display(twig_array_merge($context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 845, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 848
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 849
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 849, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 849, $this->source); })()), "vars", [], "any", false, false, false, 849), "id", [], "any", false, false, false, 849)], "Admin.Global")]);
        // line 850
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 850, $this->source); })()))) {
            // line 851
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 851, $this->source); })()), ["list" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 851, $this->source); })()) . "_datalist")]);
        }
        // line 853
        echo "
  ";
        // line 854
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 854, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 854, $this->source); })())]);
        echo "

  ";
        // line 856
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 856, $this->source); })()))) {
            // line 857
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 857, $this->source); })()) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 858
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 858, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 859
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 861
            echo "    </datalist>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3121 => 861,  3112 => 859,  3108 => 858,  3103 => 857,  3101 => 856,  3096 => 854,  3093 => 853,  3090 => 851,  3088 => 850,  3086 => 849,  3076 => 848,  3065 => 845,  3055 => 844,  3041 => 839,  3038 => 838,  3035 => 837,  3025 => 836,  3011 => 832,  3008 => 831,  2998 => 830,  2986 => 827,  2981 => 826,  2971 => 825,  2959 => 822,  2954 => 821,  2944 => 820,  2931 => 815,  2929 => 813,  2928 => 811,  2927 => 810,  2921 => 807,  2917 => 805,  2914 => 803,  2911 => 801,  2909 => 800,  2907 => 796,  2905 => 795,  2895 => 794,  2880 => 788,  2875 => 786,  2871 => 785,  2866 => 782,  2864 => 781,  2862 => 780,  2852 => 779,  2835 => 771,  2831 => 770,  2827 => 769,  2823 => 767,  2821 => 766,  2817 => 764,  2814 => 763,  2804 => 762,  2789 => 757,  2787 => 756,  2783 => 755,  2778 => 753,  2775 => 752,  2772 => 751,  2770 => 749,  2768 => 748,  2766 => 747,  2764 => 742,  2763 => 741,  2756 => 737,  2752 => 735,  2742 => 734,  2730 => 729,  2728 => 728,  2726 => 725,  2725 => 724,  2724 => 723,  2723 => 722,  2720 => 720,  2717 => 719,  2715 => 718,  2712 => 717,  2707 => 715,  2705 => 714,  2703 => 713,  2700 => 711,  2697 => 710,  2687 => 709,  2677 => 706,  2672 => 703,  2661 => 701,  2657 => 700,  2653 => 699,  2648 => 697,  2643 => 695,  2639 => 693,  2633 => 691,  2631 => 690,  2625 => 686,  2622 => 685,  2613 => 682,  2608 => 681,  2605 => 680,  2602 => 679,  2599 => 678,  2596 => 677,  2593 => 676,  2589 => 675,  2584 => 674,  2582 => 673,  2572 => 672,  2562 => 620,  2556 => 666,  2549 => 664,  2542 => 662,  2538 => 660,  2535 => 659,  2529 => 657,  2523 => 655,  2521 => 654,  2518 => 653,  2515 => 652,  2513 => 651,  2510 => 650,  2506 => 649,  2501 => 647,  2497 => 645,  2493 => 644,  2488 => 641,  2473 => 639,  2467 => 637,  2461 => 634,  2455 => 631,  2451 => 629,  2449 => 628,  2446 => 627,  2429 => 626,  2425 => 625,  2415 => 621,  2412 => 620,  2402 => 619,  2392 => 583,  2386 => 613,  2376 => 609,  2372 => 607,  2368 => 606,  2358 => 599,  2354 => 597,  2350 => 595,  2348 => 594,  2336 => 584,  2333 => 583,  2323 => 582,  2312 => 575,  2309 => 573,  2302 => 570,  2300 => 569,  2299 => 568,  2298 => 567,  2296 => 566,  2292 => 565,  2290 => 564,  2287 => 562,  2280 => 559,  2278 => 558,  2277 => 557,  2276 => 556,  2274 => 555,  2270 => 554,  2268 => 553,  2266 => 552,  2264 => 551,  2262 => 550,  2252 => 549,  2242 => 544,  2240 => 543,  2238 => 542,  2232 => 541,  2222 => 540,  2212 => 537,  2210 => 536,  2208 => 535,  2202 => 534,  2192 => 533,  2182 => 530,  2180 => 529,  2170 => 528,  2160 => 525,  2158 => 524,  2148 => 523,  2138 => 520,  2136 => 519,  2126 => 518,  2116 => 515,  2114 => 514,  2104 => 513,  2094 => 510,  2092 => 509,  2090 => 508,  2080 => 507,  2070 => 504,  2068 => 503,  2066 => 502,  2064 => 501,  2058 => 500,  2048 => 499,  2037 => 494,  2033 => 492,  2031 => 491,  2029 => 490,  2008 => 489,  2003 => 486,  2001 => 485,  1999 => 484,  1997 => 483,  1983 => 482,  1980 => 481,  1978 => 480,  1975 => 479,  1972 => 478,  1969 => 477,  1966 => 476,  1963 => 475,  1960 => 474,  1957 => 473,  1954 => 472,  1951 => 471,  1948 => 470,  1945 => 469,  1943 => 468,  1933 => 467,  1923 => 464,  1913 => 463,  1903 => 460,  1893 => 459,  1883 => 456,  1881 => 455,  1871 => 453,  1861 => 450,  1851 => 449,  1836 => 440,  1819 => 437,  1815 => 436,  1811 => 435,  1808 => 434,  1791 => 433,  1785 => 429,  1781 => 428,  1777 => 427,  1769 => 422,  1763 => 419,  1758 => 418,  1748 => 417,  1738 => 397,  1733 => 412,  1715 => 410,  1710 => 408,  1707 => 407,  1702 => 406,  1698 => 405,  1694 => 404,  1690 => 403,  1686 => 402,  1681 => 401,  1678 => 400,  1661 => 399,  1658 => 398,  1655 => 397,  1645 => 396,  1635 => 371,  1632 => 393,  1625 => 389,  1619 => 386,  1615 => 385,  1610 => 383,  1606 => 381,  1604 => 380,  1599 => 378,  1593 => 375,  1589 => 374,  1585 => 372,  1582 => 371,  1572 => 370,  1562 => 362,  1550 => 365,  1547 => 364,  1544 => 363,  1541 => 362,  1531 => 361,  1521 => 353,  1516 => 357,  1512 => 356,  1508 => 355,  1503 => 354,  1500 => 353,  1490 => 352,  1480 => 338,  1461 => 342,  1458 => 341,  1456 => 340,  1453 => 339,  1450 => 338,  1440 => 337,  1430 => 334,  1425 => 331,  1416 => 328,  1411 => 326,  1408 => 325,  1404 => 324,  1400 => 323,  1394 => 320,  1389 => 318,  1381 => 312,  1379 => 311,  1376 => 310,  1367 => 307,  1363 => 306,  1360 => 305,  1357 => 304,  1354 => 303,  1352 => 302,  1349 => 301,  1346 => 300,  1343 => 299,  1339 => 298,  1334 => 296,  1324 => 295,  1314 => 292,  1309 => 289,  1298 => 287,  1294 => 286,  1290 => 285,  1284 => 282,  1279 => 280,  1271 => 274,  1269 => 273,  1266 => 272,  1258 => 270,  1255 => 269,  1253 => 268,  1250 => 267,  1247 => 266,  1244 => 265,  1242 => 264,  1239 => 263,  1236 => 262,  1233 => 261,  1229 => 260,  1224 => 258,  1214 => 257,  1204 => 254,  1201 => 252,  1199 => 251,  1189 => 250,  1177 => 246,  1162 => 244,  1160 => 243,  1158 => 242,  1154 => 241,  1133 => 240,  1116 => 239,  1112 => 237,  1108 => 235,  1098 => 231,  1088 => 230,  1085 => 229,  1081 => 228,  1078 => 227,  1076 => 226,  1072 => 225,  1067 => 224,  1057 => 223,  1047 => 220,  1043 => 218,  1026 => 216,  1023 => 215,  1006 => 214,  999 => 213,  996 => 212,  992 => 209,  986 => 207,  984 => 206,  980 => 205,  966 => 204,  962 => 202,  958 => 199,  952 => 197,  949 => 196,  944 => 194,  939 => 192,  937 => 191,  927 => 190,  923 => 188,  920 => 187,  918 => 186,  911 => 185,  901 => 184,  890 => 180,  873 => 178,  856 => 177,  853 => 176,  847 => 174,  837 => 173,  826 => 169,  824 => 168,  822 => 167,  819 => 165,  817 => 164,  815 => 163,  805 => 162,  794 => 158,  792 => 157,  790 => 156,  787 => 154,  785 => 153,  783 => 152,  773 => 151,  762 => 147,  756 => 144,  755 => 143,  754 => 142,  750 => 141,  746 => 140,  743 => 138,  737 => 135,  736 => 134,  735 => 133,  731 => 132,  729 => 131,  727 => 130,  717 => 129,  707 => 126,  705 => 125,  703 => 124,  693 => 123,  681 => 118,  678 => 117,  670 => 116,  665 => 114,  663 => 113,  661 => 112,  658 => 110,  656 => 109,  646 => 108,  634 => 103,  632 => 102,  630 => 100,  629 => 99,  628 => 98,  627 => 97,  622 => 95,  620 => 94,  618 => 93,  615 => 91,  613 => 90,  603 => 89,  592 => 85,  590 => 84,  588 => 83,  586 => 82,  584 => 81,  580 => 80,  578 => 79,  575 => 77,  573 => 76,  563 => 75,  550 => 69,  548 => 68,  546 => 67,  536 => 66,  526 => 63,  520 => 60,  517 => 59,  515 => 58,  513 => 57,  507 => 54,  504 => 53,  501 => 52,  499 => 51,  496 => 50,  486 => 49,  476 => 46,  474 => 45,  464 => 44,  454 => 41,  452 => 40,  442 => 39,  432 => 36,  429 => 34,  427 => 33,  417 => 32,  407 => 848,  404 => 847,  402 => 844,  399 => 843,  397 => 836,  394 => 835,  392 => 830,  389 => 829,  387 => 825,  384 => 824,  382 => 820,  379 => 819,  377 => 794,  374 => 793,  372 => 779,  369 => 778,  367 => 762,  364 => 761,  362 => 734,  359 => 733,  357 => 709,  354 => 708,  352 => 672,  349 => 671,  347 => 619,  344 => 618,  342 => 582,  339 => 581,  335 => 578,  333 => 549,  330 => 548,  327 => 546,  325 => 540,  322 => 539,  320 => 533,  317 => 532,  315 => 528,  312 => 527,  310 => 523,  307 => 522,  305 => 518,  302 => 517,  300 => 513,  297 => 512,  295 => 507,  292 => 506,  290 => 499,  287 => 498,  284 => 496,  282 => 467,  279 => 466,  277 => 463,  274 => 462,  272 => 459,  269 => 458,  267 => 453,  264 => 452,  262 => 449,  259 => 448,  256 => 446,  254 => 417,  251 => 416,  249 => 396,  246 => 395,  244 => 370,  241 => 369,  239 => 361,  236 => 360,  234 => 352,  231 => 351,  229 => 337,  226 => 336,  224 => 295,  221 => 294,  219 => 257,  216 => 256,  214 => 250,  211 => 249,  209 => 223,  206 => 222,  204 => 184,  201 => 183,  199 => 173,  196 => 172,  194 => 162,  191 => 161,  189 => 151,  186 => 150,  184 => 129,  181 => 128,  179 => 123,  176 => 122,  174 => 108,  171 => 107,  169 => 89,  166 => 88,  164 => 75,  161 => 74,  159 => 66,  156 => 65,  154 => 49,  151 => 48,  149 => 44,  146 => 43,  144 => 39,  141 => 38,  139 => 32,  136 => 31,  133 => 29,  51 => 28,  44 => 27,  37 => 26,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% use '@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/material.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <div class=\"input-group-append\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
    {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio form-check form-check-radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li{% if defaultHidden is defined and defaultHidden is same as(true) %} class=\"more\"{% endif %}>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\"{% if checked %} checked=\"checked\"{% endif %} class=\"category\">
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\"{% if checked %} checked=\"checked\"{% endif %} class=\"category\"{% if required %} required{% endif %}>
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul{% if defaultHidden is defined and defaultHidden is same as(true) %} style=\"display: none;\"{% endif %}>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-pills\">
            {% for translationsFields in form %}
                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields tab-content\">
            {% for translationsFields in form %}
                <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                    {{- block('form_help') -}}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
    {{ form_errors(form) }}
    <div class=\"input-group locale-input-group js-locale-input-group\">
        {% for translateField in form %}
            {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
            {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

            {% if default_locale.id_lang != translateField.vars.name %}
                {% set classes = classes ~ ' d-none' %}
            {% endif %}

            {% set attr = translateField.vars.attr %}

            {{ form_widget(translateField, {attr: {'class': classes|trim}}) }}
        {% endfor %}

        {% if not hide_locales %}
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"{{ form.vars.id }}\"
            >
                {{ form.vars.default_locale.iso_code }}
            </button>

            <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
                {% for locale in locales %}
                    <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{%- endblock translate_text_widget %}

{% block translate_textarea_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for textarea in form %}
      {% set classes = textarea.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ textarea.vars.label %}

      {% if default_locale.id_lang != textarea.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      <div class=\"{{ classes }}\">
        {{ form_widget(textarea, {attr: {'class': classes|trim}}) }}
      </div>
    {% endfor %}

    {% if show_locale_select %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"{{ locale.iso_code }}\"
            >
              {{ locale.name }}
            </span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_textarea_widget %}

{% block date_picker_widget %}
  {% apply spaceless %}
    {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker form-control')|trim)}) %}
    {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"{{ date_format }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  {% endapply %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% apply spaceless %}
    {{ form_widget(form.from) }}
    {{ form_errors(form.from) }}
    {{ form_widget(form.to) }}
    {{ form_errors(form.to) }}
  {% endapply %}
{% endblock date_range_widget %}

{% block color_picker_widget %}
  {% apply spaceless %}
    {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' form-control colorpicker')|trim)}) %}
    <div class=\"input-group colorpicker\">
      <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    </div>
  {% endapply %}
{% endblock color_picker_widget %}

{% block search_and_reset_widget %}
    {% apply spaceless %}
        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block\"
                title=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\"
                name=\"{{ full_name }}[search]\"
        >
          <i class=\"material-icons\">search</i>
          {{ 'Search'|trans({}, 'Admin.Actions') }}
        </button>
      {% if show_reset_button %}
          <div class=\"js-grid-reset-button\">
            <button type=\"reset\"
                    name=\"{{ full_name }}[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                    data-url=\"{{ reset_url }}\"
                    data-redirect=\"{{ redirect_url }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ 'Reset'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
      {% endif %}
    {% endapply %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
    {% apply spaceless %}
    <span class=\"ps-switch\">
        {% for choice in choices %}
            {% set inputId = id ~'_' ~ choice.value %}
            <input id=\"{{inputId}}\"
                {{ block('attributes') }}
                name=\"{{ full_name }}\"
                value=\"{{ choice.value }}\"
                {% if choice is selectedchoice(value) %}checked=\"\"{% endif %}
                {% if disabled %}disabled=\"\"{% endif %}
                type=\"radio\"
                aria-label=\"{{ choice.label|trans({}, choice_translation_domain) }}\"
                >
            <label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
    {% endapply %}
{% endblock switch_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">{{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
      {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
      {% endif %}
      {% if parent_label_class is defined %}
          {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
      {% endif %}
      {% if label is not same as(false) and label is empty %}
          {% set label = name|humanize %}
      {% endif %}

      {% if material_design is defined or attr.material_design is defined %}
        <div class=\"md-checkbox md-checkbox-inline\">
          <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
          {{- widget|raw -}}
          <i class=\"md-checkbox-control\"></i>
          {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
          </label>
        </div>
      {% else %}
      <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}{% if attrname is same as(\"class\") %} form-check-label{% endif %}\"{% endfor %}{% if label_attr|length <= 0 %} class=\"form-check-label\"{% endif %}>
        {{- widget|raw -}}
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
      </label>
      {% endif %}
    {% endif %}
{% endblock checkbox_radio_label %}

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
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}


{# Material design widgets #}

{% block material_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input
                    type=\"checkbox\"
                    class=\"js-choice-table-select-all\"
                    {% if isCheckSelectAll %}
                      checked
                    {% endif %}
                  >
                  <i class=\"md-checkbox-control\"></i>
                  {{ 'Select all'|trans({}, 'Admin.Actions') }}
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {'material_design': true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table{% if headers_fixed %}-headers-fixed{% endif %} table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ label }}</th>
            {% for child_choice in form %}
              <th class=\"text-center\">
                {% if child_choice.vars.multiple and child_choice.vars.name not in headers_to_disable %}
                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"{{ loop.index + 1 }}\"
                     data-column-checked=\"false\"
                  >
                    {{ child_choice.vars.label }}
                  </a>
                {% else %}
                  {{ child_choice.vars.label }}
                {% endif %}
              </th>
            {% endfor %}
          </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {'material_design': true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_multiple_choice_table_widget %}

{% block translatable_widget -%}
  {% set formClass = form.vars.attr.class|default('') ~ ' input-group locale-input-group js-locale-input-group d-flex'|trim %}
  <div class=\"{{ formClass }}\">
    {% for translateField in form %}
      {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}
      {% if default_locale.id_lang != translateField.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}
      <div class=\"{{ classes }}\" style=\"flex-grow: 1;\">
        {{ form_widget(translateField) }}
      </div>
    {% endfor %}
    {% if not hide_locales %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                {% if change_form_language_url is defined %}
                  data-change-language-url=\"{{ form.vars.change_form_language_url }}\"
                {% endif %}
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}_dropdown\"
        >
          {{ form.vars.default_locale.iso_code }}
        </button>
        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}_dropdown\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translatable_widget %}

{% block birthday_widget %}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}

    {% set yearWidget = '<div class=\"col pl-0\">' ~ form_widget(form.year) ~ '</div>'|raw %}
    {% set monthWidget = '<div class=\"col\">' ~ form_widget(form.month) ~ '</div>'|raw %}
    {% set dayWidget = '<div class=\"col pr-0\">' ~ form_widget(form.day) ~ '</div>'|raw %}

    {{- date_pattern|replace({
      '{{ year }}': yearWidget,
      '{{ month }}': monthWidget,
      '{{ day }}': dayWidget,
    })|raw -}}

    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{% endblock birthday_widget %}

{% block file_widget %}
  <style>
    .custom-file-label:after {
      content: \"{{ \"Browse\"|trans({}, 'Admin.Actions')  }}\";
    }
  </style>
  <div class=\"custom-file\">
    {% set attr = attr|merge({
      class: (attr.class|default('') ~ ' custom-file-input')|trim,
      'data-multiple-files-text': '%count% file(s)'|trans({}, 'Admin.Global'),
      'data-locale': get_context_iso_code()
    }) -%}

    {% if attr.disabled is defined and attr.disabled %}
      {% set attr = attr|merge({
        class: attr.class ~ ' disabled'
      }) %}
    {% endif %}

    {{ form_widget(form, {'attr': attr}) }}

    <label class=\"custom-file-label\" for=\"{{ form.vars.id }}\">
      {% set attributes = form.vars.attr %}
      {{ attributes.placeholder is defined ?  attributes.placeholder : 'Choose file(s)'|trans({}, 'Admin.Actions') }}
    </label>
  </div>
{% endblock file_widget %}

{% block shop_restriction_checkbox_widget %}
  {% if form.vars.attr.is_allowed_to_display %}
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        {% set type = type|default('checkbox') %}
        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"{{ type }}\"
          {{ block('widget_attributes') }}
          value=\"{{ value }}\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  {% endif %}
{% endblock %}

{% block generatable_text_widget %}
  <div class=\"input-group\">
    {{- block('form_widget') -}}
    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"{{ id }}\"
              data-generated-value-length=\"{{ generated_value_length }}\"
      >
        {{ 'Generate'|trans({}, 'Admin.Actions') }}
      </button>
   </span>
  </div>
{% endblock generatable_text_widget %}

{% block text_with_recommended_length_widget %}
  {% set attr = attr|merge({
    'data-recommended-length-counter': '#' ~ id ~ '_recommended_length_counter',
    'class': 'js-recommended-length-input'
  }) -%}

  {% if input_type == 'textarea' %}
    {{- block('textarea_widget') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}

  <small class=\"form-text text-muted text-right\"
         id=\"{{ id }}_recommended_length_counter\"
  >
    <em>
      {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"js-current-length\">' ~ value|length,
        '[/1]': '</span>',
        '[2]': '<span>' ~ recommended_length,
        '[/2]': '</span>',
      })|raw }}
    </em>
  </small>
{% endblock text_with_recommended_length_widget %}

{% block integer_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{% block number_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{% block form_help %}
  {% if help %}
    <small class=\"form-text\">{{ help }}</small>
  {% endif %}
{% endblock form_help %}

{% block form_hint %}
  {% if hint %}
    <div class=\"hint-box\">
      <div class=\"alert alert-info\">{{ hint|raw }}</div>
    </div>
  {% endif %}
{% endblock form_hint %}

{% block custom_content_widget %}
  {% include template with data %}
{% endblock %}

{% block text_widget %}
  {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
  {% if data_list is not null %}
    {%- set attr = attr|merge({'list': id ~ '_datalist'}) -%}
  {% endif %}

  {{ form_widget(form, {'attr': attr}) }}

  {% if data_list is not null %}
    <datalist id=\"{{ id ~ '_datalist' }}\">
      {% for item in data_list %}
        <option value=\"{{ item }}\"></option>
      {% endfor%}
    </datalist>
  {% endif %}
{% endblock text_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/opt/lampp/htdocs/tune4style/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
