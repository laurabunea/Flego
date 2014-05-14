<?php 
include_once __DIR__ . "/../init.php";


$vars = array();

$vars['fredsintro'] = array(
    array(
        "type" => "h1",
        "data" => "Why make life harder when Fred can help out :)"
    )
);

$vars['fredSection'] = array(
    "content" => array(
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
            "class" => "mt-s",
            "href" => "http://springload.github.io/Fred.scss/#meet-fred-the-friendly-front-end-framework",
        )
    ),
    "image" => array(
        array(
            "type" => "image-responsive",
            "alt" => "alt text",
            "title" => "image title",
            "src" => "assets/images/fred-scss.jpg"
        )
    )
);


$vars['flegoSection'] = array(
    "content" => array(
        array(
            "type" => "h1",
            "data" => "Flego, the cool kids Lego "
        ),
        array(
            "type" => "intro",
            "data" => "Flego blocks are blocks made up from Fred.scss components."
        ),
        array(
            "type" => "p",
            "data" => "Flego is a great tool for bringing your wireframes to life fast. Thus giving you more time to revise the designs more often and refine them sooner."
                
        ),
        array(
            "type" => "button",
            "label" => "Read more about Flego",
            "class" => "mt-s",
            "href" => "flego.php",
        )
    ),
    "image" => array(
        array(
            "type" => "image-responsive",
            "alt" => "alt text",
            "title" => "image title",
            "src" => "assets/images/flego.png"
        )
    )
);


$vars['fredsClosetSection'] = array(
    "content" => array(
        array(
            "type" => "h1",
            "data" => "Fred's Closet "
        ),
        array(
            "type" => "intro",
            "data" => "Fred has so many skeletons in his closet that he can’t keep track of them all! Just like Fred, websites also have a lot of skeletons but have no closet to store them in. Fred’s Closet is the perfect hideaway to keep all those little secrets."
        ),
       
        array(
            "type" => "button",
            "label" => "Read more about Fred's closet",
            "href" => "/freds-closet.php",
        )
    ), 
    "image" => array(
        array(
        "type" => "image-responsive",
        "alt" => "alt text",
        "title" => "image title",
        "src" => "assets/images/freds-closet.png"
        )
    )
);


echo $twig->render('homepage.twig', array('siteClass' => '','data' => $vars));