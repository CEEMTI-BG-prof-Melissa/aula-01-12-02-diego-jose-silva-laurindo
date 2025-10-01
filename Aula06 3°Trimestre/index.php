<html>
    <head>
        <title>Aula 06 - PHP</title>
    </head>

    <body>
        <h3>Operadores de Atribuição</h3>
        <hr>

        <?php
        $a=2;
        $b=$a + 5;
        echo"A é igual a $a e B é igual a $b.";
        echo"<br><br>";
        $a=$a+3;
        echo"Agora A é igual a $a.";
        echo"<br><br>";
        $b=$b+8;
        echo"Agora B é igual a $b.";
        echo"<br><br>";
        $b-=5;
        echo"Agora B é igual a $b.";
        echo"<br><br>";
        echo"<hr>";
        $b*=2;
        echo"Multiplicando B por 2 é igual a $b.";
        echo"<br><br>";
        $b/=10;
        echo"Dividindo o valor de B por 10 é igual a $b.";
        echo"<br><br>";
        $b%=3;
        echo"O resto da divisão do valor de B dividido por 3 é igual a $b.";
        echo"<br><br>";
        $b.=10;
        echo"Cocatenando o valor de B por 10 fica igual a $b.";

        ?>
    </body>
</html>
