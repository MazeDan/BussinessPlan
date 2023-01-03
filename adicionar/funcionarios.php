<?php  include_once("../topo.php");
       include_once("../menu.php");
       include_once("function.php");?>
       

            
<form action="funcionarios.php" enctype="multipart/form-data" class="row g-3 p-4 p-md-5 border rounded-3 bg-light" method="post">
    
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Nome do Funcionario</label>
            <input type="text" class="form-control  mb-3" name="nome" placeholder="Digite o nome do funcionario">
        </div>
        
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Função</label>
            <input type="text" class="form-control  mb-3" name="funcao" placeholder="Qual a Função?">
        </div>
                    
            

        <div class="col-6 text-dark text-center mx-auto">
            <label for="floatingTextarea2">Salario</label>
            <input type="number" class="form-control" name="salario" placeholder="Escolha o salario">

        </div>
                         
                    
        <div class="text-center col-md-6 mx-auto">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Adicione as imagens do Produto.</label>
                <input class="form-control" type="file" id="formFileMultiple" name="files[]" multiple>
            </div>
        </div>
                  
                    
        <div class="col-12 text-center mx-auto">
            
        <button class="w-100 btn btn-lg btn-primary" value='enviar' type="submit"> Enviar</button>
                    
                    </div>
                
</form>
     
       
<?php
    if($_POST){
        enviar("funcionarios");
    }
    
include_once("../rodape.php") ?>
