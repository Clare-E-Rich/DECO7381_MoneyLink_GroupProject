<?php

class testController extends BaseController {
	public function passTwo() {
		$data1 = array (
				'name'=> 'name1'
			);
		$data2 =array (
				'name2'=>'name2'
			);
		return View::make('testTwo',compact('data1', 'data2'));
	}
}
