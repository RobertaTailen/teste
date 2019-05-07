<?php
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->updateDB(
            "cadastro",
            "Nome=?,Sexo=?,Cidade=?",
            "Id=?",
            array(
                $_POST['Nome'],
                $_POST['Sexo'],
                $_POST['Cidade'],
                $_POST['Id']
            )
        );

 echo "Cadastro Editado com Sucesso!";