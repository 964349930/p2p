<?php
/**
 * 微网站统一控制器
 * @author chen
 * @version 2014-03-03
 */
class IndexAction extends MobileAction
{                                                                                                               
    /**
     * 首页控制函数
     */
    public function index()
    {
    	$list = D('Product') -> select();
		$this ->assign('list',$list);
        $title = "有元宝首页";
        $this->assign("title", $title);
        $this->display();
    }

}