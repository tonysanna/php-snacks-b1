<?php
    $matches = [
        [
            'home'=> 'Juventus',
            'fuori' => 'Milan',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'Bologna',
            'fuori' => 'Genoa',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'Barcellona',
            'fuori' => 'Real',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'City',
            'fuori' => 'United',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'Roma',
            'fuori' => 'Lazio',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'Sassuolo',
            'fuori' => 'Napoli',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

        [
            'home'=> 'Bari',
            'fuori' => 'Benevento',
            'homeGol' => 4,
            'fuoriGol' => 1
        ], 

    ];

    for ($i = 0; $i < count($matches); $i++) {
        echo '<p>' . $matches[$i]['home'] . ' - ' . $matches[$i]['fuori'] . ' | ' . $matches[$i]['homeGol'] . '-' . $matches[$i]['fuoriGol'] . '</p>';
    }
?>