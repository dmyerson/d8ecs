<?php

/* modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row.html.twig */
class __TwigTemplate_0cb1c5e4610077f249be3acf7bd77e5158e8d94327ed4a0cb61889bd00a7a99e extends Twig_Template
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
        echo "<div id=\"views_slideshow_cycle_div_";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true);
        echo "_";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendered_items"]) ? $context["rendered_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rendered_item"]) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["rendered_item"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendered_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame-row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  32 => 3,  28 => 2,  19 => 1,);
    }
}
/* <div id="views_slideshow_cycle_div_{{ vss_id }}_{{ count }}" {{ attributes.addClass(classes) }}>*/
/*   {% for rendered_item in rendered_items %}*/
/*     {{ rendered_item }}*/
/*   {% endfor %}*/
/* </div>*/
/* */
