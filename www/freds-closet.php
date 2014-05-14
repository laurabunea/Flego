<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

include_once __DIR__ . "/flego-blocks.php";
$vars['themes'] = array(   
    "primary",  
    "secondary", 
    "tertiary", 
    "quaternary", 
    "success", 
    "warning", 
    "error"      
);
     
$vars['fonts'] = array(   
    "light",  
    "italic", 
    "regular", 
    "bold"
);

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

$vars['spacingUnits'] = array( 
    array(
        "unit" => "xxxs",
        "px" => "6px"
    ),
    array(
        "unit" => "xxs",
        "px" => "8"
    ),
    array(
        "unit" => "xs",
        "px" => "8"
    ),
    array(
        "unit" => "s",
        "px" => "8"
    ),
    array(
        "unit" => "m",
        "px" => "8"
    ),
    array(
        "unit" => "l",
        "px" => "8"
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


$vars['typography'] = array(
    array(
        "type" => "h1",
        "data" => "h1.Heading Size",
        "class" => "h0"
    ),
    array(
        "type" => "h1",
        "data" => "h1.Heading Size"
    ),
    array(
        "type" => "h2",
        "data" => "h2.Heading Size"
    ),
    array(
        "type" => "h3",
        "data" => "h3.Heading Size"
    ),
        array(
        "type" => "h4",
        "data" => "h4.Heading Size"
    ),
    array(
        "type" => "h5",
        "data" => "h5.Heading Size"
    ),
    array(
        "type" => "h6",
        "data" => "h6.Heading Size"
    ),
    array(
        "type" => "h1",
        "data" => "h1.Heading Size"
    ),
    array(
        "type" => "p",
        "class" => "intro",
        "data" => "Oh no way! No worries, this snarky brain drain is as wicked as a sweet holden. Mean while, in the pub, The Topp Twins and Sir Edmond Hillary were up to no good with a bunch of dodgy Longest Drink in Towns."
    ),
    "data" =>   "The naff force of his whinging was on par with some uni student's epic L&P. Put the jug on will you bro, all these mint Swanndris can wait till later. The first prize for preparing the hungi goes to... John Key and his carked it Silver Fern, what a goon. Bro, kiwis are really chocka full good with fully sick old man's beards, aye."
    ,
    array(
        "type" => "h2",
        "data" => "h2.Heading Size"
    ),
    array(
        "type" => "p",
        "data" => "You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate."
    ),
    array(
        "type" => "h3",
        "data" => "h3.Heading Size"
    ),
    array(
        "type" => "p",
        "data" => "You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate."
    ),
    array(
        "type" => "h4",
        "data" => "h4.Heading Size"
    ),
    array(
        "type" => "p",
        "data" => "You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate."
    ),
    array(
        "type" => "h5",
        "data" => "h5.Heading Size"
    ),
    array(
        "type" => "p",
        "data" => "You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate."
    ),
    array(
        "type" => "h6",
        "data" => "h6.Heading Size"
    ),
    array(
        "type" => "p",
        "data" => "You have no idea how stuffed our primo vivids were aye. Every time I see those random Grandpa's slippers it's like the sausage sizzle all over again aye, take a squiz. Anyway, Manus Morissette is just Jim Hickey in disguise, to find the true meaning of life, one must start pashing with the cookie time, mate."
    )
);



/*
    Specific page content 
*/


$vars['closetcontent'] = array(
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
);

$vars['closetimage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "class" => "",
        "title" => "image title",
        "src" => "assets/images/freds-closet.png"
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

    $vars['dummycontent'] = array(
        array(
            "type" => "h1",
            "data" => "Common media block"
        ),
        array(
            "type" => "intro",
            "data" => "Intro para"
        ),
        array(
            "type" => "button",
            "label" => "I'm a button",
            "class" => "mt-s",
            "href" => "clickme",
        )
    );

include_once __DIR__ . "/dummyData/page1.php";

echo $twig->render('freds-closet.twig', array('siteClass' => '','data' => $vars));