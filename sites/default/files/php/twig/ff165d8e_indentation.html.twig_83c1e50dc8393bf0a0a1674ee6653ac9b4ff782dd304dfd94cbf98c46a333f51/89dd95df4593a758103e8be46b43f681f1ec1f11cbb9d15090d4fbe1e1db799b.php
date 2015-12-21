<?php

/* core/modules/system/templates/indentation.html.twig */
class __TwigTemplate_701e35fd733157a0971edd5dfdaa32e4de795b820d15c4eb8d38d447b88cba74 extends Twig_Template
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["size"]) ? $context["size"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((isset($context["size"]) ? $context["size"] : null) > 0)) {
                echo "<div class=\"js-indentation indentation\">&nbsp;</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/indentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a set of indentation divs.*/
/*  **/
/*  * These <div> tags are used for drag and drop tables.*/
/*  **/
/*  * Available variables:*/
/*  * - size: Optional. The number of indentations to create.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% for i in 1..size if size > 0 %}<div class="js-indentation indentation">&nbsp;</div>{% endfor %}*/
/* */
