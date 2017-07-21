<?php 
/**
 * 新闻视图模型
 */
namespace Admin\Model;
use Think\Model\ViewModel;
class NewsViewModel extends ViewModel {
    public $viewFields = array(
        'News'=>array('id','category','title','time','author','image','img_path'),
        'Category'=>array('name','_on'=>'News.category=Category.id','_type'=>'left'),

    );
}