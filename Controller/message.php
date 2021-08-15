<?php
    session_start();
    require('../Model/message.php');

    addmessage();

    $_SESSION['Messages_array'] = getall();

    header('Location: ../index.php');
?>