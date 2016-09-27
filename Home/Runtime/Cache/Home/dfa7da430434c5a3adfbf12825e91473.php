<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/thinkphp_vote/Public/Css/Home/Login.css" />
		<body>
			<form action='/thinkphp_vote/index.php/Home/Login/doLogin' method='post' name='myform'>
				用户名:<input class='a' type='text' name='username'/><br/>
				密&nbsp;&nbsp;&nbsp;码:<input class='a' type='password' name='password'/><br/>
				<input type='submit' value='登录'/>
			</form>
		</body>
	</head>	
</html>