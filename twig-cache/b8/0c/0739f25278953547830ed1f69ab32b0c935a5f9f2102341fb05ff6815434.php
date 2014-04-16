<?php

/* freds-closet.twig */
class __TwigTemplate_b80c0739f25278953547830ed1f69ab32b0c935a5f9f2102341fb05ff6815434 extends Twig_Template
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
        echo "<div class='block--tertiary'>
    <div class='grid-container pt-xl pb-xxl' > 
        <div class='grid grid--middle'>
           <div class='grid__item col-2-3 col--q-small'>
                <div class='block-m block--stacked'>
                    <h2 class='font-primary--light h1'>
                        Fred's closet
                    </h2>
                    <p class='intro'> 

                        Fred has so many skeletons in his closet that he can’t keep track of them all! Just like Fred, websites also have a lot of skeletons but have no closet to store them in.

                        Fred’s Closet is the perfect hideaway to keep all those little secrets.
                    </p>
                    
                    <p class='intro'>The benefits of this are:</p>
                    <ul class='list-styled intro' >
                        <li>
                            Makes it easy for a new designer to join the team and start contributing work that is consistent with the current design and it makes sure there are no gaps in your styling, no matter what content is being displayed.
                        </li>
                        <li>
                            Makes it easy for a new FED to join the team as they can see what patterns already exist and can extend and maintain code. ";
        // line 26
        echo "
                        </li>
                        <li>
                            Good for debugging - Because all of the elements that appear on the site are in one place so you don’t have to go searching round for them.
                        </li>
                        <li>
                            It also makes device testing easier because everything is on one page. It’s also quick to see if CSS changes to one pattern affect other patterns.

                        </li>
                    </ul>
                    
                </div>
";
        // line 44
        echo "                
              
          
            </div>
            <div class='grid__item col-1-3 col--q-small'>
                <img src='assets/images/freds-closet.png' alt='fred' class='img--responsive center-element' />
            </div> 
            <div class='grid__item col'>
                <hr />
            </div>
            <div class='grid__item col-1-3 col--q-small'>
                <img src='assets/images/closet.png' alt='fred' class='img--responsive ' />
            </div>
            <div class='grid__item col-2-3 col--q-small'>

                <div class='block--stacked block-m '>
                    <h3 class='font-primary--light'>
                        How it works
                    </h3>
                    <p class='intro'>
                        So that Fred's closest doesn't get messy. Fred has kindly seperated his closest into a few different sections. These are as follows:
                    </p>
                    <p class='font-primary--bold'>
                        Colours:
                    </p>
                    <p class=' '>
                        A place to document the main colors used on your project's site.
                    </p>
                    <p class='font-primary--bold'>
                        Typography:
                    </p>
                    <p class=' '>
                        A place to document the font-stacks used on your project's site as well as test the heirarchy
                    </p>
                    <p class='font-primary--bold'>
                        Flego blocks
                    </p>
                    <p class=' '>
                         A place for common HTML elements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- i know the anchor shouldn't wrap everything but it will do for now :0 -->
<div style='' class='block--secondary'>
    <div class='grid-container pt-xxl pb-xxl' style='max-width:960px; margin-left:auto; margin-right:auto'>
        
        <div class='grid'>
            <div class='grid__item col'>
                <h2 class='text-center font-primary--light mb-m pt-m'>
                    Colors
                </h2>
                
            </div>
        </div>
        <div class='grid'>
            <div class='grid__item col-1-4 col-2-4--q-small'>
                <div class='ml-xxs mr-xxs radius'>
                    <div class='block--primary top--radius-s'>
                        <h4 class='font-primary--light pt-m pb-m text-center h2'>
                            A<a href=''>a</a>
                        </h4>

                    </div>
                    <div class='block--white bottom--radius-s mb-s'>
                        <p class='small uppercase text-center pt-m pb-m'>
                            block--primary
                        </p>
                    </div>
                </div>
            </div>
            <div class='grid__item col-1-4 col-2-4--q-small'>
                <div class='ml-xxs mr-xxs '>
                    <div class='block--secondary top--radius-s'>
                        <h4 class='font-primary--italic pt-m pb-m text-center h2'>
                            A<a href=''>a</a>
                        </h4>
                    </div>
                    <div class='block--white bottom--radius-s mb-s'>
                        <p class='small uppercase text-center pt-m pb-m'>
                            block--secondary
                        </p>
                    </div>
                </div>
            </div>
            <div class='grid__item col-1-4 col-2-4--q-small'>
                <div class='ml-xxs mr-xxs '>
                    <div class='block--tertiary top--radius-s'>
                        <h4 class='pt-m pb-m text-center h2'>
                            A<a href=''>a</a>
                        </h4>
                    </div>
                    <div class='block--white bottom--radius-s mb-s'>
                        <p class='small uppercase text-center pt-m pb-m'>
                            block--tertiary
                        </p>
                    </div>
                </div>
            </div>
            <div class='grid__item col-1-4 col-2-4--q-small '>
                <div class='ml-xxs mr-xxs radius'>
                    <div class='block--featured top--radius-s'>
                        <h4 class='font-primary--bold pt-m pb-m text-center h2'>
                            A<a href=''>a</a>
                        </h4>
                    </div>
                    <div class='block--white bottom--radius-s mb-s' >
                        <p class='small uppercase text-center pt-m pb-m'>
                            block--featured
                        </p>
                    </div>
                </div>
            </div><!--grid item ends-->
        </div><!--grid  ends-->
      
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
            <div class='grid__item col-2-4 col--q-small'>
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
            <div class='grid__item col-2-4 col--q-small'>
                <div class='grid'>
                    <div class='grid__item col-1-4 '>
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
            <div class='grid__item col-2-4 col--q-small'>
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
            <div class='grid__item col-2-4 col--q-small'>
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
        // line 291
        $this->env->loadTemplate("typography.twig")->display($context);
        // line 292
        echo "                </div>
            </div>
        </div><!--grid  ends-->
        
    </div>
</div>
<div style='' class='block--secondary'>
    <div class='grid-container pt-xxl pb-xxl' >
        
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
        return "freds-closet.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 292,  317 => 291,  68 => 44,  54 => 26,  31 => 4,  28 => 3,);
    }
}
