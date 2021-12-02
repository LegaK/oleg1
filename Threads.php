<?php
require_once 'ConnectClass.php';
require_once 'db_config.php';


class TemplateThreads
{

private $db_pdo;

    function __construct()
    {
        $db = new ConnectClass($pdo);
        $this->db_pdo=$db->get_pdo();
    }


    function getData($table)
    {
        $query = $this->db_pdo->prepare('SELECT * FROM '.$table);
        $query->execute();
        return $query->fetchAll();
    }
    function view_select($table){
        var_dump($this->getData($table));
    }
    function update_date_changed($table){
       $query= $this->db_pdo->prepare('
       LOCK TABLES '.$table.' WRITE;
       UPDATE '.$table.
            ' SET DATE_TIME_CHANGED = CURRENT_TIMESTAMP();
            UNLOCK TABLES');
        return $query->execute();
    }

}


class FirstThreads extends TemplateThreads {

    private $table='thread_first';
    function get_first_select()
    {
        return $this->getData($this->table);
    }

    function view_first_select()
    {
        return $this->view_select($this->table);
    }


    function update_first_table(){
      var_dump($this->update_date_changed($this->table));
    }
}

class SecondThreads extends TemplateThreads {

    private $table='thread_second';
    function get_second_select()
    {
        return $this->getData($this->table);
    }

    function view_second_select()
    {
        return $this->view_select($this->table);
    }


    function update_second_table(){
        var_dump($this->update_date_changed($this->table));
    }
}

class ThirdThreads extends TemplateThreads {

    private $table='thread_third';
    function get_third_select()
    {
        return $this->getData($this->table);
    }

    function view_third_select()
    {
        return $this->view_select($this->table);
    }


    function update_third_table(){
        var_dump($this->update_date_changed($this->table));
    }
}


class FourthThreads extends TemplateThreads {

    private $table='thread_fourth';
    function get_fourth_select()
    {
        return $this->getData($this->table);
    }

    function view_fourth_select()
    {
        return $this->view_select($this->table);
    }


    function update_fourth_table(){
        var_dump($this->update_date_changed($this->table));
    }
}

class FifthThreads extends TemplateThreads {

    private $table='thread_fifth';
    function get_fifth_select()
    {
        return $this->getData($this->table);
    }

    function view_fifth_select()
    {
        return $this->view_select($this->table);
    }


    function update_fifth_table(){
        var_dump($this->update_date_changed($this->table));
    }
}