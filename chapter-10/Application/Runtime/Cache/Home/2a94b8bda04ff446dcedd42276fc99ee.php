<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分页</title>
</head>
<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>username</th>
        <th>password</th>
        <th>注册时间</th>
        <th>更新时间</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><?php echo ($vo["password"]); ?></td>
            <td><?php echo (date('Y-m-d H:i:s',$vo["created_at"])); ?></td>
            <td><?php echo (date('Y-m-d H:i:s',$vo["updated_at"])); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div>
    <?php echo ($page); ?>
</div>
</body>
</html>