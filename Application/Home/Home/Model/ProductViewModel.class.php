<?php 
/**
 * 产品视图模型
 */
namespace Home\Model;
use Think\Model\ViewModel;
class ProductViewModel extends ViewModel {   
    public $viewFields = array(     
        'Product'=>array('id','pro_name','market_price','shop_price','pro_num','pro_cate','description','pro_img','img_path','pro_time'),     
        'Category'=>array('name','_on'=>'Product.pro_cate=Category.id','_type'=>'left'),     
        
           ); 
    }