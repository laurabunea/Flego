<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('theme-helper.twig', array('the' => 'variables', 'go' => 'here'));