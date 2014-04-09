<?php

/* lego/gallery.three-col-with-caption.twig */
class __TwigTemplate_b9d11a30eb35446d502d05e351299cfba378efc0e4f1a600209ef08a664961c3 extends Twig_Template
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
<div class='grid gallery'>
    
    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 7
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 9
        echo "            <p class='text-muted'>
                ";
        // line 10
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagesubtitle"), "html", null, true);
        echo "
            </p>
            <h4>
                ";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagetitle"), "html", null, true);
        echo "
            </h4>
            <p>
                ";
        // line 16
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagecaption"), "html", null, true);
        echo "
            </p>
        </div><!--block ends-->
    </div><!-- grid item ends-->
    
    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 23
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 24
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 26
        echo "            <p class='text-muted'>
                ";
        // line 27
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagesubtitle"), "html", null, true);
        echo "
            </p>
            <h4>
                ";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagetitle"), "html", null, true);
        echo "
            </h4>
            <p>
                ";
        // line 33
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagecaption"), "html", null, true);
        echo "
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->

    <div class='grid__item col-1-3 gallery--item'>
        <div class='block-m block--stacked'>
            ";
        // line 40
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "image")) {
            // line 41
            echo "                <img src='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image"), "html", null, true);
            echo "' class='img--responsive' alt=''>
            ";
        }
        // line 43
        echo "            <p class='text-muted'>
                ";
        // line 44
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagesubtitle"), "html", null, true);
        echo "
            </p>
            <h4>
                ";
        // line 47
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagetitle"), "html", null, true);
        echo "
            </h4>
            <p>
                ";
        // line 50
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "imagecaption"), "html", null, true);
        echo "
            </p>
        </div><!--block ends-->
    </div><!--grid item ends-->
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/gallery.three-col-with-caption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  122 => 47,  115 => 44,  112 => 43,  105 => 41,  102 => 40,  91 => 33,  84 => 30,  77 => 27,  64 => 23,  29 => 7,  26 => 6,  19 => 1,  88 => 21,  81 => 19,  74 => 26,  67 => 24,  60 => 13,  53 => 16,  46 => 13,  39 => 10,  36 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
