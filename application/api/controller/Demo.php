<?php

namespace app\api\controller;

use think\Controller;
use think\Request;

class Demo {

	public function test()
	{
		$json = $data = [];
		$data = Request::instance()->param();

		if(isset($data) && !empty($data['content'])) {
			$json = ['code'=>200, 'msg'=>'success'];
		}else {
			$json = ['code'=>400, 'msg'=>'failed'];
		}

		return json_encode($json);
	}
}