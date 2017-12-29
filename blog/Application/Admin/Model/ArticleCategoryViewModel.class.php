<?php

use Think\Model\ViewModel;

/**
 * Created by PhpStorm.
 * User: SillySnnall
 * Date: 2017/12/29
 * Time: 17:52
 * 文章-分类模型
 */
class ArticleCategoryViewModel extends ViewModel
{
    /**
     * 文章是属于分类的，所以读取文章列表的时候需要将分类信息同时查询处理
     * @var array
     */
    public $viewFields = array(
        'Article' => array('articleId', 'title', 'description', 'image',
            'hits', 'createdAt', 'updateAt', 'status', 'sort', 'content'),
        'Category' => array('categoryId', 'name', '_on' => 'Article.categoryId=Category.categoryId')
    );
}