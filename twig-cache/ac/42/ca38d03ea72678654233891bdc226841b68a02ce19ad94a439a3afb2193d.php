<?php

/* lego/gallery.showcase.twig */
class __TwigTemplate_ac42ca38d03ea72678654233891bdc226841b68a02ce19ad94a439a3afb2193d extends Twig_Template
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
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked block-0--q-medium block-0--q-small pt-0 pb-0 pl-0--q-small pr-0--q-small'>   
                    <a href='";
        // line 7
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "url"), "html", null, true);
        echo "' >   
                        <img src='";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "imageSource"), "html", null, true);
        echo "' alt='";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "title");
        echo "' class='img--responsive align--bottom' title='";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "imageCredit"), "html", null, true);
        echo "'/>
                    </a>   
                </div><!--block ends-->
            </div><!--grid item ends-->

            <div class='grid__item col-1-3 col--q-medium col--q-small left'>
                <div class=' block-";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked pr-0--q-large'>
                    <p class='uppercase tiny '>
                        <a href='";
        // line 16
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "parentLink"), "html", null, true);
        echo "' >
                            <strong>
                                ";
        // line 18
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "category");
        echo " showcase
                            </strong>
                        </a> 
                         &middot; ";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "date"), "html", null, true);
        echo "
                    </p>
                    <h2>
                        <a href='";
        // line 24
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "url"), "html", null, true);
        echo "'>
                            ";
        // line 25
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "title");
        echo "
                        </a>
                    </h2>
                    <p>
                        ";
        // line 29
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo $this->getAttribute($this->getAttribute($_data_, "galleryShowcase"), "listingBlurb");
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
        return array (  78 => 24,  58 => 16,  52 => 14,  26 => 6,  51 => 11,  80 => 20,  67 => 14,  42 => 6,  34 => 5,  23 => 3,  83 => 25,  62 => 15,  39 => 6,  27 => 3,  22 => 2,  65 => 14,  54 => 10,  49 => 15,  46 => 8,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 29,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 18,  71 => 21,  69 => 121,  66 => 120,  64 => 18,  61 => 13,  59 => 14,  56 => 12,  53 => 10,  50 => 61,  47 => 7,  44 => 41,  41 => 13,  38 => 22,  36 => 8,  31 => 7,  28 => 4,);
    }
}
