<?php
	/*
	* 这是后台首页控制器
	*/
	
	class IndexAction extends CommonAction{
		
		public function index(){
			// $ipAdd = $_SERVER['REMOTE_ADDR'];
			// echo get_client_ip();

			$username = M('user')->find();
			$this->vo = $username;
			$this->display();
		}

		public function logout(){
			$data = array(
				'lock' => 0
				);
			// $username = M('user')->where('username'=>session('username'))->find();
			$loginName = $username['username'];
			// p($loginName);
			M('user')->where(array('username'=> $loginName))->save($data);
			session_unset();
			session_destroy();
			$this->redirect('Admin/Login/index');
		}
	}
?>