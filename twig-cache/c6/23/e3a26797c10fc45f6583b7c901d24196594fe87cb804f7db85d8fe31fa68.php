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
        return array (  30 => 6,  23 => 3,  19 => 1,);
    }
}
