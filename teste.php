<?php
require 'config.php';

if(!empty($_POST['cpf'])){
	$cpf = $_POST['cpf'];

	$sql = ("SELECT * FROM clliente WHERE cpf = ?");
	$sql = $pdo->prepare($sql);
	$sql->bindValue(1, $cpf);
	$sql->execute();

	if($sql->rowCount() > 0){
		$sql = $sql->fetchAll();
		echo "<pre>";
		print_r($sql);
		echo "</pre>";
	}else{
		echo "Não cadastrado";
	}

}




?>

<form method="POST" accept-charset="utf-8">
	<input type="text" name="cpf"><br/><br/>
	<input type="submit" value="Enviar">
</form>