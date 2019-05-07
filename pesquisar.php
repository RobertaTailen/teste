<?php
	include("includes/header.php");
?>
      <h1 class="Center">Pesquisar</h1>    

        <form name="FormCadastro" id="FormCadastro" method="post">
            <div class="FormularioInput">
                Nome: <input type="text" id="Nome" name="Nome"><br>
                     
            	<input type="button" value="Consultar" onclick="atualizar(this)">
            </div> 
        </form>
<?php
	include("includes/footer.php");
?>