<?php

/* lego/form.twig */
class __TwigTemplate_ddf6650912290af43ae6f8fdd5fd9c21db9616c041b5a6fa927305077d95d69a extends Twig_Template
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
        echo "<div class='mb-m'>
    <form class='grid'>
        
        <div class='grid__item col";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        <label for='exampleInputEmail1'>
                            Email address
                        </label>
                    </div>
                    <div class='grid__item col'>
                        <input type='email' class='col text-input' id='exampleInputEmail1' placeholder='Enter email'>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class='grid__item col";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>

                    <div class='grid__item col'>
                        <label for='exampleInputPassword1'>
                            Password
                        </label>
                    </div>
                    <div class='grid__item col'>
                        
                        <input type='password' class='col text-input' id='exampleInputPassword1' placeholder='Password'>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->
        
        <div class='grid__item col";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        
                        <div class='checkbox grid__item'>
                            <label>
                            <input type='checkbox'> 
                            Check me out
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class='grid__item col";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        <button type='submit' class='btn btn-default'>Submit</button>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "lego/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 52,  45 => 12,  66 => 22,  49 => 16,  40 => 12,  55 => 20,  51 => 19,  36 => 10,  32 => 9,  64 => 22,  34 => 6,  53 => 11,  41 => 8,  79 => 27,  68 => 22,  63 => 20,  48 => 14,  35 => 11,  33 => 10,  27 => 4,  23 => 3,  25 => 4,  22 => 2,  26 => 5,  21 => 2,  62 => 36,  46 => 15,  43 => 12,  30 => 5,  24 => 4,  19 => 1,  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 25,  70 => 23,  67 => 112,  65 => 21,  61 => 21,  58 => 17,  56 => 69,  52 => 14,  50 => 12,  47 => 57,  44 => 45,  42 => 19,  39 => 7,  37 => 7,  31 => 6,  28 => 5,);
    }
}
