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
    <!--**************************** 
    Dummy data will need to put this some where else as its anoying 
    ****************************-->
    ";
        // line 8
        $context["barchart"] = array(0 => array("percentage" => "6%", "desc" => "of all coupons printed are ever redeemed"), 1 => array("percentage" => "95%", "desc" => "of the creatures on earth are smaller than a chicken egg"), 2 => array("percentage" => "35%", "desc" => "of people watching T.V. yell at it."));
        // line 23
        echo "
    ";
        // line 24
        $context["places"] = array(0 => array("town" => "Wellington"), 1 => array("town" => "Christchurch"), 2 => array("town" => "Auckland"), 3 => array("town" => "Nelson"), 4 => array("town" => "Timaru"), 5 => array("town" => "Gore"));
        // line 45
        echo "
    ";
        // line 46
        $context["contentBlock"] = array("title" => "title text", "strapline" => "strapline text", "intro" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know.", "image" => "assets/images/gallery-showcase.jpg", "imagetitle" => "Image title", "imagesubtitle" => "Image sub title or date", "imagecaption" => "I am an image caption", "copy" => "Oh no! No worries, this cool morepork is as kiwi as as a paru Undie 500. Across the ditch, good as gold, fully. Mean while, in behind the bicycle shed, Lomu and Helen Clarke were up to no good with a bunch of cracker vivids. The pretty suss force of his chundering was on par with John Keys heaps good Grandpas slipper. Put the jug on will you bro, all these wicked slippers can wait till later. The first prize for burning my Vogels goes to... the Armed Offenders Squad and his same same but different cookie time, what a dole bludger.");
        // line 57
        echo "

    ";
        // line 59
        $context["article"] = array("title" => "Article title", "date" => "January 2013", "category" => "Television", "link" => "Read more", "linkAnchor" => "/clickme", "desc" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know.");
        // line 68
        echo "
    ";
        // line 69
        $context["gallery2Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"));
        // line 80
        echo "
    ";
        // line 81
        $context["panel"] = array("title" => "Get in touch", "desc" => "We would love to hear from you, you attractive person you.", "btnLink" => "helpme.co.nz", "btnTitle" => "Contact Us");
        // line 90
        echo "
    ";
        // line 91
        $context["alertPanel"] = array("title" => "Warning", "desc" => "Do not touch that button", "btnLink" => "helpme.co.nz", "btnTitle" => "Click me, I am a button");
        // line 100
        echo "
    ";
        // line 101
        $context["commentThread"] = array(0 => array("name" => "Laura Bunea", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."), 1 => array("name" => "Mr Blob", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."));
        // line 112
        echo "
    ";
        // line 113
        $context["gallery3Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"));
        // line 128
        echo "    
    ";
        // line 129
        $context["gallery4Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"), 3 => array("caption" => "Item four", "image" => "assets/images/gallery-showcase.jpg"));
        // line 148
        echo "
    ";
        // line 149
        $context["navigation"] = array(0 => array("title" => "Home", "anchor" => "/"), 1 => array("title" => "About", "anchor" => "/about/"), 2 => array("title" => "Blog", "anchor" => "/blog/"));
        // line 164
        echo "
    ";
        // line 165
        $context["gallerywithcaptions"] = array("title" => "Gallery images with captions", "image" => "assets/images/gallery-showcase.jpg", "imagetitle" => "Image title", "imagesubtitle" => "Image sub title or date", "imagecaption" => "I am an image caption");
        // line 173
        echo "
    ";
        // line 174
        $context["content2Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 186
        echo "
    ";
        // line 187
        $context["content3Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 203
        echo "
    ";
        // line 204
        $context["content4Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 3 => array("heading" => "Heading 4", "copy" => "Lake Taupo holds the most sweet community in the country.. James Cook was wobbling when the kiwi as rooting event occured. Fair suck of the sav, this beached as scarfie is as beaut as a hammered. Mean while, in South Pacific, James and the Giant Peach and Jonah Lomu were up to no good with a bunch of tapu whitebait fritters. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 226
        echo "
    

    ";
        // line 229
        $context["galleryShowcase"] = array("title" => "Hello there", "url" => "/link/click/me", "imageSource" => "assets/images/gallery-showcase.jpg", "imageCredit" => "Some photographer", "parentLink" => "/parent/link", "category" => "Television", "date" => "14 January 2014", "listingBlurb" => "Dont be a egg. After the fella is skived off, you add all the pretty suss cookie times to the foreshore and seabed issue youve got yourself a meal. Technology has allowed carked it housies to participate in the global conversation of hard case pieces of cheese on toast. The next Generation of nuclear-free manuses have already munted over at Rangitoto Island. Whats the hurry the Armed Offenders Squad? Theres plenty of jerseys in South Pacific..");
        // line 240
        echo "


    ";
        // line 246
        echo "    <h3 class='lego--heading'>
        header.twig
    </h3>
    ";
        // line 249
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "header", 1 => array("navigation" => $_navigation_, "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 253
        echo "


    ";
        // line 259
        echo "    <h3 class='lego--heading'>
        content.title.twig
    </h3>
    ";
        // line 262
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.title", 1 => array("content" => $_contentBlock_, "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 268
        echo "


    ";
        // line 274
        echo "    <h3 class='lego--heading'>
        content.intro.twig
    </h3>
    ";
        // line 277
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.intro", 1 => array("content" => $_contentBlock_, "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 283
        echo "

    <h3 class='lego--heading'>
        content.block.twig
    </h3>
    ";
        // line 288
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content2Items"])) { $_content2Items_ = $context["content2Items"]; } else { $_content2Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content2Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4 col--q-small", "headingSize" => "3")), "method"), "html", null, true);
        // line 294
        echo "
    <hr/>

    ";
        // line 297
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content3Items"])) { $_content3Items_ = $context["content3Items"]; } else { $_content3Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content3Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-3 col--q-small")), "method"), "html", null, true);
        // line 302
        echo "
    <hr/>

    ";
        // line 305
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["content4Items"])) { $_content4Items_ = $context["content4Items"]; } else { $_content4Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.block", 1 => array("content" => $_content4Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-4 col-2-4--q-medium col--q-small")), "method"), "html", null, true);
        // line 310
        echo "
    <hr/>
    
    ";
        // line 316
        echo "    <h3 class='lego--heading'>
       content.list.twig
    </h3>
 
    ";
        // line 320
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["places"])) { $_places_ = $context["places"]; } else { $_places_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.list", 1 => array("content" => $_places_, "colSize" => "-2-4 col--q-small", "isStacked" => "", "headingSize" => "h4", "blockSize" => "s", "themeAttr" => "pb-0")), "method"), "html", null, true);
        // line 327
        echo "
    
    <hr class='mt-m'/>

    ";
        // line 331
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["places"])) { $_places_ = $context["places"]; } else { $_places_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.list", 1 => array("content" => $_places_, "colSize" => "-2-4", "isStacked" => "", "headingSize" => "h4", "blockSize" => "s", "themeAttr" => "bb-primary")), "method"), "html", null, true);
        // line 338
        echo "
    ";
        // line 342
        echo "    <h3 class='lego--heading'>
        article.list.twig
    </h3>
    ";
        // line 345
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "article.list", 1 => array("article" => $_article_, "colSize" => "", "isStacked" => "", "headingSize" => "h4", "blockSize" => "m")), "method"), "html", null, true);
        // line 351
        echo "


    ";
        // line 357
        echo "    <h3 class='lego--heading'>
        content.media.twig
    </h3>
    ";
        // line 360
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-4", "mediaRight" => "col-3-4", "blockSize" => "m")), "method"), "html", null, true);
        // line 367
        echo "
    <hr />

    ";
        // line 370
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-3", "mediaRight" => "col-2-3", "blockSize" => "m")), "method"), "html", null, true);
        // line 377
        echo "
    <hr />

    ";
        // line 380
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["contentBlock"])) { $_contentBlock_ = $context["contentBlock"]; } else { $_contentBlock_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "content.media", 1 => array("content" => $_contentBlock_, "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-2-4 col--q-small", "mediaRight" => "col-2-4 col--q-small", "blockSize" => "m")), "method"), "html", null, true);
        // line 387
        echo "


    ";
        // line 393
        echo "    <h3 class='lego--heading'>
        gallery.showcase.twig
    </h3>
    ";
        // line 396
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["galleryShowcase"])) { $_galleryShowcase_ = $context["galleryShowcase"]; } else { $_galleryShowcase_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.showcase", 1 => array("galleryShowcase" => $_galleryShowcase_, "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 400
        echo "

    
    ";
        // line 406
        echo "    <h3 class='lego--heading'>
        gallery.list.twig
    </h3>
    <!-- I have passed in different nodes just to keep the site smaller ;) -->
    ";
        // line 410
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery2Items"])) { $_gallery2Items_ = $context["gallery2Items"]; } else { $_gallery2Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery2Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4")), "method"), "html", null, true);
        // line 415
        echo "
    <hr/>

    ";
        // line 418
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery3Items"])) { $_gallery3Items_ = $context["gallery3Items"]; } else { $_gallery3Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery3Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-3")), "method"), "html", null, true);
        // line 423
        echo "
    <hr/>

    ";
        // line 426
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["gallery4Items"])) { $_gallery4Items_ = $context["gallery4Items"]; } else { $_gallery4Items_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "gallery.list", 1 => array("gallery" => $_gallery4Items_, "isStacked" => "", "blockSize" => "m", "colSize" => "-1-4")), "method"), "html", null, true);
        // line 431
        echo "
    

    ";
        // line 437
        echo "    <h3 class='lego--heading'>
        comments.twig
    </h3>
    ";
        // line 440
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["commentThread"])) { $_commentThread_ = $context["commentThread"]; } else { $_commentThread_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "comments", 1 => array("commentThread" => $_commentThread_, "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4 col--q-small")), "method"), "html", null, true);
        // line 445
        echo "

    
    ";
        // line 451
        echo "    <h3 class='lego--heading'>
        Panel.twig
    </h3>
    ";
        // line 454
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["panel"])) { $_panel_ = $context["panel"]; } else { $_panel_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "panel", 1 => array("panel" => $_panel_, "blockSize" => "m")), "method"), "html", null, true);
        // line 457
        echo "
    

    <h3 class='lego--heading'>
        panel.alert.twig
    </h3>
    ";
        // line 463
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["alertPanel"])) { $_alertPanel_ = $context["alertPanel"]; } else { $_alertPanel_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "panel.alert", 1 => array("panel" => $_alertPanel_, "blockSize" => "m", "theme" => "")), "method"), "html", null, true);
        // line 467
        echo "


    ";
        // line 473
        echo "    <h3 class='lego--heading'>
        Barchart.twig
    </h3>
    ";
        // line 476
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["barchart"])) { $_barchart_ = $context["barchart"]; } else { $_barchart_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "barchart", 1 => array("barchart" => $_barchart_, "blockSize" => "m")), "method"), "html", null, true);
        // line 479
        echo "


    ";
        // line 485
        echo "    <h3 class='lego--heading'>
        Forms
    </h3>
    ";
        // line 488
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["barchart"])) { $_barchart_ = $context["barchart"]; } else { $_barchart_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "form", 1 => array("barchart" => $_barchart_, "colSize" => "-2-4 col--q-small", "blockSize" => "m")), "method"), "html", null, true);
        // line 492
        echo "
    <hr />

    ";
        // line 495
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "form", 1 => array("formData" => $_formData_, "colSize" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 499
        echo "
    
    ";
        // line 501
        if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
        if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macros_, "lego", array(0 => "definition.table", 1 => array("formData" => $_formData_, "colSize" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 505
        echo "

    

    <h3 class='lego--heading'>
       ...
    </h3>
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
        return array (  389 => 505,  385 => 501,  381 => 499,  377 => 495,  372 => 492,  368 => 488,  363 => 485,  358 => 479,  354 => 476,  349 => 473,  344 => 467,  340 => 463,  332 => 457,  328 => 454,  323 => 451,  318 => 445,  314 => 440,  309 => 437,  304 => 431,  300 => 426,  295 => 423,  291 => 418,  286 => 415,  282 => 410,  276 => 406,  271 => 400,  267 => 396,  262 => 393,  257 => 387,  253 => 380,  248 => 377,  244 => 370,  239 => 367,  235 => 360,  230 => 357,  225 => 351,  221 => 345,  216 => 342,  213 => 338,  209 => 331,  203 => 327,  199 => 320,  193 => 316,  188 => 310,  184 => 305,  179 => 302,  175 => 297,  170 => 294,  166 => 288,  159 => 283,  155 => 277,  150 => 274,  145 => 268,  141 => 262,  136 => 259,  131 => 253,  127 => 249,  122 => 246,  117 => 240,  115 => 229,  110 => 226,  108 => 204,  105 => 203,  103 => 187,  100 => 186,  98 => 174,  95 => 173,  93 => 165,  90 => 164,  88 => 149,  85 => 148,  83 => 129,  80 => 128,  78 => 113,  75 => 112,  73 => 101,  70 => 100,  68 => 91,  65 => 90,  63 => 81,  60 => 80,  58 => 69,  55 => 68,  53 => 59,  49 => 57,  47 => 46,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
