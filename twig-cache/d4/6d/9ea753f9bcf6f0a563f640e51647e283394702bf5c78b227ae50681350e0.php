<?php

/* lego/barchart.twig */
class __TwigTemplate_d46d9ea753f9bcf6f0a563f640e51647e283394702bf5c78b227ae50681350e0 extends Twig_Template
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
        echo "<div class='grid grid--middle'>
    <!--loop through percentages -->
    ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "barchart"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "        <div class='grid__item col-2-10 col--q-small'>
            <div class='block-";
            // line 5
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
               <p class='font-primary--light h1'>";
            // line 6
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "</p>
            </div><!--block ends-->
        </div><!-- grid item ends-->
        
        <div class='grid__item col-8-10 col--q-small'>
            <div class='block-";
            // line 11
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo " pt-0--q-small'>
                <p>
                    ";
            // line 13
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "desc"), "html", null, true);
            echo "
                </p>
                <div class='barchart col '>
                    <span class=\"meter block-element\" style=\"height:100%;width: ";
            // line 16
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "\"></span>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/barchart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  39 => 6,  67 => 20,  55 => 15,  34 => 5,  23 => 3,  57 => 13,  52 => 13,  46 => 11,  37 => 6,  27 => 3,  22 => 2,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 21,  74 => 129,  71 => 20,  69 => 121,  66 => 120,  64 => 16,  61 => 107,  59 => 88,  56 => 87,  53 => 72,  50 => 61,  47 => 52,  44 => 8,  41 => 32,  38 => 22,  36 => 7,  31 => 5,  28 => 4,);
    }
}
