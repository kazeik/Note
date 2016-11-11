<?php 
	/**
	*
	* 前端首页控制器
	*/
	class IndexAction extends Action{
		/**
		* 首页视图
		*/
		public function index(){
			// $sql_value = M('note')->select();
			// for($i = 0; $i < count($sql_value); $i++){
			// 	$value = $sql_value[$i];
			// 	$sql_value[$i]['content'] = replace_phiz($value['content']);
			// }
			//分配模版并显示
			// $this->assign('note',$sql_value)->display();
			$this->assign('note',M('note')->select())->display();
		}
		
		/**
		* 删除某一项
		*/
		public function deleteItem(){
			// p($_GET);
			// echo $id;

			if(M('note')->where('id='. I('id'))->delete()){
				halt('删除成功');
			}else{
				halt('删除失败');
			}
		}
		/***
		*
		* 异步表单处理
		*/
		public function handle(){
			if(!IS_AJAX){
				// _404('页面不存在');
				halt('页面不存在');
			}
			// p(I('post.'));
			$data = array(
				'username' => I('username'),
				'content' => I('content'),
				'time' => time()
				);

			// echo json_encode(array('status' => 0));
			// $this->ajaxReturn(array('status' => 0,'json'));

			if($id = M('note')->data($data)->add()){
				$data['id'] = $id;
				$data['content'] = replace_phiz($data['content']);
				$data['time'] = date('y-m-d H:i',$data['time']);
				$data['status'] = 1;
				$this->ajaxReturn($data,'json');

			}else{
				// echo json_encode(array('status' => '0'));
				$this->ajaxReturn(array('status' => '0','json'));
			}

			// $phiz =array('zhuakuang' => '抓狂',
			// 		'baobao' => '抱抱',
			// 		'haixiu' => '害羞',
			// 		'ku' => '酷',
			// 		'xixi' =>'嘻嘻',
			// 		'taikaixin' => '太开心', 
			// 		'touxiao' => '偷笑',
			// 		'qian' =>'钱',
			// 		'huaxin' => '花心',
			// 		'jiyan' => '挤眼'
			// 		);

			
			//写文件
			// F('phiz', $phiz, './Data/');
			//读文件
			// $phiz = F('phiz','','./Data/');
		}
	}
?>