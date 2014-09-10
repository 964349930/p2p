<?php


class TplAction extends HomeAction
{

	public function productList()
	{
		$type = $_GET['type'];
		//$list = D('Product')->where("***")->order("**")->select();
		$this->assign('title', $type);
		$this->display();

	}

	public function product()
	{
		$id = $_GET['id'];
		$this->assign('title', "产品详情");
		$this->display();
	}
	public function property()
	{
		$this->display();
	}
	public function trust()
	{
		$this->display();
	}
}