<?php 
    $valor="";
    $resultado="";
    $valorrm="";

    if(isset($_POST["calcular"])){
        $calcular=$_POST["calcular"];
        if(isset($_POST["valor"])){
            $valor=$_POST["valor"];
        }
        function calcrm($valor){
            if (true) {
                    
                $valorrm='';
            }
            while ($valor/50 == 1) {
                $valor-=50;
                $valorrm.="L";
            }
            while($valor/40>=1){
                $valor-=40;
                $valorrm.="XL";
            }
            while($valor/10>=1){
                $valor-=10;
                $valorrm.="X";
            }
            while($valor/9==1){
                $valor-=9;
                $valorrm.="IX";
            }
            while ($valor/5>=1) {
                $valor-=5;
                $valorrm.="V";
            }while ($valor/4>=1){
                $valor-=4;
                $valorrm.="IV";
            }
            while ($valor/1>=1) {
                $valor-=1;
                $valorrm.="I";
            }
            return $valorrm;
        }

        if(is_numeric($valor) && $valor<=50 & $valor>0){
            $valorrm=calcrm($valor);
            $resultado=$valor." em números romanos é ".$valorrm;

        }else{
            $resultado="Erro, não foi digitado um número aceito";
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
    
    <form action="atividade3.php" method="post">
        <label for="valor">Digite um número inteiro:  </label><br><br>
        <input type="text" name="valor" ><br><br>
        <input type="submit" name="calcular"><br><br>
        <?php echo $resultado ?>

    </form>
</body>
</html>