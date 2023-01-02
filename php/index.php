<?php
include_once("topo.php");
include_once("conexao.php");

if(!$pdo) {
    echo' Não foi possível conectar ao banco MySQL '; exit;}
else {echo 'Parabéns!! A conexão ao banco de dados ocorreu normalmente!.';}
  

?>



<?php 
include_once("rodape.php");
?>