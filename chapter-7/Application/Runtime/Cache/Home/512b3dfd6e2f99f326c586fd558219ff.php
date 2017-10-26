<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<p>header.html</p>
<div class="content">
    
<h2>volist</h2>
<ul>
    <?php if(is_array($projects)): $k = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($k % 2 );++$k;?><li><?php echo ($k); ?> - <?php echo ($project["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<h2>foreach</h2>
<ul>
    <?php if(is_array($projects)): foreach($projects as $k=>$project): ?><li><?php echo ($k); ?> - <?php echo ($project["name"]); ?></li><?php endforeach; endif; ?>
</ul>
<h2>for</h2>
<ul>
    <?php $__FOR_START_24231__=0;$__FOR_END_24231__=count($projects);for($index=$__FOR_START_24231__;$index < $__FOR_END_24231__;$index+=1){ ?><li><?php echo ($index); ?> - <?php echo ($projects[$index]['name']); ?></li><?php } ?>
</ul>
<h2>switch</h2>
<div>
    <?php switch($age): case "18": ?>18岁的<?php break;?>
        <?php default: ?>
        不是18岁的<?php endswitch;?>
</div>
<h2>eq</h2>
<div>
    <?php if(($age) == "18"): ?>18岁的
        <?php else: ?>
        不是18岁的<?php endif; ?>
</div>
<h2>neq</h2>
<div>
    <?php if(($age) != "17"): ?>不是17岁的
        <?php else: ?>
        是17岁的<?php endif; ?>
</div>
<h2>gt</h2>
<div>
    <?php if(($age) > "17"): ?>大于17岁的
        <?php else: ?>
        不大于17岁的<?php endif; ?>
</div>
<h2>egt</h2>
<div>
    <?php if(($age) >= "18"): ?>大于等于18岁的
        <?php else: ?>
        小于18岁的<?php endif; ?>
</div>
<h2>lt</h2>
<div>
    <?php if(($age) < "18"): ?>小于18岁的
        <?php else: ?>
        不小于18岁的<?php endif; ?>
</div>
<h2>elt</h2>
<div>
    <?php if(($age) <= "18"): ?>小于等于18岁的
        <?php else: ?>
        大于18岁的<?php endif; ?>
</div>
<h2>in</h2>
<div>
    <?php if(in_array(($age), explode(',',"17,18,19"))): ?>age在17,18,19中
        <?php else: ?>
        age不在17,18,19中<?php endif; ?>
</div>
<h2>notin</h2>
<div>
    <?php if(!in_array(($age), explode(',',"20,21"))): ?>age不在20,,21中
        <?php else: ?>
        age在20,,21中<?php endif; ?>
</div>
<h2>between</h2>
<div>
    <?php $_RANGE_VAR_=explode(',',"10,20");if($age>= $_RANGE_VAR_[0] && $age<= $_RANGE_VAR_[1]):?>age在10~20中
        <?php else: ?>
        age不在10~20中<?php endif; ?>
</div>
<h2>notbetween</h2>
<div>
    <?php $_RANGE_VAR_=explode(',',"20,40,80");if($age<$_RANGE_VAR_[0] || $age>$_RANGE_VAR_[1]):?>age不在20~40中
        <?php else: ?>
        age在20~40中<?php endif; ?>
</div>
<h2>empty</h2>
<div>
    <?php if(empty($age)): ?>age是空的
        <?php else: ?>
        age不是空的<?php endif; ?>
    <br>
    <?php if(empty($b)): ?>b是空的
        <?php else: ?>
        b不是空的<?php endif; ?>
</div>
<h2>defined</h2>
<div>
    <?php if(defined("THINK_PATH")): ?>THINK_PATH已定义
        <?php else: ?>
        THINK_PATH未定义<?php endif; ?>
</div>
<h2>defined</h2>
<div>
    <?php if(defined("APP_TEST")): ?>APP_TEST已定义
        <?php else: ?>
        APP_TEST未定义<?php endif; ?>
</div>
<h2>volist嵌套</h2>
<div>
    <?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?><p>name:<?php echo ($project["name"]); ?></p>
        <ul>
            <?php if(is_array($project["members"])): $i = 0; $__LIST__ = $project["members"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$member): $mod = ($i % 2 );++$i;?><li><?php echo ($member["id"]); ?> - <?php echo ($member["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div>
    资源目录为:/thinkphp-inaction/chapter-7/Public
    <br>
    <script type="text/javascript" src="/thinkphp-inaction/chapter-7/Public/Js/main.js"></script>
</div>
<h2>使用PHP</h2>
<div>
    <?php echo '本行由PHP输出';?>
</div>
</div>
footer.html
</body>
</html>