<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>注册</title>
	</head>
	<body>
		<form action='/thinkphp_vote/index.php/Home/Register/doReg' method='post'>
			用 户  名:<input type='text' name='username'/><br/>
			密　　码:<input type='password' name='password'/><br/>
			确认密码:<input type='password' name='repassword'/><br/>
			<input type='submit' value='确认注册'/>
		</form>
	</body>
</html>