<?php

/* lego/gallery.three-col.twig */
class __TwigTemplate_b265bcafb48d9bbd0afd110203e9abb82ebfff14ab47c317259f16622bb70043 extends Twig_Template
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
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked'>
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
        echo "
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked'>
            ";
        // line 15
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 16
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 18
        echo "
        </div><!--block ends-->
    </div><!--grid item ends-->

    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-";
        // line 23
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked'>
            ";
        // line 24
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 25
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 27
        echo "
        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/gallery.three-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  77 => 25,  74 => 24,  69 => 23,  62 => 18,  55 => 16,  52 => 15,  53 => 16,  47 => 14,  40 => 9,  33 => 7,  30 => 6,  66 => 20,  60 => 18,  57 => 17,  48 => 12,  25 => 5,  19 => 1,  171 => 80,  158 => 72,  147 => 66,  136 => 60,  124 => 53,  112 => 46,  99 => 38,  87 => 31,  75 => 25,  61 => 15,  54 => 16,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 10,  39 => 7,  36 => 6,  34 => 8,  31 => 7,  28 => 3,);
    }
}
