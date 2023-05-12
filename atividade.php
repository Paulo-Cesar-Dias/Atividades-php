<?php 

<<<<<<< HEAD
$nota1=0;
$nota2=0;
$nota3=0;
$nota4=0;
$media=0;
$medianota=0;
$result="";
if (isset($_POST["calcular"])) {
    $calcular= $_POST["calcular"];

=======
$nota1="";
$nota2="";
$nota3="";
$nota4="";
$media="";
$medianota="";
if (isset($_POST["calcular"])) {
    $calcular= $_POST["calcular"];
>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c
    if (isset($_POST["nota1"])) {
        # code...
        $nota1=$_POST["nota1"];
    }
    if (isset($_POST["nota2"])) {
        # code...
        $nota2=$_POST["nota2"];
    }
    if (isset($_POST["nota3"])) {
        # code...
        $nota3=$_POST["nota3"];
    }
    if (isset($_POST["nota4"])) {
        # code...
        $nota4=$_POST["nota4"];
    }
    if (isset($_POST["media"])){
        # code...
        $media=$_POST["media"];
    }

<<<<<<< HEAD
    function aritmetica($nota1, $nota2, $nota3, $nota4){

        $medianota=($nota1+$nota2+$nota3+$nota4)/4;
        return  $medianota;
    }
    function ponderada($nota1, $nota2, $nota3, $nota4){
        $medianota=($nota1*2+$nota2*2+$nota3*3+$nota4*3)/10;
        return  $medianota;
    }
    function harmonica($nota1, $nota2, $nota3, $nota4){
        $medianota=4/((1/$nota1)+(1/$nota2)+(1/$nota3)+(1/$nota4));
        return $medianota;
=======
    function calcmedia($nota1, $nota2, $nota3, $nota4,$media)
    {
       
        if( $media=="Aritimética"){
            $medianota=($nota1+$nota2+$nota3+$nota4)/4;
            return $medianota;
        }else if( $media=="Ponderada"){
            $medianota=($nota1*2+$nota2*2+$nota3*3+$nota4*3)/10;
            return $medianota;
        }else{
            $medianota=(4/(1/$nota1)+(1/$nota2)+(1/$nota3)+(1/$nota4));
            return $medianota;
        }
        

>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c
    }



<<<<<<< HEAD
    if ($media=="aritmética") {
        # code...
        $result=aritmetica($nota1,$nota2,$nota3,$nota4);
    }
    else if ($media=="ponderada") {
        # code...
        $result=ponderada($nota1,$nota2,$nota3,$nota4);
    }
    else if ($media=="harmônica") {
        # code...
        $result=harmonica($nota1,$nota2,$nota3,$nota4);
    }
=======









>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="atividade.php" method="post">

        <label for="nota1">Nota 1:</label>  <input type="text" name="nota1"><br>
        <label for="nota2">Nota 2:</label>  <input type="text" name="nota2"><br>
        <label for="nota3">Nota 3:</label>  <input type="text" name="nota3"><br>
        <label for="nota4">Nota 4:</label>  <input type="text" name="nota4"><br>
        <br>
<<<<<<< HEAD
        <label for="media">Aritmética</label>
        <input type="radio" name="media" value="aritmética"><br>
        <label for="media">Ponderada</label>
        <input type="radio" name="media" value="ponderada"><br>
        <label for="media">Armónica</label>
        <input type="radio" name="media" value="harmônica"><br><br>
=======
        <label for="media">Aritimética</label>
        <input type="radio" name="media" value="Aritimética"><br>
        <label for="media">Ponderada</label>
        <input type="radio" name="media" value="Ponderada"><br>
        <label for="media">Armónica</label>
        <input type="radio" name="media" value="Harmônica"><br><br>
>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c

        <input type="submit" name="calcular">
        <?php 
        

<<<<<<< HEAD
        echo "A média ". $media . " é " . $result;
=======
        echo "A média ". $media . " é " . calcmedia($nota1, $nota2, $nota3, $nota4,$media);
>>>>>>> adb1410615a6de43fd06f58d8443231f244d095c

            ?>
        
    </form>

</body>
</html>