<?php
require_once "Threads.php";
$first= new FirstThreads();
$first->view_first_select();
$first->update_first_table();
echo '<br/>';
$second= new SecondThreads();
$second->view_second_select();
echo '<br/>';
$third= new ThirdThreads();
$third->view_third_select();
echo '<br/>';
$fourth = new FourthThreads();
$fourth->view_fourth_select();
echo '<br/>';
$fifth= new FifthThreads();
$fifth->view_fifth_select();
?>
