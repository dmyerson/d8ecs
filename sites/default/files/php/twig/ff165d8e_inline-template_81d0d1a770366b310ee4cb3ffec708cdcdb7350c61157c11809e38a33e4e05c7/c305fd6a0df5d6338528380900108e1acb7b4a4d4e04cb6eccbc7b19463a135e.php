<?php

/* {# inline_template_start #}{{ items|safe_join(separator) }} */
class __TwigTemplate_1afbafa2490e98e0e01e17dc662571d9045fd3ec4a809f7225a2cbc3e44fd56c extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["items"]) ? $context["items"] : null), (isset($context["separator"]) ? $context["separator"] : null)));
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ items|safe_join(separator) }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {# inline_template_start #}{{ items|safe_join(separator) }}*/
