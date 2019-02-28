<?php  

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


if (isset($_POST['criar'])) {
	
	ob_start();

//conteudo de outro ficheiro
require_once 'print_view.php';
$html = ob_get_clean();


//$html2pdf = new Html2Pdf();
$html2pdf = new Html2Pdf('P', 'A4', 'pt', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output();
//$html2pdf->output('pdf_generated.pdf');  pra deixar nome pre definido
}
?>

<form action="" method="POST">
	<input type="text" name="titulo" placeholder="Titulo">
	<input type="submit" value="criar pdf" name="criar">
</form>