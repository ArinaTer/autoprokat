<?php
// Start a Session, You might start this somewhere else already.
session_start();

// What languages do we support
$available_langs = array('ru', 'en');

// Set our default language session
$_SESSION['lang'] = 'ru';

if(isset($_GET['lang']) && $_GET['lang'] != '') {
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs)) {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

// Include active language
include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');

?>