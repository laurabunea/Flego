<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

//introduction content
$vars['flegoContent'] = array(
    array(
        "type" => "h2",
        "data" => "Flego, the cool kids lego ",
        "class" => "font-primary--light"
    ),
     array(
        "type" => "intro",
        "data" => "These blocks should be used for starting purposes only. Once you recognise a pattern you should make specific blocks so you dont have  to repeat the code"
    )       
);

//introduction image
$vars['flegoImage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "Flego",
        "title" => "felgo",
        "src" => "assets/images/flego.png"
        )           
);

include_once __DIR__ . "/flego-blocks.php";

echo $twig->render('flego.twig', array('data' => $vars));