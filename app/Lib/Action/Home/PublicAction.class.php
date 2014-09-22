<?php


class PublicAction extends HomeAction
{
	 /**
     * 首次登录后的SESSION处理工作
     */
    private function setSession($id){
        $_SESSION['uid'] = $id;
        $_SESSION['current_ip'] = get_client_ip();
        $_SESSION['current_time'] = time();
    }
	/**
	*处理 前台登陆
	*/
	public function doLogin()
	{
        $name = $_POST['name'];
        $password = $_POST['password'];
        $userInfo = D('User')->where("name='".$name."' AND password='".md5($password)."'")->find();
        if(empty($userInfo)){
            $this->error('用户名或密码错误');
        }
        $this->setSession($userInfo['id']);
        $this->success('登陆成功',U('Users/index'));
	}
	/**
	*前台 登录
	*/
	public function login()
	{
		$id = $_GET['id'];
		$this->assign('title', "登录");
		$loginIofo = D('User') -> where("id"<'0')->find;
		if (empty($loginIofo)) {
		   $this->display();
		}else{
			$this->success('登录成功', U('Users/index'));
		}
		
	}
	public function doOrganicreg()
	{

		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		if($password1 !== $password2){
			$this->error("两次密码不正确");
		}
		$tel = $_POST['tel'];
		$is = D('organic')->where("tel='".$tel."'")->find();
		//if(!empty($is)){
		//	$this->error("手机号不正确");
		//}
        $password = $_POST['password'];
        $data = array(
        	'tel' => $tel,
        	'password' => md5($password)
        	);
        $result = D('organic')->add($data);
       
        $this->setSession($userInfo['id']);
        $this->success('注册成功',U('Public/login'));
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
	*前台注册
	*/
	public function doUserreg()
	{

		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		if($password1 !== $password2){
			$this->error("两次密码不正确");
		}
		$tel = $_POST['tel'];
		$is = D('User')->where("tel='".$tel."'")->find();
		//if(!empty($is)){
		//	$this->error("手机号不正确");
		//}
        $password = $_POST['password'];
        $data = array(
        	'tel' => $tel,
        	'password' => md5($password)
        	);
        $result = D('User')->add($data);
        $this->setSession($userInfo['id']);
        $this->success('注册成功',U('Public/login'));
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
	/**
	*登出
	*/
	public function logout()
	{
		$url = U('Home/Public/login');
		$update = array(
			'last_time' => $_SESSION['current_time'],
			'last_ip' => $_SESSION['current_ip'],
			);
		D('User')->where('id='.$_SESSION['uid'])->save($update);
		unset($_SESSION);
		session_destroy();
		$this->success('登出成功',$url);
	}
}