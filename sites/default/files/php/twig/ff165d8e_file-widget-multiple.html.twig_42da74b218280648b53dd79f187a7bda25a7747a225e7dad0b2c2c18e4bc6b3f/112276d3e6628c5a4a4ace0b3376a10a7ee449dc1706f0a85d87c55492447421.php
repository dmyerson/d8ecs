<?php

/* core/themes/classy/templates/content-edit/file-widget-multiple.html.twig */
class __TwigTemplate_81da9c839aa93860251cb3d5da2dd7dd79c8ec55a41846b8cc07824037298e6f extends Twig_Template
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
        // line 13
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
        echo "
";
        // line 14
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/file-widget-multiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 14,  19 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a multi file form widget.*/
/*  **/
/*  * Available variables:*/
/*  * - table: Table of previously uploaded files.*/
/*  * - element: The form element for uploading another file.*/
/*  **/
/*  * @see template_preprocess_file_widget_multiple()*/
/*  *//* */
/* #}*/
/* {{ table }}*/
/* {{ element }}*/
/* */
