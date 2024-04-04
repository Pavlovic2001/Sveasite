<?php

//inkluderar dem andra php filerna
    // include('ipadress.php');
    // include('online_users.php');
    // include('visitor_counter.php');

    $html = file_get_contents("Sveasite.html"); //hämtar contents från html dokumentet
    $html = str_replace('-#-', $count_user_online, $html); // str replace metoden
    $html = str_replace('-¤-', $counter, $html); // str replace metoden
    $html = str_replace('-*-', $total_visitors, $html); // str replace metoden

    echo $html; //skriver ut html dokumentet på server sidan

    
    ?>