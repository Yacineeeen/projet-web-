<?php

class Config
{
    private static $pdo = null;

    public static function getConnexion()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO(
                    'mysql:host=localhost;dbname=event',
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );

                // Définir l'encodage des caractères
                self::$pdo->exec('SET NAMES utf8mb4');

                return self::$pdo;
            } catch (Exception $e) {
                // Enregistrez l'erreur dans le fichier de log
                error_log('Erreur de connexion à la base de données: ' . $e->getMessage());

                // Affichez un message générique aux utilisateurs finaux
                die('Erreur interne. Veuillez réessayer plus tard.');
            }
        }

        return self::$pdo;
    }
}
?>
