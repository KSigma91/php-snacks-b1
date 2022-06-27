<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra_casa di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
    $partite_basket = 
    [  
        [
            [
                'nome_squadra' => 'Olimpia Milano',
                'ospite'       => false,
                'punteggio'    => 60
            ],
            [
                'nome_squadra' => 'Cantù',
                'ospite'       => true,
                'punteggio'    => 55
            ]
        ],
        [
            [
                'nome_squadra' => 'Virtus Roma',
                'ospite'       => false,
                'punteggio'    => 70
            ],
            [
                'nome_squadra' => 'Virtus Bologna',
                'ospite'       => true,
                'punteggio'    => 30
            ]
        ],
        [
            [
                'nome_squadra' => 'Montepaschi Siena',
                'ospite'       => false,
                'punteggio'    => 25
            ],
            [
                'nome_squadra' => 'Pallacanestro Varese',
                'ospite'       => true,
                'punteggio'    => 66
            ]
        ],
        [
            [
                'nome_squadra' => 'Sidigas Avellino',
                'ospite'       => false,
                'punteggio'    => 80
            ],
            [
                'nome_squadra' => 'Alma Trieste',
                'ospite'       => true,
                'punteggio'    => 32
            ]
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 1</title>
</head>
<body>

    <?php
        $array_length = count($partite_basket);
        for ($_i = 0; $_i < $array_length; $_i++){
            $partita = $partite_basket[$_i]; ?>
            
            <div>
                <span class="<?= $partita[0]['ospite'] ?>"
                style="color: brown">
                    <?= $partita[0]['nome_squadra'] ?>
                </span>
                <span class="<?= $partita[1]['ospite'] ?>"
                style="color: red">
                    <?= $partita[1]['nome_squadra'] ?>
                </span>
                <?= " | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}" ?>
            </div><?php
        }
    ?>
    
</body>
</html>