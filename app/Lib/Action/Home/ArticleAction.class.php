<?php



class ArticleAction extends HomeAction
{
	/**
	*订单管理
	*/

	public function allocation()
	{
		$id = $_GET['id'];
		$this->assign('title', "订单管理");
		$this->display();
	}
	/**
	*个人中心
	*/

	public function complete()
	{
		$id = $_GET['id'];
		$this->assign('title', "个人中心");
		$this->display();
	}
	/**
	*机构详情
	*/

	public function details()
	{
		$id = $_GET['id'];
		$this->assign('title', "机构详情");
		$this->display();
	}
	/**
	*我的订单-新订单
	*/

	public function myorder()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的订单-新订单");
		$this->display();
	}
	/**
	*客户经理订单
	*/

	public function order()
	{
		$id = $_GET['id'];
		$this->assign('title', "客户经理订单");
		$this->display();
	}
	/**
	*订单管理（机构-新订单）
	*/

	public function orgorder()
	{
		$id = $_GET['id'];
		$this->assign('title', "订单管理（机构-新订单）");
		$this->display();
	}
	/**
	*订单管理（处理中订单）
	*/

	public function proces()
	{
		$id = $_GET['id'];
		$this->assign('title', "订单管理（处理中订单）");
		$this->display();
	}
	/**
	*机构管理
	*/
	public function center(){
		$id = $_GET['id'];
		$this->assign('title', "机构管理");
		$this->display();
	}
}
