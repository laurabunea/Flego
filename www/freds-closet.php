<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

include_once __DIR__ . "/flego-blocks.php";
include_once __DIR__ . "/dummyData/typography-heirarchy.php";
include_once __DIR__ . "/dummyData/page1.php";
include_once __DIR__ . "/dummyData/page2.php";
include_once __DIR__ . "/dummyData/page3.php";
//List your sites themes here: 
$vars['themes'] = array(   
    "primary",  
    "secondary", 
    "tertiary", 
    "quaternary", 
    "success", 
    "warning", 
    "error", 
    "watermelon"     
);

//List your sites font weights here:   
$vars['fonts'] = array(   
    "light",  
    "italic", 
    "regular", 
    "bold"
);

//List your block spacing sizes here: 
$vars['blocks'] = array(   
    "xxxs",  
    "xxs", 
    "xs", 
    "s",
    "m",
    "l",
    "xl",
    "xxl",
    "xxxl"
);

// 
$vars['spacingUnits'] = array( 
    array(
        "unit" => "xxxs",
        "px" => "6"
    ),
    array(
        "unit" => "xxs",
        "px" => "8"
    ),
    array(
        "unit" => "xs",
        "px" => "?"
    ),
    array(
        "unit" => "s",
        "px" => "?"
    ),
    array(
        "unit" => "m",
        "px" => "?"
    ),
    array(
        "unit" => "l",
        "px" => "?"
    ),
    array(
        "unit" => "xl",
        "px" => "48"
    ),
    array(
        "unit" => "xxl",
        "px" => "72"
    ),
    array(
        "unit" => "xxxl",
        "px" => "96"
    )
);

//List your sites breakpoints here:
$vars['gridBreakpoints'] = array( 
    array(
        
        "swatchTop" => "--q-xsmall",
        "swatchBottom" => "< 29ems"
    ),
    array(
       
        "swatchTop" => "--q-small",
        "swatchBottom" => "30ems  > 47.99ems"
    ),
    array(
       
        "swatchTop" => "--q-medium",
        "swatchBottom" => "48ems  > 63.99em"
    ),
    array(

        "swatchTop" => "--q-large",
        "swatchBottom" => "64ems > 74.99em"
    )
    ,array(

        "swatchTop" => "--q-xlarge",
        "swatchBottom" => "75em >"
    )
    
);


/*
    Specific page content 
*/

$vars['closetContent'] = array(
    "content" => array(
        array(
            "type" => "h1",
            "data" => "Fred's closet"
        ),
        array(
            "type" => "intro",
            "data" => " Fred has so many skeletons in his closet that he can’t keep track of them all! Just like Fred, websites also have a lot of skeletons but have no closet to store them in. Fred’s Closet is the perfect hideaway to keep all those little secrets.",
        ), 
        "data" => "So that Fred's closest doesn't get too messy. Fred has kindly seperated his closest into a few different sections for us. These are as follows:"
        ,
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs  clean-link",
            "href" => "#theme-colours",
            "label" => "Theme colours",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs  clean-link",
            "href" => "#spacing-helpers",
            "label" => "Spacing helpers",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs  clean-link",
            "href" => "#block-helpers",
            "label" => "Block helpers",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs clean-link",
            "href" => "#grid-breakpoints",
            "label" => "Grid breakpoints",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs clean-link",
            "href" => "#typography",
            "label" => "Typography",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs  clean-link",
            "href" => "#text-heirarchy",
            "label" => "Text Heirarachy",
        ),
        array(
            "type" => "button-inline",
            "class" => "block-s inline-block theme--primary mr-xs clean-link",
            "href" => "#flego-blocks",
            "label" => "Common flego blocks",
        )
    ),
    "image"=> array(
        array(
            "type" => "image-responsive",
            "alt" => "alt text",
            "class" => "",
            "title" => "image title",
            "src" => "assets/images/freds-closet.png"
        ) 
    )

);


$vars['themesSection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Theme Colors"
    ),
    array(
        "type" => "p",
        "class" => "intro text-center mb-m",
        "data" => "A place to document the main colors used on your project's site."
    )
              
);

$vars['spacingSection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Spacing helpers"
    ),
    array(
        "type" => "p",
        "class" => "intro text-center mb-m",
        "data" => "A place to document the base spacing sizes on your site"
    )          
);
$vars['blocksSection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Block helpers"
    ),
    array(
        "type" => "p",
        "class" => "intro mb-m text-center",
        "data" => "A place to document the block sizes on your site"
    )
              
);

$vars['gridSection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Grid breakpoints"
    ),
    array(
        "type" => "p",
        "class" => "intro mb-m text-center",
        "data" => "A place to document your grids breakpoints"
    )
              
);

$vars['heirarchySection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Text heirarchy"
    ),
    array(
        "type" => "p",
        "class" => "intro text-center mb-m",
        "data" => "A place to document the text heirarchy on your site"
    )         
);

$vars['typographySection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Typography "
    ),array(
        "type" => "p",
        "class" => "intro text-center mb-m",
        "data" => "A place to document font-stacks used on your project's site "    
    )   
);

$vars['flegoSection'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Flego blocks "
    ),array(
        "type" => "p",
        "class" => "intro text-center ",
        "data" => "A place to store common flego blocks"    
    )   
);

$vars['typographyPrimary'] = array(
    array(
        "type" => "p",
        "class" => "small uppercase",
        "data" => "Font primary:"
    ),
    array(
        "type" => "h3",
        "class" => "font-primary--bold",
        "data" => "SourceSansPro"
    )
    ,array(
        "type" => "p",
        "class" => "font-primary",
        "data" => "The stoked force of his skiving off was on par with Manus Morissette's flat stick quater-acre patch. Put the jug on will you bro, all these buzzy vivids can wait till later. "
    )          
);

$vars['typographySecondary'] = array(
    array(
        "type" => "p",
        "class" => "small uppercase font-secondary",
        "data" => "Font secondary:"
    ),
    array(
        "type" => "h3",
        "class" => "font-secondary--bold",
        "data" => "Georgia"
    )
    ,array(
        "type" => "p",
        "class" => "font-secondary--regular",
        "data" => "The stoked force of his skiving off was on par with Manus Morissette's flat stick quater-acre patch. Put the jug on will you bro, all these buzzy vivids can wait till later. "
    )          
);


echo $twig->render('freds-closet.twig', array('siteClass' => '','data' => $vars));