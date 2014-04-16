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
        // line 20
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

    // line 5
    public function getblocks($_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            echo " 
    ";
            // line 6
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (twig_test_iterable($_data_)) {
                // line 7
                echo "
        ";
                // line 8
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_data_);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    echo "       
            ";
                    // line 10
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "type")) {
                        // line 11
                        echo "                ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        try {
                            $template = $this->env->resolveTemplate((("elements/" . $this->getAttribute($_item_, "type")) . ".twig"));
                            $template->display(array_merge($context, array("item" => $_item_)));
                        } catch (Twig_Error_Loader $e) {
                            // ignore missing template
                        }

                        echo " 
            ";
                    } else {
                        // line 12
                        echo "   
                <p>";
                        // line 13
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $_item_, "html", null, true);
                        echo "</p>
            ";
                    }
                    // line 15
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    ";
            } else {
                echo "   
        <p>";
                // line 17
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $_data_, "html", null, true);
                echo "</p>
    ";
            }
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
        return array (  145 => 17,  140 => 16,  126 => 15,  120 => 13,  117 => 12,  104 => 11,  101 => 10,  98 => 9,  80 => 8,  77 => 7,  74 => 6,  61 => 5,  39 => 2,  27 => 1,  22 => 20,  19 => 4,);
    }
}
