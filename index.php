<?php 

//Sorteren steden

$steden = ['New York City', 'Mexico City', 'Tokyo', 'London', 'Seoul', 'Buenos Aires', 'Lagos', 'Shanghai', 'Cairo', 'Mumbai'];
sort($steden);

foreach ($steden  as $key) {
    echo '<ol>';

    echo strtoupper($key);
    
    echo '</ol>';

};