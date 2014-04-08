<?php

/* lego/gallery.four-col.twig */
class __TwigTemplate_dcdfb341330a4ca921a2e96c55d784c046b6710c80659017da0ab79fb8d00e53 extends Twig_Template
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
    
    <div class='grid__item col-1-4 gallery--item'>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
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
    
    <div class='grid__item col-1-4 gallery--item'>
        <div class='block-";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
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

    <div class='grid__item col-1-4 gallery--item'>
        <div class='block-";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
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
   
   <div class='grid__item col-1-4 gallery--item'>
        <div class='block-";
        // line 29
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            ";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 31
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 33
        echo "        </div><!--block ends-->
    </div><!--grid item ends-->
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/gallery.four-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  108 => 31,  105 => 30,  97 => 29,  91 => 25,  84 => 23,  81 => 22,  73 => 21,  67 => 17,  60 => 15,  57 => 14,  43 => 9,  36 => 7,  33 => 6,  25 => 5,  19 => 1,  184 => 93,  171 => 85,  160 => 79,  149 => 73,  137 => 66,  125 => 59,  112 => 51,  100 => 44,  88 => 37,  76 => 30,  64 => 23,  54 => 15,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
