<?php 
session_start();
    include_once('function.php');
    $username = "sql10587759";
    $password = "Yla13QZu8u";
    
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $user = $_POST['login'];
    $sql = $pdo->prepare(" SELECT user FROM login WHERE user = ?");
    $sql->execute(array($user));
    $quant = $sql->rowCount();
    
    print_r($quant);
    
    if($quant >0){
        echo "tudo certo";
        $_SESSION['login'] = $user;
        $url = 'dashboard.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
    else{
         echo 'Senha errada';
        $url = 'login.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }

    
    
    
?>