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
        // line 8
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "companyName"), "html", null, true);
        echo "
          </span>
          <img class='' src='' alt='logo here '/>
        </h1>
      </div>
      <ul class='nav right clean-link-list'>
        ";
        // line 14
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "navigation"));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 15
            echo "          <li>
               <a href='' class='block-m block--stacked inline-block ";
            // line 16
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "isStacked"), "html", null, true);
            echo "'>
                   ";
            // line 17
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
        // line 21
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
        return array (  66 => 21,  47 => 15,  32 => 8,  24 => 4,  19 => 1,  207 => 215,  198 => 208,  187 => 200,  180 => 198,  173 => 196,  160 => 188,  153 => 186,  146 => 184,  132 => 175,  125 => 173,  118 => 171,  107 => 165,  95 => 158,  85 => 153,  82 => 152,  80 => 141,  75 => 138,  73 => 116,  70 => 115,  68 => 99,  65 => 98,  63 => 86,  60 => 85,  58 => 78,  55 => 17,  53 => 65,  50 => 16,  48 => 45,  45 => 44,  42 => 14,  39 => 18,  37 => 8,  31 => 4,  28 => 3,);
    }
}
