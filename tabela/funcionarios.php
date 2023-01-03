<?php  
        include_once("../topo.php");
        include_once("../menu.php");
        //include_once("../function.php");
        include_once("func.php");

        $procura = procurar(2);
        
        
?>
       
       <h4 class="display-4 text-center">Funcionarios</h4>
       <div class="text-center container mx-auto">
           
           
           
      
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Codigo</th>
      <th scope="col">Salario</th>
      <th scope="col">Função</th>

    </tr>
  </thead>
  <tbody>
   
   <?php
       foreach ($procura as $key => $value){
            $id = $value['id'];
            $nome = $value['nome'];
            $idcon = $value['idcon'];
            $salario = $value['salario'];
            $funcao = $value['funcao'];


            ?>
                <tr>
                <th scope="row"> 
                        <a class="btn btn-primary" href="visualizar.php?id=<?php echo $id ?> ">Ver</a>
                        <a  class="btn btn-danger" href="function.php?id=<?php echo $id ?>&apagarCompletamente=true">Apagar</a>

                </th>
                <td><?php echo $nome ?></td>
                <td><?php echo $idcon ?></td>
                <td><?php echo $salario ?></td>
                <td><?php echo $funcao ?></td>
               


                
    </tr>

            <?php
        }
   ?>
  </tbody>
</table>

 </div>
 



       
<?php  include_once("../rodape.php") ?>
       
       