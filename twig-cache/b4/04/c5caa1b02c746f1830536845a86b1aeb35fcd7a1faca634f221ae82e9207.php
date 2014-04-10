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
        echo "<div class='grid'>
    
    <div class='grid__item ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "mediaLeft"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            ";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "image")) {
            // line 6
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "image"), "html", null, true);
            echo "' class='img--responsive valign-text-top' alt=''>
            ";
        }
        // line 8
        echo "        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item ";
        // line 11
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "mediaRight"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 12
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <p>
                ";
        // line 14
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
        return array (  51 => 11,  80 => 20,  67 => 14,  42 => 6,  34 => 5,  23 => 3,  83 => 23,  62 => 15,  39 => 6,  27 => 3,  22 => 2,  65 => 14,  54 => 10,  49 => 15,  46 => 8,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 18,  71 => 128,  69 => 121,  66 => 120,  64 => 108,  61 => 13,  59 => 14,  56 => 12,  53 => 10,  50 => 61,  47 => 7,  44 => 41,  41 => 13,  38 => 22,  36 => 5,  31 => 7,  28 => 4,);
    }
}
