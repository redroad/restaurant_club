<?php
include 'DBcontrol.php';
header('Content-type: application/json');

$db = new DBcontrol();
$db->connect();
$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";
//echo $act;

if ($act == 'register') {
    $name = $_REQUEST['name'];
    $display = $_REQUEST['display'];
    $surname = $_REQUEST['surname'];
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    $sql = "INSERT INTO `members` (`display`, `name`, `surname`, `password`, `email`, `created_at`, `last_login`) VALUES ('$display', '$name', '$surname', '$password', '$email', NOW(), NOW());";
    //echo $sql;
    $db->exec($sql);
    $result = array('success' => true, 'des' => 'inserted');
    echo json_encode(array('result' => $result));
}
if ($act == 'check_duplicate') {
    $email = $_REQUEST['email'];
    $sql = "SELECT * FROM members WHERE `email`='$email'";
    //echo $sql;
    $rs = $db->query($sql);
    $result = array('success' => true, 'des' => 'can use');
    if (!empty($rs)) {
        $result['success'] = false;
        $result['des'] = 'duplicated';
        //var_dump($rs);
    }
    echo json_encode(array('result' => $result));
}

if ($act == 'getuser') {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM members WHERE `id`=$id";
    $rs = $db->query($sql);
    echo json_encode($rs);
}

$db->close();
?>
