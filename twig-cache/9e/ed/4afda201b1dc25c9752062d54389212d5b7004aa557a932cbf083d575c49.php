<?php

/* lego/content.block.twig */
class __TwigTemplate_9eed4afda201b1dc25c9752062d54389212d5b7004aa557a932cbf083d575c49 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSize"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " block--stacked ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
        echo "'>
  
            ";
        // line 8
        echo $context["macros"]->getblocks($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content"));
        echo "
            
        </div><!--block ends-->
        ";
        // line 14
        echo "    </div><!-- grid item ends-->

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
        return array (  26 => 5,  21 => 2,  62 => 20,  46 => 15,  43 => 14,  30 => 6,  24 => 4,  19 => 1,  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 124,  70 => 113,  67 => 112,  65 => 103,  61 => 101,  58 => 90,  56 => 69,  52 => 16,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}
