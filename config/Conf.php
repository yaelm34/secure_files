<?php

class Conf
{

    /*
     * Lien pour se connecter a la Base de Donnée
     * https://phpmyadmin.cluster023.hosting.ovh.net/
     */
    private static $databases = array(
        'hostname' => 'tomandrikd869.mysql.db',
        'database' => 'tomandrikd869',
        'login' => 'tomandrikd869',
        'password' => 'NDLgeckos30'
    );

    static public function getLogin()
    {
        // en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        return self::$databases['login'];
    }

    static public function getHostname()
    {
        return self::$databases['hostname'];
    }

    static public function getDatabase()
    {
        return self::$databases['database'];
    }

    static public function getPassword()
    {
        return self::$databases['password'];
    }

    private static $debug = True;

    static public function getDebug()
    {
        return self::$debug;
    }
}
?>

