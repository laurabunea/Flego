<?php

/* lego/content.block.twig */
class __TwigTemplate_a1a63a40809b561f5a68bd2dd31a9b5aff2cca255394b2f14eef4cff6a8297c9 extends Twig_Template
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
    <!--loop through content blocks-->
    ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "content"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "        <div class='grid__item col";
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
                <h2 class='";
            // line 6
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "headingSize"), "html", null, true);
            echo "'>
                    ";
            // line 7
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "heading"), "html", null, true);
            echo "
                </h2>
                
                <p>
                    ";
            // line 11
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "copy"), "html", null, true);
            echo "
                </p>
                <p>
                    <a href='";
            // line 14
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_data_, "link") - $_href_), "html", null, true);
            echo "'>
                        ";
            // line 15
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "link"), "html", null, true);
            echo "
                    </a>
                </p>
            </div><!--block ends-->
        </div><!-- grid item ends-->
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "lego/content.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  68 => 15,  55 => 11,  47 => 7,  42 => 6,  34 => 5,  28 => 4,  23 => 3,  83 => 23,  74 => 18,  65 => 16,  62 => 14,  59 => 14,  53 => 10,  46 => 8,  39 => 6,  36 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
