<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>修改</title>
	</head>
	<body>
		<form action='/thinkphp_vote/index.php/Home/Update/doUpdate' method='get'>
			<table height="50px">
			<tr><td><strong>姓名</strong></td> <td><input type='text' name='name'/></td></tr>
			<tr><td><strong>班级</strong></td> <td><input type='text' name='class'/></td></tr>
			<input type='submit' value='提交'/>
		</form>
	<body>
</html>