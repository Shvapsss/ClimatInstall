<?php

/* partials/configuration-selector.html.twig */
class __TwigTemplate_8955314f613b499b76d3d52dcc7092a79aeae7d28ef3a301d7800cb6fe93a020 extends Twig_Template
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
        // line 1
        echo "<li class=\"config-select-wrap\">
    ";
        // line 2
        $context["selected_title"] = ((((isset($context["configuration"]) ? $context["configuration"] : null) == "default")) ? ($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE")) : (""));
        // line 3
        echo "    ";
        $context["selected_value"] = ((((isset($context["configuration"]) ? $context["configuration"] : null) == "default")) ? ("default") : (""));
        // line 4
        echo "    ";
        $context["selected_editable"] = true;
        // line 5
        echo "    <select id=\"configuration-selector\" class=\"config-select\" data-selectize-ajaxify data-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("allowEmptyOption" => true)), "html_attr");
        echo "\">
        <optgroup label=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_GLOBAL_DEFAULTS"), "html", null, true);
        echo "\">
            <option value=\"default\"
                ";
        // line 8
        if (((isset($context["configuration"]) ? $context["configuration"] : null) == "default")) {
            echo "selected=\"selected\"";
        }
        // line 9
        echo "                data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations/default", 1 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
        echo "\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
        echo "
            </option>
        </optgroup>

        ";
        // line 14
        $context["user_conf"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "user", array());
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["user_conf"]) ? $context["user_conf"] : null), "count", array())) {
            // line 16
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_THEME_OUTLINES"), "html", null, true);
            echo "\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_conf"]) ? $context["user_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 18
                echo "                ";
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    // line 19
                    echo "                    ";
                    $context["selected_title"] = $context["title"];
                    // line 20
                    echo "                    ";
                    $context["selected_value"] = $context["name"];
                    // line 21
                    echo "                ";
                }
                // line 22
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"
                        ";
                // line 23
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    echo "selected=\"selected\"";
                }
                // line 24
                echo "                        data-data=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => twig_escape_filter($this->env, $context["name"]), 2 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
                echo "\"
                >
                    ";
                // line 26
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </optgroup>
        ";
        }
        // line 31
        echo "
        ";
        // line 32
        $context["system_conf"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "system", array());
        // line 33
        echo "        ";
        if ($this->getAttribute((isset($context["system_conf"]) ? $context["system_conf"] : null), "count", array())) {
            // line 34
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SYSTEM_OUTLINES"), "html", null, true);
            echo "\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["system_conf"]) ? $context["system_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 36
                echo "                ";
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    // line 37
                    echo "                    ";
                    $context["selected_title"] = $context["title"];
                    // line 38
                    echo "                    ";
                    $context["selected_value"] = $context["name"];
                    // line 39
                    echo "                    ";
                    $context["selected_editable"] = false;
                    // line 40
                    echo "                ";
                }
                // line 41
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"
                        ";
                // line 42
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    echo "selected=\"selected\"";
                }
                // line 43
                echo "                        data-data=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => twig_escape_filter($this->env, $context["name"]), 2 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
                echo "\"
                >
                    ";
                // line 45
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </optgroup>
        ";
        }
        // line 50
        echo "    </select>
    ";
        // line 51
        if (((isset($context["selected_editable"]) ? $context["selected_editable"] : null) && $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.rename"), "method"))) {
            // line 52
            echo "    <span data-title-editable=\"";
            echo twig_escape_filter($this->env, (isset($context["selected_title"]) ? $context["selected_title"] : null), "html", null, true);
            echo "\"
          data-g-config-href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["selected_value"]) ? $context["selected_value"] : null), 2 => "rename"), "method"), "html", null, true);
            echo "\"
          class=\"title g-conf-title-edit\"
    >
        ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["selected_title"]) ? $context["selected_title"] : null), "html", null, true);
            echo "
    </span>
    <i class=\"fa fa-pencil font-small\"
       tabindex=\"0\"
       aria-label=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", (isset($context["selected_title"]) ? $context["selected_title"] : null)), "html", null, true);
            echo "\"
       data-title-editable=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["selected_title"]) ? $context["selected_title"] : null), "html", null, true);
            echo "\"
       data-title-edit=\"\"></i>
    ";
        }
        // line 64
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "partials/configuration-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 64,  197 => 61,  193 => 60,  186 => 56,  180 => 53,  175 => 52,  173 => 51,  170 => 50,  166 => 48,  157 => 45,  151 => 43,  147 => 42,  142 => 41,  139 => 40,  136 => 39,  133 => 38,  130 => 37,  127 => 36,  123 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  106 => 29,  97 => 26,  91 => 24,  87 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  66 => 17,  61 => 16,  58 => 15,  56 => 14,  49 => 10,  44 => 9,  40 => 8,  35 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li class="config-select-wrap">*/
/*     {% set selected_title = configuration == 'default' ? 'GANTRY5_PLATFORM_BASE_OUTLINE'|trans : '' %}*/
/*     {% set selected_value = configuration == 'default' ? 'default' : '' %}*/
/*     {% set selected_editable = true %}*/
/*     <select id="configuration-selector" class="config-select" data-selectize-ajaxify data-selectize="{{ {allowEmptyOption: true}|json_encode|e('html_attr') }}">*/
/*         <optgroup label="{{ 'GANTRY5_PLATFORM_GLOBAL_DEFAULTS'|trans }}">*/
/*             <option value="default"*/
/*                 {% if configuration == 'default' %}selected="selected"{% endif %}*/
/*                 data-data="{{ {params: {navbar: true}, url: gantry.route('configurations/default', configuration_page|default('styles'))}|json_encode|e('html_attr') }}">*/
/*                 {{ 'GANTRY5_PLATFORM_BASE_OUTLINE'|trans }}*/
/*             </option>*/
/*         </optgroup>*/
/* */
/*         {% set user_conf = gantry.configurations.user %}*/
/*         {% if user_conf.count %}*/
/*         <optgroup label="{{ 'GANTRY5_PLATFORM_THEME_OUTLINES'|trans }}">*/
/*             {% for name, title in user_conf %}*/
/*                 {% if name == configuration %}*/
/*                     {% set selected_title = title %}*/
/*                     {% set selected_value = name %}*/
/*                 {% endif %}*/
/*                 <option value="{{ name }}"*/
/*                         {% if name == configuration %}selected="selected"{% endif %}*/
/*                         data-data="{{ {params: {navbar: true}, url: gantry.route('configurations', name|e, configuration_page|default('styles'))}|json_encode|e('html_attr') }}"*/
/*                 >*/
/*                     {{ title }}*/
/*                 </option>*/
/*             {% endfor %}*/
/*         </optgroup>*/
/*         {% endif %}*/
/* */
/*         {% set system_conf = gantry.configurations.system %}*/
/*         {% if system_conf.count %}*/
/*         <optgroup label="{{ 'GANTRY5_PLATFORM_SYSTEM_OUTLINES'|trans }}">*/
/*             {% for name, title in system_conf %}*/
/*                 {% if name == configuration %}*/
/*                     {% set selected_title = title %}*/
/*                     {% set selected_value = name %}*/
/*                     {% set selected_editable = false %}*/
/*                 {% endif %}*/
/*                 <option value="{{ name }}"*/
/*                         {% if name == configuration %}selected="selected"{% endif %}*/
/*                         data-data="{{ {params: {navbar: true}, url: gantry.route('configurations', name|e, configuration_page|default('styles'))}|json_encode|e('html_attr') }}"*/
/*                 >*/
/*                     {{ title }}*/
/*                 </option>*/
/*             {% endfor %}*/
/*         </optgroup>*/
/*         {% endif %}*/
/*     </select>*/
/*     {% if selected_editable and gantry.authorize('outline.rename') %}*/
/*     <span data-title-editable="{{ selected_title }}"*/
/*           data-g-config-href="{{ gantry.route('configurations', selected_value, 'rename') }}"*/
/*           class="title g-conf-title-edit"*/
/*     >*/
/*         {{ selected_title }}*/
/*     </span>*/
/*     <i class="fa fa-pencil font-small"*/
/*        tabindex="0"*/
/*        aria-label="{{ 'GANTRY5_PLATFORM_EDIT_TITLE'|trans(selected_title) }}"*/
/*        data-title-editable="{{ selected_title }}"*/
/*        data-title-edit=""></i>*/
/*     {% endif %}*/
/* </li>*/
/* */
