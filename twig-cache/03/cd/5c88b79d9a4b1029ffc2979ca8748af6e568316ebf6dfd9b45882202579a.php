<?php

/* lego/form.twig */
class __TwigTemplate_03cd5c88b79d9a4b1029ffc2979ca8748af6e568316ebf6dfd9b45882202579a extends Twig_Template
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
        echo "<div class='mb-m'>
    <form class=\"grid\">
        
        <div class=\"grid__item col";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo " \">
            <div class=\"block-m block--stacked pb-0\">
                <div class='grid'>
                    <div class='grid__item col'>
                        <label for=\"exampleInputEmail1\" >Email address</label>
                    </div>
                    <div class='grid__item col'>
                        <input type=\"email\" class=\"col text-input\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class=\"grid__item col";
        // line 17
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
            <div class=\"block-m block--stacked pb-0\">
                <div class='grid'>

                    <div class='grid__item col'>
                        <label for=\"exampleInputPassword1\">Password</label>
                    </div>
                    <div class='grid__item col'>
                        
                        <input type=\"password\" class=\"col text-input\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->
        
        <div class=\"grid__item col";
        // line 32
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        
                        <div class=\"checkbox grid__item\">
                            <label>
                            <input type=\"checkbox\"> Check me out
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class=\"grid__item col";
        // line 47
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "lego/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 32,  37 => 9,  32 => 8,  78 => 24,  58 => 16,  52 => 14,  26 => 6,  51 => 11,  80 => 20,  67 => 14,  42 => 6,  34 => 5,  23 => 3,  83 => 25,  62 => 15,  39 => 6,  27 => 3,  22 => 2,  65 => 14,  54 => 18,  49 => 15,  46 => 8,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 29,  86 => 181,  84 => 159,  81 => 158,  79 => 47,  76 => 141,  74 => 18,  71 => 21,  69 => 121,  66 => 120,  64 => 18,  61 => 13,  59 => 19,  56 => 12,  53 => 10,  50 => 61,  47 => 7,  44 => 12,  41 => 17,  38 => 22,  36 => 8,  31 => 7,  28 => 4,);
    }
}
