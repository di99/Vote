<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content=type" content="text/html;charset=utf-8">
		<title>Show</title>
	</head>
	<link rel="stylesheet" type="text/css" href="/thinkphp_vote/Public/Css/Home/show.css" />
	<body>
		<table width="700"  border="1" color="red" align="center">
			<tr><td><font size="6">姓名</td> <td><font size="6">班级</td> <td><font size="6">票数</td>
					<td><a href="/thinkphp_vote/index.php/Home/Add/add">增加信息</a></td>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					<td><?php echo ($vo["name"]); ?></td> 
					<td><?php echo ($vo["class"]); ?></td>
					<td><?php echo ($vo["count"]); ?></td>
					<td><a href='/thinkphp_vote/index.php/Home/Update/update?id=<?php echo ($vo["id"]); ?>'>修改</a>
						<a href='/thinkphp_vote/index.php/Home/Update/delete?id=<?php echo ($vo["id"]); ?>'>删除</a></td>
				</tr><?php endforeach; endif; ?>
		</table>
			<div id='b'><a href='/thinkphp_vote/index.php/Home/Vote/vote' class='b'>返回主页面</a></div>
	</body>
</html>