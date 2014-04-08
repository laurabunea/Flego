<?php 
include_once __DIR__ . "/../init.php";

echo $twig->render('blocks.twig', array('the' => 'variables', 'go' => 'here'));