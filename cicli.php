<?php

//Stampare tutti i numeri da 5 fino a 1000

// for ($i = 5; $i <= 200; $i++) {
//     if ($i == 100) {
//         echo 'Aulab' . "\n";
//     } else {
//         echo $i . "\n";
//     }
//     //for ($i = 5; $i >= 1000; $i++) {


// }

// echo 1 . "\n";
// echo 2 . "\n";
// echo 3 . "\n";
// echo 4 . "\n";
// echo 5 . "\n";


$users = [
    ['name' => 'Francesco', 'age' => 34],
    ['name' => 'Carlo', 'age' => 12],
    ['name' => 'Silvia', 'age' => 21],
    ['name' => 'Tizio', 'age' => 99],
];

// for ($i = 0; $i < count($users); $i++) {
//     echo "Mi chiamo " . $users[$i]['name'] . ' e ho anni: ' . $users[$i]['age'] . "\n";
// }

// //var_dump($users);
// echo "Mi chiamo " . $users[0]['name'] . ' e ho anni: ' . $users[0]['age'] . "\n";
// echo "Mi chiamo " . $users[1]['name'] . ' e ho anni: ' . $users[1]['age'] . "\n";
// echo "Mi chiamo " . $users[2]['name'] . ' e ho anni: ' . $users[2]['age'] . "\n";
// echo "Mi chiamo " . $users[3]['name'] . ' e ho anni: ' . $users[3]['age'] . "\n";


// foreach ($users as $user) {

//     if ($user['age'] >= 20) {
//         echo "Mi chiamo " . $user['name'] . ' e ho anni: ' . $user['age'] . "\n";
//     } else {
//         echo "Sono minorenne e mi chiamo " . $user['name'] . ' e ho anni: ' . $user['age'] . "\n";
//     }
// }


foreach ($users as $user) {
    // if ($user['name'] == 'Silvia') {
    //     continue;
    // }
    if ($user['name'] == 'Francesco') {
        echo "Mi chiamo " . $user['name'] . ' e ho anni: ' . $user['age'] . "\n";
        break;
    }
    echo $user['name'];
}
