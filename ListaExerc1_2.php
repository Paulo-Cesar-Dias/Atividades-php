<?php 
$nota1;
$nota2;
$nota3;
$nota4;
$media="";
if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];
    
    if(isset($_POST["nota1"])){
        $nota1 = $_POST["nota1"];
    }
    if(isset($_POST["nota2"])){
        $nota2 = $_POST["nota2"];
    }
    if(isset($_POST["nota3"])){
        $nota3 = $_POST["nota3"];
    }
    if(isset($_POST["nota4"])){
        $nota4 = $_POST["nota4"];
    }
    if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)){
        # code...
        $media = ($nota1*2 + $nota2*3 + $nota3*4 + $nota4*5)/14;
    }else{
        $media="Digite apenas números, tente novamente.";
    }
    
       
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ListaExerc1_2.php" method="post">

        Nota1    <input type="text" name="nota1" id=""><br>
        Nota2    <input type="text" name="nota2" id=""><br>
        Nota3    <input type="text" name="nota3" id=""><br>
        Nota4    <input type="text" name="nota4" id=""><br>
        <input type="submit" name="calcular"><br>
        <p>O Resultado é : <?php echo round($media,2);?></p>
    </form>

</body>
</html>