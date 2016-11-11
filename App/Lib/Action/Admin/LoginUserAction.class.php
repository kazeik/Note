<?php
	class LoginUserAction extends CommonAction{
		public function index(){
			import('ORG.Net.IpLocation');// 导入IpLocation类
			$Ip = new IpLocation('UTFWry.dat'); // 实例化类
			$location = $Ip->getlocation("59.108.49.35"); // 获取某个IP地址所在的位置
			
			$user = M('user')->find();
			
			//获取北京天气
			$weatherUrl ='http://www.weather.com.cn/data/sk/101010100.html';
			$str = file_get_contents($weatherUrl);
			// var_dump($str);
			$jsonWeather = json_decode($str);
			
			$body = array(
					'city' => $location['country'],
					'weather' =>'<br>风向:'.$jsonWeather->weatherinfo->WD.'<br>风力:'.$jsonWeather->weatherinfo->WS.'<br>湿度：'.$jsonWeather->weatherinfo->SD.'<br>发布时间：'.$jsonWeather->weatherinfo->time,
					'loginip' => get_client_ip(),
					'username' => $user['username'],
					'logintime' => $user['logintime']
				);
			
 			$this->body = $body;
			$this->display();
		}
	}
?>