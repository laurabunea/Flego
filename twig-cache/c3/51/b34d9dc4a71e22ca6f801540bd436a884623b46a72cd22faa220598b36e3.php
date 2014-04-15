<?php

/* elements/h2.twig */
class __TwigTemplate_c351b34d9dc4a71e22ca6f801540bd436a884623b46a72cd22faa220598b36e3 extends Twig_Template
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
        echo "<h2>
    ";
        // line 2
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "data"), "html", null, true);
        echo "
</h2>";
    }

    public function getTemplateName()
    {
        return "elements/h2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  382 => 561,  378 => 557,  374 => 555,  370 => 551,  365 => 548,  361 => 544,  356 => 541,  351 => 535,  347 => 532,  342 => 529,  337 => 523,  333 => 519,  325 => 513,  321 => 510,  316 => 507,  311 => 501,  307 => 496,  302 => 493,  297 => 487,  293 => 482,  288 => 479,  284 => 474,  279 => 471,  275 => 466,  269 => 462,  264 => 456,  260 => 452,  255 => 449,  250 => 443,  246 => 436,  241 => 433,  237 => 426,  232 => 423,  228 => 416,  223 => 413,  218 => 407,  214 => 401,  209 => 398,  206 => 394,  202 => 387,  196 => 383,  192 => 376,  186 => 372,  183 => 368,  179 => 339,  175 => 312,  170 => 309,  165 => 303,  161 => 297,  156 => 294,  151 => 288,  147 => 284,  142 => 281,  139 => 280,  137 => 279,  134 => 278,  129 => 272,  127 => 261,  122 => 258,  120 => 236,  117 => 235,  115 => 219,  112 => 218,  110 => 206,  107 => 205,  105 => 197,  102 => 196,  100 => 181,  97 => 180,  95 => 161,  92 => 160,  90 => 145,  87 => 144,  85 => 133,  82 => 132,  80 => 123,  77 => 122,  75 => 113,  72 => 112,  70 => 101,  67 => 100,  65 => 91,  61 => 89,  58 => 78,  56 => 69,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
