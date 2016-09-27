<?php
namespace Home\Controller;
use Think\Controller;
class UpdateController extends CommonController {
			public function update(){
					$id=$_GET['id'];
					$_SESSION['aid']=$id;
					$this->display();
			}
			public function doUpdate(){
					$where['id']=$_SESSION['aid'];
					$m=M('Message');
					$m->name=$_GET['name'];
					$m->class=$_GET['class'];
					$row=$m->where($where)->save();
					if($row){
							$this->success('信息修改成功',U('Show/show'));
					}
					else{
							$this->error('信息修改失败');
					}
			}
			public function delete(){
				$where['id']=$_SESSION['aid'];
				$m=M('Message');
				$count=$m->where($where)->delete();	
				if($count){
						$this->success('信息删除成功',U('Show/show'));
				}
				else{	
					$this->error('信息删除失败');
				}
			}
}
?>