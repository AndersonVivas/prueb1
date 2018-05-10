<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=bddprueba1.mysql.database.azure.com;dbname=prueba1;charset=utf8', 'user@bddprueba1', 'Pru3ba123');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
