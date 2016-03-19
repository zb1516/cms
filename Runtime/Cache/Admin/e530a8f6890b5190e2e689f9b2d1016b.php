<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>登陆</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/back/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="/back/css/bootstrap-responsive.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="/back/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/back/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/back/css/themes.css">


	<!-- jQuery -->
	<script src="/back/js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="/back/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Validation -->
	<script src="/back/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/back/js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="/back/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="/back/js/bootstrap.min.js"></script>
	<script src="/back/js/eakroko.js"></script>

	<!--[if lte IE 9]>
		<script src="/back/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	

	<!-- Favicon -->
	<link rel="shortcut icon" href="/back/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/back/img/apple-touch-icon-precomposed.png" />

</head>
<body class='login'>
	<div class="wrapper">
		<h1><a href="index.html"><img src="/back/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">后台管理系统</a></h1>
		<div class="login-body">
			<h2>登陆</h2>
			<form action="index.html" method='get' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='admin_name' placeholder="输入用户名" class='input-block-level' data-rule-required="true" data-rule-email="true">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="password" name="password" placeholder="输入密码" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">记住我</label>
					</div>
					<input type="submit" value="登陆" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span>忘记密码?</span></a>
			</div>
		</div>
	</div>


</body>
</html>