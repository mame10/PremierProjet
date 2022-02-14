<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date valide</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <?php
    session_start();
    ?>
    <form action="controller.php" method="post" id="formu"> 
        <div>
        <label for="">saisie une date</label></div>
        <br>
         <div id="dat">
        <div id="valid">  
           <input type="text" name="jour" placeholder="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) echo $_SESSION['post']['jour']; else '' ?>"><br>
       <?php if(isset($_SESSION['error']['jour'])):?>
        <span ><?php echo $_SESSION['error']['jour'] ?></span>
        <?php endif ?>
        </div> 
        <div id="valid"><input type="text" placeholder="mois" name="mois" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo $_SESSION['post']['mois']; else '' ?>"><br>
        <?php if(isset($_SESSION['error']['mois'])):?>
        <span><?php echo $_SESSION['error']['mois'] ?></span>
        <?php endif ?></div>
        <div id="valid"><input type="text"  placeholder="annee" name="an" value="<?php if(!isset($_SESSION['error']['an']) && isset($_SESSION['post']) ) echo $_SESSION['post']['an']; else '' ?>"><br>
        <?php if(isset($_SESSION['error']['an'])):?>
        <span><?php echo $_SESSION['error']['an'] ?></span>
        <?php session_unset(); endif ?>
        </div></div>
        <br>
        <br>
        <div id="btn"><input type="submit" name="env" value="envoyer"></div>
    </form>
</body>
</html>