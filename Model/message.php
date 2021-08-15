<?php
    function addmessage() {
        if ($_POST['prenom'] != null) {
            $db = getdb();
            $req = $db->prepare("INSERT INTO Messages(prenom,messages) VALUES(:prenom,:messages)");
            $req->execute(array(
                ':prenom' => $_POST['prenom'],
                ':messages' => $_POST['messages']
            ));
        }
    }

    function getall() {
        $db = getdb();
        $q = $db->prepare("SELECT * FROM Messages");
        $q->execute();

        $result = $q->fetchAll();
        return $result;
    }

    function getdb() {
        //Put your database information here.
        $user = 'root';
        $pass = 'root';
        $db_name = 'Sakana';
        $db_host = 'localhost';

        try{
            $opts = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $db = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";charset=utf8",$user,$pass,$opts);
            return $db;
        } catch(PDOException $e) {
            echo "Erreur database : " . $e->getMessage() . "<br/>";
        }
    }
?>