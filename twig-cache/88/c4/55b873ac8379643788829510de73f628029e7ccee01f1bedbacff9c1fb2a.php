<?php

/* elements/button.twig */
class __TwigTemplate_88c455b873ac8379643788829510de73f628029e7ccee01f1bedbacff9c1fb2a extends Twig_Template
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
        echo "<a class=\"btn\" href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "href"), "html", null, true);
        echo "\">
    ";
        // line 2
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "elements/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,  376 => 544,  372 => 540,  368 => 538,  364 => 534,  359 => 531,  355 => 527,  350 => 524,  345 => 518,  341 => 515,  336 => 512,  331 => 506,  327 => 502,  319 => 496,  315 => 493,  310 => 490,  305 => 484,  301 => 479,  296 => 476,  291 => 470,  287 => 465,  282 => 462,  278 => 457,  273 => 454,  269 => 449,  263 => 445,  258 => 439,  254 => 435,  249 => 432,  244 => 426,  240 => 419,  235 => 416,  231 => 409,  226 => 406,  222 => 399,  217 => 396,  212 => 390,  208 => 384,  203 => 381,  200 => 377,  196 => 370,  190 => 366,  186 => 359,  180 => 355,  177 => 351,  173 => 322,  169 => 301,  164 => 298,  159 => 292,  155 => 286,  150 => 283,  145 => 277,  141 => 273,  136 => 270,  133 => 269,  131 => 268,  128 => 267,  123 => 261,  121 => 250,  116 => 247,  114 => 225,  111 => 224,  109 => 208,  106 => 207,  104 => 195,  101 => 194,  99 => 186,  96 => 185,  94 => 170,  91 => 169,  89 => 150,  86 => 149,  84 => 134,  81 => 133,  79 => 122,  76 => 121,  74 => 112,  71 => 111,  69 => 102,  66 => 101,  64 => 90,  61 => 89,  59 => 80,  55 => 78,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
