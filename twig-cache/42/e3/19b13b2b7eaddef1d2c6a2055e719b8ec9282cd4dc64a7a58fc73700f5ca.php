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
        echo "<div class='block--featured'>
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
        return array (  80 => 29,  73 => 25,  69 => 24,  63 => 21,  57 => 18,  52 => 16,  47 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
