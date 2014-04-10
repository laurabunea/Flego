<?php

/* lego/content.title.twig */
class __TwigTemplate_c623e3a26797c10fc45f6583b7c901d24196594fe87cb804f7db85d8fe31fa68 extends Twig_Template
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
        <div class='relative ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedTop"), "html", null, true);
        echo "'>
            <h1 class='font-primary--light text-center'>
                <span class='block-s block--stacked inline-block white-bg'>
                    ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "content"), "title"), "html", null, true);
        echo "
                </span>
            </h1>
            <hr class='absolute col z-index--push absolute--v-middle'/>
        </div><!--block ends-->
    </div><!-- grid item ends-->
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 3,  19 => 1,  345 => 359,  338 => 357,  325 => 349,  318 => 347,  306 => 340,  294 => 333,  282 => 326,  270 => 319,  258 => 312,  251 => 310,  244 => 308,  231 => 300,  218 => 292,  211 => 290,  204 => 288,  191 => 280,  178 => 272,  171 => 270,  164 => 268,  152 => 261,  142 => 256,  130 => 249,  116 => 237,  114 => 226,  109 => 223,  107 => 201,  104 => 200,  102 => 184,  99 => 183,  97 => 171,  94 => 170,  92 => 163,  89 => 162,  87 => 147,  84 => 146,  82 => 127,  79 => 126,  77 => 111,  74 => 110,  72 => 99,  69 => 98,  67 => 89,  64 => 88,  62 => 79,  59 => 78,  57 => 67,  54 => 66,  52 => 57,  48 => 55,  46 => 45,  43 => 44,  41 => 23,  38 => 22,  36 => 7,  31 => 4,  28 => 3,);
    }
}
