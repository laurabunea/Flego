<?php

/* macros.twig */
class __TwigTemplate_b9ec27806e2d2be3bd94bf2ab8a7308aa446214b84c8e5a8764510d95e67c5f0 extends Twig_Template
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
            try {
                $template = $this->env->resolveTemplate((("lego/" . (isset($context["type"]) ? $context["type"] : null)) . ".twig"));
                $template->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null))));
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
            if (twig_test_iterable((isset($context["data"]) ? $context["data"] : null))) {
                // line 7
                echo "
        ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
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
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type")) {
                        // line 11
                        echo "                ";
                        try {
                            $template = $this->env->resolveTemplate((("elements/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type")) . ".twig"));
                            $template->display(array_merge($context, array("item" => (isset($context["item"]) ? $context["item"] : null))));
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
                        echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
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
        return array (  138 => 17,  133 => 16,  119 => 15,  114 => 13,  111 => 12,  99 => 11,  97 => 10,  94 => 9,  77 => 8,  74 => 7,  72 => 6,  59 => 5,  39 => 2,  27 => 1,  22 => 20,  19 => 4,  148 => 144,  31 => 4,  28 => 3,);
    }
}
