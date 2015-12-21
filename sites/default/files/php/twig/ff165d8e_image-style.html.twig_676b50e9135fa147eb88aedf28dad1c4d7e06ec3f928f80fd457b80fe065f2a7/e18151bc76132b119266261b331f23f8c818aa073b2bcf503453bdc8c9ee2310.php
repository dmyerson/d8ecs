<?php

/* core/themes/classy/templates/field/image-style.html.twig */
class __TwigTemplate_7fd1c7828ed2134c04d3deb57a81cd1ece8304297685831eb1878a8e8595af31 extends Twig_Template
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
        // line 18
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an image using a specific image style.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the image, including the following:*/
/*  *   - src: Full URL or relative path to the image file.*/
/*  *   - class: One or more classes to be applied to the image.*/
/*  *   - width: The width of the image (if known).*/
/*  *   - height: The height of the image (if known).*/
/*  *   - title: The title of the image.*/
/*  *   - alt: The alternative text for the image.*/
/*  **/
/*  * @see template_preprocess_image_style()*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* */
