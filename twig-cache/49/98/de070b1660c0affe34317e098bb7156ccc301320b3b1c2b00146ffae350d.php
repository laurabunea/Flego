<?php

/* elements/link.twig */
class __TwigTemplate_4998de070b1660c0affe34317e098bb7156ccc301320b3b1c2b00146ffae350d extends Twig_Template
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
        echo "<a href=\"";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "href"), "html", null, true);
        echo "\">
    ";
        // line 2
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "label"), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "elements/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,  390 => 581,  386 => 577,  382 => 575,  378 => 571,  373 => 568,  369 => 564,  364 => 561,  359 => 555,  355 => 552,  350 => 549,  345 => 543,  341 => 539,  333 => 533,  329 => 530,  324 => 527,  319 => 521,  315 => 516,  310 => 513,  305 => 507,  301 => 502,  296 => 499,  292 => 494,  287 => 491,  283 => 486,  277 => 482,  272 => 476,  268 => 472,  263 => 469,  258 => 463,  254 => 456,  249 => 453,  245 => 446,  240 => 443,  236 => 436,  231 => 433,  226 => 427,  222 => 421,  217 => 418,  214 => 414,  210 => 407,  204 => 403,  200 => 396,  194 => 392,  191 => 388,  188 => 360,  184 => 354,  179 => 351,  175 => 324,  170 => 321,  165 => 315,  161 => 309,  156 => 306,  151 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 124,  70 => 113,  67 => 112,  65 => 103,  61 => 101,  58 => 90,  56 => 69,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
