<?php

require_once ('cnx.php');

//user
//password
//submit
//create
//delete

/*
//Requête pour se logger
if(isset($_POST['submit']) && (isset($_POST['user']) && isset($_POST['password']) && !empty($_POST))){
    $user = strip_tags(trim($_POST['user']));
$password = strip_tags(trim($_POST['password']));
    
    $log = $db->prepare('SELECT * FROM accesstable(user, password) WHERE(:user = "$password", SHA(:password = "$password"))'); 
    $log->bindValue(':user', $user, PDO::PARAM_STR);
    $log->bindValue(':password', $password, PDO::PARAM_STR);
    $log->execute();
    $log->fetchAll();
    
    echo "Bonjour".$user." !!!!"."< br/>";
    echo "Vous êtes loggé.< br />";
}
*/
//Requête de création et d'insertion de nouveaux users dans la table

if(isset($_POST['create']) && isset($_POST['user']) && isset($_POST['password'])) {
    $user = strip_tags(trim($_POST['user']));
    $password = strip_tags(trim($_POST['password']));
    
    $sql = $db->prepare('INSERT INTO accesstable(user, password) VALUES(:user, SHA(:password)'); 
    $sql->bindParam(':user', $user, PDO::PARAM_STR);
    $sql->bindParam(':password', $password, PDO::PARAM_STR); 
    $sql->execute();
    echo "Bonjour".$user." !!!!"."< br/>";
    echo "Vous êtes enregistré.< br />";
}
/*
//Requête de suppression d'un user dans la table
if(isset($_POST['delete']) && isset($_POST['user']) && isset($_POST['password'])) {
    $user = strip_tags(trim($_POST['user']));
$password = strip_tags(trim($_POST['password']));
    
    $sql = $db->prepare('DELETE AccessTable(user, password) VALUES(:user, SHA(:password))'); 
    $sql->bindValue(':user', $user, PDO::PARAM_STR);
    $sql->bindValue(':password', $password, PDO::PARAM_STR); 
    $sql->execute();
    echo "L'utilisateur ".$user." a été supprimé !!!!"."< br/>";
}
*/
?>
    
