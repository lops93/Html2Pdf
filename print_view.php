<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gerar PDF's com PHP</title>
	<style type="text/css">
		#caixas{
			width: 100%;
		}
		.caixa{
			width: 150%;
			height: 150%;
			border: 1px solid black;
			background: #ccc;
		}

	</style>
</head>
<body>
<?php if (isset($_POST['titulo'])):  ?>
	<h1><?=$_POST['titulo']?></h1>
<?php endif; ?>
<H1>PDF</H1>
<div id="caixas">
	<div class="caixa"></div>
	<div class="caixa"></div>
	<div class="caixa"></div>
	<div class="caixa"></div>
</div>
</body>
</html>