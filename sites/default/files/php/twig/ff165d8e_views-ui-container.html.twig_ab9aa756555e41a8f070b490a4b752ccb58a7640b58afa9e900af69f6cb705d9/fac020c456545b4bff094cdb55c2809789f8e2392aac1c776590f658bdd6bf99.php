<?php

/* core/modules/views_ui/templates/views-ui-container.html.twig */
class __TwigTemplate_c136f288d236af11abf3efc3c06aca75d67ed05f9616a0d38017fe4327fd33e5 extends Twig_Template
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
        // line 15
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a generic views UI container/wrapper.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the container element.*/
/*  * - children: The remaining elements such as dropbuttons and tabs.*/
/*  **/
/*  * @see template_preprocess_views_ui_container()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>{{ children }}</div>*/
/* */
