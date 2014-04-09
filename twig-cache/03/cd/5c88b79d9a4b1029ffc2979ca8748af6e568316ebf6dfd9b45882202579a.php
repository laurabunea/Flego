<?php

/* lego/form.twig */
class __TwigTemplate_03cd5c88b79d9a4b1029ffc2979ca8748af6e568316ebf6dfd9b45882202579a extends Twig_Template
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
";
        // line 5
        echo "        ";
        // line 6
        echo "        <div class='mb-m'>
            <form class=\"grid\">
                
                <div class=\"grid__item col";
        // line 9
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo " \">
                    <div class=\"block-m block--stacked pb-0\">
                        <div class='grid'>
                            <div class='grid__item col'>
                                <label for=\"exampleInputEmail1\" >Email address</label>
                            </div>
                            <div class='grid__item col'>
                                <input type=\"email\" class=\"col text-input\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"grid__item col";
        // line 21
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
                    <div class=\"block-m block--stacked pb-0\">
                        <div class='grid'>

                            <div class='grid__item col'>
                                <label for=\"exampleInputPassword1\">Password</label>
                            </div>
                            <div class='grid__item col'>
                                
                                <input type=\"password\" class=\"col text-input\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"grid__item col";
        // line 36
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
                    <div class='block-m block--stacked pb-0'>
                        <div class='grid'>
                            <div class='grid__item col'>
                                
                                <div class=\"checkbox grid__item\">
                                    <label>
                                    <input type=\"checkbox\"> Check me out
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"grid__item col";
        // line 50
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "colSize"), "html", null, true);
        echo "\">
                    <div class='block-m block--stacked pb-0'>
                        <div class='grid'>
                            <div class='grid__item col'>
                                <button type=\"submit\" class=\"btn btn-default\">Submit</button>        
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        ";
        // line 62
        echo "    ";
    }

    public function getTemplateName()
    {
        return "lego/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 62,  82 => 50,  64 => 36,  45 => 21,  29 => 9,  24 => 6,  22 => 5,  19 => 1,);
    }
}
