<?php

$Matricula = htmlspecialchars($_REQUEST['Matricula']);
$Nome = htmlspecialchars($_REQUEST['Nome']);
$Telefone = htmlspecialchars($_REQUEST['Telefone']);
$Ativo = htmlspecialchars($_REQUEST['Ativo']);
$Data_Admissao = htmlspecialchars($_REQUEST['Data_Admissao']);
$Tipo_Contrato = htmlspecialchars($_REQUEST['Tipo_Contrato']);

include 'conn.php';

$sql = "insert into motorista(Matricula,
							  Nome,
							  Telefone,
							  Ativo,
							  Data_Admissao,
							  Tipo_Contrato) 
							  values('$Matricula',
							  		 '$Nome',
							  		 '$Telefone',
							  		 '$Ativo',
							  		 '$Data_Admissao',
							  		 '$Tipo_Contrato')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
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