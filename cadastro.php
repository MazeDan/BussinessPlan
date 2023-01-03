<?php 
    include_once('topo.php');
    include_once('menu.php');
    include_once('function.php');

?>  
    <form action='cadastro.php' method='post'>
        Nome = <input name='nome' type='text'/>
        Login = <input name='login' type='email'/>
        Senha = <input name='senha' type='password'/>
        
    <button class="btn btn-primary" type="submit">enviar</button>
    </form>
    
<?php
if($_POST){
    enviar("cadastro");
}
    include_once('rodape.php')
?>