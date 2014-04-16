<?php

/* template.twig */
class __TwigTemplate_c33282184629ade12327c849c47139b48002ba23b82fd53ef1571ccf793f7e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macros"] = $this->env->loadTemplate("macros.twig");
        // line 2
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"ie6 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 7]> <html class=\"ie7 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 8]> <html class=\"ie8 no-js\" lang=\"en\"><![endif]-->
<!--[if IE 9]> <html class=\"ie9 no-js\" lang=\"en\"><![endif]-->
<!--[if !IE]><!--><html class=\"no-js\" lang=\"en\"><!--<![endif]-->
<head>
    <!-- Made by Springload -->
    <meta charset=\"UTF-8\"/>
    <meta name='keywords' content=''>
    <meta name='description' content=''>

    <!-- open graph -->
    <meta property=\"og:url\" content=\"\" />
    <meta property=\"og:title\" content=\"freds precious\" />
    <meta property=\"og:image\" content=\"/logo.png\">
    <meta property=\"og:image:type\" content=\"image/png\">
    <meta property=\"og:image:width\" content=\"400\">
    <meta property=\"og:image:height\" content=\"400\">
    <!-- end:features -->

    <!-- google-plus -->
    <link href=\"https://plus.google.com/[[id]]\" rel=\"publisher\"/>
    <!-- end:google-plus-->

    <!-- features -->
    <meta name='viewport' content=\"width=device-width, minimum-scale=1\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <!-- end:features -->

    <title>Flego</title>

    <link type=\"text/plain\" rel=\"author\" href=\"/humans.txt\" />

    <!-- icons -->
    <link rel='shortcut icon' href='/favicon.ico?1'>
    <link rel='apple-touch-icon-precomposed' sizes='76x76' href='/apple-touch-icon-ipad.png'>
    <link rel='apple-touch-icon-precomposed' sizes='120x120' href='/apple-touch-icon-iphone-retina.png'>
    <link rel='apple-touch-icon-precomposed' sizes='152x152' href='/apple-touch-icon-ipad-retina.png'>
    <link rel='apple-touch-icon-precomposed' href='/apple-touch-icon-precomposed.png'>
    <!-- end:icons -->

    <!-- styles -->
    <link rel=\"stylesheet\" href=\"assets/css/screen.css\" />
    <!-- end:styles -->

    <!-- js-support -->
    <noscript>
        <style type='text/css'>
            .no-js-hide { display: none !important; }
        </style>
    </noscript>
    <script type=\"text/javascript\">
        document.write(\"<style type='text/css'>.js_hide{display:none;}</style>\");
    </script>
    <!-- end:js-support -->
</head>
<body class='";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["siteClass"]) ? $context["siteClass"] : null), "html", null, true);
        echo "'>
<div class='grid-container'>
    <div class='grid'>
    
        <div class='grid__item col'>
          <div class='block-m block--stacked left'>
            <h1>
              <span class='visually-hidden'>
                <a href='/' class='clean-link'>Home</a>
              </span>
                <a href='/'><img class='' src='' alt='Home'/></a>
            </h1>
          </div>
          <ul class='nav right clean-link-list'>
     
            <li class='hidden--q-small'>
               <a href='http://springload.github.io/Fred.scss/#meet-fred-the-friendly-front-end-framework' class='block-m block--stacked inline-block ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
        echo "'>
                   Fred
               </a> 
            </li>  
            <li class='hidden--q-small'>
               <a href='/flego.php' class='block-m block--stacked inline-block ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
        echo "'>
                   Flego
               </a> 
            </li>
            <li class='hidden--q-small'>
               <a href='/freds-closet.php' class='block-m block--stacked inline-block ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "isStacked"), "html", null, true);
        echo "'>
                   Fred's closet
               </a> 
            </li> 
      
            <li class='visible--q-small hidden--q-large hidden--q-medium hidden--q-large hidden--q-xlarge'>
              <a href='#anchor' class='block-m block--stacked inline-block'>
                <i class='i i-menu inline-block'></i>
              </a>
            </li>
          </ul>
          
        </div><!-- grid item ends-->

    </div><!-- ends -->
</div>
<div class='content'>
    
    ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "       
</div><!--content ends-->
<div class='block--secondary'>
    <div class='grid-container'>
        <div class='grid'>
            <div class='grid__item col'>
                <p class='block-m '>© Laura is awesome 2014</p>
            </div>
        </div>
    </div>
</div>

<!-- scripts -->
<script src=\"assets/js/site.js\"></script>

<script src=\"//localhost:35729/livereload.js\"></script>

<!-- end:scripts-->



</body>
</html>";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 105,  166 => 104,  140 => 107,  138 => 104,  117 => 86,  109 => 81,  101 => 76,  82 => 60,  22 => 2,  20 => 1,);
    }
}
