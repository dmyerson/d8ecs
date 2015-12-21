<?php

/* core/modules/views_ui/templates/views-ui-view-info.html.twig */
class __TwigTemplate_29148b5e1858f31cb27c6dce4b0741dbf5adc0a3e497f82b88a28445fec92170 extends Twig_Template
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
        // line 12
        echo "<h3 class=\"views-ui-view-title views-table-filter-text-source\">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "label", array()), "html", null, true);
        echo "</h3>
<div class=\"views-ui-view-displays\">
  ";
        // line 14
        if ((isset($context["displays"]) ? $context["displays"] : null)) {
            // line 15
            echo "    ";
            echo \Drupal::translation()->formatPlural(abs(            // line 17
(isset($context["displays"]) ? $context["displays"] : null)), "Display", "Displays", array());
            // line 19
            echo ":
    <em>";
            // line 20
            echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["displays"]) ? $context["displays"] : null), ", "));
            echo "</em>
  ";
        } else {
            // line 22
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("None"));
            echo "
  ";
        }
        // line 24
        echo "</div>
<div class=\"views-ui-view-machine-name\">
  ";
        // line 26
        echo $this->env->getExtension('drupal_core')->renderVar(t("Machine name:"));
        echo "
  <span class=\"views-table-filter-text-source\">";
        // line 27
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "id", array()), "html", null, true);
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  49 => 26,  45 => 24,  39 => 22,  34 => 20,  31 => 19,  29 => 17,  27 => 15,  25 => 14,  19 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for basic administrative info about a View.*/
/*  **/
/*  * Available variables:*/
/*  * - displays: List of displays.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <h3 class="views-ui-view-title views-table-filter-text-source">{{ view.label }}</h3>*/
/* <div class="views-ui-view-displays">*/
/*   {% if displays %}*/
/*     {% trans %}*/
/*       Display*/
/*     {% plural displays %}*/
/*       Displays*/
/*     {% endtrans %}:*/
/*     <em>{{ displays|safe_join(', ') }}</em>*/
/*   {% else %}*/
/*     {{ 'None'|t }}*/
/*   {% endif %}*/
/* </div>*/
/* <div class="views-ui-view-machine-name">*/
/*   {{ 'Machine name:'|t }}*/
/*   <span class="views-table-filter-text-source">{{ view.id }}</span>*/
/* </div>*/
/* */
