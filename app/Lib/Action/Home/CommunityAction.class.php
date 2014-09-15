<?php
class CommunityAction extends HomeAction
{
	/**
	*圈子
	*/
	public function index()
	{
		$id = $_GET['id'];
		$this->assign('title', "圈子");
		$this->display("Community:circle");
	}

	/**
	*
	*/
	public function acticity()
	{
		$id = $_GET['id'];
		$this->assign('title', "圈子");
		$this->display();
	}
	/**
	*
	*/
	public function newcitcle()
	{
		$id = $_GET['id'];
		$this->assign('title', "圈子");
		$this->display();
	}
	/**
	*
	*/
	public function publish()
	{
		$id = $_GET['id'];
		$this->assign('title', "圈子");
		$this->display();
	}
}