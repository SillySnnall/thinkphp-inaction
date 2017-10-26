<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传</title>
</head>
<body>
<form action="/thinkphp-inaction/chapter-10/index.php/Home/Index/upload_do" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <button>上传</button>
</form>
</body>
</html>