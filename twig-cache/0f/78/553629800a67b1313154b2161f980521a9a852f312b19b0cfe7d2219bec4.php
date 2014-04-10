<?php

/* lego/article.list.twig */
class __TwigTemplate_0f78553629800a67b1313154b2161f980521a9a852f312b19b0cfe7d2219bec4 extends Twig_Template
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
        echo "<div class='grid '>  
    <div class='grid__item col";
        // line 2
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <span class=\"tiny uppercase text-nowrap inline-block\">
                <a href=\"anchor here\" >
                    ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "category"), "html", null, true);
        echo "
                </a>
                ·
            </span>
            <span class=\"tiny uppercase text-nowrap\"> 
                ";
        // line 11
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "date"), "html", null, true);
        echo "
            </span>
            <h3 class='";
        // line 13
        if (isset($context["headingSize"])) { $_headingSize_ = $context["headingSize"]; } else { $_headingSize_ = null; }
        echo twig_escape_filter($this->env, $_headingSize_, "html", null, true);
        echo "'>
                ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "title"), "html", null, true);
        echo "
            </h3>
            <p>
                ";
        // line 17
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "desc"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 20
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "linkAnchor"), "html", null, true);
        echo "'>
                    ";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!-- grid item ends-->
</div><!-- grid ends -->";
    }

    public function getTemplateName()
    {
        return "lego/article.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  52 => 13,  46 => 11,  37 => 6,  27 => 3,  22 => 2,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 21,  74 => 129,  71 => 20,  69 => 121,  66 => 120,  64 => 17,  61 => 107,  59 => 88,  56 => 87,  53 => 72,  50 => 61,  47 => 52,  44 => 41,  41 => 32,  38 => 22,  36 => 7,  31 => 4,  28 => 3,);
    }
}
