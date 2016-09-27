<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class VoteController extends Controller {
	public function vote(){
			$message=M('Message');
			$arr=$message->select();
			$this->assign('list',$arr);
			$this->display();
	}
	public function doVote(){
			$id=$_GET['id'];
			$m=M('Message');
			$where['id']=$id;
			$arr=$m->field('count')->where($where)->find();
			$arr['count']++;
			$m->count=$arr['count'];
			$row=$m->where($where)->save();
			if($row){
					$this->success('投票成功',U('Show/ushow'));
				}
				else{
					$this->error('投票失败');
			}
	}
}