<?php

abstract class Model
{
    // à compléter avec les infos de votre base de données
    private const HOST = 'localhost';
    private const DB = 'superalimentsperou';
    private const USER = 'root';
    private const PWD = '';
    
    private static $database; //partagé avec toutes les instances des classes qui heritent de la class Model

    /**
     * Cette fonction sera appelée par getDatabase() la première fois pour
     * initialiser la connexion avec la base de données
     */
    private static function initDatabase(){
        self::$database = new PDO('mysql:host='. self::HOST . ';dbname='. self::DB,
            self::USER,
            self::PWD,
            [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
        );
        //gestion des erreurs
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //design pattern singleton
    protected function getDatabase()
    {
        // la première fois on initialise self::$database
        if (self::$database === null) {
            self::initDatabase();
        }
        // et on renvoie l'objet qui sert à effectuer les requêtes
        return self::$database;
    }
}