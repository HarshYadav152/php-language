<?php
    session_start();
    session_unset();// unset all session variable
    session_destroy();// destroy session which is started before

    echo "You have been removed from the session ";
?>