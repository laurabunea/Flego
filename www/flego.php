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
        "data" => "Flego is a great tool for bringing your wireframes to life fast. Thus giving you more time to revise the designs more often and refine them sooner."
    )       
);

//introduction image
$vars['flegoImage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "Flego",
        "title" => "flego",
        "src" => "assets/images/flego.png"
        )           
);

include_once __DIR__ . "/flego-blocks.php";

echo $twig->render('flego.twig', array('data' => $vars));