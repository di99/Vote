<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
			$this->display();
	}
	public function doLogin(){
			//接受值
			//判断用户在数据库中是否存在
			//存在 允许登录
			//不存在 显示错误信息
			$username=$_POST['username'];
			$password=$_POST['password'];
		
			$user=M('User');
			$where['username']=$username;
			$where['password']=$password;
			$arr=$user->field('id')->where($where)->find();
			
			if($arr){
					$_SESSION['username']=$username;
					$_SESSION['id']=$arr['id'];
					
					$this->success('用户登录成功',U('Show/show'));
			}else{
					$this->error('用户名或密码错误');
			}
		}
}