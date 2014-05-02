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



$vars['mediaimage'] = array(
 array(
    "type" => "image-responsive",
    "alt" => "alt text",
    "title" => "image title",
    "src" => "assets/images/gallery-showcase.jpg"
    )
              
);



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

$vars['flegoImage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "Flego",
        "title" => "felgo",
        "src" => "assets/images/flego.png"
        )           
);

$vars['galleryData'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "Flego 1",
        "title" => "portrait",
        "src" => "assets/images/portrait.jpg"
    ),
     array(
        "type" => "image-responsive",
        "alt" => "Flego 2 ",
        "title" => "portrait",
        "src" => "assets/images/portrait.jpg"
    ),
    array(
        "type" => "image-responsive",
        "alt" => "Flego 3",
        "title" => "portrait",
        "src" => "assets/images/portrait.jpg"
    ),
    array(
        "type" => "image-responsive",
        "alt" => "Flego 4",
        "title" => "portrait",
        "src" => "assets/images/portrait.jpg"
    )       
);


include_once __DIR__ . "/dummyData/title-centered.php";
$vars['titleCenteredView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/title-centered.twig')),
    "rendered" => $twig->render('macros/title-centered.twig', array('data' => $vars)),
);

include_once __DIR__ . "/dummyData/gallery-list.php";
$vars['galleryListView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/gallery-list.twig')),
    "rendered" => $twig->render('macros/gallery-list.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/gallery-showcase.php";
$vars['galleryShowcaseView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/gallery-showcase.twig')),
    "rendered" => $twig->render('macros/gallery-showcase.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/content-block.php";
$vars['contentBlockView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/content-block.twig')),
    "rendered" => $twig->render('macros/content-block.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/forms.php";
$vars['formsView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/forms.twig')),
    "rendered" => $twig->render('macros/forms.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/progress-tile.php";
$vars['progressTileView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/progress-tile.twig')),
    "rendered" => $twig->render('macros/progress-tile.twig', array('data' => $vars)),
);

include_once __DIR__ . "/dummyData/bar-chart.php";
$vars['barchartView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/bar-chart.twig')),
    "rendered" => $twig->render('macros/bar-chart.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/panel.php";
$vars['panelView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/panel.twig')),
    "rendered" => $twig->render('macros/panel.twig', array('data' => $vars)),
);



include_once __DIR__ . "/dummyData/media.php";
$vars['mediaView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/media.twig')),
    "rendered" => $twig->render('macros/media.twig', array('data' => $vars)),
);


include_once __DIR__ . "/dummyData/comments.php";

$vars['commentsView'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/comments.twig')),
    "rendered" => $twig->render('macros/comments.twig', array('data' => $vars)),
);


echo $twig->render('flego.twig', array('data' => $vars));