<?php

/* modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig */
class __TwigTemplate_97b795dec645c0ff47b2c31774799f5956611af65c2ffeab8719120bdbf84eae extends Twig_Template
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
        echo "<div id=\"views_slideshow_cycle_teaser_section_";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["vss_id"]) ? $context["vss_id"] : null), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendered_rows"]) ? $context["rendered_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rendered_row"]) {
            // line 3
            echo "   ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["rendered_row"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rendered_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/modules/views_slideshow_cycle/templates/views-slideshow-cycle-main-frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  30 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div id="views_slideshow_cycle_teaser_section_{{ vss_id }}" {{ attributes.addClass(classes) }}>*/
/*   {% for rendered_row in rendered_rows %}*/
/*    {{ rendered_row }}*/
/*   {% endfor %}*/
/* </div>*/
/* */
