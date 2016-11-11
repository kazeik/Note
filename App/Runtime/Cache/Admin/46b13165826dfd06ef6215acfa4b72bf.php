<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" /> -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
	<title>用户管理</title>
</head>
<body>
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>主题</th>
			<!-- <th>内容</th>
			<th>发布时间</th>
			<th>操作</th> -->
		</tr>
		<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
			<td align="center"><?php echo ($v["id"]); ?></td>
			<td align="center"><?php echo ($v["username"]); ?></td>
			<!-- td align="center"><?php echo (replace_phiz($v["content"])); ?></td>
			<td align="center"><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
			<td align="center">
			<a href="<?php echo U('Admin/MsgManager/deleteItem',array('id'=>$v['id']));?>" onClick="" >删除</a></td> -->
		</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan="5" align="center"><?php echo ($page); ?></td>
		</tr>
	</table>
</body>
</html>