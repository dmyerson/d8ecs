<?php

/* core/themes/classy/templates/views/views-view-list.html.twig */
class __TwigTemplate_f5010fc9447a61d421fe8b82b6ef8050999547eb3ba9a6d05780e44696305de3 extends Twig_Template
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
        // line 19
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 20
            echo "<div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
";
        }
        // line 22
        echo "  ";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 23
            echo "    <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
  ";
        }
        // line 25
        echo "
  <";
        // line 26
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true);
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "attributes", array()), "html", null, true);
        echo ">

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 29
            echo "      <li";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
  </";
        // line 32
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "type", array()), "html", null, true);
        echo ">

";
        // line 34
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 35
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  68 => 34,  63 => 32,  60 => 31,  49 => 29,  45 => 28,  39 => 26,  36 => 25,  30 => 23,  27 => 22,  21 => 20,  19 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a view template to display a list of rows.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the container.*/
/*  * - rows: A list of rows for this list.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's contents.*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - list: @todo.*/
/*  *   - type: Starting tag will be either a ul or ol.*/
/*  *   - attributes: HTML attributes for the list element.*/
/*  **/
/*  * @see template_preprocess_views_view_list()*/
/*  *//* */
/* #}*/
/* {% if attributes -%}*/
/*   <div{{ attributes }}>*/
/* {% endif %}*/
/*   {% if title %}*/
/*     <h3>{{ title }}</h3>*/
/*   {% endif %}*/
/* */
/*   <{{ list.type }}{{ list.attributes }}>*/
/* */
/*     {% for row in rows %}*/
/*       <li{{ row.attributes }}>{{ row.content }}</li>*/
/*     {% endfor %}*/
/* */
/*   </{{ list.type }}>*/
/* */
/* {% if attributes -%}*/
/*   </div>*/
/* {% endif %}*/
/* */
