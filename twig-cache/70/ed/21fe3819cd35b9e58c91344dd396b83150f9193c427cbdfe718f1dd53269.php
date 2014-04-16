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
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSizeHeading"), "html", null, true);
        echo " '>
        <div class='block-";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedTop"), "html", null, true);
        echo "'>
            <h1 class='font-primary--light'>
                ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "strapline")) {
            // line 7
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "strapline"), "html", null, true);
            echo "
                ";
        } else {
            // line 9
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "title"), "html", null, true);
            echo "
                ";
        }
        // line 11
        echo "            </h1>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    ";
        // line 15
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "content"), "intro")) {
            // line 16
            echo "        <div class='grid__item col '>
            <div class='block-";
            // line 17
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked pt-0  ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedBottom"), "html", null, true);
            echo "'>
                <p class='intro'>
                    ";
            // line 19
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "intro"), "html", null, true);
            echo "
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
    ";
        }
        // line 24
        echo "    
</div><!-- ends -->
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
        return array (  84 => 24,  66 => 17,  54 => 11,  40 => 7,  23 => 3,  57 => 16,  46 => 14,  41 => 13,  24 => 4,  19 => 1,  381 => 499,  377 => 495,  372 => 492,  368 => 488,  363 => 485,  358 => 479,  354 => 476,  349 => 473,  344 => 467,  340 => 463,  332 => 457,  328 => 454,  323 => 451,  318 => 445,  314 => 440,  309 => 437,  304 => 431,  300 => 426,  295 => 423,  291 => 418,  286 => 415,  282 => 410,  276 => 406,  271 => 400,  267 => 396,  262 => 393,  257 => 387,  253 => 380,  248 => 377,  244 => 370,  239 => 367,  235 => 360,  230 => 357,  225 => 351,  221 => 345,  216 => 342,  213 => 338,  209 => 331,  203 => 327,  199 => 320,  193 => 316,  188 => 310,  184 => 305,  179 => 302,  175 => 297,  170 => 294,  166 => 288,  159 => 283,  155 => 277,  150 => 274,  145 => 268,  141 => 262,  136 => 259,  131 => 253,  127 => 249,  122 => 246,  117 => 240,  115 => 229,  110 => 226,  108 => 204,  105 => 203,  103 => 187,  100 => 186,  98 => 174,  95 => 173,  93 => 165,  90 => 164,  88 => 149,  85 => 148,  83 => 129,  80 => 128,  78 => 113,  75 => 19,  73 => 101,  70 => 100,  68 => 20,  65 => 90,  63 => 16,  60 => 15,  58 => 69,  55 => 68,  53 => 59,  49 => 15,  47 => 9,  44 => 45,  42 => 24,  39 => 23,  37 => 6,  31 => 7,  28 => 4,);
    }
}
