<?php
    session_start();
    require('./Model/message.php');

    $_SESSION['Messages_array'] = getall();

    require('./Vue/message.php');
?>