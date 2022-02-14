<?php
session_start();

include_once("fonctions.php");

if(isset($_POST['env'])){
    $j=$_POST['jour'];
    $m=$_POST['mois'];
    $a=$_POST['an'];
    $error=[];
    $_SESSION['post']=$_POST;
    validNombre($j,'jour',$error);
    validNombre($m,'mois',$error);
    validNombre($a,'an',$error);
    if(count($error)==0){
           dateSuivante($a,$m,$j);
           echo "<br>";
           datePrecedente($a,$m,$j);
    }else{
           $_SESSION['error']=$error;
           header('location:index.php');
           exit();
        }
}else
    {
    header('loaction:index.php');
    exit();
}