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
<div class='featured'>
    <div class='grid-container pt-xxxl pb-xxl'>
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
                    <img src='assets/images/lego.png' alt='fred' class='img--responsive'/>
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
</div>
<!-- i know the anchor shouldn't wrap everything but it will do for now :0 -->
<div style='' class='block--secondary'>
    <div class='grid-container pt-xxxl pb-xxxl' style='max-width:960px; margin-left:auto; margin-right:auto'>
        
        <div class='grid'>
            <div class='grid__item col'>
                <h2 class='text-center font-primary--light'>
                    Colors
                </h2>
            </div>
        </div>
      
    </div>
</div>
<div class='block--tertiary'>
    <div class='grid-container pt-xxl pb-xxl' >
        
        <div class='grid'>
            <div class='grid__item col'>
                <h2 class='text-center font-primary--light pb-m pt-s'>
                    Typography
                </h2>
            </div>
            <div class='grid__item col-2-4'>
                <div class='block-m block--stacked'>
                     <p class='small uppercase'>Font primary:</p>
                    <h3>
                        SourceSansPro
                    </h3>
                    <p>
                        Awww Wicked! Howsit goin, this carked it misses is as kiwi as as a cool scarfie. Mean while, in South Pacific, the Armed Offenders Squad and Rhys Darby were up to no good with a bunch of paru chocolate fishs.
                    </p>
                </div>
            </div>
            <div class='grid__item col-2-4'>
                <div class='grid'>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs radius'>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--light pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Light</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs '>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--italic pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Italic</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs '>
                            <div class='block--white top--radius-s'>
                                <h4 class='pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Regular</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs radius'>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--bold pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s' >
                                <p class='small uppercase text-center pt-m pb-m'>Bold</p>
                            </div>
                        </div>
                    </div><!--grid item ends-->
                </div><!--grid  ends-->
            </div><!--grid item ends-->

            <div class='grid__item col'>
                <hr class='mt-m mb-m'/>
            </div>
            <div class='grid__item col-2-4'>
                <div class='block-m block--stacked'>
                    <p class='small uppercase'>Font secondary:</p>
                    <h3>
                       SourceSansPro
                    </h3>
                    <p>
                        The stoked force of his skiving off was on par with Manus Morissette's flat stick quater-acre patch. Put the jug on will you bro, all these buzzy vivids can wait till later. 
                    </p>
                </div>
            </div>
            <div class='grid__item col-2-4 '>
                <div class='grid'>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs radius'>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--light pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Light</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs '>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--italic pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Italic</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs '>
                            <div class='block--white top--radius-s'>
                                <h4 class='pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s'>
                                <p class='small uppercase text-center pt-m pb-m'>Regular</p>
                            </div>
                        </div>
                    </div>
                    <div class='grid__item col-1-4'>
                        <div class='ml-xxs mr-xxs radius'>
                            <div class='block--white top--radius-s'>
                                <h4 class='font-primary--bold pt-m pb-m text-center h2'>Aa</h4>
                            </div>
                            <div class='block--secondary bottom--radius-s' >
                                <p class='small uppercase text-center pt-m pb-m'>Bold</p>
                            </div>
                        </div>
                    </div><!--grid item ends-->
                </div><!--grid  ends-->
            </div><!--grid item ends-->
            <div class='grid__item col'>
                <hr class='mt-m mb-m'/>
                <p class='uppercase small mb-s ml-m mr-m'>Text heirarchy</p>
                <div class='block--white block--stacked block-m radius'>
                    ";
        // line 172
        $this->env->loadTemplate("typography.twig")->display($context);
        // line 173
        echo "                </div>
            </div>
        </div><!--grid  ends-->
        
    </div>
</div>
<div style='' class='block--secondary'>
    <div class='grid-container pt-xxxl pb-xxxl' >
        
        <div class='grid'>
            <div class='grid__item col'>
                <h2 class='text-center font-primary--light'>
                    Components
                </h2>
            </div>
        </div>
      
    </div>
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
        return array (  203 => 173,  201 => 172,  31 => 4,  28 => 3,);
    }
}
