<?php

/* typography.twig */
class __TwigTemplate_1e511ff7b7dfe30036403056200328107977c561109475c09cb2b7e18d0b592b extends Twig_Template
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
    <h1 class='h0'>
        h0.Heading Size
    </h1>
    <h1>
        h1.Heading Size
    </h1>
    <h2>
        h2.Heading Size
    </h2>
    <h3>
        h3.Heading Size
    </h3>
    <h4>
        h4.Heading Size
    </h4>
    <h5>
        h5.Heading Size
    </h5>
    <h6>
        h6.Heading Size
    </h6>
    <h1>
        h1.Heading Size
    </h1>
    <p class='intro'>
        Oh no way! No worries, this snarky brain drain is as wicked as a sweet holden. Mean while, in the pub, The Topp Twins and Sir Edmond Hillary were up to no good with a bunch of dodgy Longest Drink in Towns.
    </p>
    <p>
        The naff force of his whinging was on par with some uni student's epic L&P. Put the jug on will you bro, all these mint Swanndris can wait till later. The first prize for preparing the hungi goes to... John Key and his carked it Silver Fern, what a goon. Bro, kiwis are really chocka full good with fully sick old man's beards, aye.
    </p>
    <h2>
        h2.Heading Size
    </h2>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>
    <h3>
        h3.Heading Size
    </h3>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>
    <h4>
        h4.Heading Size
    </h4>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>
    
    <h5>
        h5.Heading Size
    </h5>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>
    <h6>
        h5.Heading Size
    </h6>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>
    <ul class='list-unstyled'>
        <li>
            This is the start of an unstyled list
        </li>
        <li>
            Morningside for life, bro.
        </li>
        <li>
            The random force of his cruising for a brusing was on par with The Topp Twins's sweet giant weka
        </li>
        <li>
            Speights, pride of the south for over 100 years. 
        </li>
    </ul>
    <ul class='list-styled'>
        <li>
            This is the start of a styled list
        </li>
        <li>
            Morningside for life, bro.
        </li>
        <li>
            The random force of his cruising for a brusing was on par with The Topp Twins's sweet giant weka
        </li>
        <li>
            Speights, pride of the south for over 100 years. 
        </li>
    </ul>
    <hr />
    
    <div class='blockquote mt-m'>
        <p>
            After the chilly bin is rooted, you add all the good as mince pies to the pohutukawa you've got yourself a meal. 
        </p>
    </div>
    <p>
        You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate. 
    </p>

";
    }

    public function getTemplateName()
    {
        return "typography.twig";
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