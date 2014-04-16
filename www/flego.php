<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('flego.twig', array('the' => 'variables', 'go' => 'here'));