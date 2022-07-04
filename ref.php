<?php
	//Código que funciona perfeitamente
	$media_sem = 55.0;
		function recuperacao(){
			$prova_rec = 72.4;
			$trab_rec = 65.6;
			$nota_rec = ($prova_rec + $trab_rec) /2;
				return $nota_rec;
		}
		function atualiza_nota(&$nota_antiga, $nota_atual){
			$nota_antiga = ($nota_antiga + $nota_atual)/2;
				return $nota_antiga;
		}
		echo "Media do Semestre: $media_sem <br>";
		echo "Nota da Recuperação: " . recuperacao() . "<br>";
		echo "Média atualizada: " . atualiza_nota($media_sem, recuperacao()) . "<br>";
		echo "Media do Semestre: $media_sem <br>";
?>
