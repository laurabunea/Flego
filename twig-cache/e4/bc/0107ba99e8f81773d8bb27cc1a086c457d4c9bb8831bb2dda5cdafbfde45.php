<?php

/* lego/content.intro.twig */
class __TwigTemplate_e4bc0107ba99e8f81773d8bb27cc1a086c457d4c9bb8831bb2dda5cdafbfde45 extends Twig_Template
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
        echo "<div class='grid'>
    <div class='grid__item col";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSizeHeading"), "html", null, true);
        echo " '>
        <div class='block-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " block--stacked ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStackedTop"), "html", null, true);
        echo "'>
            <h1 class='font-primary--light'>
                ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"), "strapline")) {
            // line 6
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"), "strapline"), "html", null, true);
            echo "
                ";
        } else {
            // line 8
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"), "title"), "html", null, true);
            echo "
                ";
        }
        // line 10
        echo "            </h1>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"), "intro")) {
            // line 15
            echo "        <div class='grid__item col '>
            <div class='block-";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
            echo " block--stacked pt-0  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStackedBottom"), "html", null, true);
            echo "'>
                <p class='intro'>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"), "intro"), "html", null, true);
            echo "
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
    ";
        }
        // line 23
        echo "</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.intro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  65 => 18,  58 => 16,  55 => 15,  53 => 14,  47 => 10,  35 => 6,  33 => 5,  26 => 3,  39 => 13,  30 => 7,  24 => 4,  19 => 1,  112 => 64,  90 => 66,  88 => 63,  22 => 2,  20 => 1,  305 => 361,  300 => 359,  289 => 351,  284 => 349,  274 => 342,  262 => 333,  252 => 326,  242 => 319,  232 => 312,  227 => 310,  222 => 308,  211 => 300,  200 => 292,  195 => 290,  190 => 288,  179 => 280,  168 => 272,  163 => 270,  158 => 268,  148 => 261,  140 => 256,  130 => 249,  116 => 237,  114 => 226,  109 => 63,  107 => 201,  104 => 200,  102 => 184,  99 => 183,  97 => 171,  94 => 170,  92 => 163,  89 => 162,  87 => 147,  84 => 146,  82 => 60,  79 => 126,  77 => 111,  74 => 110,  72 => 99,  69 => 98,  67 => 89,  64 => 88,  62 => 20,  59 => 78,  57 => 67,  54 => 66,  52 => 16,  48 => 55,  46 => 15,  43 => 14,  41 => 8,  38 => 22,  36 => 7,  31 => 4,  28 => 3,);
    }
}
