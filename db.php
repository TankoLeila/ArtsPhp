<?php

 $pdo= new PDO('mysql:dbname=loca_vehicule;host=127.0.0.1','root','');

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   if(!$pdo){
    die("connection faild");
   }else{
   
   }
?>