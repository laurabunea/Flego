<?php

/* lego/header.twig */
class __TwigTemplate_aa359e4013a5b04cd398e1e6a57b897de7867bb7db21320a0522f1867374c532 extends Twig_Template
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
    
    <div class='grid__item col'>
      <div class='block-";
        // line 4
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "blockSize"), "html", null, true);
        echo " block--stacked left'>
        <h1>
          <span class=\"visually-hidden\">
            ";
        // line 7
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "companyName"), "html", null, true);
        echo "
          </span>
          <img class='' src='' alt='logo here '/>
        </h1>
      </div>
      <ul class='nav right clean-link-list'>
        ";
        // line 13
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "navigation"));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 14
            echo "          <li>
               <a href='' class='block-m block--stacked inline-block ";
            // line 15
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
                   ";
            // line 16
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
            echo "
               </a> 
            </li>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div><!-- grid item ends-->

</div><!-- ends -->";
    }

    public function getTemplateName()
    {
        return "lego/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  54 => 16,  49 => 15,  46 => 14,  24 => 4,  19 => 1,  276 => 291,  269 => 289,  258 => 283,  247 => 277,  235 => 270,  226 => 263,  215 => 255,  208 => 253,  201 => 251,  188 => 243,  175 => 235,  168 => 233,  161 => 231,  151 => 226,  140 => 220,  133 => 218,  126 => 216,  113 => 208,  101 => 201,  93 => 195,  91 => 184,  86 => 181,  84 => 159,  81 => 158,  79 => 142,  76 => 141,  74 => 129,  71 => 128,  69 => 121,  66 => 120,  64 => 108,  61 => 107,  59 => 88,  56 => 87,  53 => 72,  50 => 61,  47 => 52,  44 => 41,  41 => 13,  38 => 22,  36 => 7,  31 => 7,  28 => 3,);
    }
}
