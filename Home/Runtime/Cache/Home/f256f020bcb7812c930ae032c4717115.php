<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>Login</title>
	</head>
	<body>
			<form action='/thinkphp_vote/index.php/Home/Add/doAdd' method='post'>
			<table align="center" height="50px">
				<tr><td><strong>姓名</strong></td> <td><input type='text' name='name'/></td></tr>
				<tr><td><strong>班级</strong></td> <td><input type='text' name='class'/></td></tr>
			</table>
			<table align='center' height='55px'>
				<tr><td><input type='submit' value='提交'/></td></tr>
			</table>
			</form>
	</body>
</html>