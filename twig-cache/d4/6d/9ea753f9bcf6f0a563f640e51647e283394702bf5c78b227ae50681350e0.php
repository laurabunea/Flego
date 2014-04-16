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
            echo "        
        <div class='grid__item col-2-10 col--q-small'>
            <div class='block-";
            // line 6
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
               <p class='font-primary--light h1'>";
            // line 7
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "</p>
            </div><!--block ends-->
        </div><!-- grid item ends-->
        
        <div class='grid__item col-8-10 col--q-small'>
            <div class='block-";
            // line 12
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo " pt-0--q-small'>
                <p>
                    ";
            // line 14
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "desc"), "html", null, true);
            echo "
                </p>
                <div class='barchart col '>
                    <span class='meter block-element' style='height:100%;width: ";
            // line 17
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "'></span>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
        
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return array (  32 => 6,  81 => 25,  64 => 20,  50 => 15,  34 => 10,  45 => 13,  33 => 9,  29 => 5,  82 => 23,  77 => 22,  74 => 22,  71 => 20,  38 => 10,  43 => 12,  35 => 6,  69 => 15,  56 => 11,  36 => 6,  84 => 24,  66 => 17,  54 => 16,  40 => 7,  23 => 3,  57 => 17,  46 => 9,  41 => 13,  24 => 4,  19 => 1,  381 => 499,  377 => 495,  372 => 492,  368 => 488,  363 => 485,  358 => 479,  354 => 476,  349 => 473,  344 => 467,  340 => 463,  332 => 457,  328 => 454,  323 => 451,  318 => 445,  314 => 440,  309 => 437,  304 => 431,  300 => 426,  295 => 423,  291 => 418,  286 => 415,  282 => 410,  276 => 406,  271 => 400,  267 => 396,  262 => 393,  257 => 387,  253 => 380,  248 => 377,  244 => 370,  239 => 367,  235 => 360,  230 => 357,  225 => 351,  221 => 345,  216 => 342,  213 => 338,  209 => 331,  203 => 327,  199 => 320,  193 => 316,  188 => 310,  184 => 305,  179 => 302,  175 => 297,  170 => 294,  166 => 288,  159 => 283,  155 => 277,  150 => 274,  145 => 268,  141 => 262,  136 => 259,  131 => 253,  127 => 249,  122 => 246,  117 => 240,  115 => 229,  110 => 226,  108 => 204,  105 => 203,  103 => 187,  100 => 186,  98 => 174,  95 => 173,  93 => 165,  90 => 27,  88 => 149,  85 => 148,  83 => 22,  80 => 128,  78 => 23,  75 => 19,  73 => 101,  70 => 22,  68 => 21,  65 => 17,  63 => 14,  60 => 20,  58 => 14,  55 => 19,  53 => 14,  49 => 12,  47 => 12,  44 => 7,  42 => 24,  39 => 23,  37 => 11,  31 => 5,  28 => 4,);
    }
}
