<?php

/* theme-helper.twig */
class __TwigTemplate_6cbf503e24f9ae0e2337fd35ce82120d2e5f1d7e2a1fa495633c4ead95309d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class='lego--heading'>
        Theme style guide helper
    </h3>
    <div class='grid '>
    
        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--primary col block-m block--stacked border-box' >
                    <h3>
                        block--primary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--secondary col block-m block--stacked border-box' >
                    <h3 class=''>
                        block--secondary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--tertiary col block-m block--stacked border-box' >
                    <h3>
                        block--tertiary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--featured col block-m block--stacked border-box' >
                    <h3>
                        block--featured
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
       
    </div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "theme-helper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 124,  70 => 113,  67 => 112,  65 => 103,  61 => 101,  58 => 90,  56 => 69,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
