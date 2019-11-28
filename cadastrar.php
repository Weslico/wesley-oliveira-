<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$rg = mysqli_real_escape_string($conexao, trim($_POST['rg']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$ra = mysqli_real_escape_string($conexao, trim($_POST['ra']));
$nascimento = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));



$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}
$sql = "INSERT INTO usuario (usuario_id,usuario,senha, nome,email,rg,cpf,ra,nascimento,data_cadastro) VALUES ( '$nome','$usuario','$senha',$email','$$rg','$cpf,'$ra','$nascimento',NOW())";


if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>
