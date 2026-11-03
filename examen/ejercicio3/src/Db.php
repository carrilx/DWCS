<?php
class Db {
    private const DSN = "mysql:host=mariadb;dbname=examen1_db;charset=utf8mb4";
    private const USER = "root";
    private const PASS = "bitnami";

    public static function getConnection(): PDO{
        try {
            return new PDO(self::DSN, self::USER, self::PASS);
        } catch (PDOException $th) {
            error_log( "Error al conectarse a la base de datos" . $th->getMessage());
            die("Error de conexión" . $th->getMessage());
        }
    }
}