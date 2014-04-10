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
        echo "<div class='mt-xl '>
";
        // line 1484
        echo "<h1 class='text-center  h0'>
    <a href='/blocks.php' class='clean-link'>
        Flego</a>
</h1>
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
        return array (  34 => 1484,  31 => 4,  28 => 3,);
    }
}
