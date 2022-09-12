<?php 

session_start();
include('verificar_login.php');

 ?>


<center><h1>Este é o da tesouraria<h1> 


<h2> Usuário : <?php echo  $_SESSION['nome_usuario']; ?> </h2>
<h2> Cargo : <?php echo  $_SESSION['cargo_usuario']; ?> </h2>
<a href="logout.php">Sair</a>



 <span> <img src="img/logo.png" class="w-75" alt="Logo"> </span><br/>



