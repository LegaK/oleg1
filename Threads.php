<?php
//полный путь из-за запуска через cmd
require_once __DIR__."/ConnectClass.php";

//шаблон для скриптов
class TemplateThreads
{

private $db_pdo;

    function __construct()
    {
        $db = new ConnectClass();
        $this->db_pdo=$db->get_pdo();
    }

//делаем выборку
    function getData($table)
    {
        $query = $this->db_pdo->prepare('SELECT * FROM '.$table);
        $query->execute();
        return $query->fetchAll();
    }
    //для вывода содержимого
    function view_select($table){
        var_dump($this->getData($table));
    }
    //обновление данных
    function update_date_changed($table){
       $query= $this->db_pdo->prepare('
       LOCK TABLES '.$table.' WRITE;
       UPDATE '.$table.
            ' SET DATE_TIME_CHANGED = CURRENT_TIMESTAMP();
            UNLOCK TABLES');
        return $query->execute();
    }

}











