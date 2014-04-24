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
echo $twig->render('freds-closet.twig', array('siteClass' => '','data' => $vars));