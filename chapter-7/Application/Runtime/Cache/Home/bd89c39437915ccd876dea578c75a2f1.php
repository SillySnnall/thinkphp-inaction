<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>输出系统变量</title>
</head>
<body>
<p>
    输出Server变量:<?php echo ($_SERVER['REQUEST_URI']); ?>
    <br>
    速出Get变量:<?php echo ($_GET['name']); ?>
    <br>
    输出Cookie变量:<?php echo (cookie('PHPSESSID')); ?>
    <br>
    输出配置变量:<?php echo (C("name")); ?>
</p>
</body>
</html>