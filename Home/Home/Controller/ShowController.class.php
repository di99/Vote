<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends CommonController {	
	public function show(){
			$message=M('Message');
			$arr=$message->select();
			$this->assign('list',$arr);
			$this->display();
		}
	public function ushow(){
			$message=M('Message');
			$arr=$message->select();
			$this->assign('list',$arr);
			$this->display();
	}
}
?>