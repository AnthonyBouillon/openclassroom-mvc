<?php
function getPosts(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', '');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    
    $request = $bdd->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    return $request;
}