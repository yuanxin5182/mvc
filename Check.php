<?php

namespace app\admin\behavior;

class Check
{
	public function run(&$params)
	{
		// 行为逻辑
		$scene = $params['scene'];
		return $this->$scene($params);
	}


	public function pwd($params)
	{
		$map['password'] = encrypt_pwd($params['spassword']);
		$map['id'] = '13';
		$re = Db('user_admin')->field('id')->where($map)->find();
		return empty($re) ? false : true ;
	}
}