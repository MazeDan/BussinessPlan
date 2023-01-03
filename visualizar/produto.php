 <?php  
        include_once("../topo.php");
        include_once("../menu.php");
        include_once("../function.php");
        $id = $_GET['id'];
        
        $username = "sql10587759";
        $password = "Yla13QZu8u";
    
        $pdo = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10587759',$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
            $sql = $pdo->prepare("SELECT * FROM medida ");
            $sql->execute();
    
            $fetchVariaveis = $sql->fetchAll();

         
?>
        
        <h3 class='text-center'> Visualizar </h3>
<?php
        $procura = procurarId($id,"produtos");
        
         foreach ($procura as $key => $value){
            $idE = $value['id'];
            $nome = $value['nome'];
            $quant = $value['quant'];
            $medida = $value['medida'];
            $quantmed = $value['quantmed'];
            $quantatual = $value['quantatual'];
            $idcon = $value['idconIma'];
         }
        


$procura2 = procurarImage($idcon);
        
?> 


    <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1"><?php echo $nome?></h1>
        <ul class="list-group">
              <li class="list-group-item"><i class="bi bi-person-circle"></i> <b>Nome:</b> <?php echo $nome ?> </li>
              <li class="list-group-item"><i class="bi bi-car-front-fill"></i> <b>Quantidade em estoque:</b> <?php echo $quant ?></li>
              <li class="list-group-item"><b><i class="bi bi-telephone-fill"></i> Medida utilizada:</b> <?php echo $medida?> </li>
              <li class="list-group-item"><i class="bi bi-box-arrow-in-right"></i> <b>Quantidade de <?php echo $medida?> </b> <?php echo $quantmed?></li>
              <li class="list-group-item"><i class="bi bi-box-arrow-in-left"></i> <b>Quantidade Atual: </b><?php echo $quantatual?> </li>
              <br>
              <form method="post">
                     <select class="form-select" name="medidaValor" aria-label="Default select example">
  <option selected>Escolha uma Opção de retirada:</option>
 <?php 
 foreach ($fetchVariaveis as $key => $values){
            $nomemedida = $values['nome'];
            $valor = $values['valor'];
            
            ?>
              <option value="<?php echo $valor ?>"> <?php echo $nomemedida?> </option>

            <?php
         }
?>
</select>
<input value="<?php echo $idE?>" type='hidden' name="id">
<input value='enviar' type="submit">
  </form>
        </ul><hr>
             <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
                 
               
                    <a class="btn btn-primary" href="../tabela/produto.php" ><i class="bi bi-caret-left-fill"></i> Voltar</a>
                    <a class="btn btn-success" href="editar.php?id=<?php echo $id ?>" > <i class="bi bi-pencil-square"></i> Editar</a>
                    <a class="btn btn-danger" href="function.php?apagar=true&id=<?php echo $id ?>" > <i class="bi bi-trash3-fill"></i> Apagar</a>
                    <a class="btn btn-warning" href="../adicionar/medida.php"><i class="bi bi-box-arrow-in-left"></i> Nova Medida</a> 
                   
            </div>
        </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg mx-auto text-center" >
             
                       
<?php
            if ($procura2 > 0){
            foreach ($procura2 as $keys => $imagem){
        $imageURL = '../imagens/'.$imagem['file_name'];
?>
              <img class="rounded-lg-3 img-thumbnail" src="<?php echo $imageURL; ?>" witdh="350px" alt="" >
              <br>
<?php }
}?>

</div> </div> 

</div>
          
      </div>
<?php
    if($_POST){
        $ids = $_POST['id'];
        $medidaVal = $_POST["medidaValor"];
        $valorRet =  $quantatual - $medidaVal ;
        $pdo->exec("update produtos set quantatual = '$valorRet' WHERE id = $ids");
                    

        echo 'editado com sucesso';
        $url = "produtos.php?id=$ids";
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
 
