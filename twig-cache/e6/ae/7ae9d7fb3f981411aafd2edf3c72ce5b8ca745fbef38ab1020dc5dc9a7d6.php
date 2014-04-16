<?php

/* lego/barchart.twig */
class __TwigTemplate_e6ae7ae9d7fb3f981411aafd2edf3c72ce5b8ca745fbef38ab1020dc5dc9a7d6 extends Twig_Template
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
        echo "<div class='grid grid--middle'>
    <!--loop through percentages -->
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "barchart"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "        
        <div class='grid__item col-2-10 col--q-small'>
            <div class='block-";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
            echo " block--stacked ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
            echo "'>
               <p class='font-primary--light h1'>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "percentage"), "html", null, true);
            echo "</p>
            </div><!--block ends-->
        </div><!-- grid item ends-->
        
        <div class='grid__item col-8-10 col--q-small'>
            <div class='block-";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
            echo " block--stacked ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
            echo " pt-0--q-small'>
                <p>
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "desc"), "html", null, true);
            echo "
                </p>
                <div class='barchart col '>
                    <span class='meter block-element' style='height:100%;width: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "percentage"), "html", null, true);
            echo "'></span>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
        
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/barchart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  66 => 22,  49 => 16,  40 => 12,  55 => 20,  51 => 19,  36 => 10,  32 => 9,  64 => 22,  34 => 6,  53 => 11,  41 => 8,  79 => 27,  68 => 22,  63 => 20,  48 => 14,  35 => 11,  33 => 10,  27 => 4,  23 => 3,  25 => 4,  22 => 2,  26 => 5,  21 => 2,  62 => 20,  46 => 15,  43 => 12,  30 => 5,  24 => 4,  19 => 1,  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 25,  70 => 23,  67 => 112,  65 => 21,  61 => 21,  58 => 17,  56 => 69,  52 => 14,  50 => 12,  47 => 57,  44 => 45,  42 => 13,  39 => 7,  37 => 7,  31 => 6,  28 => 5,);
    }
}
