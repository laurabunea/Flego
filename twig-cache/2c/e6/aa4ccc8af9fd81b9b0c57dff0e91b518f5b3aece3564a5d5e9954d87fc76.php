<?php

/* homepage.twig */
class __TwigTemplate_2ce6aa4ccc8af9fd81b9b0c57dff0e91b518f5b3aece3564a5d5e9954d87fc76 extends Twig_Template
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
<!-- i know the anchor shouldn't wrap everything but it will do for now :0 -->
<div class='grid-container pt-xxxl' style='max-width:960px; margin-left:auto; margin-right:auto'>
    <a href='/blocks.php' class='clean-link'>
        <div class='grid grid--middle'>
            <div class='grid__item ' style='width:30%'>
                <div class='ml-l'>
                    <img src='assets/images/fred-logo.png' alt='fred' class='img--responsive'/>
                </div>
            </div>
            <div class='grid__item' style='width:20%'>
                <p class='h0 text-center'>+</p> 
            </div>
            <div class='grid__item' style='width:30%'>
                <img src='assets/images/lego.png' alt='fred' class='img--responsive' />
            </div>
            <div class='grid__item' style='width:20%'>
                <p class='h0 text-center'>=</p>
            </div>
            <div class='grid__item col'>
                <h1 class='text-center pt-s h0'>Flego</h1>
            </div>
        </div>
    </a>
</div>


";
    }

    public function getTemplateName()
    {
        return "homepage.twig";
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
