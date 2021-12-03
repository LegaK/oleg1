<?php
//список названий файлов для запуска скриптов
$scripts=['FirstThread','SecondThread','ThirdThread','FourthThread','FifthThread'];

//запуск через cmd. 2>&1 & чтобы не ждать завершения процесса
foreach ($scripts as $script){
    echo $script.' is runned<br/>';
    exec("php ".__DIR__."\\thread_files\\". $script . '.php 2>&1 &');
}
?>
