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
            echo "        <div class='grid__item ";
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
        return array (  34 => 5,  23 => 3,  19 => 1,  247 => 176,  234 => 168,  221 => 160,  208 => 152,  195 => 144,  182 => 136,  169 => 128,  157 => 121,  145 => 114,  133 => 107,  121 => 100,  114 => 98,  101 => 90,  94 => 88,  87 => 86,  75 => 79,  68 => 74,  66 => 63,  61 => 60,  59 => 10,  56 => 53,  54 => 46,  49 => 43,  47 => 39,  44 => 38,  42 => 6,  39 => 18,  37 => 8,  31 => 4,  28 => 4,);
    }
}
