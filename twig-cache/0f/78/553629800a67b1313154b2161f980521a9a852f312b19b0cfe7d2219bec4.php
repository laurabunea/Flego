<?php

/* lego/article.list.twig */
class __TwigTemplate_0f78553629800a67b1313154b2161f980521a9a852f312b19b0cfe7d2219bec4 extends Twig_Template
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
<div class='grid '>
    
    <div class='grid__item col'>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <span class=\"tiny uppercase text-nowrap inline-block\">
                <a href=\"anchor here\" >
                    Television
                </a>
                ·
            </span>
            <span class=\"tiny uppercase text-nowrap\"> 
                2nd April 2014 
            </span>
            <h3 class='";
        // line 15
        if (isset($context["headingSize"])) { $_headingSize_ = $context["headingSize"]; } else { $_headingSize_ = null; }
        echo twig_escape_filter($this->env, $_headingSize_, "html", null, true);
        echo " '>
                ";
        // line 16
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
        echo "
            </h3>
            <p>
                ";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "copy"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 22
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
        echo "'>
                    ";
        // line 23
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!-- grid item ends-->
   
</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/article.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  47 => 16,  42 => 15,  190 => 62,  184 => 61,  177 => 58,  170 => 55,  165 => 54,  157 => 53,  146 => 46,  140 => 45,  133 => 42,  126 => 39,  113 => 37,  102 => 30,  96 => 29,  89 => 26,  82 => 23,  77 => 22,  69 => 21,  134 => 46,  128 => 45,  121 => 38,  114 => 39,  105 => 37,  94 => 30,  88 => 29,  81 => 26,  74 => 23,  65 => 21,  54 => 19,  48 => 13,  41 => 10,  34 => 7,  52 => 13,  45 => 10,  38 => 7,  68 => 17,  61 => 22,  58 => 14,  50 => 13,  43 => 8,  36 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }
}
