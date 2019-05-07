<?php 

//include("../Includes/Variaveis.php");
include("../class/classCrud.php");

 try
 {        
	$Crud=new ClassCrud();

	$Nome = $_REQUEST['campo1'];
    $Sexo = $_REQUEST['campo2'];
    $Cidade = $_REQUEST['campo3'];

	$result = $Crud->insertDB("cadastro","?,?,?,?", array("", $Nome, $Sexo, $Cidade));
	echo "1";
    
   } 
    catch (Exception $ex)
    {
        //retorna 0 para no sucesso do ajax saber que foi um erro
        echo "0";
    }  
?>