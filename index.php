<?php
    $action = (isset($_GET['a'])) ? $_GET['a'] : '';
    session_start();
    date_default_timezone_set('EST');
    include 'DB.php';

    include './Parts/Header.php';
    
   
    include './Parts/Body.php'; 
      
    include './Parts/Footer.php';
?> 