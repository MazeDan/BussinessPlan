<?php  
        include_once("hometopo.php");
        include_once("homemenu.php");
        include_once("function.php");
        
        $procura = procurar(1);
        
        
?>
       
       <h4 class="display-4 text-center">Produtos</h4>
       <div class="text-center container mx-auto">
           
           
           
 
   
   <?php
       foreach ($procura as $key => $value){
            $id = $value['id'];
            $nome = $value['nome'];
            $quant = $value['quant'];
            $medida = $value['medida'];
            $quantmed = $value['quantmed'];
            $quantatual = $value['quantatual'];
            
    ?> id = <?php echo $id;
        ?> nome = <?php echo $nome;
        ?> quant = <?php echo $quant;
        ?> medida = <?php echo $medida;
        ?> quantmed = <?php echo $quantmed;
        ?> quantatual = <?php echo $quantatual; 
        echo "<br>";
       }         
       
        

?>
             

 </div>
 



       
<?php  include_once("homerodape.php") ?>
       
       