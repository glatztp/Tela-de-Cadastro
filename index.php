<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		border: 0;
	}
	html{
		font-family: arial;
		font-size: 62.5%;
	}
	header{
		background-color:black;
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	footer{
		background-color: black;
		color: rgba(255, 255, 255, 1.0);
		padding: 5px;
		text-align: center;
		text-shadow: 1px 1px 2px rgba(0, 0, 0, 1.0);
	}
	body{
		text-align: center;
		font-size: 1.6rem;
	}
	label{
		font-weight: bold;
		font-size: 1.8rem;
		table_align:center;
	}
	input{
		font-size: 1.7rem;
		text-align: center;
		border: solid;
		border-radius: 5px;
		padding: 5px;
		width: 47%;
	}
	.botao{
		width: 20%;
		background-color:rgb(2 161 205);
		color: rgba(0, 0, 0, 1.0);
		font-weight: bold;
		font-size: 1.8rem;
	}
		button{
		margin-top: 25px;
		width: 20%;
		background-color: rgb(2 161 205);
		color: rgba(0, 0, 0, 1.0);
		font-weight: bold;
		font-size: 1.8rem;
		border: solid;
	}
	div{
		box-align: center;
		text-align: center;
		font-size: 1.6rem;
	}
	





</style>	

<body>

	<header>
		<h1>INFORMATIC TECHTRAINING </h1>
		<h3>Materials</h3>
	</header>
	
	<br>

	<section>
		<h2>Registro</h2>
		<br>
		<form action="validar.php" method="post" id="users" target="">

			<label for="user">Usuario</label><br>
			<input type="text" id="user" name="user" placeholder="Create a username">
			<br><br>
			<label for="email">E-Mail</label><br>
			<input type="email" id="email" name="email" placeholder="Text your e-mail">
			<br><br>
			<label for="password">Senha</label><br>
			<input type="password" id="password" name="password" placeholder="Create a password"><br><br>

			<input type="submit" class="botao" name="regist">
			
		</form>
</section >

<br><br><br><br>
<section>
	
	<h2>Search system</h2>
		<form action = "">
			<input type="text" name="search" placeholder = "Text the search"><br>
			<button type="submit">search</button>

		</form>
<?php
$servidor = "localhost";
$user = "root";
$password ="";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $user, $password, $database);

if($_GET['search'] == ''){
	echo 'Text something to search';
}else{
	$pesquisa = $_GET['search'];
	$sqlcode = "SELECT * FROM users WHERE nome LIKE  '%$pesquisa%'";
	$consulta = mysqli_query($conexao, $sqlcode);
	echo '<table>
 			<tr>
 				<th>id</th>
 				<th>Nome</th>
 				<th>Email</th>
 			</tr>';
 
 	while($linha = mysqli_fetch_array($consulta))	{
 	echo '<tr>';
 	echo '<td>';
 	echo $linha['id'];
 	echo '</td>';
 	echo '<td>';
 	echo $linha['nome'];
 	echo '</td>';
 	echo '<td>';
 	echo $linha['email'];
 	echo '</td>';
 	echo '</tr>';
 }			
	echo '</table>';
}
?>

</section>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		<br>
		<br>
		<h3>CONTATO: gabrielfellipeglatz@gmail.com</h3>
		<h3>CNPJ: 40.963.840/0001-74</h3>		
	</footer>

</body>
</html>