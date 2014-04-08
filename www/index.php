<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('template.twig', array('the' => 'variables', 'go' => 'here'));
