<?php
session_start();
if(isset($_SESSION["again"])){
        echo "<script>location.href='index.php'</script>";
        exit();
}
include "public/db.php";
include "select.php";
$mname=$_POST["mname"];
$mpass=$_POST["mpass"];
$mpass1=$_POST["mpass1"];
if(empty($mname)||empty($mpass)||empty($mpass1)||$mpass1!=$mpass){
    $message="注册失败";$url="regist.php";
    //include "message.html";
    exit;
}
$mpass=md5($mpass);

if(checkname($db)=="false"){
    echo "<script>location.href='regist.php'</script>";exit();
}

$sql="insert into member (`mname`,`mpass`) VALUES ('{$mname}','{$mpass}')";
$db->query($sql);
if($db->affected_rows>0){
    $message="注册成功";$url="login.php";
    //include "message.html";
}
?>