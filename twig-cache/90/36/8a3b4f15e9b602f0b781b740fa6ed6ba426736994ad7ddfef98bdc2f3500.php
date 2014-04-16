<?php

/* homepage.twig */
class __TwigTemplate_90368a3b4f15e9b602f0b781b740fa6ed6ba426736994ad7ddfef98bdc2f3500 extends Twig_Template
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
        echo "<div class='block--secondary'>
    <div class='grid-container pt-xl pb-xl' > 
        <div class='grid'>
           <div class='grid__item col'>
                <div class='block-m block--stacked'>
                    <h2 class='text-center font-primary--light'>
                        Why make life harder when Fred can help :)
                    </h2>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class='block--white'>
    <div class='grid-container pt-xl pb-xl' > 
        <div class='grid grid--middle'>
           <div class='grid__item col-1-3 col--q-small'> 
                <div class='block--stacked block-m'>
                    <img src='assets/images/fred-scss.jpg' alt='fred' class='img--responsive'/>
                </div>
            </div>
            <div class='grid__item col-2-3 col--q-small'>
                <div class='block--stacked block-m'>   

                    <h2 class='font-primary--light'>
                        Fred, the friendly front-end framework
                    </h2>
                    <p class='intro'>
                        Fred helps jump-start your front-end projects. He's a super flexible little guy with a nice grunt-powered CLI.
                    </p>
                    <p>
                        Fred aims to solve a classic front-end problem: sharing and re-using common components between projects, while allowing each project to retain custom variables and configuration.
                    </p>
                    <p>
                        You include '_fred.scss' in your project, and customise its behavior in '_fred-theme.scss'. When there's an update to Fred, you can update it with a 'bower update' and get all the new Fred goodness in your project right away, without losing your settings. 
                    </p>
                    <p class='mt-m'>
                        <a href='http://springload.github.io/Fred.scss/#meet-fred-the-friendly-front-end-framework' class='btn'>
                            Read more about Fred.scss
                        </a>
                    </p>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class='block--featured'>
    <div class='grid-container pt-xl pb-xl'>
        <div class='grid grid--middle'>
            <div class='grid__item col-2-3 col--q-small'>
                <div class='block--stacked block-m'>   

                    <h2 class='font-primary--light'>
                        Flego, the cool kids Lego
                    </h2>
                    <p class='intro'>
                        Flego is built of Fred.... add intro here
                    </p>
                    <p>
                        The primary benefit of using design patterns is that we are not constantly re-inventing the wheel when coming up with the general functionality of a site.
                    </p>
                    <p>
                        It encouraged a much more modular approach to development, the idea being that any pattern could be used anywhere on a template.
                    <p class='mt-m'>
                        <a href='flego.php' class='btn'>
                            Read more about Flego
                        </a>
                    </p>
                </div>
            </div><!--grid item ends-->
    
            <div class='grid__item col-1-3 col--q-small'> 
                <div class='block--stacked block-m'>
                    <img src='assets/images/flego.png' alt='fred' class='img--responsive'/>
                    
                </div>
            </div><!--grid item ends-->
        </div>
    </div>
</div>

<div class='block--white'>
    <div class='grid-container pt-xl pb-xl' > 
        <div class='grid grid--middle'>
           <div class='grid__item col-1-3 col--q-small'> 
                <div class='block--stacked block-m'>
                    <img src='assets/images/freds-closet.png' alt='fred' class='img--responsive'/>
                </div>
            </div>
            <div class='grid__item col-2-3 col--q-small'>
                <div class='block--stacked block-m'>   

                    <h2 class='font-primary--light'>
                        Fred's Closet
                    </h2>
                    <p class='intro'>
                        A place to store a sites dirty little secrets
                    </p>
                   
                    <p class='mt-m'>
                        <a href='/freds-closet.php' class='btn'>
                            Read more about Fred's closet
                        </a>
                    </p>
                </div>
            </div> 
        </div>
    </div>
</div>

<!-- i know the anchor shouldn't wrap everything but it will do for now :0 -->
";
        // line 141
        echo "





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
        return array (  145 => 141,  31 => 4,  28 => 3,);
    }
}
