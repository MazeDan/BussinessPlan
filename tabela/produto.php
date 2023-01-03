<?php  
        include_once("../topo.php");
        include_once("../menu.php");
        //include_once("../function.php");
        include_once("func.php");

        $procura = procurar(1);
        
        
?>
       
       <h4 class="display-4 text-center">Produtos</h4>
       <div class="text-center container mx-auto">
           
           
           
      
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Medida</th>
      <th scope="col">Quantidade Total</th>
      <th scope="col">Quantidade Atual</th>

    </tr>
  </thead>
  <tbody>
   
   <?php
       foreach ($procura as $key => $value){
            $id = $value['id'];
            $nome = $value['nome'];
            $quant = $value['quant'];
            $medida = $value['medida'];
            $quantmed = $value['quantmed'];
            $quantatual = $value['quantatual'];
            

            ?>
                <tr>
                <th scope="row"> 
                        <a class="btn btn-primary" href="../visualizar/produto.php?id=<?php echo $id ?> ">Ver</a>
                        <a  class="btn btn-danger" href="function.php?id=<?php echo $id ?>&apagarCompletamente=true">Apagar</a>

                </th>
                <td><?php echo $nome ?></td>
                <td><?php echo $quant ?></td>
                <td><?php echo $medida ?></td>
                <td><?php echo $quantmed ?></td>
                <td><?php echo $quantatual ?></td>


                
    </tr>

            <?php
        }
   ?>
  </tbody>
</table>

 </div>
 



       
<?php  include_once("../rodape.php") ?>
       
       