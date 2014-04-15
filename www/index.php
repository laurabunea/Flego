<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('homepage.twig', array('siteClass' => '', 'go' => 'here'));
