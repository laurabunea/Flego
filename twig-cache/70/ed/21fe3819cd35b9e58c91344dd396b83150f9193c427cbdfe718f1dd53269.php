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
        echo "
<div class='grid'>
    
    <div class='grid__item col-3-4 '>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedTop"), "html", null, true);
        echo "'>
            <h1 class='font-primary--light'>
                
                ";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "strapline")) {
            // line 9
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "strapline"), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                    ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "            </h1>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    ";
        // line 17
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "intro")) {
            // line 18
            echo "        <div class='grid__item col '>
            <div class='block-";
            // line 19
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked pt-0  ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStackedBottom"), "html", null, true);
            echo "'>
                <p class='intro'>
                    ";
            // line 21
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "intro"), "html", null, true);
            echo "
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
    ";
        }
        // line 26
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
        return array (  82 => 26,  73 => 21,  64 => 19,  61 => 18,  58 => 17,  52 => 13,  45 => 11,  38 => 9,  35 => 8,  25 => 5,  1012 => 964,  1001 => 960,  993 => 959,  990 => 958,  985 => 957,  975 => 951,  24 => 4,  19 => 1,);
    }
}
