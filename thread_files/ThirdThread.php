<?php
require_once __DIR__."/../Threads.php";
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

$third =new ThirdThreads();
$third->update_third_table();