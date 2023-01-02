<?php
    $username = "sql10587759";
    $password = "Yla13QZu8u";
   
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>