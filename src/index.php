<?php

echo 'Hello world!';

$pdo = new PDO('mysql:host=liketoshare_mysql', 'root', 'root');
$databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($databases);
