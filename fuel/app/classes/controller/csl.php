<?php

class Controller_Csl extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = '昌顺物流 | 江西昌顺物流有限公司 | 上海分公司 - 官方网站';
		$this->template->content = View::forge('csl/index', $data);
	}

}
