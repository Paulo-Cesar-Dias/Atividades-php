<?php 
$nota100=0;
$nota50=0;
$nota20=0;
$nota10=0;
$nota5=0;
$nota2=0;
$nota1=0;
$valor=0;
$msg="";
$erro=false;

if (isset($_POST['calcular'])) {
    $botao=$_POST["calcular"];
    if(isset($_POST['valor'])){
        $valor=$_POST["valor"];
        if(is_numeric($valor)){

            while ($valor>=100) {
                $valor=$valor-100;
                $nota100=$nota100+1;
            }
            while ($valor>=50){
            $valor=$valor-50;
            $nota50=$nota50+1;
            }
            while ($valor>=20) {
                $valor=$valor-20;
                $nota20=$nota20+1;
            }
            while ($valor>=10) {
                $valor=$valor-10;
                $nota=$nota10+1;
            }
            while ($valor>=5) {
                $valor=$valor-5;
                $nota5=$nota5+1;
            }
            while ($valor>=2) {
                $valor=$valor-2;
                $nota2=$nota2+1;
            }
            while ($valor>=1){
                $valor=$valor-1;
                $nota1=$nota1+1;
            }
        }else{
            $erro=true;
            $msg="Digite apenas números!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite um valor:</h1>
    <form action="ListaExerc1_5.php" method="post">

        <input type="text" name="valor">
        <input type="submit" name="calcular">

    </form>
    <?php
        if ($erro==false) {
            # code...
            echo
            "<p>Notas de 100: ". $nota100 . "</p>".
            "<p>Notas de 50: ". $nota50 . "</p>".
            "<p>Notas de 20:" . $nota20 . "</p>".
            "<p>Notas de 10:" . $nota10 . "</p>".
            "<p>Notas de 5:" . $nota5. "</p>".
            "<p>Notas de 2:" . $nota2. "</p>".
            "<p>Notas de 1:" . $nota1. "</p>";
        }else{
            echo $msg;
        }
    ?>
    
</body>
</html>