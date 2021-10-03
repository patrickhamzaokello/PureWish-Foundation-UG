<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'purewishuser');
   define('DB_PASSWORD', 'purewishuser');
   define('DB_DATABASE', 'purewishorg');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>