<?php


class UsersAction extends HomeAction
{
	/**
	*我的账户
	*/
	public function account()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的帐户");
		$this->display();
	}
	/**
	*我的收藏-活动收藏
	*/
	public function actcollect()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的收藏-活动收藏");
		$this->display();
	}
	/**
	*客户经理账户
	*/
	public function manaccount()
	{
		$id = $_GET['id'];
		$this->assign('title', "客户经理账户");
		$this->display();
	}
	/**
	*客户经理中心
	*/
	public function mancenter()
	{
		$id = $_GET['id'];
		$this->assign('title', "客户经理中心");
		$this->display();
	}
	/**
	*机构账户
	*/
	public function orgaccount()
	{
		$id = $_GET['id'];
		$this->assign('title', "机构账户");
		$this->display();
	}
	/**
	*我的收藏-机构收藏
	*/
	public function orgcollect()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的收藏-机构收藏");
		$this->display();
	}
	/**
	*我的收藏-产品收藏
	*/
	public function procollect()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的收藏-产品收藏");
		$this->display();
	}
	/**
	*我的话题-话题收藏
	*/
	public function subcollect()
	{
		$id = $_GET['id'];
		$this->assign('title', "我的话题-话题收藏");
		$this->display();
	}
	/**
	*个人中心
	*/
	public function index()
	{
		$id = $_GET['id'];
		$this->assign('title', "个人中心");
		$this->display();
	}
}