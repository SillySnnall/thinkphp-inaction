<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>算数运算符测试</title>
</head>
<body>
<h1>数组测试：</h1>
<p>'+'=><?php echo ($userArray['age']+1); ?></p>
<p>'-'=><?php echo ($userArray['age']-1); ?></p>
<p>'*'=><?php echo ($userArray['age']*2); ?></p>
<p>'/'=><?php echo ($userArray['age']/2); ?></p>
<p>'%'=><?php echo ($userArray['age']%2); ?></p>
<h1>对象测试</h1>
<p>'+'=><?php echo ($userObj->age+1); ?></p>
<p>'-'=><?php echo ($userObj->age-1); ?></p>
<p>'*'=><?php echo ($userObj->age*2); ?></p>
<p>'/'=><?php echo ($userObj->age/2); ?></p>
<p>'%'=><?php echo ($userObj->age%2); ?></p>
</body>
</html>