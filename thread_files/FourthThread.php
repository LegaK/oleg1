<?php
require_once __DIR__."/../Threads.php";
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

$fourth =new FourthThreads();
$fourth->update_fourth_table();