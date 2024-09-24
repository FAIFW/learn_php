<?php
$DB_INCOMES = pg_connect("host=127.0.0.1 dbname=incomes user=bookkeeper password=5102");

    if (!$DB_INCOMES) {
        echo 'no connect <br>';
    } else {
        echo 'connected <br>';
    }
?>