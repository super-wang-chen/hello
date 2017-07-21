<?php
/**
 * 管理员视图模型
 */
namespace Admin\Model;
use Think\Model\ViewModel;
class AdminViewModel extends ViewModel {
    public $viewFields = array(
        'Admin'=>array('id','username','password','e_mail','level'),
        'Level'=>array('name','_on'=>'Admin.level=Level.id','_type'=>'left'),

    );
}