<?php

$id = intval($_REQUEST['id']);
$Matricula = htmlspecialchars($_REQUEST['Matricula']);
$Nome = htmlspecialchars($_REQUEST['Nome']);
$Telefone = htmlspecialchars($_REQUEST['Telefone']);
$Ativo = htmlspecialchars($_REQUEST['Ativo']);
$Data_Admissao = htmlspecialchars($_REQUEST['Data_Admissao']);
$Tipo_Contrato = htmlspecialchars($_REQUEST['Tipo_Contrato']);

include 'conn.php';

$sql = "update motorista set 
						Matricula='$Matricula',
						Nome='$Nome',
						Telefone='$Telefone',
						Ativo='$Ativo',
						Data_Admissao='$Data_Admissao',
						Tipo_Contrato='$Tipo_Contrato' 
						where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'Matricula' => $Matricula,
		'Nome' => $Nome,
		'Telefone' => $Telefone,
		'Ativo' => $Ativo,
		'Data_Admissao' => $Data_Admissao,
		'Tipo_Contrato' => $Tipo_Contrato
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>