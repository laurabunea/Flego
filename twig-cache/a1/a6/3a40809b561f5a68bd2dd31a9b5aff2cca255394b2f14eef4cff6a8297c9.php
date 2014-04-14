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
        <div class='sidebar'>
            ";
        // line 12
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $_macros_->getblocks($this->getAttribute($_data_, "sidebar"));
        echo "
        </div>
    </div><!-- grid item ends-->

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
        return array (  49 => 12,  40 => 8,  26 => 5,  21 => 2,  19 => 1,  376 => 530,  372 => 526,  368 => 524,  364 => 520,  359 => 517,  355 => 513,  350 => 510,  345 => 504,  341 => 501,  336 => 498,  331 => 492,  327 => 488,  319 => 482,  315 => 479,  310 => 476,  305 => 470,  301 => 465,  296 => 462,  291 => 456,  287 => 451,  282 => 448,  278 => 443,  273 => 440,  269 => 435,  263 => 431,  258 => 425,  254 => 421,  249 => 418,  244 => 412,  240 => 405,  235 => 402,  231 => 395,  226 => 392,  222 => 385,  217 => 382,  212 => 376,  208 => 370,  203 => 367,  200 => 363,  196 => 356,  190 => 352,  186 => 345,  180 => 341,  177 => 337,  173 => 308,  169 => 301,  164 => 298,  159 => 292,  155 => 286,  150 => 283,  145 => 277,  141 => 273,  136 => 270,  133 => 269,  131 => 268,  128 => 267,  123 => 261,  121 => 250,  116 => 247,  114 => 225,  111 => 224,  109 => 208,  106 => 207,  104 => 195,  101 => 194,  99 => 186,  96 => 185,  94 => 170,  91 => 169,  89 => 150,  86 => 149,  84 => 134,  81 => 133,  79 => 122,  76 => 121,  74 => 112,  71 => 111,  69 => 102,  66 => 101,  64 => 90,  61 => 89,  59 => 80,  55 => 78,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 6,  28 => 3,);
    }
}
