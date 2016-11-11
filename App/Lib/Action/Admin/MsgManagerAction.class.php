<?php
	class MsgManagerAction extends CommonAction{

		public function index(){
			import('ORG.Util.Page');

			$count = M('note')->count();

			//参数1： 总条数，参数2：每页显示多少条
			$page = new Page($count,10);
			$limit = $page->firstRow . ',' . $page->listRows;

			$data = M('note')->order('time DESC')->limit($limit)->select();
			$this->note = $data;
			$this->page = $page->show();
			$this->display();
		}

		public function deleteItem(){
			if(M('note')->where('id=' . I('id'))->delete()){
				// halt('删除成功');
				echo "<script>alert('删除成功');</script>";
				// this->redirect('Admin/MsgManagerAction/index');
			}else{
				// halt('删除失败');
				echo "<script>alert('删除失败');</script>";
			}
		}
	}
?>