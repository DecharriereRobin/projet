<?php 
define('DSN', '');
define('DBNAME', '');
define('LOGIN', '');
define('MOT_DE_PASSE', '');
$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        // on change la methode de recuperation des données (tableau associatif) par defaut
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
        //Afficher les erreurs MySql dans le php ou alors dans le PDO::ERRMODE_EXCEPTION
        //Rien à voir avec la config php.ini, ce sont des erreurs MySql interpretées par PDO

    try {
    $db = new PDO("mysql:host=".DSN. ";dbname=".DBNAME, LOGIN, MOT_DE_PASSE, $options);
            // on va chercher $options dans params.php (options pour pdo).
            
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(sprintf("%s dans %s à la ligne %d : %s", get_class($e), $e->getFile(), $e->getLine(), $e->getMessage()));
}
    if ($db) {
        echo "Connexion à la base de données : OK"."<br />", PHP_EOL;
        
    }

if (PHP_SAPI != 'cli') {
    ini_set('html_errors', FALSE);
    header('Content-type: text/html');
}

if (ini_get('display_errors')) {
    echo "Affichage des erreurs : OK"."<br />", PHP_EOL;
} else {
    echo "L'affichage des erreurs est désactivé, veuillez passer display_errors à on dans votre fichier php.ini"."<br />", PHP_EOL;
}
 
if (!version_compare(PHP_VERSION, '5.0.0', '>=')) {
    die("Une version 5 de PHP est requise !"."<br />");
} else {
    
}
 
if (!extension_loaded('pdo')) {
    die("PDO n'est pas disponible ! Vous devez en activer le support en ajoutant cette extension et/ou en recompilant PHP."."<br />");
} else {
    echo "Extension PDO trouvée."."<br />", PHP_EOL;
}
 
echo "Pilotes SGBD disponibles : " . implode(', ', PDO::getAvailableDrivers())."<br />", PHP_EOL;

echo 'Version de PHP : (', PHP_VERSION, ')'."<br />", PHP_EOL;

// echo 'Version de PHP : ' . PHP_VERSION . "\n";


if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo 'J\'ai au moins la version 5.3.0 de PHP ; ma version : ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo 'J\'utilise PHP 5 ; ma version : ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    echo 'J\'utilise PHP 4 ; ma version : ' . PHP_VERSION . "\n";
}


if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
    echo "La fonctionnalité magic_quotes_gpc est active. Veuillez la désactiver.", PHP_EOL;

}
?>