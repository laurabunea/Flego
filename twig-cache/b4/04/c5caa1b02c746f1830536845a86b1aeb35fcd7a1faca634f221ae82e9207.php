<?php

/* lego/content.media.twig */
class __TwigTemplate_b404c5caa1b02c746f1830536845a86b1aeb35fcd7a1faca634f221ae82e9207 extends Twig_Template
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
        echo "
<div class='grid'>
    
    <div class='grid__item ";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "mediaLeft"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "image")) {
            // line 7
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "image"), "html", null, true);
            echo "' class='img--responsive valign-text-top' alt=''>
            ";
        }
        // line 9
        echo "        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    
    <div class='grid__item ";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "mediaRight"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <p>
                ";
        // line 16
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "copy"), "html", null, true);
        echo "
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.media.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  58 => 14,  40 => 7,  37 => 6,  29 => 5,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 129,  71 => 128,  69 => 121,  66 => 120,  64 => 108,  61 => 107,  59 => 88,  56 => 87,  53 => 13,  50 => 61,  47 => 9,  44 => 41,  41 => 32,  38 => 22,  36 => 7,  31 => 4,  28 => 3,);
    }
}
