<?php

/* elements/h2.twig */
class __TwigTemplate_c351b34d9dc4a71e22ca6f801540bd436a884623b46a72cd22faa220598b36e3 extends Twig_Template
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
        echo "<";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
        echo ">
    ";
        // line 2
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "data"), "html", null, true);
        echo "
</";
        // line 3
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "type"), "html", null, true);
        echo ">";
    }

    public function getTemplateName()
    {
        return "elements/h2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  25 => 2,  70 => 20,  64 => 19,  57 => 16,  50 => 14,  46 => 12,  38 => 8,  28 => 7,  21 => 2,  140 => 15,  135 => 14,  121 => 13,  115 => 11,  112 => 10,  99 => 9,  95 => 8,  76 => 7,  72 => 6,  61 => 5,  39 => 2,  27 => 1,  22 => 18,  19 => 1,);
    }
}
