<?php
/**
 * Created by PhpStorm.
 * User: StringBOX
 * Date: 2017/10/19
 * Time: 15:06
 */

namespace Home\Model;
use Think\Model\RelationModel;

class PostModel extends RelationModel{
    public $_link = array(
        'author'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'class_name'=>'User',
            'foreign_key'=>'user_id',
//            'mapping_fields'=>'username,created_at'
        )
    );
}