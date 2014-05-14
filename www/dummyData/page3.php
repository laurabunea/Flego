<?php 
$vars['NZOnAirNav'] = array(
    
    "navigation" => array(
                        array(
                            "type" => "link",
                            "class" => "inline-block block-m block--stacked small uppercase",
                            "href" => "/home",
                            "label" => "television"
                        ),
                        array(
                            "type" => "link",
                            "class" => "inline-block block-m block--stacked small uppercase",
                            "href" => "/about",
                            "label" => "digital"
                        )
                    ),
    "logo" => array(
        array(
        "type" => "image",
        "src" => "/assets/images/nzonair.jpg",
        )
    )     
);
$vars['NZOnAirIntro'] = array(
    array(
        "type" => "h1",
        "data" => "NZ On Air invests in New Zealanders’ stories and songs"
    ),
    array(
        "type" => "p",
        "class" => "intro",
        "data" => "A government broadcast funding agency - we invest in diverse local television, radio, music and digital media for New Zealand audiences."
    )
);
$vars['NZOnAirShowcase'] = array(
    "content" => array(
        array(
            "type" => "P",
            "class" => "uppercase small font-primary--bold",
            "data" => "Music Showcase"
        ),
        array(
            "type" => "h2",
            "class" => "h3 mt-m",
            "data" => "Che-Fu - 2014 Pacific Music Awards Lifetime Achievement Award Winner"
        ),
        "data" => "Che-Fu was acknowleged at the 10th anniversary of the Pacific Music Awards for his significant contribution to Pasifika music in New Zealand."  
    ),
    "image" => array(

        array(
            "type" => "image-responsive",
            "alt" => "I am some copy",
            "src" => "/assets/images/CHE-FU.png"
        )
    )        
);


$vars['NZOnArticle'] = array(
    "contentRight" => array(
        array(
            "type" => "P",
            "class" => "font-primary--bold",
            "data" => "Putting New Zealanders in the picture — our stories and people on television"
        ),  
        "data" => "We invest more than $80 million a year in local television programmes on mainstream and regional free-to-air channels, so that you can see more, and a wider variety of, local content. "
        ,array(
            "type" => "block-link",
            "label" => "Showcase ",
            "class" => "clean-link",
            "href" => "imalink.com"
        ),
        array(
            "type" => "block-link",
            "label" => "Apply for funding",
            "class" => "clean-link",
            "href" => "imalink.com"
        )
    ),
    "contentLeft" => array(

        array(
            "type" => "block-link",
            "class" => "h3 clean-link",
            "label" => "Radio"
        
        )
    )        
);

?>