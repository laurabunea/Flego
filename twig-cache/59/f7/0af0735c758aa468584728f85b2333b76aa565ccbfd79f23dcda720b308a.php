<?php

/* lego/three-col.twig */
class __TwigTemplate_59f70af0735c758aa468584728f85b2333b76aa565ccbfd79f23dcda720b308a extends Twig_Template
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
        echo "
<div class='grid gallery'>
    
    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 7
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 9
        echo "        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 15
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 17
        echo "        </div><!--block ends-->
    </div><!--grid item ends-->

    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 22
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 23
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 25
        echo "        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/three-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  63 => 23,  60 => 22,  53 => 17,  46 => 15,  43 => 14,  36 => 9,  29 => 7,  26 => 6,  19 => 1,);
    }
}
