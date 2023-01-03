<?php
function enviar($modo){
    $username = "sql10587759";
    $password = "Yla13QZu8u";
    
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
if($modo == "produtos"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO produtos VALUES (null,?,?,?,?,?,?)");
          $sql->execute(array($_POST['produto'],
          $_POST['quantEstoque'],
                            $_POST['medida'],
                            $_POST['quantmed'],
                            $_POST['quantmed'],
                            $idcon
                        ));
        
        include_once("../functionImage.php");

      }
      
      if($modo == "funcionarios"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO funcionarios VALUES (null,?,?,?,?)");
          $sql->execute(array($_POST['nome'],
                                $idcon,
                                $_POST['salario'],
                            $_POST['funcao']
                            
                        ));
        
        include_once("../functionImage.php");

      }
      
      if($modo == "transacao"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO transacao VALUES (null,?,?,NOW(),?,?,?)");
          $sql->execute(array($_POST['nome'],
                            $_POST['modo'],
                            $_POST['descricao'],
                            $idcon,
                            $_POST['valor']
                            
                        ));
        
        

      }
       if($modo == "medida"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO medida VALUES (null,?,?)");
          $sql->execute(array($_POST['nome'],
                            $_POST['valor'],
                            
                        ));
        
        

      }
}