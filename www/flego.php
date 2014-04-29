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


$vars['flegoContent'] = array(
    array(
        "type" => "h2",
        "data" => "Flego, the cool kids lego ",
        "class" => "font-primary--light"
    ),
     array(
        "type" => "p",
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

$vars['dummyImage'] = array(
    array(
        "type" => "image-responsive",
        "alt" => "Flego",
        "title" => "portrait",
        "src" => "assets/images/portrait.jpg"
        )           
);


$vars['panel'] = array(
    array(
        "type" => "h2",
        "data" => "Get in touch",
        "class" => "font-primary--light"
    ),
    "data" => "We would love to hear from you, you attractive person you."
     
);

$vars['panelButton'] = array(
    array(
        "type" => "button",
        "label" => "Click me",
        "href" => "/clickme",
        "class" => "right col border-box mt-m--q-small"
    )
     
);
$vars['dummyContent'] = array(
    array(
        "type" => "h2",
        "data" => "I am a title"
    ),
    "data" => "Kia ora.. You're not in Guatemala now, this rip-off kumara is as sweet as as a sweet as scarfie. Mean while, in Shortland Street, Manus Morissette and The Hungery Caterpilar were up to no good with a bunch of beached as whitebait fritters. "     
);

echo $twig->render('flego.twig', array('data' => $vars));