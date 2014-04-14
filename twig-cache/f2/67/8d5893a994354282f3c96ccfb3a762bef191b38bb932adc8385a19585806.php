<?php

/* elements/raw.twig */
class __TwigTemplate_f2678d5893a994354282f3c96ccfb3a762bef191b38bb932adc8385a19585806 extends Twig_Template
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
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($_item_, "data");
    }

    public function getTemplateName()
    {
        return "elements/raw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  376 => 550,  372 => 546,  368 => 544,  364 => 540,  359 => 537,  355 => 533,  350 => 530,  345 => 524,  341 => 521,  336 => 518,  331 => 512,  327 => 508,  319 => 502,  315 => 499,  310 => 496,  305 => 490,  301 => 485,  296 => 482,  291 => 476,  287 => 471,  282 => 468,  278 => 463,  273 => 460,  269 => 455,  263 => 451,  258 => 445,  254 => 441,  249 => 438,  244 => 432,  240 => 425,  235 => 422,  231 => 415,  226 => 412,  222 => 405,  217 => 402,  212 => 396,  208 => 390,  203 => 387,  200 => 383,  196 => 376,  190 => 372,  186 => 365,  180 => 361,  177 => 357,  173 => 328,  169 => 301,  164 => 298,  159 => 292,  155 => 286,  150 => 283,  145 => 277,  141 => 273,  136 => 270,  133 => 269,  131 => 268,  128 => 267,  123 => 261,  121 => 250,  116 => 247,  114 => 225,  111 => 224,  109 => 208,  106 => 207,  104 => 195,  101 => 194,  99 => 186,  96 => 185,  94 => 170,  91 => 169,  89 => 150,  86 => 149,  84 => 134,  81 => 133,  79 => 122,  76 => 121,  74 => 112,  71 => 111,  69 => 102,  66 => 101,  64 => 90,  61 => 89,  59 => 80,  55 => 78,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
