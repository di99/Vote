<?php
namespace Home\Controller;
use Think\Controller;
class AddController extends CommonController {	
	public function add(){
					$this->display();
			}
	public function doAdd(){
			$m=M('Message');
			$m->name=$_POST['name'];
			$m->class=$_POST['class'];
			$id=$m->add();
			if($id){
				$this->success('信息添加成功',U('Show/show'));
			}
			else{
					$this->error('信息添加失败');
			}
	}
}