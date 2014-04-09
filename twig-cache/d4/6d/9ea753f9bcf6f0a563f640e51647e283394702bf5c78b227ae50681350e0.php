<?php

/* lego/barchart.twig */
class __TwigTemplate_d46d9ea753f9bcf6f0a563f640e51647e283394702bf5c78b227ae50681350e0 extends Twig_Template
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
        echo "<div class='grid grid--middle'>
    ";
        // line 2
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "barchart"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 3
            echo "        <div class='grid__item col-2-10 col--q-small'>
            <div class='block-";
            // line 4
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
               <p class='font-primary--light h1'>";
            // line 5
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "</p>
            </div><!--block ends-->
        </div><!-- grid item ends-->
        
        <div class='grid__item col-8-10 col--q-small'>
            <div class='block-";
            // line 10
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo " pt-0--q-small'>
                <p>
                    ";
            // line 12
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "desc"), "html", null, true);
            echo "
                </p>
                <div class='barchart col '>
                    <span class=\"meter block-element\" style=\"height:100%;width: ";
            // line 15
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "percentage"), "html", null, true);
            echo "\"></span>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/barchart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  63 => 15,  56 => 12,  47 => 10,  38 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
