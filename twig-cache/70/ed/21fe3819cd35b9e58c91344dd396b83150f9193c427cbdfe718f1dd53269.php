<?php

/* lego/content.intro.twig */
class __TwigTemplate_70ed21fe3819cd35b9e58c91344dd396b83150f9193c427cbdfe718f1dd53269 extends Twig_Template
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
    <div class='grid__item col";
        // line 2
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSizeHeading"), "html", null, true);
        echo " '>
        <div class='block-";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedTop"), "html", null, true);
        echo "'>
            <h1 class='font-primary--light'>
                ";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "strapline")) {
            // line 6
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "strapline"), "html", null, true);
            echo "
                ";
        } else {
            // line 8
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "title"), "html", null, true);
            echo "
                ";
        }
        // line 10
        echo "            </h1>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "intro")) {
            // line 15
            echo "        <div class='grid__item col '>
            <div class='block-";
            // line 16
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked pt-0  ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedBottom"), "html", null, true);
            echo "'>
                <p class='intro'>
                    ";
            // line 18
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "intro"), "html", null, true);
            echo "
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
    ";
        }
        // line 23
        echo "</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.intro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  65 => 16,  62 => 15,  46 => 8,  39 => 6,  27 => 3,  22 => 2,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 18,  71 => 128,  69 => 121,  66 => 120,  64 => 108,  61 => 107,  59 => 14,  56 => 87,  53 => 10,  50 => 61,  47 => 52,  44 => 41,  41 => 32,  38 => 22,  36 => 5,  31 => 4,  28 => 3,);
    }
}
