<?php
require_once __DIR__."/../Threads.php";
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

$second =new SecondThreads();
$second->update_second_table();
