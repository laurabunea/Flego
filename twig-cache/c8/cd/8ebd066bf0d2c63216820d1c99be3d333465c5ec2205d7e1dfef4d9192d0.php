<?php

/* lego/gallery.list.twig */
class __TwigTemplate_c8cd8ebd066bf0d2c63216820d1c99be3d333465c5ec2205d7e1dfef4d9192d0 extends Twig_Template
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
        echo "<div class='grid gallery'>
    <!-- loop over gallery items -->  
    ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "gallery"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "        <div class='grid__item col";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
            echo " gallery--item'>
            <div class='block-";
            // line 5
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>         
                <img src='";
            // line 6
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "image"), "html", null, true);
            echo "' class='img--responsive' alt='";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "caption"), "html", null, true);
            echo "' title='";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "caption"), "html", null, true);
            echo "'> 
            </div><!--block ends-->
        </div><!--grid item ends-->
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/gallery.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  58 => 16,  52 => 14,  26 => 6,  51 => 11,  80 => 20,  67 => 14,  42 => 6,  34 => 5,  23 => 3,  83 => 25,  62 => 15,  39 => 6,  27 => 3,  22 => 2,  65 => 14,  54 => 10,  49 => 15,  46 => 8,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 29,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 18,  71 => 21,  69 => 121,  66 => 120,  64 => 18,  61 => 13,  59 => 10,  56 => 12,  53 => 10,  50 => 61,  47 => 7,  44 => 41,  41 => 13,  38 => 22,  36 => 8,  31 => 7,  28 => 4,);
    }
}
