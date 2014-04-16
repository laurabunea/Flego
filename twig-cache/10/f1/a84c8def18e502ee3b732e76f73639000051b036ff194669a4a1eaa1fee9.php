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
        echo "<div class='grid'>

    <div class='grid__item col'>
        <div class='block-";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " primary--border mt-m ml-m mr-m mb-m radius'>
            <div class='grid '>
                
                <div class='grid__item col-3-4 col--q-small'>
                    <div class='mr-m'>
                        <h2 class='";
        // line 9
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo "'>
                            ";
        // line 10
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "title"), "html", null, true);
        echo "
                        </h2>
                        <p>
                            ";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "desc"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div><!--grid item ends-->
                
                <div class='grid__item col-1-4 col--q-small align--bottom'>
                    <a href='";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "btnLink"), "html", null, true);
        echo "' class='btn right col border-box mt-m--q-small'>
                        ";
        // line 20
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
        return array (  45 => 13,  33 => 9,  29 => 5,  82 => 23,  77 => 22,  74 => 21,  71 => 20,  38 => 10,  43 => 7,  35 => 6,  69 => 15,  56 => 11,  36 => 6,  84 => 24,  66 => 17,  54 => 11,  40 => 7,  23 => 3,  57 => 16,  46 => 9,  41 => 13,  24 => 4,  19 => 1,  381 => 499,  377 => 495,  372 => 492,  368 => 488,  363 => 485,  358 => 479,  354 => 476,  349 => 473,  344 => 467,  340 => 463,  332 => 457,  328 => 454,  323 => 451,  318 => 445,  314 => 440,  309 => 437,  304 => 431,  300 => 426,  295 => 423,  291 => 418,  286 => 415,  282 => 410,  276 => 406,  271 => 400,  267 => 396,  262 => 393,  257 => 387,  253 => 380,  248 => 377,  244 => 370,  239 => 367,  235 => 360,  230 => 357,  225 => 351,  221 => 345,  216 => 342,  213 => 338,  209 => 331,  203 => 327,  199 => 320,  193 => 316,  188 => 310,  184 => 305,  179 => 302,  175 => 297,  170 => 294,  166 => 288,  159 => 283,  155 => 277,  150 => 274,  145 => 268,  141 => 262,  136 => 259,  131 => 253,  127 => 249,  122 => 246,  117 => 240,  115 => 229,  110 => 226,  108 => 204,  105 => 203,  103 => 187,  100 => 186,  98 => 174,  95 => 173,  93 => 165,  90 => 27,  88 => 149,  85 => 148,  83 => 22,  80 => 128,  78 => 113,  75 => 19,  73 => 101,  70 => 22,  68 => 20,  65 => 18,  63 => 14,  60 => 20,  58 => 15,  55 => 19,  53 => 14,  49 => 8,  47 => 12,  44 => 7,  42 => 24,  39 => 23,  37 => 6,  31 => 5,  28 => 4,);
    }
}
