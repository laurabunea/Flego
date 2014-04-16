<?php

/* lego/header.twig */
class __TwigTemplate_d609a072375c7f1daa12a33bbe5314a01bed7da56f2f89b5be28673e12678b44 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blockSize"), "html", null, true);
        echo " block--stacked left'>
        <h1>
          <span class='visually-hidden'>
            <a href='/' class='clean-link'>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "companyName"), "html", null, true);
        echo ",/a>
          </span>
          <img class='' src='' alt='Flego'/>
        </h1>
      </div>
      <ul class='nav right clean-link-list'>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "navigation"));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 14
            echo "          <li class='hidden--q-small'>
               <a href='";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "anchor"), "html", null, true);
            echo "' class='block-m block--stacked inline-block ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
            echo "'>
                   ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
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
        return array (  62 => 20,  46 => 15,  43 => 14,  30 => 7,  24 => 4,  19 => 1,  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 124,  70 => 113,  67 => 112,  65 => 103,  61 => 101,  58 => 90,  56 => 69,  52 => 16,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}
