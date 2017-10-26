<?php
/**
 * Created by PhpStorm.
 * User: StringBOX
 * Date: 2017/10/25
 * Time: 15:02
 */

namespace Home\Model;

use Think\Model\ViewModel;

class MessageViewModel extends ViewModel
{
    public $viewFields = array(
        'Message' => array('message_id', 'content', 'created_at'),
        'User' => array('user_id', 'username', '_on' => 'User.user_id=Message.user_id')
    );
}