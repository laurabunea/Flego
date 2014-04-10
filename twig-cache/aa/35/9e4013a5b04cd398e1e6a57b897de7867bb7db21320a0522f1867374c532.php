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
            <a href='/' class='clean-link'>";
        // line 7
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "companyName"), "html", null, true);
        echo ",/a>
          </span>
          <img class='' src='' alt='Flego'/>
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
            echo "          <li class='hidden--q-small'>
               <a href='";
            // line 15
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "anchor"), "html", null, true);
            echo "' class='block-m block--stacked inline-block ";
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
        echo "        <li class='visible--q-small hidden--q-large hidden--q-medium hidden--q-large hidden--q-xlarge'>
          <a href='#anchor' class='block-m block--stacked inline-block'>
            <i class='i i-menu inline-block'></i>
          </a>
        </li>
      </ul>
      
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
        return array (  68 => 20,  57 => 16,  49 => 15,  46 => 14,  41 => 13,  31 => 7,  24 => 4,  19 => 1,);
    }
}
