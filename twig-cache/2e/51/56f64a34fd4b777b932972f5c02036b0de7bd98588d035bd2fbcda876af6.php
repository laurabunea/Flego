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
        echo "<div class='grid'>
    <!-- loop through comments-->
    ";
        // line 3
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "commentThread"));
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
        // line 20
        echo "</div><!-- ends -->
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
        return array (  67 => 20,  55 => 15,  34 => 5,  23 => 3,  57 => 14,  52 => 13,  46 => 11,  37 => 6,  27 => 3,  22 => 2,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 21,  74 => 129,  71 => 20,  69 => 121,  66 => 120,  64 => 17,  61 => 107,  59 => 88,  56 => 87,  53 => 72,  50 => 61,  47 => 52,  44 => 8,  41 => 32,  38 => 22,  36 => 7,  31 => 4,  28 => 4,);
    }
}
