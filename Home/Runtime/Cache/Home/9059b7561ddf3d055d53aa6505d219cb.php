<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>UserShow</title>
	</head>
	<link rel="stylesheet" type="text/css" href="/thinkphp_vote/Public/Css/Home/show.css" />
	<font size=7 color=red><center>投票结果</center></font>
	<body>
		<table width="700"  border="1" color="red" align="center">
			<tr><td><font size="6">姓名</td> <td><font size="6">班级</td> <td><font size="6">票数</td>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					<td><?php echo ($vo["name"]); ?></td> 
					<td><?php echo ($vo["class"]); ?></td>
					<td><?php echo ($vo["count"]); ?></td>
				</tr><?php endforeach; endif; ?>
		</table>
			<div id='b'><a href='/thinkphp_vote/index.php/Home/Vote/vote'>返回主页面</a></div>
	</body>
</html>