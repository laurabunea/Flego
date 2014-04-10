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
        echo "<div class='grid '>  
    <div class='grid__item col";
        // line 2
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "'>
        <div class='block-";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
        echo "'>
            <span class=\"tiny uppercase text-nowrap inline-block\">
                <a href=\"anchor here\" >
                    ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "category"), "html", null, true);
        echo "
                </a>
                ·
            </span>
            <span class=\"tiny uppercase text-nowrap\"> 
                ";
        // line 11
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "date"), "html", null, true);
        echo "
            </span>
            <h3 class='";
        // line 13
        if (isset($context["headingSize"])) { $_headingSize_ = $context["headingSize"]; } else { $_headingSize_ = null; }
        echo twig_escape_filter($this->env, $_headingSize_, "html", null, true);
        echo "'>
                ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "title"), "html", null, true);
        echo "
            </h3>
            <p>
                ";
        // line 17
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "desc"), "html", null, true);
        echo "
            </p>
            ";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "article"), "link")) {
            // line 20
            echo "                <p>
                    <a href='";
            // line 21
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "linkAnchor"), "html", null, true);
            echo "'>
                        ";
            // line 22
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "article"), "link"), "html", null, true);
            echo "
                    </a>
                </p>
            ";
        }
        // line 26
        echo "        </div><!--block ends-->
    </div><!-- grid item ends-->
</div><!-- grid ends -->";
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
        return array (  89 => 26,  81 => 22,  76 => 21,  73 => 20,  70 => 19,  64 => 17,  57 => 14,  52 => 13,  46 => 11,  37 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}
