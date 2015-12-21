<?php

/* modules/views_slideshow/templates/views-slideshow-main-section.html.twig */
class __TwigTemplate_ecaed72e939599264520484c7bf3f3f166be49f0b2ad6a6a5019937092e6feb8 extends Twig_Template
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
        echo "<div id=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugin"]) ? $context["plugin"] : null), "html", null, true);
        echo "_main_";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true);
        echo "\" class=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["plugin"]) ? $context["plugin"] : null), "html", null, true);
        echo "_main views_slideshow_main\">
    ";
        // line 2
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slides"]) ? $context["slides"] : null), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-slideshow-main-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }
}
/* <div id="{{ plugin }}_main_{{ vss_id }}" class="{{ plugin }}_main views_slideshow_main">*/
/*     {{ slides }}*/
/* </div>*/
