<?php

/* theme-helper.twig */
class __TwigTemplate_c48eb05c3eff8b69f328ab09e01483df3598849649490e69f87ed84ae59aa220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class='lego--heading'>
        Theme style guide helper
    </h3>
    <div class='grid '>
    
        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--primary col block-m block--stacked border-box' >
                    <h3>
                        block--primary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--secondary col block-m block--stacked border-box' >
                    <h3 class=''>
                        block--secondary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--tertiary col block-m block--stacked border-box' >
                    <h3>
                        block--tertiary
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->

        <div class='grid__item col-1-4 col-2-4--q-medium col--q-small'>
            <div class='block-m block--stacked' >         
                <div class='block--featured col block-m block--stacked border-box' >
                    <h3>
                        block--featured
                    </h3>
                    <p>
                        I'm some content
                    </p>
                    <p>
                        <a href='#'>
                            I'm a link
                        </a>
                    </p>
                </div>
            </div><!--block ends-->
        </div><!--grid item ends-->
       
    </div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "theme-helper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
