<?php  include_once("../topo.php");
       include_once("../menu.php");
       include_once("function.php");?>
       

            
<form action="produto.php" enctype="multipart/form-data" class="row g-3 p-4 p-md-5 border rounded-3 bg-light" method="post">
    
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control  mb-3" name="produto" placeholder="Digite o nome do Produto">
        </div>
        
        
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Quantidade em Estoque</label>
            <input type="number" class="form-control  mb-3" name="quantEstoque" placeholder="Digite a quantidade em estoque">
        </div>
                    
                    
        <div class="col-5 text-dark text-center mx-auto">
            <label for="inputAddress" class="form-label text-center">Medida</label>
            
            <select class="form-select" name='medida' aria-label="Default select example">
                <option selected>Escolha a medida do Produto</option>
                <option value="mg">Mg</option>
                <option value="g">g</option>
                <option value="kg">Kg</option>
                <option value="ml">ml</option>
                <option value="l">L</option>
            </select>                        
        </div>

        <div class="col-6 text-dark text-center mx-auto">
            <label for="floatingTextarea2">Digite a Quantidade Total do Produto</label>
            <input type="number" class="form-control" name="quantmed" placeholder="Escolha a Quantidade">

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
        enviar("produtos");
    }
    
include_once("../rodape.php") ?>
