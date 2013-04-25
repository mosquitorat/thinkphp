<?php
/**
 * 接口 抽象类
 * @author   mos <moswh07@gmail.com>
 */


// TODO: 此类负责 把 API 里所有 方法（D, W, M 等） 作用域 确定为 当前应用，或者为 系统本身
 
abstract class Api {
	private $app = '';
	
	public function __construct(){
		
	}
}