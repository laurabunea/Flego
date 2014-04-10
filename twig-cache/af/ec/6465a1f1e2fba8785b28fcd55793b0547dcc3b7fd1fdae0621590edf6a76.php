<?php

/* lego/content.list.twig */
class __TwigTemplate_afec6465a1f1e2fba8785b28fcd55793b0547dcc3b7fd1fdae0621590edf6a76 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "content"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "    <div class='grid__item col";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
            echo "'>
        <p>
            <a href='' class='block-element block-";
            // line 6
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
            echo " block--stacked ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "themeAttr"), "html", null, true);
            echo "'>
                ";
            // line 7
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_value_, "town"), "html", null, true);
            echo "
            </a>
        </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>

   ";
    }

    public function getTemplateName()
    {
        return "lego/content.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  35 => 6,  23 => 3,  19 => 1,  337 => 356,  325 => 349,  318 => 347,  306 => 340,  294 => 333,  282 => 326,  270 => 319,  258 => 312,  251 => 310,  244 => 308,  231 => 300,  218 => 292,  211 => 290,  204 => 288,  191 => 280,  178 => 272,  171 => 270,  164 => 268,  152 => 261,  142 => 256,  130 => 249,  116 => 237,  114 => 226,  109 => 223,  107 => 201,  104 => 200,  102 => 184,  99 => 183,  97 => 171,  94 => 170,  92 => 163,  89 => 162,  87 => 147,  84 => 146,  82 => 127,  79 => 126,  77 => 111,  74 => 110,  72 => 99,  69 => 98,  67 => 89,  64 => 88,  62 => 79,  59 => 78,  57 => 67,  54 => 66,  52 => 57,  48 => 55,  46 => 45,  43 => 7,  41 => 23,  38 => 22,  36 => 7,  31 => 4,  28 => 4,);
    }
}
