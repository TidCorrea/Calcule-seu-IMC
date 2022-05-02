<?php
$alt = ($_GET['altura']);
$pes = ($_GET['peso']);
$n = $pes / (($alt / 100) * 2);
$zzz = ['Magreza', 'Saudável', 'Sobrepeso', 'Obesidade Grau I', 'Obesidade Grau II', 'Obesidade Grau III'];
?>
<?php require 'inicio.html'; ?>
<p class="result">
<?php
    if ($n <= 18.5) {
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        com ' .$zzz[0];
    } else if ($n <= 24.9) {
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        como ' .$zzz[1];
    } else if ($n <= 29.9) {
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        com ' .$zzz[2];
    } else if ($n <= 34.9) {
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        com ' .$zzz[3];
    } else if ($n <= 39.9){
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        com ' .$zzz[4];
    } else  if ($n > 39.9){
        echo 'Atenção, seu IMC é: ' .number_format($n,2,".",".") .' e você está classificado
        com ' .$zzz[5];
    } else {
        echo "";
    }
?>
</p>
<?php require 'fim.html'; ?>
