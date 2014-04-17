<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

$vars['fredcontent'] = array(
    array(
        "type" => "h1",
        "data" => "Fred, the friendly front-end framework "
    ),
    array(
        "type" => "intro",
        "data" => "Fred helps jump-start your front-end projects. He's a super flexible little guy with a nice grunt-powered CLI. "
    ),
    array(
        "type" => "content",
        "data" => array(
            "Fred aims to solve a classic front-end problem: sharing and re-using common components between projects, while allowing each project to retain custom variables and configuration.",
            "You include '_fred.scss' in your project, and customise its behavior in '_fred-theme.scss'. When there's an update to Fred, you can update it with a 'bower update' and get all the new Fred goodness in your project right away, without losing your settings. "
            )
    ),
    array(
        "type" => "button",
        "label" => "Read more about Fred.scss",
        "href" => "http://springload.github.io/Fred.scss/#meet-fred-the-friendly-front-end-framework",
    )
);

$vars['fredimage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "title" => "image title",
        "src" => "assets/images/fred-scss.jpg"
    )
              
);

echo $twig->render('homepage.twig', array('siteClass' => '','data' => $vars));