<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>函数测试</title>
</head>
<body>
<p>
    参数大于一个的函数: <?php echo (date('Y-m-d H:i:s',$now)); ?>
    <br>
    参数等于一个的函数: <?php echo (strtoupper($name)); ?>
    <br>
    函数嵌套: <?php echo (substr(md5($name),0,16)); ?>
</p>
</body>
</html>