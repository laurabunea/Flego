<?php

/* elements/image.twig */
class __TwigTemplate_d6713e2a80acf1b3452c470e485e47dc0dadd53113de142e276853b95e5a1740 extends Twig_Template
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
        echo "<img src=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "src"), "html", null, true);
        echo "\" alt=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "alt"), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "elements/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  376 => 532,  372 => 528,  368 => 526,  364 => 522,  359 => 519,  355 => 515,  350 => 512,  345 => 506,  341 => 503,  336 => 500,  331 => 494,  327 => 490,  319 => 484,  315 => 481,  310 => 478,  305 => 472,  301 => 467,  296 => 464,  291 => 458,  287 => 453,  282 => 450,  278 => 445,  273 => 442,  269 => 437,  263 => 433,  258 => 427,  254 => 423,  249 => 420,  244 => 414,  240 => 407,  235 => 404,  231 => 397,  226 => 394,  222 => 387,  217 => 384,  212 => 378,  208 => 372,  203 => 369,  200 => 365,  196 => 358,  190 => 354,  186 => 347,  180 => 343,  177 => 339,  173 => 310,  169 => 301,  164 => 298,  159 => 292,  155 => 286,  150 => 283,  145 => 277,  141 => 273,  136 => 270,  133 => 269,  131 => 268,  128 => 267,  123 => 261,  121 => 250,  116 => 247,  114 => 225,  111 => 224,  109 => 208,  106 => 207,  104 => 195,  101 => 194,  99 => 186,  96 => 185,  94 => 170,  91 => 169,  89 => 150,  86 => 149,  84 => 134,  81 => 133,  79 => 122,  76 => 121,  74 => 112,  71 => 111,  69 => 102,  66 => 101,  64 => 90,  61 => 89,  59 => 80,  55 => 78,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
