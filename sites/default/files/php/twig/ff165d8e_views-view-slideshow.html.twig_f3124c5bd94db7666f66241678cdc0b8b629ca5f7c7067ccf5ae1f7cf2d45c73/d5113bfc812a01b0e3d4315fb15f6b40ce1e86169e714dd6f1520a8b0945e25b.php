<?php

/* modules/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_21fdfa590f91d37aa6dc0d592c28089d0b11ed2f3f37ace532ade1f8646da8ab extends Twig_Template
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
        if ((isset($context["slideshow"]) ? $context["slideshow"] : null)) {
            // line 2
            echo "  <div class=\"skin-";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skin"]) ? $context["skin"] : null), "html", null, true);
            echo "\">
    ";
            // line 3
            if ((isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null)) {
                // line 4
                echo "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 5
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_widget_rendered"]) ? $context["top_widget_rendered"] : null), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 8
            echo "
    ";
            // line 9
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["slideshow"]) ? $context["slideshow"] : null), "html", null, true);
            echo "

    ";
            // line 11
            if ((isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null)) {
                // line 12
                echo "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 13
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_widget_rendered"]) ? $context["bottom_widget_rendered"] : null), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 16
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-view-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  50 => 13,  47 => 12,  45 => 11,  40 => 9,  37 => 8,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if slideshow %}*/
/*   <div class="skin-{{ skin }}">*/
/*     {% if top_widget_rendered %}*/
/*       <div class="views-slideshow-controls-top clearfix">*/
/*         {{ top_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {{ slideshow }}*/
/* */
/*     {% if bottom_widget_rendered %}*/
/*       <div class="views-slideshow-controls-bottom clearfix">*/
/*         {{ bottom_widget_rendered }}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* */
