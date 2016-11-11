<?php
	/*
	* 公用打印函数
	*/
	 function p($array){
		dump($array,1,'<pre>',0);
	}
	/**
	*  发布的内容中表情替换
	*/
	 function replace_phiz($content){
		preg_match_all('/\[.*?\]/is', $content , $arr);
		// p($arr);
		if($arr[0]){
			$phiz = F('phiz','','./Data/');
			foreach ($arr[0] as $v) {
				foreach ($phiz as $key => $value) {
					 if($v == '[' . $value . ']'){
					 	 $content = str_replace($v , '<img src="' . __ROOT__ . '/Public/Images/phiz/' . $key . '.gif"/>' , $content);
					 	 break;
					 }
				}
			}
		}
		
		return $content;
	}

	function get_client_ip2($type = 0) {
	    $type       =  $type ? 1 : 0;
	    static $ip  =   NULL;
	    if ($ip !== NULL) return $ip[$type];
	    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
	        $pos    =   array_search('unknown',$arr);
	        if(false !== $pos) unset($arr[$pos]);
	        $ip     =   trim($arr[0]);
	    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip     =   $_SERVER['HTTP_CLIENT_IP'];
	    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	        $ip     =   $_SERVER['REMOTE_ADDR'];
	    }
	    // IP地址合法验证
	    $long = ip2long($ip);
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}
?>