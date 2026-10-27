<?php
class Bd {
    private const DSN = "";
    private const USER = "";
    private const PASS = "";

    public static function getConnection(): PDO {
        try{
            return new PDO(self::DSN, self::USER, self::PASS);
        }catch(PDOException $th){
            error_log("Eroor accediendo a la bd: " . $th->getMessage());
            die();
        }
    }
}