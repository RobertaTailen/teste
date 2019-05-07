<?php
	include("includes/header.php");
	include("class/ClassCrud.php");
?>

<div class="Content">
	<table class="TabelaCrud">
     <tr>
         <td>Nome</td>
         <td>Sexo</td>
         <td>Cidade</td>
         <td>Ações</td>
     </tr>

     <!-- Estrutura de loop -->
     <?php
     $Crud=new ClassCrud();
     $BFetch=$Crud->selectDB("*", "cadastro", "", array());

     while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
     ?>
     <tr>
         <td><?php echo $Fetch['Nome']; ?></td>
         <td><?php echo $Fetch['Sexo']; ?></td>
         <td><?php echo $Fetch['Cidade']; ?></td>
         <td>
             

			<a href="<?php echo "visualizar.php?id={$Fetch['Id']}"; ?>"><img src="img/visualizar.png" alt="Visualizar"></a>
             <a class="Deletar" href="<?php echo "atualizar.php?id={$Fetch['Id']}"; ?>"><img src="img/editar.png" alt="Deletar"></a>
             <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['Id']}"; ?>"><img src="img/deletar.png" alt="Deletar"></a>
         </td>
     </tr>
     <?php } ?>
</table>
</div>

<?php
	include("includes/footer.php");
?>

