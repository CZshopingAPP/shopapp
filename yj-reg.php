<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/yj-reg.css">
	<script src="js/rem.js"></script>
	<script src="js/jQuery.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/messages_zh.js"></script>

	<style>
		.loginn{
			background-image: url("img/yj-reg-reg1.png");
			background-size: 100%;
			background-position: center;
			border: none;
			border-radius: 0.4rem;
			/*margin-top: 0.6rem;*/
			position: fixed;
			bottom: 1.5rem;
		}
       .message span{
		   margin-left: 0.6rem;
		   margin-top: -0.45rem;
	   }
	</style>
</head>
<body>
	<div class="box">
		<div class="shop1"></div>
		<div class="shop"></div>
		<div class="reg">
			<div class="reg-title">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<form action="" class="myform">
			<input type="text" class="user phone" placeholder="请输入手机号码或邮箱" name="mname">
			<input type="text" class="code" placeholder="请输入验证码">
			<input type="password" class="pass" placeholder="请输入密码" name="mpass">
			<input type="password" class="pass1" placeholder="请再次输入密码" name="mpass1">
			<div class="huoqu">获取</div>
		</div>
		<div class="message">
			<div class="message1"></div>
			<span></span>
		</div>
		<input type="button" class="loginn">

		</form>
	</div>
</body>
<script>
	$("input").blur(function () {
		if($(".user").val()!=""){
			if($(".code").val()!=""){
				if($(".pass").val()!=""){
					if($(".pass1").val()!=""){
						$(".loginn").css("background-image","url('img/yj-reg-reg.png')")
					}
				}

			}
		}
	})
		jQuery.validator.addMethod("isMobile", function(value, element) {
		var length = value.length;
		var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
		return this.optional(element) || (length == 11 && mobile.test(value));
	}, "请正确填写您的手机号码");

	$(".myform").validate({
		errorLabelContainer:".message span",
		rules: {
			/*user: {
				required: true,
				email: true,

			},*/
			mname: {
				required: true,
				minlength: 11,
				// 自定义方法：校验手机号在数据库中是否存在
				// checkPhoneExist : true,
				isMobile: true,
				email:true,
			},
		},
		messages: {
			mname: {
				required: "请输入手机号",
				minlength: "确认手机不能小于11个字符",
				isMobile: "请正确填写您的手机号码"
			},
		}
	})


</script>
</html>