<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

$vars['article'] = array(
    array(
        "type" => "h1",
        "data" => "Article title"
    ),
    array(
        "type" => "link",
        "label" => "Read more",
        "href" => "/clickme"
    )
);

$vars['contentblock'] = array(
    array(
        "type" => "h1",
        "data" => "I am a title"
    ),
    array(
        "type" => "intro",
        "data" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know"
    ),
    array(
        "type" => "content",
        "data" => "Oh no! No worries, this cool morepork is as kiwi as as a paru Undie 500. Across the ditch, good as gold, fully. Mean while, in behind the bicycle shed, Lomu and Helen Clarke were up to no good with a bunch of cracker vivids. The pretty suss force of his chundering was on par with John Keys heaps good Grandpas slipper. Put the jug on will you bro, all these wicked slippers can wait till later. The first prize for burning my Vogels goes to... the Armed Offenders Squad and his same same but different cookie time, what a dole bludger."
    )
              
);

$vars['mediaimage'] = array(
 array(
    "type" => "image-responsive",
    "alt" => "alt text",
    "title" => "image title",
    "src" => "assets/images/gallery-showcase.jpg"
    )
              
);

echo $twig->render('flego.twig', array('data' => $vars));
/*,
    array(
        "type" => "media",
        "data" => array(
            "I'm a heading!",
            "I'm a heading!",
            "I'm a heading!",
        ),
    array(
        "data" => "A slice of heaven. Always blow on the pie. Ill see you right, this bung seabed is as bloody as a tapu Undie 500. Chur bro, we go together, kinda like mince n cheese ya know"
    )
    )*/