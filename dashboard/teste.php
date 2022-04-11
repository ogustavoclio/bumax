<?php

	include('../config/vars.php');
	include('../config/db.php');

?>

<?php 

$result_produto = "SELECT * FROM investments";
$resultado_produto = mysqli_query($conn, $result_produto);

while ($row_produto = mysqli_fetch_assoc($resultado_produto)) { ?>

	<!-- INITIAL BLOCK CONTENT -->
	<div class="imgContent">
		<center>
			<h3><?php echo $row_produto['nome']; ?></h3>
			<span><?php echo $row_produto['descricao']; ?></span>
		</center>
	</div>
	<div class="box">
		<div class="infoText">
			<div class="row">
				<div class="col-sm">
					<span>Modalidade</span>
					<hr>
					<span>Valor da Cota</span>
					<hr>
					<span>Participação</span>
					<hr>
					<span>Total Captado</span>
				</div>
				<div class="col-sm">
					<span><?php echo $row_produto['modalidade']; ?></span>
					<hr>
					<span>R$ <?php echo $row_produto['valorCota']; ?></span>
					<hr>
					<span><?php echo $row_produto['participacao']; ?>% por cota</span>
					<hr>
					<span>R$ <?php echo $row_produto['valorCaptado']; ?></span>
				</div>
			</div>
			<center>	
			<button class="investir">Saiba Mais</button>
			<button class="investir">Investir</button>
		</center>
	</div>
	<!-- FINISH BLOCK CONTENT -->

<?php } // Fim while ?>