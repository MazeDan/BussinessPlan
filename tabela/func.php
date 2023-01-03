<?php 


 function procurar($banco){
        $username = "sql10587759";
        $password = "Yla13QZu8u";
    
        $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        if($banco == 1 ){
            $sql = $pdo->prepare("SELECT * FROM produtos ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
        }
        if($banco == 2){
            $sql = $pdo->prepare("SELECT * FROM funcionarios ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
        }
        if($banco == 3){
            $sql = $pdo->prepare("SELECT * FROM transacao ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
        }
 }
 
 function apagar($banco,$id){
        $id = $_GET['id'];
        
                $pdo->exec("DELETE FROM $banco WHERE id = '$id'");

                    
        echo 'editado com sucesso';
        $url = "index.php";
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
 }

    
    
?>