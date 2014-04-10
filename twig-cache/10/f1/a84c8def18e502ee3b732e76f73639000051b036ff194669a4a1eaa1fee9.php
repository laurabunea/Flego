<?php

/* lego/panel.twig */
class __TwigTemplate_10f1a84c8def18e502ee3b732e76f73639000051b036ff194669a4a1eaa1fee9 extends Twig_Template
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
    <div class='grid__item col'>
        <div class='block-";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " primary--border mt-m ml-m mr-m mb-m radius '>
            <div class='grid '>
                
                <div class='grid__item col-3-4 col--q-small'>
                    <div class='mr-m'>
                        <h2 class='";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo "'>
                            ";
        // line 9
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "title"), "html", null, true);
        echo "
                        </h2>
                        <p>
                            ";
        // line 12
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "desc"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div><!--grid item ends-->
                
                <div class='grid__item col-1-4 col--q-small align--bottom'>
                    <a href='";
        // line 18
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "btnLink"), "html", null, true);
        echo "' class='btn right col border-box mt-m--q-small'>
                        ";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "btnTitle"), "html", null, true);
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
        return array (  37 => 9,  32 => 8,  78 => 24,  58 => 16,  52 => 14,  26 => 6,  51 => 11,  80 => 20,  67 => 14,  42 => 6,  34 => 5,  23 => 3,  83 => 25,  62 => 15,  39 => 6,  27 => 3,  22 => 2,  65 => 14,  54 => 18,  49 => 15,  46 => 8,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 29,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 18,  71 => 21,  69 => 121,  66 => 120,  64 => 18,  61 => 13,  59 => 19,  56 => 12,  53 => 10,  50 => 61,  47 => 7,  44 => 12,  41 => 13,  38 => 22,  36 => 8,  31 => 7,  28 => 4,);
    }
}
