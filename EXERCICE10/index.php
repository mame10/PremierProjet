<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styexo8.css">
</head>
<body>
    <?php
    session_start();
    ?>
 <form action="controller.php" method="POST">
     <div id="centerNombre">
     <label for="">ENTRER UN NOMBRE!!!</label>
     <br><br>
     <input type="text" name="nbre" value="<?php if(!isset($_SESSION['sess']['nbre']) && isset($_SESSION['post'])) echo $_SESSION['post']['nbre']; else ''?>">
     
     <?php if(isset($_SESSION['sess']['nbre'])):?>
        <span ><?php echo $_SESSION['sess']['nbre'] ?></span>
        <?php session_unset(); endif ?>

     </div>
     <br><br>
     <input type="submit" name="btn" value="click">
 </form>   
</body>
</html>