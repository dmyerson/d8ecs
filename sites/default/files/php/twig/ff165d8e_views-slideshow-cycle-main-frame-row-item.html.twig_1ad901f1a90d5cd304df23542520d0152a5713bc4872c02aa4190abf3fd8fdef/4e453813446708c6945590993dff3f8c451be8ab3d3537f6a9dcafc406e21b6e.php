<?php

/* modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig */
class __TwigTemplate_f042d4ec29d8c89d248ec3b35ec922611b1101aa323ddced0cfd8ce964b1267f extends Twig_Template
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
        echo "<div ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 2
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <div {{ attributes.addClass(classes) }}>*/
/*   {{ item }}*/
/* </div>*/
/* */
