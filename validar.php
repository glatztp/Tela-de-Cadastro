<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<body>

<?php
// criar agora banco de d aula_php
$servidor = "localhost";
$user = "root";
$password ="";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $user, $password, $database);


/* if($conexao){
	echo "conectado com sucesso";
}else{
	echo "falha ao conectar"
}
*/

// criando tabela



$query = "CREATE TABLE IF NOT EXISTS users(
	id int not null auto_increment,
	nome varchar(255) not null,
	email varchar(255) not null,
	password varchar(255) not null,
	primary key(id)

)";
$executar = mysqli_query($conexao, $query);

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users(nome, email, password) VALUES('$user', '$email', '$password')";
 $executar = mysqli_query($conexao, $query);



 /*echo '<table>
 			<tr>
 				<th>id</th>
 				<th>Nome</th>
 				<th>Email</th>
 			</tr>';
 $consulta = mysqli_query($conexao, "SELECT * FROM users");
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
echo '</table>';*/


//$delete = "DELETE FROM users WHERE nome = ''";
//$executar = mysqli_query($conexao, $delete);
 $query = "SELECT id,nome FROM users";
 //conexão
 $dados = mysqli_query($conexao, $query);
 $linha = mysqli_fetch_assoc($dados);
 $total = mysqli_num_rows($dados);

 //se o numero de resultados for maior que 0, mostra os dados

 if($total > 0){
 	do {
 	?>
 	<p><?=$linha['id']?> - <?=$linha['nome']?></p>
 	<?php
 	}while($linha = mysqli_fetch_assoc($dados));
 }
?>
</body>
</html>
