<?php

/* lego/content.two-col.twig */
class __TwigTemplate_6b927e9465d1801abeb882ab9d3f95107d10bd851b52617763d0bb051ec26d83 extends Twig_Template
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
    
    <div class='grid__item col-2-4 '>
        <div class='block-";
        // line 5
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 >
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
        echo "'>
                    ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item col-2-4 '>
        <div class='block-";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <h2 >
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
        echo "'>
                    ";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "link"), "html", null, true);
        echo "
                </a>
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.two-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  88 => 29,  81 => 26,  74 => 23,  65 => 21,  54 => 14,  48 => 13,  41 => 10,  34 => 7,  52 => 13,  45 => 10,  38 => 7,  68 => 17,  61 => 15,  58 => 14,  50 => 13,  43 => 8,  36 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }
}
