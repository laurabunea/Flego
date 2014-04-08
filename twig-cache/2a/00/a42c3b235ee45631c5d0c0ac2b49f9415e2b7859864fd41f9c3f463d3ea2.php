<?php

/* lego/content.four-col.twig */
class __TwigTemplate_2a00a42c3b235ee45631c5d0c0ac2b49f9415e2b7859864fd41f9c3f463d3ea2 extends Twig_Template
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
    
    <div class='grid__item col-1-4'>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 class='";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo " '>
                ";
        // line 7
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
        echo "
            </h2>
            <p>
                ";
        // line 10
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "copy"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
        echo "' >
                    ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item col-1-4'>
        <div class='block-";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 class='";
        // line 22
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo " '>
                ";
        // line 23
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
        echo "
            </h2>
            <p>
                ";
        // line 26
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "copy"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 29
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
        echo "' >
                    ";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->

    <div class='grid__item col-1-4'>
        <div class='block-";
        // line 37
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 class='";
        // line 38
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo " '>
                ";
        // line 39
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
        echo "
            </h2>
            <p>
                ";
        // line 42
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "copy"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 45
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
        echo "' >
                    ";
        // line 46
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->

    <div class='grid__item col-1-4'>
        <div class='block-";
        // line 53
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 class='";
        // line 54
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo " ' >
                ";
        // line 55
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "title"), "html", null, true);
        echo "
            </h2>
            <p>
                ";
        // line 58
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "copy"), "html", null, true);
        echo "
            </p>
            <p>
                <a href='";
        // line 61
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
        echo "' >
                    ";
        // line 62
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/content.four-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 62,  184 => 61,  177 => 58,  170 => 55,  165 => 54,  157 => 53,  146 => 46,  140 => 45,  133 => 42,  126 => 39,  121 => 38,  113 => 37,  102 => 30,  96 => 29,  89 => 26,  82 => 23,  77 => 22,  69 => 21,  58 => 14,  52 => 13,  45 => 10,  38 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }
}
