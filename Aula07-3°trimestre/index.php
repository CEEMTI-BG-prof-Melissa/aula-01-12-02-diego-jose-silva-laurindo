<html>

    <head>
        <title> Aula 07 - PHP</title>
    </head>
    <body>
        <?php
        // Aula07
        //Diego José e Deus 
        // 08/10/2025

        
        $num=10;
        echo"<br>Valor inicial: $num";
        $num+=5;
        echo"<br>Após somar 5: $num ";
        $num-=2;
        echo"<br>Após subtrair 2: $num";
        $num*=3;
        echo"<br>Após multiplicar por 3: $num";
        $num/=2;
        echo"<br>Após dividir por 2: $num";
        echo"<br>Pré-incremento: ".(++$num);//soma antes de printar
        echo"<br>Pós-incremento: ".($num++);//soma depois de printar
        echo"<br>Pré-decremento: ".(--$num);//subtrai antes de printar 
        echo"<br>Pós-decremento:".($num--);//subtrai depois de printar
        echo"<br>Valor final: $num";
        ?>


    </body>
</html>
