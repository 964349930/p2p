<?php


class PublicAction extends HomeAction
{
	/**
	*登录
	*/
	public function login()
	{
		$id = $_GET['id'];
		$this->assign('title', "登录");
		$this->display();
	}
	/**
	*机构注册
	*/
	public function organicreg()
	{
		$id = $_GET['id'];
		$this->assign('title', "机构注册");
		$this->display();
	}
	/**
	*用户注册
	*/
	public function userreg()
	{
		$id = $_GET['id'];
		$this->assign('title', "用户注册");
		$this->display();
	}
}