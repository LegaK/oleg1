<?php
require_once __DIR__."/../Threads.php";
//первый класс для потока
class FirstThreads extends TemplateThreads {
    //название таблицы в бд
    private $table='thread_first';
    //получить выборку с таблицы
    function get_first_select()
    {
        return $this->getData($this->table);
    }
    //вывести выборку
    function view_first_select()
    {
        return $this->view_select($this->table);
    }

    //обновить данные
    function update_first_table(){
        var_dump($this->update_date_changed($this->table));
    }
}
//для запуска через cmd
$first =new FirstThreads();
$first->update_first_table();

