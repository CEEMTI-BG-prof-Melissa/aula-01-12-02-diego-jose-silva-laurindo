<html>
    <head>
        <title>Aula 03 - PHP</title>
    </head>

    <body>
        <?php
            $nome="Diego";

            $n1=10;
            $n2=2;

            $soma=$n1+$n2;


            echo "Meu nome é " .$nome; 
            echo "<br>Meu nome é $nome";

            echo"<br><br>A soma de $n1 com $n2 é igual a $soma. ";

            echo"<br><br>A subtração dos números $n1 e $n2 é igual a:" .($n1-$n2);
            echo"<br><br>A multiplicação dos números $n1 e $n2 é igual a:" .($n1*$n2);
            echo"<br><br>A divisão entre o números $n1 e $n2 é igual a:" .($n1/$n2);
            echo"<br><br>O operador de módulo dos números $n1 e $n2 é igual a:" .($n1%$n2);
        ?>
    </body>
</html>
