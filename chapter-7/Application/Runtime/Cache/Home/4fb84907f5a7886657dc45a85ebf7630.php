<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>默认值测试</title>
</head>
<body>
<p>变量默认值测试: <?php echo ((isset($user["mark"]) && ($user["mark"] !== ""))?($user["mark"]):'该用户很懒'); ?></p>
<p>变量默认值+函数测试: <?php echo (var_dump(empty((isset($_GET['name']) && ($_GET['name'] !== ""))?($_GET['name']):'名称为空'))); ?></p>
</body>
</html>