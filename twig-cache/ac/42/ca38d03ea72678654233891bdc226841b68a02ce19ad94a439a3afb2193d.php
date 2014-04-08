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
                    <h2 >
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
        return array (  91 => 29,  83 => 25,  78 => 24,  71 => 21,  64 => 18,  58 => 16,  52 => 14,  36 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
