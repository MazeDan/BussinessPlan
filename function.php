<?php
    //CONEXÃO
    function conexao(){
    $username = "sql10587759";
    $password = "Yla13QZu8u";
    
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
    }
    
    //COLOCANDO NO BANCO DE DADOS HISTORIAS
        if(isset($_GET['id'])) $id = $_GET['id'];

  
  function enviar($modo){
    conexao();
    
    // PRODUTOS
    
      if($modo == "produtos"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO produtos VALUES (null,?,0,?,?,0,?)");
          $sql->execute(array($_POST['produto'],
                            $_POST['medida'],
                            $_POST['quantmed'],
                            $idcon
                        ));
        
        include_once("functionImage.php");

      }
      
      if($modo == "cadastro"){
          $idcon = uniqid();
          $sql = $pdo->prepare("INSERT INTO login VALUES (null,?,?,0,0,?,0,?)");
          $sql->execute(array($_POST['login'],
                            md5($_POST['senha']),
                            $idcon,
                            $_POST['nome']
                        ));
        
        echo 'inserido com sucesso';
        $url = 'login.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  
      }
      
     
  }
   
    function procurar($banco){
        $username = "sql10587759";
        $password = "Yla13QZu8u";
    
        $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        if($banco == "produtos" ){
            $sql = $pdo->prepare("SELECT * FROM produtos ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
        }
        
         if($banco == "medida" ){
            $sql = $pdo->prepare("SELECT * FROM medida ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
        }
        
 
    }
    
    function login($user){
            $sql = $pdo->prepare("SELECT login FROM login WHERE user = '$user'");
            $sql->execute();
           
        
        return $sql;
    }
    
    if(isset($_GET['sair'])){
        $id = $_GET['id'];
        $pdo->exec("update regiscar set dataSaida=NOW() WHERE id = $id");
      
        echo 'inserido com sucesso';
        $url = 'index.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
    
   
    
    function procurarId($id,$es){
     $username = "sql10587759";
    $password = "Yla13QZu8u";
    
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
    if($es == "produtos") {
        $sql = $pdo->prepare("SELECT * FROM produtos where id='$id'");
        $sql->execute();
    }
        $fetchVariaveis = $sql->fetchAll();
        
        return $fetchVariaveis;
    }
    
    function procurarImage($idcon){
         $username = "sql10587759";
    $password = "Yla13QZu8u";
    
    $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        
        $sql = $pdo->prepare("SELECT file_name FROM images WHERE conexao = '$idcon' ");
        $sql->execute();
    
$fetchVariaveis = $sql->fetchAll(); 
    
        return $fetchVariaveis;
        
    }

   
   
   //APAGANDO IMagem
   
   if(isset($_GET['name_image'])){
        $name = $_GET['name_image'];
        $pdo->exec("DELETE FROM images WHERE file_name = '$name'");
        echo 'Apagado com sucesso';
        $url = 'index.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   }
    


    //APAGANDO DO BANCO DE DADOS HISTORIAS
    if(isset($_GET['apagarCompletamente'])){
        $id = $_GET['id'];
        $pdo->exec("DELETE FROM regiscar WHERE id = $id");
        echo 'Apagado com sucesso';
        $url = 'index.php';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
     //EDITANDO DO BANCO DE DADOS HISTORIAS
   
    
    
    
    if(isset($_GET['restaurar'])){

        $id = $_GET['id'];
        
        
        $pdo->exec("update regiscar set 
                    lixeira = '0'
                    WHERE id = $id");
                    
        echo 'editado com sucesso';
        $url = "index.php";
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
    
    if(isset($_POST['files[]'])){
        
        
 
    }
?>


