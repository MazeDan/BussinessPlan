<?php  include_once("../topo.php");
       include_once("../menu.php");
       include_once("function.php");?>
       

            
<form action="medida.php" enctype="multipart/form-data" class="row g-3 p-4 p-md-5 border rounded-3 bg-light" method="post">
    
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Nome da Medida</label>
            <input type="text" class="form-control  mb-3" name="nome" placeholder="Digite o nome da medida">
        </div>
        
          <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Valor</label>
            <input type="number" class="form-control mb-3" name="valor" placeholder="Digite o valor">
        </div>
    
    
                  
                    
        <div class="col-12 text-center mx-auto">
            
        <button class="w-100 btn btn-lg btn-primary" value='enviar' type="submit"> Enviar</button>
                    
                    </div>
                
</form>
     
       
<?php
    if($_POST){
        enviar("medida");
    }
    
include_once("../rodape.php") ?>
