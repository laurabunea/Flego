<?php

/* lego/panel.twig */
class __TwigTemplate_c5e13008bbb85c6d38ed685cf67ffc6514fd777431e13c56da994560d530a2a6 extends Twig_Template
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

    <div class='grid__item col'>
        <div class='block-";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " primary--border mt-m ml-m mr-m mb-m radius'>
            <div class='grid '>
                
                <div class='grid__item col-3-4 col--q-small'>
                    <div class='mr-m'>
                        <h2 class='";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headingSize"), "html", null, true);
        echo "'>
                            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "panel"), "title"), "html", null, true);
        echo "
                        </h2>
                        <p>
                            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "panel"), "desc"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div><!--grid item ends-->
                
                <div class='grid__item col-1-4 col--q-small align--bottom'>
                    <a href='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "btnLink"), "html", null, true);
        echo "' class='btn right col border-box mt-m--q-small'>
                        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "panel"), "btnTitle"), "html", null, true);
        echo "
                    </a>
                </div><!--grid item ends-->

            </div>
        </div><!--block ends-->
    </div><!-- grid item ends-->

</div><!-- grid ends -->";
    }

    public function getTemplateName()
    {
        return "lego/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  51 => 19,  36 => 10,  32 => 9,  64 => 22,  34 => 6,  53 => 11,  41 => 8,  79 => 27,  68 => 22,  63 => 20,  48 => 14,  35 => 6,  33 => 6,  27 => 4,  23 => 3,  25 => 4,  22 => 2,  26 => 5,  21 => 2,  62 => 20,  46 => 11,  43 => 12,  30 => 5,  24 => 4,  19 => 1,  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 23,  70 => 113,  67 => 112,  65 => 21,  61 => 101,  58 => 15,  56 => 69,  52 => 16,  50 => 12,  47 => 57,  44 => 45,  42 => 13,  39 => 7,  37 => 8,  31 => 4,  28 => 5,);
    }
}
