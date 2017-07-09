<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["agian"])){
    echo "<script>alert('已登陆');location.href='index.php'</script>";
    exit();
}
include "public/db.php";
include "select.php";
$mname=$_POST["mname"];
$mpass=$_POST["mpass"];


$arr=select($db);
foreach ($arr as $v){
    if($v['mname']==$mname){
        if($v["mpass"]==md5($mpass)){
            $_SESSION["login"]="yes";
            $_SESSION["again"]="yes";
            $_SESSION["mname"]=$mname;
            $_SESSION["mid"]=$v["mid"];
            if(isset($_SESSION["url"])){
                $url=$_SESSION["url"];
            }else{
                $url="index.php";
            }
            $message="登录成功";$url="{$url}";
            include "index.html";
            exit();
        }
    }
}

$message="登录失败";$url="login.php";
include "message.html";

?>