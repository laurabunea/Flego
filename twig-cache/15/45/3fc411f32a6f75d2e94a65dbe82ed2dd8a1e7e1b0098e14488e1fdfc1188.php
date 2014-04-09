<?php

/* lego/gallery.two-col-with-caption.twig */
class __TwigTemplate_15453fc411f32a6f75d2e94a65dbe82ed2dd8a1e7e1b0098e14488e1fdfc1188 extends Twig_Template
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
    
    <div class='grid__item col-2-4 gallery--item'>
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
    
    <div class='grid__item col-2-4 gallery--item'>
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
   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/gallery.two-col-with-caption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  84 => 30,  77 => 27,  74 => 26,  67 => 24,  64 => 23,  53 => 16,  46 => 13,  39 => 10,  54 => 17,  47 => 15,  44 => 14,  36 => 9,  29 => 7,  26 => 6,  19 => 1,);
    }
}
