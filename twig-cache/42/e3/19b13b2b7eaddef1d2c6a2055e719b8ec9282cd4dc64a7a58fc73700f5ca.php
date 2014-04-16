<?php

/* lego/gallery.showcase.twig */
class __TwigTemplate_42e319b13b2b7eaddef1d2c6a2055e719b8ec9282cd4dc64a7a58fc73700f5ca extends Twig_Template
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
        echo "<div class='featured'>
    <div class='grid-container'>
        <div class='grid-float'>

            <div class='grid__item col-2-3 col--q-medium col--q-small grid__item--middle right'>
                <div class='block-";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " block--stacked block-0--q-medium block-0--q-small pt-0 pb-0 pl-0--q-small pr-0--q-small'>   
                    <a href='";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "url"), "html", null, true);
        echo "' >   
                        <img src='";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "imageSource"), "html", null, true);
        echo "' alt='";
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "title");
        echo "' class='img--responsive align--bottom' title='";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "imageCredit"), "html", null, true);
        echo "'/>
                    </a>   
                </div><!--block ends-->
            </div><!--grid item ends-->

            <div class='grid__item col-1-3 col--q-medium col--q-small left'>
                <div class=' block-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " block--stacked pr-0--q-large'>
                    <p class='uppercase tiny'>
                        <a href='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parentLink"), "html", null, true);
        echo "' >
                            <strong>
                                ";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "category");
        echo " showcase
                            </strong>
                        </a> 
                         &middot; ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "date"), "html", null, true);
        echo "
                    </p>
                    <h2>
                        <a href='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "url"), "html", null, true);
        echo "'>
                            ";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "title");
        echo "
                        </a>
                    </h2>
                    <p>
                        ";
        // line 29
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "galleryShowcase"), "listingBlurb");
        echo " 
                    </p>
                </div><!--block ends-->
            </div><!--grid item ends-->

        </div><!--grid ends-->
    </div><!--grid container ends-->
</div><!--featured ends-->";
    }

    public function getTemplateName()
    {
        return "lego/gallery.showcase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  63 => 21,  50 => 12,  78 => 26,  71 => 22,  51 => 14,  34 => 8,  70 => 20,  42 => 11,  32 => 5,  27 => 4,  29 => 6,  23 => 3,  73 => 25,  65 => 18,  58 => 14,  55 => 15,  53 => 14,  47 => 14,  35 => 6,  33 => 5,  26 => 6,  39 => 13,  30 => 7,  24 => 4,  19 => 1,  112 => 64,  90 => 66,  88 => 63,  22 => 2,  20 => 1,  305 => 361,  300 => 359,  289 => 351,  284 => 349,  274 => 342,  262 => 333,  252 => 326,  242 => 319,  232 => 312,  227 => 310,  222 => 308,  211 => 300,  200 => 292,  195 => 290,  190 => 288,  179 => 280,  168 => 272,  163 => 270,  158 => 268,  148 => 261,  140 => 256,  130 => 249,  116 => 237,  114 => 226,  109 => 63,  107 => 201,  104 => 200,  102 => 184,  99 => 183,  97 => 171,  94 => 170,  92 => 163,  89 => 162,  87 => 147,  84 => 146,  82 => 60,  79 => 126,  77 => 111,  74 => 110,  72 => 99,  69 => 24,  67 => 21,  64 => 20,  62 => 19,  59 => 78,  57 => 18,  54 => 13,  52 => 16,  48 => 10,  46 => 11,  43 => 14,  41 => 8,  38 => 6,  36 => 7,  31 => 4,  28 => 3,);
    }
}
