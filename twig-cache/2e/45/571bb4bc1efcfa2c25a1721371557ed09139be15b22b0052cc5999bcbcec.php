<?php

/* lego/content.one-col.twig */
class __TwigTemplate_2e45571bb4bc1efcfa2c25a1721371557ed09139be15b22b0052cc5999bcbcec extends Twig_Template
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
            <h2 class='";
        // line 6
        if (isset($context["headingSize"])) { $_headingSize_ = $context["headingSize"]; } else { $_headingSize_ = null; }
        echo twig_escape_filter($this->env, $_headingSize_, "html", null, true);
        echo "' >
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
   
</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/content.one-col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 10,  38 => 7,  68 => 17,  61 => 15,  58 => 14,  50 => 13,  43 => 8,  36 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }
}
