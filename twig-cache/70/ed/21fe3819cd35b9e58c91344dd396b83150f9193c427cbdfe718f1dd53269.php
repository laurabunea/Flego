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
    <div class='grid__item col-3-4 '>
        <div class='block-";
        // line 3
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
        if ($this->getAttribute($_data_, "strapline")) {
            // line 7
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "strapline"), "html", null, true);
            echo "
                ";
        } else {
            // line 9
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
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
        if ($this->getAttribute($_data_, "intro")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "intro"), "html", null, true);
            echo "
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
    ";
        }
        // line 24
        echo "</div><!-- ends -->
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
        return array (  80 => 24,  71 => 19,  62 => 17,  59 => 16,  56 => 15,  50 => 11,  43 => 9,  36 => 7,  33 => 6,  23 => 3,  19 => 1,);
    }
}
