<!DOCTYPE html>
<?php
     session_start();
 ?>
<html>
    <head>
        <title>TEST</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="/Vue/Css/message.css"/>
    </head>
    <body>
        <header>
            <nav>
                <a href="/"><img src="/Vue/Img/logo.png" /></a>
            </nav>
        </header>
        <h1>Ajoutez un message à la liste :</h1>
        <div class="container">
            <div class="form_container">
                <form action="../Controller/message.php" method="post">
                    <label>Prénom </label>
                    <div class="title">
                        <input type="text" name="prenom"  placeholder="Prénom" required/>
                    </div>
                    <label>Message</label>
                    <textarea placeholder="Message" name="messages" required></textarea>
                    <button type="submit">AJOUTER</button>
                    <?php if(isset($_SESSION['Erreur_form'])) { echo $_SESSION['Erreur_form'];} ?>
                </form>
            </div>
            <div class="list_container"> 
                <?php if($_SESSION['Messages_array'] != null) {?>
                    <h1>Votre liste :</h1>
                    <?php $i=0; foreach($_SESSION['Messages_array'] as $messages) {  $i++;?>
                        <div class="line">
                            <div class="top">
                                <div><?php echo $messages['prenom']?></div>
                            </div>
                            <div class="bottom">
                                <div class="info_contact">
                                    <div><span>Prénom: </span><?php echo $messages['prenom'] ?></div>
                                    <div><span>Message: </span><?php echo $messages['messages'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </body>
</html>