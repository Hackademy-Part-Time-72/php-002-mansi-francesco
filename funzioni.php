<?php

// $a = 5;
// $b = 12;
// $c = 2;
// $d = 5;

// $somma1 = $a + $b;
// $somma2 = $b + $c;
// $somma3 = $somma1 + $somma2;
// echo $somma3;


// sum(5, 12);
// sum(2, 5);
$somma3 = sum(sum(5), sum(2, 5));
// $somma3 = sum(5, 12) + sum(2, 5);
echo $somma3;
// saluta();
// saluta();
// saluta();
// saluta();

// function saluta()
// {
//     echo "Ciao\n"; //echo funzione built in
// }





function sum($ciccio, $pippo = 0) //Opzionale
{
    return $ciccio + $pippo;
    //echo $somma1 . "\n";
    //echo $somma1 . "\n";
}



// function ritornaintero(): string
// {
//     return 78;
// }

// echo ritornaintero();
