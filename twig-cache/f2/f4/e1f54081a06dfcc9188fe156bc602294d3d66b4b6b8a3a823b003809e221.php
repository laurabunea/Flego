<?php

/* elements/intro.twig */
class __TwigTemplate_f2f4e1f54081a06dfcc9188fe156bc602294d3d66b4b6b8a3a823b003809e221 extends Twig_Template
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
        $context["macros"] = $this->env->loadTemplate("macros.twig");
        // line 2
        echo "
<div class='intro'> 
    ";
        // line 4
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $_macros_->getblocks($this->getAttribute($_item_, "data"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "elements/intro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  42 => 10,  33 => 8,  28 => 7,  21 => 2,  145 => 17,  140 => 16,  126 => 15,  120 => 13,  117 => 12,  104 => 11,  101 => 10,  98 => 9,  80 => 8,  77 => 7,  74 => 6,  61 => 5,  39 => 2,  27 => 1,  22 => 20,  19 => 1,);
    }
}
