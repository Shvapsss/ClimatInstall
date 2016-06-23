<?php

/* @gantry-admin/partials/navigation.html.twig */
class __TwigTemplate_6f1cc5e225d3a91aa03d07c43ba5d4a45c5fcbbe4c477fde7b5637b3911a673c extends Twig_Template
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
        echo "<div class=\"g-grid\">
    <div class=\"g-block navbar-block\">
        <nav id=\"gantry\">
            ";
        // line 4
        $context["style"] = ((twig_in_filter((isset($context["location"]) ? $context["location"] : null), array(0 => "menu", 1 => "about", 2 => "configurations", 3 => "positions"))) ? (" style=\"overflow: hidden; height: 0; visibility: hidden;\"") : (""));
        // line 5
        echo "            <section id=\"navbar\"";
        echo (isset($context["style"]) ? $context["style"] : null);
        echo ">
                <ul>
                    ";
        // line 7
        $this->loadTemplate("partials/configuration-selector.html.twig", "@gantry-admin/partials/navigation.html.twig", 7)->display($context);
        // line 8
        echo "                    <li ";
        echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations/styles")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"styles\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
        echo "\"
                           href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "styles"), "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-adjust\"></i> <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_STYLES"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li ";
        // line 18
        echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations/settings")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"settings\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
        echo "\"
                           href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "settings"), "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-wrench\"></i> <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    <li ";
        // line 28
        echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations/page")) ? ("class=\"active\"") : (""));
        echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"page\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
        echo "\"
                           href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "page"), "method"), "html", null, true);
        echo "\"
                        >
                            <i class=\"fa fa-fw fa-list-alt\"></i> <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PAGESETTINGS"), "html", null, true);
        echo "</span>
                        </a>
                    </li>
                    ";
        // line 38
        if ((((isset($context["configuration"]) ? $context["configuration"] : null) && ((isset($context["configuration"]) ? $context["configuration"] : null) != "default")) ||  !$this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "no_base_layout", array()))) {
            // line 39
            echo "                    <li ";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations/layout")) ? ("class=\"active\"") : (""));
            echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"layout\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\"
                           href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "layout"), "method"), "html", null, true);
            echo "\"
                        >
                            <i class=\"fa fa-fw fa-columns\"></i> <span>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LAYOUT"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    ";
        }
        // line 50
        echo "                    ";
        if ((((isset($context["configuration"]) ? $context["configuration"] : null) && ((isset($context["configuration"]) ? $context["configuration"] : null) != "default")) &&  !(is_string($__internal_e51d4692026da5f3ffb4db2477f12e5cfc7874ae90b286c3ad9b5031012c59ed = (isset($context["configuration"]) ? $context["configuration"] : null)) && is_string($__internal_959230af0360e96e9e47ff4af8308120985f933aab940b216c40d3c4c08ae4d1 = "_") && ('' === $__internal_959230af0360e96e9e47ff4af8308120985f933aab940b216c40d3c4c08ae4d1 || 0 === strpos($__internal_e51d4692026da5f3ffb4db2477f12e5cfc7874ae90b286c3ad9b5031012c59ed, $__internal_959230af0360e96e9e47ff4af8308120985f933aab940b216c40d3c4c08ae4d1))))) {
            // line 51
            echo "                    <li ";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations/assignments")) ? ("class=\"active\"") : (""));
            echo ">
                        <a data-g5-ajaxify=\"\"
                           data-g5-nav=\"assignments\"
                           data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                           data-g5-ajaxify-params=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\"
                           href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "assignments"), "method"), "html", null, true);
            echo "\"
                        >
                            <i class=\"fa fa-fw fa-check-square-o\"></i> <span>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS"), "html", null, true);
            echo "</span>
                        </a>
                    </li>
                    ";
        }
        // line 62
        echo "                </ul>
                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "themes"), "method"), "html", null, true);
        echo "\" aria-hidden=\"true\" tabindex=\"-1\">
                    <svg version=\"1.1\" id=\"gantry-logo\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"81px\" height=\"28.239px\" viewBox=\"0 0 81 28.239\" style=\"enable-background:new 0 0 81 28.239;\" xml:space=\"preserve\">
                <g>
                    <path style=\"fill:#a0a0a0;\" d=\"M8.101,26.332c2.639-0.358,4.636-2.603,4.672-5.311l0.008-1.451l-1.184,0.847
                        c-1.255,0.903-2.734,1.38-4.27,1.38C3.288,21.797,0,18.511,0,14.471c0-4.039,3.286-7.325,7.325-7.325
                        c1.633,0,3.182,0.483,4.481,1.491l0.198,0.104h2.694V20.95c0,3.792-2.969,6.92-6.597,7.289V26.332z M7.325,9.039
                        c-2.995,0-5.432,2.437-5.432,5.432c0,2.996,2.437,5.433,5.432,5.433s5.432-2.437,5.432-5.433
                        C12.757,11.476,10.32,9.039,7.325,9.039 M74.403,26.332c2.639-0.358,4.683-2.603,4.719-5.311l0.032-1.451l-1.172,0.847
                        c-1.256,0.903-2.725,1.38-4.26,1.38c-3.914,0-7.07-3.024-7.235-6.938V14.37V8.741H68.3v6.418c0.275,2.577,2.682,4.768,5.413,4.768
                        c2.692,0,5.331-2.28,5.467-4.589h0.005V8.741H81v12.507l-0.014,0.395c-0.169,1.807-1.016,3.48-2.359,4.711
                        c-1.171,1.073-2.575,1.728-4.224,1.885V26.332z M24.114,21.797c-4.039,0-7.325-3.286-7.325-7.326c0-4.039,3.286-7.325,7.325-7.325
                        c4.037,0,7.404,3.282,7.407,7.319v0.014c-0.002,0.033,0,0.838,0,0.838v4.641h-2.683l-0.199,0.212
                        C27.333,21.198,25.768,21.797,24.114,21.797 M24.114,9.039c-2.996,0-5.433,2.437-5.433,5.432c0,2.996,2.437,5.433,5.433,5.433
                        s5.432-2.437,5.432-5.433C29.546,11.476,27.109,9.039,24.114,9.039 M57.415,19.957V8.741h2.732l0.167-0.111
                        c1.099-0.846,2.379-1.313,3.698-1.448v1.906c-2.474,0.332-4.319,2.328-4.598,4.799l-0.015,0.228l-0.005,0.473v5.37H57.415z
                         M51.808,19.957V7.422h-2.309V5.443h2.309V0h1.979v5.443h2.144v1.979h-2.144v12.535H51.808z M46.695,19.957v-6.103
                        c-0.16-2.616-2.559-4.816-5.347-4.816c-2.787,0-5.539,2.518-5.539,4.828v0.836v0.74v4.515h-1.814V8.576h2.868l0.192-0.085
                        c1.261-0.915,2.746-1.372,4.292-1.372c4.037,0,7.32,3.294,7.326,7.329l0.002,0.016c-0.003,0.038-0.002,0.083-0.002,0.124v0.768
                        v4.602H46.695z\"/>
                </g>
            </svg>
                </a>
            </section>
        </nav>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 63,  154 => 62,  147 => 58,  142 => 56,  138 => 55,  130 => 51,  127 => 50,  120 => 46,  115 => 44,  111 => 43,  103 => 39,  101 => 38,  95 => 35,  90 => 33,  86 => 32,  79 => 28,  73 => 25,  68 => 23,  64 => 22,  57 => 18,  51 => 15,  46 => 13,  42 => 12,  34 => 8,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="g-grid">*/
/*     <div class="g-block navbar-block">*/
/*         <nav id="gantry">*/
/*             {% set style = location in ['menu', 'about', 'configurations', 'positions']  ? ' style="overflow: hidden; height: 0; visibility: hidden;"' : '' %}*/
/*             <section id="navbar"{{ style|raw }}>*/
/*                 <ul>*/
/*                     {% include 'partials/configuration-selector.html.twig' %}*/
/*                     <li {{ (location == 'configurations/styles') ? 'class="active"' }}>*/
/*                         <a data-g5-ajaxify=""*/
/*                            data-g5-nav="styles"*/
/*                            data-g5-ajaxify-target="[data-g5-content-wrapper]"*/
/*                            data-g5-ajaxify-params="{{ {"navbar": true}|json_encode|e('html_attr') }}"*/
/*                            href="{{ gantry.route('configurations', configuration, 'styles') }}"*/
/*                         >*/
/*                             <i class="fa fa-fw fa-adjust"></i> <span>{{ 'GANTRY5_PLATFORM_STYLES'|trans }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li {{ (location == 'configurations/settings') ? 'class="active"' }}>*/
/*                         <a data-g5-ajaxify=""*/
/*                            data-g5-nav="settings"*/
/*                            data-g5-ajaxify-target="[data-g5-content-wrapper]"*/
/*                            data-g5-ajaxify-params="{{ {"navbar": true}|json_encode|e('html_attr') }}"*/
/*                            href="{{ gantry.route('configurations', configuration, 'settings') }}"*/
/*                         >*/
/*                             <i class="fa fa-fw fa-wrench"></i> <span>{{ 'GANTRY5_PLATFORM_PARTICLE_DEFAULTS'|trans }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li {{ (location == 'configurations/page') ? 'class="active"' }}>*/
/*                         <a data-g5-ajaxify=""*/
/*                            data-g5-nav="page"*/
/*                            data-g5-ajaxify-target="[data-g5-content-wrapper]"*/
/*                            data-g5-ajaxify-params="{{ {"navbar": true}|json_encode|e('html_attr') }}"*/
/*                            href="{{ gantry.route('configurations', configuration, 'page') }}"*/
/*                         >*/
/*                             <i class="fa fa-fw fa-list-alt"></i> <span>{{ 'GANTRY5_PLATFORM_PAGESETTINGS'|trans }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     {% if (configuration and configuration != 'default') or not gantry.platform.no_base_layout %}*/
/*                     <li {{ (location == 'configurations/layout') ? 'class="active"' }}>*/
/*                         <a data-g5-ajaxify=""*/
/*                            data-g5-nav="layout"*/
/*                            data-g5-ajaxify-target="[data-g5-content-wrapper]"*/
/*                            data-g5-ajaxify-params="{{ {"navbar": true}|json_encode|e('html_attr') }}"*/
/*                            href="{{ gantry.route('configurations', configuration, 'layout') }}"*/
/*                         >*/
/*                             <i class="fa fa-fw fa-columns"></i> <span>{{ 'GANTRY5_PLATFORM_LAYOUT'|trans }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     {% if configuration and configuration != 'default' and not (configuration starts with '_') %}*/
/*                     <li {{ (location == 'configurations/assignments') ? 'class="active"' }}>*/
/*                         <a data-g5-ajaxify=""*/
/*                            data-g5-nav="assignments"*/
/*                            data-g5-ajaxify-target="[data-g5-content-wrapper]"*/
/*                            data-g5-ajaxify-params="{{ {"navbar": true}|json_encode|e('html_attr') }}"*/
/*                            href="{{ gantry.route('configurations', configuration, 'assignments') }}"*/
/*                         >*/
/*                             <i class="fa fa-fw fa-check-square-o"></i> <span>{{ 'GANTRY5_PLATFORM_ASSIGNMENTS'|trans }}</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*                 <a href="{{ gantry.route('themes') }}" aria-hidden="true" tabindex="-1">*/
/*                     <svg version="1.1" id="gantry-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="81px" height="28.239px" viewBox="0 0 81 28.239" style="enable-background:new 0 0 81 28.239;" xml:space="preserve">*/
/*                 <g>*/
/*                     <path style="fill:#a0a0a0;" d="M8.101,26.332c2.639-0.358,4.636-2.603,4.672-5.311l0.008-1.451l-1.184,0.847*/
/*                         c-1.255,0.903-2.734,1.38-4.27,1.38C3.288,21.797,0,18.511,0,14.471c0-4.039,3.286-7.325,7.325-7.325*/
/*                         c1.633,0,3.182,0.483,4.481,1.491l0.198,0.104h2.694V20.95c0,3.792-2.969,6.92-6.597,7.289V26.332z M7.325,9.039*/
/*                         c-2.995,0-5.432,2.437-5.432,5.432c0,2.996,2.437,5.433,5.432,5.433s5.432-2.437,5.432-5.433*/
/*                         C12.757,11.476,10.32,9.039,7.325,9.039 M74.403,26.332c2.639-0.358,4.683-2.603,4.719-5.311l0.032-1.451l-1.172,0.847*/
/*                         c-1.256,0.903-2.725,1.38-4.26,1.38c-3.914,0-7.07-3.024-7.235-6.938V14.37V8.741H68.3v6.418c0.275,2.577,2.682,4.768,5.413,4.768*/
/*                         c2.692,0,5.331-2.28,5.467-4.589h0.005V8.741H81v12.507l-0.014,0.395c-0.169,1.807-1.016,3.48-2.359,4.711*/
/*                         c-1.171,1.073-2.575,1.728-4.224,1.885V26.332z M24.114,21.797c-4.039,0-7.325-3.286-7.325-7.326c0-4.039,3.286-7.325,7.325-7.325*/
/*                         c4.037,0,7.404,3.282,7.407,7.319v0.014c-0.002,0.033,0,0.838,0,0.838v4.641h-2.683l-0.199,0.212*/
/*                         C27.333,21.198,25.768,21.797,24.114,21.797 M24.114,9.039c-2.996,0-5.433,2.437-5.433,5.432c0,2.996,2.437,5.433,5.433,5.433*/
/*                         s5.432-2.437,5.432-5.433C29.546,11.476,27.109,9.039,24.114,9.039 M57.415,19.957V8.741h2.732l0.167-0.111*/
/*                         c1.099-0.846,2.379-1.313,3.698-1.448v1.906c-2.474,0.332-4.319,2.328-4.598,4.799l-0.015,0.228l-0.005,0.473v5.37H57.415z*/
/*                          M51.808,19.957V7.422h-2.309V5.443h2.309V0h1.979v5.443h2.144v1.979h-2.144v12.535H51.808z M46.695,19.957v-6.103*/
/*                         c-0.16-2.616-2.559-4.816-5.347-4.816c-2.787,0-5.539,2.518-5.539,4.828v0.836v0.74v4.515h-1.814V8.576h2.868l0.192-0.085*/
/*                         c1.261-0.915,2.746-1.372,4.292-1.372c4.037,0,7.32,3.294,7.326,7.329l0.002,0.016c-0.003,0.038-0.002,0.083-0.002,0.124v0.768*/
/*                         v4.602H46.695z"/>*/
/*                 </g>*/
/*             </svg>*/
/*                 </a>*/
/*             </section>*/
/*         </nav>*/
/*     </div>*/
/* </div>*/
/* */
