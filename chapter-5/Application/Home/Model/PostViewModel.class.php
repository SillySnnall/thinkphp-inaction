<?php
/**
 * Created by PhpStorm.
 * User: StringBOX
 * Date: 2017/10/19
 * Time: 10:54
 */

namespace Home\Model;

use Think\Model\ViewModel;

class PostViewModel extends ViewModel
{
    public $viewFields = array(
        'Post' => array('post_id', 'title', 'content', 'created_at', 'updated_at'),
        'User' => array('username' => 'author', '_on' => 'Post.user_id=User.id')
    );
}