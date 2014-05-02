<?php 
include_once __DIR__ . "/../init.php";

$vars = array();

$vars['galleryItems'] = array(
    array(
        array(
        "type" => "h4",
        "data" => "caption one"
        ),
        array(
            "type" => "image-responsive",
            "src" => "assets/images/gallery-showcase.jpg",
            "alt" => "alt text"
        ),
        "data" => "I am a paragraph of text "
    ),
    array(
        array(
        "type" => "h4",
        "data" => "caption two"
        ),
        array(
            "type" => "image-responsive",
            "src" => "assets/images/gallery-showcase.jpg",
            "alt" => "alt text"
        ),
        "data" => "Second para"
        
    ),
    array(
        array(
        "type" => "h4",
        "data" => "caption three"
        ),
        array(
            "type" => "image-responsive",
            "src" => "assets/images/gallery-showcase.jpg",
            "alt" => "alt text"
        ),
        "data" => "I am a paragraph of text "
        
    )
         
);


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

$vars['formData'] = array(
    array(
        array(
            "type" => "label",
            "for" => "firstname",
            "data" => "First name",
            "class" => "col"
        ),
        array(
            "type" => "input",
            "placeholder" => "type first name here",
            "id" => "firstname",
            "class" => "col text-input"
        )
    ),
    array(
        array(
            "type" => "label",
            "for" => "lastname",
            "data" => "Last name",
            "class" => "col "
        ),
        array(
            "type" => "input",
            "placeholder" => "type last name here",
            "id" => "lastname",
            "class" => "col text-input"
        )
    ),
    array(
        array(
            "type" => "label",
            "for" => "Passwor",
            "data" => "Email address",
            "class" => "col "
        ),
        array(
            "type" => "input",
            "placeholder" => "type email here",
            "id" => "email",
            "class" => "col text-input"
        )
    ),
    array(
        array(
            "type" => "label",
            "for" => "Passwor",
            "data" => "Email address",
            "class" => "col"
        ),
        array(
            "type" => "input",
            "placeholder" => "type email here",
            "id" => "email",
            "class" => "col text-input"
        )
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
//{#$vars['panelButton'] = array(
//    array(
 //       "type" => "button",
//       "label" => "Click me",
 //       "href" => "/clickme",
 //       "class" => "right col border-box mt-m--q-small"
 //   )
     
//);#}






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
$vars['galleryShowcase'] = array(
    
    array(
        "type" => "h2",
        "href" => "/clickme",
        "data" => "Hello there"
    ),
    "data" => "Dont be a egg. After the fella is skived off, you add all the pretty suss cookie times to the foreshore and seabed issue youve got yourself a meal. Technology has allowed carked it housies to participate in the global conversation of hard case pieces of cheese on toast. The next Generation of nuclear-free manuses have already munted over at Rangitoto Island. Whats the hurry the Armed Offenders Squad? Theres plenty of jerseys in South Pacific."      
    ,
    array(
        "type" => "link",
        "href" => "/clickme",
        "label" => "Read more .."
    )
);

$vars['progressTile'] = array(
    
    array(
        "type" => "h3",
        "data" => "Visitors"
    ),
    "data" => "so far in our blog, and our website."      
    
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