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