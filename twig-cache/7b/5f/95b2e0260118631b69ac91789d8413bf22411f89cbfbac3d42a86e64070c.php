<?php

/* lego/panel.alert.twig */
class __TwigTemplate_7b5f95b2e0260118631b69ac91789d8413bf22411f89cbfbac3d42a86e64070c extends Twig_Template
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
    <div class='grid__item col'>
        <div class='block-";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " primary--border mt-m ml-m mr-m mb-m radius '>
            <div class='grid relative'>
                <span class=\"close absolute--top-right text-top\"></span>
                <div class='grid__item col'>
                    <div class='mr-m'>
                        ";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "panel"), "title")) {
            // line 9
            echo "                            <h2 class='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
            echo "'>
                                ";
            // line 10
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "title"), "html", null, true);
            echo "
                            </h2>
                        ";
        }
        // line 13
        echo "                        ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "panel"), "desc")) {
            // line 14
            echo "                            <p>
                                ";
            // line 15
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "desc"), "html", null, true);
            echo "
                            </p>
                        ";
        }
        // line 18
        echo "                        ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "panel"), "btnTitle")) {
            // line 19
            echo "                            <a href='";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "btnLink"), "html", null, true);
            echo "' class='btn border-box mt-m'>
                                ";
            // line 20
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "btnTitle"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 23
        echo "                        
                    </div>
                </div><!--grid item ends-->
            </div>
        </div><!--block ends-->
    </div><!-- grid item ends-->
</div><!-- grid ends -->";
    }

    public function getTemplateName()
    {
        return "lego/panel.alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  72 => 20,  66 => 19,  62 => 18,  55 => 15,  52 => 14,  48 => 13,  41 => 10,  35 => 9,  32 => 8,  23 => 3,  19 => 1,);
    }
}
