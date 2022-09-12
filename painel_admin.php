<?php 

session_start();
include('verificar_login.php');

 
if($_SESSION['cargo_usuario'] != 'Administrador' && $_SESSION['cargo_usuario'] //segurança para não acessar trocando o link
	!= 'Gerente' && $_SESSION['cargo_usuario'] != 'Tesoureiro')

{
	header('Location:index.php');
 	exit();

}

 ?>


<center><h1>Este é o painel do admin<h1> 


<h2> Usuário : <?php echo  $_SESSION['nome_usuario']; ?> </h2>
<h2> Cargo : <?php echo  $_SESSION['cargo_usuario']; ?> </h2>
<a href="logout.php">Sair</a>



 <span> <img src="img/logo.png" class="w-75" alt="Logo"> </span><br/>



