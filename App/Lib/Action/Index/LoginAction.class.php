<?php
	class LoginAction extends Action{

		public function index(){
			$this->display();
		}

		/**
	* 验证码
	*/
	public function verify(){
		import('ORG.Util.Image');
		/**
		* 长度，编码类型1：数字，2：，3：，4：5：混合。图片格式，宽，高，
		*/
		Image::buildImageVerify(4 , 5 , 'png');
	}

	public function login(){
		if(!IS_POST){
			halt('页面不存在');
		}
		// p(I('code'));
		if(I('code','','md5') != session('verify')){
			$this-error('验证码错误');
		}

		$username=I('username');
		$pwd = I('password','','md5');

		$user = M('user')->where(array('username'=> $username))->find();

		if(!$user || $user['password'] != $pwd){
			$this->error('帐号或密码错误');
		}

		if($user['lock']) 
			$this->error('用户被锁定');
		
		$data = array(
			'id'=>$user['_id'],
			'logintime' => time(),
			'loginip' => get_client_ip(),
			'username' => $user['username'],
			);

		M('user')->save($data);

		session('uid',$user['_id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s'),$user['logintime']);
		session('loginip',$user['loginip']);

		$this->redirect('Admin/Index/index');
	}

	}
?>