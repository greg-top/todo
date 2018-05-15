<?php

function showMessage ($message) {
    echo $message;
}

function showGreetingsModal () {
    if ( isset($_COOKIE['closed']) || isset($_COOKIE['fname'])) {
        return false;
    }
    return true;
}