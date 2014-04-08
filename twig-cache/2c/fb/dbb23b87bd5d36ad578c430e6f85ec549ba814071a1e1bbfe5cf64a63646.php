<?php

/* template.twig */
class __TwigTemplate_2cfbdbb23b87bd5d36ad578c430e6f85ec549ba814071a1e1bbfe5cf64a63646 extends Twig_Template
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
<body>
<div class='content'>
    
    ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "       
</div><!--content ends-->



<!-- scripts -->
<script src=\"assets/js/site.js\"></script>

<script src=\"//localhost:35729/livereload.js\"></script>

<!-- end:scripts-->



</body>
</html>";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
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
        return array (  109 => 64,  106 => 63,  87 => 66,  85 => 63,  22 => 2,  20 => 1,);
    }
}
