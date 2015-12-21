<?php

/* core/modules/system/templates/system-modules-uninstall.html.twig */
class __TwigTemplate_bf65fc8cab3432fe88ac4c227373f8c15dfce255d508c10a2899240ca23fce1b extends Twig_Template
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
        // line 24
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filters", array()), "html", null, true);
        echo "

<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
    <tr>
      <th>";
        // line 29
        echo $this->env->getExtension('drupal_core')->renderVar(t("Uninstall"));
        echo "</th>
      <th>";
        // line 30
        echo $this->env->getExtension('drupal_core')->renderVar(t("Name"));
        echo "</th>
      <th>";
        // line 31
        echo $this->env->getExtension('drupal_core')->renderVar(t("Description"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 36
            echo "      ";
            $context["zebra"] = twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()));
            // line 37
            echo "<tr";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "addClass", array(0 => (isset($context["zebra"]) ? $context["zebra"] : null)), "method"), "html", null, true);
            echo ">
        <td align=\"center\">";
            // line 39
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox", array()), "html", null, true);
            // line 40
            echo "</td>
        <td>
          <label for=\"";
            // line 42
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox_id", array()), "html", null, true);
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true);
            echo "</label>
        </td>
        <td class=\"description\">
          <span class=\"text module-description\">";
            // line 45
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["module"], "description", array()), "html", null, true);
            echo "</span>
          ";
            // line 46
            if (($this->getAttribute($context["module"], "reasons_count", array()) > 0)) {
                // line 47
                echo "            <div class=\"admin-requirements\">";
                // line 48
                echo \Drupal::translation()->formatPlural(abs($this->getAttribute(                // line 50
$context["module"], "reasons_count", array())), "The following reason prevents @module.module_name from being uninstalled:", "The following reasons prevent @module.module_name from being uninstalled:", array("@module.module_name" => $this->getAttribute(                // line 49
$context["module"], "module_name", array()), "@module.module_name" => $this->getAttribute(                // line 51
$context["module"], "module_name", array()), ));
                // line 53
                echo "              <div class=\"item-list\">
                <ul>";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "validation_reasons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 56
                    echo "<li>";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["reason"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                if ($this->getAttribute($context["module"], "required_by", array())) {
                    // line 59
                    echo "<li>";
                    echo $this->env->getExtension('drupal_core')->renderVar(t("Required by: @module-list", array("@module-list" => $this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($context["module"], "required_by", array()), ", "))));
                    echo "</li>";
                }
                // line 61
                echo "</ul>
              </div>
            </div>
          ";
            }
            // line 65
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 68
            echo "      <tr class=\"odd\">
        <td colspan=\"3\" class=\"empty message\">";
            // line 69
            echo $this->env->getExtension('drupal_core')->renderVar(t("No modules are available to uninstall."));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "  </tbody>
</table>

";
        // line 75
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "filters", "modules", "uninstall"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-modules-uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 75,  150 => 72,  141 => 69,  138 => 68,  123 => 65,  117 => 61,  112 => 59,  110 => 58,  102 => 56,  98 => 55,  95 => 53,  93 => 51,  92 => 49,  91 => 50,  90 => 48,  88 => 47,  86 => 46,  82 => 45,  74 => 42,  70 => 40,  68 => 39,  63 => 37,  60 => 36,  42 => 35,  35 => 31,  31 => 30,  27 => 29,  19 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for the modules uninstall page.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The modules uninstall form.*/
/*  * - modules: Contains multiple module instances. Each module contains:*/
/*  *   - attributes: Attributes on the row.*/
/*  *   - module_name: The name of the module.*/
/*  *   - checkbox: A checkbox for uninstalling the module.*/
/*  *   - checkbox_id: A unique identifier for interacting with the checkbox*/
/*  *     element.*/
/*  *   - name: The human-readable name of the module.*/
/*  *   - description: The description of the module.*/
/*  *   - disabled_reasons: (optional) A list of reasons why this module cannot be*/
/*  *     uninstalled.*/
/*  **/
/*  * @see template_preprocess_system_modules_uninstall()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ form.filters }}*/
/* */
/* <table class="responsive-enabled" data-striping="1">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>{{ 'Uninstall'|t }}</th>*/
/*       <th>{{ 'Name'|t }}</th>*/
/*       <th>{{ 'Description'|t }}</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for module in modules %}*/
/*       {% set zebra = cycle(['odd', 'even'], loop.index0) -%}*/
/*       <tr{{ module.attributes.addClass(zebra) }}>*/
/*         <td align="center">*/
/*           {{- module.checkbox -}}*/
/*         </td>*/
/*         <td>*/
/*           <label for="{{ module.checkbox_id }}" class="module-name table-filter-text-source">{{ module.name }}</label>*/
/*         </td>*/
/*         <td class="description">*/
/*           <span class="text module-description">{{ module.description }}</span>*/
/*           {% if module.reasons_count > 0 %}*/
/*             <div class="admin-requirements">*/
/*               {%- trans -%}*/
/*                 The following reason prevents {{ module.module_name }} from being uninstalled:*/
/*               {%- plural module.reasons_count -%}*/
/*                 The following reasons prevent {{ module.module_name }} from being uninstalled:*/
/*               {%- endtrans %}*/
/*               <div class="item-list">*/
/*                 <ul>*/
/*                   {%- for reason in module.validation_reasons -%}*/
/*                     <li>{{ reason }}</li>*/
/*                   {%- endfor -%}*/
/*                   {%- if module.required_by -%}*/
/*                     <li>{{ 'Required by: @module-list'|t({'@module-list': module.required_by|safe_join(', ') }) }}</li>*/
/*                   {%- endif -%}*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*     {% else %}*/
/*       <tr class="odd">*/
/*         <td colspan="3" class="empty message">{{ 'No modules are available to uninstall.'|t }}</td>*/
/*       </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
/* {{ form|without('filters', 'modules', 'uninstall') }}*/
/* */
