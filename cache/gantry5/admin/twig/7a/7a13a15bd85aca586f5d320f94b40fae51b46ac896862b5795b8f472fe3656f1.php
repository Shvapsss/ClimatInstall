<?php

/* @gantry-admin/pages/configurations/layouts/edit.html.twig */
class __TwigTemplate_70571cee6058f67663acc3d93f996c550e4c8f1d72575053115b27735e15d386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/layouts/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        if ((((isset($context["configuration"]) ? $context["configuration"] : null) == "default") && $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "no_base_layout", array()))) {
            // line 5
            echo "
<h2 class=\"page-title\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
            echo "</h2>
<p>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BASE_LAYOUT_DESC"), "html", null, true);
            echo "</p>

";
        } else {
            // line 10
            echo "
<div class=\"g-grid\" data-lm-container=\"\">
    <div class=\"g-block sidebar-block particles-sidebar-block\">
        <h2 class=\"page-title\">
            <span class=\"title\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PARTICLES"), "html", null, true);
            echo "</span>
        </h2>
        <div class=\"g5-lm-particles-picker\">
            <div class=\"search settings-block\">
                <input type=\"text\" placeholder=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
            echo "\" role=\"search\"/>
                <i class=\"fa fa-fw fa-search\"></i>
            </div>
            <div class=\"particles-container\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["list"]) {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
                echo "
                    <ul>
                    ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["list"]);
                foreach ($context['_seq'] as $context["type"] => $context["particle"]) {
                    // line 26
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["particle"]);
                    foreach ($context['_seq'] as $context["item_key"] => $context["item"]) {
                        // line 27
                        echo "                            <li class=\"g5-lm-particle-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\"
                                data-lm-blocktype=\"";
                        // line 28
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\"
                                data-lm-subtype=\"";
                        // line 29
                        echo twig_escape_filter($this->env, $context["item_key"], "html", null, true);
                        echo "\"
                                data-lm-icon=\"";
                        // line 30
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "icon", array()), "fa-cube")) : ("fa-cube")), "html", null, true);
                        echo "\"
                                ";
                        // line 31
                        if ( !$this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (("particles." . $context["item_key"]) . ".enabled"), 1 => true), "method")) {
                            // line 32
                            echo "                                data-lm-disabled=\"\"
                                data-lm-nodrag=\"\"
                                title=\"";
                            // line 34
                            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PARTICLE_DISABLED"), "html", null, true);
                            echo "\"
                                ";
                        }
                        // line 36
                        echo "                            >
                                <span class=\"particle-icon\">
                                    <i class=\"fa fa-fw ";
                        // line 38
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "icon", array()), "fa-cube")) : ("fa-cube")), "html", null, true);
                        echo "\"></i>
                                </span>
                                <span class=\"particle-title\">";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                        echo "</span>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['item_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['particle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    </ul>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
        </div>
    </div>
    <div class=\"g-block main-block\">
        <span class=\"float-right\">
            ";
            // line 53
            echo "            <button href=\"#\"
                    class=\"button\"
                    role=\"button\"
                    data-lm-switcher=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["switcher_url"]) ? $context["switcher_url"] : null)), "method"), "html", null, true);
            echo "\"
                    aria-label=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LM_LOAD_PRESET"), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw fa-code-fork\"></i> <span>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LOAD"), "html", null, true);
            echo "</span>
            </button>
            <button href=\"#\"
                    class=\"button\"
                    role=\"button\"
                    data-lm-clear=\"\"
                    aria-label=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LM_CLEAR_LAYOUT"), "html", null, true);
            echo "\"
            >
                <i class=\"fa fa-fw fa-trash-o\"></i> <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CLEAR"), "html", null, true);
            echo "</span>
            </button>
            <button href=\"#\"
                    class=\"button button-primary button-save\"
                    role=\"button\"
                    data-save=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
            echo "\"
                    aria-label=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SAVE_LAYOUT"), "html", null, true);
            echo "\"
            >
                <i class=\"fa fa-fw fa-check\"></i> <span>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SAVE_LAYOUT"), "html", null, true);
            echo "</span>
            </button>
        </span>
        <h2 class=\"page-title layout-title\">
            <span class=\"title\">";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, ((array_key_exists("preset_title", $context)) ? (_twig_default_filter((isset($context["preset_title"]) ? $context["preset_title"] : null), $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LM_PRESET_UNKNOWN"))) : ($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LM_PRESET_UNKNOWN"))), "html", null, true);
            echo ")</small></span>
        </h2>

        <div class=\"lm-newblocks clearfix\" data-lm-blocktypes=\"\">
            ";
            // line 83
            echo "            <span class=\"float-right\">
                <button data-lm-back=\"\" href=\"#\" class=\"button disabled\"><i class=\"fa fa-fw fa-arrow-left\"></i> ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_UNDO"), "html", null, true);
            echo "</button>
                ";
            // line 86
            echo "                <button data-lm-forward=\"\" href=\"#\" class=\"button disabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_REDO"), "html", null, true);
            echo " <i class=\"fa fa-fw fa-arrow-right\"></i></button>
            </span>
        </div>
        <div id=\"page\">
            <div class=\"lm-blocks\"
                 data-lm-page=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
            echo "\"
                 data-lm-preset=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["preset"]) ? $context["preset"] : null)), "html_attr");
            echo "\"
                 data-lm-root=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["layout"]) ? $context["layout"] : null)), "html_attr");
            echo "\"
            >
            </div>
            ";
            // line 96
            if (twig_test_empty((isset($context["layout"]) ? $context["layout"] : null))) {
                // line 97
                echo "            <div id=\"lm-no-layout\">
                <div class=\"card full-width\">
                    <h4>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_NO_LAYOUT"), "html", null, true);
                echo "</h4>
                    <div class=\"inner-params\">
                        ";
                // line 101
                echo $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_NO_LAYOUT_DESC");
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            // line 106
            echo "
            <div class=\"g-footer-actions\">
            <span class=\"float-right\">
                <a href=\"#\" class=\"button\" data-lm-switcher=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["switcher_url"]) ? $context["switcher_url"] : null)), "method"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-fw fa-code-fork\"></i> <span>";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LOAD"), "html", null, true);
            echo "</span>
                </a>
                <a href=\"#\" class=\"button\" data-lm-clear=\"\">
                    <i class=\"fa fa-fw fa-trash-o\"></i> <span>";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CLEAR"), "html", null, true);
            echo "</span>
                </a>
                <a href=\"#\" class=\"button button-primary button-save\" data-save=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-fw fa-check\"></i> <span>";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SAVE_LAYOUT"), "html", null, true);
            echo "</span>
                </a>
            </span>
            </div>
        </div>
    </div>

    <div id=\"trash\" data-lm-eraseblock=\"\"><div class=\"trash-zone\">&times;</div><span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_DROP_DELETE"), "html", null, true);
            echo "</span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 123,  285 => 116,  281 => 115,  276 => 113,  270 => 110,  266 => 109,  261 => 106,  253 => 101,  248 => 99,  244 => 97,  242 => 96,  236 => 93,  232 => 92,  228 => 91,  219 => 86,  215 => 84,  212 => 83,  203 => 78,  196 => 74,  191 => 72,  187 => 71,  179 => 66,  174 => 64,  165 => 58,  161 => 57,  157 => 56,  152 => 53,  145 => 46,  138 => 44,  132 => 43,  123 => 40,  118 => 38,  114 => 36,  109 => 34,  105 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  86 => 27,  81 => 26,  77 => 25,  71 => 23,  67 => 22,  58 => 18,  51 => 14,  45 => 10,  39 => 7,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}*/
/* */
/* {% block gantry %}*/
/* {% if configuration == 'default' and gantry.platform.no_base_layout %}*/
/* */
/* <h2 class="page-title">{{ 'GANTRY5_PLATFORM_LAYOUT'|trans }}</h2>*/
/* <p>{{ 'GANTRY5_PLATFORM_BASE_LAYOUT_DESC'|trans }}</p>*/
/* */
/* {% else %}*/
/* */
/* <div class="g-grid" data-lm-container="">*/
/*     <div class="g-block sidebar-block particles-sidebar-block">*/
/*         <h2 class="page-title">*/
/*             <span class="title">{{ 'GANTRY5_PLATFORM_PARTICLES'|trans }}</span>*/
/*         </h2>*/
/*         <div class="g5-lm-particles-picker">*/
/*             <div class="search settings-block">*/
/*                 <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_FILTER_ELI'|trans }}" aria-label="{{ 'GANTRY5_PLATFORM_FILTER_ELI'|trans }}" role="search"/>*/
/*                 <i class="fa fa-fw fa-search"></i>*/
/*             </div>*/
/*             <div class="particles-container">*/
/*                 {% for key, list in particles %}*/
/*                     {{ key|capitalize }}*/
/*                     <ul>*/
/*                     {% for type, particle in list %}*/
/*                         {% for item_key, item in particle %}*/
/*                             <li class="g5-lm-particle-{{ type }}"*/
/*                                 data-lm-blocktype="{{ type }}"*/
/*                                 data-lm-subtype="{{ item_key }}"*/
/*                                 data-lm-icon="{{ item.icon|default('fa-cube') }}"*/
/*                                 {% if not gantry.config.get('particles.' ~ item_key ~ '.enabled', true) %}*/
/*                                 data-lm-disabled=""*/
/*                                 data-lm-nodrag=""*/
/*                                 title="{{ 'GANTRY5_PLATFORM_PARTICLE_DISABLED'|trans }}"*/
/*                                 {% endif %}*/
/*                             >*/
/*                                 <span class="particle-icon">*/
/*                                     <i class="fa fa-fw {{ item.icon|default('fa-cube') }}"></i>*/
/*                                 </span>*/
/*                                 <span class="particle-title">{{ item.name }}</span>*/
/*                             </li>*/
/*                         {%  endfor %}*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="g-block main-block">*/
/*         <span class="float-right">*/
/*             {#<a href="#" class="button"><i class="fa fa-fw fa-sign-in"></i> <span>{{ 'GANTRY5_PLATFORM_IMPORT'|trans }}</span></a>*/
/*             <a href="#" class="button"><i class="fa fa-fw fa-sign-out"></i> <span>{{ 'GANTRY5_PLATFORM_EXPORT'|trans }}</span></a>#}*/
/*             <button href="#"*/
/*                     class="button"*/
/*                     role="button"*/
/*                     data-lm-switcher="{{ gantry.route(switcher_url) }}"*/
/*                     aria-label="{{ 'GANTRY5_PLATFORM_LM_LOAD_PRESET'|trans }}">*/
/*                 <i class="fa fa-fw fa-code-fork"></i> <span>{{ 'GANTRY5_PLATFORM_LOAD'|trans }}</span>*/
/*             </button>*/
/*             <button href="#"*/
/*                     class="button"*/
/*                     role="button"*/
/*                     data-lm-clear=""*/
/*                     aria-label="{{ 'GANTRY5_PLATFORM_LM_CLEAR_LAYOUT'|trans }}"*/
/*             >*/
/*                 <i class="fa fa-fw fa-trash-o"></i> <span>{{ 'GANTRY5_PLATFORM_CLEAR'|trans }}</span>*/
/*             </button>*/
/*             <button href="#"*/
/*                     class="button button-primary button-save"*/
/*                     role="button"*/
/*                     data-save="{{ 'GANTRY5_PLATFORM_LAYOUT'|trans }}"*/
/*                     aria-label="{{ 'GANTRY5_PLATFORM_SAVE_LAYOUT'|trans }}"*/
/*             >*/
/*                 <i class="fa fa-fw fa-check"></i> <span>{{ 'GANTRY5_PLATFORM_SAVE_LAYOUT'|trans }}</span>*/
/*             </button>*/
/*         </span>*/
/*         <h2 class="page-title layout-title">*/
/*             <span class="title">{{ 'GANTRY5_PLATFORM_LAYOUT'|trans }} <small>({{ preset_title|default('GANTRY5_PLATFORM_LM_PRESET_UNKNOWN'|trans) }})</small></span>*/
/*         </h2>*/
/* */
/*         <div class="lm-newblocks clearfix" data-lm-blocktypes="">*/
/*             {#<a class="button" href="{{ gantry.route('picker/particles')|e }}" data-lm-addparticle=""><i class="fa fa-plus"></i> <span>{{ 'GANTRY5_PLATFORM_NEW_PARTICLE'|trans }}</span></a>#}*/
/*             <span class="float-right">*/
/*                 <button data-lm-back="" href="#" class="button disabled"><i class="fa fa-fw fa-arrow-left"></i> {{ 'GANTRY5_PLATFORM_UNDO'|trans }}</button>*/
/*                 {#<a href="#" class="button"><i class="fa fa-fw fa-history"></i> <span>{{ 'GANTRY5_PLATFORM_HISTORY'|trans }}</span></a>#}*/
/*                 <button data-lm-forward="" href="#" class="button disabled">{{ 'GANTRY5_PLATFORM_REDO'|trans }} <i class="fa fa-fw fa-arrow-right"></i></button>*/
/*             </span>*/
/*         </div>*/
/*         <div id="page">*/
/*             <div class="lm-blocks"*/
/*                  data-lm-page="{{ page_id }}"*/
/*                  data-lm-preset="{{ preset|json_encode|e('html_attr') }}"*/
/*                  data-lm-root="{{ layout|json_encode|e('html_attr') }}"*/
/*             >*/
/*             </div>*/
/*             {% if layout is empty %}*/
/*             <div id="lm-no-layout">*/
/*                 <div class="card full-width">*/
/*                     <h4>{{ 'GANTRY5_PLATFORM_NO_LAYOUT'|trans }}</h4>*/
/*                     <div class="inner-params">*/
/*                         {{ 'GANTRY5_PLATFORM_NO_LAYOUT_DESC'|trans|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <div class="g-footer-actions">*/
/*             <span class="float-right">*/
/*                 <a href="#" class="button" data-lm-switcher="{{ gantry.route(switcher_url) }}">*/
/*                     <i class="fa fa-fw fa-code-fork"></i> <span>{{ 'GANTRY5_PLATFORM_LOAD'|trans }}</span>*/
/*                 </a>*/
/*                 <a href="#" class="button" data-lm-clear="">*/
/*                     <i class="fa fa-fw fa-trash-o"></i> <span>{{ 'GANTRY5_PLATFORM_CLEAR'|trans }}</span>*/
/*                 </a>*/
/*                 <a href="#" class="button button-primary button-save" data-save="{{ 'GANTRY5_PLATFORM_LAYOUT'|trans }}">*/
/*                     <i class="fa fa-fw fa-check"></i> <span>{{ 'GANTRY5_PLATFORM_SAVE_LAYOUT'|trans }}</span>*/
/*                 </a>*/
/*             </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="trash" data-lm-eraseblock=""><div class="trash-zone">&times;</div><span>{{ 'GANTRY5_PLATFORM_DROP_DELETE'|trans }}</span></div>*/
/* {% endif %}*/
/* {% endblock %}*/
