<?php

/* @gantry-admin/forms/fields/gantry/particle.html.twig */
class __TwigTemplate_269c02b86bce385245b5ee989daea267e3ac4a07f597651286f602297abd27e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "@gantry-admin/forms/fields/gantry/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"settings-block\"><div class=\"settings-param-field\"><div class=\"input-group\">
    ";
        // line 5
        $context["label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", array()), $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PICK_PARTICLE"))) : ($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PICK_PARTICLE")));
        // line 6
        echo "    ";
        $context["alt_label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", array()), $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_PARTICLE"))) : ($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_PARTICLE")));
        // line 7
        echo "    <span class=\"g-instancepicker-title\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "</span><button class=\"button\" data-g-instancepicker=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("type" => "particle", "field" => twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)))))), "html_attr");
        echo "\" data-g-instancepicker-text=\"";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "\" data-g-instancepicker-alttext=\"";
        echo twig_escape_filter($this->env, (isset($context["alt_label"]) ? $context["alt_label"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["alt_label"]) ? $context["alt_label"] : null)) : ((isset($context["label"]) ? $context["label"] : null))), "html", null, true);
        echo "</button>
    <input
            type=\"hidden\"
            name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"
            value=\"";
        // line 11
        echo (((isset($context["value"]) ? $context["value"] : null)) ? (twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null), twig_constant("JSON_UNESCAPED_UNICODE")))) : (""));
        echo "\"
            ";
        // line 13
        echo "            ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
            ";
        // line 15
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 16
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 17
        echo "            />

    <span class=\"g-reset-field\" data-g-reset-field=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"><i class=\"fa  fa-fw fa-times-circle\"></i></span>
    </div></div></div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/forms/fields/gantry/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 17,  71 => 16,  66 => 15,  61 => 13,  57 => 11,  53 => 10,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends default ? "partials/field.html.twig" : 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {% block input %}*/
/*     <div class="settings-block"><div class="settings-param-field"><div class="input-group">*/
/*     {% set label = field.picker_label|default('GANTRY5_PLATFORM_PICK_PARTICLE'|trans) %}*/
/*     {% set alt_label = field.picker_label_alt|default('GANTRY5_PLATFORM_EDIT_PARTICLE'|trans) %}*/
/*     <span class="g-instancepicker-title">{{ value.title|default('') }}</span><button class="button" data-g-instancepicker="{{ { type: 'particle', field: (scope ~ name)|fieldName|e }|json_encode|e('html_attr') }}" data-g-instancepicker-text="{{ label }}" data-g-instancepicker-alttext="{{ alt_label }}">{{ value ? alt_label : label }}</button>*/
/*     <input*/
/*             type="hidden"*/
/*             name="{{ (scope ~ name)|fieldName|e }}"*/
/*             value="{{ value ? value|json_encode(constant('JSON_UNESCAPED_UNICODE'))|e }}"*/
/*             {# global attribute structures #}*/
/*             {{ block('global_attributes') }}*/
/*             {# non-gloval attribute structures #}*/
/*             {% if field.disabled in ['on', 'true', 1] %}disabled="disabled"{% endif %}*/
/*             {% if field.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*             />*/
/* */
/*     <span class="g-reset-field" data-g-reset-field="{{ (scope ~ name)|fieldName|e }}"><i class="fa  fa-fw fa-times-circle"></i></span>*/
/*     </div></div></div>*/
/* {% endblock %}*/
/* */
