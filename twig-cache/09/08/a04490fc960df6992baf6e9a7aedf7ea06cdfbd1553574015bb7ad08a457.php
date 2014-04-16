<?php

/* elements/h1.twig */
class __TwigTemplate_0908a04490fc960df6992baf6e9a7aedf7ea06cdfbd1553574015bb7ad08a457 extends Twig_Template
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
        echo "<h1>
    ";
        // line 2
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "data"), "html", null, true);
        echo "
</h1>";
    }

    public function getTemplateName()
    {
        return "elements/h1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  390 => 575,  386 => 571,  382 => 569,  378 => 565,  373 => 562,  369 => 558,  364 => 555,  359 => 549,  355 => 546,  350 => 543,  345 => 537,  341 => 533,  333 => 527,  329 => 524,  324 => 521,  319 => 515,  315 => 510,  310 => 507,  305 => 501,  301 => 496,  296 => 493,  292 => 488,  287 => 485,  283 => 480,  277 => 476,  272 => 470,  268 => 466,  263 => 463,  258 => 457,  254 => 450,  249 => 447,  245 => 440,  240 => 437,  236 => 430,  231 => 427,  226 => 421,  222 => 415,  217 => 412,  214 => 408,  210 => 401,  204 => 397,  200 => 390,  194 => 386,  191 => 382,  188 => 354,  184 => 348,  179 => 345,  175 => 318,  170 => 315,  165 => 309,  161 => 303,  156 => 300,  151 => 294,  147 => 290,  142 => 287,  139 => 286,  137 => 285,  134 => 284,  129 => 278,  127 => 267,  122 => 264,  120 => 242,  117 => 241,  115 => 225,  112 => 224,  110 => 212,  107 => 211,  105 => 203,  102 => 202,  100 => 187,  97 => 186,  95 => 167,  92 => 166,  90 => 151,  87 => 150,  85 => 139,  82 => 138,  80 => 129,  77 => 128,  75 => 119,  72 => 118,  70 => 107,  67 => 106,  65 => 97,  61 => 95,  58 => 84,  56 => 69,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
