<?php

/* blocks.twig */
class __TwigTemplate_eda2a4c085b10bfd0316f697ffb2a319e4b960c77ca34ae11c6ac228b5cd3cc0 extends Twig_Template
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
        // line 57
        echo "
    ";
        // line 58
        $context["contentBlock"] = array(0 => array("type" => "h2", "data" => "i am a heading"), 1 => array("type" => "intro", "data" => array(0 => "I am a para", 1 => "I am a second para")));
        // line 67
        echo "

    ";
        // line 69
        $context["storyBlock"] = array(0 => array("type" => "h1", "data" => "i am a heading"), 1 => array("type" => "intro", "data" => array(0 => "I am a para", 1 => "I am a second para")), 2 => array("type" => "link", "data" => array(0 => array("label" => "Click me", "anchor" => "/clickme/"))), 3 => array("type" => "button", "data" => array(0 => array("label" => "Click me", "anchor" => "/clickme/"))));
        // line 90
        echo "
    ";
        // line 101
        echo "

    ";
        // line 103
        $context["article"] = array("title" => "Article title", "date" => "January 2013", "category" => "Television", "link" => "Read more", "linkAnchor" => "/clickme", "desc" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know.");
        // line 112
        echo "
    ";
        // line 113
        $context["gallery2Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"));
        // line 124
        echo "
    ";
        // line 125
        $context["panel"] = array("title" => "Get in touch", "desc" => "We would love to hear from you, you attractive person you.", "btnLink" => "helpme.co.nz", "btnTitle" => "Contact Us");
        // line 134
        echo "
    ";
        // line 135
        $context["alertPanel"] = array("title" => "Warning", "desc" => "Do not touch that button", "btnLink" => "helpme.co.nz", "btnTitle" => "Click me, I am a button");
        // line 144
        echo "
    ";
        // line 145
        $context["commentThread"] = array(0 => array("name" => "Laura Bunea", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."), 1 => array("name" => "Mr Blob", "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum."));
        // line 156
        echo "
    ";
        // line 157
        $context["gallery3Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"));
        // line 172
        echo "    
    ";
        // line 173
        $context["gallery4Items"] = array(0 => array("caption" => "Item one", "image" => "assets/images/gallery-showcase.jpg"), 1 => array("caption" => "Item two", "image" => "assets/images/gallery-showcase.jpg"), 2 => array("caption" => "Item three", "image" => "assets/images/gallery-showcase.jpg"), 3 => array("caption" => "Item four", "image" => "assets/images/gallery-showcase.jpg"));
        // line 192
        echo "
    ";
        // line 193
        $context["navigation"] = array(0 => array("title" => "Home", "anchor" => "/"), 1 => array("title" => "About", "anchor" => "/about/"), 2 => array("title" => "Blog", "anchor" => "/blog/"));
        // line 208
        echo "
    ";
        // line 209
        $context["gallerywithcaptions"] = array("title" => "Gallery images with captions", "image" => "assets/images/gallery-showcase.jpg", "imagetitle" => "Image title", "imagesubtitle" => "Image sub title or date", "imagecaption" => "I am an image caption");
        // line 217
        echo "
    ";
        // line 218
        $context["content2Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 230
        echo "
    ";
        // line 231
        $context["content3Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 247
        echo "
    ";
        // line 248
        $context["content4Items"] = array(0 => array("heading" => "Heading 1", "copy" => "Anyway, Hairy Maclary from Donaldsons Dairy is just The Hungery Caterpilar in disguise, to find the true meaning of life, one must start chundering with the can of Watties Baked Beans, mate. After the vivid is munted, you add all the pearler wet blankets to the giant weka youve got yourself a meal. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 1 => array("heading" => "Heading 2", "copy" => "You have no idea how nuclear-free our hard case stubbies were aye. Every time I see those good as cans of Watties Baked Beans its like smoko time all over again aye, Im not here to frack spiders. Anyway, Rangi is just Sir Edmond Hillary in disguise, to find the true meaning of life, one must start burning my Vogels with the Tui, mate.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 2 => array("heading" => "Heading 3", "copy" => " Technology has allowed cool tiki tours to participate in the global conversation of random All Blacks. The next Generation of pretty suss sad guys have already cooked over at the fish n chip shop. Whats the hurry the Armed Offenders Squad? Theres plenty of Edmonds Cook Books in a waka.", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"), 3 => array("heading" => "Heading 4", "copy" => "Lake Taupo holds the most sweet community in the country.. James Cook was wobbling when the kiwi as rooting event occured. Fair suck of the sav, this beached as scarfie is as beaut as a hammered. Mean while, in South Pacific, James and the Giant Peach and Jonah Lomu were up to no good with a bunch of tapu whitebait fritters. ", "link" => "Click me", "link-href" => "http:www.clickme.co.nz"));
        // line 270
        echo "
    

    ";
        // line 273
        $context["galleryShowcase"] = array("title" => "Hello there", "url" => "/link/click/me", "imageSource" => "assets/images/gallery-showcase.jpg", "imageCredit" => "Some photographer", "parentLink" => "/parent/link", "category" => "Television", "date" => "14 January 2014", "listingBlurb" => "Dont be a egg. After the fella is skived off, you add all the pretty suss cookie times to the foreshore and seabed issue youve got yourself a meal. Technology has allowed carked it housies to participate in the global conversation of hard case pieces of cheese on toast. The next Generation of nuclear-free manuses have already munted over at Rangitoto Island. Whats the hurry the Armed Offenders Squad? Theres plenty of jerseys in South Pacific..");
        // line 284
        echo "


    ";
        // line 290
        echo "    
    ";
        // line 291
        $this->env->loadTemplate("theme-helper.twig")->display($context);
        // line 292
        echo "    ";
        $this->env->loadTemplate("typography.twig")->display($context);
        // line 293
        echo "    <h3 class='lego--heading'>
        header.twig
    </h3>
    ";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "header", 1 => array("navigation" => (isset($context["navigation"]) ? $context["navigation"] : null), "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 300
        echo "


    ";
        // line 306
        echo "    <h3 class='lego--heading'>
        content.title.twig
    </h3>
    ";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.title", 1 => array("content" => (isset($context["contentBlock"]) ? $context["contentBlock"] : null), "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 315
        echo "


    ";
        // line 321
        echo "    <h3 class='lego--heading'>
         test 
    </h3>
    ";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.block", 1 => array("content" => (isset($context["contentBlock"]) ? $context["contentBlock"] : null), "sidebar" => array(0 => array("type" => "image", "src" => "/some/image.png"), 1 => array("type" => "image", "src" => "/some/image.png"), 2 => array("type" => "button", "href" => "mcdonalds.co.nz/", "label" => "Tasty food for you"), 3 => "Some random paragraph", 4 => "Default is just a paragraph!", 5 => array("type" => "raw", "data" => "<h4>Some literal html goes here</h4>")), "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 351
        echo "

<hr />
    ";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.block", 1 => array("content" => (isset($context["storyBlock"]) ? $context["storyBlock"] : null), "isStackedTop" => "", "colSizeHeading" => "-3-4", "isStackedBottom" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 360
        echo "
    ";
        // line 388
        echo "    
    ";
        // line 392
        echo "    <h3 class='lego--heading'>
       content.list.twig
    </h3>
 
    ";
        // line 396
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.list", 1 => array("content" => (isset($context["places"]) ? $context["places"] : null), "colSize" => "-2-4 col--q-small", "isStacked" => "", "headingSize" => "h4", "blockSize" => "s", "themeAttr" => "pb-0")), "method"), "html", null, true);
        // line 403
        echo "
    
    <hr class='mt-m'/>

    ";
        // line 407
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.list", 1 => array("content" => (isset($context["places"]) ? $context["places"] : null), "colSize" => "-2-4", "isStacked" => "", "headingSize" => "h4", "blockSize" => "s", "themeAttr" => "bb-primary")), "method"), "html", null, true);
        // line 414
        echo "
    ";
        // line 418
        echo "    <h3 class='lego--heading'>
        article.list.twig
    </h3>
    ";
        // line 421
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "article.list", 1 => array("article" => (isset($context["article"]) ? $context["article"] : null), "colSize" => "", "isStacked" => "", "headingSize" => "h4", "blockSize" => "m")), "method"), "html", null, true);
        // line 427
        echo "


    ";
        // line 433
        echo "    <h3 class='lego--heading'>
        content.media.twig
    </h3>
    ";
        // line 436
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.media", 1 => array("content" => (isset($context["contentBlock"]) ? $context["contentBlock"] : null), "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-4", "mediaRight" => "col-3-4", "blockSize" => "m")), "method"), "html", null, true);
        // line 443
        echo "
    <hr />

    ";
        // line 446
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.media", 1 => array("content" => (isset($context["contentBlock"]) ? $context["contentBlock"] : null), "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-1-3", "mediaRight" => "col-2-3", "blockSize" => "m")), "method"), "html", null, true);
        // line 453
        echo "
    <hr />

    ";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "content.media", 1 => array("content" => (isset($context["contentBlock"]) ? $context["contentBlock"] : null), "isStacked" => "", "blockSize" => "m", "mediaLeft" => "col-2-4 col--q-small", "mediaRight" => "col-2-4 col--q-small", "blockSize" => "m")), "method"), "html", null, true);
        // line 463
        echo "


    ";
        // line 469
        echo "    <h3 class='lego--heading'>
        gallery.showcase.twig
    </h3>
    ";
        // line 472
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "gallery.showcase", 1 => array("galleryShowcase" => (isset($context["galleryShowcase"]) ? $context["galleryShowcase"] : null), "isStacked" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 476
        echo "

    
    ";
        // line 482
        echo "    <h3 class='lego--heading'>
        gallery.list.twig
    </h3>
    <!-- I have passed in different nodes just to keep the site smaller ;) -->
    ";
        // line 486
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "gallery.list", 1 => array("gallery" => (isset($context["gallery2Items"]) ? $context["gallery2Items"] : null), "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4")), "method"), "html", null, true);
        // line 491
        echo "
    <hr/>

    ";
        // line 494
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "gallery.list", 1 => array("gallery" => (isset($context["gallery3Items"]) ? $context["gallery3Items"] : null), "isStacked" => "", "blockSize" => "m", "colSize" => "-1-3")), "method"), "html", null, true);
        // line 499
        echo "
    <hr/>

    ";
        // line 502
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "gallery.list", 1 => array("gallery" => (isset($context["gallery4Items"]) ? $context["gallery4Items"] : null), "isStacked" => "", "blockSize" => "m", "colSize" => "-1-4")), "method"), "html", null, true);
        // line 507
        echo "
    

    ";
        // line 513
        echo "    <h3 class='lego--heading'>
        comments.twig
    </h3>
    ";
        // line 516
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "comments", 1 => array("commentThread" => (isset($context["commentThread"]) ? $context["commentThread"] : null), "isStacked" => "", "blockSize" => "m", "colSize" => "-2-4 col--q-small")), "method"), "html", null, true);
        // line 521
        echo "

    
    ";
        // line 527
        echo "    <h3 class='lego--heading'>
        Panel.twig
    </h3>
    ";
        // line 530
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "panel", 1 => array("panel" => (isset($context["panel"]) ? $context["panel"] : null), "blockSize" => "m")), "method"), "html", null, true);
        // line 533
        echo "
    

    <h3 class='lego--heading'>
        panel.alert.twig
    </h3>
    ";
        // line 539
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "panel.alert", 1 => array("panel" => (isset($context["alertPanel"]) ? $context["alertPanel"] : null), "blockSize" => "m", "theme" => "")), "method"), "html", null, true);
        // line 543
        echo "


    ";
        // line 549
        echo "    <h3 class='lego--heading'>
        Barchart.twig
    </h3>
    ";
        // line 552
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "barchart", 1 => array("barchart" => (isset($context["barchart"]) ? $context["barchart"] : null), "blockSize" => "m")), "method"), "html", null, true);
        // line 555
        echo "


    ";
        // line 561
        echo "    <h3 class='lego--heading'>
        Forms
    </h3>
    ";
        // line 564
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "form", 1 => array("barchart" => (isset($context["barchart"]) ? $context["barchart"] : null), "colSize" => "-2-4 col--q-small", "blockSize" => "m")), "method"), "html", null, true);
        // line 568
        echo "
    <hr />

    ";
        // line 571
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "form", 1 => array("formData" => (isset($context["formData"]) ? $context["formData"] : null), "colSize" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 575
        echo "
    
    ";
        // line 577
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "lego", array(0 => "definition.table", 1 => array("formData" => (isset($context["formData"]) ? $context["formData"] : null), "colSize" => "", "blockSize" => "m")), "method"), "html", null, true);
        // line 581
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
        return array (  348 => 581,  346 => 577,  342 => 575,  340 => 571,  335 => 568,  333 => 564,  328 => 561,  323 => 555,  321 => 552,  316 => 549,  311 => 543,  309 => 539,  301 => 533,  299 => 530,  294 => 527,  289 => 521,  287 => 516,  282 => 513,  277 => 507,  275 => 502,  270 => 499,  268 => 494,  263 => 491,  261 => 486,  255 => 482,  250 => 476,  248 => 472,  243 => 469,  238 => 463,  236 => 456,  231 => 453,  229 => 446,  224 => 443,  222 => 436,  217 => 433,  212 => 427,  210 => 421,  205 => 418,  202 => 414,  200 => 407,  194 => 403,  192 => 396,  186 => 392,  183 => 388,  180 => 360,  178 => 354,  173 => 351,  171 => 324,  166 => 321,  161 => 315,  159 => 309,  154 => 306,  149 => 300,  147 => 296,  142 => 293,  139 => 292,  137 => 291,  134 => 290,  129 => 284,  127 => 273,  122 => 270,  120 => 248,  117 => 247,  115 => 231,  112 => 230,  110 => 218,  107 => 217,  105 => 209,  102 => 208,  100 => 193,  97 => 192,  95 => 173,  92 => 172,  90 => 157,  87 => 156,  85 => 145,  82 => 144,  80 => 135,  77 => 134,  75 => 125,  72 => 124,  70 => 113,  67 => 112,  65 => 103,  61 => 101,  58 => 90,  56 => 69,  52 => 67,  50 => 58,  47 => 57,  44 => 45,  42 => 24,  39 => 23,  37 => 8,  31 => 4,  28 => 3,);
    }
}
