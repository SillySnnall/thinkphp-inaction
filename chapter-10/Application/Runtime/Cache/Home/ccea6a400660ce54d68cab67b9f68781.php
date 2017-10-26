<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
</head>
<body>
<form action="/thinkphp-inaction/chapter-10/index.php/Home/Index/login_do" method="post">
    <input type="text" placeholder="请输入验证码" name="code" required>
    <img src="<?php echo U('verify');?>" alt="" onclick="this.src= '<?php echo U('verify');?>?'+Math.random()" title="看不清,换一张">
    <button>登录</button>
</form>
</body>
</html>