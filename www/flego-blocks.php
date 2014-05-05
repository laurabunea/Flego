<?php 
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

include_once __DIR__ . "/dummyData/split.php";
$vars['splitData'] = array(
   
    "code" => str_replace("{% import \"macros.twig\" as macros %}\n", "", file_get_contents(__DIR__ . '/templates/macros/split.twig')),
    "rendered" => $twig->render('macros/split.twig', array('data' => $vars)),
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
?>
