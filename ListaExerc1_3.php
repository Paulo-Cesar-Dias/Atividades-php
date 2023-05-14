<?php 

$altura;
$peso;
$imc="";
$msg="";
if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["altura"])) {

        $altura = $_POST["altura"];
    }
    if(isset($_POST["peso"])){

        $peso = $_POST["peso"];
    }
    
    
    if ( is_numeric($altura) &&  is_numeric($peso)) {
        $imc=$peso/($altura*$altura);
        $imc=round($imc,3);
        if ($imc<18.5) {
            $msg="Abaixo do Peso!!!";
        }else if($imc>=18.5 && $imc<25) {
            $msg="Peso normal!!!";
        }else if($imc>=25 && $imc<30) {
            $msg="Acima do peso!!!";
        }else{
                $msg="Obeso!!!";
        }
    }else{
        $msg="Algo deu errado.<br>Tente digitar apenas números.";       
    }

}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ListaExerc1_3.php" method="post">

        <label for="altura">Altura:   </label><input type="text" name="altura"><br><br>
        <label for="Peso">Peso:   </label><input type="text" name="peso"><br> <br>
        <input type="submit" name="calcular">
        <p><?php echo $imc; ?></p>
        <p><?php echo $msg;?></p>
        
    </form>
</body>
</html>