<?php
    $dsn = 'mysql:vvfv20el7sb2enn3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; port=3306; dbname=x6xvxij8stbkvt96';
    $username = 'taz01w7c42lszkvs';
    $password = 'amqc2qcbgy5ly5sf';

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
