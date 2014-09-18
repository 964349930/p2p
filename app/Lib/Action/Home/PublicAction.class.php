<?php


class PublicAction extends HomeAction
{
	/**
	*处理 前台登陆
	*/
	public function doLogin()
	{
        $name = $_POST['name'];
        $password = $_POST['password'];
        $userInfo = D('User')->where("name='".$name."' AND password='".md5($pwd)."'")->find();
        if(empty($userInfo)){
            $this->error('用户名或密码错误');
        }
        $this->setSession($userInfo['id']);
        $this->success('登录成功', U('Users/index'));
	}
	/**
	*前台 登录
	*/
	public function login()
	{
		$id = $_GET['id'];
		$this->assign('title', "登录");
		$loginIofo = D('User') -> where("id">'0')->find;
		if (empty($loginIofo)) {
		    $this->success('登录成功', U('Users/index'));	
		}else{
			$this->success( U('Public/login'));
		}
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