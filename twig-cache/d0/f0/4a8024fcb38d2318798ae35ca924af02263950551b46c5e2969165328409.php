<?php

/* macros.twig */
class __TwigTemplate_d0f04a8024fcb38d2318798ae35ca924af02263950551b46c5e2969165328409 extends Twig_Template
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
        // line 4
        echo "
";
    }

    // line 1
    public function getlego($_type = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            try {
                $template = $this->env->resolveTemplate((("lego/" . $_type_) . ".twig"));
                $template->display(array_merge($context, array("data" => $_data_)));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            echo " 
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 1,  19 => 4,  171 => 80,  158 => 72,  147 => 66,  136 => 60,  124 => 53,  112 => 46,  99 => 38,  87 => 31,  75 => 24,  61 => 15,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 2,  34 => 5,  31 => 4,  28 => 3,);
    }
}
