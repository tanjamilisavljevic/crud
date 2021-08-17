<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';


function whatIsHappening()
{
    echo '<pre>';
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
//    echo '<h2>$_SESSION</h2>';
//    var_dump($_SESSION);
    echo '</pre>';
}
//
//whatIsHappening();

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);

$createWorked = $cardRepository->create();


$cards = $cardRepository->get();

if (empty($_GET))
{
    if (isset($_POST['submit'])) {
        if (!$createWorked) {
            $endMessage = "Error.";
        } else {
            $endMessage = "Success.";
        }
    }
    require 'overview.php';
}
else if (isset($_GET['action']) && $_GET['action'] == 'edit')
{
    require 'edit.php';
}
else
{
    require 'delete.php';
}

// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
//require 'overview.php';