<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/yj-login.css">
	<script src="js/rem.js"></script>
	<script src="js/jQuery.js"></script>
	<script src="js/jquery.validate.js"></script>
		<script src="js/messages_zh.js"></script>
	<style>
		.loginn{
			background-image: url("img/yj-login-login.png");
			background-size: 100%;
			background-position: center;
			border: none;
			border-radius: 0.4rem;
			margin-top: 0.6rem;
		}
		.pass{
			margin-top: -2.45rem;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="shop1"></div>
		<div class="shop"></div>
        <form action="Checklogin.php">
            <div class="login">
                <div class="user">
                    <div class="xuan">
                        <div class="xuan1"></div>
                        <div class="xuan2"></div>
                    </div>
                    <div class="usertitle"></div>
                    <input type="text" class="input" placeholder="您可以输入邮箱或手机号" name="mname">
                    <input type="password" class="password" placeholder="您可以输入密码" name="mpass">
                </div>
                <div class="zc">
                    <div class="zc1">
                        <span></span>
                        <span>找回密码</span>
                    </div>
                    <div class="zc2">
                        <span></span>
                        <span>我要注册</span>

                    </div>
                </div>
            </div>

		<div class="tiao"></div>
		<div class="user1"></div>
		<div class="pass"></div>
		<div class="message">
			<div class="message1"></div>
			<span>您填写的用户名有误</span>
		</div>

			<input type="button" class="loginn">

        </form>
		
        
		<div class="san">
			<span></span>
			<span></span>
			<span></span>
		</div>

	</div>
</body>
<script type="text/javascript">

	$(".pass").click(function () {
		if($(".input").val()==""){
			$(".pass").disabled();
		}
	})
	$(".pass").click(function(){
		$(".usertitle").css("background-image","url('img/yj-login-userpass.png')");
		$(".input").hide();
		$(".password").show();
		$(this).css("background-image","url('img/yj-login-pass1.png')");
		$(".xuan1").css("width","0.08rem");
		$(".xuan2").css("width","0.19rem");
	})
	$(".user1").click(function(){
		$(".usertitle").css("background-image","url('img/yj-login-username.png')");
		$(".input").show();
		$(".password").hide();
		$(".xuan2").css("width","0.08rem");
		$(".xuan1").css("width","0.19rem");
	})
	/*if($(".input").val()==""){
		if($(".password").val()==""){
			$(".loginn").disable();
		}
	}*/
	$(".password").blur(function () {
		if($(".password").val()!=""){
			$(".loginn").css("background-image","url('img/yj-login-login1.png')")
		}
	})




</script>
</html>