<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

$vars['closetcontent'] = array(
    array(
        "type" => "h1",
        "data" => "Fred's closet"
    ),
    array(
        "type" => "intro",
        "data" => " Fred has so many skeletons in his closet that he can’t keep track of them all! Just like Fred, websites also have a lot of skeletons but have no closet to store them in. Fred’s Closet is the perfect hideaway to keep all those little secrets. "
    )
);

$vars['closetimage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "title" => "image title",
        "src" => "assets/images/freds-closet.png"
    )         
);
$vars['closet2content'] = array(
    array(
        "type" => "h2",
        "data" => "Why use Fred's closet?",
        "class" => "font-primary--light"
    ),
    
      
    "data" => "I am some text"
    
);

$vars['closet2image'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "title" => "image title",
        "src" => "assets/images/freds-closet.png"
    )   
);

$vars['closet3content'] = array(
    array(
        "type" => "h3",
        "data" => "Why use Fred's closet?",
        "class" => "font-primary--light"
    ),
    array(
        "type" => "p",
        "class" => "intro",
        "data" => "So that Fred's closest doesn't get messy. Fred has kindly seperated his closest into a few different sections. These are as follows:"
    ),
    "data" =>   "Colours:",
                "A place to document the main colors used on your project's site.",
                "Typography:", 
                "A place to document the font-stacks used on your project's site as well as test the heirarchy", 
                "Flego blocks:", 
                "A place for common HTML elements."

);
$vars['closet3image'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "title" => "image title",
        "src" => "assets/images/freds-closet.png"
    )
              
);
$vars['themecoloursintro'] = array(
    array(
        "type" => "h2",
        "class" => "font-primary--light text-center",
        "data" => "Theme Colors"
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

/*$vars['fonts'] = array(   
    "xxxs",  
    "xxs", 
    "xs", 
    "s",
    "m",
    "l",
    "xl",
    "xxl",
    "xxxl"
);*/

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
echo $twig->render('freds-closet.twig', array('siteClass' => '','data' => $vars));