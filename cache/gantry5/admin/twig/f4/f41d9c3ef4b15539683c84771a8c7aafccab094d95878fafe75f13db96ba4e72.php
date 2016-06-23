<?php

/* forms/field.html.twig */
class __TwigTemplate_bf6b05fcb0fc8408d527acb4dec79a5eae9b705db0c9d34c8598abbe6a39b999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array();
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 9
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array();
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "footer";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 10
        echo "    ";
        $this->displayBlock('javascript_footer', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 14
        $context["name"] = (((null === (isset($context["name"]) ? $context["name"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) : ((isset($context["name"]) ? $context["name"] : null)));
        // line 15
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 16
        $context["default_value"] = (((null === (isset($context["default_value"]) ? $context["default_value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["default_value"]) ? $context["default_value"] : null)));
        // line 18
        $this->displayBlock('field', $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    // line 10
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    // line 18
    public function block_field($context, array $blocks = array())
    {
        // line 19
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "isset", array()) ||  !(null === (isset($context["value"]) ? $context["value"] : null)))) {
            // line 20
            echo "    <div class=\"settings-param ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"), "html", null, true);
            echo "\">
        ";
            // line 21
            if (((((isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set")) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "input.hidden"))) {
                // line 22
                echo "            ";
                $this->loadTemplate("forms/override.html.twig", "forms/field.html.twig", 22)->display(array_merge($context, array("scope" => (isset($context["scope"]) ? $context["scope"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "field" => (isset($context["field"]) ? $context["field"] : null))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "        ";
            $this->displayBlock('contents', $context, $blocks);
            // line 64
            echo "    </div>
";
        }
    }

    // line 24
    public function block_contents($context, array $blocks = array())
    {
        // line 25
        echo "            <span class=\"settings-param-title float-left\">
                ";
        // line 26
        $this->displayBlock('label', $context, $blocks);
        // line 36
        echo "            </span>
            <div class=\"settings-param-field\">
                ";
        // line 38
        $this->displayBlock('group', $context, $blocks);
        // line 62
        echo "            </div>
        ";
    }

    // line 26
    public function block_label($context, array $blocks = array())
    {
        // line 27
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 28
            echo "                        <span data-tip=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array());
            echo "\" data-tip-place=\"top-right\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()), "html", null, true);
            echo "\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
            echo "
                        </span>
                    ";
        } else {
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
            echo "
                    ";
        }
        // line 34
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 38
    public function block_group($context, array $blocks = array())
    {
        // line 39
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 61
        echo "                ";
    }

    // line 39
    public function block_input($context, array $blocks = array())
    {
        // line 40
        echo "                        <input
                                ";
        // line 42
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
                                value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
        echo "\"
                                ";
        // line 45
        echo "                                ";
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 53
        echo "                                />

                        ";
        // line 55
        $this->displayBlock('reset_field', $context, $blocks);
        // line 60
        echo "                    ";
    }

    // line 45
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 46
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "html", null, true);
            echo "\" ";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), "html", null, true);
            echo "\" ";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()), "html", null, true);
            echo "\" ";
        }
        // line 49
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "html", null, true);
            echo "\" ";
        }
        // line 50
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "override_target", array(), "any", true, true)) {
            echo " data-override-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "override_target", array()), "html_attr");
            echo "\" ";
        }
        // line 51
        echo "                                    aria-label=\"";
        echo twig_escape_filter($this->env, trim(twig_title_string_filter($this->env, twig_replace_filter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), array("." => " ")))), "html", null, true);
        echo "\"
                                ";
    }

    // line 55
    public function block_reset_field($context, array $blocks = array())
    {
        // line 56
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array(), "any", true, true) || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array()), array(0 => "on", 1 => "true", 2 => 1)))) {
            // line 57
            echo "                                <span class=\"g-reset-field\" data-g-reset-field=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"><i class=\"fa  fa-fw fa-times-circle\"></i></span>
                            ";
        }
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 57,  265 => 56,  262 => 55,  255 => 51,  248 => 50,  241 => 49,  234 => 48,  227 => 47,  220 => 46,  217 => 45,  213 => 60,  211 => 55,  207 => 53,  204 => 45,  200 => 43,  195 => 42,  192 => 40,  189 => 39,  185 => 61,  182 => 39,  179 => 38,  172 => 34,  166 => 32,  160 => 29,  151 => 28,  148 => 27,  145 => 26,  140 => 62,  138 => 38,  134 => 36,  132 => 26,  129 => 25,  126 => 24,  120 => 64,  117 => 24,  114 => 23,  111 => 22,  109 => 21,  104 => 20,  102 => 19,  99 => 18,  95 => 11,  92 => 10,  88 => 6,  85 => 5,  81 => 3,  78 => 2,  74 => 18,  72 => 16,  70 => 15,  68 => 14,  63 => 10,  51 => 9,  47 => 5,  44 => 4,  41 => 2,  29 => 1,);
    }
}
/* {% assets %}*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*     {% endblock %}*/
/* {% endassets -%}*/
/* */
/* {% assets in 'footer' %}*/
/*     {% block javascript_footer %}*/
/*     {% endblock %}*/
/* {% endassets -%}*/
/* */
/* {% set name = (name is null ? field.name : name) -%}*/
/* {% set value = (value is null ? field.default : value) -%}*/
/* {% set default_value = (default_value is null ? field.default : default_value) -%}*/
/* */
/* {% block field %}*/
/* {% if not field.isset or value is not null %}*/
/*     <div class="settings-param {{ field.type|replace('.', '-') }}">*/
/*         {% if overrideable and (field.overridable is not defined or field.overridable == true) and field.type != 'container.set' and field.type != 'input.hidden' %}*/
/*             {% include 'forms/override.html.twig' with {'scope': scope, 'name': name, 'field': field} %}*/
/*         {% endif %}*/
/*         {% block contents %}*/
/*             <span class="settings-param-title float-left">*/
/*                 {% block label %}*/
/*                     {% if field.description %}*/
/*                         <span data-tip="{{ field.description|raw }}" data-tip-place="top-right" aria-label="{{ field.description }}" data-title="{{ field.description }}">*/
/*                             {{ field.label }}*/
/*                         </span>*/
/*                     {% else %}*/
/*                         {{ field.label }}*/
/*                     {% endif %}*/
/*                     {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*                 {% endblock %}*/
/*             </span>*/
/*             <div class="settings-param-field">*/
/*                 {% block group %}*/
/*                     {% block input %}*/
/*                         <input*/
/*                                 {# required attribute structures #}*/
/*                                 name="{{ (scope ~ name)|fieldName }}"*/
/*                                 value="{{ value|join(', ') }}"*/
/*                                 {# global attribute structures #}*/
/*                                 {% block global_attributes %}*/
/*                                     {% if field.class is defined %} class="{{ field.class }}" {% endif %}*/
/*                                     {% if field.id is defined %} id="{{ field.id }}" {% endif %}*/
/*                                     {% if field.style is defined %} style="{{ field.style }}" {% endif %}*/
/*                                     {% if field.title is defined %} title="{{ field.title }}" {% endif %}*/
/*                                     {% if field.override_target is defined %} data-override-target="{{ field.override_target|e('html_attr') }}" {% endif %}*/
/*                                     aria-label="{{ (scope ~ name)|replace({'.': ' '})|title|trim }}"*/
/*                                 {% endblock %}*/
/*                                 />*/
/* */
/*                         {% block reset_field -%}*/
/*                             {% if field.reset_field is not defined or field.reset_field in ['on', 'true', 1] %}*/
/*                                 <span class="g-reset-field" data-g-reset-field="{{ (scope ~ name)|fieldName }}"><i class="fa  fa-fw fa-times-circle"></i></span>*/
/*                             {% endif %}*/
/*                         {%- endblock %}*/
/*                     {% endblock %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
