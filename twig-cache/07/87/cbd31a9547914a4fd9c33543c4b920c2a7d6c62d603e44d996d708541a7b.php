<?php

/* test.twig */
class __TwigTemplate_0787cbd31a9547914a4fd9c33543c4b920c2a7d6c62d603e44d996d708541a7b extends Twig_Template
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
        echo "
    <div class='grid'>
        
        <div class='grid__item col'>
            <div class='pb-l'>
                <h1 class='font-primary--light'>
                    I'm a title
                </h1>
            </div><!--block ends-->
        </div><!-- grid item ends -->
                 
        <div class='grid__item col'>
            <div class='pb-l'>
                <p class='intro'>
                    I'm an intro paragraph
                </p>
            </div><!--block ends-->
        </div><!--grid item ends-->
  
    </div><!-- ends -->
";
    }

    public function getTemplateName()
    {
        return "test.twig";
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
