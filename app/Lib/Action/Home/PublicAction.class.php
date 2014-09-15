<?php


class PublicAction extends HomeAction
{
	public function doLogin()
	{
		//print_r($_POST);exit;
        $name = $_POST['name'];
        $pwd = $_POST['password'];
        $userInfo = D('User')->where("name='".$name."' AND password='".md5($pwd)."'")->find();
        //print_r (D('User')->getLastSQL());exit;
        if(empty($userInfo)){
            $this->error('用户名或密码错误');
        }
        $this->setSession($userInfo['id']);
        $this->success('登录成功', U('Hone/Users/index'));
	}
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