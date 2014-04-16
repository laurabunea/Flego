<?php

/* lego/content.block.twig */
class __TwigTemplate_a1a63a40809b561f5a68bd2dd31a9b5aff2cca255394b2f14eef4cff6a8297c9 extends Twig_Template
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
<div class='grid'>

    <div class='grid__item col";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
  
            ";
        // line 8
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $_macros_->getblocks($this->getAttribute($_data_, "content"));
        echo "
            
        </div><!--block ends-->
        ";
        // line 14
        echo "    </div><!-- grid item ends-->

</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  40 => 8,  31 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
