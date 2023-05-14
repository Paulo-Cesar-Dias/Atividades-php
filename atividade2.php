<?php 
$p="";
$n="";
$resultado=0;
$tipo="";

if(isset($_POST["calcular"])){
    $calcular=$_POST["calcular"];
    if(isset($_POST["n"])){
        $n=$_POST["n"];

    }
    if(isset($_POST["p"])){
        $p=$_POST["p"];
    }
    if(isset($_POST["tipo"])){
        $tipo=$_POST["tipo"];
    }
    if (is_numeric($n) && is_numeric($p) && $n>=$p) {
        # code...
        function fatorando($valor1,$valor2){
            while ($valor2>2) {
                $valor2--;
                $valor1=$valor1*($valor2);

                echo $valor1."". $valor2;

            }
            $fatoriado=$valor1;
            return $fatoriado;
        }

        function arranjo($vn,$vp){
            if($vn==$vp){
                $arranjo=fatorando($vn,$vp);
            }else{

                $arranjo=(fatorando($vn,$vn))/(fatorando($vn-$vp,$vn-$vp));
            }
            return $arranjo;
        }
        function combinacao($n,$p){
            if($n==$p){
                $combinacao=1;
            }else {
                $combinacao=fatorando($n,$n)/(fatorando($p,$p)*($n-$p));
            }
            return $combinacao;
        }

        if($tipo=="arranjo"){
            $resultado=arranjo($n,$p);

        }else if($tipo=="combinacao"){
            $resultado=combinacao($n,$p);
        }else{
            $resultado="Você esqueceu de selecionar uma opção!";
        }
    }else{
        $resultado="Você não digitou valores correspondentes!";
    }
    
    
    
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arranjo</title>
</head>
<body>
    <form action="atividade2.php" method="post">
        <input type="radio" name="tipo" value="arranjo">
        <label for="tipo">Arranjo</label><br>
        <input type="radio" name="tipo" value="combinacao">
        <label for="tipo">Combinação</label><br><br>
        <label for="n">n:  </label><input type="text" name="n"><br><br>
        <label for="p">p:  </label><input type="text" name="p"><br><br>
        <input type="submit" name="calcular"><br><br>

        <?php 
            echo "Resultado: " . $resultado;
        
        ?>
        
    </form>
</body>
</html>