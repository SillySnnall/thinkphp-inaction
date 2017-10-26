<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>变量输出</title>
</head>
<body>
<p>val:<?php echo ($val); ?></p>
<p>一维数组 name:<?php echo ($array1["name"]); ?></p>
<p>一维数组 name:<?php echo ($array1['name']); ?></p>
<p>二维数组 name:<?php echo ($array2[0]['name']); ?></p>
<p>标准对象 name:<?php echo ($obj->name); ?></p>
</body>
</html>