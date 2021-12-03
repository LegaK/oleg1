<?php


class ConnectClass
{
    //настройки подключения к бд
private $host = '127.0.0.1';
private $db_name = 'oleg_test';
private $db_username = 'root';
private $db_password = '';
private $pdo;
    function __construct()
    {
        //попытка подключения, charset=utf8 для вывода русских букв
        try
        {
            $this->pdo = new PDO('mysql:host='. $this->host .'; charset=utf8; dbname='.
                $this->db_name, $this->db_username, $this->db_password);
        }
        catch (PDOException $e)
        {
            print $e;
            exit('Error Connecting To DataBase');
        }
    }

    //возврат подключения к бд
    function get_pdo(){
        return $this->pdo;
    }

}
?>