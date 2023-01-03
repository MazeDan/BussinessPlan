<?php  include_once("../topo.php");
       include_once("../menu.php");
       include_once("function.php");?>
       

            
<form action="transacao.php" enctype="multipart/form-data" class="row g-3 p-4 p-md-5 border rounded-3 bg-light" method="post">
    
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Nome da Transação</label>
            <input type="text" class="form-control  mb-3" name="nome" placeholder="Digite o nome do funcionario">
        </div>
        
          <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Valor da Transacao</label>
            <input type="number" class="form-control mb-3" name="valor" placeholder="Digite o valor">
        </div>
        
        <div class="col-md-6 text-dark text-center">
            <label for="inputEmail4" class="form-label">Modo</label>
            <div class="form-check">
  <input class="form-check-input" type="radio" name="modo" value="saida" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Saida
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="modo" value="entrada" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Entrada
  </label>
</div>
        </div>
                    
            

        <div class="col-6 text-dark text-center mx-auto">
            <label for="floatingTextarea2">descrição</label>
            <div class="form-floating">
  <textarea class="form-control" name="descricao" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Digite</label>
</div>
        </div>
                         
    
                  
                    
        <div class="col-12 text-center mx-auto">
            
        <button class="w-100 btn btn-lg btn-primary" value='enviar' type="submit"> Enviar</button>
                    
                    </div>
                
</form>
     
       
<?php
    if($_POST){
        enviar("transacao");
    }
    
include_once("../rodape.php") ?>
