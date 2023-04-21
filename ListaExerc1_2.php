<?php 
$nota1;
$nota2;
$nota3;
$nota4;
$media;
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

    $media = ($nota1*2 + $nota2*2 + $nota3*3 + $nota4*3)/10;
       
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
    <form action="ExecLista1_1.php" method="post">

        Nota1    <input type="text" name="nota1" id=""><br>
        Nota2    <input type="text" name="nota2" id=""><br>
        Nota3    <input type="text" name="nota3" id=""><br>
        Nota4    <input type="text" name="nota4" id=""><br>
        <input type="submit" name="calcular"><br>
        <p>O Resultado é : <?php echo $media;?></p>
    </form>

</body>
</html>