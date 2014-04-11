<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('typography.twig', array('the' => 'variables', 'go' => 'here'));