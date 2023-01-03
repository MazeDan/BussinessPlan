<?php 
    include_once('topo.php');
    include_once('menu.php');
        
?>  
    <form action='valida.php' method='post'>
        Login = <input name='login' type='email'/>
        Senha = <input name='senha' type='password'/>
        
    <button class="btn btn-primary" type="submit">enviar</button>
    </form>
<?php
    include_once('rodape.php')
?>