<?php


class TplAction extends HomeAction
{
	/**
	*基金，托管
	*/
	public function productList()
	{
		$type = $_GET['type'];
		//$list = D('Product')->where("***")->order("**")->select();
		$this->assign('title', $type);
		$this->display();

	}
	/**
	*产品详情
	*/
	public function product()
	{
		$id = $_GET['id'];
		$info = D('Product') ->where("id=".$id)-> find();
		$this ->assign('info',$info);
		$this->assign('title', "产品详情");
		$this->display();
	}
	public function property()
	{
		$this->display();
	}
	public function news()
	{
		$list = D('News') -> select();
		$this ->assign('list',$list);
		$this->display();
	}
}