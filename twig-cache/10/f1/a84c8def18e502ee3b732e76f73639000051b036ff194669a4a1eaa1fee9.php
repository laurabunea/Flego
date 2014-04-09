<?php

/* lego/panel.twig */
class __TwigTemplate_10f1a84c8def18e502ee3b732e76f73639000051b036ff194669a4a1eaa1fee9 extends Twig_Template
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

            <div class='grid '>
                <div class='grid__item col-3-4 col--q-small'>
                    <div class='mr-m'>
                        <h2 class='";
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
        echo "'>
                            ";
        // line 9
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "title"), "html", null, true);
        echo "
                        </h2>
                        
                        <p>
                            ";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "desc"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col--q-small align--bottom'>
                    
                    <a href='";
        // line 19
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "btnLink"), "html", null, true);
        echo "' class='btn right col border-box mt-m--q-small'>
                        ";
        // line 20
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "panel"), "btnTitle"), "html", null, true);
        echo "
                    </a>
                    
                </div>
            </div>
        </div><!--block ends-->
    </div><!-- grid item ends-->
  
</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  55 => 19,  45 => 13,  37 => 9,  32 => 8,  23 => 3,  19 => 1,);
    }
}
