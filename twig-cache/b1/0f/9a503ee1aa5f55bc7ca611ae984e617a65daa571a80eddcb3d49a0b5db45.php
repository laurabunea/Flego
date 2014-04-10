<?php

/* blocks.twig */
class __TwigTemplate_b10f9a503ee1aa5f55bc7ca611ae984e617a65daa571a80eddcb3d49a0b5db45 extends Twig_Template
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

    <!--**************************** Dummy data ****************************-->
    ";
        // line 7
        $context["barchart"] = array(0 => array("percentage" => "6%", "desc" => "of all coupons printed are ever redeemed"), 1 => array("percentage" => "95%", "desc" => "of the creatures on earth are smaller than a chicken egg"), 2 => array("percentage" => "35%", "desc" => "of people watching T.V. yell at it."));
        // line 22
        echo "
    ";
        // line 23
        $context["places"] = array(0 => array("town" => "Wellington"), 1 => array("town" => "Christchurch"), 2 => array("town" => "Auckland"), 3 => array("town" => "Nelson"), 4 => array("town" => "Timaru"), 5 => array("town" => "Gore"));
        // line 44
        echo "
    ";
        // line 45
        $context["contentBlock"] = array("title" => "title text", "strapline" => "strapline text", "intro" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know.", "image" => "assets/images/gallery-showcase.jpg", "imagetitle" => "Image title", "imagesubtitle" => "Image sub title or date", "imagecaption" => "I am an image caption", "copy" => "Oh no! No worries, this cool morepork is as kiwi as as a paru Undie 500. Across the ditch, good as gold, fully. Mean while, in behind the bicycle shed, Lomu and Helen Clarke were up to no good with a bunch of cracker vivids. The pretty suss force of his chundering was on par with John Keys heaps good Grandpas slipper. Put the jug on will you bro, all these wicked slippers can wait till later. The first prize for burning my Vogels goes to... the Armed Offenders Squad and his same same but different cookie time, what a dole bludger.");
        // line 55
        echo "

    ";
        // line 57
        $context["article"] = array("title" => "Article title", "date" => "January 2013", "category" => "Television", "link" => "Read more", "linkAnchor" => "/clickme", "desc" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know.");
        // line 66
        echo "
    ";
        // line 67
        $context["gallery2Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"));
        // line 78
        echo "
    ";
        // line 79
        $context["panel"] = array("title" => "Get in touch", "desc" => "We would love to hear from you, you attractive person you.", "btnLink" => "helpme.co.nz", "btnTitle" => "Contact Us");
        // line 88
        echo "
    ";
        // line 89
        $context["alertPanel"] = array("title" => "Warning", "desc" => "Do not touch that button", "btnLink" => "helpme.co.nz", "btnTitle" => "Click me, I am a button");
        // line 98
        echo "
    ";
        // line 99
        $context["commentThread"] = array(0 => array("name" => "Laura Bunea", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."), 1 => array("name" => "Mr Blob", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."));
        // line 110
        echo "
    ";
        // line 111
        $context["gallery3Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"));
        // line 126
        echo "    
    ";
        // line 127
        $context["gallery4Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"), 3 => array("caption" => "Item four", "image" => "assets/images/gallery-showcase.jpg"));
        // line 146
        echo "
    ";
        // line 147
        $context["navigation"] = array(0 => array("title" => "Home", "anchor" => "/"), 1 => array("title" => "About", "anchor" => "/about/"), 2 => array("title" => "Blog", "anchor" => "/blog/"));
        // line 162
        echo "
    ";
        // line 163
        $context["gallerywithcaptions"] = array("title" => "Gallery images with captions", "image" => "assets/images/gallery-showcase.jpg", "imagetitle" => "Image title", "imagesubtitle" => "Image sub title or date", "imagecaption" => "I am an image caption");
        // line 170
        echo "
    ";
        // line 171
        $context["content2Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 183
        echo "
    ";
        // line 184
        $context["content3Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 200
        echo "
    ";
        // line 201
        $context["content4Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 3 => array("heading" => "Heading 4", "copy" => "Lake Taupo holds the most sweet community in the country.. James Cook was wobbling when the kiwi as rooting event occured. Fair suck of the sav, this beached as scarfie is as beaut as a hammered. Mean while, in South Pacific, James and the Giant Peach and Jonah Lomu were up to no good with a bunch of tapu whitebait fritters. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 223
        echo "
    

    ";
        // line 226
        $context["galleryShowcase"] = array("title" => "Hello there", "url" => "/link/click/me", "imageSource" => "assets/images/gallery-showcase.jpg", "imageCredit" => "Some photographer", "parentLink" => "/parent/link", "category" => "Television", "date" => "14 January 2014", "listingBlurb" => "Dont be a egg. After the fella is skived off, you add all the pretty suss cookie times to the foreshore and seabed issue youve got yourself a meal. Technology has allowed carked it housies to participate in the global conversation of hard case pieces of cheese on toast. The next Generation of nuclear-free manuses have already munted over at Rangitoto Island. Whats the hurry the Armed Offenders Squad? Theres plenty of jerseys in South Pacific..");
        // line 237
        echo "







    <!--**************************** Header ****************************-->
    <h3 class='lego--heading'>
        header.twig
    </h3>
    ";
        // line 249
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "header", 1 => array("navigation" => $_navigation_, "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        echo "


    <!--**************************** Content.into ****************************-->
    <h3 class='lego--heading'>
        content.intro.twig
    </h3>
    ";
        // line 256
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.intro", 1 => array("content" => $_contentBlock_, "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        echo "
    <hr />
    <h3 class='lego--heading'>
        content.title.twig
    </h3>
    ";
        // line 261
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.title", 1 => array("content" => $_contentBlock_, "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        echo "

    
    <!--**************************** Content Blocks ****************************-->
    <h3 class='lego--heading'>
        Content blocks
    </h3>
    ";
        // line 268
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content2Items"])) { $_content2Items_ = $context["content2Items"]; } else { $_content2Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content2Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4 col--q-small", "headingSize" => "3")), "method"), "html", null, true);
        echo "
    <hr/>
    ";
        // line 270
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content3Items"])) { $_content3Items_ = $context["content3Items"]; } else { $_content3Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content3Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-3 col--q-small")), "method"), "html", null, true);
        echo "
    <hr/>
    ";
        // line 272
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content4Items"])) { $_content4Items_ = $context["content4Items"]; } else { $_content4Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content4Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-4 col-2-4--q-medium col--q-small")), "method"), "html", null, true);
        echo "
    <hr/>
    

    <!--**************************** Article Blocks ****************************-->
    <h3 class='lego--heading'>
        article.list.twig
    </h3>
    ";
        // line 280
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "article.list", 1 => array("article" => $_article_, "colSize" => "", "isStacked" => "", "headingSize" => "h4", "blockSize" => "m")), "method"), "html", null, true);
        echo "

    

    <!--**************************** Media Blocks ****************************-->
    <h3 class='lego--heading'>
        content.media.twig
    </h3>
    ";
        // line 288
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-4", "mediaRight" => "col-3-4", "blockSize" => "m")), "method"), "html", null, true);
        echo "
    <hr />
    ";
        // line 290
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-3", "mediaRight" => "col-2-3", "blockSize" => "m")), "method"), "html", null, true);
        echo "
    <hr />
    ";
        // line 292
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-2-4", "mediaRight" => "col-2-4", "blockSize" => "m")), "method"), "html", null, true);
        echo "


    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        gallery.showcase.twig
    </h3>

    ";
        // line 300
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["galleryShowcase"])) { $_galleryShowcase_ = $context["galleryShowcase"]; } else { $_galleryShowcase_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.showcase", 1 => array("galleryShowcase" => $_galleryShowcase_, "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        echo "

    
    <!--**************************** Gallery ****************************-->
    <h3 class='lego--heading'>
        gallery.list.twig
    </h3>
    <!-- I have passed in different nodes just to keep the site smaller ;) -->
    ";
        // line 308
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery2Items"])) { $_gallery2Items_ = $context["gallery2Items"]; } else { $_gallery2Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery2Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4")), "method"), "html", null, true);
        echo "
    <hr/>
    ";
        // line 310
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery3Items"])) { $_gallery3Items_ = $context["gallery3Items"]; } else { $_gallery3Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery3Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-3")), "method"), "html", null, true);
        echo "
    <hr/>
    ";
        // line 312
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery4Items"])) { $_gallery4Items_ = $context["gallery4Items"]; } else { $_gallery4Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery4Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-4")), "method"), "html", null, true);
        echo "
    

    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        Comment threads
    </h3>
    ";
        // line 319
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["commentThread"])) { $_commentThread_ = $context["commentThread"]; } else { $_commentThread_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "comments", 1 => array("commentThread" => $_commentThread_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4 col--q-small")), "method"), "html", null, true);
        echo "

    
    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        Panels
    </h3>
    ";
        // line 326
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["panel"])) { $_panel_ = $context["panel"]; } else { $_panel_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "panel", 1 => array("panel" => $_panel_, "blockSize" => "m")), "method"), "html", null, true);
        echo "
    

    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        Alert panel
    </h3>
    ";
        // line 333
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["alertPanel"])) { $_alertPanel_ = $context["alertPanel"]; } else { $_alertPanel_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "panel.alert", 1 => array("panel" => $_alertPanel_, "blockSize" => "m", "theme" => "")), "method"), "html", null, true);
        echo "


    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        Barchart
    </h3>
    ";
        // line 340
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["barchart"])) { $_barchart_ = $context["barchart"]; } else { $_barchart_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "barchart", 1 => array("barchart" => $_barchart_, "blockSize" => "m")), "method"), "html", null, true);
        echo "


    <!--**************************** Showcases ****************************-->
    <h3 class='lego--heading'>
        Forms
    </h3>
    ";
        // line 347
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["barchart"])) { $_barchart_ = $context["barchart"]; } else { $_barchart_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "form", 1 => array("barchart" => $_barchart_, "colSize" => "-2-4 col--q-small", "blockSize" => "m")), "method"), "html", null, true);
        echo "
    <hr />
    ";
        // line 349
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "form", 1 => array("formData" => $_formData_, "colSize" => "", "blockSize" => "m")), "method"), "html", null, true);
        echo "
    

    <!--**************************** New block ****************************-->
    <h3 class='lego--heading'>
       content.list.twig
    </h3>
    ";
        // line 356
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["places"])) { $_places_ = $context["places"]; } else { $_places_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.list", 1 => array("content" => $_places_, "colSize" => "-2-4", "isStacked" => "", "headingSize" => "h4", "blockSize" => "s")), "method"), "html", null, true);
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "blocks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 356,  325 => 349,  318 => 347,  306 => 340,  294 => 333,  282 => 326,  270 => 319,  258 => 312,  251 => 310,  244 => 308,  231 => 300,  218 => 292,  211 => 290,  204 => 288,  191 => 280,  178 => 272,  171 => 270,  164 => 268,  152 => 261,  142 => 256,  130 => 249,  116 => 237,  114 => 226,  109 => 223,  107 => 201,  104 => 200,  102 => 184,  99 => 183,  97 => 171,  94 => 170,  92 => 163,  89 => 162,  87 => 147,  84 => 146,  82 => 127,  79 => 126,  77 => 111,  74 => 110,  72 => 99,  69 => 98,  67 => 89,  64 => 88,  62 => 79,  59 => 78,  57 => 67,  54 => 66,  52 => 57,  48 => 55,  46 => 45,  43 => 44,  41 => 23,  38 => 22,  36 => 7,  31 => 4,  28 => 3,);
    }
}
