<?php
require_once __DIR__."/../Threads.php";
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

$fifth =new FifthThreads();
$fifth->update_date_changed();