<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<p>当前登录用户：<?php echo ($body["username"]); ?></p>
<p>上次登录时间：<?php echo (date('Y-m-d H:i',$body["logintime"])); ?></p>
<p>所在的城市：<?php echo ($body["city"]); ?></p>
<p>当前登录IP：<?php echo ($body["loginip"]); ?> </p>
<p>城市天气： <?php echo ($body["weather"]); ?></p>
</body>

</html>