<?php

try{
    //PDO(link, username, password)
    $coDB = new PDO('mysql:host=localhost;dbname=cinema', '', '');

    $coDB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(Exception $e){
    echo 'Erreur (CONNECT.PHP)'. $e->getMessage();
    die();
}