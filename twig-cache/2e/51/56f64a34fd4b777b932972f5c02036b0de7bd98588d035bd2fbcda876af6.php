<?php

/* lego/comments.twig */
class __TwigTemplate_2e5156f64a34fd4b777b932972f5c02036b0de7bd98588d035bd2fbcda876af6 extends Twig_Template
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
    ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "commentThread"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "        <div class='grid__item ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
            echo "'>
            <div class='block-";
            // line 5
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
                <div class='arrow--left block-xs block--color radius'>
                    <p>
                        ";
            // line 8
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "comment"), "html", null, true);
            echo "
                    </p>
                    <i class='arrow arrow-bottom '></i>
                </div>
                
                    <p class='icon-text uppercase' href='#'>
                        <i class='i circle i-gecko'></i>
                      ";
            // line 15
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "name"), "html", null, true);
            echo "
                        
                    </p>
               
            </div><!--block ends-->
        </div><!-- grid item ends-->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "   
</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  55 => 15,  44 => 8,  34 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
