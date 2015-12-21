<?php

/* {# inline_template_start #}<pre>{{ query }}</pre> */
class __TwigTemplate_18201d5cf0c86b6d2354a6fa3d4586c1d0401ac7417d39177a89bdaa13708c00 extends Twig_Template
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
        echo "<pre>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["query"]) ? $context["query"] : null), "html", null, true);
        echo "</pre>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<pre>{{ query }}</pre>";
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
/* {# inline_template_start #}<pre>{{ query }}</pre>*/
