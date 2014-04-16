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
    <form class='grid'>
        
        <div class='grid__item col";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        <label for='exampleInputEmail1'>
                            Email address
                        </label>
                    </div>
                    <div class='grid__item col'>
                        <input type='email' class='col text-input' id='exampleInputEmail1' placeholder='Enter email'>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class='grid__item col";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>

                    <div class='grid__item col'>
                        <label for='exampleInputPassword1'>
                            Password
                        </label>
                    </div>
                    <div class='grid__item col'>
                        
                        <input type='password' class='col text-input' id='exampleInputPassword1' placeholder='Password'>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->
        
        <div class='grid__item col";
        // line 36
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        
                        <div class='checkbox grid__item'>
                            <label>
                            <input type='checkbox'> 
                            Check me out
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--grid item ends-->

        <div class='grid__item col";
        // line 52
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
            <div class='block-m block--stacked pb-0'>
                <div class='grid'>
                    <div class='grid__item col'>
                        <button type='submit' class='btn btn-default'>Submit</button>
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
        return array (  32 => 6,  81 => 25,  64 => 36,  50 => 15,  34 => 10,  45 => 13,  33 => 9,  29 => 5,  82 => 23,  77 => 22,  74 => 22,  71 => 20,  38 => 10,  43 => 19,  35 => 6,  69 => 15,  56 => 11,  36 => 6,  84 => 52,  66 => 17,  54 => 16,  40 => 7,  23 => 3,  57 => 17,  46 => 9,  41 => 13,  24 => 4,  19 => 1,  381 => 499,  377 => 495,  372 => 492,  368 => 488,  363 => 485,  358 => 479,  354 => 476,  349 => 473,  344 => 467,  340 => 463,  332 => 457,  328 => 454,  323 => 451,  318 => 445,  314 => 440,  309 => 437,  304 => 431,  300 => 426,  295 => 423,  291 => 418,  286 => 415,  282 => 410,  276 => 406,  271 => 400,  267 => 396,  262 => 393,  257 => 387,  253 => 380,  248 => 377,  244 => 370,  239 => 367,  235 => 360,  230 => 357,  225 => 351,  221 => 345,  216 => 342,  213 => 338,  209 => 331,  203 => 327,  199 => 320,  193 => 316,  188 => 310,  184 => 305,  179 => 302,  175 => 297,  170 => 294,  166 => 288,  159 => 283,  155 => 277,  150 => 274,  145 => 268,  141 => 262,  136 => 259,  131 => 253,  127 => 249,  122 => 246,  117 => 240,  115 => 229,  110 => 226,  108 => 204,  105 => 203,  103 => 187,  100 => 186,  98 => 174,  95 => 173,  93 => 165,  90 => 27,  88 => 149,  85 => 148,  83 => 22,  80 => 128,  78 => 23,  75 => 19,  73 => 101,  70 => 22,  68 => 21,  65 => 17,  63 => 14,  60 => 20,  58 => 14,  55 => 19,  53 => 14,  49 => 12,  47 => 12,  44 => 7,  42 => 24,  39 => 23,  37 => 11,  31 => 5,  28 => 4,);
    }
}
