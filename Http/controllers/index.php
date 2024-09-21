<?php

$_SESSION['name'] = 'Mehmet';

view("index.view.php", [
    'heading' => 'Home'
]);