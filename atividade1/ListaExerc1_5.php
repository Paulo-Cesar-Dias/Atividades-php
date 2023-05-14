<?php 
<<<<<<< HEAD

    $valor = "";
    $botao = "";
    $msg = "";
    $resultado = 0;
    $nota100 = 0;
    $nota50 = 0;
    $nota20 = 0;
    $nota10 = 0;
    $nota5 = 0;
    $moeda1 = 0;

    if(isset($_POST["calculo"])){
        $botao = $_POST["calculo"];

        if(isset($_POST["vl"])){
            $valor = $_POST["vl"];
        }

        if(is_int($valor)==true){
            
            
                $resultado = $valor;
                
                while($resultado>=100){
                $resultado = $resultado-100;
                $nota100 = $nota100+1;
            }
            
            while($resultado>=50){
                $resultado = $resultado-50;
                $nota50 = $nota50+1;
            }
            
            while($resultado>=20){
                $resultado = $resultado-20;
                $nota20 = $nota20+1;
            }
            
            while($resultado>=10){
                $resultado = $resultado-10;
                $nota10 = $nota10+1;
            }
            
            while($resultado>=5){
                $resultado = $resultado-5;
                $nota5 = $nota5+1;
            }
            
            while($resultado>=1){
                $resultado = $resultado-1;
                $moeda1 = $moeda1+1;
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
        <title>Calcule sua grana decomposta</title>
    </head>
<body>
    
    <form action="ListaExerc1_5.php" method="post">

        <h1>Calcule a sua grana decomposta</h1>

        <p>Mensagens: <?php echo $msg ?></p>

        <p><label for="vl">Digite seu valor em R$:  <input type="text" name="vl"></label></p>
        <p><input type="submit" value="Calcule" name="calculo"></p>

        <p>O valor digitado foi: <?php echo $valor ?>, decomposto em...</p>

        <p>Notas de 100 R$: <?php echo $nota100?></p> 
        <p>Notas de 50 R$: <?php echo $nota50?></p>
        <p>Notas de 20 R$: <?php echo $nota20?></p> 
        <p>Notas de 10 R$: <?php echo $nota10?></p>
        <p>Notas de 5 R$: <?php echo $nota5?></p>
        <p>Moedas de 1 R$: <?php echo $moeda1?></p>

    </form> 

=======
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
    
>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c
</body>
</html>