<?php 
include_once __DIR__ . "/../init.php";

$vars = array();


$vars['contentBlock'] = array(
    array(
        "type" => "h1",
        "data" => "I'm a heading!"
    ),
    array(
        "type" => "h2",
        "data" => "I'm a heading 2!"
    ),
    array(
        "type" => "media",
        "data" => array(
            "I'm a heading!"
            "I'm a heading!",
            "I'm a heading!",
        )
    ),
)


echo $twig->render('flego.twig', array('data'=>$vars));