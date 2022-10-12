<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tp3_backend</title>
    </head>
    <body>
        <h3>♥Perritos dados en adopción♥</h3>
        <?php
           $perritos=1;
           while ($perritos <101) {
            echo "$perritos/";
            $perritos++;
           } 
        ?>  
        <h3>♥Michis en el refugio♥</h3>
        <?php
            $michis=100;
            while ($michis >0) {
             echo"$michis/";
             $michis--;
            }
        ?>
        <h3>♠Pares del 1 al 100♠</h3>
        <?php
            $pares=2;
            do {
                echo "$pares/";
                $pares=$pares+2;
            } while ($pares <101); 
        ?>
        <h3>♠Impares del 1 al 100♠</h3>
        <?php
            $impares=1;
            do {
                echo "$impares/";
                $impares=$impares+2;
            } while ($impares <101);
        ?>
        <h3>♦Sumas de los números de 1 a 20♦</h3>
        <?php
            $resultado=0;
            for ($dinos=1; $dinos <=20 ; $dinos++) { 
                $resultado=$resultado+$dinos;
                echo "$resultado/";
            }
        ?>
        <h3>♦Suma de números pares de 1 a 20♦</h3>
        <?php
            $suma=0;
            for ($puerquitos=2; $puerquitos <=20 ; $puerquitos=$puerquitos+2) { 
                $suma=$suma+$puerquitos;
                echo "$suma/";
            }
        ?>
    </body>
</html>