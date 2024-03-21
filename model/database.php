<?php
    $dsn = 'mysql:host=vvfv20el7sb2enn3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; port=3306; dbname=awmoo9gsaba92qjz';
    $username = 'aze9sn4z8daci1ao';
    $password = 'xl70jcklcw1csrfp';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    $error .= " (Error Code: " . $e->getCode() . ", SQLSTATE: " . $e->errorInfo[0] . ")";
    include('view/error.php');
    exit();
}
?>
