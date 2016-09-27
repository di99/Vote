<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/thinkphp_vote/Public/Css/Home/vote.css" />
		<body>
			<marquee behavior="alternate"><font size=7 color=red>欢迎进入投票系统</font></marquee>
			<form action='/thinkphp_vote/index.php/Home/Vote/doVote' method='get'>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><input name='id' type="checkbox" value=<?php echo ($vo["id"]); ?>>
					<strong>姓名</strong>:<?php echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;
					<strong>班级</strong>:<?php echo ($vo["class"]); ?></br><?php endforeach; endif; ?>
					<!--<button type="button" onclick="/thinkphp_vote/index.php/Home/Vote/doVote" class='b'>提交</button> -->
					<input type='submit' name="submit" value="提交">
					<a href='/thinkphp_vote/index.php/Home/Login/login' class='b'>管理员登录</a>&nbsp;
					<a href="/thinkphp_vote/index.php/Home/Register/reg" class='b'>管理员注册</a>
				</table>
			</form>
		</body>
	</head>
</html>