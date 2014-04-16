<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('freds-closet.twig', array('the' => 'variables', 'go' => 'here'));